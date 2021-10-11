<?php
    if(!isset($_SESSION)) 
    { 
        session_start(); 
    } 
   

    $connection= mysqli_connect('localhost','root','','vehicle_management');
    $msg= "" ;     


    if(isset($_POST['submit'])){
        $date=$_POST['date'];
        $dep=$_POST['dep'];
        $plate=$_POST['plate'];
        $deptime=$_POST['deptime'];
        $location=$_POST['location'];
        $fuel=$_POST['fuel'];
        $return=$_POST['return'];
        $returntime=$_POST['returntime'];
        $name=$_POST['name'];
        
    //     //image Upload
    
    //    move_uploaded_file($_FILES['file']['tmp_name'],"picture/".$_FILES['file']['name']); 
        
        $res=false;
        $insert_query="INSERT INTO `logbook`(`logbookid`,`date`, `dep`, `plate`, `deptime`, `location`, `fuel`, `return`, `returntime`, `name`) VALUES ('','$date','$dep','$plate','$deptime','$location','$fuel','$return','$returntime','$name')";
        
        $res= mysqli_query($connection,$insert_query);
            
        if($res==true){
            $msg= "<script language='javascript'>
                                       swal(
                                            'Success!',
                                            'click OK to Sign the Document',
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
    <title>New Logbook</title> 
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
 <?php include 'navbar_admin.php'; ?>
 <br>
  
  
   <div class="container"> 
     <div class="row">
       
        <div class="page-header">
            <h1 style="text-align: center;">New Logbook</h1>
            <?php echo $msg; ?>
                              
                  
      
      </div> 
       <div class="col-md-3">
         
       </div>
        <div class="col-md-6 animated bounceIn"> 
          
           
            
                <br>
            <form class="form-horizontal" action="" method="post" enctype="multipart/form-data" >
                
               <div class="input-group">
                  <span class="input-group-addon"><b>DATE</b></span>
                  <input id="date" type="text" class="form-control" name="date" placeholder="Enter Date">
                </div>
                <script>
                      $( function() {
                        $( "#date" ).datepicker();
                      } );
                </script> 
                <br>

                <div class="input-group">
                  <span class="input-group-addon"><b>INDEX/DEPART</b></span>
                  <input id="dep" type="text" class="form-control" name="dep" placeholder="dep">
                </div>
                <br> 
                
                 <div class="input-group">
                  <span class="input-group-addon"><b>PLATE NUMBER</b></span>
                  <input id="plate" type="text" class="form-control" name="plate" placeholder="Plate Number">
                </div>
                <br>

                 <div class="input-group">
                  <span class="input-group-addon"><b>TIME/DEPARTURE</b></span>
                  <input id="deptime" type="text" class="form-control" name="deptime" placeholder="time">
                </div>
                <br> 
                
                <div class="input-group">
                  <span class="input-group-addon"><b>WHERE</b></span>
                  <input id="location" type="text" class="form-control" name="location" placeholder="location">
                </div>
                <br>
                
                 <div class="input-group">
                  <span class="input-group-addon"><b>FUEL/L</b></span>
                  <input id="fuel" type="text" class="form-control" name="fuel" placeholder="fuel used">
                </div>
                <br>
                
                <div class="input-group">
                  <span class="input-group-addon"><b>INDEX/RETURN</b></span>
                  <input id="return" type="text" class="form-control" name="return" placeholder="returned">
                </div>
                <br>

                <div class="input-group">
                  <span class="input-group-addon"><b>TIME/RETURN</b></span>
                  <input id="returntime" type="text" class="form-control" name="returntime" placeholder="time">
                </div>
                <br>

                <div class="input-group">
                  <span class="input-group-addon"><b>NAME OF STAFF</b></span>
                  <input id="name" type="text" class="form-control" name="name" placeholder="Enter Name">
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