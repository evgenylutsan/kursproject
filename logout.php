<?php

$connect = mysqli_connect("std-mysql", "std_1601_kursovaya", "Genja2207!", "std_1601_kursovaya");

session_start();

$_SESSION["signin"] = null;

header("Location: auth.php?id=".$id);

?>