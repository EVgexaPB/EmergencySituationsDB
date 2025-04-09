<?php
$connect = mysqli_connect("MySQL-8.2", "root", "", "EmergencySituations");

if (!$connect) {
    die("Ошибка подключения к базе данных: " . mysqli_connect_error());
}
