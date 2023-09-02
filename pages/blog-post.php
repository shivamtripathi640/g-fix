<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Bootstrap 5 - Blog Cards</title>
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <style>
      .card img {
        height: 230px;
      }

      .card-body{
        height: auto;
      }
    </style>
  </head>

  <body class="bg-light">
      <!-- HEADER Start -->
  <!-- <?php include('header.php'); ?> -->
  <!-- Header End -->
    <div class="container">
      <div class="text-center my-5">
        <h1>WORDS OF <span style="color: red;">WISDOM</span></h1>
        <h6>SOME NUGGETS FROM YEARS OF EXPERIENCE IN ADHESIVE INDUSTRY</h6>
      </div>

      <div class="row">
        <div class="col-lg-4 col-md-6 col-sm-12">
          <div class="card mb-5 shadow-sm">
            <img src="images/img1.jpg" class="img-fluid" />

            <div class="card-body">
              <div class="card-title">
              <li><i class="fa-solid fa-location-dot"></i><a href="#">#33,First Floor, G-Block Sri Ganganagar,Rajasthan</a></li>
              <box-icon name='calendar'></box-icon>
                <h6>TILE CLEANING LIQUIDS IN A GLANCE</h5>
              </div>
              <div class="card-text">
                <p>
                  Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                  Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                  
                </p>
              </div>
              <a href="#" class="btn btn-outline-primary rounded-0 float-start"
                >Read More</a
              >
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 col-sm-12">
          <div class="card mb-5 shadow-sm">
            <img src="images/img1.jpg" class="img-fluid" />

            <div class="card-body">
              <div class="card-title">
                <h6>GUIDE TO REMOVE GROUT FROM TILES</h6>
              </div>
              <div class="card-text">
                <p>
                  Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                  Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                </p>
              </div>
              <a href="#" class="btn btn-outline-primary rounded-0 float-start"
                >Read More</a
              >
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 col-sm-12">
          <div class="card mb-5 shadow-sm">
            <!-- <img src="imgs/c.jpg" class="img-fluid" /> -->
            <div class="card-body" style="background-color: #363636; height: 220px;">
              <div class="card-title" style="color: #fff;">
                <h6>SUBSCRIBE TO OUR NEWSLETTER</h6>
                <hr/>
              </div>
              <div class="card-text" style="margin-top: 26px;">
               <input type="email" class="form-control" name=""
                  placeholder="Email Address*" >
              </div><br/>
              <a href="#" class="btn btn-outline-primary rounded-0 float-center"
               style="margin-left: 76px; margin-top: 20px;" >SUBSCRIBE</a
              >
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 col-sm-12">
          <div class="card mb-5 shadow-sm">
            <img src="images/img1.jpg" class="img-fluid" />

            <div class="card-body">
              <div class="card-title">
                <h2>This is the blog title</h2>
              </div>
              <div class="card-text">
                <p>
                  Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                 
                </p>
              </div>
              <a href="#" class="btn btn-outline-primary rounded-0 float-center"
                >Read More</a
              >
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 col-sm-12">
          <div class="card mb-5 shadow-sm">
            <img src="images/img1.jpg" class="img-fluid" />

            <div class="card-body">
              <div class="card-title">
                <h2>This is the blog title</h2>
              </div>
              <div class="card-text">
                <p>
                  Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                  
                </p>
              </div>
              <a href="#" class="btn btn-outline-primary rounded-0 float-start"
                >Read More</a
              >
            </div>
          </div>
        </div>

        <!-- <div class="col-lg-4 col-md-6 col-sm-12">
          <div class="card mb-5 shadow-sm">
            <div class="card-body">
              <div class="card-title" style="background-color: #ff5056; padding: 2px 20px; border-radius: 10px; color: #fff;">
                <h5>MOST POPULAR BLOGS</h5>
              </div><br/>
              <div class="card-text">
               <?php
               while($row = $result->fetch_assoc()){

               ?> 
               <p>
                     <?php echo $row["id"] ?> - <?php echo $row["product_name"] ?>

               </p>
               <?php  

               }

               ?>
              </div>
              <a href="#" class="btn btn-outline-primary rounded-0 float-end"
                >Read More</a
              >
            </div>
          </div>
        </div> -->
      </div>
    </div>
  </body>
</html>