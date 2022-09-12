<?php
if( isset($_GET['action']) && $_GET['action'] =='add'){
    $action = $_GET['action'];
    $cName=$_GET['cName'];
    $cSex=$_GET['cSex'];
    $cBirthday=$_GET['cBirthday'];
    $cEmail=$_GET['cEmail'];
    $cPhone=$_GET['cPhone'];
    $cAddr=$_GET['cAddr'];
    $cHeight=$_GET['cHeight'];
    $cWeight=$_GET['cWeight'];
    include_once('./conn_obj.php');
    $sql = "INSERT INTO students (
        cName,
        cSex,
        cBirthday,
        cEmail,
        cPhone,
        cAddr,
        cHeight,
        cWeight
    ) VALUES (
        '{$cName}',
        '{$cSex}',
        '{$cBirthday}',
        '{$cEmail}',
        '{$cPhone}',
        '{$cAddr}',
        {$cHeight},
        {$cWeight}
    )";
    $result = $db_link->query($sql);
    print_r($result);
    if($result = 1){
        header("location:02.php");
    }else{
        echo '資料寫入錯誤';
}
}else {
    echo '請由表單填寫送出';

}

?>