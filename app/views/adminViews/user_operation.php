<?php require 'mainPageAdmin/header_admin.php'; ?>

<!-- Main Content-->
<div class="main-content side-content pt-0">
    <div class="main-container container-fluid">
        <div class="inner-body">

            <!-- Page Header -->
            <div class="page-header">
                <div>
                    <h2 class="main-content-title tx-24 mg-b-5">Operastions</h2>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">User Managment</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Operation Managment</li>
                    </ol>
                </div>
            </div>

            <!-- End Page Header -->

            <!-- row -->
            <div class="row row-sm">
                <div class="col-md-12 col-lg-12 col-xl-12">
                    <div class="card custom-card transcation-crypto">
                        <div class="card-header custom-card-header">
                            <h5 class="main-content-label tx-dark my-auto fw-bold tx-medium mb-0">All Operation
                            </h5>
                            <div class="card-options">
                                <a href="#" class="card-options-collapse" data-bs-toggle="card-collapse"><i
                                        class="fe fe-chevron-up"></i></a>
                            </div>
                        </div>
                        <div class="card-header border-bottom-0">
                            <div class="main-content-label text-center"></div>
                        </div>
                        <div class="card-body">
                            <div class="row mt-3 mb-3">
                                <div class="col-lg-2 mg-t-20 mg-lg-t-0">
                                    <select data-live-search=true title="Seller Name"  class="selectpicker" id="productNameSearch">
                                    </select>
                                </div>
                                <div class="col-lg-2 mg-t-20 mg-lg-t-0">
                                    <select data-live-search=true title="E Mail" class="selectpicker" id="companyNameSearch">
                                    </select>
                                </div>
                                <div class="col-lg-3 mg-t-20 mg-lg-t-0">
                                    <select data-live-search=true title="Country"  class="selectpicker" id="statusSearch">
                                    </select>
                                </div>
                                <div class="col-lg-3 col-sm-3">
                                    <button onclick="reset()" class="btn ripple btn-primary">Reset</button>
                                </div>
                            </div>
                            <div class="table-responsive">
                                <table id="example" class="display" style="width:100%">
                                    <thead>
                                    <tr>

                                        <th class="text-custom text-center">Operation Name</th>
                                        <th class="text-custom text-center">E Mail</th>
                                        <th class="text-custom text-center">Country</th>
                                        <th class="text-custom text-center">Del</th>


                                    </tr>
                                    </thead>
                                    <tbody>
                                    <?php foreach ($operations as $item):?>
                                        <tr>

                                            <td align="center"><?=$item['operationExecutiveName']?></td>
                                            <td align="center"><?=$item['email']?></td>
                                            <td align="center"><?=$item['countryName']?></td>
                                            <form action="<?= site_url('admin/user_operation')?>" method="post">
                                                <td align="center"><button type="submit" class="btn btn-danger" name="deletecountry" value="<?=$item['Opid']?>">Delete</button></td>
                                            </form>

                                        </tr>
                                    <?php endforeach;   ?>
                                    </tbody>
                                </table>
                            </div>

                        </div>
                    </div>
                    <!-- Row End -->
                </div>
            </div>
            <!-- Row End -->
            <div class="row row-sm">
                <div class="col-md-12 col-lg-12 col-xl-12">
                    <div class="card custom-card transcation-crypto">
                        <div class="card-header custom-card-header">
                            <h5 class="main-content-label tx-dark my-auto fw-bold tx-medium mb-0">Create New Operation
                            </h5>
                            <div class="card-options">
                                <a href="#" class="card-options-collapse" data-bs-toggle="card-collapse"><i
                                        class="fe fe-chevron-up"></i></a>
                            </div>
                        </div>

                        <div class="card-body">
                            <form action="<?= site_url('admin/user_operation')?>" method="post">
                                <div class="row">
                                    <div class="col-6">
                                        <label for="exampleInputEmail1">Email address</label>
                                        <input type="email" class="form-control" name="email" required>
                                    </div>
                                    <div class="col-6">
                                        <label for="exampleInputEmail1">Name Surname</label>
                                        <input type="text" class="form-control"name="name" required>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-6">
                                        <label for="exampleInputEmail1">Phone</label>
                                        <input type="text" class="form-control"name="phone"  >
                                    </div>
                                    <div class="col-6">
                                        <label for="exampleInputEmail1">Password</label>
                                        <input type="text" class="form-control" name="password" required  >
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-6">
                                        <button type="submit" class="btn btn-success mt-2" name="create" value="1">Create</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row row-sm">
                <div class="col-md-12 col-lg-12 col-xl-12">
                    <div class="card custom-card transcation-crypto">
                        <div class="card-header custom-card-header">
                            <h5 class="main-content-label tx-dark my-auto fw-bold tx-medium mb-0">Country entry to Operation
                            </h5>
                            <div class="card-options">
                                <a href="#" class="card-options-collapse" data-bs-toggle="card-collapse"><i
                                        class="fe fe-chevron-up"></i></a>
                            </div>
                        </div>

                        <div class="card-body">
                            <form action="<?= site_url('admin/user_operation') ?>" method="post">
                                <div class="row">
                                    <div class="col-6">
                                        <label for="exampleFormControlSelect1">Users</label>
                                        <select class="form-control" name="user" id="exampleFormControlSelect1">
                                            <?php foreach ($operationsuser as $item): ?>
                                                <option value="<?= $item['id'] ?>"><?= $item['uname'] ?> <?= $item['email'] ?></option>
                                            <?php endforeach; ?>
                                        </select>
                                    </div>

                                    <div class="col-6">

                                        <label for="exampleFormControlSelect1">Country</label>


                                                <select id="multipleSelect" name="country[]" multiple="multiple" class="mul-select">

                                                    <?php foreach ($operationscountry as $item): ?>
                                                        <option value="<?= $item['countryId'] ?>"><?= $item['countryName'] ?></option>
                                                    <?php endforeach; ?>
                                                </select>



                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-6">
                                        <button type="submit" class="btn btn-success mt-2" name="submit_button" value="1">Create</button>
                                    </div>
                                </div>
                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Main Content-->

