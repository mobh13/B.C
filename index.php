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
<div class="header">برودكاست</div>
<div class="content">
<?php
include"config.php";

$sql="select * from posts";
$do=mysql_query($sql);

while($row=mysql_fetch_assoc($do)){
    
    echo"$row[content]";
    echo"<br /> <p>------------------------</p><br />";
    
}


?>
</div>
<div class="footer">جميع الحقوق محفوظة</div>

</body>
</html>
