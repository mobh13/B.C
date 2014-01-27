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
    include '../config.php';

    $sql = mysql_query("SELECT * FROM posts");

    echo "<table border=2 cellpadding=1 cellspacing=1 style=border-collapse: collapse; width=%50 align=center >";
    echo "<td width=10% align=center bgcolor=A4A4A4>id</td>";
    echo "<td  align=center>المحتوى</td>";
    echo "<td width=30% align=center> حذف </td>";

    while ($row = mysql_fetch_assoc($sql)) {

        echo "<tr>";
        echo "<td width=10% align=center bgcolor=A4A4A4> $row[id] </td>";
        echo "<td width=30% align=center> $row[content] </td>";
        echo "<td width=30% align=center><p align=center><a href=delete2.php?id=$row[id] >حذف</a> </td>";
        echo "</tr>";
    }
    echo "</table>";
} else {


    echo "<META HTTP-EQUIV='Refresh' CONTENT='1; url=index.php'>";
}



?>
</div>

<div class="footer">برمجة: <a href=\"http://www.traidnt.net/vb/u98480/\">mobh13</a></div>

</body>
</html>
