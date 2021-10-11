<?php
    session_start();
     $connection= mysqli_connect('localhost','root','','vehicle_management');

    $select_query="SELECT * FROM `fuel`";
    $result= mysqli_query($connection,$select_query);

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Fuel Request</title>
    <link href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet">   
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
    <link rel="stylesheet" href="http://cdn.datatables.net/1.10.2/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="sweetalert2/sweetalert2.css">
    <script src="sweetalert2/sweetalert2.min.js"></script>
    <script type="text/javascript" src="http://cdn.datatables.net/1.10.2/js/jquery.dataTables.min.js"></script>
    <script type="text/javascript" src="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="animate.css">
    <link rel="stylesheet" href="style.css">

</head>
<body>
    <?php include 'navbar_admin.php'; ?>
    <br><br>
    <div class="container">
        <div class="row">
             
            <div class="col-md-12">
                <div class="page-header">
                    <h1 style="text-align: center;">Fuel Request</h1>
                 
                </div>
                
                <table id="myTable" class="table table-bordered animated rubberBand">
                    <thead>
                        <th>REQ_ID</th>
                        <th>FROM</th>
                        <th>TO</th>
                        <th>DATE</th>
                        <th>SUBJECT</th>
                        <th>TIME</th>
                        <th>PLATE NUMBER</th>
                        <th>START ODOMETER LOG READING</th>
                        <th>REQUESTED FUEL (L/RWF)</th>
                    </thead>
                    <tbody>
                        <?php while($row=mysqli_fetch_assoc($result)){ ?>
                        <tr>
                            <td><?php echo $row['request_id']; ?></td>
                            <td><?php echo $row['fromm']; ?></td>
                            <td><?php echo $row['too']; ?></td>
                            <td><?php echo $row['date']; ?></td>
                            <td><?php echo $row['time']; ?></td>
                            <td><?php echo $row['subject']; ?></td>
                            <td><?php echo $row['vehplate']; ?></td>
                            <td><?php echo $row['startodo']; ?></td>
                            <td><?php echo $row['reqfuel']; ?></td>
                        </tr>
                        <?php } ?>
                    </tbody>
                </table><br>
                <center><a class="btn btn-success" style="text-align: center" href="https://maps.google.com/">Check google Map to pay Fuel bill</a></center> 
                
            </div>
     
        </div>
    </div>
</body>
<script>
$(document).ready(function(){
    $('#myTable').dataTable();
});
</script>
</html>