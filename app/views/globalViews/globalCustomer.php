<?php require 'GlobalPageOperation/header_operation.php'?>

<div class="content-wrap">
    <div class="main">
        <div class="container-fluid mb-5">
            <section id="main-content">
                <div class="row mt-3">
                    <div class="col-lg-12">
                        <div class="card animate__animated animate__fadeInLeft">
                            <div class="card-header card-header-border-bottom bg-white">
                                <h2>All Customers</h2>
                            </div>
                            <div class="p-5 mt-5">
                                <div style="    border: 1px;
                                border-style: solid;
                                border-radius: 5px;
                                margin-bottom: 5px;
                                border-color: #00000026;" class="row">
                                    <div class="col-sm-3 mb-2">
                                        Company Name
                                        <select id="unvan" class="selectpicker form-control" data-live-search=true name="unvan">
                                            <option value="01" selected>01</option>
                                            <option value="06" selected>06</option>
                                        </select>
                                    </div>
                                    <div class="col-sm-3 mb-2">
                                        Adress
                                        <select id="adres" class="selectpicker form-control" data-live-search=true name="adres">
                                            <option value="T3" selected>T3</option>
                                            <option value="S3" selected>S3</option>
                                            <option value="PK" selected>PK</option>
                                        </select>
                                    </div>

                                    <div class="col-sm-3 mb-2">
                                        Phone No
                                        <select id="telefon" class="selectpicker form-control" data-live-search=true name="telefon">
                                            <option value="00023933" selected>00023933</option>
                                            <option value="00039598" selected>00039598</option>
                                            <option value="00032345" selected>00032345</option>
                                        </select>
                                    </div>
                                    <div class="col-sm-6 mb-8">

                                        <button style="margin-top:27px" id="search" type="submit" name="insertproductform" class="btn btn-outline-secondary btn-sm"><b>Search</b></button>

                                    </div>


                                </div>
                                <div class="table-responsive">
                                    <table id="rejectedcostlist" class="display" style="width:100%">
                                        <thead>
                                        <tr>
                                            <th class="text-custom text-center">Company Name</th>
                                            <th class="text-custom text-center">Adress</th>
                                            <th class="text-custom text-center">Phone No</th>
                                            <th class="text-custom text-center">Tax No / T.C. No</th>
                                            <th class="text-custom text-center">E-Mail</th>
                                            <th class="text-custom text-center">Status</th>
                                        </tr>
                                        </thead>
                                        <tbody>



                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <!-- /# card -->
                        </div>
                        <!-- /# column -->
                    </div>
<?php require 'GlobalPageOperation/footer_operation.php'?>
