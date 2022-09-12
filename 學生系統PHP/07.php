<?php 
include_once("conn_obj.php");
$sql = "select * from scorelist";
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
        <h1 class="text-center fw-bold">分數系統-主畫面</h1>
        <h4><?php echo "查詢目前學生總筆數:". $total_rows."筆"?>
            <a href="07_add.php" class="btn btn-sm btn-warning">新增</a>
            <a href="02.php" class="btn btn-sm btn-info">學生系統</a>
        </h4>
        <table class="table table-striped">
            <tr>
                <th>#</th>
                <th>座號</th>
                <th>科目</th>
                <th>分數</th>
                <th>編輯</th>
            </tr>

            <?php 

                $num = 1;
                while ($row = $result->fetch_assoc()){
            ?>
            <tr>
                <td><?php echo $num ?></td>
                <td><?php echo $row['cID'];?></td>
                <td><?php echo $row['course'];?></td>
                <td><?php echo $row['score'];?></td>
                <td>
                    <a href="./07_edit.php?id=<?php echo $row['id']; ?>" class="btn btn-success btn-sm">編輯</a>
                    <a href="./07_del.php?id=<?php echo $row['id']; ?>" class="btn btn-danger btn-sm">刪除</a>
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