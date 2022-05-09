<?php
session_start();
            require('creddb.php');
             if(isset($_POST['userid']) && !empty($_POST['userid']) AND isset($_POST['pin']) && !empty($_POST['pin'])){
                $UserID = mysqli_real_escape_string($conn,$_POST['userid']);
                $PIN = mysqli_real_escape_string($conn,$_POST['pin']);
 $search = mysqli_query($conn,"SELECT userid, pin   FROM Users WHERE userid='$UserID' AND pin='$PIN'") or die(mysqli_error());
                $counter = mysqli_num_rows($search);
                
                
                if($counter>0){
                     $_SESSION['user_id']=$_POST['userid'];
                   header("Location: http://localhost/SWE/mm.php");
        }
        else{
                    $emsg = 'Invalid Credentials';
                }
            }
?>
       <!doctype html>
<html lang="en">
  <head>
    <style>
        .bg-image {
          /* The image used */
          background-image: url("https://thumbs.dreamstime.com/b/blur-bank-officer-working-computer-business-finance-use-as-background-92860382.jpg");

          /* Add the blur effect */


          /* Full height */
          height: 100%;

          /* Center and scale the image nicely */
          background-position: center;
          background-repeat: no-repeat;
          background-size: cover;
        }

        .footer {
  position: fixed;
  left: 0;
  bottom: 0;
  width: 100%;
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
  
  <body class="bg-image">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

<div class="bg-image"></div>


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
<div class="container">
  <div class="alert alert-primary" role="alert" style="text-align:center ">
<a href="#" class="alert-link" style=" color:red">The bank never asks for this informationSBI periodically shares this information that it never asks its customers for sensitive information like user ID, PIN, password, CVV, OTP, VPA (UPI). </a>.
</div>

</div>
<?php
if(!empty($emsg)){
    

?>
<div class = "container-fluid">
    <div class  = "row " >
        <div class = "col-md-6 mx-auto">
            <div class="alert alert-danger" role="alert">
  <?php
  echo $emsg;
  ?>
</div>
        </div>
    </div>
    
</div>
<?php
}
?>


<div class="container" style="padding-left: 300px; padding-right:300px; padding-top: 40px; ">
  <form style="background-color:#87d3ff" action = "" method = "POST" >
 <div class="card" style="background-color:#292075">
  <h5 class="card-header" style="color:white; text-align: center;">For Better Banking, Think SBI</h5>
 </div>
    <div class="form-group" style="padding-left:10px ; padding-right:10px;">
      <label for="exampleInputEmail1">USER ID:</label>
      <input type="text" class="form-control" id="exampleInputEmail1"  name = "userid" aria-describedby="emailHelp">

    </div>
    <div class="form-group" style="padding-left:10px ; padding-right:10px;">
      <label for="exampleInputPassword1">PIN:</label>
      <input type="password" class="form-control" id="exampleInputPassword1" name = "pin">
      <small id="emailHelp" class="form-text text-muted">Make sure that you never share you PIN to anyone else !</small>
    </div>

    <button style="background-color:#292075 ; color:white " type="submit" class="btn  btn-lg btn-block">Continue</button>
  </form>
</div>

</div>

<div class="footer">
  <div class="alert alert-primary" role="alert" style="text-align:center">
<a href="#" class="alert-link" style="color:blue">SBI Life Insurance  |  SBI Mutual Fund  |  NRI Services  |  Customer Complaint Form  |  OnlineSBI Global  |  SBI Card  </a>.
<div><a href="#" class="alert-link" style="color:blue">Foreign Travel/EZ-Pay/Gift Cards</a></div>
</div>
</div>


  </body>
</html>



 
 

 
 
  





