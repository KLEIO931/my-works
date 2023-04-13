<?php
  require_once("./phpQuery-onefile.php");
  $html = file_get_contents("https://tenki.jp/forecast/6/31/6310/28201/");

  if(!isset($html)){

  }else{

  echo '<table class="weather_info">';

  echo '<tbody>';
  //天気
  
  echo '<tr>';
  /*
  echo '<td>';
  echo phpQuery::newDocument($html)->find(".today-weather")->find(".weather-wrap clearfix")->find(".weather-icon")->text();
  echo '<br>';
  echo '</td>';
  echo '<td>';
  echo phpQuery::newDocument($html)->find(".today-weather")->find(".left-style")->text();
  echo '<br>';
  echo phpQuery::newDocument($html)->find(".today-weather")->find(".weather-wrap")->text();
  echo '</td>';
  */
  echo '<td>';
  echo phpQuery::newDocument($html)->find(".tomorrow-weather")->find(".left-style");
  echo phpQuery::newDocument($html)->find(".tomorrow-weather")->find(".weather-wrap clearfix");
  echo phpQuery::newDocument($html)->find(".tomorrow-weather")->find(".weather-wrap");
  echo '</td>';

  echo '</tr>';

  
  echo '<tr>';
  echo '<td>';
  $time = phpQuery::newDocument($html)->find(".tomorrow-weather")->find(".precip-table")->find("tr:eq(0)");
  echo $time;
  echo '</td>';
  echo '</tr>';
 

  


  //降水確立
  /*
  echo '<tr>';
  echo '<td>';
  $rain_0day = phpQuery::newDocument($html)->find(".today-weather")->find(".precip-table")->find(".rain-probability");
  echo $rain_0day . "%" . "<br>";
  echo '</td>';
  */
  echo '<td>';  
  $rain_1day = phpQuery::newDocument($html)->find(".tomorrow-weather")->find(".precip-table")->find(".rain-probability");
  echo $rain_1day;
  echo '</td>';
  
  echo '</tr>';

  /*
  echo '<tr>';
  echo '<td>気温予報</td>';
  echo '<td>';
  echo phpQuery::newDocument($html)->find(".today-weather")->find("#main")->find("div")->find("#forecasttablefont")->find("td.temp:eq(0)")->text();
  echo '</td>';
  echo '<td>';  
  echo phpQuery::newDocument($html)->find("")->find("#main")->find("div")->find("#forecasttablefont")->find("td.temp:eq(1)")->text();
  echo '</td>';
  echo '</tr>';
  */
  
  //風
  
  echo '<tr>';
  /*
  echo '<td>';
  echo phpQuery::newDocument($html)->find(".today-weather")->find(".precip-table")->find(".wind-wave")->find("th:eq(0)")->text();
  echo '</td>';
  echo '<td>';  
  echo phpQuery::newDocument($html)->find(".today-weather")->find(".precip-table")->find(".wind-wave")->find("td:eq(0)")->text();
  echo '</td>';
  */
  echo phpQuery::newDocument($html)->find(".tomorrow-weather")->find(".precip-table")->find(".wind-wave")->find("th:eq(0)"); 
  echo phpQuery::newDocument($html)->find(".tomorrow-weather")->find(".precip-table")->find(".wind-wave")->find("td:eq(0)");
  echo '</tr>';

  //波
  /*
  echo '<tr>';
  echo '<td>';
  echo phpQuery::newDocument($html)->find(".today-weather")->find(".precip-table")->find(".wind-wave")->find("th:eq(1)")->text();
  echo '</td>';
  echo '<td>';  
  echo phpQuery::newDocument($html)->find(".today-weather")->find(".precip-table")->find(".wind-wave")->find("td:eq(1)")->text();
  echo '</td>';
  */
  echo phpQuery::newDocument($html)->find(".tomorrow-weather")->find(".precip-table")->find(".wind-wave")->find("th:eq(1)");
  echo phpQuery::newDocument($html)->find(".tomorrow-weather")->find(".precip-table")->find(".wind-wave")->find("td:eq(1)");
  echo '</tr>';


  echo '</tbody>';
  echo '</table>';

  }
?>