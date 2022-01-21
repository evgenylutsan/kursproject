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
                    <form class="row g-3">
                        <div class="col-md-6">
                        <label for="FirstName" class="form-label">Имя</label>
                            <input type="text" class="form-control" id="FirstName">
                        </div>
                        <div class="col-md-6">
                            <label for="LastName" class="form-label">Фамилия</label>
                            <input type="text" class="form-control" id="LastName">
                        </div>
                        <div class="col-12">
                            <label for="inputEmail4" class="form-label">Email</label>
                            <input type="email" class="form-control" id="inputEmail4">
                        </div>
                        <div class="col-md-6">
                            <label for="inputLogin4" class="form-label">Логин</label>
                            <input type="text" class="form-control" id="inputLogin4">
                        </div>
                        <div class="col-md-6">
                            <label for="inputPassword4" class="form-label">Пароль</label>
                            <input type="password" class="form-control" id="inputPassword4">
                        </div>
                        <div class="col-12">
                            <label for="inputArea" class="form-label">Округ</label>
                            <input type="text" class="form-control" id="inputArea" placeholder="Центральный административный округ">
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