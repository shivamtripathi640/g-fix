<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>tools</title>

  <style>
    <?php include 'css/style.css';
    ?>
  </style>

  <!-- Icon Font Stylesheet -->
  <link 
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css"
    />
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
   <!-- Boxicons CDN Link -->

    <title>Contact Us </title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  
</head>

<body>


  <!-- HEADER Start -->
  <!-- <?php include('header.php'); ?> -->
  <!-- Header End -->



  <section id="calcc" style="margin-top: 230px; margin-bottom:50px;">
    <div class="text-center01">
      <h2 class="common-h201">JOINT <span style="color:#FF2626">FILLER</span> &nbsp; COVERAGE CALCULATOR</h2>
      <h5 class="common-h501">A TOOL TO ESTIMATE THE RIGHT QUANTITY OF TILE JOINT FILLER <br>FOR YOUR REQUIREMENTS.</h5>
    </div>
  </section>
  <div class="main_contain" style="display: flex">
    <section class="timeline-area03" style="    width: 60%;
       padding: 5px 20px 0 32px;
        background-color: #fff1f1;">
      <section class="timeline-area">
        <div id="tlne" style="display:flex">
          
          <div class="sec-1">
           <h2 style=" font-size: 15px; font-weight:700; margin:0px">ENTER AREA, TILE <br>WIDTH AND LENGTH</h2>
           <div class="user-input-box">
            <label for="phoneNumber">Total Area</label><br>
            <input type="text" id="phoneNumber" name="phoneNumber"
              placeholder="0  &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;|Sq.Ft" />
           </div>
           <div class="user-input-box">
            <label for="phoneNumber">Tile Width(1-5000)</label><br>
            <input type="text" id="phoneNumber" name="phoneNumber"
              placeholder="0  &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;|mm" />
           </div>
           <div class="user-input-box">
            <label for="phoneNumber">Tile Length(1-5000)</label><br>
            <input type="text" id="phoneNumber" name="phoneNumber"
              placeholder="0  &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;|mm" />
           </div>
            
         </div>
         <div class="sec-2">
         <div id="tlne01">
            <h2 style=" font-size: 15px; font-weight: 700; margin:0px">ENTER LENGTH OF TILE JOINT FILLER</h2>
            <div class="user-input-box">
              <label for="phoneNumber">Total Length Of Tile Joint Filler</label><br>
              <input type="text" id="phoneNumber" name="phoneNumber"
                placeholder="0  &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;| Ft" />
            </div>

          </div>
          
         </div>
          
        </div>
        <div id="tlne">
          <h2 style=" font-size: 15px; font-weight: 700;">ENTER JOINT WIDTH & TILE THICKNESS</h2>
          <div style="display:flex">
          <div class="user-input-box">
            <label for="phoneNumber">Joint Width(1-5000)</label><br>
            <input type="text" id="phoneNumber" name="phoneNumber"
              placeholder="0  &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;|mm" />
          </div>

          <div class="user-input-box" style="margin-left:15px">
            <label for="phoneNumber">Tile THICKNESS(1-5000)</label><br>
            <input type="text" id="phoneNumber" name="phoneNumber"
              placeholder="0  &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;|mm" />
          </div>
            
          </div>
          
          <button type="button">Submit</button>

        </div>
        

      </section>

    </section>
    <section class="timeline-area01" style="padding-top: 70px;">
      <h3 style="font-size:20px;">REQUIRED TILE JOINT FILLER</h3>
      <div class="imgsection" style="margin-top: 180px;">
      <center><img src="./images/New Project (36).jpg" style=" width: 100px;
        height: 100px;"></center>
      <h5 class="common-h502">FILL IN THE REQUIREMENT ON THE LEFT<br> TO DISPLAY THE <span
        style="color:#FF2626">QUANTITY</span> REQUIRED</h5>
        
      </div>
      
      
    </section>


  </div>





  <!-- Responsive footer -->
  <?php include('footer.php'); ?>

  <script src="js/script.js"></script>
</body>

</html>
