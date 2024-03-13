<?php
if(post('submit')){
    $port=Navlun::InsertPort(post('port'));
   if($port==1){
       $message['suc'] = "Başarılı şekilde eklenmiştir.";
       $message['redirects'] = "/admin/ports";
   }
   else{
       $message['er'] = "Bir hatayla karşılaşıldı lütfen tekrar deneyiniz.";
       $message['redirects'] = "/admin/ports";
   }
}
if(post('edit')){
    $port=Navlun::get_ports_byid(post('edit'));
}
if(post('editz')){

    $id=['name'=>post('edits'),
        'id'=>post('editz')];
$port=Navlun::update_ports($id);

    if($port==1){
        $message['suc'] = "Başarılı şekilde güncellendi.";
        $message['redirects'] = "/admin/ports";
    }
    else{
        $message['er'] = "Bir hatayla karşılaşıldı lütfen tekrar deneyiniz.";
        $message['redirects'] = "/admin/ports";
    }
}
if(post('delete')){
 $id=post('delete');

 $port=Navlun::update_ports_status($id);

    if($port==1){
        $message['suc'] = "Başarılı şekilde silinmiştir.";
        $message['redirects'] = "/admin/ports";
    }
    else{
        $message['er'] = "Bir hatayla karşılaşıldı lütfen tekrar deneyiniz.";
        $message['redirects'] = "/admin/ports";
    }

}
require aview('ports_add');