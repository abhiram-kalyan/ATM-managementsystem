<?php
session_start();
 
if(!isset($_SESSION['user_id'])){
    header('Location: index.php');
    exit;
} else {
 
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
  <body style="background-color: #79a9db">
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




<div style="padding-top:30px;">
<div class="container shadow-lg p-3 mb-5 rounded" style="padding-top:50px ;border-radius:50%; background-color:#5993cf ">
    <div class="card  " style="background-color:#5993cf">
      <div class="card-header">
        <h1  style="color:white ;text-align:center;font-size:70px ; padding-top: 40px"><b>SELECT ACCOUNT !</b> </h1>

      </div>
    </div>
<div class="container" style="width: 500px ; padding-top: 40px; background-color:#5993cf">


  <div style="padding-top: 30px; ">
      <a href="amt.php" style="background-color:#292075 ; border-radius: 25px; font-size:30px"type="button" class="btn btn-primary btn-lg btn-block"><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-bag-check-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
  <path fill-rule="evenodd" d="M5.5 3.5a2.5 2.5 0 0 1 5 0V4h-5v-.5zm6 0V4H15v10a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2V4h3.5v-.5a3.5 3.5 0 1 1 7 0zm-.646 5.354a.5.5 0 0 0-.708-.708L7.5 10.793 6.354 9.646a.5.5 0 1 0-.708.708l1.5 1.5a.5.5 0 0 0 .708 0l3-3z"/>
</svg> SAVING A/C</a></div>

  <div style="padding-top: 30px;padding-bottom:30px"><a href="amt.php"style="background-color:#292075 ; border-radius: 25px; font-size:30px" type="button" class="btn btn-primary btn-lg btn-block"><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-journal-bookmark-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
  <path d="M3 0h10a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2v-1h1v1a1 1 0 0 0 1 1h10a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H3a1 1 0 0 0-1 1v1H1V2a2 2 0 0 1 2-2z"/>
  <path d="M1 5v-.5a.5.5 0 0 1 1 0V5h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1H1zm0 3v-.5a.5.5 0 0 1 1 0V8h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1H1zm0 3v-.5a.5.5 0 0 1 1 0v.5h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1H1z"/>
  <path fill-rule="evenodd" d="M6 1h6v7a.5.5 0 0 1-.757.429L9 7.083 6.757 8.43A.5.5 0 0 1 6 8V1z"/>
</svg> CURRENT A/C</a></div>


</div>

</div>


  </body>
</html>
<?php } ?>