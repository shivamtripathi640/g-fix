<!DOCTYPE html>
<!-- Created By CodingNepal - www.codingnepalweb.com -->
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
   <title> Responsive  </title>
    
    <style>
      <?php include 'css/style.css'; ?>
    </style>
    <style>
       <?php include 'css/bootstrap.min.css'; ?>
    
    </style>
    
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">  
     <!-- Boxicons CDN Link -->
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <!-- Icon Font Stylesheet -->
      <!-- Icon Font Stylesheet -->
    
   </head>
<body>
  <!-- Header for desktop -->
    <section class="header hidden-mobile">
        <div>
            <div class="navbar-1">
                <!-- <i class='bx bx-menu'></i> -->
                <div class="logo"><a href="#"><img src="images/logo.jpg"></a></div>
                <div class="nav-links">
                  <ul class="links " style="margin-right: 20px;">
                  <li><i class="fa-brands fa-facebook"></i></li>
                    <li><i class="fa-brands fa-instagram"></i>&nbsp;</li>
                    <li><i class="fa-brands fa-youtube"></i>&nbsp;</li>
                     
                  </ul>
                </div>
        </div>
    </section>
  <nav class="hidden-mobile">
    <div class="navbar">
      <!-- <i class='bx bx-menu'></i> 
      <div class="logo"><a href="#"></a></div>-->
      <div class="nav-links">
        <ul class="links">
          <li><a href="home.php">HOME</a></li>
          <li>
            <a href="products.php">PRODUCTS</a></li>
          <li>
            <a href="challenges&sol.php">SOLUTIONS</a> </li>
          
            <li><a href="calculator.php">TOOLS</a></li>
          <li><a href="about-us.php">ABOUT US</a></li>
          <li><a href="blogs.php">BLOG</a></li>
          <li><a href="contact.php">CONTACT US</a></li>
          <li>  <i class='bx bx-search' style="    color: white; font-size: 20px; font-weight: 700;"></i> </li>
        </ul>
        
      </div>
    <!--  <div class="search-box">
        <i class='bx bx-search'></i>
        <div class="input-box">
          <input type="text" placeholder="Search...">
        </div>
      </div> -->
      <div class="dealer">
      <button><a href="#">FIND A DEALER</a></button>
    </div>
    </div>
  </nav>

  <!-- Header for mobile -->
  <div class="nav-bar">
    <img src="images/logo-pic.jpg">
    <div class="menu-right">
        <span onClick="myFunction()">&#9776;</span>
       <ul id="menu">
        <li><a href="./home.html">HOME</a></li>    
        <li>SERVICES</li>    
        <li>BLOGS</li>    
        <li>ABOUT</li>    
        <li>CONTACT</li>    
        </ul>
    </div>


</div>   


  <script src="js/script.js"></script>
</body>
</html>