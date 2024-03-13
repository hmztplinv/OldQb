<?php
$sellers=admin::get_sellers_admin();

$sellersuser=admin::get_sellers_admin_dbuser();
$sellercountry=admin::get_country();
if (post('deletecountry')){
  $delete=admin::delete_country_seller(post('deletecountry'));

  if ($delete==1){
      $message['suc'] = "Successfully deleted";
      $message['redirects'] = "admin/user_seller";
  }
  else{
      $message['err'] = "Hata ile karşılaşıldı";
      $message['redirects'] = "admin/user_seller";
  }
}
if (post('create')){
$createseller=[
    'email'=>post('email'),
    'name'=>post('name'),
    'phone'=>post('phone'),
    'password'=>md5(post('password')),
    'created_at' => date('d/m/Y H:i:s',time()),
    'updated_at' => date('d/m/Y H:i:s',time())

];
$sorgu=admin::user_chech(post('email'));
if ($sorgu==1){
    $message['err'] = "Kullanıcı hazırda bulunuyor";
    $message['redirects'] = "admin/user_seller";
}
else{
    $create=admin::create_seller($createseller);
    if ($create==1){
        $message['suc'] = "Başarıyla kayıt gerçekleştirildi.";
        $message['redirects'] = "admin/user_seller";
    }
    else{
        $message['err'] = "Kayıt yapılırken bir hatayla karşılaştınız.";
        $message['redirects'] = "admin/user_seller";
    }
}

}
$dataArray = array();

if (post('country')) {
    $user = post('user');
    $countries = post('country');
    $sellername=admin::get_sellername(post('user'));


    foreach ($countries as $countryId) {
        $countryname=admin::get_countryname($countryId);

        $chekcountry = array(
            'userid' => $user,
            'countryid' => $countryId,

        );
        $formattedData = array(
            'userid' => $user,
            'countryid' => $countryId,
            'uname'=>$sellername['uname'],
            'country'=>$countryname['countryName']
        );

        $check=admin::get_check_country_seller($chekcountry);

       if (!empty($check)){
           $message['err'] = "This user is assigned from the countries you have selected";
           $message['redirects'] = "admin/user_seller";
       }
       else{
            $createcountrybyuser=admin::create_country_by_seller($formattedData);
            if($createcountrybyuser==1){
                $message['suc'] = "Başarıyla kayıt gerçekleştirildi.";
                $message['redirects'] = "admin/user_seller";
            }
            else{
                $message['err'] = "Kayıt yapılırken bir hatayla karşılaştınız.";
                $message['redirects'] = "admin/user_seller";
            }
       }
    }


}

// Ana diziyi işleyebilirsiniz

require aview('user_seller');
