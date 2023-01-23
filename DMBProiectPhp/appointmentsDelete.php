<?php
include 'connect.php';
if(isset($_GET['deleteid'])){
    $id=$_GET['deleteid'];


    $sql="DELETE FROM `appointments` WHERE id=$id";
    $result=mysqli_query($connection, $sql);
    if($result){
        header('location:appointmentsRead.php');
    }else{
        die(mysqli_error($connection));
    }

}

?>