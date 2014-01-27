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
<div class="header"> حذف  اضافات الزوار</div>
<div class="content">
<?php

if (isset($_SESSION['admin'])) {
    include '../config.php';
    if (isset($_GET['id'])) {
        $id = intval($_GET['id']);
        $sql2 = mysql_query("DELETE FROM vis WHERE id='$id'");

        if ($sql2) {

            echo "تم الحذف بنجاح
        <br /><br />
            <a href=\"main.php\">عودة الى الرئيسية</a>
            
<br />
<a href=\"ok.php\">عودة الى صفحة الموافقة</a><br /><br />
        
        
        ";

        } else {

            echo "
        خطأ في الحذف
        <br /><br />
            <a href=\"main.php\">عودة الى الرئيسية</a>
            
<br />
<a href=\"ok.php\">عودة الى صفحة الموافقة</a><br /><br />";

        }


    }

}
?>
</div>

<div class="footer">برمجة: <a href=\"http://www.traidnt.net/vb/u98480/\">mobh13</a></div>

</body>
</html>
