<?php
  require_once("./phpQuery-onefile.php");
  $html = file_get_contents("https://tenki.jp/forecast/6/31/6310/28201/10days.html");

  if(!isset($html)){

  }else{

  echo '<table class="weather_info">';

  echo '<tbody>';
  //種類
  echo '<tr>';
  echo '<td>';
  echo phpQuery::newDocument($html)->find(".forecast10days-list:eq(0)")->find(".forecast10days-title")->find(".days");
  echo '</td>';
  echo '<td>';
  echo phpQuery::newDocument($html)->find(".forecast10days-list:eq(0)")->find(".forecast10days-title")->find(".forecast");
  echo '</td>';
  echo '<td>';
  echo phpQuery::newDocument($html)->find(".forecast10days-list:eq(0)")->find(".forecast10days-title")->find(".temp");
  echo '</td>';
  echo '<td>';
  echo phpQuery::newDocument($html)->find(".forecast10days-list:eq(0)")->find(".forecast10days-title")->find(".prob-precip");
  echo '</td>';
  echo '</tr>';


  //週間天気
  $day1_days = phpQuery::newDocument($html)->find(".forecast10days-actab:eq(0)")->find(".days:eq(0)");
  $day1_forecast = phpQuery::newDocument($html)->find(".forecast10days-actab:eq(0)")->find(".forecast:eq(0)");
  $day1_temp = phpQuery::newDocument($html)->find(".forecast10days-actab:eq(0)")->find(".temp:eq(0)");
  $day1_prob_precip = phpQuery::newDocument($html)->find(".forecast10days-actab:eq(0)")->find(".prob-precip:eq(0)");

  $day2_days = phpQuery::newDocument($html)->find(".forecast10days-actab:eq(1)")->find(".days:eq(0)");
  $day2_forecast = phpQuery::newDocument($html)->find(".forecast10days-actab:eq(1)")->find(".forecast:eq(0)");
  $day2_temp = phpQuery::newDocument($html)->find(".forecast10days-actab:eq(1)")->find(".temp:eq(0)");
  $day2_prob_precip = phpQuery::newDocument($html)->find(".forecast10days-actab:eq(1)")->find(".prob-precip:eq(0)");

  $day3_days = phpQuery::newDocument($html)->find(".forecast10days-actab:eq(2)")->find(".days:eq(0)");
  $day3_forecast = phpQuery::newDocument($html)->find(".forecast10days-actab:eq(2)")->find(".forecast:eq(0)");
  $day3_temp = phpQuery::newDocument($html)->find(".forecast10days-actab:eq(2)")->find(".temp:eq(0)");
  $day3_prob_precip = phpQuery::newDocument($html)->find(".forecast10days-actab:eq(2)")->find(".prob-precip:eq(0)");

  $day4_days = phpQuery::newDocument($html)->find(".forecast10days-actab:eq(3)")->find(".days:eq(0)");
  $day4_forecast = phpQuery::newDocument($html)->find(".forecast10days-actab:eq(3)")->find(".forecast:eq(0)");
  $day4_temp = phpQuery::newDocument($html)->find(".forecast10days-actab:eq(3)")->find(".temp:eq(0)");
  $day4_prob_precip = phpQuery::newDocument($html)->find(".forecast10days-actab:eq(3)")->find(".prob-precip:eq(0)");

  $day5_days = phpQuery::newDocument($html)->find(".forecast10days-actab:eq(4)")->find(".days:eq(0)");
  $day5_forecast = phpQuery::newDocument($html)->find(".forecast10days-actab:eq(4)")->find(".forecast:eq(0)");
  $day5_temp = phpQuery::newDocument($html)->find(".forecast10days-actab:eq(4)")->find(".temp:eq(0)");
  $day5_prob_precip = phpQuery::newDocument($html)->find(".forecast10days-actab:eq(4)")->find(".prob-precip:eq(0)");

  $day6_days = phpQuery::newDocument($html)->find(".forecast10days-actab:eq(5)")->find(".days:eq(0)");
  $day6_forecast = phpQuery::newDocument($html)->find(".forecast10days-actab:eq(5)")->find(".forecast:eq(0)");
  $day6_temp = phpQuery::newDocument($html)->find(".forecast10days-actab:eq(5)")->find(".temp:eq(0)");
  $day6_prob_precip = phpQuery::newDocument($html)->find(".forecast10days-actab:eq(5)")->find(".prob-precip:eq(0)");

  $day7_days = phpQuery::newDocument($html)->find(".forecast10days-actab:eq(6)")->find(".days:eq(0)");
  $day7_forecast = phpQuery::newDocument($html)->find(".forecast10days-actab:eq(6)")->find(".forecast:eq(0)");
  $day7_temp = phpQuery::newDocument($html)->find(".forecast10days-actab:eq(6)")->find(".temp:eq(0)");
  $day7_prob_precip = phpQuery::newDocument($html)->find(".forecast10days-actab:eq(6)")->find(".prob-precip:eq(0)");
/*  echo '<tr>';
  echo '<td>';
  echo phpQuery::newDocument($html)->find(".forecast10days-actab")->find(".days");
  echo '</td>';
  echo '<td>';  
  echo phpQuery::newDocument($html)->find(".forecast10days-actab")->find(".forecast");
  echo '</td>';
  echo '<td>';  
  echo phpQuery::newDocument($html)->find(".forecast10days-actab")->find(".temp");
  echo '</td>';
  echo '<td>';  
  echo phpQuery::newDocument($html)->find(".forecast10days-actab")->find(".prob-precip");
  echo '</td>';
  echo '<td>';  
  echo phpQuery::newDocument($html)->find(".forecast10days-actab")->find(".precip");
  echo '</td>';
  echo '</tr>';

*/

  echo '<tr>';
  echo '<td>';
  echo $day1_days;
  echo '</td>';
  echo '<td>';
  echo $day1_forecast;
  echo '</td>';
  echo '<td>';
  echo $day1_temp;
  echo '</td>';
  echo '<td>';
  echo $day1_prob_precip;
  echo '</td>';
  echo '</tr>';

  echo '<tr>';
  echo '<td>';
  echo $day2_days;
  echo '</td>';
  echo '<td>';
  echo $day2_forecast;
  echo '</td>';
  echo '<td>';
  echo $day2_temp;
  echo '</td>';
  echo '<td>';
  echo $day2_prob_precip;
  echo '</td>';
  echo '</tr>';

  echo '<tr>';
  echo '<td>';
  echo $day3_days;
  echo '</td>';
  echo '<td>';
  echo $day3_forecast;
  echo '</td>';
  echo '<td>';
  echo $day3_temp;
  echo '</td>';
  echo '<td>';
  echo $day3_prob_precip;
  echo '</td>';
  echo '</tr>';

  echo '<tr>';
  echo '<td>';
  echo $day4_days;
  echo '</td>';
  echo '<td>';
  echo $day4_forecast;
  echo '</td>';
  echo '<td>';
  echo $day4_temp;
  echo '</td>';
  echo '<td>';
  echo $day4_prob_precip;
  echo '</td>';
  echo '</tr>';

  echo '<tr>';
  echo '<td>';
  echo $day5_days;
  echo '</td>';
  echo '<td>';
  echo $day5_forecast;
  echo '</td>';
  echo '<td>';
  echo $day5_temp;
  echo '</td>';
  echo '<td>';
  echo $day5_prob_precip;
  echo '</td>';
  echo '</tr>';

  echo '<tr>';
  echo '<td>';
  echo $day6_days;
  echo '</td>';
  echo '<td>';
  echo $day6_forecast;
  echo '</td>';
  echo '<td>';
  echo $day6_temp;
  echo '</td>';
  echo '<td>';
  echo $day6_prob_precip;
  echo '</td>';
  echo '</tr>';

  echo '<tr>';
  echo '<td>';
  echo $day7_days;
  echo '</td>';
  echo '<td>';
  echo $day7_forecast;
  echo '</td>';
  echo '<td>';
  echo $day7_temp;
  echo '</td>';
  echo '<td>';
  echo $day7_prob_precip;
  echo '</td>';
  echo '</tr>';

/*
  //降水確立
  echo '<tr>';
  echo '<td>';
  $rain_0day = phpQuery::newDocument($html)->find(".today-weather")->find(".precip-table")->find(".rain-probability");
  echo $rain_0day . "%" . "<br>";
  echo '</td>';
  echo '</tr>';
*/


  echo '</tbody>';
  echo '</table>';

  }
?>