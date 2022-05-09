<?php
session_start();
 
if(!isset($_SESSION['user_id'])){
    header('Location: index.php');
    exit;
} 

else {
 
$ufd=$_SESSION['user_id'];

     
   require('creddb.php');
 $select="select * from Statement  where userid='$ufd'";
 
  
  
  $query=mysqli_query($conn,$select);
  //$num=mysqli_num_rows($query);
 // echo "registered for structural design $num ";




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

<br><br><br><br>
 <div class="container-fluid">
        <div class="row  mx-auto">
            
            <div class="card col-md-6 mx-auto bg-primary " >
                <div class="card-header mx-auto">
                  <h2 class="display-5" style="color: white;">Mini Statement </h2>
                    
                </div>
                <div class="card   table-responsive" >
                    <table class="table table-bordered">
                        <thead class="thead-dark">
                          <tr>
                            <th scope="col">Date<br></th>
                            <th scope="col">Description </th>
                            <th scope="col">Ref.<br></th>
                            <th scope="col">Credit<br></th>
                            <th scope="col">Debit<br></th>
                            <th scope="col">Balance<br></th>
                           
                          </tr>
                        </thead>
                        <tbody>
                           
                            <?php 
                 $t=1;
                 while($roe=mysqli_fetch_assoc($query)){
                     
                 ?>
                  <tr>
               
                    <td><?php echo $roe['reg_date']; ?></td>
                    <td><?php echo $roe['Description']; ?></td>
                    <td><?php echo $roe['refid']; ?></td>
                    <td><?php echo $roe['credit']; ?></td>
                    <td><?php echo $roe['Debit']; ?></td>
                    <td><?php echo $roe['balance']; ?></td>
                     
                  </tr>
                  
                  <?php $t=$t+1; } ?>


                        </tbody>
                      </table>
                      
                      
                </div>
               
              </div> 
    
             

            </div>
            </div>



  </body>
</html>
<?php } ?>