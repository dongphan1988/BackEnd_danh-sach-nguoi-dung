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
        text-align: right;
        border-bottom: 1px solid #ddd;
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
    $customerlist = array(
        "1" => array("ten" => "phan trong dong", "ngaysinh" => "15-4-1988", "diachi" => "ha noi", "anh" => "dong.jpg"),
        "2" => array("ten" => "Trần Huyền Trang", "ngaysinh" => "1990-08-20", "diachi" => "Bắc Giang", "anh" => "trantrang.jpg"),
        "3" => array("ten" => "Phan Kiều Oanh", "ngaysinh" => "1995-02-11", "diachi" => "Cần Thơ", "anh" => "anh2.jpg"),
        "4" => array("ten" => "Hoàng Thu Huyền", "ngaysinh" => "1996-05-23", "diachi" => "Cần Thơ", "anh" => "anh3.jpg"),
        "5" => array("ten" => "Phan Mỹ Tuyết", "ngaysinh" => "1999-05-12", "diachi" => "Cần Thơ", "anh" => "anh4.jpg")
    )
    ?>

    <?php
    foreach ($customerlist as $key => $values) {
        echo "<tr>";
        echo "<td>" . $key . "</td>";
        echo "<td>" . $values['ten'] . "</td>";
        echo "<td>" . $values['ngaysinh'] . "</td>";
        echo "<td>" . $values['diachi'] . "</td>";
        echo "<td><image src ='" . $values['anh'] . "' width = '140px' height ='220px'/></td>";
        echo "</tr>";
    }
    ?>

</table>
</body>
</html>
