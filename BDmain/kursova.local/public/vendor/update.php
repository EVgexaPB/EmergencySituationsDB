<?php
require_once __DIR__ . '/../config/connect.php';
$Surname = $_POST['Surname'];
$Name = $_POST['Name'];
$Sex = $_POST['Sex'];
$Birth_date = $_POST['Birth_date'];
$Incident_date = $_POST['Incident_date'];
$Incident = $_POST['Incident'];
$Phone = $_POST['Phone'];
$id = $_POST['id'];
mysqli_query($connect, "UPDATE `Victims` SET `Surname` = '$Surname', `Name` = '$Name', `Sex` = '$Sex', `Birth_date` = '$Birth_date', `Incident_date` = '$Incident_date', `Incident` = '$Incident', `Phone` = '$Phone' WHERE `Victims`.`victimID` = '$id' ");
header('location: /');
?>