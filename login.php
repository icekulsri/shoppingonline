<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" media="screen" href="login.css?v=<?php echo filemtime('login.css'); ?>" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO"
        crossorigin="anonymous">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script type="text/jvascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script type="text/jvascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <meta http-equiv=Content-Type content="text/html; charset=utf-8">
</head>

<body>
    <div class="login-block">
        <div class="container">
            <div class="row">
                <div class="col-md-4 login-sec">
                    <h2 class="text-center">เข้าสู่ระบบ</h2>
                    <form class="login-form" action="checklogin.php" method="post">
                        <div class="form-group">
                            <label for="InputUsername" class="text-uppercase">ชื่อผู้ใช้</label>
                            <input type="text" class="form-control" name="username" id="username" placeholder="Username">
                        </div>
                        <div class="form-group">
                            <label for="InputPassword1" class="text-uppercase">รหัสผ่าน</label>
                            <input type="password" class="form-control" name="password" id="password" placeholder="Password">
                        </div>
                        <button type="submit" class="btn btn-login float-right">ยอมรับ</button>
                        <div class="go-register">
                            <label>ต้องการสมัครเป็นสมาชิก</label>
                            <a href="http://localhost/register.php">คลิก</a>
                        </div>
                    </form>
                </div>
                <div class="col-md-8 banner-sec">
                    <div class="text-center">