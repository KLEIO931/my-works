<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">   
        <link rel="stylesheet" href="homestyle.css">
        <link href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Caveat" rel="stylesheet">   
    </head>
    <body>
        
        <header class="container-fluid">
            <nav class="row list-unstyled justify-content-end text-center" style="background-color:#212529;">
                <li class="col-md-4"><a href="tenki.blade.php" class="btn btn-flat1"><span>天気</span></a></li>
                <li class="col-md-4"><a href="map.php" class="btn btn-flat2"><span>地図</span></a></li>
                <li class="col-md-4"><a href="typhoon.blade.php" class="btn btn-flat3"><span>台風</span></a></li>
            </nav>
        </header>
        <div class="jumbotron"style="background:url(home.jpg) center no-repeat;backgoround-size:cover; height:550px">
            <p class="col-12"></p>
            <p class="col-12"></p>
            <p class="col-12"></p>
            <p class="col-12"></p>
            <p class="col-11 text-center" style="font-family:'Caveat';font-size:180px;">Welcome To HBW</p>
        </div>
        <div class="container-fluid">
            <div class="col-md-2">
                <a href="home.php"><img src="logo.png" class="logo rounded-circle img-fluid "></a>
            </div>
            <div class="col-md-8 overview">
                <br>
                <h1>HBWについて</h1>
                <br>
                <p>このサイトは姫路市専用の防災サイトです。今のご時世ではテレビを持っている人達が少なく災害情報を知ることのできない状況があります。これを解決するために災害時に端末で災害情報を伝達し避難などの行動にすぐにでも移れるようにサポートするために開発致しました。</p>
                <br>
                <br>
                <h1>このサイトの使い方について</h1>
                <p>上部の<span class="header">天気</span>、<span class="header">地図</span>、<span class="header">台風</span>のいずれかのボタンを押すとページ遷移し見たい情報を確認することができます。また当サイトのロゴをクリックするとこの画面に戻ります。<br><br><span class="orange">左側のオレンジ色のリスト内には現時点で警報または注意報が発令いれば文字として表示されます。</span></p>
                <br>
                <br>
                <h2>天気画面</h2>
                <p>下部の<span class="header">今日</span>、<span class="header">明日</span>、<span class="header">週間</span>のボタンをおすとそれぞれに対応したページに遷移します。</p>
                <img src="localhost_tenki.blade.php.png" class="png">
                <br>
                <br>
                <h2>地図画面</h2>
                <p>地図画面では避難所の確認と現在地、また線を描く、場所の検索も可能です。<br>
                    <span class="circle black">黒丸</span>：<span class="blacks">拡大・縮小を行います。</span><br>
                    <span class="circle red">赤丸</span>：<span class="reds">ボタンを押すと地図にクリックするごとに線が描かれていきます。</span><br>
                    <span class="circle brown">茶色丸</span>：<span class="browns">ボタンをクリックすると描いた線を移動、削除することができます。</span><br>
                    <span class="circle green">緑丸</span>：<span class="greens">ボタンをクリックすると地図が動き現在地を表示してくれます。</span><br>
                    <span class="circle blue">青丸</span>：<span class="blues">ボタンをクリックすると検索フォームが表示され検索したい場所のキーワードを入力すると地図がその場所まで自動で動いて表示してくれます。</span>
                </p>
                <img src="Inkedlocalhost_map.php.jpg" class="png">
                <br>
                <br>
                <h2>台風画面</h2>
                <p>台風が発生している場合台風の進路画像が表示されます。</p>
                <img src="localhost_typhoon.blade.php.png" class="png">
            </div>
            
        </div>
    </body>
</html>