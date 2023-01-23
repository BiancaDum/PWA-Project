<?php
include 'connect.php';
if(isset($_GET['deleteid'])){
    $id=$_GET['deleteid'];


    $sql="DELETE FROM `doctors` WHERE id=$id";
    $result=mysqli_query($connection, $sql);
    if($result){
        header('location:doctorsRead.php');
    }else{
        die(mysqli_error($connection));
    }

}

?>