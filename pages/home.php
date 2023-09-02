<!DOCTYPE html>
<!-- Created By CodingNepal - www.codingnepalweb.com -->
<html lang="en" dir="ltr">
  <head>
   <title> gf </title>
   <meta charset="UTF-8" />
   <meta http-equiv="X-UA-Compatible" content="IE=edge" />
   <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

     <!--<link rel="stylesheet" href="css/style.css"/>-->

      <link rel="stylesheet" type="" href="css/style.css">
     
     <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;700;900&display=swap" rel="stylesheet">
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet">
     <link href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css" rel="stylesheet">
 
      <!-- Icon Font Stylesheet -->
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
     <link href="https://fonts.googleapis.com/css2?family=PT+Sans:wght@400;700&display=swap" rel="stylesheet"/>
     <!--media css-->
     <link type="text/css" rel="stylesheet" href="css/media.css" />

     <!--jquery ui files-->
     <link type="text/css" rel="stylesheet" href="css/jquery-ui.structure.min.css" />
     <link type="text/css" rel="stylesheet" href="css/jquery-ui.theme.min.css" />
   <!-- Swiper CSS -->
   <link rel="stylesheet" href="css/swiper-bundle.min.css" />


   <style>
        .bg-light {
	background-color: transparent !important;
}
.carousel-item {
	height: 100vh;
	min-height: 300px;
}
.carousel-caption {
	top: 210px;
  margin-right: 560px;
}
.carousel-caption h5 {
	font-size: 45px;
	text-transform: uppercase;
	letter-spacing: 2px;
  margin: auto;
  margin-left: -80px;
  
}
.carousel-caption p {
	width: 20vw;
	margin: auto;
	font-size: 18px;
  margin-left: -15px;
	line-height: 1.9;
}
.carousel-caption a {
	text-transform: uppercase;
	text-decoration: none;
	background: red;
	padding: 13px 35px;
	display: inline-block;
	color: #000;
	margin-top: 10px;
  margin-left: -15px;
}

.w-100 {
	height: 100vh;
}

@media(max-width: 900px) {
  .carousel-item {
	height: 100vh;
	min-height: 300px;
}
.carousel-caption {
	top: 240px;
  margin-right: 540px;
}
	.carousel-caption {
		bottom:165px;
	}
	.carousel-caption h5 {
		font-size: 4vw;
    width: 25vw;
  
   
    
	}
	.carousel-caption a {
		padding: 14px 55px;
		font-size: 1.6vw;
    font-weight: bold;
    color: #000;
	}
  .carousel-caption p {
    width: 20vw;
    margin: 0px 20px;
    font-size: 3vw;
    line-height: 1.6;
  }
}

@media(min-width: 1330px) {
  .carousel-item {
	height: 100vh;
	min-height: 300px;
}
.carousel-caption {
	top: 210px;
  margin-right: 580px;
}
.carousel-caption h5 {
	font-size: 45px;
	text-transform: uppercase;
	letter-spacing: 2px;
  margin: auto;
  text-align: left;
  
}
.carousel-caption p {
	width: 20vw;
	margin: auto;
	font-size: 14px;
  margin-left: -10px;
	line-height: 1.9;
  text-align:left;
}
.carousel-caption a {
	text-transform: uppercase;
	text-decoration: none;
	background: red;
	padding: 15px 38px;
	display: inline-block;
	color: #000;
	margin-top: 10px;
  margin-left: -10px;
}

.w-100 {
	height: 100vh;
}
}

   
   </style>
     <!-- Boxicons CDN Link -->
 
    
</head>

  

