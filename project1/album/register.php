<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>sign in</title>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.4.1/dist/css/bootstrap.css">
<link href="https://fonts.googleapis.com/css2?family=Josefin+Sans&display=swap" rel="stylesheet">
</head>

<body>
<div class="px-4 py-5 my-5 text-center">
    <img src="Logo.png" >
    <div class="text-white bg-dark">

      </div>
    </div>
<div class="text-white bg-dark ">
<form  action="register_db.php" class="form-horizontal " method="post">
 <?php include('errors.php'); ?>
        <?php if (isset($_SESSION['error'])) : ?>
            <div class="error">
                <h3>
                    <?php 
                        echo $_SESSION['error'];
                        unset($_SESSION['error']);
                    ?>
                </h3>
            </div>
        <?php endif ?>
<fieldset>

<!-- Form Name -->
<h1 class="text-dark text-center style = ont-family: 'Josefin Sans', sans-serif;">Sign In</h1>
<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="username">User</label>  
  <div class="col-md-4">
  <input id="textinput" name="username" type="text" placeholder="" class="form-control input-md" autofocus >
  </div>
</div>

<div class="form-group">
  <label class="col-md-4 control-label" for="email">Email</label>  
  <div class="col-md-4">
  <input id="textinput" name="email" type="text" placeholder="" class="form-control input-md" autofocus >
    
  </div>
</div>

<!-- Password input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="password_1">Password</label>
  <div class="col-md-4">
    <input id="passwordinput" name="password_1" type="password" placeholder="" class="form-control input-md" autofocus required>
  </div>
</div>

<div class="form-group">
  <label class="col-md-4 control-label" for="password_2">Confirm Password</label>
  <div class="col-md-4">
    <input id="passwordinput" name="password_2" type="password" placeholder="" class="form-control input-md" autofocus required>
  </div>
</div>


<!-- Textarea -->
<div class="form-group">
  <label class="col-md-4 control-label" for="address">Address</label>
  <div class="col-md-4">                     
    <textarea class="form-control" id="textarea" name="address"></textarea>
  </div>
</div>


<div class="form-group">
  <label class="col-md-4 control-label" for="phone">phone</label>
  <div class="col-md-4">
    <input id="bumberinput" name="phone" type="bumber" placeholder="" class="form-control input-md" autofocus required>
  </div>
</div>

<!-- Button -->
<div class="form-group">
  <label class="col-md-4 control-label" for="Submit"></label>
  <div class="col-md-4">
    <button name="reg_user" class="btn btn-success">Sign In</button>
    <button  class="btn btn-white" ><a href="Login.php" > Cancel </a></button>

<br><br><br><br><br>

<br><br><br><br><br><br><br>
</fieldset>
</form>
</body>
</html>>