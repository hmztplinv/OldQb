<?php require 'mainPageAdmin/header_admin.php'?>
<div class="content-wrap">
    <div class="main">
        <div class="container-fluid mb-5">
            <section id="main-content">
                <div class="row mt-3">
                    <div class="col-lg-12">
                        <div class="card animate__animated animate__fadeInLeft">
                            <div class="card-header card-header-border-bottom bg-white">
                                <h2>All Receivables</h2>
                            </div>
                            <div class="     ">
                                <ul class="nav nav-tabs ">
                                    <a class="nav-link      " aria-current="page" href="active_sales"><p class="text-dark"><b>Active Sales</b></p></a>
                                    <li class="nav-item">
                                        <a class="nav-link active " aria-current="page" href="all_receivables"><p class="text-dark"><b>All Receivables</b></p></a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link    " aria-current="page" href="overdue"><p class="text-dark"><b>Overdue</b></p></a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link  " aria-current="page" href="unexpired"><p class="text-dark"><b>Unexpired</b></p></a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link  " aria-current="page" href="paid_receivables"><p class="text-dark"><b>Paid Receivables</b></p></a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link  " aria-current="page" href="dhl"><p class="text-dark"><b>DHL</b></p></a>
                                    </li>
                                </ul>
                                <div class=" mt-1">
                                    <div style="    border: 1px;
                              border-style: solid;
                              border-radius: 5px;
                              margin-bottom: 5px;
                              border-color: #00000026;" class="row">
                                        <div class="col-sm-3 mb-2">
                                            <select data-live-search=true  title="Company" class="selectpicker" id="orderCompanySearch">
                                            </select>
                                        </div>
                                        <div class="col-sm-3 mb-2">
                                            <select data-live-search=true title="Country" class="selectpicker" id="orderSizeSearch">
                                            </select>
                                        </div>
                                        <div class="col-sm-3 mb-2">
                                            <select data-live-search=true title="Customer" class="selectpicker" id="orderSurfaceSearch">
                                            </select>
                                        </div>
                                        <div class="col-sm-3 mb-2"></div>


                                        <div class="col-sm-6 mb-8">
                                            <button type="submit" name="" onclick="reset()" value="" class="btn btn-outline-secondary btn-sm" style="margin-top:27px" ><b>Reset</b></button>

                                        </div>
                                    </div>
                                <div class="table-responsive">
                                    <table id="example" class="display" style="width:100%">
                                        <thead>
                                        <tr>
                                            <th class="text-custom text-center">Firma</th>
                                            <th class="text-custom text-center">Ülke</th>
                                            <th class="text-custom text-center">Müşteri</th>
                                            <th class="text-custom text-center">Limit Aşım</th>
                                            <th class="text-custom text-center">Temsilci</th>
                                            <th class="text-custom text-center">Müdür</th>
                                            <th class="text-custom text-center">Ödeme Tarihi</th>
                                            <th class="text-custom text-center">Açıklama</th>
                                            <th class="text-custom text-center">Açık Tutar</th>
                                            <th class="text-custom text-center">Vade Gün</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            <td align="center">01</td>
                                            <td align="center">T3</td>
                                            <td align="center">30X60 IMPERIAL GREY DECOR</td>
                                            <td align="center">30X60</td>
                                            <td align="center">DEKOR</td>
                                            <td align="center">STANDART</td>
                                            <td align="center">30X60 IMPERIAL GREY DECOR</td>
                                            <td align="center">30X60</td>
                                            <td align="center">DEKOR</td>
                                            <td align="center">STANDART</td>
                                        </tr>
                                        <tr>
                                            <td align="center">01</td>
                                            <td align="center">T3</td>
                                            <td align="center">30X60 IMPERIAL GREY DECOR</td>
                                            <td align="center">30X60</td>
                                            <td align="center">DEKOR</td>
                                            <td align="center">STANDART</td>
                                            <td align="center">30X60 IMPERIAL GREY DECOR</td>
                                            <td align="center">30X60</td>
                                            <td align="center">DEKOR</td>
                                            <td align="center">STANDART</td>
                                        </tr>
                                        <tr>
                                            <td align="center">01</td>
                                            <td align="center">T3</td>
                                            <td align="center">30X60 IMPERIAL GREY DECOR</td>
                                            <td align="center">30X60</td>
                                            <td align="center">DEKOR</td>
                                            <td align="center">STANDART</td>
                                            <td align="center">30X60 IMPERIAL GREY DECOR</td>
                                            <td align="center">30X60</td>
                                            <td align="center">DEKOR</td>
                                            <td align="center">STANDART</td>
                                        </tr>
                                        <tr>
                                            <td align="center">01</td>
                                            <td align="center">T3</td>
                                            <td align="center">30X60 IMPERIAL GREY DECOR</td>
                                            <td align="center">30X60</td>
                                            <td align="center">DEKOR</td>
                                            <td align="center">STANDART</td>
                                            <td align="center">30X60 IMPERIAL GREY DECOR</td>
                                            <td align="center">30X60</td>
                                            <td align="center">DEKOR</td>
                                            <td align="center">STANDART</td>
                                        </tr>
                                        <tr>
                                            <td align="center">01</td>
                                            <td align="center">T3</td>
                                            <td align="center">30X60 IMPERIAL GREY DECOR</td>
                                            <td align="center">30X60</td>
                                            <td align="center">DEKOR</td>
                                            <td align="center">STANDART</td>
                                            <td align="center">30X60 IMPERIAL GREY DECOR</td>
                                            <td align="center">30X60</td>
                                            <td align="center">DEKOR</td>
                                            <td align="center">STANDART</td>
                                        </tr>
                                        <tr>
                                            <td align="center">01</td>
                                            <td align="center">T3</td>
                                            <td align="center">30X60 IMPERIAL GREY DECOR</td>
                                            <td align="center">30X60</td>
                                            <td align="center">DEKOR</td>
                                            <td align="center">STANDART</td>
                                            <td align="center">30X60 IMPERIAL GREY DECOR</td>
                                            <td align="center">30X60</td>
                                            <td align="center">DEKOR</td>
                                            <td align="center">STANDART</td>
                                        </tr>
                                        <tr>
                                            <td align="center">01</td>
                                            <td align="center">T3</td>
                                            <td align="center">30X60 IMPERIAL GREY DECOR</td>
                                            <td align="center">30X60</td>
                                            <td align="center">DEKOR</td>
                                            <td align="center">STANDART</td>
                                            <td align="center">30X60 IMPERIAL GREY DECOR</td>
                                            <td align="center">30X60</td>
                                            <td align="center">DEKOR</td>
                                            <td align="center">STANDART</td>
                                        </tr>
                                        <tr>
                                            <td align="center">01</td>
                                            <td align="center">T3</td>
                                            <td align="center">30X60 IMPERIAL GREY DECOR</td>
                                            <td align="center">30X60</td>
                                            <td align="center">DEKOR</td>
                                            <td align="center">STANDART</td>
                                            <td align="center">30X60 IMPERIAL GREY DECOR</td>
                                            <td align="center">30X60</td>
                                            <td align="center">DEKOR</td>
                                            <td align="center">STANDART</td>
                                        </tr>
                                        <tr>
                                            <td align="center">01</td>
                                            <td align="center">T3</td>
                                            <td align="center">30X60 IMPERIAL GREY DECOR</td>
                                            <td align="center">30X60</td>
                                            <td align="center">DEKOR</td>
                                            <td align="center">STANDART</td>
                                            <td align="center">30X60 IMPERIAL GREY DECOR</td>
                                            <td align="center">30X60</td>
                                            <td align="center">DEKOR</td>
                                            <td align="center">STANDART</td>
                                        </tr>
                                        <tr>
                                            <td align="center">01</td>
                                            <td align="center">T3</td>
                                            <td align="center">30X60 IMPERIAL GREY DECOR</td>
                                            <td align="center">30X60</td>
                                            <td align="center">DEKOR</td>
                                            <td align="center">STANDART</td>
                                            <td align="center">30X60 IMPERIAL GREY DECOR</td>
                                            <td align="center">30X60</td>
                                            <td align="center">DEKOR</td>
                                            <td align="center">STANDART</td>
                                        </tr>
                                        <tr>
                                            <td align="center">01</td>
                                            <td align="center">T3</td>
                                            <td align="center">30X60 IMPERIAL GREY DECOR</td>
                                            <td align="center">30X60</td>
                                            <td align="center">DEKOR</td>
                                            <td align="center">STANDART</td>
                                            <td align="center">30X60 IMPERIAL GREY DECOR</td>
                                            <td align="center">30X60</td>
                                            <td align="center">DEKOR</td>
                                            <td align="center">STANDART</td>
                                        </tr>
                                        <tr>
                                            <td align="center">01</td>
                                            <td align="center">T3</td>
                                            <td align="center">30X60 IMPERIAL GREY DECOR</td>
                                            <td align="center">30X60</td>
                                            <td align="center">DEKOR</td>
                                            <td align="center">STANDART</td>
                                            <td align="center">30X60 IMPERIAL GREY DECOR</td>
                                            <td align="center">30X60</td>
                                            <td align="center">DEKOR</td>
                                            <td align="center">STANDART</td>
                                        </tr>
                                        <tr>
                                            <td align="center">01</td>
                                            <td align="center">T3</td>
                                            <td align="center">30X60 IMPERIAL GREY DECOR</td>
                                            <td align="center">30X60</td>
                                            <td align="center">DEKOR</td>
                                            <td align="center">STANDART</td>
                                            <td align="center">30X60 IMPERIAL GREY DECOR</td>
                                            <td align="center">30X60</td>
                                            <td align="center">DEKOR</td>
                                            <td align="center">STANDART</td>
                                        </tr>
                                        <tr>
                                            <td align="center">01</td>
                                            <td align="center">T3</td>
                                            <td align="center">30X60 IMPERIAL GREY DECOR</td>
                                            <td align="center">30X60</td>
                                            <td align="center">DEKOR</td>
                                            <td align="center">STANDART</td>
                                            <td align="center">30X60 IMPERIAL GREY DECOR</td>
                                            <td align="center">30X60</td>
                                            <td align="center">DEKOR</td>
                                            <td align="center">STANDART</td>
                                        </tr>
                                        <tr>
                                            <td align="center">01</td>
                                            <td align="center">T3</td>
                                            <td align="center">30X60 IMPERIAL GREY DECOR</td>
                                            <td align="center">30X60</td>
                                            <td align="center">DEKOR</td>
                                            <td align="center">STANDART</td>
                                            <td align="center">30X60 IMPERIAL GREY DECOR</td>
                                            <td align="center">30X60</td>
                                            <td align="center">DEKOR</td>
                                            <td align="center">STANDART</td>
                                        </tr>
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
                       var example= $(document).ready(function() {
                            $('#example').DataTable( {
                                dom: 'Bfrtip',
                                buttons: [
                                    {
                                        extend: 'excelHtml5',
                                        title: 'All_Receivables'
                                    },
                                    {
                                        extend: 'pdfHtml5',
                                        title: 'All_Receivables'}
                                    ,'copy', 'print'
                                ],
                                responsive: {
                                    details: false
                                }
                            });
                        });
                        $(document).ready(function () {
                            reset();
                        });
                        function setsearchvalues(id,index,table) {
                            var values = table.column(index, {search: 'applied'}).data().toArray();
                            //insert to array currently values done

                            //clear select opitons
                            var itemSelectorOption = $('#'+id+' option');
                            itemSelectorOption.remove();
                            $('#'+id).selectpicker('refresh');
                            //clear done

                            //unique current values
                            function unique(arr) {
                                var i,
                                    len = arr.length,
                                    out = [],
                                    obj = {};
                                for (i = 0; i < len; i++) {
                                    obj[arr[i]] = 0;
                                }
                                for (i in obj) {
                                    out.push(i);
                                }
                                return out;
                            }
                            var values = unique(values);
                            //unique done

                            //insert values to select options
                            $.each(values, function(key, value) {
                                $('#'+id).append($('<option>', { value : value }).text(value));
                            });
                        }
                        function matchingsinglesearch(id,index,table) {
                            document.getElementById(id).onchange = function () {
                                table.columns(index).search("^"+document.getElementById(id).value+'$',true).draw();
                            }
                        }
                        function reset(){
                            $('#example').dataTable().fnFilter('');//global searching
                            $("#orderSurfaceSearch").val([]);//select option değerlerini sıfırlar
                            $("#orderSizeSearch").val([]);
                            $("#orderSurfaceSearch").val([]);
                            example.columns(1).search("").draw();
                            example.columns(2).search("").draw();
                            example.columns(4).search("").draw();
                            setsearchvalues('orderCompanySearch',1,example);
                            setsearchvalues('orderSizeSearch',2,example);
                            setsearchvalues('orderSurfaceSearch',4,example);
                            matchingsinglesearch('orderCompanySearch',1,example);
                            matchingsinglesearch('orderSizeSearch',2,example);
                            matchingsinglesearch('orderSurfaceSearch',4,example);
                            $('.selectpicker').selectpicker('refresh');
                        }
                    </script>
                    </body>

                    </html>
