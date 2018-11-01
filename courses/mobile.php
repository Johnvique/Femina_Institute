<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>FEMINA TRAINING INSTITUTE</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css" integrity="sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/custom.css">
    <style type="text/css">
    .nav-link:hover{
      color: white;
      background-color:#01009A;
    }
    li.active{
    background-color: #17A2B8;
    }
    .my-container {
    position: relative;
    background: yellow;
    overflow: hidden;
}
.my-container:before {
    content: ' ';
    display: block;
    position: absolute;
    left: 0;
    top: 0;
    width: 100%;
    height: 100%;
    z-index: 1;
    opacity: 0.8;
    background-image: url('../imgs/k.jpeg');
    background-repeat: no-repeat;
    background-position: 50% 0;
    -ms-background-size: cover;
    -o-background-size: cover;
    -moz-background-size: cover;
    -webkit-background-size: cover;
    background-size: cover;
}
.my-container h1 {
    padding: 50px;
    text-align: center;
    z-index: 2;
    position: relative;
    color: #fff;
} 
   </style>
</head>
<body>
  <?php
include('nav.php');
  ?>

<div class="my-container">
    <h1 style="color: #000000">Mobile handset and Telephone Repair Services</h1>
</div>
<main>
    <div class="container">
        <div class="row">
            <div class="col-md-6" style="margin-top: 1em;">
                <h4 class="text-center">
                    Phone Repair Services 
                </h4>
                <p><strong>On-site repair feature:</strong>If you need to get your phone's battery replacement, you may get it done within a couple of minutes without keeping your phone away for some days.The Femina technicians can get the job done at the earliest, and in case they need some time to fix the issue, they can even drop the equipment at your registered address without the need to pay an extra buck.</p>
                <p><strong>Phone screen damage:</strong>Besides replacing the battery, the service centres can also fix phone screen that is broken or damaged in a short time.Femina service providers can give you original and high quality spares so that your phone looks new once again.</p>
                <p class="text-center"  style="margin-right: 1em"><strong>Liquid damage repair:</strong>Though nobody wants to drench their phone into water,nevertheless,the internal parts may get damaged even if there is slightest moisture contact.And even if your phone is within a valid guarantee period,the makers will not repair the damage. In that case,Femina Service providers dealing with mobile phone repairs can be a good option to fix the problem and get the phone back to its normal state.</p>
            </div>
            <div class="col-md-6 text-center">
              <p style="margin-top: 2em">
               <strong>Phone unlocking:</strong>Sometimes it happens that the user is unable to unlock the phone or the sim card inside the phone. In such instances, it would be better to bring the phone to our professionals who knows the right steps to address the problem.</p>
                <img src="../imgs/images 2.jpg" class="img-fluid">
                <p><strong>Recovering data:</strong>Seek help from Femina mobile proffesionals if your phone is not booting up,or if it doesn’t turn on.When you have all the important files stored in your phone,and it doesn’t start up, it can bring utter frustration.So you should immediately visit our repair service centre which specializes in handling these problems.They can repair your phone so that you can get back all your valued documents.</p>
            </div>
        </div>
    </div>
</main>
<footer class="bg-info">
  <div class="container ">
  <div class="row  text-white">
    <div class="col-md-4">
      <h5>Important</h5>
      <hr class="bg-white">
      <ul>
      <li><a href="../about.html"><span style="color: #000000">About Femina</span></a></li>
      <li><a href="../contact.html"><span style="color: #000000">Contact Us</span></a></li>
      <li><a href="../fee.html"><span style="color: #000000">Fee Structure</span></a></li>
      <li><a href="../downloads.html"><span style="color: #000000">Important downloads</span></a>
      </li>
      </ul>
    </div>
    <div class="col-md-4">
      <h5>Social</h5>
      <hr class="bg-white">
     <ul>
        <p class="fab fa-facebook-f">
            <a href="www.facebook.com/feminainstitute/" class="text-blue">
            <span style="color: #FFCB99"> Facebook</span>
            </a>
          </p><br>
          <p class="fab fa-twitter">
            <a href="www.twitter.com/feminainstitute/" class="text-blue">
            <span style="color: #FFCB99"> Twitter</span>
            </a>
          </p><br>
          <p class="fab fa-google-plus">
            <a href="www.google-plus.com/feminainstitute/" class="text-green">
            <span style="color: #FFCB99">Google +</span>
            </a>
          </p>
        </ul>
    </div>
    <div class="col-md-4">
      <h5>Talk Us</h5>
      <hr class="bg-white">
      <ul>
        <p class="fa fa-globe-africa text-white">
          <span style="color: #000000">
          Femina Training Institute,<br>
          P.O BOX,70-60602,<br>
          Cape Corner along Livestock Market Road,
          Kianjai-Meru</span></p>
          <br>
          <p class="fa fa-phone text-white">
          <span style="color: #000000">Tel: 0722953886 or 0774038901</span></p>
          <br>
          <p class="fa fa-envelope text-white">
          <span style="color: #000000">Email Adress: feminatraining@gmail.com</span></p>
      </ul>
    </div>
  </div>
  </div>
</footer>
<footer class="text-center bg-info text-white">
  <a href="#" class="text-white">Femina Training Institute</a> 
  | All Rights Reserved &copy; 2018| Powered By 
  <a href="mtaani-tech.000webhostapp.com" class="text-white" target="_blank">Mtaani_Tech Developers</a>
</footer><script src="../js/jquery-3.2.1.min.js"></script>
<script src="../js/popper.min.js"></script>
<script src="../js/bootstrap.min.js"></script>
<script src="../js/mdb.js"></script>
<script>
      $(function () {
        $('#myTab li:last-child a').tab('show')
      })
    </script>
</body>
</html>