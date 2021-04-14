<?php error_reporting(0);?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>

 <meta charset="UTF-8">
 <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
 <meta name="robots" content="index, follow">
 <meta name="description" content="<?php include "teraskreasi1.php"; ?>">
 <meta name="keywords" content="<?php include "teraskreasi2.php"; ?>">
 <meta http-equiv="Copyright" content="Rizal Faizal" "rizal_fzl@yahoo.com">
 <meta name="author" content="Rizal Faizal" "http://teraskreasi.com">
 <meta http-equiv="imagetoolbar" content="no">
 <meta name="language" content="Betawi-Indonesia">
 <meta name="revisit-after" content="7">
 <meta name="webcrawlers" content="all">
 <meta name="rating" content="general">
 <meta name="spiders" content="all">

 <title><?php include "teraskreasi_titel.php"; ?></title>

 <link rel="shortcut icon" href="favicon.png" />

 <link rel="alternate" type="application/rss+xml" title="RSS 2.0" href="rss.xml" />

 <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" crossorigin="anonymous">

 <link rel="stylesheet" type="text/css" href="<?= "layout/hijau/css/berita.css" ?>">
 <link rel="stylesheet" type="text/css" href="<?= "layout/hijau/css/card.css" ?>">
 <link rel="stylesheet" type="text/css" href="<?= "layout/hijau/css/footer.css" ?>">


<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">

</head>
<body>
  <header>  

    <!-- Logo -->
    <?php
    $logo = mysql_query("SELECT * FROM logo ORDER BY id_logo DESC LIMIT 1");
    $iden = mysql_fetch_array(mysql_query("SELECT * FROM identitas"));

    while($b = mysql_fetch_array($logo)) {
      echo "<a href='$iden[url]'><img class='logo' src='logo/$b[gambar]'/></a>";
    }
    ?> 
    <!-- End of Logo -->

    <!-- Navbar -->
    <div class="menuToggle" onclick="toggleMenu();"></div>
    <ul class="navigation">
      <?php
      function get_menu($data, $parent = 0) {
        static $i = 1;
        $tab = str_repeat(" ", $i);
        if ($data[$parent]) {
          $html = "$tab<li>";
          $i++;
          foreach ($data[$parent] as $v) {
            $child = get_menu($data, $v->id_menu);
            $html .= "$tab<li class='last'>";
            $html .= '<a href="'.$v->link.'">'.$v->nama_menu.'</a>';
            if ($child) {
              $i--;
              $html .= "<ul class='dropdown-link'>$child";
              $html .= "$tab</ul>";
            }
            $html .= '</li>';
          }
            $html .= "$tab</li>";
            return $html;
          }
        else {
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
    <!-- End of Navbar -->

  </header>

  <section class="banner" id="banner">
    <div class="content">
      <h2>Berita Terkini</h2>
      <p>PLNE Siap Bekerja Lebih Baik, Melebihi Harapan Pemberi Kerja.</p>
    </div>
  </section>

  <!-- Content -->
   <?php
   include "$f[folder]/isi.php";      
   ?>
 <!-- End of Content -->


 <!-- Footer -->
 <footer>
  <div class="container">
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

 <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>

<script>
$(".post-wrapper").owlCarousel({
  margin: 20,
  loop: true,
  autoplay: true,
  autoplayTimeout: 2000,
  autoplayHoverPause: true,
  responsive: {
    0:{
      items:1,
      nav: false
    },
    600:{
      items:2,
      nav: false
    },
    1000:{
      items:3,
      nav: false
    }
  }
});
</script>

<script type="text/javascript">
      // Scroll Navigation
      window.addEventListener('scroll', function(){
        const header = document.querySelector('header');
        header.classList.toggle('sticky', window.scrollY > 0);
      });
      // End of Scroll Navigation

      //Toggle Menu for Responsive
      function toggleMenu(){
        const menuToggle = document.querySelector('.menuToggle');
        const navigation = document.querySelector('.navigation');
        menuToggle.classList.toggle('active');
        navigation.classList.toggle('active');
      }
      // End of Toggle Menu
    </script>

    <!-- ==================================================================================================== -->

   