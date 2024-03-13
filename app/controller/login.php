<?php

if (post('login')){
    $message = User::login(post('email'),post('password'));

}

if(get('id')){
    User::verify_mail(base64_decode(get('id')));
    header("location:".site_url('login'));
}


require view('login');

