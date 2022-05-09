<?php
session_start();
 
if(!isset($_SESSION['user_id'])){
    header('Location: index.php');
    exit;
} 

else {

?>



<!doctype html>
<html lang="en">
  <head>
    <style>


        .footer {
  position: fixed;
left: 0;
  bottom: 0;

  background-color: #cce5ff;
  color: white;
  text-align: center;
}
.footer1 {
position: fixed;
right :0;
bottom: 0;

background-color: #cce5ff;
color: white;
text-align: center;
}


    </style>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <title>ATM Login</title>
  </head>
  <body style="background-color:">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

<div ></div>


    <!-- Image and text -->
    <nav class="navbar navbar-light" style="background-color:#00B5EF">
      <a class="navbar-brand" style="padding-left:450px ; font-size:40px;">
        <img src="logo.png" width="80" height="60" class="d-inline-block align-top" alt="" loading="lazy">
        Most Trusted Bank
      </a>
       <a class="btn btn-warning" href="logout.php" role="button"><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-info-circle" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
  <path fill-rule="evenodd" d="M8 15A7 7 0 1 0 8 1a7 7 0 0 0 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
  <path d="M8.93 6.588l-2.29.287-.082.38.45.083c.294.07.352.176.288.469l-.738 3.468c-.194.897.105 1.319.808 1.319.545 0 1.178-.252 1.465-.598l.088-.416c-.2.176-.492.246-.686.246-.275 0-.375-.193-.304-.533L8.93 6.588z"/>
  <circle cx="8" cy="4.5" r="1"/>
</svg> Logout</a>
    </nav>

    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel" >
      <ol class="carousel-indicators">
        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
      </ol>
      <div class="carousel-inner">
        <div class="carousel-item active" style="height:400px;">
          <img class="d-block w-100"  src="https://www.sbicard.com/sbi-card-en/assets/media/images/home/elite-banner/d-elite.jpg" alt="First slide">
        </div>
        <div class="carousel-item" style="height:400px;">
          <img class="d-block w-100" style="height:400px;" src="https://www.sbicard.com/sbi-card-en/assets/media/images/home/banner-4th-position/d-bt-on-emi.jpg" alt="Second slide">
        </div>
        <div class="carousel-item" style="height:400px;">
          <img class="d-block w-100"  src="https://www.sbicard.com/sbi-card-en/assets/media/images/personal/benefits/easy-access-channels/whatsapp/d-whatsapp.jpg" alt="Third slide">
        </div>
        <div class="carousel-item" style="height:400px;">
          <img class="d-block w-100"  src="https://www.sbicard.com/sbi-card-en/assets/media/images/home/flexipay-Festive-2020-banner/d-flexipay-Festive-2020-banner.jpg" alt="Third slide">
        </div>
      </div>
      <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>

<div class="container">
  <h3 style="color:#2c387a ; padding-top:20px;"><b>Product and Services</b></h3>



<div class="row">
  <div class="col-sm-6">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">SBI CARD</h5>
        <div style="padding-left:15px;padding-top:15px;">
        <li> <a href="#" >Funds Transfer </a> </li>
          <li> <a href="#" > Intra-Bank Transfer </a> </li>
          <li>  <a href="#">RTGS/NEFT </a> </li>
          <li> <a href="#"> Credit Card (VISA)</a>  </li>
          <li> <a href="#"> IMPS Payments </a> </li>
          <li> <a href="#"> NRI eZ Trade Funds Transfer</a>  </li>
        </div>

      </div>
    </div>
  </div>
  <div class="col-sm-6">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">Bill Payments</h5>
        <div style="padding-left:15px;padding-top:15px;">
        <li> <a href="#" >NPS Contribution </a> </li>
          <li> <a href="#" > Loan against Shares </a> </li>
          <li>  <a href="#">Apply SBI Credit Card</a> </li>
          <li> <a href="#"> Credit Card (VISA)</a>  </li>
          <li> <a href="#"> Power Jyoti Fee Collection (PUL) </a> </li>
          <li> <a href="#"> State Bank Collect</a>  </li>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="row" style="padding-top:10px;">
  <div class="col-sm-6">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">Smart Cards</h5>
        <div style="padding-left:15px;padding-top:15px;">
        <li> <a href="#" >Gift Card </a> </li>
          <li> <a href="#" > Smart Pay-out Card </a> </li>
          <li>  <a href="#">State Bank eZ Pay Card </a> </li>
          <li> <a href="#"> State Bank Achiever Card</a>  </li>
          <li> <a href="#">   VISA Foreign Travel Card </a> </li>
          <li> <a href="#"> MasterCard Foreign Travel Card</a>  </li>
        </div>
        </div>
    </div>
  </div>
  <div class="col-sm-6">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">E – Deposits</h5>
        <div style="padding-left:15px;padding-top:15px;">
        <li> <a href="#" >  E-TDR/e-STDR </a> </li>
          <li> <a href="#" > E-TDR/e-STDR under Income Tax Savings Scheme </a> </li>
          <li>  <a href="#">SBI Flexi Deposit </a> </li>
          <li> <a href="#"> Credit Card (VISA)</a>  </li>
          <li> <a href="#"> E-Annuity Deposit Scheme </a> </li>
          <li> <a href="#"> E- Recurring Deposits</a>  </li>
        </div>
      </div>
    </div>
  </div>
</div>

</div>

<div class="container">
  <div class="row" style="padding-top:70px;">
    <div class="" style="margin: auto;">
      <div class="card">
        <img src="https://www.sbicard.com/sbi-card-en/assets/media/images/personal/credit-cards/value-savings/lifestyle/349x218-Landmark-rewards-BLACK-front.png">
      </div>
    </div>
    <div class="" style="margin: auto;">
      <div class="card">
<img src="https://www.sbicard.com/sbi-card-en/assets/media/images/personal/credit-cards/value-savings/card-faces/max-PRIME-front.png">
      </div>

    </div>
  </div>

  <div class="row" style="padding-top:70px;">
    <div class="" style="margin: auto;">

      <button style="margin:auto;"type="button" class="btn btn-primary">Apply Here</button>
    </div>
    <div class="" style="margin: auto;">

      <button style="margin:auto;"type="button" class="btn btn-primary">Apply Here</button>

    </div>
  </div>

</div>
<hr>
<h3  style="text-align: center ; padding-top: 100px;;">Become a proud owner of an SBI Card<h3>




  </body>
</html>
<?php 
}
 ?>