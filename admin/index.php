<?php
session_start();
/**
 * @author Mohammed.A.Shaheed
 * @copyright 2012
 */


if(isset($_SESSION['admin'])){
    
    echo"<p>انت مسجل الدخول مسبقا لتوجه الى لوحة التحكم</p> <br/> <a href='main.php'>اضغط هنا</a>";
}else{
    
    echo"<form method=\"POST\" action=\"login.php\">
اسم المستخدم:  <input type=\"text\" value=\"اسم المستخدم\" name=\"username\" /><br/>
كلمة المرور:    <input  type=\"password\" value=\"كلمة المرور\" name=\"pass\"/><br/>

<input type=\"submit\" value=\"تسجيل الدخول\" name=\"go\" />";
    
}
?>