<?php require 'mainPageAdmin/header_admin.php'?>


<!-- Main Content-->
<div class="main-content side-content pt-0">
    <div class="main-container container-fluid">
        <div class="inner-body">

            <!-- Page Header -->
            <div class="page-header">
                <div>
                    <h2 class="main-content-title tx-24 mg-b-5">Ports</h2>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Ports</li>
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
                                Ports
                                <span>
                                        <button type="button" onclick="window.location.href='<?=site_url('admin/ports_add')?>'" class="btn btn-primary" style="float: right">Add Ports</button>
                                    </span>
                            </h2>
                        </div>
                        <div class="card-body">

                            <div class="table-responsive">
                                <table id="example" class="table table-hover key-buttons text-nowrap" style="width: 100%;">
                                    <thead>
                                    <tr>
                                        <th class="text-custom text-center">Id</th>
                                        <th class="text-custom text-center">Name</th>
                                        <th class="text-custom text-center">Action</th>



                                    </tr>
                                    </thead>
                                    <tbody>
                                    <?php foreach ($ports as $program): ?>
                                        <tr>
                                            <td align="center"><?= $program['id'] ?></td>
                                            <td align="center"><?= $program['name'] ?></td>
                                            <td align="center">
                                                <form action="<?=site_url('admin/ports_add')?>" method="post">
                                                <button type="submit" class="btn btn-warning mr-2" name="edit" value="<?=$program['id']?>">Edit</button>

                                                <button type="submit" class="btn btn-danger" name="delete" value="<?=$program['id']?>">Delete</button>
                                                </form>
                                            </td>
                                        </tr>
                                    <?php endforeach; ?>
                                    </tbody>

                                    <tfoot>
                                    <tr>
                                        <th>ID</th>
                                        <th>Name</th>
                                        <th>Action</th>


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
