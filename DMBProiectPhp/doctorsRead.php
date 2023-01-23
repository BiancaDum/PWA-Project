<?php
    include 'connect.php';
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
        <title>Doctors DB</title>
    </head>

    <body style=" background-color:#e0f2f1">
    <h4 style="color:#c2185b; text-align:center;font-size:300%;">Doctors DB</h4>
        <div class="container">
            <a class="btn-floating btn-large waves-effect waves-light green" href="doctorsForm.php"><i class="material-icons">add</i></a>

            <table>
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>First Name</th>
                        <th>Second Name</th>
                        <th>Code</th>
                        <th>Phone no.</th>
                        <th>Email</th>
                        <th>Actions</th>
                    </tr>
                </thead>

                <tbody>
                    <?php
                        $sql = "SELECT *  FROM `doctors`;";
                        $result = mysqli_query($connection, $sql);
                        if($result){
                            while($row=mysqli_fetch_assoc($result)){
                                $id=$row['id'];
                                $fname=$row['first_name'];
                                $sname=$row['second_name'];
                                $code=$row['code'];
                                $phone=$row['phone'];
                                $email=$row['email'];
                                echo ' <tr>
                                <td>'.$id.'</td>
                                <td>'.$fname.'</td>
                                <td>'.$sname.'</td>
                                <td>'.$code.'</td>
                                <td>'.$phone.'</td>
                                <td>'.$email.'</td>
                                <td>
                                    <a class="btn-floating btn-large waves-effect waves-light red" href="doctorsDelete.php?deleteid='.$id.'"><i class="material-icons">delete</i></a>
                                    <a class="btn-floating btn-large waves-effect waves-light blue" href="doctorsUpdate.php?updateid='.$id.'"><i class="material-icons">update</i></a> </td>
                                </tr>';
                            }

                    }
                    ?>
                </tbody>
        </table>
                        
        </div>
    </body>
</html>