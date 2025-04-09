<?php
 require_once __DIR__ . '/config/connect.php';

 $Victims = mysqli_query($connect, "SELECT * FROM `Victims`");
 $Victims = mysqli_fetch_all($Victims);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Victims</title>
</head>
<body>
    <table>
        <tr>
            <th>id</th>
            <th>Surname</th>
            <th>Name</th>
            <th>Sex</th>
            <th>Birth_date</th>
            <th>Incident_date</th>
            <th>Incident</th>
            <th>Phone</th>
            <th>&#9998;</th>
            <th>&#10006;</th>
        </tr>
        <?php
         foreach($Victims as $vc){
            ?>
             <tr>
             <td><?= $vc[0]?></td>
             <td><?= $vc[1]?></td>
             <td><?= $vc[2]?></td>
             <td><?= $vc[3]?></td>
             <td><?= $vc[4]?></td>
             <td><?= $vc[5]?></td>
             <td><?= $vc[6]?></td>
             <td><?= $vc[7]?></td>
             <td><a href="update.php?id=<?= $vc[0]?>">update</a></td>
             <td><a href="vendor/delete.php?id=<?= $vc[0]?>">delete</a></td>
             </tr>
             <?php
        }
        ?>
        <tr>
            <td></td>
        </tr>
    </table>
    <h2>Add New Victim</h2>
    <form action="vendor/create.php" method="post">
        <p>Surname</p>
        <input type="text" name="Surname">
        <p>Name</p>
        <input type="text" name="Name">
        <p>Sex</p>
        <input type="text" name="Sex">
        <p>Birth_date</p>
        <input type="date" name="Birth_date">
        <p>Incident_date</p>
        <input type="date" name="Incident_date">
        <p>Incident</p>
        <textarea name="Incident"></textarea>
        <p>Phone</p>
        <input type="number" name="Phone">
        <button type="submit">add</button>
    </form>    
</body>
</html>