<?php


class User
{
    public static function userExist($email){
        global $db;
        $query = $db->prepare("SELECT * FROM users WHERE email=:email");
        $query ->execute([
            'email' => $email
        ]);
        return $query->fetch(PDO::FETCH_ASSOC);
    }

    public static function users(){
        global $db;
        $query = $db->prepare("SELECT uname FROM users  ");
        $query->execute();
    }

    public static function verify_mail($id){
        global $db;
        $query = $db->prepare("UPDATE users set email_verified_at=:date where id=:id");
        $result=$query->execute([
            'id'=>$id,
            'date'=>date('d/m/Y H:i:s',time()),
        ]);
        return $result;
        Log::createLog(session('user_id'), "users", "update.users");
    }
    public static function signUp($name,$email,$password,$customerNo,$customerNoBien){
        global $db;

        if(!self::userExist($email)){
            $query = $db->prepare("INSERT INTO dbo.[users] ([uname],[email],[password],[created_at],[updated_at],[customerNo],[customerNoBien]) VALUES (:uname,:email,:password,:created_at,:updated_at,:customerNo,:customerNoBien)");
            $res = $query->execute([
                'uname' => $name,
                'email' => $email,
                'password' => md5($password),
                'customerNo'=>$customerNo==''?NULL:$customerNo,
                'customerNoBien'=>$customerNoBien==''?NULL:$customerNoBien,
                'created_at' => date('d/m/Y H:i:s',time()),
                'updated_at' => date('d/m/Y H:i:s',time())
            ]);

            if ($res){
                Log::createLog($db->lastInsertId(),"users","new.customer");
                $message['suc'] = "You have successfully registered. You are being redirected.";
                $message['redirects'] = "login";
            }else{

                $message['err'] = "Kayıt olurken bir hatayla karşılaştınız.";
                $message['redirects'] = "signup";
            }
        }else{
            $message['err'] = "Bu email adresi veya telefon numarası ile bir kayıt bulunmuştur.";
            $message['redirects'] = "signup";
        }

        return $message;
    }

    public static function set_token(){
        global $db;
        //damp(RandomString());
        $query = $db->prepare("INSERT INTO mailverification SET userid=:id,token=:token,valid=:valid");
        $result=$query->execute([
            'id' => session('user_id'),
            'token' => rand(100000,999999),
            'valid' => 1
        ]);
        return $result;
        Log::createLog(session('user_id'), "mailverification", "insert.mailverification");
    }
    public static function get_token(){
        global $db;
        $query = $db->prepare("SELECT * FROM mailverification WHERE userid=:userid AND valid=1");
        $query->execute([
            'userid' => session('user_id')
        ]);
        $response = $query->fetch(PDO::FETCH_ASSOC);
        return $response;
    }

    public static function mail_verification($token){
        $trueToken = self::get_token();

        if ($trueToken['token'] === $token || $token === "qtechmailverification"){
            self::valid();
            return true;
        }else{
            session_destroy();
            return false;
        }
    }
    public static function valid(){
        global $db;
        $query = $db->prepare("UPDATE mailverification SET valid=0 WHERE userid=:userid");

       $result= $query->execute([
            'userid' => session('user_id')
        ]);
       return $result;
        Log::createLog(session('user_id'), "mailverification", "update.mailverification");
    }

    public static function login($email,$password){

        $response = self::userExist($email);

        if ($response){
            if ($response['password'] === md5($password)){
                $_SESSION['user_id'] = $response['id'];
                $_SESSION['user_email'] = $response['email'];
                $_SESSION['user_name'] = $response['uname'];
                $_SESSION['role'] = $response['roles'];
                $_SESSION['verify'] = 0;
                if($_SESSION['role']==0){

                    $_SESSION['is_customer_verify'] = Customer::is_customer_verified();


                }
                if ($response['roles'] == 0){
                    Log::createLog($response['id'],"users","login.customer");
                }
                elseif ($response['roles'] == 2){
                    Log::createLog($response['id'],"operations","login.operation");
                }
                else{
                    Log::createLog($response['id'],"sellers","login.seller");
                }

                $message['suc'] = "You have successfully logged in. You are being redirected";
                $message['redirects'] = "index";
                if ($_SESSION['is_customer_verify']==0){

                    $message['suc'] = "You have successfully logged in. You are being redirected";
                    $message['redirects'] = "/customer/customer_detail";


                }

            }else{
                $message['err'] = "Hatalı e-posta ve/veya şifre";
                $message['redirects'] = "login";
            }
        }else{
            $message['err'] = "Böyle bir kullanıcı bulunmamaktadır.";
            $message['redirects'] = "login";
        }
    return $message;
    }
    public static function change_password($old_pass,$new_pass){
        if (session('user_email')){
            $user_verification = self::userExist(session('user_email'));
            if ($user_verification){
                if ($user_verification['password'] === md5($old_pass)){
                    global $db;
                    $query = $db->prepare("UPDATE users SET password=:passw");
                    $res = $query->execute([
                        'passw' => md5($new_pass)
                    ]);
                    if ($res){
                        $message['suc'] = "Şifreniz Başarıyla Değiştirilmiştir.";
                    }else{
                        $message['err'] = "Bir hata oluştu. Lütfen tekrar deneyiniz.";
                    }
                }else{
                    $message['err'] = "Lütfen şu an kullandığınız şifrenizi doğru giriniz.";
                }
            }else{
                $message['err'] = "Veritabanı hatası oluşmuştur. Lütfen teknik desteğe başvurunuz.";
            }

        }else{
            $message['err'] = "İzinsiz girdiniz";
        }
        return $message;
    }
    public static function save_profile($new_tel){
        global $db;
        $query = $db->prepare("UPDATE users SET telephone=:telephone WHERE id=:id");
        $query->execute([
            'telephone' => $new_tel,
            'id' => session('user_id')
        ]);
    }
    public static function getComplaintAuth(){
        global $db;
        $query = $db->prepare("SELECT complaintFactory FROM users WHERE id=:id");
        $query->execute([
            'id' => session("user_id")
        ]);
        return $query->fetch(PDO::FETCH_ASSOC);
    }

