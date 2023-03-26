<?php
include("chk_login.php");
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>เพิ่มสินค้า</title>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.4.1/dist/css/bootstrap.css">
</head>

<body>

<form class="form-horizontal" method="post" action="" enctype="multipart/form-data">
<fieldset>

<!-- Form Name -->
<legend>เพิ่มสินค้า</legend>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="name">ชื่อสินค้า</label>  
  <div class="col-md-4">
  <input name="p_name" type="text" placeholder="" class="form-control input-md" required>
    
  </div>
</div>


<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="price">ราคา</label>  
  <div class="col-md-4">
  <input name="p_price" type="number" placeholder="" class="form-control input-md" required>
    
  </div>
</div>



<!-- Textarea -->
<div class="form-group">
  <label class="col-md-4 control-label" for="p_datails">รายละเอียดสินค้า</label>
  <div class="col-md-4">                     
    <textarea class="form-control" name="p_details"></textarea>
  </div>
</div>



<!-- File Button --> 
<div class="form-group">
  <label class="col-md-4 control-label" for="addimg">เพิ่มรูปสินค้า</label>
  <div class="col-md-4">
    <input id="addimg" name="image" class="input-file" type="file">
  </div>
</div>




<!-- Button -->
<div class="form-group">
  <label class="col-md-4 control-label" for="Submit"></label>
  <div class="col-md-4">
    <button id="Submit" name="Submit" class="btn btn-success">บันทึก</button>
  </div>
</div>

</fieldset>
</form>




<?php
if(isset($_POST['Submit'])){
	include_once("connectdb.php");
	$sql = "INSERT INTO `products` (`p_id`,`p_name`, `p_price`, `p_details`) VALUES (NULL,'{$_POST['p_name']}', '{$_POST['p_price']}','{$_POST['p_details']}' );";
	//var_dump($sql);exit;
	mysqli_query($conn,$sql)or die ('เพิ่มข้อมูลไม่ได้');
	$id = mysqli_insert_id($conn);
	@copy($_FILES['image']['tmp_name'],"product-images/".$id.".jpg");
	echo "<script>";
	echo "alert('เพิ่มข้อมูลสำเร็จ');";
	echo "window.location='index2.php'";
	echo "</script>";
	}
?>

</body>
</html>