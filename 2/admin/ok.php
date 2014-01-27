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
<div class="header">الموافقة على اضافات الزوار</div>
<div class="content">
<?php

if (isset($_SESSION['admin'])) {
    include '../config.php';
    if (isset($_GET['id'])) {
        $id = intval($_GET['id']);
        $do = mysql_query("SELECT * FROM vis where id='$id'");
        $row = mysql_fetch_assoc($do);
        $sql = mysql_query("INSERT INTO `posts` (`id` ,`content`) VALUES ( NULL , '$row[content]')");
        $sql2 = mysql_query("DELETE FROM vis WHERE id='$id'");

        if ($do && $sql && $sql2) {

            echo "تم الموافقة بنجاح
        <br /><br />
            <a href=\"main.php\">عودة الى الرئيسية</a>
            
<br />
<a href=\"ok.php\">عودة الى صفحة الموافقة</a><br /><br />
        
        
        ";

        } else {

            echo "
        خطأ في احدى العمليات
        <br /><br />
            <a href=\"main.php\">عودة الى الرئيسية</a>
            
<br />
<a href=\"ok.php\">عودة الى صفحة الموافقة</a><br /><br />";

        }


    } else {
        $sql = mysql_query("SELECT * FROM vis");

        echo "<table border=2 cellpadding=1 cellspacing=1 style=border-collapse: collapse; width=%50 align=center >";
        echo "<td width=10% align=center bgcolor=A4A4A4>id</td>";
        echo "<td  align=center>المحتوى</td>";
        echo "<td width=10% align=center> موافقة </td>";
        echo "<td width=10% align=center> حذف </td>";

        while ($row = mysql_fetch_assoc($sql)) {

            echo "<tr>";
            echo "<td width=10% align=center bgcolor=A4A4A4> $row[id] </td>";
            echo "<td width=20% align=center> $row[content] </td>";
            echo "<td width=10% align=center><p align=center><a href=?id=$row[id] >موافقة</a> </td>";
            echo "<td width=10% align=center><p align=center><a href=nok.php?id=$row[id] >حذف</a> </td>";
            echo "</tr>";
        }
        echo "</table>";
    }
} else {


    echo "<META HTTP-EQUIV='Refresh' CONTENT='1; url=index.php'>";
}



?>
</div>

<div class="footer">برمجة: <a href=\"http://www.traidnt.net/vb/u98480/\">mobh13</a></div>

</body>
</html>
