<?php
$connect = mysqli_connect("std-mysql", "std_1601_kursovaya", "Genja2207!", "std_1601_kursovaya");


if(!empty($_POST)){
    mysqli_query($connect, "INSERT INTO users (FirstName,LastName,Login,Pass) VALUES (
        \"".mysqli_escape_string($connect, $_POST["FirstName"])."\",
        \"".mysqli_escape_string($connect, $_POST["LastName"])."\",
        \"".mysqli_escape_string($connect, $_POST["inputLogin4"])."\", 
        \"".mysqli_escape_string($connect, $_POST["inputPassword4"])."\"
        )"
    );
    $id = mysqli_insert_id($connect);

    header("Location: auth.php?id=".$id);
    exit;
}

?>