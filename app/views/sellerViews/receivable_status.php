<?php require 'mainPageSeller/header_seller.php'?>
<div class="content-wrap">
    <div class="main">
        <div class="container-fluid mb-5">
            <section id="main-content">
                <div class="row mt-3">
                    <div class="col-lg-12">
                        <div class="card  ">
                            <div class="card-header card-header-border-bottom bg-white">
                                <h2> All Receivables  </h2>
                            </div>
                            <div class="p-5 mt-5">
                                <ul class="nav nav-tabs ">
                                    <a class="nav-link  active " aria-current="page" href="receivable_status"><p class="text-dark"><b>All Receivables</b></p></a>
                                    <li class="nav-item">
                                        <a class="nav-link  " aria-current="page" href="due"><p class="text-dark"><b>Overdue Receivables</b></p></a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link  " aria-current="page" href="undue"><p class="text-dark"><b>Unexpired Receivables</b></p></a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link  " aria-current="page" href="receiving"><p class="text-dark"><b>Paid Receivables</b></p></a>
                                    </li>
                                </ul>
                                <div class="row mt-3 mb-3">
                                    <div class="col-lg-4 col-sm-4">
                                        <select data-live-search=true title="Company Name" id="companyNameSearch" class="selectpicker">
                                        </select>
                                    </div>
                                    <div class="col-lg-4 col-sm-4"">
                                        <select id="countrySearch" title="Country" class="selectpicker" data-live-search=true>
                                        </select>
                                    </div>

                                    <div class="col-lg-4 col-sm-4"">
                                        <button onclick="reset()" id="search" type="submit" name="insertproductform" class="btn btn-outline-secondary btn-sm"><b>Search</b></button>
                            </div>
                                </div>
                                <div class="table-responsive">
                                    <table id="example" class="display" style="width:100%">
                                        <thead>
                                        <tr>
                                            <th class="text-custom text-center">Company</th>
                                            <th class="text-custom text-center">Country</th>
                                            <th class="text-custom text-center">Customer</th>
                                            <th class="text-custom text-center">Limit Exceeding</th>
                                            <th class="text-custom text-center">Delegate</th>
                                            <th class="text-custom text-center">Warden</th>
                                            <th class="text-custom text-center">Payment Date</th>
                                            <th class="text-custom text-center">Explanation</th>
                                            <th class="text-custom text-center">Open Amount</th>
                                            <th class="text-custom text-center">Day Maturity</th>
                                        </tr>
                                        </thead>
                                        <tbody>

                                        <tr>
                                            <td class="text-center">01</td>
                                            <td class="text-center">T3</td>
                                            <td class="text-center">30X60 IMPERIAL GREY DECOR</td>
                                            <td class="text-center">01</td>
                                            <td class="text-center">T3</td>
                                            <td class="text-center">30X60 IMPERIAL GREY DECOR</td>
                                            <td class="text-center">01</td>
                                            <td class="text-center">T3</td>
                                            <td class="text-center">30X60 IMPERIAL GREY DECOR</td>
                                            <td class="text-center">01</td>
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
        $("#companyNameSearch").val([]);//select option değerlerini sıfırlar
        $("#countrySearch").val([]);
        example.columns(0).search("").draw();
        example.columns(1).search("").draw();
        setsearchvalues('companyNameSearch',0,example);
        setsearchvalues('countrySearch',1,example);
        matchingsinglesearch('companyNameSearch',0,example);
        matchingsinglesearch('countrySearch',1,example);
        $('.selectpicker').selectpicker('refresh');
    }
</script>
</body>

</html>

