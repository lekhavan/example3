<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Test</title>
</head>
<?php
    include_once("connection.php");
?>
<body>
    <table width="500" border="1" align="center" >
        <tr>
                <th><strong>Mã Đơn</strong></th>
                <th><strong>Tên Sản Phẩm</strong></th>
                <th><strong>Số Lượng</strong></th>
                <th><strong>Giá</strong></th>
                <th><strong>Ghi Chú</strong></th>
        </tr>
        <tbody>
        <?php
            $id=1;
            $result=pg_query($conn,"Select * from oder");
            while($row=pg_fetch_array($result,NULL, PGSQL_ASSOC))
            {
            ?>
			<tr>
              <td><?php echo $row["id"];?></td>
              <td><?php echo $row["sp"];?></td>
              <td><?php echo $row["sl"];?></td>
              <td><?php echo $row["pr"];?></td>
              <td><?php echo $row["gc"];?></td>
            </tr>
            <?php $id++;}?>
            </tbody>
    </table>
    <table width="500" border="1" align="center" >
        <tr>
                <th><strong>Mã Số</strong></th>
                <th><strong>Tên Khách Hàng</strong></th>
                <th><strong>Mã Đơn</strong></th>
                <th><strong>Giá Tiền</strong></th>
        </tr>
        <tbody>
        <?php
            $id=1;
            $result=pg_query($conn,"Select * from customer");
            while($row=pg_fetch_array($result,NULL, PGSQL_ASSOC))
            {
            ?>
			<tr>
              <td><?php echo $row["id"];?></td>
              <td><?php echo $row["name"];?></td>
              <td><?php echo $row["idO"];?></td>
              <td><?php echo $row["pr"];?></td>
            </tr>
            <?php $id++;}?>
            </tbody>
    </table>
</body>
</html>