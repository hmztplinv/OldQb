<?php require 'mainPageSeller/header_seller.php'; ?>

<body class="ltr main-body leftmenu">


<!-- Loader -->
<div id="global-loader">
    <img src="<?=public_url('images/brand/qbdigitals.png')?>" height="200px" class="loader-img" alt="Loader">
</div>
<!-- End Loader -->

<!-- Page -->
<div class="page">


    <?php require 'mainPageSeller/sidebar_seller.php'; ?>

    <!-- Main Content-->
    <div class="main-content side-content pt-0">
        <div class="main-container container-fluid">
            <div class="inner-body">

                <!-- Page Header -->
                <div class="page-header">
                    <div>
                        <h2 class="main-content-title tx-24 mg-b-5">My Customers.</h2>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">My Customers</li>
                        </ol>
                    </div>
                </div>

                <!-- End Page Header -->

                <!-- Row -->
                <div class="row row-sm">
                    <div class="col-md-12 col-lg-12 col-xl-12">
                        <div class="card custom-card transcation-crypto overflow-hidden">
                            <div class="card-header custom-card-header">
                                <h5 class="main-content-label tx-dark my-auto fw-bold tx-medium mb-0">My Customers</h5>
                                <div class="card-options">
                                    <a href="#" class="card-options-collapse" data-bs-toggle="card-collapse"><i
                                                class="fe fe-chevron-up"></i></a>
                                </div>
                            </div>

                            <div class="card-body">
                                <div class="row mt-3 mb-3">
                                    <div class="col-sm-2">
                                        <select data-live-search=true  title="Company Name" class="selectpicker" id="customerNameSearch">
                                        </select>
                                    </div>
                                    <div class="col-sm-2">
                                        <select data-live-search=true title="Status" class="selectpicker" id="customerStatusSearch">
                                        </select>
                                    </div>
                                    <div class="col-lg-4 col-sm-3">
                                        <button onclick="reset()" class="btn ripple btn-primary">Reset</button>
                                    </div>
                                </div>
                                <div class="table-responsive">
                                    <table id="customers" class="table table-hover key-buttons text-nowrap" style="width: 100%;">
                                        <thead class="text-center">
                                        <tr>
                                            <th class="wd-1">Detail</th>
                                            <th>Company Title</th>
                                            <th>Adress</th>
                                            <th>Phone Number</th>
                                            <th>Tax No / T.C. No</th>
                                            <th>E-Mail</th>
                                            <th>Status</th>
                                            <th>Created At</th>
                                            <th>Action</th>
                                        </tr>
                                        </thead>
                                        <tbody class="text-center">
                                        <?php foreach ($customers as $customer):?>
                                            <tr class="border-bottom">
                                                <td align="center">
                                                    <a href="<?=seller_url('customer_detail').'?id='.base64_encode($customer['id']);?>">
                                                        <span class="crypto-icon bg-primary-transparent me-3 my-auto">
                                                            <i class="ti ti-search text-primary"></i>
                                                        </span>
                                                    </a>
                                                </td>
                                                <td align="center"><?=$customer['companyName']?></td>
                                                <td align="center"><?=$customer['address']?></td>
                                                <td align="center"><?=$customer['phone']?></td>
                                                <td align="center"><?=$customer['taxNumber']?></td>
                                                <td align="center"><?=$customer['email']?></td>
                                                <td align="center"><span class="verified"><?=$customer['verified']==1?'Unapproved Customer':($customer['verified']==0?'Silinmiş Müşteri':'Approved Customer ')?></span></td>
                                                <td align="center"><?= date('d m Y H:i:s', strtotime($customer['created_at'])) ?></td>

                                                <td align="center">
                                                    <button type="button" <?=$customer['verified']==2 ? ' style="display:none;" ':''?> data-status="<?=$customer['verified']?>" data-id="<?=$customer['UserId']?>"  class="btn ripple btn-success active">Approve</button>
                                                    <button type="button" <?=$customer['verified']==1 ? ' style="display:none;" ':''?> data-status="<?=$customer['verified']?>" data-id="<?=$customer['UserId']?>" class="btn ripple btn-warning passive" >Onay Kaldır</button>
                                                    <button type="button" <?=$customer['verified']==0 ? ' style="display:none;" ':''?> data-status="<?=$customer['verified']?>" data-id="<?=$customer['UserId']?>" class="btn ripple btn-danger delete" >Delete</button>
                                                </td>
                                            </tr>
                                        <?php endforeach;?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Row -->
            </div>
        </div>
    </div>
    <!-- End Main Content-->
</div>

<?php require 'mainPageSeller/footer_seller.php'; ?>

    <script>
        $('.passive').click(function (e) {
            var id = $(this).data('id');

            var $button = $(this);
            var $status = $button.closest('td').prev('td').find('.verified');
            var newValue = 'Onaysız Müşteri';

            $(this).hide();
            $(this).closest('td').find('.active').show();
            $(this).closest('td').find('.delete').show();

            $status.text(newValue);

            $.post("<?=seller_url('customers') ?>", {
                customer_id: id,
                status: 1,
            }, function (result) {
            })
        });
        $('.active').click(function () {
            var id = $(this).data('id');

            var $button = $(this);
            var $status = $button.closest('td').prev('td').find('.verified');
            var newValue = 'Onaylı Müşteri';
            $status.text(newValue);

            $(this).hide();
            $(this).closest('td').find('.passive').show();
            $(this).closest('td').find('.delete').show();

            $.post("<?=seller_url('customers') ?>", {
                customer_id: id,
                status: 2,
            }, function (result) {
            })

        });
        $('.delete').click(function (e) {
            var id = $(this).data('id');

            var $button = $(this);
            var $status = $button.closest('td').prev('td').find('.verified');
            var newValue = 'Silinmiş Müşteri';

            $(this).hide();
            $(this).closest('td').find('.passive').show();
            $(this).closest('td').find('.active').show();
            $status.text(newValue);

            $.post("<?=seller_url('customers') ?>", {
                customer_id: id,
                status: 3,
            }, function (result) {
            })
        });

    </script>


    <script>
        var example = $('#customers').removeAttr('width').DataTable({
            autoWidth: false,
            scrollX: '200px',
            // scrollY: '500px',
            scrollCollapse: true,
            paging: true,
            dom: 'Bfrtip',
            buttons: [
                {
                    extend: 'excelHtml5',
                    title: 'My_Customers'
                },
                {
                    extend: 'pdfHtml5',
                    title: 'My_Customers'
                },
                'copy',
                'print'
            ],
            columnDefs: [
                { width: 50, targets: 1 },
                { className: "dt-head-center", targets: [ 0 ] },
            ],
            fixedColumns: true
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
                $('#'+id).append($('<option>', { value : value.replace(/<\/?span[^>]*>/g, '') }).text(value.replace(/<\/?span[^>]*>/g, '')));
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
            $("#customerNameSearch").val([]);//select option değerlerini sıfırlar
            $("#customerstatusSearch").val([]);
            example.columns(1).search("").draw();
            example.columns(6).search("").draw();
            setsearchvalues('customerNameSearch',1,example);
            setsearchvalues('customerStatusSearch',6,example);
            matchingsinglesearch('customerNameSearch',1,example);
            matchingsinglesearch('customerStatusSearch',6,example);

            $('.selectpicker').selectpicker('refresh');
        }
    </script>
</body>
</html>
