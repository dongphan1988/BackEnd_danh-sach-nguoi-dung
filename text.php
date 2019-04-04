<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<style>
    table {
        border-collapse: collapse;
        width: 100%;
    }

    th, td {
        padding: 8px;
        text-align: left;
        border-bottom: 1px solid #000000;
    }
</style>
<body>
<table border="0">
    <caption><h1>Danh sách khách hàng</h1></caption>
    <tr>
        <th>STT</th>
        <th>Tên</th>
        <th>Ngày sinh</th>
        <th>Địa chỉ</th>
        <th>Ảnh</th>
    </tr>

    <?php
    $customerlist = [
        ["1", "phan trong dong", "15-4-1988", "ha noi", "dong.jpg"],
        ["2", "phan trong dong", "15-4-1988", "ha noi", "dong.jpg"],
        ["3", "phan trong dong", "15-4-1988", "ha noi", "dong.jpg"],
        ["4", "phan trong dong", "15-4-1988", "ha noi", "dong.jpg"],
        ["5", "phan trong dong", "15-4-1988", "ha noi", "dong.jpg"],

    ];

    foreach ($customerlist as $a) {
        echo "<tr>";
        echo "<td>" . $a[0] . "</td>";
        echo "<td>" . $a[1] . "</td>";
        echo "<td>" . $a[2] . "</td>";
        echo "<td>" . $a[3] . "</td>";
        echo "<td><image src ='" . $a[4] . "' width = '140px' height ='220px'/></td>";
        echo "</tr>";

    }
    ?>
</body>
</html>