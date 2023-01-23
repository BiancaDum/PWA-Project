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
        <title>Patients DB</title>
    </head>

    <body style=" background-color:#e0f2f1">
        <h4 style="color:#c2185b; text-align:center;font-size:300%;">Patients DB</h4>
        <div class="container">
            <a class="btn-floating btn-large waves-effect waves-light green" href="patientsForm.php"><i class="material-icons">add</i></a>

            <table>
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Species</th>
                        <th>Breed</th>
                        <th>Sex</th>
                        <th>Birthday</th>
                        <th>Microchip</th>
                        <th>Owner id</th>
                        <th>Doctor id</th>
                        <th>Actions</th>
                    </tr>
                </thead>

                <tbody>
                    <?php
                        $sql = "SELECT *  FROM `patients`;";
                        $result = mysqli_query($connection, $sql);
                        if($result){
                            while($row=mysqli_fetch_assoc($result)){
                                $id=$row['id'];
                                $name=$row['name'];
                                $species=$row['species'];
                                $breed=$row['breed'];
                                $sex=$row['sex'];
                                $bday=$row['birthday'];
                                $microchip=$row['microchip'];
                                $oid=$row['id_owners'];
                                $did=$row['id_doctors'];
                                echo ' <tr>
                                <td>'.$id.'</td>
                                <td>'.$name.'</td>
                                <td>'.$species.'</td>
                                <td>'.$breed.'</td>
                                <td>'.$sex.'</td>
                                <td>'.$bday.'</td>
                                <td>'.$microchip.'</td>
                                <td>'.$oid.'</td>
                                <td>'.$did.'</td>
                                <td>
                                    <a class="btn-floating btn-large waves-effect waves-light red" href="patientsDelete.php?deleteid='.$id.'"><i class="material-icons">delete</i></a>
                                    <a class="btn-floating btn-large waves-effect waves-light blue" href="patientsUpdate.php?updateid='.$id.'"><i class="material-icons">update</i></a> </td>
                                </tr>';
                            }

                    }
                    ?>
                </tbody>
        </table>
                        
        </div>
    </body>
</html>