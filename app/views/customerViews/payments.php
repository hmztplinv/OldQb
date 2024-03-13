<?php require 'mainPageCustomer/header_customer.php'; ?>


<div class="content-wrap">
    <div class="main">
        <div class="container-fluid mb-5">
            <section id="main-content">
                <div class="row mt-3">
                    <div class="col-lg-12">
                        <div class="card  ">
                            <div class="card-header card-header-border-bottom bg-white">
                                <h2>Payments</h2>
                            </div>
                            <div class="p-5 mt-5">
                                <div style="    border: 1px;
                              border-style: solid;
                              border-radius: 5px;
                              margin-bottom: 5px;
                              border-color: #00000026;" class="row">
                                    <div class="col-sm-3 mb-2">
                                        Exporter
                                        <select id="exporter" class="selectpicker form-control" data-live-search=true name="exporter">
                                            <option value="" selected>QUA</option>
                                            <option value="" selected>BIEN</option>
                                        </select>
                                    </div>
                                    <div class="col-sm-3 mb-2">
                                        Invoıce
                                        <select id="Invoıce" class="selectpicker form-control" data-live-search=true name="Invoıce">
                                            <option value="" selected>F25/2022000000812</option>
                                            <option value="" selected>F3/2022000000347</option>
                                            <option value="" selected>F25/2022000000813</option>
                                        </select>
                                    </div>

                                    <div class="col-sm-3 mb-2">
                                        Date
                                        <select id="date" class="selectpicker form-control" data-live-search=true name="date">
                                            <option value="" selected>17.09.2022</option>
                                            <option value="" selected>17.07.2022</option>
                                            <option value="" selected>17.09.2022</option>
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
                                            <th class="text-custom text-center">Exporter</th>
                                            <th class="text-custom text-center">Invoıce</th>
                                            <th class="text-custom text-center">Date</th>
                                            <th class="text-custom text-center">Cr</th>

                                        </tr>
                                        </thead>
                                        <tbody>
                                        <?php foreach($Payment as $item):?>
                                            <td align="center"><?=$item['company']?></td>
                                            <td align="center"><?=$item['langu']?></td>
                                            <td align="center"><?=$item['paymtype']?></td>
                                            <td align="center"><?=$item['stext']?></td>

                                        </tr>
                                        <?php endforeach; ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <!-- /# card -->
                        </div>
                        <!-- /# column -->
                    </div>
                    <!-- /# row -->
            </section>
        </div>
    </div>
</div>

<?php require 'mainPageCustomer/footer_customer.php'?>


<script>
    $(document).ready(function() {
        $('#rejectedcostlist').DataTable( {
            dom: 'Bfrtip',
            buttons: [{

                extend: 'excelHtml5',
                title: 'Payments'
            },
                {
                    extend: 'pdfHtml5',
                    title: 'Payments'}, 'copy', 'print'
            ],
            responsive: {
                details: false
            }
        });
    });

</script>
</body>
</html>
