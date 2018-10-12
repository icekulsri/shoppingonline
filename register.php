<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="register.css?v=<?php echo filemtime('register.css'); ?>" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO"
        crossorigin="anonymous">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script type="text/jvascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script type="text/jvascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <meta http-equiv=Content-Type content="text/html; charset=utf-8">
</head>

<div class="register-block">
    <div class="container">
        <div class="row">
            <div class="col-md-4 register-left">
                <div class="text-center">
                    <h3>ยินดีต้อนรับเข้าสู่ IMshopping</h3>
                    <p>เว็บซื้อเครื่องสำอางออนไลน์ ที่รวบรวมเครื่องสำอางที่ดีและมีคุณภาพในราคาถูก</p>
                </div>
            </div>
           
            <div class="col-md-8 register-right">
                <div class="register-sec">
                    <h2 class="text-center">ลงทะเบียน</h2>

                    <form class="register-form" action="adduser.php" method="post">
                    <div class="row register-form">
                        <div class="col-md-6">
                            <div class="form-group">
                                <input type="text" class="form-control " name="firstname" id="firstname" placeholder="ชื่อ *" required/>
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control " name="lastname" id="lastname" placeholder="นามสกุล *" required/>
                            </div>
                            <div class="form-group">
                                <input type="text" minlength="10" maxlength="10" name="phone" id="phone" class="form-control"
                                 placeholder="เบอร์โทรศัพท์ *" required/>
                            </div>
                            <div class="form-group">
                                <input type="email" class="form-control " name="email" id="email" placeholder="อีเมล *" value="" required/>
                            </div>
                            <div class="form-group">
                                <div class="gender">
                                    <label class="radio inline">
                                        <input type="radio" name="gender" for="female" value="0" checked>
                                        <span> หญิง </span>
                                    </label>
                                    <label class="radio inline">
                                        <input type="radio" name="gender" for="male" value="1">
                                        <span> ชาย </span>
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <input type="text" class="form-control " name="username" id="username" placeholder="ชื่อผู้ใช้ *" required>
                            </div>
                            <div class="form-group">
                                <input type="password" class="form-control " name="password" id="password" placeholder="รหัสผ่าน *" value="" required/>
                            </div>
                            <div class="form-group">
                                <input type="password" class="form-control " name="password2" id="password2" placeholder="ยืนยันรหัสผ่าน *" value="" required/>
                            </div>
                            <div class="form-group">
                                <select class="form-control ">
                                    <option class="hidden" selected disabled>โปรดเลือกคำถามที่ต้องตอบเมื่อคุณลืมรหัสผ่าน</option>
                                    <option>วันเดือนปีเกิดของคุณ</option>
                                    <option>เบอร์โทรศัพท์มือถือเก่าของคุณ</option>
                                    <option>ชื่อสัตว์เลี้ยงที่คุณรัก</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control " placeholder="คำตอบของคุณ *" value=""/>
                                
                            </div>
                            <input type="submit" class="btn btnRegister float-right" value="ลงทะเบียน" />
                        </div> 
                    </div>
                    </form>

                    <div class="text-center go-login">
                        <label>กลับไปยังหน้า</label>
                        <a href="http://localhost/login.php">เข้าสู่ระบบ</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

</html>