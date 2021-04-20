
<?php
include "config/koneksi.php";
  //include "rss.php";
  //$iden=mysql_fetch_array(mysql_query("SELECT * FROM identitas"));
  //header("location: $iden[url]");  comment on 28092015
  //header('location:home');
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8">
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

  <title>PT PLN Enjiniring</title>

  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" rel="stylesheet">
  <link rel="stylesheet" href="<?php echo "layout/biru/css/style.css" ?>" type="text/css" />

  <script type="text/javascript"  src="<?php echo "layout/biru/js/app.js" ?>" charset="utf-8" defer></script>
  <script type="text/javascript"  src="<?php echo "layout/biru/js/slider.js" ?>" harset="utf-8" defer></script>

  <link rel="icon" href="favicon.png">

</head>

<body>
  <div class="container">
    <div class="navbar">
      <div class="menu">
        <div class="logo">
          <?php
          $logo = mysql_query("SELECT * FROM logo ORDER BY id_logo DESC LIMIT 1");

          while($b=mysql_fetch_array($logo)) {
            echo "<img src='logo/$b[gambar]'>";
          }
            ?>
          </div>
          <div class="hamburger-menu">
            <div class="bar"></div>
          </div>
        </div>
      </div>

      <div class="main-container">
        <div class="main">

          <div class="slider">
            <div class="slides">

              <div class="slide">
                <img class="gambar" src="images/Menara.jpeg">
                <div class="slide-data">
                  <div class="text-hal-utama">
                  <h5>Selamat datang Kembali!</h5>
                  <h2 class="title">PT Prima Layanan Nasional Enjiniring</h2>
                  <p>
                     Melakukan Bisnis di Bidang Teknik, Pengadaan dan Konstruksi (EPC), Operasi dan Pemeliharaan di Sektor Listrik Serta Non-Listrik dengan Memperkuat Layanan dan Meningkatkan Kualitas Sumber Daya Manusia.
                  </p>
                  <a class="btn-jelajah" href="home">
                    <span></span>
                    <span></span>
                    <span></span>
                    <span></span>
                    Jelajahi
                  </a>
                  </div>
                </div>
              </div>

              <?php
              $terkini=mysql_query("SELECT * FROM berita WHERE headline='Y' ORDER BY id_berita DESC LIMIT 2");

              while($t=mysql_fetch_array($terkini)){

                $isi_berita = strip_tags($t['isi_berita']);
                $isi = substr($isi_berita,0,150);
                $isi = substr($isi_berita,0,strrpos($isi," "));

                echo "<div class='slide'>
                <img class='gambar' src=foto_berita/$t[gambar]>
                <div class='slide-data'>
                <div class=text-hal-utama>
                <h5 class=title-berita>Berita Terkini</h5>
                <h2 class='title'>$t[judul]</h2>
                <p>$isi ... </p>
                <a class='btn-jelajah' href=berita-$t[judul_seo].html>
                 <span></span>
                    <span></span>
                    <span></span>
                    <span></span>
                Selengkapnya</span></a>
                </div>
                </div>
                </div>
                ";
              }
              ?>

               <div class="slide">
                <img class="gambar" src="images/bg-video.png">
                <div class="slide-data">
                  <div class="text-hal-utama">
                  <h5 class="title-video">Video Seputar PLNE</h5>
                  <h2 class="title">Jelajahi lebih jauh dengan menonton Video dari PT PLN Enjiniring</h2>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                  tempor incididunt ut labore et dolore magna aliqua.
                  </p>
                  <a class="btn-jelajah" href="semua-playlist.html">
                    <span></span>
                    <span></span>
                    <span></span>
                    <span></span>
                    Jelajahi
                  </a>
                  </div>
                </div>
              </div>

              <div class="slide">
                <img class="gambar" src="images/maps.png">
                <div class="slide-data">
                  <div class="text-hal-utama">
                  <h5 class="title-video">Proyek-Proyek Kami</h5>
                  <h2 class="title">PT PLN Enjiniring selalu memberikan hasil yang terbaik melaui Tim yang Kompeten dan Solid</h2>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                  tempor incididunt ut labore et dolore magna aliqua.
                  </p>
                  <a class="btn-jelajah" href="#">
                    <span></span>
                    <span></span>
                    <span></span>
                    <span></span>
                    Jelajahi
                  </a>
                  </div>
                </div>
              </div>


              <button class="arrows prev" onclick="plusSlides(-1)">
                <span><i class="fas fa-angle-left"></i></span>
              </button>
              <button class="arrows next" onclick="plusSlides(1)">
                <span><i class="fas fa-angle-right"></i></span>
              </button>


            </div> <!-- End of slides -->

            <div class="dots">
              <span class="dot" onClick="currentSlide(1)"></span>
              <span class="dot" onClick="currentSlide(2)"></span>
              <span class="dot" onClick="currentSlide(3)"></span>
              <span class="dot" onClick="currentSlide(4)"></span>
              <span class="dot" onClick="currentSlide(5)"></span>
            </div>



          </div> <!-- End of Slider -->

        </div> <!-- End of Main -->

        <div class="shadow one"></div>
        <div class="shadow two"></div>
      </div>


      <!-- Menus -->
      <div class="links">
        <ul>
          <?php
          function get_menu($data, $parent = 0)
          {
            static $i = 1;
            $tab = str_repeat(" ", $i);
            if (isset($data[$parent]))
            {
              $html = "$tab<li>";
              $i++;
              foreach ($data[$parent] as $v)
              {
                $child = get_menu($data, $v->id_menu);
                $html .= "$tab<li class='drop-down-li'>";

                $html .= '<a href="'.$v->link.'" style="--i: 0.05s;">'.$v->nama_menu.'</a>';
                if ($child)
                {
                  $i--;
                  $html .= "<ul class='drop-down-ul'>$child";
                  $html .= "$tab</ul>";
                }
                $html .= '</li>';
              }
              $html .= "$tab</li>";
              return $html;
            } else {
              return false;
            }
          }

          $result = mysql_query("SELECT * FROM menu WHERE aktif='Ya' ORDER BY id_menu");
          while ($row = mysql_fetch_object($result)) {
            $data[$row->id_parent][] = $row;
          }
          $menu = get_menu($data);
          echo "$menu";
          ?>
        </ul>

      </div>
      <!-- End of Menus -->

    </div>
    <!-- End of Container -->
  </body>
  </html>

  <!-- ========================================================================================================= -->

  <script type="text/javascript">


  var slideIndex = 1;
  showslide(slideIndex);

  function plusSlides(n) {
    showslide(slideIndex += n);
  }

  function currentSlide(n) {
    showslide(slideIndex = n);
  }

  function showslide(n) {
    var i;
    var slides = document.getElementsByClassName("slide");
    var dots = document.getElementsByClassName("dot");


    if (n > slides.length) {
      slideIndex = 1
    }
    if (n < 1) {
      slideIndex = slides.length
    }
    for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";
    }
    for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
    }
    slides[slideIndex-1].style.display = "block";
    dots[slideIndex-1].className += " active";
  }

  var slideIndex = 0;
  carousel();

  function carousel() {
    var i;
    var x = document.getElementsByClassName("slide");
    var dots = document.getElementsByClassName("dot");
    for (i = 0; i < x.length; i++) {
      x[i].style.display = "none";
    }
    slideIndex++;
    if (slideIndex > x.length) {
      slideIndex = 1
    }
    for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
    }
    x[slideIndex-1].style.display = "block";
    dots[slideIndex-1].className += " active";
        setTimeout(carousel, 6000); // Change image every 2 seconds
      }

    </script>