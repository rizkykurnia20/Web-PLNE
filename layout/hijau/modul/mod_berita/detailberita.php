<?php
include_once('config_fb.php');
?>

<section>
  <div class="row">
    <div class="col75"> <!-- left content -->

      <?php 
      $detail = mysql_query("SELECT * FROM berita,users,kategori    
        WHERE users.username = berita.username 
        AND kategori.id_kategori = berita.id_kategori 
        AND judul_seo = '$_GET[judul]'");
      $d     = mysql_fetch_array($detail);
      $tgl   = tgl_indo($d[tanggal]);
      $baca  = $d[dibaca]+1;

      echo " <h4 class='kategori'><a href=kategori-$d[id_kategori]-$d[kategori_seo].html>$d[nama_kategori]</a></h4> 
      <h2 class='judul-berita'>$d[judul]</h2>
      <div class='info-penulis'> 
      <b>$d[nama_lengkap]</b>
        <span class='tanggal'>
          <span>|</span> 
          $d[hari], $tgl, Pukul $d[jam] WIB 
          <span>|</span> 
          Telah dibaca $baca kali
        </span> 
        <div class='icon-sosmed'>  
          <div class='addthis_toolbox addthis_default_style'>
          <a class='addthis_button_preferred_1'></a>
          <a class='addthis_button_preferred_2'></a>
          <a class='addthis_button_preferred_3'></a>
          <a class='addthis_button_preferred_4'></a>
          <a class='addthis_button_compact'></a>
          <a class='addthis_counter addthis_bubble_style'></a>
        </div>
        </div>
        <script type='text/javascript' src='http://s7.addthis.com/js/250/addthis_widget.js#pubid=ra-4f8aab4674f1896a'></script>      
      </div>";
     
     
      if ($d[gambar] != '') {
        echo "<div class='image-berita'><img src='foto_berita/$d[gambar]'>
        <p class='caption'>$d[keterangan_gambar]</p></div>";
      }
        echo "<p class='isi-berita'>$d[isi_berita]</p>
        <div class='fb-like' data-href='$iden[url]/berita-$d[judul_seo].html' data-send='true' data-width='580' data-show-faces='false'></div>";   
  
      if ($d[youtube] != '') {
        echo "<h4 class='youtube-title'>Video Terkait :</h4>
        <iframe width='100%' height='600' src='$d[youtube]' frameborder='0' allowfullscreen></iframe>";
      }
      ?>  

    </div> <!-- end of left content -->

    <div class="col25"><!-- right content -->
      

      <div class="search-box">
       <form method="POST" action="hasil-pencarian.html">
        <input name="kata" type="text" class="input-text" placeholder="Cari disini..."/>
        <!-- <input type="submit" class="input-submit" value="" /> -->
      </form>
      </div>

      <div class="category">
        <h4>Kategori</h4>

        <a class="isi-category" href="">        
          <div class="judul-categori"><p>Berita</p></div>
          <div class="jumlah"><p>(4)</p></div>                    
        </a>
        <a class="isi-category" href="">        
          <div class="judul-categori"><p>Video</p></div>
          <div class="jumlah"><p>(0)</p></div>   
                           
        </a>
        <a class="isi-category" href="">        
          <div class="judul-categori"><p>Rekrutmen</p></div>
          <div class="jumlah"><p>(0)</p></div>    
                          
        </a>
        <a class="isi-category" href="">        
          <div class="judul-categori"><p>Galeri</p></div>
          <div class="jumlah"><p>(0)</p></div>    

        </a>
      

      </div>

      <div class="recent-blog">
        <h4>Berita Populer</h4>
         
          <?php    
          $sql=mysql_query("SELECT * FROM berita ORDER BY dibaca DESC LIMIT 3"); 

          while($p=mysql_fetch_array($sql)){

            echo "<div class='row-populer'>
            <div class='col-image'>
            <a href=berita-$p[judul_seo].html>
            <img src='foto_berita/small_$p[gambar]'></a></div>
            <div class='col-judul'>
            <a class='judul-berita1' href=berita-$p[judul_seo].html><span>$p[judul]</span></a>
            <p class='waktu'>
            <span> <i class='fa fa-calendar'></i> $p[hari], $tgl</span> 
            <br> 
            <span> <i class='fa fa-eye'></i> Telah dibaca: $p[dibaca] kali</span>
            </p>
            </div>
            </div>"; 
          }
          ?>
        
      </div>

      <!-- video -->
      <div class="video">
         <h4>Video Seputar PLN Enjinring</h4>
         <div class="row-video">
           <div class="col-video">
             <p class="my-video">Video 1</p>
           </div>
           <div class="col-deskripsi">
             <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod</p>
           </div>
         </div>

         <div class="row-video">
           <div class="col-video">
             <p class="my-video">Video 2</p>
           </div>
           <div class="col-deskripsi">
             <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod</p>
           </div>
         </div>

         <div class="row-video">
           <div class="col-video">
             <p class="my-video">Video 3</p>
           </div>
           <div class="col-deskripsi">
             <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod</p>
           </div>
         </div> 
        
      </div>
      <!-- End of Video -->

    </div> <!-- end of right content -->

  </div>

   <div class="row-slider">
      <div class='post-slider'>
        <h2 class='slider-title'><span>B</span>erita Terkini</h2>
        <div class='post-wrapper owl-carousel'>
          <?php    
          $terkini = mysql_query("SELECT * FROM berita ORDER BY id_berita DESC LIMIT 5");
          while($t = mysql_fetch_array($terkini)) {
            $tgl  = tgl_indo($t['tanggal']);
            $isi_berita = strip_tags($t['isi_berita']); 
            $isi = substr($isi_berita,0,100); 
            $isi = substr($isi_berita,0,strrpos($isi," ")); 
            echo "
            <div class='post'>
            <div class='post-image'>
            <img src='foto_berita/$t[gambar]'>          
            </div>
            <div class='post-info'>
            <div class='box'>
            <h2>  $t[judul]</h2>
            <ul>
            <li><i class='fa fa-calendar'></i> $t[hari], $tgl</li>
            <li><i class='fa fa-user'></i> Admin</li>
            </ul>
            <p>$isi ...</p>
            </div>
            <div class='btn-berita'>
            <a href='berita-$t[judul_seo].html'>Read More...</a>
            </div>
            </div>
            </div>";
          }        
          ?>
        </div>
      </div>
    </div>
</section>