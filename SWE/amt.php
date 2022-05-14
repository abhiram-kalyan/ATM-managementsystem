<?php
session_start();
 
if(!isset($_SESSION['user_id'])){
    header('Location: index.php');
    exit;
} else {
 
 $udf=$_SESSION['user_id'];


require('creddb.php');
if(!empty($_POST['am'])){
    
    $am=$_POST['am'];
    $refid=rand(10,100000);
    $with='ATM WITHDRAWL';
    
    
    $cm1="select * from Users where userid='$udf'";
     $q1=mysqli_query($conn,$cm1);
     $rm1=mysqli_fetch_assoc($q1);
    $bal=$rm1['balance'];
    if($bal<$am){
        header('Location: http://localhost/SWE/err.php');
    }
    else{
    $bal=$bal-$am;
   $rql="INSERT INTO Statement (Description,userid,refid,credit,Debit,balance)
VALUES ('$with','$udf', '$refid', 0,'$am','$bal')";
mysqli_query($conn,$rql);
    $sql = "UPDATE Users SET balance='$bal' where userid='$udf'";
    
   $res= mysqli_query($conn,$sql);
   if($res){
      header('Location: http://localhost/SWE/ty.php');
   }
   
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
    <div class="card  " style="background-color:#5993cf">
      <div class="card-header">
        <h1  style="color:white ;text-align:center;font-size:70px ; padding-top: 40px"><b>ENTER AMOUNT !</b> </h1>

      </div>
    </div>
    
    
    
    <form action="" method="POST">
<div class="container" style="width: 500px ; padding-top: 40px; background-color:#5993cf">

  <div class="form-group">

    <input type="text" name="am">
     <label for="exampleFormControlTextarea1">NOTE : Enter Amount In Multiple of 100!</label>

   </div>


  <div style="padding-top: 30px;padding-bottom:30px">
      <button style="background-color:#292075 ; border-radius: 25px; font-size:30px" type="submit" class="btn btn-primary btn-lg btn-block">
    CONTINUE <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-arrow-right-square" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
      <path fill-rule="evenodd" d="M14 1H2a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1zM2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2z"/>
      <path fill-rule="evenodd" d="M4 8a.5.5 0 0 0 .5.5h5.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3a.5.5 0 0 0 0-.708l-3-3a.5.5 0 1 0-.708.708L10.293 7.5H4.5A.5.5 0 0 0 4 8z"/>
    </svg></button></div>


</div>

</form>


  </body>
</html>


<?php } ?>
