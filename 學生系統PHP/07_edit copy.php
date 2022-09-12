<?php 
include_once("getLocation.php");
include_once('./conn_obj.php');
$cID = $_GET['cID'];
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

    <title>分數系統-編輯資料</title>
</head>

<body>
    <div class="container py-3">
        <h1 class="text-center fw-bold">分數系統-編輯資料</h1>
        <form action="./07_OK.php" method="get">
            <table>
                <tr>
                    <input type="hidden" name="cID" value="<?php echo $row['cID']; ?>">
                    <input type="hidden" name="action" value="OK的拉">
                    <td>座 號 </td>
                    <td><input type="text" name="cID2" id="cID2" disabled value="<?php echo $row['cID']; ?>"></td>
                </tr>
                <tr>
                    <td>科 目 </td>
                    <td><input type="text" name="course" id="course" value="<?php echo $row['course']; ?>"></td>
                </tr>
                <tr>
                    <td>科 目 </td>
                    <td><input type="text" name="score" id="score" value="<?php echo $row['score']; ?>"></td>
                </tr>

            </table>

            <input type="submit" value="更新資料">
            <input type="reset" value="重新填寫">

        </form>

    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>

</body>

</html>