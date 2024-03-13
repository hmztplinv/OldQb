<?php
$operations=admin::get_operations_admin();

$operationsuser=admin::get_operation_admin_dbuser();
$operationscountry=admin::get_country();

if (post('deletecountry')){
    $delete=admin::delete_country_operation(post('deletecountry'));

    if ($delete==1){
        $message['suc'] = "Successfully deleted";
        $message['redirects'] = "admin/user_operation";
    }
    else{
        $message['err'] = "Hata ile karşılaşıldı";
        $message['redirects'] = "admin/user_operation";
    }
}
if (post('create')){
    $createoperation=[
        'email'=>post('email'),
        'name'=>post('name'),
        'phone'=>post('phone'),
        'password'=>md5(post('password')),
        'created_at' => date('d/m/Y H:i:s',time()),
        'updated_at' => date('d/m/Y H:i:s',time())

    ];

    $sorgu=admin::user_chech(post('email'));

    if (!empty($sorgu) ){
        $message['err'] = "Kullanıcı hazırda bulunuyor";
        $message['redirects'] = "admin/user_operation";
    }
    else{
        $create=admin::create_operation($createoperation);
        if ($create==1){
            $message['suc'] = "Başarıyla kayıt gerçekleştirildi.";
            $message['redirects'] = "admin/user_operation";
        }
        else{
            $message['err'] = "Kayıt yapılırken bir hatayla karşılaştınız.";
            $message['redirects'] = "admin/user_operation";
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
            'countryId' => $countryId,
            'countryName' => $countryname['countryName'],
            'operationExecutiveName' => $sellername['uname'],
            'userId' => $user
        );

        $check=admin::get_check_country_operation($chekcountry);

        if (!empty($check)){
            $message['err'] = "This user is assigned from the countries you have selected";
            $message['redirects'] = "admin/user_operation";
        }
        else{
            $createcountrybyuser = admin::create_country_by_operation($formattedData);


            if($createcountrybyuser==1){
                $message['suc'] = "Başarıyla kayıt gerçekleştirildi.";
                $message['redirects'] = "admin/user_operation";
            }
            else{
                $message['err'] = "Kayıt yapılırken bir hatayla karşılaştınız.";
                $message['redirects'] = "admin/user_operation";
            }
        }
    }


}

// Ana diziyi işleyebilirsiniz

require aview('user_operation');
