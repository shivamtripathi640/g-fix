<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <style>
      <?php include 'css/style.css'; ?>
      </style>

    

        <!-- Icon Font Stylesheet -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
   <link href="https://fonts.googleapis.com/css2?family=PT+Sans:wght@400;700&display=swap" rel="stylesheet"/>
   <!--media css-->

   <!--jquery ui files-->
   <link type="text/css" rel="stylesheet" href="css/jquery-ui.structure.min.css" />
   <link type="text/css" rel="stylesheet" href="css/jquery-ui.theme.min.css" />
 <!-- Swiper CSS -->
 <link rel="stylesheet" href="css/swiper-bundle.min.css" />
   <!-- Boxicons CDN Link -->
   <style>

		/*-----------------------header css---------------------------------*/





		/*------------------------------------------------------*/
    .contdes{
      background: black;
      border-radius: 15px;
     
    }


		.cards-wrapper {
			display: flex;
			justify-content: center;
			margin-top: 15px;
			margin-bottom: 100px;
		}

		.card img {
			max-width: 100%;
			max-height: 100%;
		}

		.card {
			margin: 0 0.5em;
			box-shadow: 2px 6px 8px 0 rgba(22, 22, 26, 0.18);
			border: none;
			border-radius: 0;
		}

		.carousel-inner {
			padding: 1em;
		}

		.carousel-control-prev,
		.carousel-control-next {
			background-color: #000;
			width: 5vh;
			height: 5vh;
			border-radius: 50%;
			top: 50%;
			transform: translateY(-50%);

		}

		.slider {
			display: flex;
			height: 350px;
			max-height: auto;
			overflow-y: hidden;
			overflow-x: scroll !important;
			padding: 30px;
			transform: scroll(calc(var(--i, 0)/var(--n)*-100%));
			scroll-behavior: smooth;
		}

		.slider::-webkit-scrollbar {
			height: 5px;
			width: 150px;
			display: none;
		}

		.slider::-webkit-scrollbar-track {
			background: transparent;
		}

		.slider::-webkit-scrollbar-thumb {
			background: #888;
		}

		.slider::-webkit-scrollbar-thumb:hover {
			background: #555;
		}

		.slide {

			position: relative;
      margin: 0px 9px;
		}

		.slide img {

			width: 205px;
			object-fit: cover;
			border-radius: 15px 15px 0px 0px;
			cursor: pointer;
			transition: .25s ease-in-out;
		}

		.control-prev-btn {
			position: absolute;
			margin-top: 80px;
			left: 0;
			background-color: rgba(255, 255, 255, 0.55);
			height: 100px;
			line-height: 100px;
			width: 45px;
			text-align: center;
			box-shadow: 0 1px 3px #888;
			user-select: none;
			color: #444;
			cursor: pointer;
		}

		.control-next-btn {
			position: absolute;
			margin-top: 80px;
			right: 0;
			background-color: rgba(255, 255, 255, 0.55);
			height: 100px;
			line-height: 100px;
			width: 45px;
			text-align: center;
			box-shadow: 0 1px 3px #888;
			user-select: none;
			color: #444;
			cursor: pointer;
		}

		.slide img.zoomed {
			width: 500px;
			height: 600px;
			position: fixed;
			left: 25%;
			top: 0%;
			z-index: 1000;
			transform: scale(1) translatey(0) !important;

		}

		.overlay {
			position: absolute;
			height: 100%;
			width: 100%;
			background: rgba(0, 0, 0, .45);
			top: 0;
			display: none;
		}

		.overlay.active {
			display: block;
		}

		@media only screen and (max-width: 420px) {
			.slider {
				padding: 0;
			}

			.slide {
				padding: 16px 10px;
			}

			.slide img {
				margin: 0;
			}

			.control-prev-btn {
				top: 37%;
			}

			.control-next-btn {
				top: 37%;
			}
		}

		@media (min-width: 768px) {
			.card img {
				height: 11em;
			}
		}
    .slide .contdes:hover{
    background: red;
    color:white;
    border-radius: 15px;
} 

.menusec{
    margin: 0px;
    font-weight: 400;
    line-height: 1.5;
    color: white;
    text-align: center;
    text-decoration: none;
    vertical-align: middle;
    cursor: pointer;
    -webkit-user-select: none;
    -moz-user-select: none;
    user-select: none;
    background-color: transparent;
    border: 0px solid transparent;
    padding: 12px ;
    font-size: 12px;
    border-radius: 0.25rem;
    transition: color 0.15s ease-in-out, background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
}
	</style>

    <title>Products</title>
