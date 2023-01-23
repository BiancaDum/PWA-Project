<?php
include 'connect.php';
$id=$_GET['updateid'];
$sql="SELECT * from `appointments` WHERE id=$id";
$result=mysqli_query($connection, $sql);
$row=mysqli_fetch_assoc($result);
$date=$row['date'];
$pid=$row['id_patients'];
$did=$row['id_doctors'];

if(isset($_POST['submit'])){
    $date=$_POST['date'];
    $patient=$_POST['id_patient'];
    $doctor=$_POST['id_doctor'];

    $sql = "INSERT INTO `examinations` (`date`, `id_patients`, `id_doctors`) VALUES ('$date', '$patient', '$doctor');";
    $result = mysqli_query($connection, $sql);
    if($result){
        header('location:appointmentsRead.php');
    }else{
        die(mysqli_error($connection));
    }
} 

?>

<!DOCTYPE html>
<html>
    <head>
        <!--Import Google Icon Font-->
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <!--Let browser know website is optimized for mobile-->
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <!-- Compiled and minified CSS -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
        <!-- Compiled and minified JavaScript -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
        
        <meta charset="utf-8">
        <title>Appointments Form</title>
    </head>

    <body style=" background-color:#e0f2f1">
    <h4 style="color:#c2185b; position:relative; left:500px; font-size:300%;">Add Appointment</h4>
        <div class="container">
            <div class="row">
                <form class="col s12" method='post'>
                    <div class="row">
                        <div class="input-field col s4">
                            <input name="date" type="date" class="validate" autocomplete="off" value=<?php echo $date;?>>
                            <label for="date">Date</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col s4">
                            <input name="id_patient" type="number" class="validate" autocomplete="off" value=<?php echo $pid;?>>
                            <label for="id_patient">Patient Id</label>
                        </div>
                        <div class="input-field col s4">
                            <input name="id_doctor" type="number" class="validate" autocomplete="off" value=<?php echo $did;?>>
                            <label for="id_doctor">Doctor Id</label>
                        </div>
                    </div>

                    <button class="btn waves-effect waves-light" type="submit" name="submit">Update
                        <i class="material-icons right">send</i>
                    </button>
        
                </form>
            </div>   
        </div>
    </body>
</html>