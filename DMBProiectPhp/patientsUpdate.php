<?php
include 'connect.php';
$id=$_GET['updateid'];
$sql="SELECT * from `patients` WHERE id=$id";
$result=mysqli_query($connection, $sql);
$row=mysqli_fetch_assoc($result);
$name=$row['name'];
$species=$row['species'];
$breed=$row['breed'];
$sex=$row['sex'];
$bday=$row['birthday'];
$microchip=$row['microchip'];
$oid=$row['id_owners'];
$did=$row['id_doctors'];

if(isset($_POST['submit'])){
    $name=$_POST['name'];
    $species=$_POST['species'];
    $breed=$_POST['breed'];
    $sex=$_POST['sex'];
    $bday=$_POST['bday'];
    $microchip=$_POST['microchip'];
    $owner=$_POST['id_owner'];
    $doctor=$_POST['id_doctor'];

    /*$oname=oname();
    $try = "SELECT id FROM owners WHERE first_name == $oname;";*/

    $sql="UPDATE `patients` SET id=$id, name='$name', species='$species', breed='$breed', sex='$sex', birthday='$bday', microchip='$microchip',id_owners=$owner, id_doctors=$doctor WHERE id=$id";
    $result = mysqli_query($connection, $sql);
    if($result){
        header('location:patientsRead.php');
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
        <title>Patients Form</title>
    </head>

    <body style=" background-color:#e0f2f1">
    <h4 style="color:#c2185b; position:relative; left:500px; font-size:300%;">Add Patient</h4>
        <div class="container">
            <div class="row">
                <form class="col s12" method='post'>
                    <div class="row">
                        <div class="input-field col s8">
                            <input name="name" type="text" class="validate" autocomplete="off" value=<?php echo $name;?>>
                            <label for="name">Name</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col s4">
                            <input name="species" type="text" class="validate" autocomplete="off" value=<?php echo $species;?>>
                            <label for="species">Species</label>
                        </div>
                        <div class="input-field col s4">
                            <input name="breed" type="text" class="validate" autocomplete="off" value=<?php echo $breed;?>>
                            <label for="bredd">Breed</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col s4">
                            <input name="sex" type="text" class="validate" autocomplete="off" value=<?php echo $sex;?>>
                            <label for="sex">Sex</label>
                        </div>
                        <div class="input-field col s4">
                            <input name="microchip" type="text" class="validate" autocomplete="off" value=<?php echo $microchip;?>>
                            <label for="microchip">Microchip No.</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col s2">
                            <input name="bday" type="date" class="validate" autocomplete="off" value=<?php echo $bday;?>>
                            <label for="bday">Birth Day</label>
                        </div>
                        <div class="input-field col s3">
                            <input name="id_owner" type="number" class="validate" autocomplete="off" value=<?php echo $oid;?>>
                            <label for="id_owner">Owner id</label>
                        </div>
                        <div class="input-field col s3">
                            <input name="id_doctor" type="number" class="validate" autocomplete="off" value=<?php echo $did;?>>
                            <label for="id_doctor">Doctor id</label>
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