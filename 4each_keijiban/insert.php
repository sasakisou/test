<?php
  mb_internal_encoding("utf-8");
  $pdo = new PDO("mysql:dbname=lesson01;host=localhost;","rooot","mysql");
  $pdo->exec("insert into 4each_keijiban(handlename,title,comments)values('".$_POST['handlename']."','".$_POST['title']."','".['comments']."');");
  header("Location:http://localhost/4each_keijiban/index.php");
?>

