<?php 
// echo $_GET['cID'];
if( !isset($_GET['cID']) or $_GET['cID'] ==''){
    header('location:02.php');
    exit();
}
$cID = $_GET['cID'];
include_once('./conn_obj.php');
$sql="select * from students where cID={$cID}";
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

    <title>學生系統-詳細資料</title>
</head>

<body>
    <div class="container py-3">
        <h1 class="text-center fw-bold">學生系統-詳細資料</h1>
        <table class="table ">
            <tr>
                <td>座號</td>
                <td><?php echo $row['cID']; ?></td>
            </tr>
            <tr>
                <td>姓名</td>
                <td><?php echo $row['cName']; ?></td>
            </tr>
            <tr>
                <td>性別</td>
                <td><?php echo $row['cSex']; ?></td>
            </tr>
            <tr>
                <td>生日</td>
                <td><?php echo $row['cBirthday']; ?></td>
            </tr>
            <tr>
                <td>手機</td>
                <td><?php echo $row['cPhone']; ?></td>
            </tr>
            <tr>
                <td>住址</td>
                <td><?php echo $row['cAddr']; ?></td>
            </tr>
            <tr>
                <td>身高</td>
                <td><?php echo $row['cHeight']; ?></td>
            </tr>
            <tr>
                <td>體重</td>
                <td><?php echo $row['cWeight']; ?></td>
            </tr>
        </table>
        <div class="text-center">
            <a class="btn btn-primary" href="02.php">回首頁</a>
        </div>


    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>

</body>

</html>