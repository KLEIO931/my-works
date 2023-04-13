<html>
    <head>
        <meta charset="UTF-8">
        
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        
        <link rel="stylesheet" href="https://unpkg.com/leaflet@1.3.1/dist/leaflet.css" integrity="sha512-Rksm5RenBEKSKFjgI3a41vrjkw4EVPlJ3+OiI65vTjIdo9brlAacEuKOiQ5OFh7cOI1bkDwLqdLw3Zg0cRJAAQ==" crossorigin="">
        
        <script src="https://unpkg.com/leaflet@1.3.1/dist/leaflet.js" integrity="sha512-/Nsx9X4HebavoBvEBuyp3I7od5tA0UzAxs+j83KgC8PU0kgB4XiK4Lfe4y4cgBtaRJQEIFCW+oC506aPT2L1zw==" crossorigin=""></script>

        <link rel="stylesheet" href="https://unpkg.com/leaflet-control-geocoder/dist/Control.Geocoder.css" />
            
        <script src="https://unpkg.com/leaflet-control-geocoder/dist/Control.Geocoder.js"></script>
        
        <link href='https://api.tiles.mapbox.com/mapbox.js/plugins/leaflet-draw/v0.2.2/leaflet.draw.css' rel='stylesheet' />
        
        <script src='https://api.tiles.mapbox.com/mapbox.js/plugins/leaflet-draw/v0.2.2/leaflet.draw.js'></script>

        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
        
        <link rel="stylesheet" href="css/L.Control.Locate.min.css" />
        
        <script src="js/L.Control.Locate.min.js"></script>

        <link rel="stylesheet" href="style.css">

    </head>

    <body>
        <div class="bg_line2">
            <?php
            $user = 'root';
            $password = '';
            $dbname = 'map';
            $host = 'localhost:3306';
            $dsn = "mysql:host={$host};dbname={$dbname};charset=utf8";

            try{
                $pdo = new PDO($dsn,$user,$password);
                $pdo->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
                $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                $sql = "SELECT*FROM map";
                $stm = $pdo->prepare($sql);
                $stm->execute();
                $result = $stm->fetchAll(PDO::FETCH_ASSOC);
            } catch (Exception $e) {
                echo '<span class="error">エラーがありました。</span><br>';
                echo mb_convert_encoding($e->getMessage(), "UTF-8", "Shift-JIS");
                exit();
            }
            ?>
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
            </header>
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
                        <div class="map" id="map"></div>
                        <style>
                            #map{width: 100%;height: 635px;};
                        </style>
                        <script>
                                var map = L.map('map').setView([34.826268,134.690048], 16);
                            
                                var tiles = L.tileLayer('https://{s}.tile.osm.org/{z}/{x}/{y}.png', {
                                    attribution: '&copy; <a href="https://osm.org/copyright">OpenStreetMap</a> contributors'
                                }).addTo(map);
                                L.Control.geocoder().addTo(map);
                            
                                var drawnItems = new L.FeatureGroup().addTo(map);
                                var drawControl = new L.Control.Draw({
                                    draw: {
                                        polyline: {
                                        shapeOptions:{
                                            color: '#C3415D',
                                            opacity: 0.8
                                        }
                                        }
                                        ,polygon: false
                                        ,rectangle: false
                                        ,circle: false
                                        ,marker: false
                                    }
                                    ,edit:{
                                        featureGroup: drawnItems
                                    }
                                }).addTo(map);

                                map.on('draw:created', function(e) {
                                    drawnItems.addLayer(e.layer);
                                });

                                // 現在地のマーカーを設定
                                var myMarker;
                                map.locate({setView:true})
                                map.on('locationfound', (e)=>{
                                myMarker = L.marker([e.latitude, e.longitude]).addTo(map).bindPopup("現在地");
                                })

                                //マップ上にボタンを設置
                                L.Control.Locate = L.Control.extend({
                                onAdd: function(map) {
                                    this._div = L.DomUtil.create('div', 'custom-panel leaflet-bar');
                                    const icon = L.DomUtil.create('a','fas fa-map-marker-alt');
                                    icon.style='cursor:pointer'
                                    icon.onclick=()=>{
                                    map.flyTo(myMarker._latlng);
                                    }
                                    this._div.append(icon)
                                    return this._div;
                                }
                                })
                                L.control.locate = function(opts){
                                return new L.Control.Locate(opts);
                                }
                                L.control.locate({ position: 'topleft' }).addTo(map);

                                var mapIcon = L.icon({
                                    iconUrl:'m.png',
                                    iconSize:[30,30],
                                    popupAnchor:[0,-30]
                                });

                                <?php foreach($result as $row){ ?>
                                    L.marker([<?php echo $row['ido'] ?>,<?php echo $row['keido'] ?>],{icon:mapIcon}).addTo(map).bindPopup("<?php echo $row['overview'] ?>",{autoClose:true});
                                <?php } ?>

                        </script>
                    <!--右側　詳細終了-->
                    </div>
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