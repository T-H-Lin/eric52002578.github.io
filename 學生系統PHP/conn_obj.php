<?php
$db_host = "localhost";
$db_userName = "tt";
$db_password = "1234";
$db_name = "tt";




$db_link = @new mysqli($db_host, $db_userName, $db_password,$db_name);
//new mysqli(主機:port,使用者名稱,密碼)2
if ($db_link->connect_error != "") {
    //有錯誤訊息時
    echo "資料庫連結失敗";
} else {
    //成功連結 設定資料庫編碼字元集
    $db_link->query("SET NAMES 'utf8'");
    // echo "ok";
}