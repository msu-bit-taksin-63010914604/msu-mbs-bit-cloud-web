<?php
error_reporting(E_NOTICE);

	@session_start();
	include("connectdb.php");
	@$sql = "select * from products where p_id = '{$_GET['id']}' ";
	$rs = mysqli_query($conn, $sql) ;
	$data = mysqli_fetch_array($rs);
	@$id = $_GET['id'] ;
	if(isset($_GET['id'])) {
		$_SESSION['sid'][$id] = $data['p_id'];
		$_SESSION['sname'][$id] = $data['p_name'];
		$_SESSION['sprice'][$id] = $data['p_price'];
		$_SESSION['sdetail'][$id] = $data['p_details'];
		@$_SESSION['sitem'][$id]++;
	}
?>

<!doctype html>
<html lang="en" class="h-100">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.108.0">
     <link rel="canonical" href="https://getbootstrap.com/docs/5.3/examples/cover/">
     <link href="../assets/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>ตะกร้าสินค้า</title>

    <!-- Custom styles for this template -->
    <link href="cover.css" rel="stylesheet">
  </head>
  <body class="d-flex h-100 text- text-bg-white">
    
<div class="cover-container d-flex w-100 h-100 p-3 mx-auto flex-column">
  <header class="mb-auto">
    <div>
      <h3 class="float-md-start mb-0">BMJ</h3>
      <nav class="nav nav-masthead justify-content-center float-md-end">
        <a class="nav-link fw-bold py-1 px-0 active" aria-current="page" href="index.php" class="btn btn-danger">กลับไปเลือกสินค้า</a>
      </nav>
    </div>
  </header>


<blockquote>
<center>
<img src="Logo.png"/>
</center>
<h2 text-center>ตะกร้าสินค้า</h2>
<?php
if(empty($_SESSION['sid'])) {
?>

<?php } ?>
    
<br><br>
<table width="100%" class="table">
	<tr>
		<th width="5%">ที่</th>
		<th width="40%">ชื่อสินค้า</th>
		<th width="20%">ราคา</th>
		<th width="20%">รวม</th>
		<th width="15%">&nbsp;</th>
	</tr>
<?php
if(!empty($_SESSION['sid'])) {
	foreach($_SESSION['sid'] as $pid) {
		@$i++;
		$sum[$pid] = $_SESSION['sprice'][$pid] * $_SESSION['sitem'][$pid] ;
		@$total += $sum[$pid] ;
?>
	<tr>
		<td><?=$i;?></td>
		<td><?=$_SESSION['sname'][$pid];?></td>
		<td><?=number_format($_SESSION['sprice'][$pid],0);?></td>
		<td> <?=$_SESSION['sitem'][$pid];?></td>
		<td><?=number_format($sum[$pid],0);?></td>
		<td><a href="clear2.php?id=<?=$pid;?>" class="btn btn-danger">ลบ</a></td>
	</tr>
<?php } // end foreach ?>
	<tr>
		<td colspan="5" align="right"><strong>รวมทั้งสิ้น</strong> &nbsp; </td>
		<td><strong><?=number_format($total,0);?></strong></td>
		<td><strong>บาท</strong></td>
	</tr>
<?php 
} else {
?>
	<tr>
		<td colspan="7" height="50" align="center">ไม่มีสินค้าในตะกร้า</td>
	</tr>
<?php } // end if ?>
</table>


<a href="javascript:void(null)"
onclick="alert('กรุณาสมัครสมาชิกหรือล็อกอินก่อน')">
<b><INPUT TYPE="button" class="btn btn-success btn-center" VALUE="สั่งซื้อสินค้า"></b></a>


</blockquote>


  </main>

  <footer class="mt-auto text-white-50">
    
  </footer>
  <footer class="mt-auto text-white-50">
    
  </footer>
</div>


    
  </body>
</html>
