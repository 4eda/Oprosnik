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

<body class="text-center">
    <div class="cover-container d-flex h-100 p-3 mx-auto flex-column">
      <header class="masthead mb-auto">
      </header>
      <div class="row">
            <div class="col"></div>
                <div class="col-6 border border-success mt-3 pt-3 pb-3">
                    <form action="send.php" method="POST">
                    <main id="quest" role="main" class="inner cover">
                        <div id="quest-0" style="display: block">
                            <?php 
                                include('vopros-0.php');
                             ?>
                        </div>
                        <div id="quest-1" style="display: none">
                            <?php 
                                include('vopros-1.php');
                            ?>
                        </div>

                        <div id="quest-2" class="quest_2" style="display: none">
                            <?php 
                                include('vopros-3.php');
                            ?>
                        </div>
                        <div id="quest-3" class="quest_3" style="display: none">
                            <?php 
                                include('vopros-4.php');
                            ?>
                        </div>
                        <div id="quest-4" class="quest_4" style="display: none">
                            <?php
                            include('vopros-5.php');
                            ?>
                        </div>
                        <div id="quest-5" class="quest_5" style="display: none">
                            <?php
                            include('vopros-6.php');
                            ?>
                        </div>
                        <div id="quest-6" class="quest_6" style="display: none">
                            <?php
                            include('vopros-7.php');
                            ?>
                        </div>
                        <div id="quest-7" class="quest_7" style="display: none">
                            <?php
                            include('vopros-8.php');
                            ?>
                        </div>
                    </main>
                        <input style="display: none" type="submit" id="end_quest"  value="Завершить опрос" class="btn btn-primary mb-3">
                    </form>
                    <button id="prev" style="display: none" class="btn btn-danger">Назад</button>
                    <button id="next"  class="btn btn-success">Продолжить</button>
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
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
        <script>
            $(document).ready(function () {
                let main_array = [];
                var value_sur = '';
                var value_name = '';
                var value_pat = '';
                var value_em = '';
                var value_pho = '';
                var value_type = '';
                $("#surname").keyup(function () {
                    value_sur = $(this).val();
                }).keyup();
                $("#name").keyup(function () {
                    value_name = $(this).val();
                }).keyup();
                $("#patronymic").keyup(function () {
                    value_pat = $(this).val();
                }).keyup();
                $("#email").keyup(function () {
                    value_em = $(this).val();
                }).keyup();
                $("#phone").keyup(function () {
                    value_pho = $(this).val();
                }).keyup();
                let counter = 0;
                $('#next').on('click', function () {
                    counter++;
                    if (counter === 1) {
                        main_array.push(value_sur);
                        main_array.push(value_name);
                        main_array.push(value_pat);
                        main_array.push(value_em);
                        main_array.push(value_pho);
                        $('#quest-0').hide();
                        $('#quest-1').show();
                        $('#prev').show();
                    }
                    else if (counter === 2){
                        main_array.push(value_type);
                        $('#quest-1').hide();
                        $('#quest-2').show();
                    }
                    else if (counter === 3){
                        $('#quest-2').hide();
                        $('#quest-3').show();
                    }
                    else if (counter === 4){
                        $('#quest-3').hide();
                        $('#quest-4').show();
                    }
                    else if (counter === 5){
                        $('#quest-4').hide();
                        $('#quest-5').show();
                    }
                    else if (counter === 6){
                        $('#quest-5').hide();
                        $('#quest-6').show();
                    }
                    else if (counter === 7){
                        $('#quest-6').hide();
                        $('#quest-7').show();
                        $('#next').hide();
                        $('#end_quest').show();
                    }
                });
                $ ("#prev").on('click', function (){
                    counter--;
                    if (counter === 0){
                        $('#quest-0').show();
                        $('#quest-1').hide();
                        $('#prev').hide();
                    }
                    else if (counter === 1) {
                        $('#quest-1').show();
                        $('#quest-2').hide();
                    }
                    else if (counter === 2) {
                        $('#quest-2').show();
                        $('#quest-3').hide();
                    }
                    else if (counter === 3) {
                        $('#quest-3').show();
                        $('#quest-4').hide();
                    }
                    else if (counter === 4) {
                        $('#quest-4').show();
                        $('#quest-5').hide();
                    }
                    else if (counter === 5) {
                        $('#quest-5').show();
                        $('#quest-6').hide();
                    }
                    else if (counter === 6) {
                        $('#quest-6').show();
                        $('#quest-7').hide();
                        $('#next').show();
                        $('#end_quest').hide();
                    }
                })

                console.log(main_array);
            });

        </script>


