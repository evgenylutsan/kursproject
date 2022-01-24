<?php

$connect = mysqli_connect("std-mysql", "std_1601_kursovaya", "Genja2207!", "std_1601_kursovaya");



$login = filter_var(trim($_POST['login']), FILTER_SANITIZE_STRING);
$pass = filter_var(trim($_POST['pass']), FILTER_SANITIZE_STRING);

$sql = "SELECT * FROM users WHERE Login = '$login' AND Pass = '$pass'";

$result = $connect->query($sql);

$user = $result->fetch_assoc();


if(!$result || mysqli_num_rows($result) == 0){
    echo "Такой пользователь не существует.";
    echo $result;
    exit;
}
// } else if(!$result || mysqli_num_rows($result) == 1){
//     echo "Неверны логин или пароль.";
//     echo $result;
//     exit;
// }


if (!empty($user)) {
    session_start();
    $_SESSION['signin'] = true;
} else {
}

header("Location: account.php?id=" . $id);
exit;
