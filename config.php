<?php

define('DB_SERVER','localhost');
define('DB_USERNAME','root');
define('DB_PASSWORD','AdarshReddyP18');
define('DB_NAME','demo');

$link = mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_NAME);

if($link==false){
    echo"Unable to connect";
    die("ERROR: COULD NOT CONNECT.".mysqli_connect_error());
    
}
?>