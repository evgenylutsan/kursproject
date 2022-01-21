<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Курсовая работа</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css"
        integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">
    <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="static/styles/style.css">

    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js"
        integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/"
        crossorigin="anonymous"></script>
</head>

<body>
    <nav class="navbar navbar-expand-sm navbar-light fixed-top">
        <div class="container">
            <a class="navbar-brand" href="index.php">
                <img class="img" src="static/img/logo.png" alt="">
                Правила застройки
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarID"
                aria-controls="navbarID" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon">
                    <i class="fa fa-bars-filter" aria-hidden="true"></i>
                </span>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="navbarID">
                <div class="navbar-nav">
                    <a class="nav-link active" aria-current="page" href="auth.php">Вход/Регистрация</a>
                    <a class="nav-link active" aria-current="page" href="alltasks.php">Полный список документов</a>
                </div>
            </div>
        </div>
    </nav>
    <footer class="footer">
        <div class="container mb-3">
            <div class="row">
                <div class="col-lg-8 offset-lg-2 text-center ">
                    <p>Курсовая работа</p>
                </div>
            </div>
        </div>
        <div class="copyright text-center py-3 border-top text-muted">
            <p>Московский политех &copy; 2022</p>
        </div>
    </footer>

</body>

</html>