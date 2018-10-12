<?php
session_start();
// check login
//ยังไม่ได้ login
if($_SESSION['ses_id']== ''){
    echo "<meta http-equiv= 'refresh' content ='1; URL = login.php'>";
}// login แล้ว
if($_SESSION['status']!=1){
    echo "<meta http-equiv= 'refresh' content ='1; URL = logout.php'>";
}
else {
?>
<h1> Hello </h1>
<a href= "logout.php" class = "btn btn-primary"> logout</a>
<?php
}
?>

<!-- <?php
session_start();
if($_SESSION['UserID'] == "")
{
echo "Please Login!";
exit();
}
if($_SESSION['Status'] != "ADMIN")
{
echo "This page for Admin only!";
exit();
}  
mysqli_connect("localhost","root","root");
mysqli_select_db("member");
$strSQL = "SELECT * FROM member WHERE UserID = '".$_SESSION['UserID']."' ";
$objQuery = mysqli_query($strSQL);
$objResult = mysqli_fetch_array($objQuery);
?>
<html>
<head>
<title>IMShopping</title>
</head>
<body>
Welcome to Admin Page! <br>
<table border="1" style="width: 300px">
<tbody>
<tr>
<td width="87"> &nbsp;Username</td>
<td width="197"><?php echo $objResult["Username"];?>
</td>
</tr>
<tr>
<td> &nbsp;Name</td>
<td><?php echo $objResult["Name"];?></td>
</tr>
</tbody>
</table>
<br>
<a href="edit_profile.php">Edit</a><br>
<br>
<a href="logout.php">Logout</a>
</body>
</html> -->
