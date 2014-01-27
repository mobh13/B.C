<?php

/**
 * @author Mohammed.A.Shaheed
 * @copyright 2012
 */

include'../config.php';

$sql= mysql_query("SELECT * FROM posts");

  echo "<table border=2 cellpadding=1 cellspacing=1 style=border-collapse: collapse; width=%50 align=center >";
echo "<td width=10% align=center bgcolor=A4A4A4>id</td>";
echo "<td  align=center>المحتوى</td>";
echo "<td width=30% align=center> حذف </td>";

while($row=mysql_fetch_assoc($sql)){
 
    	echo "<tr>";
	echo "<td width=10% align=center bgcolor=A4A4A4> $row[id] </td>";
	echo "<td width=30% align=center> $row[content] </td>";
     echo"<td width=30% align=center><p align=center><a href=delete2.php?id=$row[id] >حذف</a> </td>";
	echo "</tr>";
}
echo"</table>";


?>