<?php
include_once("conn_obj.php");
$sql="SELECT * FROM students";
$result = $db_link->query($sql);
// print_r($result);
while($row_result=$result->fetch_assoc()) {
    foreach($row_result as $item=>$value){
        echo $item."=".$value."<br>";
    }
    echo "<hr>";
}