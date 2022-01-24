<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Регистрация</title>
</head>

<body>
    <section class="registr container-fluid">
        <div class="container">
            <div class="text-center py-5">
                <h2 class="pb-3">Регистрация</h2>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-6 mb-5">
                    <form class="row g-3" method="post" action="registration.php">
                        <div class="col-md-6">
                        <label for="firstname" class="form-label">Имя</label>
                            <input type="text" class="form-control" id="FirstName" name="FirstName">
                        </div>
                        <div class="col-md-6">
                            <label for="lastname" class="form-label">Фамилия</label>
                            <input type="text" class="form-control" id="LastName" name="LastName">
                        </div>
                        <div class="col-md-6">
                            <label for="login" class="form-label">Логин</label>
                            <input type="text" class="form-control" id="inputLogin4" name="inputLogin4">
                        </div>
                        <div class="col-md-6">
                            <label for="password" class="form-label">Пароль</label>
                            <input type="password" class="form-control" id="inputPassword4" name="inputPassword4">
                        </div>
                        <div class="col-12">
                            <label for="area" class="form-label">Округ</label>
                            <input type="text" class="form-control" id="inputArea" placeholder="Центральный административный округ" name="inputArea">
                        </div>
                        <div class="col-12">
                            <button type="submit" class="btn btn-primary">Зарегистрироваться</button>
                        </div>
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