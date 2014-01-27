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
<div class="header">اضافة برودكاست</div>
<div class="content">
<?php
if (isset($_SESSION['admin'])) {

    echo "اهلا بك يا $_SESSION[admin] <br/><br/><br/>";
    if (isset($_POST['go'])) {

        $broc = $_POST['bc'];
        include "../config.php";
        $sql = mysql_query("INSERT INTO `posts` (`id` ,`content`) VALUES ( NULL , '$broc' )") or
            die("erroe");

        if ($sql) {

            echo "تم اضافة البرودكاست بنجاح 
            <br /><br />
            <a href=\"main.php\">عودة الى الرئيسية</a>
            
<br />
<a href=\"main.php\">عودة الى صفحة الاضافة</a><br /><br />";

        } else {

            echo "خطأ لم يتم اضافة البرودكاست<br />";

        }
    } else {

        echo "<form method=\"POST\" action=\"\" >
        
        المحتوى:<br />
        <textarea name=\"bc\"></textarea>
        
        <br /><br /><input type=\"submit\" value=\"ارسل\" name=\"go\" />
        
        </form>";


    }


} else {


    echo "<META HTTP-EQUIV='Refresh' CONTENT='1; url=index.php'>";
}


?>
</div>

<div class="footer">برمجة: <a href=\"http://www.traidnt.net/vb/u98480/\">mobh13</a></div>

</body>
</html>