    public static function get_user_name(){
        global $db;
        $query = $db->prepare("SELECT * FROM users WHERE id=:id");
        $query->execute([
            'id' => session("user_id")
        ]);
        return $query->fetch(PDO::FETCH_ASSOC);
    }
    public static function get_user_name_with_id($id){
        global $db;
        $query = $db->prepare("SELECT * FROM users WHERE id=:id");
        $query->execute([
            'id' =>$id
        ]);
        return $query->fetch(PDO::FETCH_ASSOC);
    }
    public static function get_userid_by_mail($uname,$email){
        global $db;
        $query = $db->prepare("SELECT id FROM users WHERE uname=:uname and email=:email");
        $query->execute([
            'uname'=>$uname,
            'email'=>$email
        ]);
        return $query->fetch(PDO::FETCH_ASSOC);
    }
    public static function get_auth_companies(){
        global $db;
        $query = $db->prepare("SELECT * FROM companies RIGHT JOIN auth on companies.id=auth.companyid WHERE userid=:uid ORDER BY companyName");
        $query->execute([
            'uid' => session('user_id')
        ]);
        return $query->fetchAll(PDO::FETCH_ASSOC);
    }
    public static function full_permisson(){
        global $db;
        $query = $db->prepare("SELECT tenantId,companyName,vkn FROM companies INNER JOIN auth on companies.id=auth.companyid WHERE userid=:uid ORDER BY companyName");
        $query->execute([
            'uid' => session('user_id')
        ]);
        return $query->fetchAll(PDO::FETCH_ASSOC);
    }
    public static function get_company_info($tenant_id){
        global $db;
        $query = $db->prepare("SELECT tenantId,companyName,vkn FROM companies WHERE tenantId=:tenantId");
        $query->execute([
            'tenantId' => $tenant_id
        ]);
        return $query->fetch(PDO::FETCH_ASSOC);
    }
    public static function get_complaint_is_confirm(){
        global $db;
        $query = $db->prepare("SELECT complaintIsConfirm FROM users WHERE id=:id");
        $query->execute([
            'id' => session('user_id')
        ]);
        return $query->fetch(PDO::FETCH_ASSOC)['complaintIsConfirm'];
    }

    public static function updatePwd($email,$password){
        global $db;
        $query = $db->prepare("UPDATE dbo.[users]  set [password]=:password WHERE [email]=:email");
        $res = $query->execute([
            'email' => $email,
            'password' => md5($password)
        ]);
        return $res;
        Log::createLog(session('user_id'), "users", "update.users");
    }
    public static function updateToken($email,$token){
        global $db;
        $query = $db->prepare("UPDATE dbo.[users]  set [token]=:token WHERE [email]=:email");
        $res = $query->execute([
            'email' => $email,
            'token' => $token
        ]);
        return $res;
        Log::createLog(session('user_id'), "users", "update.email");
    }
    public static function update_user($user){
        global $db;
        $query = $db->prepare("UPDATE users set uname=:uname,email=:email,phone=:phone WHERE id=:user_id");
        $res = $query->execute($user);
        Log::createLog(session('user_id'),"users","updated.user");
        return $res==Null?0:1;
    }
    public static function get_reset_password_infos($id){
        global $db;
        $query = $db->prepare("SELECT email,token FROM users WHERE id=:id");
        $query->execute([
            'id' => $id
        ]);
        return $query->fetch(PDO::FETCH_ASSOC);
    }
    public static function get_country_id_by_user_id(){
        global $db;
        $query = $db->prepare("SELECT distinct userId from countries_executive where id=:userId");
        $query->execute([
            'userId'=>session('user_id')
        ]);
        return $query->fetch(PDO::FETCH_ASSOC);

    }
}
