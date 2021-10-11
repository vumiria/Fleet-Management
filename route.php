<?php 
 session_start();
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>fleet management system</title>
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> 
    <script src="https://code.jquery.com/jquery-2.2.0.min.js" type="text/javascript"></script>
    <link rel="stylesheet" type="text/css" href="./slick/slick.css">
    <link rel="stylesheet" type="text/css" href="./slick/slick-theme.css"> 
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">

 
</head> 
<style>
    /* Center the loader 
#loader {
  position: absolute;
  left: 50%;
  top: 50%;
  z-index: 1;
  width: 150px;
  height: 150px;
  margin: -75px 0 0 -75px;
  border: 16px solid #f3f3f3;
  border-radius: 50%;
  border-top: 16px solid #3498db;
  width: 120px;
  height: 120px;
  -webkit-animation: spin 2s linear infinite;
  animation: spin 2s linear infinite;
}

@-webkit-keyframes spin {
  0% { -webkit-transform: rotate(0deg); }
  100% { -webkit-transform: rotate(360deg); }
}

@keyframes spin {
  0% { transform: rotate(0deg); }
  100% { transform: rotate(360deg); }
}   */ 
</style>


<body onload="myFunction()">
    <div id="loader"></div>
    
    <div id="myDiv">
      <?php include 'navbar.php';?>
      <br>
       <div class="page-header foo">
            <h1 style="text-align: center;">Bus Route</h1>      
      </div> 
       <div class="col-md-3"></div>
       <div class="col-md-6">
           <iframe src="Capture.jpg" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
       </div> 
       <div class="col-md-3"></div> 
        
    </div> 
    
<script>
var myVar;

    //for fakeloader
function myFunction() {
    //myVar = setTimeout(showPage, 1500);
}

function showPage() {
  //document.getElementById("loader").style.display = "none";
  //document.getElementById("myDiv").style.display = "block";
}
</script>

<script src="https://unpkg.com/scrollreveal/dist/scrollreveal.min.js"></script>
  
  
  <script>
        window.sr = ScrollReveal();
        sr.reveal('.foo', { duration: 800 });
        sr.reveal('.foo1', { duration: 800,origin: 'top'});
    </script>

</body>
</html>
