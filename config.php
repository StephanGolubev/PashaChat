<?php
$db_host='localhost';
$db_user='root';
$db_pwd='';
$database='mychat';

if(mysqli_connect($db_host,$db_user,$db_pwd,$database)){
    $conn = mysqli_connect($db_host,$db_user,$db_pwd,$database);
}

// if(!mysqli_select_db($database))
// die("can't Select Database");
?>