<?php
session_start();

?>

<!DOCTYPE html PUBLIC "-//WAPFORUM//DTD XHTML Mobile 1.0//EN" "http://www.wapforum.org/DTD/xhtml-mobile10.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<style>
body{
margin-left:65px;
margin-right:65px;
margin-top:40px;
 direction: rtl;}
.header{
	background-color: #C6C653;
	border:0px;
	padding-top:2px;
	padding-bottom:2px;
	text-align:center;
	}
.content
{border: 1px dotted #CCC;
padding-top:10px;
	padding-bottom:10px;
	text-align:center;}
.footer{
	background-color: #C6C653;
	border:0px;
	padding-top:2px;
	padding-bottom:2px;
	text-align:center;}
</style>
<title>لوحة التحكم</title>
</head>

<body>
<div class="header">تسجيل الدخول</div>
<div class="content">
<?php
include "../config.php";
if ($_POST['go']) {

    $username = $_POST['username'];
    $password = $_POST['pass'];
    $username = stripslashes($username);
    $password = stripslashes($password);
    $username = mysql_real_escape_string($username);
    $password = mysql_real_escape_string($password);
    $sql = "select username,pass from admin";

    $con = mysql_query($sql);
    $row = mysql_fetch_array($con);
    if ($row['pass'] == $password and $row["username"] == $username) {
        $_SESSION['admin'] = $username;
        echo "تم تسجيل الدخول بنجاح سيتم تحويلك بعد ثواني";
        echo "<META HTTP-EQUIV='Refresh' CONTENT='1; url=main.php'>";

    } else {

        echo "خطأ في تسجيل الدخول سيتم تحويل الى صفحة تسجيل الدخول من جديد";
        echo "<META HTTP-EQUIV='Refresh' CONTENT='1; url=index.php'>";
    }
} else {


    echo "please fill the form";
}
?>
</div>

<div class="footer">برمجة: <a href=\"http://www.traidnt.net/vb/u98480/\">mobh13</a></div>

</body>
</html>
