<?php error_reporting(0); ?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>

  <meta charset="UTF-8">
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <meta name="robots" content="index, follow">
  <meta http-equiv="imagetoolbar" content="no">
  <meta name="language" content="Betawi-Indonesia">
  <meta name="revisit-after" content="7">
  <meta name="webcrawlers" content="all">
  <meta name="rating" content="general">
  <meta name="spiders" content="all">
  <meta name="description" content="This is my awesome video channel.">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title><?php include "teraskreasi_titel.php"; ?></title>

  <link rel="shortcut icon" href="favicon.png" />

  <link rel="alternate" type="application/rss+xml" title="RSS 2.0" href="rss.xml" />

  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" crossorigin="anonymous">

  <!-- css template -->
  <link rel="stylesheet" type="text/css" href="<?= "layout/hijau/css/template.css" ?>">

  <!-- css berita -->
  <link rel="stylesheet" type="text/css" href="<?= "layout/hijau/css/detail-berita.css" ?>">
  <link rel="stylesheet" type="text/css" href="<?= "layout/hijau/css/berita/berita.css" ?>">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
  <link rel="stylesheet" href="layout/hijau/css/video/playlist.css">
  <link rel="stylesheet" href="layout/hijau/css//video/venobox.css" type="text/css" media="screen" />


  <!-- css beranda -->
  <link rel="stylesheet" type="text/css" href="<?= "layout/hijau/css/beranda/beranda.css" ?>">

</head>

