<?php
include 'connect.php';
if(isset($_GET['deleteid'])){
    $id=$_GET['deleteid'];


    $sql="DELETE FROM `examinations` WHERE id=$id";
    $result=mysqli_query($connection, $sql);
    if($result){
        header('location:examinationsRead.php');
    }else{
        die(mysqli_error($connection));
    }

}

?>