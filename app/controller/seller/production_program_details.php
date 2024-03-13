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
        'bant_name'=>post('bant_name')
    ];
    $res=Seller::add_product_program($productionprogramadd);
    header("Location: ".seller_url('production_program'));

}
require sview('production_program_details');
