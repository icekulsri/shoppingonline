<!-- <?php 
session_start();
unset($_SESSION['ses_id']);
unset($_SESSION['username']);
unset($_SESSION['status']);
session_destroy();
echo "<meta http-equiv= 'refresh' content ='1; URL = login.php'>";
?> -->

<?php
session_start();
session_destroy();
header("location:login.php");
?>