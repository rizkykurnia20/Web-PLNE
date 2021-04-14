<section>
	<div class="row">
		<div class="col-75">
			<div class='grid-container'>

			<?php 

			$berita = mysql_query("SELECT * FROM berita ORDER BY id_berita DESC LIMIT 6");
			while($b = mysql_fetch_array($berita)){
				$tgl  = tgl_indo($b['tanggal']);
				$tgl1 = 
				$isi_berita = strip_tags($b['isi_berita']); 
				$isi = substr($isi_berita,0,75); 
				$isi = substr($isi_berita,0,strrpos($isi," "));

				echo "
				<div class='grid-item'>
					<div class='item-image'>
						<img src='foto_berita/$b[gambar]'>
							<div class='desk-box'>
							<h1>$tgl_berita</h1>
							<p>Jan</p>
							</div>
					</div>

					<div class='item-desk'>
						<h2>$b[judul]</h2>
						<ul>
						<li><i class='fa fa-calendar'></i> $tgl</li>
						<li><i class='fa fa-user'></i> Admin</li>
						</ul>
						<p>$isi...</p>
					</div>

					<div class='btn-detberita'>
					<a href='berita-$t[judul_seo].html'>Baca Lebih</a>
					</div>
				</div>"; 
			}

			?>

		</div>

		


		
	</div>

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
</section>