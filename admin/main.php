<?php
session_start();
/**
 * @author Mohammed.A.Shaheed
 * @copyright 2012
 */
if(isset($_SESSION['admin'])){
    
    echo"اهلا بك يا $_SESSION[admin] <br/><br/><br/>";
    echo"<a  href=\"add.php\" >اضافة برودكاست جديد</a><br/><br/>";
    echo"<a  href=\"delete.php\">حذف برودكاست</a><br/><br/><br/>";
    echo"جميع الحقوق محفوظة لـ <a  href=\"http://www.traidnt.net/vb/u98480/\">mobh13</a><br/>";
    
    
}else{
    
    
    echo "<META HTTP-EQUIV='Refresh' CONTENT='1; url=index.php'>";
}


?>