<?php
if (get('id')){

    if ( get('deleteid')){
        File::delete_images_by_id(get('deleteid'));
        header('location:'.admin_url('product_details').'?id='.get('id'));

    }
    $product=Products::get_product_by_just_id(get('id'));

    if (post('add_photo')){

        if ($_FILES['upload']['name'][0] != "") {
            $fileResponse = file::files_upload(post('product_id'), $_FILES['upload'], "public/product/img/");
            header('location:'.admin_url('product_details').'?id='.get('id'));
        }

    }

    $photos=File::get_images_by_product_id(get('id'));

    $documents=File::get_docs_by_product_id(get('id'));
    if (post('add_document')){
        if ($_FILES['upload']['name'][0] != "") {
            $fileResponse = file::docs_upload(post('product_id'), $_FILES['upload'], "public/product/docs/");
            header('location:'.admin_url('product_details').'?id='.get('id'));
        }
    }
}
else{
}

require aview('product_details');