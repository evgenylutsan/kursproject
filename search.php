<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Полный список</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">
    <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="static/styles/style.css">
</head>

<body>
    <section class="search container-fluid">
        <div class="container text-center py-50">
            <h2 class="pb-3">Полный список документов</h2>
        </div>
        <div class="row">
            <form class="d-flex" method="post" action="search.php">
                <input class="form-control me-2" type="search" placeholder="Введите округ" aria-label="Search" name="query">
                <button class="btn btn-outline-primary" type="submit">Поиск</button>
            </form>
        </div>
    </section>
    <section class="search container-fluid">
        <div class="row">
            <table class="table">
                <tr>
                    <th>Номер документа</th>
                    <th>Дата создания</th>
                    <th>Ссылка</th>
                    <th>Округ</th>
                </tr>
                <?php
                $connect = mysqli_connect("std-mysql", "std_1601_kursovaya", "Genja2207!", "std_1601_kursovaya");

                $query = $_POST['query'];
                $query = trim($query);
                $query = strip_tags($query);
                $sql = "SELECT DocNumber, DocDate, Link, AdmArea FROM data1 WHERE AdmArea LIKE '%$query%'";
                $result = $connect->query($sql);
                for ($data = []; $row = mysqli_fetch_assoc($result); $data[] = $row);
                $result = '';
                foreach ($data as $elem) {
                    $result .= '<tr>';

                    $result .= '<td>' . $elem['DocNumber'] . '</td>';
                    $result .= '<td>' . $elem['DocDate'] . '</td>';
                    $result .= '<td>' . $elem['Link'] . '</td>';
                    $result .= '<td>' . $elem['AdmArea'] . '</td>';

                    $result .= '</tr>';
                }
                echo $result;
                ?>
            </table>
        </div>
    </section>
</body>

</html>

<?php
require("template.php")
?>