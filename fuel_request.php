<?php
    if(!isset($_SESSION)) 
    { 
        session_start(); 
    } 
   

    $connection= mysqli_connect('localhost','root','','vehicle_management');
    $msg= "" ;     


    if(isset($_POST['submit'])){
        $fromm=$_POST['fromm'];
        $too=$_POST['too'];
        $date=$_POST['date'];
        $time=$_POST['time'];
        $subject=$_POST['subject'];
        $vehplate=$_POST['vehplate'];
        $startodo=$_POST['startodo'];
        $reqfuel=$_POST['reqfuel'];
        
    //     //image Upload
    
    //    move_uploaded_file($_FILES['file']['tmp_name'],"picture/".$_FILES['file']['name']); 
        
        $res=false;
        $insert_query="INSERT INTO `fuel`(`request_id`,`fromm`, `too`, `date`, `time`, `subject`, `vehplate`, `startodo`, `reqfuel`) VALUES ('','$fromm','$too','$date','$time','$subject','$vehplate','$startodo','$reqfuel')";
        
        $res= mysqli_query($connection,$insert_query);
            
        if($res==true){
            $msg= "<script language='javascript'>
                                       swal(
                                            'Success!',
                                            'The form has been submitted',
                                            'Success!'
                                            );
				          </script>";
        }
        else{
            die('unsuccessful' .mysqli_error($connection));
        }
        
        
    }

    
        
       
    
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Fuel Request Form</title> 
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>  
    
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
     <link rel="stylesheet" href="sweetalert2/sweetalert2.css">
    <script src="sweetalert2/sweetalert2.min.js"></script>
  
 
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="animate.css">
</head>
<body>  
 <?php include 'navbar.php'; ?>
 <br>
  
  
   <div class="container"> 
     <div class="row">
       
        <div class="page-header">
            <h1 style="text-align: center;">Fuel Request Form</h1>
            <?php echo $msg; ?>
                              
                  
      
      </div> 
       <div class="col-md-3">
         
       </div>
        <div class="col-md-6 animated bounceIn"> 
          
           
            
                <br>
            <form class="form-horizontal" action="" method="post" enctype="multipart/form-data" >
                
                <div class="input-group">
                  <span class="input-group-addon"><b>From</b></span>
                  <input id="fromm" type="text" class="form-control" name="fromm" placeholder="where?">
                </div>
                <br> 
                
                <div class="input-group">
                  <span class="input-group-addon"><b>To</b></span>
                  <input id="too" type="text" class="form-control" name="too" placeholder="where?">
                </div>
                <br> 

               <div class="input-group">
                  <span class="input-group-addon"><b>Date</b></span>
                  <input id="date" type="text" class="form-control" name="date" placeholder="Enter Date">
                </div>
                <script>
                      $( function() {
                        $( "#date" ).datepicker();
                      } );
                </script> 
                <br>

                <div class="input-group">
                  <span class="input-group-addon"><b>Subject</b></span>
                  <input id="subject" type="text" class="form-control" name="subject" placeholder="">
                </div>
                <br> 
                 
                <div class="input-group">
                  <span class="input-group-addon"><b>Time</b></span>
                  <input id="time" type="text" class="form-control" name="time" placeholder="when?">
                </div>

                <script>
                      $( function() {

                        $("#time").wickedpicker();
                        
                      } );  
                    </script> 
                    <br>

                 <div class="input-group">
                  <span class="input-group-addon"><b>Vehicle Plate No</b></span>
                  <input id="vehplate" type="text" class="form-control" name="vehplate" placeholder="Plate Number">
                </div>
                <br>

                <div class="input-group">
                  <span class="input-group-addon"><b>Start Odometer Log Reading</b></span>
                  <input id="startodo" type="text" class="form-control" name="startodo" placeholder="">
                </div>
                <br>

                <div class="input-group">
                  <span class="input-group-addon"><b>Requested Fuel (L/Rwf)</b></span>
                  <input id="reqfuel" type="text" class="form-control" name="reqfuel" placeholder="">
                </div>
                <br>
   
                
                <div class="input-group">
                  <input type="submit" name="submit" class="btn btn-success">
                  
                </div>
              </form>   
        </div>  
        <div class="col-md-3"></div>
         
     </div>
         
   
    </div> 
    
   
    
</body>
</html>