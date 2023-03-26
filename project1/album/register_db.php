<?php 
    session_start();
    include('server.php');
    
    $errors = array();

    if (isset($_POST['reg_user'])) {
        $username = mysqli_real_escape_string($conn, $_POST['username']);
        $email = mysqli_real_escape_string($conn, $_POST['email']);
        $password_1 = mysqli_real_escape_string($conn, $_POST['password_1']);
        $password_2 = mysqli_real_escape_string($conn, $_POST['password_2']);
		$address = mysqli_real_escape_string($conn, $_POST['address']);
		$phone = mysqli_real_escape_string($conn, $_POST['phone']);
		

        if (empty($username)) {
            array_push($errors, "ต้องระบุชื่อผู้ใช้");
            $_SESSION['error'] = "ต้องระบุชื่อผู้ใช้";
        }
        if (empty($email)) {
            array_push($errors, "ต้องระบุอีเมล");
            $_SESSION['error'] = "ต้องระบุอีเมล";
        }
        if (empty($password_1)) {
            array_push($errors, "ต้องระบุรหัสผ่าน");
            $_SESSION['error'] = "ต้องระบุรหัสผ่าน";
        }
        if ($password_1 != $password_2) {
            array_push($errors, "รหัสผ่านทั้งสองไม่ตรงกัน");
            $_SESSION['error'] = "รหัสผ่านทั้งสองไม่ตรงกัน";
        }
		if (empty($address)) {
            array_push($errors, "ต้องระบุที่อยู่");
            $_SESSION['error'] = "ต้องระบุที่อยู่";
        }
		 if (empty($phone)) {
            array_push($errors, "ต้องระบุเบอร์มือถือ");
            $_SESSION['error'] = "ต้องระบุเบอร์มือถือ";
        }

        $user_check_query = "SELECT * FROM user WHERE username = '$username' OR phone = '$phone' LIMIT 1";
        $query = mysqli_query($conn, $user_check_query);
        $result = mysqli_fetch_assoc($query);

        if ($result) { // if user exists
            if ($result['username'] === $username) {
                array_push($errors, "Username already exists");
            }
            if ($result['email'] === $email) {
                array_push($errors, "Email already exists");
			}
            if ($result['address'] === $email) {
                array_push($errors, "address already exists");
			}
            if ($result['phone'] === $email) {
                array_push($errors, "phone already exists");
            }
        }

        if (count($errors) == 0) {
            $password = md5($password_1);

            $sql = "INSERT INTO user (username, email, password, address, phone) VALUES ('$username', '$email', '$password', '$address', '$phone')";
            mysqli_query($conn, $sql);

            $_SESSION['username'] = $username;
            $_SESSION['success'] = "เข้าสู่ระบบสำเร็จ";
            header('location: index.php');
        } else {
            header("location: register.php");
        }
    }

?>
