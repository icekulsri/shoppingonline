<?php

session_start();
include("connect.php");
//status 1 =User   status 2 =Admin
$username  = $_POST['username'];
$password =  $_POST['password'];
//$username = mysqli_real_escape_string($con,$_POST['username']);
//$password = mysqli_real_escape_string($con,$_POST['password']);

if($username == ''){
    echo "check username";
}
else if ($password == ''){
    echo "check password";
}
else{
    $salt = '12adff56dfdg';
    $hash_password = hash_hmac('sha256',$password, $salt);
    //echo $hash_password;
    $sql = "SELECT * FROM table_login WHERE username = '$username' and password = '$hash_password'";
    $result = mysqli_query($con,$sql);
    $row = $result -> num_rows;
    //count data

    if($row <=0){ //หาไม่เจอ
         //echo "<meta http-equiv= 'refresh' content ='1; URL = login.php'>";
        ?>           
        <script>
            alert("กรุณาตรวจสอบ ชื่อผู้ใช้ และ รหัสผ่าน ของคุณ");
            window.location = "login.php";
        </script>
<?php       
    }
    else {
          while ($user = mysqli_fetch_array($result)){
               //user
               if($user ['status']== 1 ){
                // create session to put data
                $_SESSION['ses_id'] = session_id();
                $_SESSION['username']= $user['username'];
                $_SESSION['status'] = "1";
                // send to user page
                echo "<meta http-equiv= 'refresh' content ='1; URL = user.php'>";
               }  
               else if
                ($user ['status']== 2 ){
                // create session to put data
                 $_SESSION['ses_id'] =session_id();
                 $_SESSION['username']= $user['username'];
                 $_SESSION['status'] = "2";
                 // send to admin page
                 echo "<meta http-equiv= 'refresh' content ='1; URL = admin.php'>";
               }
        }
    }
}

?> 


