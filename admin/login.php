<?php
session_start();
/**
 * @author Mohammed.A.Shaheed
 * @copyright 2012
 */

include"../config.php";
if ($_POST['go']) {

    $username = $_POST['username'];
    $password = $_POST['pass'];
    $username = stripslashes($username);
    $password = stripslashes($password);
    $username = mysql_real_escape_string($username);
    $password = mysql_real_escape_string($password);
    $sql = "select username,pass from admin";

    $con = mysql_query($sql);
    $row = mysql_fetch_array($con);
    if ($row['pass'] == $password and $row["username"] == $username) {
        $_SESSION['admin'] = $username ;
        echo "تم تسجيل الدخول بنجاح سيتم تحويلك بعد ثواني";
        echo "<META HTTP-EQUIV='Refresh' CONTENT='1; url=main.php'>";

    } else {

   echo "خطأ في تسجيل الدخول سيتم تحويل الى صفحة تسجيل الدخول من جديد";
        echo "<META HTTP-EQUIV='Refresh' CONTENT='1; url=index.php'>";
    }
} else {


    echo "please fill the form";
}

?>