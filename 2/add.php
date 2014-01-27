<?php


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
	background-color: #F66;
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
	background-color: #F66;
	border:0px;
	padding-top:2px;
	padding-bottom:2px;
	text-align:center;}
</style>
<title>برودكاست</title>
</head>

<body>
<div class="header">إضافة برودكاست</div>
<div class="content">
<?php
include "config.php";
if (isset($_POST["go"])) {
    $content = $_POST["content"];
    $content = stripslashes($content);
    $content = mysql_real_escape_string($content);

    $sql = "INSERT INTO `vis` (`id` ,`content`)VALUES (NULL , '$content');";
    $do = mysql_query($sql);

    if ($do) {

        echo "نم الاضافة بنجاح";
        echo "<br /><a href=\"add.php\">رجوع الى صفحة الاضافة</a>";
        echo "<br /><a href=\"index.php\">رجوع الى الرئيسية<a/>";
    } else {


        echo "خطأ في الاضافة";
        echo "<br /><a href=\"add.php\">رجوع الى صفحة الاضافة</a>";
        echo "<br /><a href=\"index.php\">رجوع الى الرئيسية<a/>";
    }
} else {
    echo "
<p>ملاحظة:المنشورات المضافة لايتم عرضها الا بعد ان تراجع من قبل الادارة</p><br />
<form action=\"\" method=\"POST\">
<textarea name=\"content\" id=\"content\"></textarea>
<br /><input name=\"go\" id=\"go\"value=\"ارسل\" type=\"submit\" />

</form>
";
}
?>

</div>

<div class="footer">برمجة: <a href=\"http://www.traidnt.net/vb/u98480/\">mobh13</a></div>

</body>
</html>
