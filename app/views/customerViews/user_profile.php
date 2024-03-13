<?php require 'mainPageCustomer/header_customer.php'; ?>

<!-- ====================================
——— CONTENT WRAPPER
===================================== -->
        <div class="content-wrapper">
            <div class="content">
                <div class="bg-white border rounded animate__animated animate__fadeInLeft">
                    <div class="row no-gutters">
                        <div class="col-lg-4 col-xl-3">
                            <div class="profile-content-left profile-left-spacing pt-5 pb-3 px-3 px-xl-5">
                                <div class="card text-center widget-profile px-0 border-0">
                                    <div class="card-img mx-auto rounded-circle">
                                        <img src=" <?= public_url('images/avatars/profile2.jpg') ?>" alt="User Image" class="user-image" >

                                    </div>

                                    <div class="card-body">
                                        <h4 class="py-2 text-dark">Enes Demirel</h4>
                                        <p>enes@quatrading.com</p>
                                    </div>
                                </div>

                                <hr class="w-100">

                                <div class="contact-info pt-4 text-center bg-light">
                                    <h5 class="text-dark mb-1">İletişim Bilgileri</h5>
                                    <p class="text-dark font-weight-medium pt-4 mb-2">E-Posta Adresi</p>
                                    <p>enes@quatrading.com</p>
                                    <p class="text-dark font-weight-medium pt-4 mb-2">Telefon Numarası</p>
                                    <p>+99 9539 2641 31</p>
                                    <p class="text-dark font-weight-medium pt-4 mb-2">Doğum Günü</p>
                                    <p>Nov 15, 1990</p>
                                    <p class="text-dark font-weight-medium pt-4 mb-2">Sosyal Medya</p>
                                    <p class="pb-3 social-button">
                                        <a href="#" class="mb-1 btn btn-outline btn-twitter rounded-circle">
                                            <i class="mdi mdi-twitter"></i>
                                        </a>

                                        <a href="#" class="mb-1 btn btn-outline btn-linkedin rounded-circle">
                                            <i class="mdi mdi-linkedin"></i>
                                        </a>

                                        <a href="#" class="mb-1 btn btn-outline btn-facebook rounded-circle">
                                            <i class="mdi mdi-facebook"></i>
                                        </a>
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-8 col-xl-9">
                            <div class="profile-content-right profile-right-spacing py-5">
                                <ul class="nav nav-tabs px-3 px-xl-5 nav-style-border" id="myTab" role="tablist">

                                    <li class="nav-item">
										<a
										   class="nav-link"
										   id="profile-tab"
										   data-toggle="tab"
										   href="#profile"
										   role="tab"
										   aria-controls="profile"
										   aria-selected="false">
                          <span class="mdi mdi-face-profile"></span>Profil</a>
                      				</li>

                                    <li class="nav-item">
										<a
										  class="nav-link active"
										  id="settings-tab"
										  data-toggle="tab"
										  href="#settings"
										  role="tab"
										  aria-controls="settings"
										  aria-selected="false">
										  <span class="mdi mdi-settings"></span> Ayarlar</a>
                      				</li>
                                </ul>

                                <div class="tab-content px-3 px-xl-5" id="myTabContent">
                                    <div class="tab-pane fade" id="timeline" role="tabpanel" aria-labelledby="timeline-tab">
                                        <div class="media mt-5 profile-timeline-media timeline-media-spacing">
                                            <div class="align-self-start iconbox-45 overflow-hidden mr-3">
                                                <img src=" <?= public_url('images/user/u3.jpg') ?>" alt="Generic placeholder image" >

                                            </div>

                                            <div class="media-body">
                                                <h6 class="mt-0 text-dark">Larissa Gebhardt</h6>
                                                <span>Designer</span>
                                                <span class="float-right">5 mins ago</span>
                                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore
                                                    magna aliqua. ut enim ad minim veniam quis nostrud exercitation ullamco laboris nisi ut aliquip.</p>

                                                <div class="d-inline-block rounded overflow-hidden mt-4 mr-0 mr-lg-4">
                                                    <img src=" <?= public_url('images/products/pa1.jpg') ?>" alt="Product" >

                                                </div>

                                                <div class="d-inline-block rounded overflow-hidden mt-4 mr-0 mr-lg-4">
                                                    <img src=" <?= public_url('images/products/pa2.jpg') ?>" alt="Product" >
                                                </div>

                                                <div class="d-inline-block rounded overflow-hidden mt-4 mr-0 mr-lg-4">
                                                    <img src=" <?= public_url('images/products/pa3.jpg') ?>" alt="Product" >
                                                </div>
                                            </div>
                                        </div>

                                        <div class="media mt-5 profile-timeline-media">
                                            <div class="align-self-start iconbox-45 overflow-hidden mr-3">
                                                <img src=" <?= public_url('images/user/u4.jpg') ?>" alt="Generic placeholder image" >
                                            </div>

                                            <div class="media-body">
                                                <h6 class="mt-0 text-dark">Walter Reuter</h6>
                                                <span>Designer</span>
                                                <span class="float-right">2 hrs ago</span>
                                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore
                                                    magna aliqua. ut enim ad minim veniam quis nostrud exercitation ullamco laboris nisi ut aliquip.</p>
                                            </div>
                                        </div>

                                        <div class="media mt-5 profile-timeline-media">
                                            <div class="align-self-start iconbox-45 overflow-hidden mr-3">
                                                <img src=" <?= public_url('images/user/u7.jpg') ?>" alt="Generic placeholder image" >
                                            </div>

                                            <div class="media-body">
                                                <h6 class="mt-0 text-dark">Albrecht Straub</h6>
                                                <span>Designer</span>
                                                <span class="float-right">5 days ago</span>
                                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore
                                                    magna aliqua. ut enim ad minim veniam quis nostrud exercitation ullamco laboris nisi ut aliquip.</p>

                                                <div class="d-inline-block rounded overflow-hidden mt-4 mr-0 mr-lg-4">
                                                    <img src=" <?= public_url('images/products/pa4.jpg') ?>" alt="Product" >
                                                </div>
                                            </div>
                                        </div>

                                        <div class="media mt-5 profile-timeline-media">
                                            <div class="align-self-start iconbox-45 overflow-hidden mr-3">
                                                <img src=" <?= public_url('images/user/u8.jpg') ?>" alt="Generic placeholder image" >
                                            </div>

                                            <div class="media-body">
                                                <h6 class="mt-0 text-dark">Selena Wagner</h6>
                                                <span>Designer</span>
                                                <span class="float-right">Mar 05, 2018</span>
                                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore
                                                    magna aliqua. ut enim ad minim veniam quis nostrud exercitation ullamco laboris nisi ut aliquip.</p>

                                                <div class="d-inline-block rounded overflow-hidden mt-4 mr-0 mr-lg-4">
                                                    <img src=" <?= public_url('images/products/pa5.jpg') ?>" alt="Product" >
                                                </div>

                                                <div class="d-inline-block rounded overflow-hidden mt-4 mr-0 mr-lg-4">
                                                    <img src=" <?= public_url('images/products/pa6.jpg') ?>" alt="Product" >
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div
                        class="tab-pane fade"
                        id="profile"
                        role="tabpanel"
                        aria-labelledby="profile-tab"
                      >
                        <div class="tab-widget mt-5">
                          <div class="row">
                            <div class="col-xl-6">
                              <div
                                class="media widget-media p-4 bg-white border"
                              >
                                <div
                                  class="icon rounded-circle bg-warning mr-4"
                                >
                                  <i
                                    class="mdi mdi-cart-outline text-white"
                                  ></i>
                                </div>

                                <div class="media-body align-self-center">
                                  <h4 class="text-primary mb-2">7</h4>
                                  <p>Sipariş Yolda</p>
                                </div>
                              </div>
                            </div>

                            <div class="col-xl-6">
                              <div
                                class="media widget-media p-4 bg-white border"
                              >
                                <div class="icon rounded-circle mr-4 bg-danger">
                                  <i
                                    class="mdi mdi-cart-outline text-white"
                                  ></i>
                                </div>

                                <div class="media-body align-self-center">
                                  <h4 class="text-primary mb-2">19</h4>
                                  <p>Toplam Siparişlerim</p>
                                </div>
                              </div>
                            </div>
                          </div>

                          <div class="row">
                            <div class="col-12">
                              <!-- Recent Order Table -->
                              <div
                                class="card card-table-border-none"
                                id="recent-orders"
                              >
                                <div
                                  class="card-header justify-content-between"
                                >
                                  <h2>Son Siparişlerim</h2>

                                  <div class="date-range-report">
                                    <span>Oct 13, 2022 - Nov 11, 2022</span>
                                  </div>
                                </div>

                                <div class="card-body pt-0 pb-0">
                                  <table
                                    class="table card-table table-responsive table-responsive-large"
                                    style="width: 100%"
                                  >
                                    <thead>
                                      <tr class="text-center">
                                        <th>Ürün No</th>
                                        <th>Ürün Adı</th>
                                        <th class="d-none d-xl-table-cell">
                                          Sipariş Tarihi
                                        </th>
                                        <th class="d-none d-xl-table-cell">
                                          Sipariş Maliyeti
                                        </th>
                                        <th>Durumu</th>
                                        <th></th>
                                      </tr>
                                    </thead>

                                    <tbody class="text-center">
                                      <tr>
                                        <td>24541</td>
                                        <td>
                                          <a class="text-dark">
                                            Travertine Beige</a
                                          >
                                        </td>
                                        <td class="d-none d-xl-table-cell">
                                          Oct 20, 2018
                                        </td>
                                        <td class="d-none d-xl-table-cell">
                                          $230
                                        </td>
                                        <td>
                                          <span class="badge badge-success"
                                            >Tamamlandı</span
                                          >
                                        </td>
                                        <td class="text-right">
                                          <div
                                            class="dropdown show d-inline-block widget-dropdown"
                                          >
                                            <a
                                              class="dropdown-toggle icon-burger-mini"
                                              href=""
                                              role="button"
                                              id="dropdown-recent-order1"
                                              data-toggle="dropdown"
                                              aria-haspopup="true"
                                              aria-expanded="false"
                                              data-display="static"
                                            ></a>

                                            <ul
                                              class="dropdown-menu dropdown-menu-right"
                                              aria-labelledby="dropdown-recent-order1"
                                            >
                                              <li class="dropdown-item">
                                                <a href="#">Bak</a>
                                              </li>

                                              <li class="dropdown-item">
                                                <a href="#">Kaldır</a>
                                              </li>
                                            </ul>
                                          </div>
                                        </td>
                                      </tr>

                                      <tr>
                                        <td>24541</td>
                                        <td>
                                          <a class="text-dark"> Benelux Grey</a>
                                        </td>
                                        <td class="d-none d-xl-table-cell">
                                          Nov 15, 2018
                                        </td>
                                        <td class="d-none d-xl-table-cell">
                                          $550
                                        </td>
                                        <td>
                                          <span class="badge badge-warning"
                                            >Gecikmiş</span
                                          >
                                        </td>
                                        <td class="text-right">
                                          <div
                                            class="dropdown show d-inline-block widget-dropdown"
                                          >
                                            <a
                                              class="dropdown-toggle icon-burger-mini"
                                              href="#"
                                              role="button"
                                              id="dropdown-recent-order2"
                                              data-toggle="dropdown"
                                              aria-haspopup="true"
                                              aria-expanded="false"
                                              data-display="static"
                                            ></a>

                                            <ul
                                              class="dropdown-menu dropdown-menu-right"
                                              aria-labelledby="dropdown-recent-order2"
                                            >
                                              <li class="dropdown-item">
                                                <a href="#">Bak</a>
                                              </li>

                                              <li class="dropdown-item">
                                                <a href="#">Kaldır</a>
                                              </li>
                                            </ul>
                                          </div>
                                        </td>
                                      </tr>
                                    </tbody>
                                  </table>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>

                                    <div
                        class="tab-pane fade show active"
                        id="settings"
                        role="tabpanel"
                        aria-labelledby="settings-tab"
                      >
                                        <div class="tab-pane-content mt-5">
                          <form>
                            <div class="form-group row mb-4">
                              <label
                                for="coverImage"
                                class="col-sm-4 col-lg-2 col-form-label"
                                >Kullanıcı Resmi</label
                              >
                              <div class="col-sm-8 col-lg-10">
                                <div class="custom-file mb-1">
                                  <input
                                    type="file"
                                    class="custom-file-input"
                                    disabled
                                    id="coverImage"
                                    required=""
                                  />
                                  <label
                                    class="custom-file-label"
                                    for="coverImage"
                                    >Dosya seçin...</label
                                  >
                                  <div class="invalid-feedback">
                                    Example invalid custom file feedback
                                  </div>
                                </div>
                              </div>
                            </div>

                            <div class="row mb-2 mt-1">
                              <div class="col-lg-6">
                                <div class="form-group">
                                  <label for="ad">Adı:</label>
                                  <input
                                    type="text"
                                    disabled
                                    class="form-control"
                                    id="ad"
                                    value="Enes"
                                  />
                                </div>
                              </div>

                              <div class="col-lg-6">
                                <div class="form-group">
                                  <label for="soyad">Soyad:</label>
                                  <input
                                    type="text"
                                    disabled
                                    class="form-control"
                                    id="soyad"
                                    value="Demirel"
                                  />
                                </div>
                              </div>
                            </div>

                            <div class="form-group mb-4">
                              <label for="eposta">E-Posta:</label>
                              <input
                                type="email"
                                disabled
                                class="form-control"
                                id="eposta"
                                value="enes@quatrading.com"
                              />
                            </div>

                            <div class="form-group mb-4">
                              <label for="oldPassword">Eski Şifre:</label>
                              <input
                                type="password"
                                disabled
                                class="form-control"
                                id="oldPassword"
                              />
                            </div>

                            <div class="form-group mb-4">
                              <label for="newPassword">Yeni Şifre:</label>
                              <input
                                type="password"
                                disabled
                                class="form-control"
                                id="newPassword"
                              />
                            </div>

                            <div class="form-group mb-4">
                              <label for="conPassword">Şifreyi Onayla:</label>
                              <input
                                type="password"
                                disabled
                                class="form-control"
                                id="conPassword"
                              />
                            </div>

                            <div class="d-flex justify-content-end mt-5">
                              <button
                                type="submit"
                                disabled
                                class="btn btn-primary mb-2 btn-pill"
                              >
                                Profili Güncelle
                              </button>
                            </div>
                          </form>
                        </div>
                    </div>
                </div>
            </div> <!-- End Content -->
        </div> <!-- End Content Wrapper -->


        <?php require 'mainPageCustomer/footer_customer.php'; ?>



<script src="<?= public_url('plugins/daterangepicker/moment.min.js') ?>"></script>
<script src="<?= public_url('plugins/daterangepicker/daterangepicker.js') ?>"></script>
<script src="<?= public_url('js/date-range.js') ?>"></script>
</body>
</html>

