<?php
include 'connect.php';
$id=$_GET['updateid'];
$sql="SELECT * from `owners` WHERE id=$id";
$result=mysqli_query($connection, $sql);
$row=mysqli_fetch_assoc($result);
$fname=$row['first_name'];
$sname=$row['second_name'];
$ssn=$row['SSN'];
$phone=$row['phone'];
$email=$row['email'];
$address=$row['address'];

if(isset($_POST['submit'])){
    $fname=$_POST['first_name'];
    $sname=$_POST['second_name'];
    $ssn=$_POST['ssn'];
    $phone=$_POST['phone'];
    $address=$_POST['address'];
    $email=$_POST['email'];

    /*$oname=oname();
    $try = "SELECT id FROM owners WHERE first_name == $oname;";*/

    $sql="UPDATE `owners` SET id=$id, first_name='$fname', second_name='$sname', ssn='$ssn', address='$address', phone='$phone', email='$email' WHERE id=$id";
    $result = mysqli_query($connection, $sql);
    if($result){
        header('location:ownersRead.php');
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
        <title>Owners Form</title>
    </head>

    <body style=" background-color:#e0f2f1">
    <h4 style="color:#c2185b; position:relative; left:500px; font-size:300%;">Add Owner</h4>
        <div class="container">
            <div class="row">
                <form class="col s12" method='post'>
                    <div class="row">
                        <div class="input-field col s4">
                            <input name="first_name" type="text" class="validate" autocomplete="off" value=<?php echo $fname;?>>
                            <label for="first_name">First Name</label>
                        </div>
                        <div class="input-field col s4">
                            <input name="second_name" type="text" class="validate" autocomplete="off" value=<?php echo $sname;?>>
                            <label for="second_name">Second Name</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col s4">
                            <input name="ssn" type="text" class="validate" autocomplete="off" value=<?php echo $ssn;?>>
                            <label for="ssn">SSN</label>
                        </div>
                        <div class="input-field col s4">
                            <input name="phone" type="text" class="validate" autocomplete="off" value=<?php echo $phone;?>>
                            <label for="phone">Phone no.</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col s8">
                            <input name="address" type="text" class="validate" autocomplete="off" value=<?php echo $address;?>>
                            <label for="address">Address</label>
                        </div>  
                    </div>
                    <div class="row">
                        <div class="input-field col s8">
                            <input name="email" type="email" class="validate" autocomplete="off" value=<?php echo $email;?>>
                            <label for="email">Email</label>
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