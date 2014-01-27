<?php

/**
 * @author Mohammed.A.Shaheed
 * @copyright 2012
 */

$host="localhost";//اسم السيرفر
$db_name="bc";//قاعدة البيانات
$db_pass="";//باسوورد
$db_user="root";//اسم مستخدم قاعدة البيانات
$conl=6;//عدد المشاركات في كل صفحة
$con = mysql_connect("$host", "$db_user", "$db_pass" ) or die("لايمكن الأتصال بالقاعدة" );
mysql_select_db("$db_name", $con ) or die("لايمكن تحديد القاعدة" );
mysql_query("SET character_set_client=utf8" );
mysql_query("SET character_set_connection=utf8" );
mysql_query("SET character_set_database=utf8" );
mysql_query("SET character_set_results=utf8" );
mysql_query("SET character_set_server=utf8" );


?>