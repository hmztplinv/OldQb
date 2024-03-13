<?php
if(post('add')){
    $productionprogramadd=[
        'start_date'=>date('d/m/Y H:i:s',strtotime(post('start_date'))),
        'finish_date'=>date('d/m/Y H:i:s',strtotime(post('finish_date'))),
        'production_code'=>post('production_code'),
        'description'=>post('description'),
        'ihr'=>post('ihr'),
        'product_code'=>post('product_code'),
        'product_name'=>post('product_Name'),
        'ean'=>post('ean'),
        'warehouse'=>post('warehouse'),
        'box'=>post('box'),
        'info'=>post('info'),
        'created_date'=>date('d/m/Y H:i:s',time()),
        'updated_date'=>date('d/m/Y H:i:s',time()),
        'start_time'=>post('start_time'),
        'finish_time'=>post('finish_time'),
        'bant_name'=>post('bant_name'),
        'product_origin'=>post('product_origin')
    ];
    $res=Seller::add_product_program($productionprogramadd);
    if ($res==1){
        $message['suc'] = "The product program was successfully completed";
        $message['redirects'] = "/admin/tape_program";
    }
    else{
        $message['err'] = "a problem has been encountered";
        $message['redirects'] = "/admin/tape_program";
    }



}
require aview('production_program_details');
