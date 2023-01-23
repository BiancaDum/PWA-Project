<?php
include 'connect.php';
if(isset($_GET['deleteid'])){
    $id=$_GET['deleteid'];


    $sql="DELETE FROM `patients` WHERE id=$id";
    $result=mysqli_query($connection, $sql);
    if($result){
        header('location:patientsRead.php');
    }else{
        die(mysqli_error($connection));
    }

}

?>