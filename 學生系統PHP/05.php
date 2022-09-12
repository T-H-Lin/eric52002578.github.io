<?php

if(isset($_POST['action']) && $_POST['action'] == 'del'){
    include_once('./conn_obj.php');
    $sql="DELETE FROM students WHERE cID={$_POST['cID']}";
    $result=$db_link->query($sql);
    if($result){
        header("location:02.php");
    }else{
        echo '刪除資料失敗';
    }
}else{
    echo '請油表單製作';
}

?>