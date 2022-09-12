<?php 
include_once("conn_obj.php");
$sql = "select * from students";
$result = $db_link->query($sql);
$total_rows =$result->num_rows;
?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>大學系統</title>
</head>

<body>
    <div class="container py-3">
        <h1 class="text-center fw-bold">學生系統-主畫面</h1>
        <h4><?php echo "查詢目前學生總筆數:". $total_rows."筆"?>
            <a href="06.php" class="btn btn-sm btn-warning">新增</a>
            <a href="07.php" class="btn btn-sm btn-info">分數</a>
        </h4>
        <table class="table table-striped">
            <tr>
                <th>#</th>
                <th>座號</th>
                <th>姓名</th>
                <th>性別</th>
                <th>生日</th>
                <th>編輯</th>
            </tr>

            <?php 

                $num = 1;
                while ($row = $result->fetch_assoc()){
            ?>
            <tr>
                <td><?php echo $num ?></td>
                <td><?php echo "22A_".$row['cID'];?></td>
                <td><?php echo $row['cName'];?></td>
                <td><?php 
                if ($row['cSex'] == 'F'){
                    echo "小姐";
                }else{
                    echo "先生";
                }
                ?></td>
                <td><?php echo $row['cBirthday'];?></td>
                <td>
                    <a href="./03.php?cID=<?php echo $row['cID']; ?>" class="btn btn-primary btn-sm">詳細</a>
                    <a href="./04.php?cID=<?php echo $row['cID']; ?>" class="btn btn-success btn-sm">編輯</a>
                    <a href="./05_del.php?cID=<?php echo $row['cID']; ?>" class="btn btn-danger btn-sm">刪除</a>
                </td>
            </tr>
            <?php $num++; } ?>
        </table>
    </div>


















    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>

</body>

</html>