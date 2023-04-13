<?php
  require_once("./phpQuery-onefile.php");
  $html = file_get_contents("https://tenki.jp/bousai/typhoon/");

  if(!isset($html)){

  }else{

  echo '<table class="weather_info">';
  echo '<tbody>';
  echo '<br>';
  echo '<br>';
  echo '<tr>';
  echo '<td>';
  echo phpQuery::newDocument($html)->find(".main-column")->find(".section-wrap")->find(".typhoon-image");
  echo '</td>';
  echo '</tr>';

  echo '</tbody>';
  echo '</table>';

  }
?>