<body>
  <!-- Header -->
  <header>

    <div class="container-header">
      <input type="checkbox" name="" id="check">

      <!-- Logo -->
      <div class="logo-container">
        <?php
        $logo = mysql_query("SELECT * FROM logo ORDER BY id_logo DESC LIMIT 1");
        $iden = mysql_fetch_array(mysql_query("SELECT * FROM identitas"));

        while ($b = mysql_fetch_array($logo)) {
          echo "<a href='index.php'><img class='logo' src='logo/$b[gambar]'/></a>";
        }
        ?>
      </div>
      <!-- End of Logo -->

      <!-- Navigation Bar -->
      <div class="nav-btn">
        <div class="nav-links">
          <ul>
            <?php
            function get_menu($data, $parent = 0, $class = false)
            {
              static $i = 1;
              $tab = str_repeat(" ", $i);

              if ($data[$parent]) {

                $i++;

                foreach ($data[$parent] as $v) {
                  if ($class) {
                    $child = get_menu($data, $v->id_menu);
                    $html .= "$tab<li class='dropdown-link'>";
                    $html .= '<a href="' . $v->link . '">' . $v->nama_menu . '</a>';
                  } else {
                    $child = get_menu($data, $v->id_menu);
                    $html .= "$tab<li class='nav-link' style='--i: .6s'>";
                    $html .= '<a href="' . $v->link . '">' . $v->nama_menu . '</a>';
                  }

                  if ($child) {
                    $child = get_menu($data, $v->id_menu, true);
                    $i--;
                    if ($class) {
                      $html .= "<div class='dropdown second'>";
                      $html .= "<ul> $child";
                      $html .= "<div class='arrow'></div>";
                      $html .= "$tab</ul>";
                      $html .= "</div>";
                    } else {
                      $html .= "<div class='dropdown'>";
                      $html .= "<ul> $child";
                      $html .= "<div class='arrow'></div>";
                      $html .= "$tab</ul>";
                      $html .= "</div>";
                    }
                  }
                  $html .= '</li>';
                }
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
      </div>
      <div class="hamburger-menu-container">
        <div class="hamburger-menu">
          <div></div>
        </div>
      </div>
      <!-- End of Navigation Bar -->

    </div>
  </header>
  <!-- End of header -->

  <!-- Banner -->
  <section class="banner" data-parallax="scroll" data-z-index="1" data-image-src="images/proyek2.jpg">
    <!-- <img src="images/bg-beranda.png"> -->
    <div class=banner-overlay></div>
    <div class="content">
      <h2>SELAMAT DATANG</h2>
      <h4>PT PLN ENJINIRING</h4>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam</p>
    </div>
  </section>
  <!-- End of Banner -->


  <!-- Content -->
  <?php
  include "$f[folder]/isi.php";
  ?>
  <!-- End of Content -->


  <!-- Footer -->
  <footer>
    <div class="container-footer">
      <div class="sec aboutus">
        <h2>About Us</h2>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit,
          sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
        </p>
        <ul class="sci">
          <li><a href="#"><i class="fa fa-facebook"></i> </a> </li>
          <li><a href="#"><i class="fa fa-twitter"></i> </a> </li>
          <li><a href="#"><i class="fa fa-instagram"></i> </a> </li>
          <li><a href="#"><i class="fa fa-youtube-play"></i> </a> </li>
        </ul>
      </div>
      <div class="sec quickLinks">
        <h2>Quick Links</h2>
        <ul>
          <li><a href="#">Beranda</a></li>
          <li><a href="#">Produk & Jasa</a></li>
          <li><a href="#">Proyek</a></li>
          <li><a href="#">CGC</a></li>
          <li><a href="#">KARIR</a></li>
          <li><a href="#">Tentang Kami</a></li>
        </ul>
      </div>
      <div class="sec contact">
        <h2>Contact Info</h2>
        <ul class="info">
          <li>
            <span><i class="fa fa-map-marker"></i> </span>
            <span>PLN ENJINIRING<br> Jl.Ciputat Raya No.123 Kebayoran Lama <br>
              Jakarta Selatan - 12310 Indonesia</span>
          </li>

          <li>
            <span><i class="fa fa-phone"></i> </span>
            <span>Telpon: <a href="#">(62-21) 27510363</a>
              <br> Fax: <a href="#">(62-21) 27510362</a></span>
          </li>

          <li>
            <span><i class="fa fa-envelope"></i> </span>
            <span> <a href="#"> pln-enjiring@plne.co.id </a></span>
          </li>
        </ul>
      </div>
    </div>
  </footer>
  <div class="copyrightText">
    <p>© 2017 PLN Enjiniring. All Rights Reserved.</p>
  </div>
  <!-- End of Footer -->

</body>

</html>


<!-- ================================================================================================= -->

<!-- My Java Scripts  -->

<!-- Custom Script -->

<!-- Script External -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="layout/hijau/js/parallax.min.js"></script>

<script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
<script type="text/javascript" src="layout/hijau/js/jquery-3.4.1.min.js"></script>
<script type="text/javascript" src="layout/hijau/js/venobox.min.js"></script>

<script>
  $(document).ready(function() {
    $('.venobox').venobox({
      closeColor: '#f4f4f4',
      spinColor: '#f4f4f4',
      arrowsColor: '#f4f4f4',
      closeBackground: '#17191D',
      overlayColor: 'rgba(23,25,29,0.8)'
    });
  });
</script>


<script src="https://cdnjs.cloudflare.com/ajax/libs/Counter-Up/1.0.0/jquery.counterup.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/jquery.waypoints.js"></script>



<script type="text/javascript">
  $(document).ready(function() {
    $('.list').click(function() {
      const value = $(this).attr('data-filter');
      if (value == 'all') {
        $('.itemBox').show('1000');
      } else {
        $('.itemBox').not('.' + value).hide('1000');
        $('.itemBox').filter('.' + value).show('1000');
      }
    })

    $('.list').click(function() {
      $(this).addClass('active').siblings().removeClass('active');
    })

  })
</script>


<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>

<script>
  $(".post-wrapper").owlCarousel({
    margin: 20,
    loop: true,
    autoplay: true,
    autoplayTimeout: 2000,
    autoplayHoverPause: true,
    responsive: {
      0: {
        items: 1,
        nav: false
      },
      600: {
        items: 2,
        nav: false
      },
      1200: {
        items: 3,
        nav: false
      },
      1600: {
        items: 4,
        nav: false
      }
    }
  });
</script>


<script>
  $(".carousel-quote").owlCarousel({
    margin: 20,
    loop: true,
    autoplay: true,
    autoplayTimeout: 3000,
    smartSpeed: 2000,
    autoplayHoverPause: true,
    responsive: {
      0: {
        items: 1,
        nav: false
      },
      600: {
        items: 2,
        nav: false
      },
      1000: {
        items: 3,
        nav: false
      }
    }
  });
</script>

<script type="text/javascript">
  $(".num").counterUp({
    delay: 10,
    time: 2000
  });
</script>


<script type="text/javascript">
  // Scroll Navigation
  window.addEventListener('scroll', function() {
    const header = document.querySelector('.container-header');
    header.classList.toggle('sticky', window.scrollY > 0);
  });
  // End of Scroll Navigation
</script>

<!-- ==================================================================================================== -->