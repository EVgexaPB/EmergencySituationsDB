<?php
 require_once __DIR__ . '/../config/connect.php';
 $Surname = $_POST['Surname'];
 $Name = $_POST['Name'];
 $Sex = $_POST['Sex'];
 $Birth_date = $_POST['Birth_date'];
 $Incident_date = $_POST['Incident_date'];
 $Incident = $_POST['Incident'];
 $Phone = $_POST['Phone'];

 mysqli_query($connect, "INSERT INTO `Victims` (`victimID`, `Surname`, `Name`, `Sex`, `Birth_date`, `Incident_date`, `Incident`, `Phone`) VALUES (NULL, '$Surname', '$Name', '$Sex', '$Birth_date', '$Incident_date', '$Incident', '$Phone')");

 header('Location: /');