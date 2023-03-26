<?php
include("chk_login.php");
?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>แสดงข้อมูลสินค้า</title>
</head>

<body>

<?php

	include_once("connectdb.php");

	
	$sql = "SELECT * FROM products";
	$rs = mysqli_query($conn,$sql);
	
	while($data= mysqli_fetch_array($rs)){
		$img = $data['p_id'];
		echo "<img src='product-images/$img.jpg' width='400'><br>";
		echo $data['p_name']."<br>";
		echo $data['p_price']." บาท <br>";
		echo $data['p_details']."<br>";	
		echo "<a href='update.php?id=$img';'>แก้ไข</a> <br>";
		echo "<a href='delete.php?id=$img'onClick='return confirm(\"ยืนยันการลบ?\");'>ลบ</a>";
		echo "<hr>";	
	}
	
?>
<hr>
<br>
 <a  href="insert2.php" class="btn btn-outline-danger btn-lg px-4 me-sm-3 ">เพิ่มข้อมูล</a>
 <br>
 <a  href="index.php" class="btn btn-outline-danger btn-lg px-4 me-sm-3 ">กลับไปหน้าล็อกอิน</a>

</body>
</html>


