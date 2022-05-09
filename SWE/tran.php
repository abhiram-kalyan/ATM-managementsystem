<?php
session_start();
 
if(!isset($_SESSION['user_id'])){
    header('Location: index.php');
    exit;
} 

else {
 
$ufd=$_SESSION['user_id'];

require('creddb.php');

if(!empty($_POST['amt'])){
    $amt=$_POST['amt'];
    $tid=$_POST['tid'];
    
    
  $cm1="select * from Users where userid ='$ufd'";
  $cm2="select * from Users where userid ='$tid'";
  $q1=mysqli_query($conn,$cm1);
  $q2=mysqli_query($conn,$cm2);
  $rm1=mysqli_fetch_assoc($q1);
  $rm2=mysqli_fetch_assoc($q2);
  $a11=$rm1['balance'];
  $a22=$rm2['balance'];
  
  if($a11<$amt){
        header('Location:https://atmvit.000webhostapp.com/err.php');
    }
  else{
  $a11=$a11-$amt;
  $a22=$a22+$amt;
  $sql="UPDATE `Users` SET `balance` = '$a11' WHERE userid = '$ufd' ";
  $sqlr="UPDATE `Users` SET `balance` = '$a22' WHERE userid= '$tid' ";
  mysqli_query($conn,$sqlr);
  mysqli_query($conn,$sql);
  
  
  $refid=rand(10,100000);
    $with1='SENT TO'.$tid;
    $with2='Received from '.$ufd;
    
    
    
   $rql="INSERT INTO Statement (Description,userid,refid,credit,Debit,balance)
VALUES ('$with1','$ufd', '$refid',0,'$amt','$a11')";
mysqli_query($conn,$rql);
 $refid=rand(10,100000);
$rql1="INSERT INTO Statement (Description,userid,refid,credit,Debit,balance)
VALUES ('$with2','$tid', '$refid','$amt',0,'$a22')";
mysqli_query($conn,$rql1);

 header('Location:https://atmvit.000webhostapp.com/ty.php');

}
  
  
  
  
}




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
  <div class="alert alert-danger" style="text-align:center" role="alert">
    <b>Legal action:</b> In case the If you accidentally transferred into his/her account . Bank will be no longer responsible for such cases!
  </div>
  
  
    <div class="card  " style="background-color:#5993cf">
      <div class="card-header">
        <h1  style="color:white ;text-align:center;font-size:70px ; padding-top: 40px"><b>Transfer Funds!</b> </h1>

      </div>
    </div>
    
    
    <form action="" method="post">
<div class="container" style="width: 500px ; padding-top: 40px; background-color:#5993cf">


  <div class="form-group">
      <input name="amt" required>
      
      <label for="exampleFormControlTextarea1"><b>Enter Amount Here !</b></label>
    </div>

    <div class="form-group">

        <input name="tid" required>
        <label for="exampleFormControlTextarea1"><b>Enter payee's Account No Here !</b></label>

      </div>

  <div style="padding-top: 30px;padding-bottom:30px"><button style="background-color:#292075 ; border-radius: 25px; font-size:30px" type="submit" class="btn btn-primary btn-lg btn-block">
 Transfer <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-box-arrow-right" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
  <path fill-rule="evenodd" d="M10 12.5a.5.5 0 0 1-.5.5h-8a.5.5 0 0 1-.5-.5v-9a.5.5 0 0 1 .5-.5h8a.5.5 0 0 1 .5.5v2a.5.5 0 0 0 1 0v-2A1.5 1.5 0 0 0 9.5 2h-8A1.5 1.5 0 0 0 0 3.5v9A1.5 1.5 0 0 0 1.5 14h8a1.5 1.5 0 0 0 1.5-1.5v-2a.5.5 0 0 0-1 0v2z"/>
  <path fill-rule="evenodd" d="M15.854 8.354a.5.5 0 0 0 0-.708l-3-3a.5.5 0 0 0-.708.708L14.293 7.5H5.5a.5.5 0 0 0 0 1h8.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3z"/>
</svg></button></div>


</div>


</form>




  </body>
</html>
<?php } ?>