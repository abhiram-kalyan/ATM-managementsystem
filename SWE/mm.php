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

<h1 style="color:white ;text-align:center;font-size:70px ; padding-top: 40px"><b>Select Transaction !</b> </h1>
<div class="container footer1" style="width: 500px; padding-top: 40px; float:right; background-color:#5993cf">
  <div style="padding-top: 30px; ">
      <a style="background-color:#292075 ; border-radius: 25px; font-size:30px"type="button" href="act.php" class="btn btn-primary btn-lg btn-block"><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-wallet2" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
  <path fill-rule="evenodd" d="M12.136.326A1.5 1.5 0 0 1 14 1.78V3h.5A1.5 1.5 0 0 1 16 4.5v9a1.5 1.5 0 0 1-1.5 1.5h-13A1.5 1.5 0 0 1 0 13.5v-9a1.5 1.5 0 0 1 1.432-1.499L12.136.326zM5.562 3H13V1.78a.5.5 0 0 0-.621-.484L5.562 3zM1.5 4a.5.5 0 0 0-.5.5v9a.5.5 0 0 0 .5.5h13a.5.5 0 0 0 .5-.5v-9a.5.5 0 0 0-.5-.5h-13z"/>
</svg> BANKING</a></div>



  <div style="padding-top: 30px;">
      <a
      <button style="background-color:#292075 ;  border-radius: 25px; font-size:30px" type="button" href = "bnq.php" class="btn btn-primary btn-lg btn-block"><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-briefcase" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
  <path fill-rule="evenodd" d="M0 12.5A1.5 1.5 0 0 0 1.5 14h13a1.5 1.5 0 0 0 1.5-1.5v-6h-1v6a.5.5 0 0 1-.5.5h-13a.5.5 0 0 1-.5-.5v-6H0v6z"/>
  <path fill-rule="evenodd" d="M0 4.5A1.5 1.5 0 0 1 1.5 3h13A1.5 1.5 0 0 1 16 4.5v2.384l-7.614 2.03a1.5 1.5 0 0 1-.772 0L0 6.884V4.5zM1.5 4a.5.5 0 0 0-.5.5v1.616l6.871 1.832a.5.5 0 0 0 .258 0L15 6.116V4.5a.5.5 0 0 0-.5-.5h-13zM5 2.5A1.5 1.5 0 0 1 6.5 1h3A1.5 1.5 0 0 1 11 2.5V3h-1v-.5a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0-.5.5V3H5v-.5z"/>
</svg> BALANCE INQ</button></a></div>

  <div style="padding-top: 30px;"><a href="tran.php" style="background-color:#292075 ; border-radius: 25px; font-size:30px" type="button" class="btn btn-primary btn-lg btn-block"><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-signpost-2" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
  <path d="M7 1.414V2h2v-.586a1 1 0 0 0-2 0z"/>
  <path fill-rule="evenodd" d="M13.5 3H2v2h11.5l.75-1-.75-1zM2 2a1 1 0 0 0-1 1v2a1 1 0 0 0 1 1h11.5a1 1 0 0 0 .8-.4l.975-1.3a.5.5 0 0 0 0-.6L14.3 2.4a1 1 0 0 0-.8-.4H2zm.5 6H14v2H2.5l-.75-1 .75-1zM14 7a1 1 0 0 1 1 1v2a1 1 0 0 1-1 1H2.5a1 1 0 0 1-.8-.4L.725 9.3a.5.5 0 0 1 0-.6L1.7 7.4a1 1 0 0 1 .8-.4H14z"/>
  <path d="M7 6h2v1H7V6zm0 5h2v5H7v-5z"/>
