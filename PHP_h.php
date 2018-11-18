<?php
header('Content-type:text/html; charset=utf-8');
if($_GET['username'])  echo $_GET['username']."你好!";
else echo "你沒名字!"."<br>";

echo "你想要的是:<br>";
foreach ($_GET['learning'] as $learning) {
  // code...
  echo $learning."<br>";
}

 ?>
