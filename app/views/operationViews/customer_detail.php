<?php require 'mainPageOperation/header_operation.php'?>
<div class="content-wrap">
    <div class="main">
        <div class="container-fluid mb-5">
            <section id="main-content">
                <div class="row mt-3">
                    <div class="col-lg-12">
                        <div class="card animate__animated animate__fadeInLeft">
                            <div class="card-header card-header-border-bottom bg-white">
                                <h2>Hesabım</h2>
                            </div>
                            <div class="row mt-5">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label for="company" style="margin-bottom: 0;">Firmanın Tam Ünvanı:</label>
                                        <div class="input-group mb-2">
                                            <div class="input-group-prepend">
                                                    <span class="input-group-text">
                                                      <i class="mdi mdi-subtitles"></i>
                                                    </span>
                                            </div>

                                            <input type="text" class="form-control" data-mask="(999) 999-9999" placeholder="Stones Enter BV" aria-label="" autocomplete="off" maxlength="" disabled="">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label for="adress" style="margin-bottom: 0;">Adresi:</label>
                                        <div class="input-group mb-2">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text">
                                                  <i class="mdi mdi-map-marker"></i>
                                                </span>
                                            </div>

                                            <input type="text" class="form-control" data-mask="(999) 999-9999" placeholder="Vonderveg 25 7468 DC Enter The Netherlands" aria-label="" autocomplete="off" maxlength="" disabled="">
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label for="ülke" style="margin-bottom: 0;">Ülke:</label>
                                        <div class="input-group mb-2">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text">
                                                  <i class="mdi mdi-map"></i>
                                                </span>
                                            </div>

                                            <select class="form-control" disabled>
                                                <option>1</option>
                                                <option>2</option>
                                                <option>3</option>
                                                <option>4</option>
                                                <option>5</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label for="Telefon" style="margin-bottom: 0;">Telefon Numarası:</label>
                                        <div class="input-group mb-2">
                                            <div class="input-group-prepend">
                                            <span class="input-group-text">
                                              <i class="mdi mdi-phone"></i>
                                            </span>
                                            </div>

                                            <input type="text" class="form-control" data-mask="(999) 999-9999" placeholder="0031(0)547-38-59-16" aria-label="" autocomplete="off" maxlength="" disabled="">
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label for="fax" style="margin-bottom: 0;">Faks Numarası:</label>
                                        <div class="input-group mb-2">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text">
                                                  <i class="mdi mdi-fax"></i>
                                                </span>
                                            </div>

                                            <input type="text" class="form-control" data-mask="(999) 999-9999" placeholder="" aria-label="" autocomplete="off" maxlength="" disabled="">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label for="E-Posta" style="margin-bottom: 0;">E-Posta Adresi:</label>
                                        <div class="input-group mb-2">
                                            <div class="input-group-prepend">
                                              <span class="input-group-text">
                                                <i class="mdi mdi-email"></i>
                                              </span>
                                            </div>
                                            <input type="text" class="form-control" id="E-Posta" name="E-Posta" placeholder="enes@quatrading.com" disabled="">
                                        </div>

                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label for="contact" style="margin-bottom: 0;">İrtibat Kurulacak Kişi Adı Soyadı:</label>
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text">
                                                  <i class="mdi mdi-account"></i>
                                                </span>
                                            </div>
                                            <input type="text" class="form-control" placeholder="Bart Knol" aria-label="" disabled="">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label for="tax" style="margin-bottom: 0;">Vergi Dairesi:</label>
                                        <div class="input-group mb-2">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text">
                                                  <i class="mdi mdi-lead-pencil"></i>
                                                </span>
                                            </div>

                                            <input type="text" class="form-control" data-mask="" placeholder="" aria-label="" autocomplete="off" maxlength="" disabled="">
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label for="taxnumber" style="margin-bottom: 0;">Vergi Numarası / T.C. Kimlik Numarası:</label>
                                        <div class="input-group mb-2">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text">
                                                  <i class="mdi mdi-currency-usd"></i>
                                                </span>
                                            </div>

                                            <input type="text" class="form-control" data-mask="99-9999999" placeholder="VAT Nr NL859557169" aria-label="" autocomplete="off" maxlength="" disabled="">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label for="bank" style="margin-bottom: 0;">Çalıştığı Banka Adı:</label>
                                        <div class="input-group mb-2">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text">
                                                  <i class="mdi mdi-bank"></i>
                                                </span>
                                            </div>

                                            <input type="text" class="form-control" data-mask="99-9999999" placeholder="" aria-label="" autocomplete="off" maxlength="" disabled="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label for="bank" style="margin-bottom: 0;">Çalıştığı Banka Şubesi:</label>
                                        <div class="input-group mb-2">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text">
                                                  <i class="mdi mdi-bank-transfer"></i>
                                                </span>
                                            </div>

                                            <input type="text" class="form-control" data-mask="99-9999999" placeholder="" aria-label="" autocomplete="off" maxlength="" disabled="">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label for="ıban" style="margin-bottom: 0;">İban Numarası:</label>
                                        <div class="input-group mb-2">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text">
                                                    <i class="mdi mdi-credit-card"></i>
                                                </span>
                                            </div>
                                            <input type="text" class="form-control" data-mask="9999 9999 9999 9999" placeholder="" aria-label="" autocomplete="off" maxlength="19" disabled="">
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label for="bank" style="margin-bottom: 0;">Posta Kodu:</label>
                                        <div class="input-group mb-2">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text">
                                                  <i class="mdi mdi-email-mark-as-unread"></i>
                                                </span>
                                            </div>

                                            <input type="text" class="form-control" data-mask="99-9999999" placeholder="" aria-label="" autocomplete="off" maxlength="" disabled="">
                                        </div>
                                        <div class="input-group">
                                            <button class="btn btn-primary btn-default btn-md mt-2">Gönder</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php require 'mainPageOperation/footer_operation.php'?>
