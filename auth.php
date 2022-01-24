<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Вход/Регистрация</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">
    <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="static/css/style.css">

</head>

<body>
    <section class="auth container-fluid">
        <div class="container">
            <div class="text-center py-5">
                <h2 class="pb-3">Авторизация</h2>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-6 mb-5">
                    <form method="post" action="signin.php">
                        <div class="mb-3" >
                            <label for="login" class="form-label">Логин</label>
                            <input type="text" class="form-control" id="login" name="login">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Пароль</label>
                            <input type="password" class="form-control" id="pass" name="pass">
                        </div>
                        <button type="submit" class="btn btn-primary">Войти</button>
                        <a class="btn btn-primary" href="registr.php" role="button">Зарегистрироваться</a>
                    </form>
                </div>
            </div>
        </div>
    </section>
</body>

</html>

<?php
require("template.php")
?>