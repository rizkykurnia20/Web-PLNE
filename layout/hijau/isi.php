 
<?php
if ($_GET['module']=='home') { ?>

<div class="beranda">

  <!-- Jasa -->
  <section class="section-jasa">
    <div class="row-jasa-judul">
      <h1>Jasa yang Kami Tawarkan!</h1>
    </div>
    <div class="row-jasa">
      <div class="col-jasa">
        <img class="icon-jasa" src="images/ic_enjiniring.png">
        <h3>Jasa Enjiniring</h3>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
          tempor incididunt ut labore et dolore magna aliqua.</p>
          <a href=""> Lebih jauh</a>
        </div>
        <div class="col-jasa">
          <img class="icon-jasa" src="images/ic_pengembangan.png">
          <h3>Jasa Pengembangan Enjiniring</h3>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
            tempor incididunt ut labore et dolore magna aliqua.</p>
            <a href=""> Lebih jauh</a>
          </div>
          <div class="col-jasa">
            <img class="icon-jasa" src="images/ic_konsultasi.png">
            <h3>Jasa Konsultan Enjiniring</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
              tempor incididunt ut labore et dolore magna aliqua.</p>
              <a href=""> Lebih jauh</a>
            </div>
          </div>
        </section>
        <!-- Akhir dari Jasa -->


        <!-- About -->
        <section class="section-about">
          <div class="row-about">
            <div class="col-about-left">
              <div class="about-images">
                <div class="ca-left-img1">
                  <img src="images/about.jpg">
                </div>
                <div class="ca-left-img2">
                  <img src="images/15.jpg">
                </div> 
              </div>
            </div>
            <div class="col-about-right">
              <h1>Siapa Kami?</h1>
              <p>PT PLN Enjiniring selalu memberikan yang terbaik untuk kliennya, didukung oleh tim yang kompeten dan solid. Dalam melakukan tugasnya, komitmen PLN Enjiniring diimplementasikan pada setiap kebijakan perusahaan, termasuk:</p>
              <ul class="ca-right-layanan fa-ul">
                <li><span class="fa-li"><i class="fa fa-check"></i></span>Layanan pelanggan yang optimal, berdasarkan trilogi proyek tentang pengiriman waktu, harga kompetitif dan kualitas terjamin.</li>
                <li><span class="fa-li"><i class="fa fa-check"></i></span>Pendekatan yang komprehensif dan berkesinambungan pada unit organisasi PT PLN (Persero) termasuk anak perusahaannya.</li>
                <li><span class="fa-li"><i class="fa fa-check"></i></span>Penugasan insinyur profesional yang mampu mengikuti listrik serta pengembangan teknologi non-listrik.</li>
                <li><span class="fa-li"><i class="fa fa-check"></i></span>Penghematan biaya di semua sektor tanpa mengorbankan kualitas implementasi proyek.</li>
                <li><span class="fa-li"><i class="fa fa-check"></i></span>Pengawasan administrasi keuangan atas proyek-proyek untuk memastikan kepatuhan terhadap norma-norma dan bisnis industri yang sehat.</li>
              </ul>
              <div class="ca-right-btn">
                <a href="">Lebih Jauh</a>
              </div>
            </div>
          </div>
        </section>
        <!-- Akhir dari About -->


        <!-- Informasi -->
        <section class="section-informasi" data-parallax="scroll" data-z-index="1" data-image-src="images/proyek2.jpg">
          <div class="overlay"></div>
          <div class="row-informasi">
            <div class="col-informasi">
              <img src="images/group.png">
              <h3 class="num">200</h3>
              <p>Team Members</p>
            </div>
            <div class="col-informasi">
              <img src="images/career.png">
              <h3 class="num">95</h3>
              <p>Business Success</p>
            </div>
            <div class="col-informasi">
              <img src="images/heart.png">
              <h3 class="num">5500</h3>
              <p>Happy Client</p>
            </div>
            <div class="col-informasi">
              <img src="images/team.png">
              <h3 class="num">5600</h3>
              <p>Business Done</p>
            </div>
          </div>
        </section>
        <!-- Akhir dari Informasi -->


        <!-- Proyek -->
        <section class="section-proyek">
          <div class="row-judul-proyek">
            <h1>Proyek Terbaru</h1>
            <p>PT Prima Layanan Nasional Enjiniring (PT PLN Enjiniring) akan menghadapi tantangan yang diberikan oleh peluang peluang listrik saat ini dan masa depan</p>
            <a href=""> Lihat Semua Proyek</a>
          </div>
          <div class="row-proyek">
            <ul>
              <li class="list active" data-filter="all">Semua</li>
              <li class="list" data-filter="a">Daerah A</li>
              <li class="list" data-filter="b">Daerah B</li>
              <li class="list" data-filter="c">Daerah C</li>
            </ul>
            <div class="product">
              <div class="itemBox a"><img src="images/proyek1.jpg"></div>
              <div class="itemBox b"><img src="images/proyek2.jpg"></div>
              <div class="itemBox c"><img src="images/proyek3.jpg"></div>
              <div class="itemBox a"><img src="images/proyek4.jpg"></div>
              <div class="itemBox c"><img src="images/proyek5.jpg"></div>
              <div class="itemBox a"><img src="images/proyek1.jpg"></div>
              <div class="itemBox b"><img src="images/proyek2.jpg"></div>
              <div class="itemBox a"><img src="images/proyek3.jpg"></div>
              <div class="itemBox c"><img src="images/proyek5.jpg"></div>
            </div>
          </div>
        </section>
        <!-- Akhir dari Proyek -->


        <!-- Service -->
        <section class="section-service">
          <div class="service">
           <h1>Layanan yang Kami Tawarkan!</h1>
         </div>
         <div class="service">
          <div class="row-service">
            <div class="col-service">
              <img class="icon-service" src="images/analysis.png">
              <h3>Analisis dan Desain Konseptual</h3>
              <p>Studi Kelayakan, Studi Dampak Lingkungan dan Penempatan, Analisis Ekonomi dan Teknis, ...</p>
            </div>
            <div class="col-service">
              <img class="icon-service" src="images/analysis.png">
              <h3>Penghargaan Teknik dan Kontrak</h3>
              <p>Perencanaan Umum, Teknik Dasar, Teknik Izin, Teknik Detail, Spesifikasi Pabrik dan Fungsional, ...</p>
            </div>
            <div class="col-service">
              <img class="icon-service" src="images/analysis.png">
              <h3>Implementasi</h3>
              <p>Tinjauan Gambar, Penerimaan Toko, Manajemen dan Pengawasan Lokasi Spesialis, ...</p>
            </div>
            <div class="col-service">
              <img class="icon-service" src="images/analysis.png">
              <h3>Operasi</h3>
              <p>Optimasi Proses, Manajemen Lingkungan, Risiko dan Kualitas, Penjadwalan Pemeliharaan, ...</p>
            </div>
            <div class="col-service">
              <img class="icon-service" src="images/analysis.png">
              <h3>Konsultasi Bisnis</h3>
              <p>Analisis Pasar, Studi Tarif, Pengembangan Proyek, Strategi dan Organisasi, ...</p>
            </div>      
          </div>     
        </div>
      </section>
      <!-- Akhir dari Service -->


      <!-- Berita -->
      <section class="section-berita">
        <div class="row-judul-berita">
          <h1>Berita Terkini</h1>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
            tempor incididunt ut labore et dolore magna aliqua.</p>
          </div>
          <div class="row-berita">
            <div class="sb-box">
             <div class="sb-box-tgl">
              <h1>09</h1>
              <p>Jan</p>
            </div>
            <img src="images/berita1.jpg">
            <h3>Judul Berita</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
              tempor incididunt ut labore et ... </p>
              <a href=""> Baca lebih jauh </a>
            </div>
            <div class="sb-box">
              <div class="sb-box-tgl">
                <h1>09</h1>
                <p>Jan</p>
              </div>
              <img src="images/berita1.jpg">
              <h3>Judul Berita</h3>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                tempor incididunt ut labore et ... </p>
                <a href=""> Baca lebih jauh </a>
              </div>
              <div class="sb-box">
                <div class="sb-box-tgl">
                  <h1>09</h1>
                  <p>Jan</p>
                </div>
                <img src="images/berita1.jpg">
              </i><h3>Judul Berita</h3>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                tempor incididunt ut labore et ... </p>
                <a href=""> Baca lebih jauh </a>
              </div>
            </div>
          </section>
          <!-- Akhir dari Berita -->


          <!-- Quote -->
          <section class="section-quote" data-parallax="scroll" data-z-index="1" data-image-src="images/proyek3.jpg">
            <div class="overlay-quote"></div>
            <div class="row-quote">
              <div class="testimoni">
                <h3>Testimoni</h3>
                <h1>Happy Client & Feedbacks</h1>
              </div>
              <div class="carousel-quote owl-carousel">
                <div class="col-quote">
                  <div class="quote-image">
                    <img src="images/quote-left.png">
                  </div>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                    tempor incididunt ut labore et dolore magna aliqua.</p>
                    <div class="client">
                      <div class="client-image">
                        <img src="images/profile.png">
                      </div>
                      <div class="client-name">
                        <h4>Rizky</h4>
                        <p>Teknologi Informasi</p>
                      </div>
                    </div>
                  </div>

                  <div class="col-quote">
                    <div class="quote-image">
                      <img src="images/quote-left.png">
                    </div>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                      tempor incididunt ut labore et dolore magna aliqua.</p>
                      <div class="client">
                        <div class="client-image">
                          <img src="images/profile.png">
                        </div>
                        <div class="client-name">
                          <h4>Rizky</h4>
                          <p>Teknologi Informasi</p>
                        </div>
                      </div>
                    </div>

                    <div class="col-quote">
                      <div class="quote-image">
                        <img src="images/quote-left.png">
                      </div>
                      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                        tempor incididunt ut labore et dolore magna aliqua.</p>
                        <div class="client">
                          <div class="client-image">
                            <img src="images/profile.png">
                          </div>
                          <div class="client-name">
                            <h4>Rizky</h4>
                            <p>Teknologi Informasi</p>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </section>
                <!-- Akhir dari Quote -->


                <!-- Kontak -->
                <section class="section-contact-us">
                  <div class="row-judul-contact">
                    <h3>Kontak Kami</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                      tempor incididunt ut labore et dolore magna aliqua.</p>
                    </div>
                    <div class="row-contact">
                      <div class="col-kontak-info">
                        <div class="kontak-info">
                          <i class="fa fa-map-marker"></i><h4>Alamat</h4>
                          <p>Jl.Ciputat Raya No.123 Kebayoran Lama
                            Jakarta Selatan - 12310 Indonesia</p>
                          </div>
                          <div class="kontak-info">
                            <i class="fa fa-phone"></i><h4>Nomor Kontak</h4>
                            <p>Telpon: (62-21) 27510363</p>
                            <p>Fax: (62-21) 27510362</p>
                          </div>
                          <div class="kontak-info">
                            <i class="fa fa-envelope"></i><h4>Email</h4>
                            <p>pln-enjiring@plne.co.id</p>
                          </div>
                          <div class="kontak-info">
                            <i class="fa fa-map-marker"></i><h4>Website</h4>
                            <p><a href="">www.plne.co.id</a></p>
                          </div>
                        </div>
                        <div class="col-form">
                          <form>
                            <input type="input" id="nama" name="nama" placeholder="Nama Anda">
                            <input type="input" id="email" name="email" placeholder="Email Anda">
                            <input type="input" id="subjek" name="subjek" placeholder="Subjek">
                            <textarea id="subjek" name="subjek" placeholder="Pesan"></textarea>
                            <div class="btn-pesan">
                              <input type="submit" value="Kirim Pesan">
                            </div>
                          </form>
                        </div>
                      </div>
                    </section>
                    <!-- Akhir dari kontak -->


                    <!-- Maps -->
                    <section class="section-maps">
                      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3965.890791887714!2d106.77114068011346!3d-6.27808619239181!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f684d67b4277%3A0x521bbc0a34fac85!2sPT.%20Prima%20Layanan%20Nasional%20Enjiniring!5e0!3m2!1sid!2sid!4v1615972641957!5m2!1sid!2sid" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                    </section>
                    <!-- Akhir dari Maps -->

                  </div>
                  <!-- Akhir dari Beranda -->
                  <?php 
                }

  // DETAIL BERITA////////////////////////////////////////////
              elseif ($_GET['module']=='detailberita'){
                include "$f[folder]/modul/mod_berita/detailberita.php";
              }
  ////////////////////////////////////////////////////////////

  // KATEGORI BERITA ////////////////////////////////////////////
            elseif ($_GET['module']=='detailkategori'){
              include "$f[folder]/modul/mod_berita/detailkategori.php";
            }
  ////////////////////////////////////////////////////////////

  // CARI BERITA ////////////////////////////////////////////
          elseif ($_GET['module']=='hasilcari'){
            include "$f[folder]/modul/mod_berita/hasilcari.php";
          }
  ////////////////////////////////////////////////////////////

  // SEMUA BERITA ////////////////////////////////////////////
        elseif ($_GET['module']=='semuaberita'){
          include "$f[folder]/modul/mod_berita/semuaberita.php";
        }
  ////////////////////////////////////////////////////////////


  // DETAIL AGENDA ////////////////////////////////////////////
      elseif ($_GET['module']=='detailagenda'){
        include "$f[folder]/modul/mod_agenda/detailagenda.php";
      }
  /////////////////////////////////////////////////////////////

  // SEMUA AGENDA ////////////////////////////////////////////
    elseif ($_GET['module']=='semuaagenda'){
      include "$f[folder]/modul/mod_agenda/semuaagenda.php";
    }
  /////////////////////////////////////////////////////////////

  // LIHAT POLING ////////////////////////////////////////////
  elseif ($_GET['module']=='lihatpoling'){
    include "$f[folder]/modul/mod_poling/lihatpoling.php";
  }
  /////////////////////////////////////////////////////////////

  // HASIL POLING ////////////////////////////////////////////
