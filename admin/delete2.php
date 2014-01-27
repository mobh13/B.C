<?php

/**
 * @author Mohammed.A.Shaheed
 * @copyright 2012
 */


include("../config.php");

$id = intval($_GET['id']);
$sql="DELETE FROM posts WHERE id='$id'";
$result=mysql_query($sql);
if($result){
     
echo "تم الحذف بنجاح<br />

<a href=\"main.php\">عودة الى الرئيسية</a>
<a href=\"delete.php\">عودة الى صفحة الحذف</a>
";

}
else {
echo "خطأ في الحذف";
}
mysql_close();


?>