</svg> TRANSFER</a></div>

  <div style="padding-top: 30px; padding-bottom: 30px;">
      <a
      
      <button style="background-color:#292075 ; border-radius: 25px; font-size:30px" type="button" href = "pingen.php" class="btn btn-primary btn-lg btn-block"><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-chat-square-dots" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
  <path fill-rule="evenodd" d="M14 1H2a1 1 0 0 0-1 1v8a1 1 0 0 0 1 1h2.5a2 2 0 0 1 1.6.8L8 14.333 9.9 11.8a2 2 0 0 1 1.6-.8H14a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1zM2 0a2 2 0 0 0-2 2v8a2 2 0 0 0 2 2h2.5a1 1 0 0 1 .8.4l1.9 2.533a1 1 0 0 0 1.6 0l1.9-2.533a1 1 0 0 1 .8-.4H14a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2z"/>
  <path d="M5 6a1 1 0 1 1-2 0 1 1 0 0 1 2 0zm4 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0zm4 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0z"/>
</svg> PIN GENERATION</button></a></div>
</div>
<div class="container footer" style="width: 500px;  padding-top: 40px; float:left; background-color:#5993cf">

  <div style="padding-top: 30px; ">
      <a
      <button style="background-color:#292075 ; border-radius: 25px; font-size:30px"type="button" href  ="services.php"class="btn btn-primary btn-lg btn-block"><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-bag-check-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
  <path fill-rule="evenodd" d="M5.5 3.5a2.5 2.5 0 0 1 5 0V4h-5v-.5zm6 0V4H15v10a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2V4h3.5v-.5a3.5 3.5 0 1 1 7 0zm-.646 5.354a.5.5 0 0 0-.708-.708L7.5 10.793 6.354 9.646a.5.5 0 1 0-.708.708l1.5 1.5a.5.5 0 0 0 .708 0l3-3z"/>
</svg> SERVICES</button></a></div>

  <div style="padding-top: 30px;">
      <a
      <button style="background-color:#292075 ; border-radius: 25px; font-size:30px" type="button" href = "mini.php" class="btn btn-primary btn-lg btn-block"><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-journal-bookmark-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
  <path d="M3 0h10a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2v-1h1v1a1 1 0 0 0 1 1h10a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H3a1 1 0 0 0-1 1v1H1V2a2 2 0 0 1 2-2z"/>
  <path d="M1 5v-.5a.5.5 0 0 1 1 0V5h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1H1zm0 3v-.5a.5.5 0 0 1 1 0V8h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1H1zm0 3v-.5a.5.5 0 0 1 1 0v.5h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1H1z"/>
  <path fill-rule="evenodd" d="M6 1h6v7a.5.5 0 0 1-.757.429L9 7.083 6.757 8.43A.5.5 0 0 1 6 8V1z"/>
</svg> MINI STATEMENT</button></a></div>

  <div style="padding-top: 30px;"><button style="background-color:#292075 ; border-radius: 25px; font-size:30px" type="button" class="btn btn-primary btn-lg btn-block"><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-pencil-square" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
  <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456l-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
  <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"/>
</svg> REGISTRATION</button></div>

  <div style="padding-top: 30px; padding-bottom: 30px;"><button style="background-color:#292075 ; border-radius: 25px; font-size:30px" type="button" class="btn btn-primary btn-lg btn-block"><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-cash-stack" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
  <path d="M14 3H1a1 1 0 0 1 1-1h12a1 1 0 0 1 1 1h-1z"/>
  <path fill-rule="evenodd" d="M15 5H1v8h14V5zM1 4a1 1 0 0 0-1 1v8a1 1 0 0 0 1 1h14a1 1 0 0 0 1-1V5a1 1 0 0 0-1-1H1z"/>
  <path d="M13 5a2 2 0 0 0 2 2V5h-2zM3 5a2 2 0 0 1-2 2V5h2zm10 8a2 2 0 0 1 2-2v2h-2zM3 13a2 2 0 0 0-2-2v2h2zm7-4a2 2 0 1 1-4 0 2 2 0 0 1 4 0z"/>
</svg> QUICK CASH <span class="badge badge-info">New</span></button></div>
</div>



  
  </body>
</html>


<?php } ?>
