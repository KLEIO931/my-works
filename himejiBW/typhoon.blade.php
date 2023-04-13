<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">        
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <div class="bg_line2">
        <!--メニュー部分-->
        <header class ='container-fluid'>
            <nav>
                <ul>
                    <img src="logo.png" class="logo rounded-circle img-fluid ">
                    <li><a href="tenki.blade.php" style="text-decoration:none;">天気</a></li>
                    <li class="current"><a href="map.php" style="text-decoration:none;">地図</a></li>
                    <li><a href="typhoon.blade.php" style="text-decoration:none;">台風</a></li>
                </ul>
            </nav>
        <!--メニュー部分の終了-->
            <p class="col-12"></p>
            <p class="col-12"></p>
            <p class="col-12"></p>
        <!--内容部分-->
        <div class="container-fluid">
            <div class="row">
                <!--左側　詳細-->
                <div class="col-md-3">
                    <?php
                    require_once("./alerm.php");
                    ?>
                </div>
                <!--左側　詳細終了-->
                <!--右側　詳細-->
                <div class="col-md-9">
                    <!--天気予報図-->
                    <div class="today_weather">
                        <!--今日の天気を表示する-->
                        <?php
                        require_once("./typhoon.php");
                        ?>
                    </div>
                </div>
                <!--右側　詳細終了-->
            </div>
        </div>
        <footer>
            <div class="text-center">
                <a>©o-hara2022.</a>
            </div>
        </footer>
        <!--内容部分の終了-->
        </div>
    </body>
</html>