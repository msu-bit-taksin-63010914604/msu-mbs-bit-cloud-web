<?php
@session_start();
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>LOGIN</title>
</head>

<body> 

<form method="post" action="">
	Username <input name="auser" type="text" autofocus required> <br>
	Password <input name="apwd" type="password" autofocus required> <br>
    <input type="submit" name="Submit" value="LOGIN">
    
</form>
<?php
if(isset($_POST['Submit'])){
	include_once("connectdb.php");
	$sql="SELECT * FROM `admin` WHERE `a_user` = '{$_POST['auser']}' and `a_pwd`='{$_POST['apwd']}'"; 
	
	$rs = mysqli_query($conn,$sql);
	$num = mysqli_num_rows($rs);
	
	if($num>0){
	$data = mysqli_fetch_array($rs);
	$_SESSION['ses_aid'] = $data['a_id'];
	$_SESSION['ses_aname'] = $data['a_name'];	
	echo "<script>";
	echo "window.location='bmj1.php'";
	echo "</script>";
		
		}
		else{
	echo "<script>";
	echo "alert('User หรือ Password ไม่ถูกต้อง');";
	echo "</script>";
			}
	}
?>
 <a  href="index.php" class="btn btn-outline-danger btn-lg px-4 me-sm-3 ">กลับไปหน้าล็อกอิน</a>
</body>
</html>