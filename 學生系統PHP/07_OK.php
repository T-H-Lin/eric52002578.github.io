<?php
if( isset($_GET['action']) && $_GET['action'] =='OK的拉'){
    include_once('./conn_obj.php');
    $cID=$_GET['cID'];
    $course=$_GET['course'];

    $score=$_GET['score'];
    $sql="update scorelist set 
    course='{$course}',

    score={$score}
    where cID='{$cID}'";
    $result = $db_link->query($sql);
    header("location:07.php");
}

?>