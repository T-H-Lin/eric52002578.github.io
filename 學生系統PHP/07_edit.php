<?php
if(isset($_GET['action'])&&$_GET['action'] =='edit'){
    $id=$_GET['id'];
    $cID=$_GET['cID'];
    $course=$_GET['course'];
    $score=$_GET['score'];
    include_once('./conn_obj.php');
    $sql="update scorelist set cID={$cID}, course='{$course}',score={$score} where id = {$id}";
    $result = $db_link->query($sql);
    if($result){
        header("location:07.php");
        exit();
    }else{
        echo '更新失敗';
    }
}
if(!isset($_GET['id'])or$_GET['id'] ==''){
    header("location:07.php");
    exit();
}

include_once('./conn_obj.php');
$id = $_GET['id'];
$sql="select * from scorelist where id={$id}";
$result = $db_link->query($sql);
$row =$result->fetch_assoc();
?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>分數登錄系統</title>
</head>

<body>
    <div class="container py-3 col-md-5 mx-auto">
        <h1 class="text-center fw-bold">分數登錄系統-新增</h1>

        <form action="" method="get">
            <table>
                <tr>
                    <td class="p-2" width="50%" align="right">座號</td>
                    <td><input type="text" name="cID" id="cID" value="<?php echo $row['cID']; ?>"></td>
                </tr>
                <tr>
                    <td class="p-2" width="50%" align="right">科目</td>
                    <td>
                        <select name="course" id="course">
                            <option value="">請選擇</option>
                            <option value="國文" <?php
                            if($row['course'] =='國文'){
                                echo 'selected';
                            }
                            ?>>國文</option>
                            <option value="英文" <?php
                            if($row['course'] =='英文'){
                                echo 'selected';
                            }
                            ?>>英文</option>
                            <option value="數學" <?php
                            if($row['course'] =='數學'){
                                echo 'selected';
                            }
                            ?>>數學</option>
                        </select>


                    </td>
                </tr>
                <tr>
                    <td class="p-2" width="50%" align="right">分數</td>
                    <td><input type="number" name="score" id="score" value="<?php echo $row['score']; ?>"></td>
                </tr>

            </table>




            <div class="text-center">
                <input type="hidden" name="action" value="edit">
                <input type="hidden" name="id" value="<?php echo $id ?>">
                <input class="btn btn-primary m-2" type="submit" value="更新">
                <a class="btn btn-primary" href="./07.php">回主畫面</a>
            </div>
        </form>
    </div>


    <!-- Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>

</body>

</html>