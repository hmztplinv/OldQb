<?php
if(get('delete')){
    Operation::delete_todo(get('id'));
    if(get('todotype')==1){
        header("Location: ".operation_url('to_do_list'));

    }
    elseif(get('todotype')==2){
        header("Location: ".operation_url('haju'));

    }
    elseif(get('todotype')==3){
        header("Location: ".operation_url('hyl_vabene'));

    }
    elseif(get('todotype')==4){
        header("Location: ".operation_url('quad_vbn03'));

    }
    elseif(get('todotype')==5){
        header("Location: ".operation_url('quad_vbn04'));

    }
}
require oview('todolist_update');