</head>
<body>
     
   <!-- HEADER Start -->
  <!-- <?php include('header.php'); ?> -->
  <!-- Header End -->
  <div class="mainsec" style="margin-top:180px">
		<div class="text-center my-5">
			<h1 style="font-weight: 700;">CHALLENGES & SOLUTIONS</h1>
			<h6>EVOLVING TRENDS IN TILES AND STONES HAVE BROUGHT WITH THEM NEWER CHALLENGES.<br /> HERE ARE SOME
				INNOVATIVE SOLUTIONS TO ENSURE DURABILITY AND LONG LASTING BEAUTY.</h6>
		</div>

		<div class="section-1" style="background: #f4f3fe; display:flex;">
			<div class="col-lg-6 col-md-6 col-sm-12">
				<div class="card mb-5 shadow-sm" style="background-color: #242323; margin: 0px; border-radius: 0px;">
					<h6 style="font-weight: 700; font-size: 45px; padding: 60px 60px 30px 60px; color: #fff;">NEW FLOOR,
						BUT OLD METHOD?</h6>
					<img src="images/c&s.jpg" class="img-fluid"
						style=" padding-left: 50px; padding-right: 50px; margin-top: 0px; height: 280px;" />

					<div class="card-body"
						style="background-color: #fff; margin-left: 50px; margin-right: 50px; margin-bottom: 70px; height: 230px;">
						<div class="card-text">
							<p style="font-size: 13px;">
								There are several limitations of the old cement method<br /> results in unlevelled
								floor, knocking sound and tile cracks.
								<br><br>Key Problems<br />
							<ul style="font-size: 13px;">
								<li>Dries quickly & shrinks</li>
								<li>Not strong enough to bond non-porus vitrified tiles</li>
								<li>Unlevelled floor & tile cracks</li>
							</ul>
							</p>
						</div>

					</div>
				</div>
			</div>

			<div class="col-lg-5 col-md-6 col-sm-12">
				<p style="font-weight: 700; margin-top: 50px; margin-left: 40px; font-size: 17px;"> RECOMMENDED
					SOLUTIONS <br/> SAY NO TO CEMENT MACHAN + CEMENT SLURRY</p>
				<div class=" mb-5">
					<img src="images/c_s-2.png" class=""
						style="padding-top: 70px; color: #f8f9fa; height: 300px; width: 200px;" /><br />
					<p style="font-size: 20px; padding-left: 20px;">GERMAN FIX<span style="color: red;"> ELITEFLEX</span></p>
				</div>
			</div>
		</div>

		<!-- /////////////////------------------YT VIDEO-----------------//////////////////////// -->

		<div class="section" style="background:#fceef1;">


			<h5 style="padding-top: 50px; margin-top: -10px; font-weight: 700; text-align: center; margin-bottom: 20px; font-size: 25px;">
				PRODUCT VIDEO</h5>
			<embed style="    padding: 50px; width:50%; height: 450px; margin-left: 340px;"
				src="https://www.youtube.com/embed/UcgV4OFRS-w"></embed>

		</div>





		<!-- /////////////////////////////----------Carasuel------------////////////////////////////////////////// -->


		<h5 style="font-weight: 700; margin-top: 60px; text-align:center; margin-bottom: 20px; font-size: 25px;">
				OTHER SOLUTIONS</h5>
        
		<div id="slider-container" class="slider" style="margin:0px 220px;" >
			<div class="slide">
        <div class=contdes>
        <img src="images/16.jpg" alt="">
        <p class="menusec" >New Floor Old Method?</p>
          
        </div>
		
			</div>
			<div class="slide">
        <div class="contdes">
        <img src="images/15.jpg" alt="">
        <p class="menusec" >External Elevation Tiles Fixing</p>
          
        </div>
			</div>
			<div class="slide">
      <div class="contdes">
        <img src="images/18.jpg" alt="">
        <p class="menusec" >Big Tiles & Stone Fixing</p>
          
        </div>
			</div>
			<div class="slide">
      <div class="contdes">
        <img src="images/14.jpg" alt="">
        <p class="menusec" >Leaking Bathroom?</p>
          
        </div>
			</div>
			<div class="slide">
			<div class="contdes">
        <img src="images/12.jpg" alt="">
        <p class="menusec" >Broken Old Tiles?</p>
        </div>
			</div>
			<div class="slide">
      <div class="contdes">
        <img src="images/16.jpg" alt="">
        <p class="menusec" >New Floor Old Method?</p>
          
        </div>
			</div>
			<div onclick="prev()" class="control-prev-btn">
				<i class="fas fa-arrow-left"></i>
			</div>
			<div onclick="next()" class="control-next-btn">
				<i class="fas fa-arrow-right"></i>
			</div>
		</div>


		<div class="overlay"></div>


	</div>


  

  


    

    
<!-- Responsive footer -->
<?php include('footer.php'); ?> 
<script>

		function prev() {
			document.getElementById('slider-container').scrollLeft -= 270;
		}

		function next() {
			document.getElementById('slider-container').scrollLeft += 270;
		}


		$(".slide img").on("click", function () {
			$(this).toggleClass('zoomed');
			$(".overlay").toggleClass('active');
		})

	</script>

 <script src="js/script.js"></script>
</body>
</html>