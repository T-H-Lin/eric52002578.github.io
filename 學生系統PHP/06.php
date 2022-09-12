<?php 
include_once("conn_obj.php");
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
        <h1 class="text-center fw-bold">學生系統-新增資料</h1>
        <form action="06_OK.php" method="get">
            <input type="hidden" name="action" value="add">
            <table>
                <tr>
                    <td>座 號 </td>
                    <td><input type="text" name="cID" id="cID" disabled></td>
                </tr>
                <tr>
                    <td>姓 名 </td>
                    <td><input type="text" name="cName" id="cName"></td>
                </tr>
                <tr>
                    <td>性 別 </td>
                    <td>
                        <label><input type="radio" name="cSex" value="F" checked>小姐</label>
                        <label><input type="radio" name="cSex" value="M">先生</label>
                    </td>
                </tr>
                <tr>
                    <td>生 日 </td>
                    <td><input type="date" name="cBirthday" id="cBirthday"></td>
                </tr>
                <tr>
                    <td>信 箱 </td>
                    <td><input type="email" name="cEmail" id="cEmail"></td>
                </tr>
                <tr>
                    <td>手 機 </td>
                    <td><input type="text" name="cPhone" id="cPhone"></td>
                </tr>
                <tr>
                    <td>住 址 </td>
                    <td><input type="text" name="cAddr" id="cAddr" size="40"></td>
                </tr>
                <tr>
                    <td>身 高 </td>
                    <td><input type="number" name="cHeight" id="cHeight" value="0"></td>
                </tr>
                <tr>
                    <td>體 重 </td>
                    <td><input type="number" name="cWeight" id="cWeight" value="0"></td>
                </tr>
            </table>

            <div class="text-center mt-3">
                <input class="btn btn-primary" type="submit" value="新增">
                <a class="btn btn-primary" href="02.php">回首頁</a>
            </div>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>

</body>

</html>