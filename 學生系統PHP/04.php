<?php 
include_once("getLocation.php");
include_once('./conn_obj.php');
$cID = $_GET['cID'];
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

    <title>學生系統-編輯資料</title>
</head>

<body>
    <div class="container py-3">
        <h1 class="text-center fw-bold">學生系統-編輯資料</h1>
        <form action="./04_OK.php" method="get">
            <table>
                <tr>
                    <input type="hidden" name="cID" value="<?php echo $row['cID']; ?>">
                    <input type="hidden" name="action" value="OK的拉">
                    <td>座 號 </td>
                    <td><input type="text" name="cID2" id="cID2" disabled value="<?php echo $row['cID']; ?>"></td>
                </tr>
                <tr>
                    <td>姓 名 </td>
                    <td><input type="text" name="cName" id="cName" value="<?php echo $row['cName']; ?>"></td>
                </tr>
                <tr>
                    <td>性 別 </td>
                    <td>
                        <label>
                            <input type="radio" name="cSex" value="F" <?php if($row['cSex']=='F'){echo 'checked';} ?>>小姐
                        </label>
                        <label>
                            <input type="radio" name="cSex" value="M" <?php if($row['cSex']=='M'){echo 'checked';} ?>>先生
                        </label>
                    </td>
                </tr>
                <tr>
                    <td>生 日 </td>
                    <td><input type="date" name="cBirthday" id="cBirthday" value="<?php echo $row['cBirthday']; ?>">
                    </td>
                </tr>
                <tr>
                    <td>信 箱 </td>
                    <td><input type="email" name="cEmail" id="cEmail" value="<?php echo $row['cEmail']; ?>"></td>
                </tr>
                <tr>
                    <td>手 機 </td>
                    <td><input type="text" name="cPhone" id="cPhone" value="<?php echo $row['cPhone']; ?>"></td>
                </tr>
                <tr>
                    <td>住 址 </td>
                    <td><input type="text" name="cAddr" id="cAddr" size="40" value="<?php echo $row['cAddr']; ?>"></td>
                </tr>
                <tr>
                    <td>身 高 </td>
                    <td><input type="number" name="cHeight" id="cHeight" value="<?php echo $row['cHeight']; ?>"></td>
                </tr>
                <tr>
                    <td>體 重 </td>
                    <td><input type="number" name="cWeight" id="cWeight" value="<?php echo $row['cWeight']; ?>"></td>
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