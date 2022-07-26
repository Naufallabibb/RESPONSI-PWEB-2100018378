<!DOCTYPE html>
<html lang="en">
<head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta name="description" content="Shoorai technology agency is a company
	  which was established to help Indonesian children to learn technology more deeply and with international standards"/>
      <meta name="keywords" content="UAS PEMWEB"/>
      <meta name="author" content="Naufal Labib, Shoorai technology agency"/>
      <link rel="stylesheet" type="text/css" href="Shoorai.css" />
      <title>RESPONSI 2100018378</title>
</head>
<body>
    <nav>
		<ul>
			<li class="logo"><a href="#home" class="page-scroll">Shoorai <br><hr><span>constructions</span></a></li>
		</ul>
		<ul class="menu">
			<li><a class="page-scroll" href="#home">Home</a></li>
			<li><a class="page-scroll" href="#geser">Gallery</a></li>
			<li><a class="page-scroll" href="#services">Product</a></li>
			<li><a class="page-scroll" href="#news">News</a></li>
			<li><a class="page-scroll" href="#contact">Buy Now</a></li>
		</ul>
	</nav>
    <header id="home" >
			<div class="judul">
				<div>
					<h1>Present As a Construction Company<br> <b>Help Provide The Best Quality Building Materials That Have Been Trusted In The World</b></h1>
				</div>
				<a href="#contact"><button>ORDER NOW</button></a>
			</div>
			<div class="fitur">
				<div class="kotak">
					<img src="ICON (1).png" alt="">
					<p>Trusted <br>Respected</p>
				</div>
				<div class="kotak">
					<img src="ICON (2).png" alt="">
					<p>Friendly <br>Humble</p>
				</div>
				<div class="kotak">
					<img src="ICON (3).png" alt="">
					<p>International <br> Quality</p>
				</div>
				<div class="kotak">
					<img src="ICON (4).png" alt="">
					<p>World<br> Fan </p>
				</div>
			</div>
	</header>

	<section class="geser" id="geser">
		<h2>Gallery Our Company</h2>
		<p>Some fun snaps of joining a construction shoorai company</p>
		<br>
		<div class="container">
		<div class="mySlides">
			<div class="numbertext">1 / 6</div>
			<img src="Slide (5).png" style="width:100%">
		</div>

		<div class="mySlides">
			<div class="numbertext">2 / 6</div>
			<img src="Slide (6).png" style="width:100%">
		</div>

		<div class="mySlides">
			<div class="numbertext">3 / 6</div>
			<img src="Slide (4).png" style="width:100%">
		</div>
			
		<div class="mySlides">
			<div class="numbertext">4 / 6</div>
			<img src="Slide (3).png" style="width:100%">
		</div>

		<div class="mySlides">
			<div class="numbertext">5 / 6</div>
			<img src="Slide (2).png" style="width:100%">
		</div>
			
		<div class="mySlides">
			<div class="numbertext">6 / 6</div>
			<img src="Slide (1).png" style="width:100%">
		</div>
			
		<a class="prev" onclick="plusSlides(-1)">❮</a>
		<a class="next" onclick="plusSlides(1)">❯</a>

		<div class="caption-container">
			<p id="caption"></p>
		</div>

	<div class="row">
		<div class="column">
		<img class="demo cursor" src="Slide (5).png" style="width:100%" onclick="currentSlide(1)" alt="">
		</div>
		<div class="column">
		<img class="demo cursor" src="Slide (6).png" style="width:100%" onclick="currentSlide(2)" alt="">
		</div>
		<div class="column">
		<img class="demo cursor" src="Slide (4).png" style="width:100%" onclick="currentSlide(3)" alt="">
		</div>
		<div class="column">
		<img class="demo cursor" src="Slide (3).png" style="width:100%" onclick="currentSlide(4)" alt="">
		</div>
		<div class="column">
		<img class="demo cursor" src="Slide (2).png" style="width:100%" onclick="currentSlide(5)" alt=" ">
		</div>    
		<div class="column">
		<img class="demo cursor" src="Slide (1).png" style="width:100%" onclick="currentSlide(6)" alt="">
		</div>
		</div>
	</div>
		<script>
			let slideIndex = 1;
			showSlides(slideIndex);
			
			function plusSlides(n) {
			showSlides(slideIndex += n);
			}
			
			function currentSlide(n) {
			showSlides(slideIndex = n);
			}
			
			function showSlides(n) {
			let i;
			let slides = document.getElementsByClassName("mySlides");
			let dots = document.getElementsByClassName("demo");
			let captionText = document.getElementById("caption"); /*has been deleted*/
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
			captionText.innerHTML = dots[slideIndex-1].alt;
			}
			</script>
	</section>

	<section class="services" id="services">
		<center><h2>Our Product</h2></center><br><br>
		<h2>Brick</h2>
		<div class="services-cards">
			<div class="services-card">
				<img src="bata merah.png" alt="">
				<h3>Red Bricks</h3>
			</div>
			<div class="services-card">
				<img src="batako.png" alt="">
				<h3>Concrete Brick</h3>
			</div>
			<div class="services-card">
				<img src="paving bata.png" alt="">
				<h3>Paving Bricks</h3>
			</div>
			<div class="services-card">
				<img src="ventilasi bata.png" alt="">
				<h3>Ventilation Bricks</h3>
			</div>
		</div><br><br><br>
		<h2>Cement</h2>
		<div class="services-cards">
			<div class="services-card">
				<img src="Semen sumur minyak.png" alt="">
				<h3>Oil Well Cement</h3>
			</div>
			<div class="services-card">
				<img src="Semen Super Masonry.png" alt="">
				<h3>Super Masonry Cement</h3>
			</div>
			<div class="services-card">
				<img src="Semen Putih.png" alt="">
				<h3>White Cement</h3>
			</div>
			<div class="services-card">
				<img src="Semen Portland.png" alt="">
				<h3>Portland Cement</h3>
			</div>
		</div><br><br><br>
		<h2>Building iron</h2>
		<div class="services-cards">
			<div class="services-card">
				<img src="Besi beton.png" alt="">
				<h3>Steel Bar</h3>
			</div>
			<div class="services-card">
				<img src="Besi CNP.png" alt="">
				<h3>Iron CNP</h3>
			</div>
			<div class="services-card">
				<img src="Besi Siku.png" alt="">
				<h3>Iron Elbow</h3>
			</div>
			<div class="services-card">
				<img src="Hollow.png" alt="">
				<h3>Hollow Iron</h3>
			</div>
		</div><br><br><br>
		<h2>Wood</h2>
		<div class="services-cards">
			<div class="services-card">
				<img src="kayu jati.png" alt="">
				<h3>Teak Wood</h3>
			</div>
			<div class="services-card">
				<img src="kayu mahogani.png" alt="">
				<h3>Mahogany Wood</h3>
			</div>
			<div class="services-card">
				<img src="kayu sungkai.png" alt="">
				<h3>Sungkai Wood</h3>
			</div>
			<div class="services-card">
				<img src="kayu mindi.png" alt="">
				<h3>Mindi Wood</h3>
			</div>
		</div><br><br><br>
		<h2>Rooftile</h2>
		<div class="services-cards">
			<div class="services-card">
				<img src="atap tanah liat.png" alt="">
				<h3>Clay Roof</h3>
			</div>
			<div class="services-card">
				<img src="atap kaca.png" alt="">
				<h3>Glass Roof</h3>
			</div>
			<div class="services-card">
				<img src="atap beton.png" alt="">
				<h3>Concrete Roof</h3>
			</div>
			<div class="services-card">
				<img src="metal roof.png" alt="">
				<h3>Metal Roof</h3>
			</div>
		</div>
    </section>

	<section class="news" id="news">
		<h2>Our Recent News</h2>
		<div class="services-cards">
			<div class="services-card">
				<img src="our news 2.png" alt="">
				<div class="text">
					<h3>Enlargement Project</h3>
					<span>June 23 2022</span>
					<p>Construction company Shoorai will hold a company enlargement which will start in August 2022 - 2025 and 
						this is the first step for Shoorai to become the number one company in Indonesia</p>
					<hr>
					<a href="#home">Learn More</a>
				</div>
			</div>
			<div class="services-card">
				<img src="our news 3.png" alt="">
				<div class="text">
					<h3>Product Export</h3>
					<span>June 01 2022</span>
					<p>Perusahaan konstruksi Shoorai telah berhasil mengekspor produk asli buatan Indonesia dan permintaannya luar 
						biasa meningkat drastis hingga produsen kewalahan akibat permintaan konsumen</p>
					<hr>
					<a href="#home">Learn More</a>
				</div>
			</div>
			<div class="services-card">
				<img src="our news.png" alt="">
				<div class="text">
					<h3>Supplies</h3>
					<span>July 17 2022</span>
					<p>The materials provided by the shoorai construction company are very high quality materials and originate from 
						our beloved homeland, namely Indonesia. Founder Shoorai said...</p>
					<hr>
					<a href="#home">Learn More</a>
				</div>
			</div>
		</div>
	</section>

    <section class="pendapat">
    <h2>What Are They Saying About Our Program?</h2>
    <br><br><br>
    <div class="testimoni" id="testimoni">
    <figure class="snip1192">
        <blockquote>Yesterday the roof of our game house leaked, fortunately there is a trusted construction company that provides the 
			highest quality roofing supplies of international standards.</blockquote>
        <div class="author">
			<img src="Team (6).png" alt="Team (6).pngg"/>
          <h5>Livy Renata <span> Brand Ambassador Alter Ego</span></h5>
        </div>
      </figure>
      <figure class="snip1192">
        <blockquote>At first I didn't believe in the shoorai company because I only saw through the news, but after I observed and saw 
			firsthand the quality of its products, I became convinced why this company could be called the best.</blockquote>
        <div class="author">
			<img src="Team (12).png" alt="Team (12).png"/>
			<h5>Bryan Joenathan<span> Personal Visual Journal</span></h5>
        </div>
      </figure>
       <figure class="snip1192 hover">
        <blockquote>You know right now I'm still in LA and the architecture there is taking supplies of materials from the construction 
			company Shoorai for the construction of the project.</blockquote>
        <div class="author">
            <img src="Team (11).png" alt="Team (11).png"/>
          <h5>Valerie Pola<span> LA Student</span></h5>
        </div>
      </figure>
	  <figure class="snip1192 hover">
        <blockquote>In addition to the best quality supplies, this company also has good and very friendly employees and bosses.</blockquote>
        <div class="author">
            <img src="Team (3).png" alt="Team (3).png"/>
          <h5>Tania Dewi Nur Azmi<span> Telkom Company Social Media Specialist</span></h5>
        </div>
      </figure>
      </div>
    </section>
    
	<section class="contact" id="contact">
		<div class="kiri">
			<h2>Purchase Form</h2>
			<p>Come on, buy our products and don't hesitate because our products are trusted in various countries.</p>
		</div>
		<div class="kanan">
		<form name="form1" method="post" action="Proses.php">
				<label for="status">Types Of Products</label>
				<select name="status" id="status">
					<option></option>
					<option>Brick</option>
					<option>Cement</option>
					<option>Building Iron</option>
					<option>Wood</option>
					<option>Rooftile</option>
				</select>
				<label for="status2">Product Name</label>
				<select name="status2" id="status2">
					<option></option>
					<option>Red Bricks</option>
					<option>Concrete Brick</option>
					<option>Paving Bricks</option>
					<option>Ventilation Bricks</option>
					<option>Oil Well Cement</option>
					<option>Super Masonry Cemen</option>
					<option>White Cement</option>
					<option>Portland Cement</option>
					<option>Steel Bar</option>
					<option>Iron CNP</option>
					<option>Iron Elbow</option>
					<option>Hollow Iron</option>
					<option>Teak Wood</option>
					<option>Mahogany Wood</option>
					<option>Sungkai Wood</option>
					<option>Mindi Wood</option>
					<option>Clay Roof</option>
					<option>Glass Roof</option>
					<option>Concrete Roof</option>
					<option>Metal Roof</option>
				</select>
				<label for="number">Number Of Products</label>
				<input type="number" name="number">
			<center>
				<input id="submit-btn" type="submit" name="Buy" value="Buy"/>
        		<input id="submit-btn" type="reset" name="Reset" value="Reset"/> 
			</center>
			<br><br><br><br><br><br>
			<div align="center"><strong><a href="Lihat.php">See Buyer List</a></strong></div>
				</div>
			</form>
		</div>
	</section>

	<section class="intouch">	
		<ul class="kiri">
			<li class="logo"><a href="">Shoorai <br><span>constructions</span></a></li>
		</ul>
		<div class="sosmed">
			<h3>Contact Us</h3>
			<ul>
				<li>shoorai@constructions.com</li>
				<li>+678-697-9999</li>
				<li>PIK Avenue, Pantai Indah Utara Street 01, RW 02, Kamal Muara, North Jakarta City, Jakarta</li>
			</ul>
		</div>
		<div class="subscribe">
			<h3>Subscribe Newsletter</h3>
			<input type="text" placeholder="Type your E-mail here">
			<a href="#home"><img src="Subscribe.png" alt=""></a>
		</div>
	</section>
	<footer>
		<span>Made By Shoorai Constructions - Jakarta &copy; 2022</span>
	</footer>
</body>
</html>
