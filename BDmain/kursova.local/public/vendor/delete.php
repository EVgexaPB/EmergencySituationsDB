<?php
 require_once __DIR__ . '/../config/connect.php';
 $victim_id = $_GET['id'];

 mysqli_query($connect, "DELETE FROM Victims WHERE `Victims`.`victimID` = '$victim_id'");
 header('Location: /');