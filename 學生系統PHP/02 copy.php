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
        <h1 class="text-center">OO大學 學生系統</h1>
        <table class="table">
            <tr>
                <th>座號</th>
                <th>姓名</th>
                <th>性別</th>
                <th>生日</th>
                <th>編輯</th>
            </tr>

            <?php for($i = 1; $i< 10; $i++){?>
            <tr>
                <td>11</td>
                <td>22</td>
                <td>33</td>
                <td>44</td>
                <td><a class="btn btn-primary btn-sm">詳細資料</a></td>
            </tr>
            <?php } ?>
        </table>
    </div>


















    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>

</body>

</html>