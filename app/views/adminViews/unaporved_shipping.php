<?php require 'mainPageAdmin/header_admin.php'?>
<div class="content-wrap">
    <div class="main">
        <div class="container-fluid">
            <section id="main-content">
                <div class="row mt-5">
                    <div class="col-lg-12">
                        <div class="card animate__animated animate__fadeInLeft">
                            <div class="card-header card-header-border-bottom bg-white">
                                <h3>Unapproved Shipping</h3>
                            </div>

                            <div class="p-5 mt-5">
                                <ul class="nav nav-tabs ">
                                    <a class="nav-link       " aria-current="page" href="freight"><p class="text-dark"><b>Freight</b></p></a>
                                    <li class="nav-item">
                                        <a class="nav-link  " aria-current="page" href="aporved_shipping"><p class="text-dark"><b>Aporved Shipping</b></p></a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link active   " aria-current="page" href="unaporved_shipping"><p class="text-dark"><b>Unaproved Shipping</b></p></a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link  " aria-current="page" href="delivered_shipping"><p class="text-dark"><b>Delivered Shipping</b></p></a>
                                    </li>
                                </ul>
                                <div style="    border: 1px;
                                border-style: solid;
                                border-radius: 5px;
                                margin-bottom: 5px;
                                border-color: #00000026;" class="row">
                                    <div class="col-sm-3 mb-2">
                                        Company Name
                                        <select data-live-search=true class="selectpicker form-control" name="" id="companyname">
                                            <option selected disabled value="">Company Name</option>
                                            <?php foreach ($companyname as $size): ?>
                                                <option value="<?= $size?>"><?= $size?></option>
                                            <?php endforeach; ?>
                                        </select>
                                    </div>
                                    <div class="col-sm-3 mb-2">
                                        Currency
                                        <select id="currency" class="selectpicker form-control" data-live-search=true name="currency">
                                            <option selected disabled value=""> Currency</option>
                                            <?php foreach ($currency as $name): ?>
                                                <option value="<?= $name?>"><?= $name ?></option>
                                            <?php endforeach; ?>
                                        </select>
                                    </div>

                                    <div class="col-sm-3 mb-2">
                                        Real Firm
                                        <select id="realfirm" class="selectpicker form-control" data-live-search=true name="realfirm">
                                            <option selected disabled value=""> Real Firm</option>
                                            <?php foreach ($realfirm as $name): ?>
                                                <option value="<?= $name ?>"><?= $name ?></option>
                                            <?php endforeach; ?>
                                        </select>
                                    </div>
                                    <div class="col-sm-6 mb-8">
                                        <button type="submit" name="" onclick="reset()" value="" class="btn btn-outline-secondary btn-sm" style="margin-top:27px" ><b>Reset</b></button>

                                    </div>


                                </div>

                                <div class="table-responsive">
                                    <table id="example" class="display" style="width:100%">
                                        <thead>
                                        <tr>
                                            <th class="text-custom text-center">Company</th>
                                            <th class="text-custom text-center">Currency</th>
                                            <th class="text-custom text-center">Real Firm</th>

                                        </tr>
                                        </thead>
                                        <tbody>
                                        <?php foreach ($navluns as $item):?>
                                            <tr>

                                                <td align="center"><?=$item['companyName']?></td>
                                                <td align="center"><?=$item['currency']?></td>
                                                <td align="center"><?=$item['realFirm']?></td>

                                            </tr>
                                        <?php endforeach;?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <!-- /# card -->
                        </div>
                        <!-- /# column -->
                    </div>
                    <?php require 'mainPageAdmin/footer_admin.php'?>
                    <script>

                        var example=$('#example').DataTable({
                            scrollX: '200px',
                            scrollY: '500px',
                            scrollCollapse: true,
                            paging: false,
                            dom: 'Bfrtip',
                            buttons: [{
                                extend: 'excelHtml5',
                                title: 'Unapproved_Shipping'
                            },
                                {
                                    extend: 'pdfHtml5',
                                    title: 'Unapproved_Shipping',},
                                'copy',   'print'
                            ]
                        });
                    </script>
                    <script>
                        function reset(){
                            document.getElementById("companyname").options[0].selected="selected";
                            document.getElementById("currency").options[0].selected="selected";
                            document.getElementById("realfirm").options[0].selected="selected";
                            example.columns(0).search("").draw();
                            example.columns(1).search("").draw();
                            example.columns(2).search("").draw();
                            $('.selectpicker').selectpicker('refresh');
                        }
                        document.getElementById("companyname").onchange=function () {
                            example.columns(0).search(document.getElementById("companyname").value).draw();
                        }
                        document.getElementById("currency").onchange=function () {
                            example.columns(1).search(document.getElementById("currency").value).draw();
                        }
                        document.getElementById("realfirm").onchange=function () {
                            example.columns(2).search(document.getElementById("realfirm").value).draw();
                        }
                    </script>
                    <script>
                        document.querySelector("#sweet").onclick = function () {
                            swal("Yükleme Onaylandı !!", "", "success");
                        };
                        document.querySelector("#sweet2").onclick = function () {
                            swal("Yükleme Onaylandı !!", "", "success");
                        };
                        document.querySelector("#sweet3").onclick = function () {
                            swal("Yükleme Onaylandı !!", "", "success");
                        };
                        document.querySelector("#sweet4").onclick = function () {
                            swal("Yükleme Onaylandı !!", "", "success");
                        };
                        document.querySelector("#sweet5").onclick = function () {
                            swal("Yükleme Onaylandı !!", "", "success");
                        };
                        document.querySelector("#sweet6").onclick = function () {
                            swal("Yükleme Onaylandı !!", "", "success");
                        };
                        document.querySelector("#sweet7").onclick = function () {
                            swal("Yükleme Onaylandı !!", "", "success");
                        };
                        document.querySelector("#sweet8").onclick = function () {
                            swal("Yükleme Onaylandı !!", "", "success");
                        };
                        document.querySelector("#sweet9").onclick = function () {
                            swal("Yükleme Onaylandı !!", "", "success");
                        };
                        document.querySelector("#sweet10").onclick = function () {
                            swal("Yükleme Onaylandı !!", "", "success");
                        };
                        document.querySelector("#sweet11").onclick = function () {
                            swal("Yükleme Onaylandı !!", "", "success");
                        };
                        document.querySelector("#sweet12").onclick = function () {
                            swal("Yükleme Onaylandı !!", "", "success");
                        };
                        document.querySelector("#sweet13").onclick = function () {
                            swal("Yükleme Onaylandı !!", "", "success");
                        };
                        document.querySelector("#sweet14").onclick = function () {
                            swal("Yükleme Onaylandı !!", "", "success");
                        };
                        document.querySelector("#sweet15").onclick = function () {
                            swal("Yükleme Onaylandı !!", "", "success");
                        };
                        document.querySelector("#sweet16").onclick = function () {
                            swal("Yükleme Onaylandı !!", "", "success");
                        };
                        document.querySelector("#sweet17").onclick = function () {
                            swal("Yükleme Onaylandı !!", "", "success");
                        };
                        document.querySelector("#sweet18").onclick = function () {
                            swal("Yükleme Onaylandı !!", "", "success");
                        };
                        document.querySelector("#sweet19").onclick = function () {
                            swal("Yükleme Onaylandı !!", "", "success");
                        };
                    </script>
                    </body>
                    </html>
