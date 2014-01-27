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
<div class="header">حذف مشاركة</div>
<div class="content">
<?php

if (isset($_SESSION['admin'])) {
    include ("../config.php");

    $id = intval($_GET['id']);
    $sql = "DELETE FROM posts WHERE id='$id'";
    $result = mysql_query($sql);
    if ($result) {

        echo "تم الحذف بنجاح<br />

<a href=\"main.php\">عودة الى الرئيسية</a><br />
<a href=\"delete.php\">عودة الى صفحة الحذف</a>
";

    } else {
        echo "خطأ في الحذف";
    }
    mysql_close();
} else {


    echo "<META HTTP-EQUIV='Refresh' CONTENT='1; url=index.php'>";
}



?>
</div>

<div class="footer">برمجة: <a href=\"http://www.traidnt.net/vb/u98480/\">mobh13</a></div>

</body>
</html>
