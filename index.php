<!DOCTYPE html>
<html lang="ru">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<link rel="stylesheet" href="style.css">
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
                    <main id="quest" role="main" class="inner cover">
                        <?php 
                            $i = 0;
                            $j = 0;
                            $quest_file = file_get_contents('questions.json');
                            $quest_arr = json_decode($quest_file, true);
                            if( $quest_file != false && !is_null($quest_arr)){
                            foreach ($quest_arr as $val) {
                                $title = $val;
                                $i++;
                            }
                        } 
                       echo 'Полученно'.$_POST['int'];
                        $count = count($quest_arr);          
                        if ($j < $count && $j == 0) {
                        ?>
                        <div id="quest-0">
                            <?php 
                                include('vopros-0.php');
                             ?>
                        </div>
                        <?php 
                        }
                        ?>
                        <?php 
                        if ($j < $count && $j == 1) {
                        ?>
                        <div id="quest-1" style="">
                            <?php 
                                include('vopros-1.php');
                            ?>
                        </div>
                        <?php
                        }
                        ?>
                        <?php  
                        if ($j < $count && $j == 2) {
                        ?>
                        <div id="quest-2" class="quest_2" style="">
                            <?php 
                                include('vopros-3.php');
                            ?>
                        </div>
                        <?php 
                        }
                        ?>
                        <?php 
                        if ($j < $count && $j == 3) {
                            ?>
                        <div id="quest-3" class="quest_3" style="">
                            <?php 
                                include('vopros-4.php');
                            ?>
                        </div>
                        <?php 
                        }
                        ?>
                        <button id="next" type="submit" class="btn btn-success">Продолжить</button>
                    </main>     
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
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="../../../../assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
    <script src="../../../../assets/js/vendor/popper.min.js"></script>
    <script src="../../../../dist/js/bootstrap.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script>
    $(document).ready(function(){
        let i = 0;
            $('#next').click(function(){
                $.ajax({
                    url: '/index.php',
                    method: 'post',
                    dataType: 'html',
                    data: {text: i++},
                    success: function(data){
                        if(i == 1){
                            
                        }
                    }
                    });
            });
});

    </script>


