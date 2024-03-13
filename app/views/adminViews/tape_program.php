<?php require 'mainPageAdmin/header_admin.php'?>


<!-- Main Content-->
<div class="main-content side-content pt-0">
    <div class="main-container container-fluid">
        <div class="inner-body">

            <!-- Page Header -->
            <div class="page-header">
                <div>
                    <h2 class="main-content-title tx-24 mg-b-5">Production Program.</h2>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Production Program</li>
                    </ol>
                </div>
            </div>

            <!-- End Page Header -->


            <!-- Row -->
            <div class="row row-sm">
                <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12">
                    <div class="card custom-card">
                        <div class="card-header card-header-border-bottom bg-white">
                            <h2>
                                Production Program
                                <span>
                                        <button type="button" onclick="window.location.href='<?=admin_url('production_program_details')?>'" class="btn btn-primary" style="float: right">Add Production Program</button>
                                    </span>
                            </h2>
                        </div>
                        <div class="card-body">
                            <div style="  border: 1px; padding: 10px;
                                              border-style: solid;
                                              border-radius: 5px;
                                              margin-bottom: 5px;
                                              border-color: #00000026;" class="row">
                                <div class="col-sm-2">
                                    <select data-live-search=true  title="Line" class="selectpicker" id="bantNameSearch">
                                    </select>
                                </div>
                                <div class="col-sm-2">
                                    <select data-live-search=true  title="Product Origin" class="selectpicker" id="originSearch">
                                    </select>
                                </div>
                                <div class="col-sm-2">
                                    <button type="submit" name="" onclick="reset()" value="" class="btn btn-outline-secondary" ><b>Reset</b></button>
                                </div>
                            </div>
                            <div class="table-responsive">
                                <table id="example" class="table table-hover key-buttons text-nowrap" style="width: 100%;">
                                    <thead>
                                    <tr>
                                        <th class="text-custom text-center">Line</th>
                                        <th class="text-custom text-center">Production Start Date</th>
                                        <th class="text-custom text-center">Production End Date</th>
                                        <th class="text-custom text-center">Code</th>
                                        <th class="text-custom text-center">Description</th>
                                        <th class="text-custom text-center">Product Code</th>
                                        <th class="text-custom text-center">Product Name</th>
                                        <th class="text-custom text-center">Warehouse</th>
                                        <th class="text-custom text-center">Box</th>
                                        <th class="text-custom text-center">Product Origin</th>
                                        <th class="text-custom text-center">Info</th>
                                        <th class="text-custom text-center">Revise Count</th>
                                        <th class="text-custom text-center">Last Update Date</th>

                                    </tr>
                                    </thead>
                                    <tbody>
                                    <?php foreach ($productionprogram as $program): ?>
                                        <tr>
                                            <td align="center"><?= $program['bantName'] ?></td>
                                            <td align="center"><?= date('d/m/Y', strtotime($program['start_date'])) ?></td>
                                            <td align="center"><?= date('d/m/Y', strtotime($program['finish_date'])) ?></td>
                                            <td align="center"><?= $program['production_code'] ?></td>
                                            <td align="center"><?= $program['description'] ?></td>
                                            <td align="center"><?= $program['product_code'] ?></td>
                                            <td align="center"><?= $program['product_name'] ?></td>
                                            <td align="center"><?= $program['warehouse'] ?></td>
                                            <td align="center"><?= $program['box'] ?></td>
                                            <td align="center"><?= $program['productOrigin'] ?></td>
                                            <td align="center"><?= $program['info'] ?></td>
                                            <td align="center"><?= $program['revised']==0?'No Revised':$program['revised'] ?></td>
                                            <td align="center"><?= date('d/m/Y H:i', strtotime($program['updated_date'])) ?></td>
                                        </tr>
                                    <?php endforeach; ?>
                                    </tbody>
                                    <tfoot>
                                    <tr>
                                        <th>Line</th>
                                        <th>Production Start Date</th>
                                        <th>Production End Date</th>
                                        <th>Code</th>
                                        <th>Description</th>
                                        <th>Product Code</th>
                                        <th>Product Name</th>
                                        <th>Warehouse</th>
                                        <th>Box</th>
                                        <th>Product Origin</th>
                                        <th>Info</th>
                                        <th>Revise Count</th>
                                        <th>Last Update Date</th>
                                    </tr>
                                    </tfoot>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>





                    <?php require 'mainPageAdmin/footer_admin.php'?>

<script>
                    var example = $('#example').DataTable({
                        dom: 'Bfrtip',
                        buttons: [
                            {
                                extend: 'excelHtml5',
                                title: 'All_receivables'
                            },
                            {
                                extend: 'pdfHtml5',
                                title: 'All_receivables'
                            }, 'copy', 'print'
                        ],
                        responsive: {
                            details: false
                        }
                    });


                    function setsearchvalues(id, index, table) {
                        var values = table.column(index, {search: 'applied'}).data().toArray();
                        //insert to array currently values done

                        //clear select opitons
                        var itemSelectorOption = $('#' + id + ' option');
                        itemSelectorOption.remove();
                        $('#' + id).selectpicker('refresh');
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
                        $.each(values, function (key, value) {
                            $('#' + id).append($('<option>', {value: value}).text(value));
                        });
                    }

                    function matchingsinglesearch(id, index, table) {
                        document.getElementById(id).onchange = function () {
                            table.columns(index).search("^" + document.getElementById(id).value + '$', true).draw();
                        }
                    }

                    function standartmultiplesearch(id, index, table) {//not match! for match you need to make value "^"+value+"$"
                        document.getElementById(id).onchange = function () {
                            var selected = [];
                            for (var option of document.getElementById(id).options) {
                                if (option.selected) {
                                    selected.push(option.value);
                                }
                            }
                            selected = selected.join("|");
                            table.columns(index).search(selected, true, false).draw();
                        }
                    }

                    function reset() {
                        $('#example').dataTable().fnFilter('');//global searching
                        $("#bantNameSearch").val([]);//select option değerlerini sıfırlar
                        example.columns(0).search("").draw();
                        setsearchvalues('bantNameSearch', 0, example);
                        matchingsinglesearch('bantNameSearch', 0, example);
                        $("#originSearch").val([]);//select option değerlerini sıfırlar
                        example.columns(13).search("").draw();
                        setsearchvalues('originSearch', 9, example);
                        matchingsinglesearch('originSearch', 9, example);
                        $('.selectpicker').selectpicker('refresh');
                    }

                    $(document).ready(function () {
                        reset();
                    });

                </script>

                <script src="https://code.iconify.design/iconify-icon/1.0.2/iconify-icon.min.js"></script>
