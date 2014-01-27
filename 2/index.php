<?php
include "config.php";

    include_once ('function.php');

$page = (int) (!isset($_GET["page"]) ? 1 : $_GET["page"]);
    	$limit = $conl;
    	$startpoint = ($page * $limit) - $limit;
        
        //to make pagination
        $statement = "`posts`";
?>

<!DOCTYPE html PUBLIC "-//WAPFORUM//DTD XHTML Mobile 1.0//EN" "http://www.wapforum.org/DTD/xhtml-mobile10.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<link href="css/pagination.css" rel="stylesheet" type="text/css" />
	<link href="css/B_blue.css" rel="stylesheet" type="text/css" />
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


$query = mysql_query("SELECT * FROM {$statement} LIMIT {$startpoint} , {$limit}");


while ($row = mysql_fetch_assoc($query)) {

    echo "$row[content]";
    echo "<br /> <p>------------------------</p><br />";


}
echo "<a href=\"add.php\">اضافة<a/>"

?>
<br />
<?php
	echo pagination($statement,$limit,$page);
?>

</div>

<div class="footer">برمجة: <a href=\"http://www.traidnt.net/vb/u98480/\">mobh13</a></div>

</body>
</html>
