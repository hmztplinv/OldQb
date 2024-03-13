<?php

if (isset($_SESSION['user_email'])){
    header("Location:".customer_url('index'));
}else{
    header("Location:".site_url('login'));
}