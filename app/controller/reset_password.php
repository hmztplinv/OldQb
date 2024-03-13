<?php
if(get('userid') && get('validator') && get('expires')){
    $user=User::get_reset_password_infos(get('userid'));
    $email=$user['email'];
    $token=$user['token'];
}
else{
    if(post('save')){

        if(post('validator')==post('token')){
            $expires=date("U");
            if(post('expires')>$expires){
                if(post('pass')==post('repass')){
                    User::updatePwd(post('email'),post('pass'));
                    $message['suc']="Şifre Değiştirme İşlemi Başarılı. Lütfen Giriş Yapınız.";
                    $message['redirects']="login";
                }
                else{
                    $message['err']="Şifre Değiştirme İşlemi Hatalı. Lütfen Tekrar Giriş Yağınız.";
                    $message['redirects']="login";
                }
            }
            else{
                $message['err']="Link Zaman Aşımına Uğradı. Lütfen Tekrar Deneyiniz.";
                $message['redirects']="login";
            }
        }
        else{
            $message['err']="Hatalı İşlem. Tekrar Deneyiniz.";
            $message['redirects']="login";
        }
    }
}

require view('reset_password');
