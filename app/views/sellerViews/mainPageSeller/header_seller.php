<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1, shrink-to-fit=no" name="viewport">
    <meta name="description" content="Qbdigitals - Seller Panel Dashboard"/>
    <meta name="author" content="Qbdigitals Technologies Private Limited" />
    <meta name="keywords" content="admin,dashboard,panel"/>

    <!-- Favicon -->
    <link rel="icon" href="<?=public_url('images/brand/apple-icon-180x180.png')?>" type="image/x-icon2" />

    <!-- Title -->
    <title>QBDigitals | Seller</title>

    <!-- Bootstrap css-->
    <link id="style" href="<?=public_url('plugins/bootstrap/css/bootstrap.min.css')?>'" rel="stylesheet" />

    <!-- Icons css-->
    <link href="<?=public_url('plugins/web-fonts/icons.css')?>" rel="stylesheet" />
    <link href="<?=public_url('plugins/web-fonts/font-awesome/font-awesome.min.css')?>" rel="stylesheet">
    <link href="<?=public_url('plugins/web-fonts/plugin.css')?>" rel="stylesheet" />

    <link href="<?=public_url('plugins/datatable/css/dataTables.bootstrap5.css')?>" rel="stylesheet">
    <link href="<?=public_url('plugins/datatable/css/buttons.bootstrap5.min.css')?>." rel="stylesheet">
    <link href="<?=public_url('plugins/datatable/css/responsive.bootstrap5.css')?>" rel="stylesheet">

    <!-- Style css-->
    <link href="<?=public_url('css/style.css')?>" rel="stylesheet">

    <!-- INTERNAL COLOR PICKER css-->
    <link href="<?=public_url('plugins/pickr-master/themes/classic.min.css')?>" rel="stylesheet" />
    <link href="<?=public_url('plugins/pickr-master/themes/monolith.min.css')?>" rel="stylesheet" />
    <link href="<?=public_url('plugins/pickr-master/themes/nano.min.css')?>" rel="stylesheet" />  <!-- Select2 css -->
    <link href="<?=public_url('plugins/select2/css/select2.min.css')?>" rel="stylesheet">

    <!-- Mutipleselect css-->
    <link rel="stylesheet" href="<?=public_url('plugins/multipleselect/multiple-select.css')?>"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.1/css/bootstrap-select.css" />

    <!--Bootstrap-datepicker css-->
    <link rel="stylesheet" href="<?=public_url('plugins/bootstrap-datepicker/bootstrap-datepicker.css')?>">

    <!-- Internal Datetimepicker-slider css -->
    <link href="<?=public_url('plugins/amazeui-datetimepicker/css/amazeui.datetimepicker.css')?>" rel="stylesheet">

    <!-- Internal Specturm-color picker css-->
    <link href="<?=public_url('plugins/spectrum-colorpicker/spectrum.css')?>" rel="stylesheet">

    <!-- Internal Ion.rangeslider css-->
    <link href="<?=public_url('plugins/ion-rangeslider/css/ion.rangeSlider.css')?>" rel="stylesheet">
    <link href="<?=public_url('plugins/ion-rangeslider/css/ion.rangeSlider.skinFlat.css')?>" rel="stylesheet">
</head>
<style>
    #loader {
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background-color: rgba(0, 0, 0, 0.5);
        display: flex;
        align-items: center;
        justify-content: center;
        z-index: 9999;
    }

    .loader-content {
        display: flex;
        flex-direction: column;
        align-items: center;
        color: #ffffff;
    }

    .loader-spinner {
        border: 4px solid #ffffff;
        border-top: 4px solid transparent;
        border-radius: 50%;
        width: 40px;
        height: 40px;
        animation: spin 1s linear infinite;
    }

    .loader-text {
        margin-top: 10px;
    }

    @keyframes spin {
        0% {
            transform: rotate(0deg);
        }
        100% {
            transform: rotate(360deg);
        }
    }
</style>
<div id="loader">
    <div class="loader-content">
        <div class="loader-spinner"></div>
        <div class="loader-text">Loading...</div>
    </div>
</div>
