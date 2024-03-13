<?php require 'mainPageOperation/header_operation.php'?>


<body class="ltr main-body leftmenu">


<!-- Loader -->
<div id="global-loader">
    <img src="<?=public_url('images/brand/qbdigitals.png')?>" height="200px" class="loader-img" alt="Loader">
</div>
<!-- End Loader -->

<!-- Page -->
<div class="page">

<?php require 'mainPageOperation/sidebar_operation.php'?>
    <!-- Main Content-->
    <div class="main-content side-content pt-0">



        <div class="main-container container-fluid">
            <div class="inner-body">

                <!-- Page Header -->
                <div class="page-header">
                    <div>
                        <h2 class="main-content-title tx-24 mg-b-5">To Do List.</h2>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">To Do List</li>
                        </ol>
                    </div>
                </div>

                <!-- End Page Header -->

                <!-- row -->
                <div class="row row-sm">
                    <div class="col-md-12 col-lg-12 col-xl-12">
                        <div class="card custom-card transcation-crypto">
                            <div class="card-header custom-card-header">
                                <h5 class="main-content-label tx-dark my-auto fw-bold tx-medium mb-0">To Do List
                                </h5>
                                <div class="card-options">
                                    <a href="<?=operation_url('todolist_details')."?id=0&todotype=1"?>">
                                        <button type="submit" name="updatelist" class="btn btn-primary" id="gorev">
                                            Add New To Do</button>
                                    </a>
                                    <a href="#" class="card-options-collapse" data-bs-toggle="card-collapse">
                                        <i class="fe fe-chevron-up"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="row row-sm">
                                    <div class="col-lg-2">
                                        <div class="mg-b-20">
                                            <select id="todoSearch" title="Todo Name" name="todoSearch"
                                                    class="selectpicker">
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-2">
                                        <button type="submit" name="reset" onclick="reset()" value=""
                                                class="btn btn-primary ripple">
                                            Reset</button>
                                    </div>
                                </div>

                                <div class="table-responsive">
                                    <table class="table table-hover dataTable key-buttons text-nowrap w-100"
                                           id="example">
                                        <thead>
                                        <tr>
                                            <th class="text-custom sorting"
                                                style="font-size: 10px; width: 27px;" rowspan="1" colspan="1">
                                                Name
                                            </th>
                                            <th class="text-custom sorting sorting_asc"
                                                style="font-size: 10px; width: 63px;" rowspan="1" colspan="1">
                                                PRODUCTION PLANNING AND STOCK CONTROL
                                            </th>
                                            <th class="text-custom sorting"
                                                style="font-size: 10px; width: 53px;" rowspan="1" colspan="1">
                                                STOCK AND CURRENT PRICE LIST SHARING WITH THE CUSTOMER
                                            </th>
                                            <th class="text-custom sorting"
                                                style="font-size: 10px; width: 55px;" rowspan="1" colspan="1">
                                                PROFORMA INVOICE DELIVERY TO CUSTOMER
                                            </th>
                                            <th class="text-custom sorting"
                                                style="font-size: 10px; width: 52px;" rowspan="1" colspan="1">
                                                HAS THE APPROVED PRO FORMA BEEN RECEIVED?
                                            </th>
                                            <th class="text-custom sorting"
                                                style="font-size: 10px; width: 51px;" rowspan="1" colspan="1">
                                                HAS PAYMENT BEEN RECEIVED?
                                            </th>
                                            <th class="text-custom sorting"
                                                style="font-size: 10px; width: 67px;" rowspan="1" colspan="1">
                                                NOTIFICATION OF THE ORDER AMOUNT FOR PRODUCTION
                                            </th>
                                            <th class="text-custom sorting"
                                                style="font-size: 10px; width: 67px;" rowspan="1" colspan="1">
                                                PRODUCTION-EXPORT WAREHOUSE ENTRANCES CONTROL
                                            </th>
                                            <th class="text-custom sorting"
                                                style="font-size: 10px; width: 67px;" rowspan="1" colspan="1">
                                                CUSTOMER NOTIFICATION OF THE READY ORDER
                                            </th>
                                            <th class="text-custom sorting"
                                                style="font-size: 10px; width: 67px;" rowspan="1" colspan="1">
                                                CUSTOMER TR. PASSING THE AGENT INFORMATION
                                            </th>
                                            <th class="text-custom sorting"
                                                style="font-size: 10px; width: 74px;" rowspan="1" colspan="1">
                                                RESERVATION CONFIRMATION
                                            </th>
                                            <th class="text-custom sorting"
                                                style="font-size: 10px; width: 67px;" rowspan="1" colspan="1">
                                                SHARING SHIP INFORMATION AND ETA WITH CUSTOMER
                                            </th>
                                            <th class="text-custom sorting"
                                                style="font-size: 10px; width: 43px;" rowspan="1" colspan="1">
                                                FACTORY LOADING DAY NOTICE
                                            </th>
                                            <th class="text-custom sorting"
                                                style="font-size: 10px; width: 71px;" rowspan="1" colspan="1">
                                                BILL OF LADING INSTRUCTIONS
                                            </th>
                                            <th class="text-custom sorting"
                                                style="font-size: 10px; width: 71px;" rowspan="1" colspan="1">
                                                CUSTOMS CLEARANCE INSTRUCTIONS
                                            </th>
                                            <th class="text-custom sorting"
                                                style="font-size: 10px; width: 64px;" rowspan="1" colspan="1">
                                                CIRCULATION CERTIFICATE REQUEST
                                            </th>
                                            <th class="text-custom sorting"
                                                style="font-size: 10px; width: 61px;" rowspan="1" colspan="1">
                                                SHARING OF ALL LOADING DOCUMENTS WITH THE CUSTOMER
                                            </th>
                                            <th class="text-custom sorting"
                                                style="font-size: 10px; width: 64px;" rowspan="1" colspan="1">
                                                HAVE THE YDG PROCEDURES BEEN COMPLETED?
                                            </th>
                                            <th class="text-custom sorting"
                                                style="font-size: 10px; width: 63px;" rowspan="1" colspan="1">
                                                COMPLETION AND RETURN OF CONTAINERS
                                            </th>
                                            <th class="text-custom sorting"
                                                style="font-size: 10px; width: 69px;" rowspan="1" colspan="1">
                                                HAS THE PAYMENT BEEN TRANSFERRED TO OUR ACCOUNT?
                                            </th>
                                            <th class="text-custom sorting"
                                                style="font-size: 10px; width: 43px;" rowspan="1" colspan="1">
                                                Last updated
                                            </th>
                                            <th class="text-custom sorting"
                                                style="font-size: 10px; width: 40px;" rowspan="1" colspan="1">
                                                Last Changed By
                                            </th>
                                            <th class="text-custom sorting"
                                                style="font-size: 10px; width: 36px;" rowspan="1" colspan="1">
                                                EDIT / DELETE
                                            </th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <?php foreach ($todolist as $todo):?>
                                        <tr class="even">
                                            <td style="font-size: 10px;" class=""><?=$todo['todoName']?></td>
                                            <td style="font-size: 10px;" class="sorting_1"><?=$todo['productPlaning']?></td>
                                            <td style="font-size: 10px;"><?=$todo['customerNotification']?></td>
                                            <td style="font-size: 10px;"><?=$todo['customsInstruction']?></td>
                                            <td style="font-size: 10px;"><?=$todo['doesProformaTook']?></td>
                                            <td style="font-size: 10px;"><?=$todo['payment']?></td>
                                            <td style="font-size: 10px;"><?=$todo['productionNotification']?></td>
                                            <td style="font-size: 10px;"><?=$todo['warehouseControl']?></td>
                                            <td style="font-size: 10px;"><?=$todo['customerNotification']?></td>
                                            <td style="font-size: 10px;"><?=$todo['informCustomer']?></td>
                                            <td style="font-size: 10px;"><?=$todo['reservationConfirmation']?></td>
                                            <td style="font-size: 10px;"><?=$todo['doesShipmentInfoShared']?></td>
                                            <td style="font-size: 10px;"><?=$todo['factoryNotification']?></td>
                                            <td style="font-size: 10px;"><?=$todo['billOfLading']?></td>
                                            <td style="font-size: 10px;"><?=$todo['customsInstruction']?></td>
                                            <td style="font-size: 10px;"><?=$todo['circulationDocumentation']?></td>
                                            <td style="font-size: 10px;"><?=$todo['loadingDocumentationSharingWithCustomer']?></td>
                                            <td style="font-size: 10px;"><?=$todo['ydgProcess']?></td>
                                            <td style="font-size: 10px;"><?=$todo['container']?></td>
                                            <td style="font-size: 10px;"><?=$todo['paymentInAccount']?></td>
                                            <td style="font-size: 10px;"><?=$todo['lastChangedDate']?></td>
                                            <td style="font-size: 10px;"><?=$todo['uname']?></td>
                                            <td class="jsgrid-cell jsgrid-control-field jsgrid-align-center"
                                                style="width: 50px;">
                                                <a href="<?=operation_url('todolist_details')."?id=".$todo['id']?>"
                                                   class="jsgrid-button jsgrid-edit-button" type="button"
                                                   title="Edit">
                                                    <i class="ti ti-pencil-alt fs-5"></i>
                                                </a>
                                                <a href="<?=operation_url('todolist_update')."?id=".$todo['id']."&delete=1&todotype=1"?>"
                                                   class="jsgrid-button jsgrid-delete-button" type="button"
                                                   title="Delete">
                                                    <i class="ti ti-trash fs-5"></i>
                                                </a>
                                            </td>
                                        </tr>
                                        <?endforeach;?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <!-- Row End -->
                    </div>
                </div>
                <!-- Row End -->

            </div>
        </div>
    </div>
    <!-- End Main Content-->
                    <?php require 'mainPageOperation/footer_operation.php'?>
                    <script>
                        $( document ).ready(function() {
                            reset();
                        });
                            var example=$('#example').DataTable( {
                                dom: 'Bfrtip',
                                pageLength: 1000,
                                buttons: [
                                    {

                                        extend: 'excelHtml5',
                                        title: 'To_Do_List'
                                    },
                                    {
                                        extend: 'pdfHtml5',
                                        title: 'To_Do_List',
                                        orientation: 'landscape',
                                        pageSize: 'LEGAL'
                                    },
                                    'copy',  'print',
                                ]
                            } );

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
                            $('#todolist').dataTable().fnFilter('');//global searching
                            $("#todoSearch").val([]);//select option değerlerini sıfırlar
                            example.columns(0).search("").draw();
                            setsearchvalues('todoSearch',0,example);
                            matchingsinglesearch('todoSearch',0,example);
                            $('.selectpicker').selectpicker('refresh');
                        }
                    </script>

                    <script src="https://code.iconify.design/iconify-icon/1.0.2/iconify-icon.min.js"></script>
                    </body>

                    </html>
