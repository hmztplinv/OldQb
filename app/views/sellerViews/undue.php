<?php require 'mainPageSeller/header_seller.php' ?>

<div class="content-wrap">
    <div class="main">
        <div class="container-fluid mb-5">
            <section id="main-content">
                <div class="row mt-3">
                    <div class="col-lg-12">
                        <div class="card  ">
                            <div class="card-header card-header-border-bottom bg-white">
                                <h2>Unexpired Receivables</h2>
                            </div>
                            <div class="p-5 mt-5">
                                <ul class="nav nav-tabs ">
                                    <a class="nav-link    " aria-current="page" href="receivable_status"><p class="text-dark"><b>All Receivables</b></p></a>
                                    <li class="nav-item">
                                        <a class="nav-link  " aria-current="page" href="due"><p class="text-dark"><b>Overdue Receivables</b></p></a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link active " aria-current="page" href="undue"><p class="text-dark"><b>Unexpired Receivables</b></p></a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link  " aria-current="page" href="receiving"><p class="text-dark"><b>Paid Receivables</b></p></a>
                                    </li>
                                </ul>
                                <div style="    border: 1px;
                                    border-style: solid;
                                    border-radius: 5px;
                                    margin-bottom: 5px;
                                    border-color: #00000026;" class="row">
                                    <div class="col-sm-3 mb-2">
                                        Company
                                        <select id="company" class="selectpicker form-control" data-live-search=true name="company">
                                            <option selected disabled value="">Company</option>
                                            <?php foreach ($customerNameSearch as $name): ?>
                                                <option value="<?= $name['companyName']?>"><?= $name['companyName']?></option>
                                            <?php endforeach; ?>
                                        </select>
                                    </div>
                                    <div class="col-sm-3 mb-2">
                                        Country
                                        <select id="country" class="selectpicker form-control" data-live-search=true name="country">
                                            <option selected disabled value="">Country</option>
                                            <?php foreach ($customerNameSearch as $name): ?>
                                                <option value="<?= $name['companyName']?>"><?= $name['companyName']?></option>
                                            <?php endforeach; ?>n>
                                        </select>
                                    </div>

                                    <div class="col-sm-3 mb-2">
                                        Customer
                                        <select id="customer" class="selectpicker form-control" data-live-search=true name="customer">
                                            <option selected disabled value="">Customer</option>
                                            <?php foreach ($customerNameSearch as $name): ?>
                                                <option value="<?= $name['companyName']?>"><?= $name['companyName']?></option>
                                            <?php endforeach; ?>
                                        </select>
                                    </div>
                                    <div class="col-sm-6 mb-8">

                                        <button style="margin-top:27px" id="search" type="submit" name="insertproductform" class="btn btn-outline-secondary btn-sm"><b>Search</b></button>

                                    </div>


                                </div>
                                <div class="table-responsive">
                                    <table id="example" class="display" style="width:100%">
                                        <thead>
                                        <tr>
                                            <th class="text-custom text-center">Company</th>
                                            <th class="text-custom text-center">Date</th>
                                            <th class="text-custom text-center">Genus</th>
                                            <th class="text-custom text-center">Bn.</th>
                                            <th class="text-custom text-center">K.</th>
                                            <th class="text-custom text-center">Explanation</th>
                                            <th class="text-custom text-center">Document No</th>
                                            <th class="text-custom text-center">Tur</th>
                                            <th class="text-custom text-center">S.</th>
                                            <th class="text-custom text-center">Tek Düzen//ingilizce sorulcak</th>
                                            <th class="text-custom text-center">Maturity</th>
                                            <th class="text-custom text-center">Amount</th>
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
                                            <td align="center">DEKOR</td>
                                            <td align="center">STANDARTs</td>
                                        </tr>

                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <!-- /# card -->
                        </div>
                        <!-- /# column -->
                    </div>
<?php require 'mainPageSeller/footer_seller.php'?>
<script>

  var example= $('#example').DataTable( {
            dom: 'Bfrtip',
            buttons: [{

                extend: 'excelHtml5',
                title: 'UnExpiredReceivables'
            },
                {
                    extend: 'pdfHtml5',
                    title: 'UnExpiredReceivables'}, 'copy', 'print'
            ],
            responsive: {
                details: false
            }
        });

</script>
                    <script>
                        function reset(){
                            document.getElementById("unvan").options[0].selected="selected";
                            document.getElementById("productSizeSearch").options[0].selected="selected";
                            document.getElementById("productAreaSearch").options[0].selected="selected";

                            example.columns(0).search("").draw();
                            example.columns(1).search("").draw();
                            example.columns(3).search("").draw();
                        }
                        document.getElementById("unvan").onchange=function () {
                            example.columns(0).search(document.getElementById("productNameSearch").value).draw();
                        }
                        document.getElementById("productSizeSearch").onchange=function () {
                            example.columns(1).search(document.getElementById("productSizeSearch").value).draw();
                        }
                        document.getElementById("productAreaSearch").onchange=function () {
                            example.columns(3).search(document.getElementById("productAreaSearch").value).draw();
                        }


                    </script>
</body>

</html>