elseif ($_GET['module']=='hasilpoling'){
  include "$f[folder]/modul/mod_poling/hasilpoling.php"; 
}  
  /////////////////////////////////////////////////////////////


  // BERITA FOTO ////////////////////////////////////////////
elseif ($_GET['module']=='detailalbum'){
  include "$f[folder]/modul/mod_album/detailalbum.php"; 
}
  /////////////////////////////////////////////////////////////


  // VIDEO ////////////////////////////////////////////
elseif ($_GET['module']=='play'){
  include "$f[folder]/modul/mod_video/play.php";
}
  /////////////////////////////////////////////////////////////

  // PLAYLIST VIDEO ////////////////////////////////////////////
elseif ($_GET['module']=='semuaplaylist'){
  include "$f[folder]/modul/mod_playlist/semuaplaylist.php";
}
  /////////////////////////////////////////////////////////////

  // DEATAIL PLAYLIST VIDEO ////////////////////////////////////////////
elseif ($_GET['module']=='detailplaylist'){
  include "$f[folder]/modul/mod_playlist/detailplaylist.php";
}
  /////////////////////////////////////////////////////////////


   // DEATAIL HALAMAN STATIS ////////////////////////////////////////////
elseif ($_GET['module']=='halamanstatis'){
  include "$f[folder]/modul/mod_halaman/halaman.php";
}
  /////////////////////////////////////////////////////////////


 // HUBUNGI KAMI////////////////////////////////////////////
elseif ($_GET['module']=='hubungikami'){
  include "$f[folder]/modul/mod_hubungi/hubungi.php";
}
 /////////////////////////////////////////////////////////////

 // HUBUNGI AKSI ////////////////////////////////////////////
elseif ($_GET['module']=='hubungiaksi'){
  include "$f[folder]/modul/mod_hubungi/hubungiaksi.php";
}
 /////////////////////////////////////////////////////////////


  // DEATAIL HALAMAN ERROR ////////////////////////////////////////////
elseif ($_GET['module']=='notfound'){
  include "$f[folder]/modul/404/404.php";
}
  /////////////////////////////////////////////////////////////

  //========= Copyright © 2012. Developed by: Rizal Faizal  =======

?>      
