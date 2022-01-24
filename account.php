<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Личный кабинет</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">
    <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="static/styles/style.css">

</head>

<body>
    <section class="profile container-fluid">
        <div class="container">
            <div class="text-center py-5">
                <h2 class="pb-3">Личный кабинет</h2>
            </div>
            <div class="row justify-content-center">
                <div class="card col-md-6 mb-5" style="width: 20rem; ">
                    <img src="static/img/prof.png" class="card-img-top" alt="...">
                    <div class="card-body">
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item"><?php echo $_SESSION["login"] ?></li>
                        <a class="btn btn-primary" href="logout.php" role="button">Выход</a>
                    </ul>
                </div>
            </div>
        </div>
    </section>
</body>

</html>

<?php
require("template.php")
?>