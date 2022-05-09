<?php
session_start();
 
if(!isset($_SESSION['user_id'])){
    header('Location: index.php');
    exit;
} 

else {
 
$ufd=$_SESSION['user_id'];

require('creddb.php');
$msg="hii";
if (isset($_POST['pswd']) && isset($_POST['cpswd'])){
   
    
   
    $password = mysqli_real_escape_string($conn, $_POST['pswd']);
    $cpassword = mysqli_real_escape_string($conn, $_POST['cpswd']);
    
   
    
    if($password != $cpassword){
         $msg = "PIN doesn't match";
    }
    
    else{
       $sql = "UPDATE Users SET pin='$cpassword' where userid='$ufd'";
    
          $res= mysqli_query($conn,$sql);
         
      
          if($res){
             $msg = "PIN Generated Successful !";
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
  <body style="background-color: #5993cf">
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

<h1 style="color:white ;text-align:center;font-size:70px ; padding-top: 40px"><b>New Pin Generator</b> </h1>

 <?php 
   if (isset($_POST['cpswd']))
   {
       ?>
        <div class="container-fluid">
      <div class="row pad">
        <div class=" col-md-6 col-sm-4 col-xs-4 text-center mx-auto alert alert-success" role="alert">
          <?php echo $msg; ?> 
        </div>
      </div>
    </div>
    
    <?php
   }
  ?>
<div class="container-fluid ">
    <div class="row pad">
      
        <div class=" col-md-6 col-sm-4 col-xs-4  mx-auto pad">
            
            <form action=" " method="POST" class="needs-validation" novalidate>
               
                  <div class="form-row">
                    <div class="col-md-6 mb-3">
                      <label for="validationCustom014">Password</label>
                      <input type="password" class="form-control" name="pswd" id="validationCustom014"  required>
                      <div class="valid-feedback">
                        Looks good!
                      </div>
                    </div>
                  </div>
                  <div class="form-row">
                    <div class="col-md-6 mb-3">
                      <label for="validationCustom015">Confirm Password</label>
                      <input type="password" class="form-control" name="cpswd" id="validationCustom015"  required>
                      <div class="valid-feedback">
                        Looks good!
                      </div>
                    </div>
                  </div>
               
                   
               
                <button class="btn btn-primary" type="submit">Submit</button>
              </form>
        </div>
    </div>
</div>
   

















  </body>
</html>
<?php } ?>