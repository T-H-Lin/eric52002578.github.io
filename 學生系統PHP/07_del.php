<?php 
// echo $_GET['cID'];
if( !isset($_GET['cID']) or $_GET['cID'] ==''){
    header('location:02.php');
    exit();
}
$cID = $_GET['cID'];
include_once('./conn_obj.php');
$sql="select * from scorelist where cID={$cID}";
$result = $db_link->query($sql);
// print_r($result);
$row =$result->fetch_assoc();
?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>學生系統-刪除資料</title>
</head>

<body>
    <div class="container py-3">
        <h1 class="text-center fw-bold">學生系統-刪除資料</h1>
        <table class="table ">
            <tr>
                <td>座號</td>
                <td><?php echo $row['cID']; ?></td>
            </tr>
            <tr>
                <td>科目</td>
                <td><?php echo $row['course']; ?></td>
            </tr>
            <tr>
                <td>分數</td>
                <td><?php echo $row['score']; ?></td>
            </tr>

        </table>
        <form action="07.php" method="post">
            <div class="text-center">
                <input type="hidden" name="action" value="del">
                <input type="hidden" name="cID" value="<?php echo $cID;?>">
                <input class="btn btn-danger" type="submit" value="確定刪除?">
                <a class="btn btn-primary" href="07.php">回首頁</a>
            </div>
        </form>




    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>

</body>

</html>