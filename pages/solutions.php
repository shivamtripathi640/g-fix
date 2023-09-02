<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<title>Bootstrap 5 - Blog Cards</title>

	<link rel="stylesheet" href="css/bootstrap.min.css" />
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
		integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

     <style>
      <?php include 'css/style.css'; ?>
     </style>		


	<style>

		/*-----------------------header css---------------------------------*/





		/*------------------------------------------------------*/
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

		.slider img:hover {
			transform: scale(1.05);
			box-shadow: 10px 10px 10px rgba(0, 0, 0, 0.15);
		}

		.slide {

			position: relative;
		}

		.slide img {

			width: 200px;
			margin: 0 9px;
			object-fit: cover;
			border-radius: 15px;
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
	</style>

</head>

<body class="bg-light">
	 <!-- HEADER Start -->
	 
	 <style>
      <?php include 'header.php'; ?>
      </style>
  
  <!-- Header End -->
	<div class="mainsec">
		<div class="text-center my-5">
			<h1 style="font-weight: 700;">CHALLENGES & SOLUTIONS</h1>
			<h6>EVOLVING TRENDS IN TILES AND STONES HAVE BROUGHT WITH THEM NEWER CHALLENGES.<br /> HERE ARE SOME
				INNOVATIVE SOLUTIONS TO ENSURE DURABILITY AND LONG LASTING BEAUTY.</h6>
			<hr />
		</div>

		<div class="section-1" style="background: #f4f3fe; display:flex;">
			<div class="col-lg-6 col-md-6 col-sm-12">
				<div class="card mb-5 shadow-sm" style="background-color: #242323;">
					<h6 style="font-weight: 700; font-size: 35px; padding: 60px 60px 30px 60px; color: #fff;">NEW FLOOR,
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
				<p style="font-weight: 500; margin-top: 50px; margin-left: 40px; font-size: 22px;"> RECOMMENDED
					SOLUTIONS <br /> SAY NO TO CEMENT MACHAN + CEMENT SLURRY</p>
				<div class=" mb-5">
					<img src="images/c_s-2.png" class=""
						style="padding-top: 70px; color: #f8f9fa; height: 300px; width: 200px;" /><br />
					<p style="font-size: 20px; padding-left: 20px;">GERMAN FIX<span style="color: red;"> ELITEFLEX</span></p>
				</div>
			</div>
		</div>

		<!-- /////////////////------------------YT VIDEO-----------------//////////////////////// -->

		<div class="section" style="background:#fceef1;">


			<h5 style="font-weight: 700; margin-top: 60px; text-align:center; margin-bottom: 20px; font-size: 25px;">
				PRODUCT VIDEO</h5>
			<embed style="    padding: 50px; width: 720px; height: 450px; margin-left: 210px;"
				src="https://www.youtube.com/embed/UcgV4OFRS-w"></embed>

		</div>





		<!-- /////////////////////////////----------Carasuel------------////////////////////////////////////////// -->


		<h5 style="font-weight: 700; margin-top: 60px; text-align:center; margin-bottom: 20px; font-size: 25px;">
				PRODUCT VIDEO</h5>
		<div id="slider-container" class="slider">
			<div class="slide">
				<img src="images/cr1.jpg" alt="">
			</div>
			<div class="slide">
				<img src="images/cr2.jpg" alt="">
			</div>
			<div class="slide">
				<img src="images/cr3.jpg" alt="">
			</div>
			<div class="slide">
				<img src="images/cr4.jpg" alt="">
			</div>
			<div class="slide">
				<img src="images/cr5.jpg" alt="">
			</div>
			<div class="slide">
				<img src="images/cr6.jpg" alt="">
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
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
		integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
		crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
		integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p"
		crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
		integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF"
		crossorigin="anonymous"></script>


</body>

</html>