<?php
  require_once("./phpQuery-onefile.php");
  $html = file_get_contents("https://tenki.jp/bousai/warn/6/31/");

  if(!isset($html)){

  }else{
  $date=date("m/d H:i:s");
  echo '<div class="box_title"><p>警報・注意報'. '<br>('.$date.')</p></div>';
  echo '<div class="box">';
  echo '<table class="alerm_info">';
  echo '<tbody>';
  echo '<tr>';
  echo '<td>';
  echo phpQuery::newDocument($html)->find(".main-column")->find(".section-wrap")->find(".map-warn-first-entries-table")->find(".is-alert:eq(27)")->text();
  echo '</td>';
  echo '</tr>';
  echo '</tbody>';
  echo '</table>';
  echo '</div>';
  }
?>