<?php

$db = new mysqli('localhost','root','','siitvanm_Senior');
$db->query('SET NAMES UTF8');

   if($db->connect_errno){
      echo $db->connect_errno.": ".$db->connect_error;
   }
 ?>
