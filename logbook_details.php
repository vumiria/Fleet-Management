<?php
    session_start();
     $connection= mysqli_connect('localhost','root','','vehicle_management');

    $select_query="SELECT * FROM `logbook`";
    $result= mysqli_query($connection,$select_query);
        

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Logbook Details</title>
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
                    <h1 style="text-align: center;">Logbook Details</h1>
                 
                </div>
                
                <table id="myTable" class="table table-bordered animated rubberBand">
                    <thead>
                        <th>LOGBOOK ID</th>
                        <th>DATE</th>
                        <th>INDEX/DEPART</th>
                        <th>PLATE NUMBER</th>
                        <th>TIME/DEPARTURE</th>
                        <th>WHERE</th>
                        <th>FUEL/L</th>
                        <th>INDEX/RETURN</th>
                        <th>TIME/RETURN</th>
                        <th>NAME OF STAFF</th>
                    </thead>
                    <tbody>
                        <?php while($row=mysqli_fetch_assoc($result)){ ?>
                        <tr>
                            <td><?php echo $row['logbookid']; ?></td>
                            <td><?php echo $row['date']; ?></td>
                            <td><?php echo $row['dep']; ?></td>
                            <td><?php echo $row['plate']; ?></td>
                            <td><?php echo $row['deptime']; ?></td>
                            <td><?php echo $row['location']; ?></td>
                            <td><?php echo $row['fuel']; ?></td>
                            <td><?php echo $row['return']; ?></td>
                            <td><?php echo $row['returntime']; ?></td>
                            <td><?php echo $row['name']; ?></td>
                        </tr>
                        <?php } ?>
                    </tbody>
                </table>
                
                
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