<body>
  <!-- ///////////////////////////-----------------header------------------------//////////////////////////////////////////    -->

   <!-- HEADER Start -->
  <!-- <?php include('header.php'); ?> -->
  <!-- Header End -->


  <!-- ///////////////////////////////--------------HERO BANNER---------------//////////////////////////////////// -->
	<div class="carousel slide" data-bs-ride="carousel" id="carouselExampleIndicators">
		<div class="carousel-indicators">
			<button aria-label="Slide 1" class="active" data-bs-slide-to="0" data-bs-target="#carouselExampleIndicators" type="button"></button> <button aria-label="Slide 2" data-bs-slide-to="1" data-bs-target="#carouselExampleIndicators" type="button"></button> <button aria-label="Slide 3" data-bs-slide-to="2" data-bs-target="#carouselExampleIndicators" type="button"></button>
		</div>
		<div class="carousel-inner">
			<div class="carousel-item active">
				<img alt="..." class="d-block w-100" src="images/banner1.jpg">
				<div class="carousel-caption">
					<h5 class="animated bounceInRight" style="font-weight: 700;">TOP RATED <br> TILE ADHESIVE <br>IN THE <br> MARKET</h5>
          <div class="stylesec"  style=" margin:20px;">
          <p class="animated bounceInLeft d-none d-md-block pera" style=""> SAY NO TO CEMENT AND YES TO GERMAN FIX</p>
					<p class="animated bounceInRight"><a href="#"  style="color:white;">Learn More</a></p>
            
          </div>
					
				</div>
			</div>
			<div class="carousel-item">
				<img alt="..." class="d-block w-100" src="images/banner2.jpg">
				<div class="carousel-caption">
					<h5 class="animated bounceInRight" style="font-weight: 700;">SOLUTION FOR <br>YOUR TILE <br> FIXING PROBLEMS</h5>
          <div class="stylesec"  style=" margin:20px;">
          <p class="animated bounceInLeft d-none d-md-block pera" style=""> SAY NO TO CEMENT AND YES TO GERMAN FIX</p>
					<p class="animated bounceInRight"  ><a href="#"  style="color:white;">Learn More</a></p> 
          </div>
				</div>
			</div>
			<div class="carousel-item">
				<img alt="..." class="d-block w-100" src="images/banner-3.jpg">
				<div class="carousel-caption">
					<h5 class="animated bounceInRight" style="font-weight: 700;">NO CEMENT <br> ONLY ZERO <br> WASTE ADHESIVE</h5>
          <div class="stylesec"  style=" margin:20px;">
          <p class="animated bounceInLeft d-none d-md-block pera" style=""> SAY NO TO CEMENT AND YES TO GERMAN FIX</p>
					<p class="animated bounceInRight" ><a href="#"  style="color:white;">Learn More</a></p>
          </div>
				</div>
			</div>
		</div><button class="carousel-control-prev" data-bs-slide="prev" data-bs-target="#carouselExampleIndicators" type="button"><span aria-hidden="true" class="carousel-control-prev-icon"></span> <span class="visually-hidden">Previous</span></button> <button class="carousel-control-next" data-bs-slide="next" data-bs-target="#carouselExampleIndicators" type="button"><span aria-hidden="true" class="carousel-control-next-icon"></span> <span class="visually-hidden">Next</span></button>
	</div>


  <!-- ////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// -->
    <div class="section-container" >
       
        <div class="columns content"  >
            <div class="content-container">+
               <h5>GERMAN FIX PRODUCT KIT</h5>
               <p>
                 The One-Stop Shop For Your<br> Tile and Stone Fixing Requirements 
               </p>
            </div>
         </div>
            <div class="columns image" style="background-image:url('images/bg03.png')">
           &nbsp;
        </div>
     </div>


     <div class="container">

  
      <div class="box-container">
  
          <div class="box">
              <img src="images/16.jpg" alt="">
           
              <a href="#" class="btn">New Floor Old Method?</a>
          </div>
  
          
          <div class="box">
            <img src="images/14.jpg" alt="">
     
            <a href="#" class="btn">Leaking Bathroom?</a>
        </div>
         
  
          <div class="box">
              <img src="images/15.jpg" alt="">
         
              <a href="#" class="btn">External Tiles Fixing</a>
          </div>
  
          <div class="box">
              <img src="images/12.jpg" alt="">
              
              <a href="#" class="btn">Broken Old Tiles?</a>
          </div>
  
          <div class="box">
              <img src="images/18.jpg" alt="">
       
              <a href="#" class="btn">Big Tiles & Stones Fixing</a>
          </div>
  
          <div class="box">
              <img src="images/16.jpg" alt="">
           
              <a href="#" class="btn">Stone Loosing Beauty</a>
          </div>
          
      </div>  
       <!--//////////////////////////////---------------3rd section -----------////////////////////////////////// -->
       <div>
      <h3 class="heading" style="margin-left: 60px;">SOLUTIONS TO <br>MODERN TILE<br> & STONE FIXING CHALLENGES</h3><br/>
       <p style ="margin-left: 80px;"> A Quick Fix Won't Do. Your Dream <br/>Home  Deserves Nothing Less Than Solutions Crafted By <span style="color: red;">The Experts.</span></p>
      </div>
   </div>



    <div class="containeor">
     <h3>HELPFUL TOOLS</h3>
     <p> Friendly Tools To Help You Select <font color="#FF2626">The Right Product </font>, Match Shades <br>To your Tiles, And Estimate The Right Quantity</p>
     <!-- <div class="imges">
     <img src="/img01.jpeg" alt="Image 1"><br><p style="font-size: 18px; font-weight: 500; margin-top: 15px;">FILTER COVERAGE <br> CALCULATOR</p>
     <img src="/img02.jpeg" alt="Image 2"><br><p style="font-size: 18px; font-weight: 500; margin-top: 15px;">GERMAN FIX ELITE<span style="color: red;">BOND</span></p>
      <img src="/img03.jpeg" alt="Image 3"><br><p style="font-size: 18px; font-weight: 500; margin-top: 15px;">GERMAN FIX ELITE<span style="color: red;">BOND</span></p>
    </div> -->

    <div class="prod-container">
        
      <div class="gallery-area">
          <div class="single-img">
             <img style="height: 200px;  width: 200; " src="images\img01.png" alt=""><br><p style="font-size: 24px; font-weight: 600; margin-top: 19px;">FILTER COVERAGE <br> CALCULATOR</p>
          </div>
          <div class="single-img">
             <img style="height: 200px;  width: 200; " src="images\img02.png" alt=""><br><p style="font-size: 24px; font-weight: 600; margin-top: 19px;">ADHESIVE COVERAGE <br> CALCULATOR</span></p> 
          </div>
          <div class="single-img">
             <img style="height: 200px;  width: 200; " src="images\img03.png" alt=""><br><p style="font-size: 24px; font-weight: 600; margin-top: 19px;">TILE ADHESIVE <br> SELECTOR</p>
          </div>
      </div>
     </div>
 </div>
 
  <section id="price-table">
    <div class="text-center">
        <h2 class="common-h2">BLOGS & CURRENT TRENDS</h2>
        <h5 class="common-h5">Check Out The Latest Trends Of The Season</h5>
        
    </div>
    <div class="basic-price-col">
        <div class="basic-price-info">
          <img src="images/wt1.jpeg">
           
            <div class="price-list" style=" padding: 10px;">
              <p id="date" style="margin-top: 15px; text-align:left; color:red;"><i class="fa-regular fa-calendar-days"></i>February 15, 2023</p>
              <p id="hading">TILE CLEANING LIQUIDS IN A GLANCE</p>
              <p id="norm-text">Lorem ipsum dolor sit amet <br>consectetur, quasi sit reiciendis, sapiente ipsam.</p>
              <p style="font-weight:600; text-align:left; color:red; ">Read More</p>
            </div>
          
            
        </div>
       
    </div>
   
    <div class="basic-price-col rec-price">
        <div class="basic-price-info01">
          <img src="images/17.jpg">
           
            <div class="price-list" style=" padding: 10px;">
              <p id="date" style="margin-top: 15px; text-align:left; color:red;"><i class="fa-regular fa-calendar-days"></i>February 15, 2023</p>
              <p id="hading">OVERVIEW OF JOINT FILTERS</p>
              <p id="norm-text">Lorem ipsum dolor sit amet  elit. Suscipit eaque, architecto itaque odit cupiditate necessitatibus impedit reprehenderit possimus illum sunt!</ipsam></p>    
              <p style="font-weight:600; text-align:left; color:red; ">Read More</p>
            </div>
            <!--price-list-->
            
        </div>
        <!--basic-price-info-->
    </div>
    <!--basic-price-col-->
    <div class="basic-price-col">
        <div class="basic-price-info">
          <img src="images/13.jpg">
            <!-- <h4>Premium Plan</h4>
            <div class="price">
                <p>$2450</p>
            </div> -->
            <!--price-->
            <div class="price-list" style=" padding: 10px;">
              <p id="date" style="margin-top: 15px; text-align:left; color:red; "><i class="fa-regular fa-calendar-days"></i>February 15, 2023</p>
              <p id="hading">TILE CLEANING LIQUIDS IN A GLANCE</p>
              <p id="norm-text">Lorem ipsum dolor sit amet<br> consectetur, quasi sit reiciendis. sapiente ipsam.</p>
              <p style="font-weight:600; text-align:left; color:red; ">Read More</p> 
            </div>
           
        </div>
        <!--basic-price-info-->
       
          <!-- <button type="button" class="price-btn02">Read More</button> -->
        
    </div>
   
    <!--basic-price-col-->
   
    <div class="clear"></div>
   
    


