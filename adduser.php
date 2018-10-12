<?php
    require './connect.php';

    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $phone= $_POST['phone'];
    $email= $_POST['email'];
    $gender= $_POST['gender'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $password2 = $_POST['password2'];
   
    if($password != $password2){
        ?>
<script>
    alert("กรุณาตรวจสอบรหัสผ่าน");
    window.location = "register.php";
</script>
<?php
    }
    else if($password == $password2){
        $salt = '12adff56dfdg';
        $hash_password = hash_hmac('sha256',$password, $salt);

        $query = "INSERT INTO table_login (username, password,status, firstname, lastname,phone, email, gender) 
        VALUES ('$username','$hash_password','1','$firstname','$lastname','$phone','$email','$gender')";
        //echo $query;
        $result = mysqli_query($con,$query);
        
        if($result){
?>

var_dump("aaa");
<script>
    alert("ลงทะเบียนสำเร็จ");
    window.location = "login.php";
</script>
<?php            
        }else{
?>
<script>
    alert("กรุณาตรวจสอบและกรอกข้อมูลใหม่อีกครั้ง");
    window.location = "register.php";
</script>
<?php
        }

    } 
?>