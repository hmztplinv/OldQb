<?php
if(get('id')!=0){
$todo=Operation::get_todo(get('id'));
}

if(post('update')){
    $todoupdate=[
        'productPlaning'=> post('productPlaning'),
        'customerNotification'=>post('customerNotification'),
        'customsInstruction'=>post('customsInstruction'),
        'updatedPriceListShare'=>post('updatedPriceListShare'),
        'informCustomer'=>post('informCustomer'),
        'circulationDocumentation'=>post('circulationDocumentation'),
        'customerInvoice'=>post('customerInvoice'),
        'reservationConfirmation'=>post('reservationConfirmation'),
        'loadingDocumentationSharingWithCustomer'=>post('loadingDocumentationSharingWithCustomer'),
        'doesProformaTook'=>post('doesProformaTook'),
        'doesShipmentInfoShared'=>post('doesShipmentInfoShared'),
        'ydgProcess'=>post('ydgProcess'),
        'payment'=>post('payment'),
        'factoryNotification'=>post('factoryNotification'),
        'container'=>post('container'),
        'productionNotification'=>post('productionNotification'),
        'billOfLading'=>post('billOfLading'),
        'paymentInAccount'=>post('paymentInAccount'),
        'warehouseControl'=>post('warehouseControl'),
        'status'=>1,
        'lastChangedUserId'=>session('user_id'),
        'lastChangedDate'=>date('d/m/Y H:i:s',time()),
        'id'=>post('todoid'),
        'todoName'=>post('todoName')
    ];
    Operation::update_todo($todoupdate);
    header("Location: ".operation_url('to_do_list'));
}
if(post('add')){
$todonew=[
    'productPlaning'=> post('productPlaning'),
    'customerNotification'=>post('customerNotification'),
    'customsInstruction'=>post('customsInstruction'),
    'updatedPriceListShare'=>post('updatedPriceListShare'),
    'informCustomer'=>post('informCustomer'),
    'circulationDocumentation'=>post('circulationDocumentation'),
    'customerInvoice'=>post('customerInvoice'),
    'reservationConfirmation'=>post('reservationConfirmation'),
    'loadingDocumentationSharingWithCustomer'=>post('loadingDocumentationSharingWithCustomer'),
    'doesProformaTook'=>post('doesProformaTook'),
    'doesShipmentInfoShared'=>post('doesShipmentInfoShared'),
    'ydgProcess'=>post('ydgProcess'),
    'payment'=>post('payment'),
    'factoryNotification'=>post('factoryNotification'),
    'container'=>post('container'),
    'productionNotification'=>post('productionNotification'),
    'billOfLading'=>post('billOfLading'),
    'paymentInAccount'=>post('paymentInAccount'),
    'warehouseControl'=>post('warehouseControl'),
    'status'=>1,
    'lastChangedUserId'=>session('user_id'),
    'lastChangedDate'=>date('d/m/Y H:i:s',time()),
    'todotype'=>post('todotype'),
    'todoName'=>post('todoName')
];
Operation::add_todo($todonew);
header("Location: ".operation_url('to_do_list'));
}
require oview('todolist_details');