</section>
<div>
    <center>      <button type="button" class="price-btn02" style="padding-top: 15px;
    padding-bottom: 15px;
    padding-right: 40px;
    padding-left: 40px;">Load More</button></center>
    </div>



<div class="containerr" style="margin-top: 50px;">
	
	<div class="contents-wraper">
		
		<section class="header"><h1>Read What Our Clients Says</h1></section>

		<section class="testRow">
			
			<div class="testItem active">
				<img src="images/model-1.jpg">
				<h3>Jane Doe</h3>
				<h4>San Francisco, USA</h4>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
			</div>

			<div class="testItem">
				<img src="images/model-2.jpg">
				<h3>Jane Doe</h3>
				<h4>San Francisco, USA</h4>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
			</div>

			<div class="testItem">
				<img src="images/model-3.jpg">
				<h3>Jane Doe</h3>
				<h4>San Francisco, USA</h4>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
			</div>

			<div class="testItem">
				<img src="images/model-4.jpg">
				<h3>Jane Doe</h3>
				<h4>San Francisco, USA</h4>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
			</div>

			<div class="testItem">
				<img src="images/model-5.jpg">
				<h3>Jane Doe</h3>
				<h4>San Francisco, USA</h4>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
			</div>

		</section>

		<section class="indicators">
			<div class="dot active" attr='0' onclick="switchTest(this)"></div>
			<div class="dot" attr='1' onclick="switchTest(this)"></div>
			<div class="dot" attr='2' onclick="switchTest(this)"></div>
			<div class="dot" attr='3' onclick="switchTest(this)"></div>
			<div class="dot" attr='4' onclick="switchTest(this)"></div>
		</section>

	</div>
</div>
  

<!-- Responsive footer -->

<?php include('footer.php'); ?> 


    <!-- Swiper JS -->
    <!-- <script src="js/swiper-bundle.min.js"></script> -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js">
    </script> 
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js">
    </script> 
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.min.js">
    </script>
    <script src="js/script.js"></script>
  
</body>
</html>