<!DOCTYPE html>
<html lang="ru">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<link rel="stylesheet" href="style.css">
<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
<link href="https://rawgit.com/kartik-v/bootstrap-star-rating/v3.5.4/css/star-rating.css" />
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://code.jquery.com/ui/1.13.0/jquery-ui.js"></script>
<script src="https://rawgit.com/kartik-v/bootstrap-star-rating/v3.5.4/js/star-rating.js"></script>
<script src="jqUI.js"></script>
<script src="app.js"></script>
<head>
    <title>Опрос</title>
</head>
<?php
$quest_3 = $_POST['quest_3'];
$quest_1 = $_POST['quest_1'];
$surname = $_POST['surname'];
$name = $_POST['name'];
$patronymic = $_POST['patronymic'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$data_start = $_POST['data_start'];
$data_end = $_POST['data_end'];
$price_start= $_POST['price_start'];
$price_end = $_POST['price_end'];
$quest_6 = $_POST['quest_6'];
$hobbi = $_POST['hobbi'];
$star = $_POST['star'];
$file = "$surname.txt";
$current = "
Имя: $name\n Фамилия: $surname\n Отчество: $patronymic\n 
Email: $email\n Номер телефона: $phone\n Тип работы: $quest_1[0]\n
Выходные: $quest_3[0] и $quest_3[1]\n Период отпуска:от $price_start до $price_end \n Зарплат: от $price_start до $price_end рублей \n
Знак зодиака: $quest_6\n Хобби: $hobbi\n Оценка задания:$star\n";
file_put_contents($file, $current);
?>
<body class="text-center">
<div class="cover-container d-flex h-100 p-3 mx-auto flex-column">
    <header class="masthead mb-auto">
    </header>
    <div class="row">
        <div class="col"></div>
        <div class="col-6 border border-success mt-3 pt-3 pb-3">
         <div>
             <h1 class="mb-5"><b>Ваши Результаты</b></h1>
             <p><b>Имя: <?=$_POST['name']?></b></p>
             <p><b>Фамилия: <?=$surname?></b></p>
             <p><b>Отчество: <?=$_POST['patronymic']?></b></p>
             <p><b>Email: <?=$_POST['email']?></b></p>
             <p><b>Номер телефона: <?=$_POST['phone']?></b></p>
             <p><b>Тип работы: <?=$quest_1[0]?></b></p>
             <p><b>Выходные: <?=$quest_3[0]?> и</b><b> <?=$quest_3[1]?></b></p>
             <p><b>Период отпуска: от <?=$_POST['data_start']?> до <?=$_POST['data_end']?></b></p>
             <p><b>Зарплат: от <?=$_POST['price_start']?> до <?=$_POST['price_end']?> рублей</b></p>
             <p><b>Знак зодиака: <?=$_POST['quest_6']?></b></p>
             <p><b>Хобби: <?=$_POST['hobbi']?></b></p>
             <p><b>Оценка задания: <?=$_POST['star']?></b></p>
         </div>
            <div class="mt-3">
                <button class="btn btn-primary"><a class="hr" href="<?=__DIR__?>\<?=$surname?>.txt" download>Скачать файл результата</a></button>
            </div>
        </div>
        <div class="col">
        </div>
    </div>
    <footer class="mastfoot mt-auto">
        <div class="inner">
        </div>
    </footer>
</div>
</body>
</html>