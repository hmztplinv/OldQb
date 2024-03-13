<?php



$productionprogram=Seller::get_production_program();
$montlysqm=Order::get_montly_sqm_seller();
$allMonths = range(1, 12);
$montlyorder=Order::get_montly_total_order_seller();
$monthlyOrderData = Order::get_montly_total_order_seller();

// Elde edilen sonuçları içeren bir dizi oluşturuyoruz
$monthlyOrderArray = [];
foreach ($monthlyOrderData as $row) {
    $monthlyOrderArray[$row['orderMonth']] = $row['monthly_order_count'];
}

// Eksik olan ayları 0 olarak ekleyerek tam bir aylık diziyi oluşturuyoruz
$resultArray = [];
for ($i = 1; $i <= 12; $i++) {
    $resultArray[] = isset($monthlyOrderArray[$i]) ? $monthlyOrderArray[$i] : "0";
}

// Sonuç dizisini birleştirerek yan yana getiriyoruz
$totalordermontly = implode(", ", $resultArray);




// Elde edilen sonuçları içeren bir dizi oluşturuyoruz
$monthlySqmArray = [];
foreach ($montlysqm as $row) {
    $monthlySqmArray[$row['orderMonth']] = $row['monthly_total_sqm'];
}

// Eksik olan ayları 0 olarak ekleyerek tam bir aylık diziyi oluşturuyoruz
$resultArray = [];
foreach ($allMonths as $month) {
    $resultArray[] = isset($monthlySqmArray[$month]) ? $monthlySqmArray[$month] : "0.00";
}

// Sonuç dizisini birleştirerek yan yana getiriyoruz
$resultString = implode(", ", $resultArray);


if(post('notcount')){
    echo Notification::get_notification_count()['count'];
    die();
}

$customerscount=Seller::get_customers_by_seller_user_id();
$customerscount=count($customerscount);

$totalorderscount=Order::orders_by_seller_user_id();
$totalorderscount=count($totalorderscount);
$totalactiveorderscount=Order::orders_in_progress_by_sellers_id();
$totalactiveorderscount=count($totalactiveorderscount);
$totaldeliveredorderscount=Order::orders_completed_by_sellers_id();
$totaldeliveredorderscount=count($totaldeliveredorderscount);
$productionprograms=Seller::get_production_program_top_3();

require sview('index');
