<?php
session_start();
if (!isset($_SESSION['admin'])){
  header("Location: Login1.html");
}
else
{
@mysql_connect("localhost","root","") or die ("Nu se poate conecta la serverul MySQL");
mysql_select_db("quizme") or die("Nu se poate selecta baza de date");
$ID_Event=$_POST['DID_Event'];		
$query=@mysql_query("Delete from Event  where ID_Event ='$ID_Event'");
	header("Location: Event.php");
}
?>