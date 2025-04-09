<?php
 require_once __DIR__ . '/config/connect.php';
 $victim_id = $_GET['id'];
 $victim = mysqli_query($connect, "SELECT * FROM `Victims` WHERE `victimID`='$victim_id'");
 $victim = mysqli_fetch_assoc($victim);
 

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Victim info</title>
</head>
<body>
    
 <h2>Update Victim info</h2>
    <form action="vendor/update.php" method="post">
        <input type="hidden" name="id" value="<?= $victim_id ?>">
        <p>Surname</p>
        <input type="text" name="Surname" value="<?= $victim['Surname'] ?>">
        <p>Name</p>
        <input type="text" name="Name" value="<?= $victim['Name'] ?>">
        <p>Sex</p>
        <input type="text" name="Sex" value="<?= $victim['Sex'] ?>">
        <p>Birth_date</p>
        <input type="date" name="Birth_date" value="<?= $victim['Birth_date'] ?>">
        <p>Incident_date</p>
        <input type="date" name="Incident_date" value="<?= $victim['Incident_date'] ?>">
        <p>Incident</p>
        <textarea name="Incident"><?= $victim['Incident'] ?></textarea>
        <p>Phone</p>
        <input type="number" name="Phone" value="<?= $victim['Phone'] ?>">
        <button type="submit">update</button>
    </form>    

</body>
</html>