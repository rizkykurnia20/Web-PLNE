
<html>
<head>
<style>
* {
	box-sizing:border-box;
}

.sliderwep {
	width:100%; height:100%;
}

body {
	font-family: Verdana,sans-serif;margin:0
}

.mySlides {
	display:none
}


/* Slideshow container */
.slideshow-container {
	max-width: 100%;
	height:358px;
	position: relative;
	margin: auto;
	top:0px;
}

/* Next & previous buttons */
/*.prev, .next {
	cursor: pointer;
	position: absolute;
	top: 50%;
	width: auto;
	padding: 16px;
	margin-top: 145px;
	color: white;
	font-weight: bold;
	font-size: 18px;
	transition: 0.6s ease;
	border-radius: 0 3px 3px 0;
}*/

/* Position the "next button" to the right */
/*.next {
	right: 0;
	border-radius: 3px 0 0 3px;
}*/

/* On hover, add a black background color with a little bit see-through */
/*.prev:hover, .next:hover {
	background-color: rgba(0,0,0,0.8);
}*/

.arrows {
    position: absolute;
    top: 50%;
    transform: translateY(-50%);
    background: none;
    outline: none;
    border: none;
    font-size: 30px;
    color: #fff;
    transition: 0.4s linear;
    opacity: 0.2;
}

.arrows:hover {
    text-shadow: 0px 0px 10px #1179e7, 0px 0px 10px #1179e7;
    opacity: 1;
}

.prev {
    left: 3%;
}

.next {
    right: 3%;
}

/* Caption text */
.text {
	color: #f2f2f2;
	font-size: 15px;
	padding: 8px 12px;
	position: absolute;
	bottom: -221px;
	width: 100%;
	text-align: center;
}

/* Number text (1/3 etc) */
.numbertext {
	color: #f2f2f2;
	font-size: 12px;
	padding: 8px 12px;
	position: absolute;
	top: 0;
}

/* The dots/bullets/indicators */
.dot {
	cursor:pointer;
	height: 10px;
	width: 40px;
	margin-top: 254px;
	background-color: #bbb;
	border-radius: 100px;
	display: inline-block;
	transition: background-color 0.6s ease;
}

.active, .dot:hover {
	background-color: #717171;
}

/* Fading animation */
/*.fade {
	-webkit-animation-name: fade;
	-webkit-animation-duration: 1.5s;
	animation-name: fade;
	animation-duration: 1.5s;
}

@-webkit-keyframes fade {
	from {opacity: .4} 
	to {opacity: 1}
}

@keyframes fade {
	from {opacity: .4} 
	to {opacity: 1}
}*/

/* On smaller screens, decrease text size */
@media only screen and (max-width: 300px) {
	.prev, .next,.text {font-size: 11px}
}
</style>
</head>
<body>

	<div id="content">
		<div class="slideshow-container">
			<?php
			$terkini=mysql_query("SELECT * FROM berita WHERE headline='Y' ORDER BY id_berita DESC LIMIT 10");
			$no=1;
			while($t=mysql_fetch_array($terkini)){      

				$isi_berita = strip_tags($t['isi_berita']); 
				$isi = substr($isi_berita,0,95); 
				$isi = substr($isi_berita,0,strrpos($isi," ")); 

				echo "<div class='mySlides fade'><img src=foto_berita/$t[gambar] height='100%' width='100%'/> <div class='text'>";
				if ($t[id_kategori] == 66 OR $t[id_kategori] == 67) {
					echo"<h2><a href=''>$t[judul]</a></h2>

					<a href=berita-$t[judul_seo].html></a><p>$isi ...
					<span class='teksbox2'><a href=berita-$t[judul_seo].html >
					<class style=\"color:#666666;\"> [selengkapnya]</a></span></p></div>
					</div>"; 
				}
			else if ($t[id_kategori] == 72 OR $t[id_kategori] == 73) {echo"<h2><a href='play-$t[judul_seo].html'>$t[judul]</a></h2>

				<a href=play-$t[judul_seo].html></a>
			<p>$isi ...
			<span class='teksbox2'><a href=berita-$t[judul_seo].html >
			<class style=\"color:#666666;\"> [selengkapnya]</a></span>
			</p></div>
			</div>"; 
		}

		$no++;
	} 
	?>

	<button class="arrows prev" onclick="plusSlides(-1)">
		<span><i class="fas fa-angle-left"></i></span>
	</button>
	<button class="arrows next" onclick="plusSlides(1)">
		<span><i class="fas fa-angle-right"></i></span>
	</button>
	<!-- <a class="prev" onClick="plusSlides(-1)">&#10094;</a>
	<a class="next" onClick="plusSlides(1)">&#10095;</a> -->
</div>
<br>	
<div style="text-align:center">
	<span class="dot" onClick="currentSlide(1)"></span> 
	<span class="dot" onClick="currentSlide(2)"></span> 
	<span class="dot" onClick="currentSlide(3)"></span> 
	<span class="dot" onClick="currentSlide(4)"></span> 
	<span class="dot" onClick="currentSlide(5)"></span> 
</div>
</div>

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
	if (n > slides.length) {slideIndex = 1}
		if (n < 1) {slideIndex = slides.length}
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
			if (slideIndex > x.length) {slideIndex = 1}
				x[slideIndex-1].style.display = "block";
				setTimeout(carousel, 5000); // Change image every 2 seconds
			}
		</script>
	</body>

	</html>