  <?php 
  error_reporting(0);
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
<link rel="stylesheet" href="<?php echo "layout/biru/css/gal.css" ?>" type="text/css" />
    <link rel="stylesheet" href="<?php echo "layout/biru/css/owl.css" ?>" type="text/css" />
    <script type="text/javascript"  src="<?php echo "layout/biru/js/app.js" ?>" charset="utf-8" defer></script>
<script type="text/javascript"  src="<?php echo "layout/biru/js/gal.js" ?>" charset="utf-8" defer></script>
    <script type="text/javascript"  src="<?php echo "layout/biru/js/slider.js" ?>" harset="utf-8" defer></script>
  </head>

  <body>
    <div class="container">
      <div class="navbar">
        <div class="menu">
          <div class="logo">

            <?php

            $logo = mysql_query("SELECT * FROM logo ORDER BY id_logo DESC LIMIT 1");

            while($b=mysql_fetch_array($logo)) {
              echo "<a href='beranda.php'><img src='logo/$b[gambar]'/></a>";} /*<!-- 59 to 150 04102015-->*/

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

                 <div id='sliderwep'>
                   <?php
                   include "$f[folder]/gallery.php";      
                   ?>
                 </div>
               </div> <!-- End of Slide -->

             </div> <!-- End of slides -->


           </div> <!-- End of Slider -->

         </div> <!-- End of Main -->



         <!-- Menus -->
         <div class="links">
          <ul>
            <?php
            function get_menu($data, $parent = 0) {
              static $i = 1;
              $tab = str_repeat(" ", $i);
              if ($data[$parent]) {
                $html = "$tab<li>";
                $i++;
                foreach ($data[$parent] as $v) {
                  $child = get_menu($data, $v->id_menu);
                  $html .= "$tab<li class='drop-down-li'>";

                  $html .= '<a class="'.$css.'" href="'.$v->link.'"style="--i: 0.05s;">'.$v->nama_menu.'</a>';
                  if ($child) {
                    $i--;
                    $html .= "<ul class='drop-down-ul'>$child";
                    $html .= "$tab</ul>";}
                    $html .= '</li>';}
                    $html .= "$tab</li>";
                    return $html;}
                  else {
                    return false;}}

                    $result = mysql_query("SELECT * FROM menu WHERE aktif='Ya' ORDER BY id_menu");
                    while ($row = mysql_fetch_object($result)) {
                      $data[$row->id_parent][] = $row; }
                      $menu = get_menu($data);
                      echo "$menu";
                      ?>
                    </ul>
                  </div>
                  <!-- End of Menus -->
                  <?php
                  include "$f[folder]/template.php";      
                  ?>
                </div> <!-- End of Container -->
              </body>
              </html>

              <!-- Script Slider -->
              <script language="javascript" type="text/javascript">

              var slideIndex = 1;

              showSlides(slideIndex);

              function plusSlides(n) {
                showSlides(slideIndex += n);
              }

              function currentSlide(n) {
                showSlides(slideIndex = n);
              }

              function showSlides(n) {
                var i;
                var slides = document.getElementsByClassName("mySlides");
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
                var x = document.getElementsByClassName("mySlides");
                for (i = 0; i < x.length; i++) {
                  x[i].style.display = "none";
                }
                slideIndex++;
                if (slideIndex > x.length) {
                  slideIndex = 1
                }
                x[slideIndex-1].style.display = "block";
                setTimeout(carousel, 5000); // Change image every 2 seconds
              }
            </script>
            <!-- End of Slider -->


