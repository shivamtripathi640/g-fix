<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <style>
    .containeer {
      width: 100%;
      height: 70vh;
      display: flex;
      flex-wrap: wrap;
      justify-content: center;
      align-items: center;
      margin-top: 145px;
    }

    .containeer .contact_data {
      background: #363636;
      width: 600px;
      border-radius: 02px;
      border-top: 04px solid #fff;
      margin: 0 10px;
    }

    .containeer .contact_data form {
      padding: 0 1rem;
    }

    .containeer .contact_data form input,
    textarea {
      width: 95%;
      margin: 05px 0 0 10px;
      padding: 07px 10px;
      border: 1px solid #ddd;
      font-size: 1rem;
      border-radius: 05px;
    }

    .containeer .contact_data h2 {
      margin: 1.5rem;
      border-bottom: 0.2rem #47b2e4 solid;
      width: 25%;
    }

    .containeer .contact_data label {
      display: block;
      padding-top: 15px;
      padding-left: 10px;
    }

    .containeer .contact_data button {
      margin: 20px 10px;
      border: none;
      padding: 10px 20px;
      background: #e31e25;
      font-size: 1rem;
      border-radius: 05px;
      cursor: pointer;
      transition: all 0.3s;
    }

    .containeer .contact_data2 {
      background: #fff;
      border-radius: 02px;
      border-top: 04px solid #3498db;
      width: 400px;
      margin: 0 10px;
    }

    .containeer .contact_data2 ul {
      list-style: none;
    }

    .containeer .contact_data2 ul li {
      margin: 1.2rem 0rem;
    }

    .containeer .contact_data2 ul li i {
      font-size: 1.1rem;
      color: #47b2e4;
    }

    .containeer .contact_data2 ul li strong {
      margin-left: 10px;
      font-size: 0.9rem;
    }

    .containeer .contact_data2 ul li p {
      font-size: 12px;
      margin-left: 35px;
    }

    .containeer .contact_data2 .map iframe {
      width: 90%;
      height: 280px;
      margin: 0 1rem;
    }

    @media (max-width: 1037px) {

      .containeer .contact_data,
      .contact_data2 {
        width: 80%;
        margin: 10px 0px;
      }

      .containeer .contact_data h2 {
        width: 50%;
      }
    }

    @media (max-width: 768px) {
      .containeer .contact_data2 {
        width: 75%;
        margin: 10px 0px;
      }

      .containeer .contact_data h2 {
        width: 50%;
      }
    }
  </style>

  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;700;900&display=swap" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css" rel="stylesheet">

  <!-- Icon Font Stylesheet -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
    integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link href="https://fonts.googleapis.com/css2?family=PT+Sans:wght@400;700&display=swap" rel="stylesheet" />
  <!--media css-->
  <link type="text/css" rel="stylesheet" href="css/media.css" />

  <!--jquery ui files-->
  <link type="text/css" rel="stylesheet" href="css/jquery-ui.structure.min.css" />
  <link type="text/css" rel="stylesheet" href="css/jquery-ui.theme.min.css" />
  <!-- Swiper CSS -->
  <link rel="stylesheet" href="css/swiper-bundle.min.css" />
  <!-- Boxicons CDN Link -->
</head>

<body>

  <!-- HEADER Start -->
  <!-- <?php include('header.php'); ?> -->
  <!-- Header End -->


  <!-- //////////////-----------header end--------------------/////////////// -->

  <h5 style="font-weight: 700; margin-top: 150px; font-size: 2.8vw; text-align: center;">GET IN TOUCH</h5>
  <p style="font-size: 1.2vw; text-align: center; margin-bottom: 10px;">Contact us to know more about how <span
      style="color: red;">German FIX</span> <br>can help you build structures with lasting beauty.</p>
  <div class="containeer" style="margin-top: 20px;">

    <div class="contact_data2">
      <ul>
        <li>
          <i class="fa-solid fa-location-dot"></i>
          <strong>Location:</strong>
          <p>GERMANFIX PRIVATE LIMITED #33, FIRST FLOOR , G-BLOCK, SRI GANGANAGAR-335001 RAJASTHAN</p>
        </li>
        <li>
          <i class="fa-solid fa-envelope"></i>
          <strong>Email:</strong>
          <p>germanfix@gmail.com</p>
        </li>
        <li>
          <i class="fa-solid fa-envelope"></i>
          <strong>Call:</strong>
          <p>1800-8900-357</p>
        </li>
      </ul>
      <div class="map">
        <iframe
          src="https://www.google.com/maps/embed?pb=!1m16!1m12!1m3!1d6916.057871205311!2d73.86823858536611!3d29.921069149943353!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!2m1!1sGERMANFIX%20PRIVATE%20LIMITED%20%2333%2C%20FIRST%20FLOOR%20%2C%20G-BLOCK%2C%20%20SRI%20GANGANAGAR%20-%20335001%20RAJASTHAN!5e0!3m2!1sen!2sin!4v1691492550025!5m2!1sen!2sin"
          width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
          referrerpolicy="no-referrer-when-downgrade">
        </iframe>
      </div>
    </div>
    <div class="contact_data">
      <!-- <h2>Contact Me</h2> -->
      <form action="#">
        <label for=""></label>
        <input type="text" placeholder="Name*" required />
        <label for=""></label>
        <input type="email" placeholder="Email Address*" required style="width: 45%;" />
        <label for=""></label>
        <input type="text" placeholder="City*" required
          style="width: 45%; float: right; margin-top: -55px; margin-right: 30px;" />
        <label for=""></label>
        <input type="number" placeholder="Mobile*" required style="width: 45%;" />
        <label for=""></label>
        <input type="text" placeholder="Business Name*" required
          style="width: 45%; float: right; margin-top: -55px; margin-right: 30px;" />
        <label for=""></label>
        <textarea name="" id="" cols="30" rows="03" placeholder="Request Details"></textarea>
        <!-- <label for="">REQUEST FOR VISIT SITE FOR SAMPLES</label>-->
        <input type="checkbox" id="blue" style=" margin-top: 20px; margin-left: -230px;">
        <p style="margin-top: -25px; margin-left: 55px; font-size: 1.3vw; color: #fff;">REQUEST FOR VISIT SITE FOR
          SAMPLES </p>
        <input type="checkbox" id="blue" style=" margin-top: 20px; margin-left: -230px;">
        <p style="margin-top: -25px; margin-left: 55px; font-size: 1.3vw; color: #fff;">CONNECT WITH OUR EXPERT </p>

        <button style="margin-top: 50px;">Submit</button>
      </form>
    </div>
  </div>



  <!-- Responsive footer -->



  <!-- Responsive footer -->
  <?php ('footer.php') ?>

  <script src="js/script.js"></script>
</body>

</html>