<?php
if(get('id')){
    if(get('delete')){
        Seller::passive_production_program_by_id(get('id'));
        header("Location: ".admin_url('tape_program'));
    }
    $program=Seller::get_program_by_id(get('id'));
    if(post('update')){
        $productionprogramupdate=[
            'id'=>post('id'),
            'start_date'=>date("d/m/Y H:i:s", strtotime(post('start_date'))),
            'finish_date'=>date("d/m/Y H:i:s", strtotime(post('finish_date'))),
            'production_code'=>post('production_code'),
            'description'=>post('description'),
            'ihr'=>post('ihr'),
            'product_name'=>post('product_Name'),
            'product_code'=>post('product_code'),
            'ean'=>post('ean'),
            'warehouse'=>post('warehouse'),
            'box'=>post('box'),
            'info'=>post('info'),
            'updated_date'=>date('d/m/Y H:i:s',time()),
            'finish_time'=>post('finish_time'),
            'start_time'=>post('start_time'),
            'bantName'=>post('bant_name'),
            'product_origin'=>post('product_origin')
        ];
        $result=Seller::update_production_program($productionprogramupdate);

        header("Location: ".admin_url('tape_program'));
    }
}
else{
    header("Location: ".admin_url('tape_program'));

}

require aview('production_program_update');
