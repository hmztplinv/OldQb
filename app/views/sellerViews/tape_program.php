<?php require 'mainPageSeller/header_seller.php'; ?>
<div class="content-wrap">
    <div class="main">
        <div class="container-fluid mb-5">
            <section id="main-content">
                <div class="row mt-3">
                    <div class="col-lg-12">
                        <div class="card animate__animated animate__fadeInLeft">
                            <div class="card-header card-header-border-bottom bg-white">
                                <h2>Ekim Bant Programı<span><a href="tape_program_details"><button class="btn btn-primary" style="float: right">Add Bant</button></a></span></h2>
                            </div>
                            <div class="p-5 mt-5">
                                <div style="    border: 1px;
                              border-style: solid;
                              border-radius: 5px;
                              margin-bottom: 5px;
                              border-color: #00000026;" class="row">
                                    <div class="col-sm-3 mb-2">
                                        Tarih
                                        <select id="urunkodu" class="selectpicker form-control" data-live-search=true name="urunkodu">
                                            <option value="01" selected>01</option>
                                            <option value="06" selected>06</option>
                                        </select>
                                    </div>
                                    <div class="col-sm-3 mb-2">
                                        Kod
                                        <select id="urunadı" class="selectpicker form-control" data-live-search=true name="urunadı">
                                            <option value="T3" selected>T3</option>
                                            <option value="S3" selected>S3</option>
                                            <option value="PK" selected>PK</option>
                                        </select>
                                    </div>

                                    <div class="col-sm-3 mb-2">
                                        Açıklama
                                        <select id="cıns" class="selectpicker form-control" data-live-search=true name="cıns">
                                            <option value="00023933" selected>00023933</option>
                                            <option value="00039598" selected>00039598</option>
                                            <option value="00032345" selected>00032345</option>
                                        </select>
                                    </div>
                                    <div class="col-sm-6 mb-8">
                                        <button style="margin-top:27px" id="search" type="submit" name="insertproductform" class="btn btn-outline-secondary btn-sm"><b>Search</b></button>
                                        <button type="submit" name="" onclick="reset()" value="" class="btn btn-outline-secondary btn-sm" style="margin-top:27px"><b>Reset</b></button>

                                    </div>


                                </div>
                                <div class="table-responsive">
                                    <table id="rejectedcostlist" class="display table-bordered" style="width:100%">
                                        <thead>
                                        <tr>
                                            <th colspan="1">18.01.2023</th>
                                            <th colspan="1">17:13</th>
                                            <th colspan="2">Doküman No: PÜP.02.01 </th>
                                            <th colspan="2">Yayın Tarihi: 02.12.2014  </th>
                                            <th colspan="2">Rev. Tarihi: --  </th>
                                            <th colspan="4">Rev. No: 00</th>
                                        </tr>
                                        <tr>
                                            <th colspan="12" class="text-center f-s-20">1.  BANT</th>
                                        </tr>
                                        <tr>
                                            <th class="text-custom text-center">Tarih</th>
                                            <th class="text-custom text-center">Saat</th>
                                            <th class="text-custom text-center">Kod</th>
                                            <th class="text-custom text-center">Açıklama</th>
                                            <th class="text-custom text-center">İHR</th>
                                            <th class="text-custom text-center">Ürün Kodu</th>
                                            <th class="text-custom text-center">Ürün İsmi</th>
                                            <th class="text-custom text-center">EAN</th>
                                            <th class="text-custom text-center">Depo</th>
                                            <th class="text-custom text-center">Kutu</th>
                                            <th class="text-custom text-center">Bilgi</th>
                                            <th class="text-custom text-center">Düzenle / Sil</th>

                                        </tr>
                                        </thead>
                                        <tbody>

                                        <tr>
                                            <td align="center">4 Mayıs 2022 Çarşamba</td>
                                            <td align="center">15:45</td>
                                            <td align="center">S029XD0K39XX0XMXXG50</td>
                                            <td align="center">30x40 Kaya Rustic Anthracıte / Mayıs Ayı üretilecek</td>
                                            <td align="center">1243</td>
                                            <td align="center">502278174 / Kutu etiketlerine basılacak</td>
                                            <td align="center">9,7x9,7 Kaya Rustıc Antracıte</td>
                                            <td align="center">6438313630234</td>
                                            <td align="center">127 depo / BMS</td>
                                            <td align="center">cello kutu</td>
                                            <td align="center">2.100,84 m² üstteki üretimden fazla geldi. İşletmede kalite ayrım bekleyen 1.230 m² daha var. Son çıkan teslimata göre banttan kaldırılacak</td>
                                            <td class="jsgrid-cell jsgrid-control-field jsgrid-align-center" style="width: 50px;">
                                                <a href="<?=operation_url('todolist_details')."?id=".$todo['id']?>" class="jsgrid-button jsgrid-edit-button " type="button" title="Edit"><iconify-icon icon="typcn:edit"  style="font-size:24px ;color: #0a4966;"></iconify-icon> </a>
                                                <a href="<?=operation_url('todolist_update')."?id=".$todo['id']."&delete=1&todotype=4"?>" class="jsgrid-button jsgrid-delete-button" type="button" title="Delete"><iconify-icon icon="material-symbols:restore-from-trash" style="font-size:24px;color: #0a4966;"></iconify-icon></a>
                                            </td>
                                        </tr>
                                        </tbody>
                                        <tfoot>
                                        <tr>
                                            <th>Tarih</th>
                                            <th>Saat</th>
                                            <th>Kod</th>
                                            <th>Açıklama</th>
                                            <th>İHR</th>
                                            <th>Ürün Kodu</th>
                                            <th>Ürün İsmi</th>
                                            <th>EAN</th>
                                            <th>Depo</th>
                                            <th>Kutu</th>
                                            <th>Bilgi</th>
                                            <th>Düzenle Sil</th>
                                        </tr>
                                        </tfoot>
                                    </table>
                                </div>
                            </div>
                            <!-- /# card -->
                        </div>
                        <!-- /# column -->
                    </div>
<?php require 'mainPageSeller/footer_seller.php'; ?>
                    <script>
                        $(document).ready(function() {
                            $('#rejectedcostlist').DataTable( {

                                scrollX: '300px',
                                scrollY: '600px',
                                scrollCollapse: true,
                                paging:         false,
                                fixedColumns:   {
                                    left: 1,
                                    right: 1
                                },
                                responsive:true,
                                dom: 'Bfrtip',
                                buttons: [
                                    'excel', 'pdf', 'copy', 'print'
                                ],
                                responsive: {
                                    details: false
                                }
                            });
                        });
                    </script>
                    <script src="https://code.iconify.design/iconify-icon/1.0.2/iconify-icon.min.js"></script>