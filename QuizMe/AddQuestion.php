<?php
session_start();$admin=sessionStorage.getItem("lastname");
if (!isset($admin)){
  header("Location: Login1.html");
}
else
{
@mysql_connect("localhost","root","") or die ("Nu se poate conecta la serverul MySQL");
mysql_select_db("quizme") or die("Nu se poate selecta baza de date");
 $Question=$_POST['InputQuestion'];
 $Category=$_POST['InputCategory'];
  $Difficulty=$_POST['InputDifficulty'];
 $Answer=$_POST['InputAnswer']; 
$query=@mysql_query("insert into Event  values (NULL,'$Question','$Category','$Difficulty','$Answer')"); 
echo "Question added.";
}
?>