<?php require 'mainPageAdmin/footer_admin.php'; ?>
<script>
    $(document).ready(function() {
        $(".mul-select").select2({
            placeholder: "Select options",
            tags: true,
            closeOnSelect: false,
            createTag: function(params) {
                var term = $.trim(params.term);

                if (term === "") {
                    return null;
                }

                if ($.inArray(term, availableCountries) === -1) {
                    // Geçersiz bir değer seçildiğinde uyarı verebilirsiniz

                    return null;
                }

                return {
                    id: term,
                    text: term
                };
            },
            matcher: function(params, data) {
                // Kullanıcının seçenekler arasından bir tanesini seçmesini veya tam olarak yazmasını sağla
                if ($.trim(params.term) === "") {
                    return data;
                }

                if (data.text.toUpperCase().indexOf(params.term.toUpperCase()) === 0) {
                    return data;
                }

                return null;
            }
        });

        var availableCountries = <?php echo json_encode(array_column($countries, 'countryName')); ?>;
        var selectArr = [];

        $('#multipleSelect').change(function() {
            selectArr = $(this).val() || [];

            $.each(selectArr, function(index, value) {
                $('.display-here').text(value);
            });

            // Kontrol fonksiyonunu çağır
            fun(this);
        });

        function fun(selectObj) {
            var selectedOptions = $('.mul-select option:selected').length;

            console.log(selectObj.value);

            if (selectedOptions <= 5) {
                $(':input[type="submit"]').prop("disabled", false);
            }
            if (selectedOptions < 1 || selectedOptions > 5) {
                $(':input[type="submit"]').prop("disabled", true);
            }
        }

        function func() {
            if (document.getElementsByClassName('init')[0].checked === true) {
                console.log(true);
            } else {
                console.log(false);
            }
        }
    });
</script>
<script>
        var example=$('#example').DataTable( {
            dom: 'Bfrtip',

            buttons: [
                {
                    extend: 'excelHtml5',
                    title: 'All_receivables'
                },
                {
                    extend: 'pdfHtml5',
                    title: 'All_receivables'}, 'copy', 'print'
            ],
            responsive: {
                details: false
            }
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
        function standartmultiplesearch(id,index,table) {//not match! for match you need to make value "^"+value+"$"
            document.getElementById(id).onchange = function () {
                var selected = [];
                for (var option of document.getElementById(id).options) {
                    if (option.selected) {
                        selected.push(option.value);
                    }
                }
                selected=selected.join("|");
                table.columns(index).search(selected, true, false).draw();
            }
        }

        function reset(){
            $('#example').dataTable().fnFilter('');//global searching
            $("#productNameSearch").val([]);//select option değerlerini sıfırlar
            $("#companyNameSearch").val([]);
            $("#statusSearch").val([]);
            example.columns(0).search("").draw();
            example.columns(1).search("").draw();
            example.columns(2).search("").draw();
            setsearchvalues('productNameSearch',0,example);
            setsearchvalues('companyNameSearch',1,example);
            setsearchvalues('statusSearch',2,example);
            matchingsinglesearch('productNameSearch',0,example);
            matchingsinglesearch('companyNameSearch',1,example);
            matchingsinglesearch('statusSearch',2,example);
            $('.selectpicker').selectpicker('refresh');
        }
    </script>