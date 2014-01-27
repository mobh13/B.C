<?php
session_start();
/**
 * @author Mohammed.A.Shaheed
 * @copyright 2012
 * 
 */

if (isset($_SESSION['admin'])) {
    
    echo "اهلا بك يا $_SESSION[admin] <br/><br/><br/>";
    if (isset($_POST['go'])) {

        $broc = $_POST['bc'];
include "../config.php";
        $sql = mysql_query("INSERT INTO `posts` (`id` ,`content`) VALUES ( NULL , '$broc' )")or die("erroe");

        if ($sql) {

            echo "تم اضافة البرودكاست بنجاح 
            <br /><br />
            <a href=\"main.php\">عودة الى الرئيسية</a>
            
<br />
<a href=\"add.php\">عودة الى صفحة الاضافة</a><br /><br />";

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
    echo "جميع الحقوق محفوظة لـ <a href=\"http://www.traidnt.net/vb/u98480/\">mobh13</a><br/>";


} else {


    echo "<META HTTP-EQUIV='Refresh' CONTENT='1; url=index.php'>";
}


?>