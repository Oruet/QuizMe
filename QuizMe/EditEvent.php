<?php
session_start();
if (!isset($_SESSION['admin'])){
  header("Location: Login1.html");
}
else
{
@mysql_connect("localhost","root","") or die ("Nu se poate conecta la serverul MySQL");
mysql_select_db("quizme") or die("Nu se poate selecta baza de date");
$ID_Event=$_POST['EID_Event'];	
 $Denumire=$_POST['EInputDenumire'];
 $Start=$_POST['EInputStart'];
  $Stop=$_POST['EInputStop'];
 $Descriere=$_POST['EInputDescriere']; 	
$query=@mysql_query("Update Event set Denumire ='$Denumire', Start ='$Start', Stop ='$Stop', Descriere ='$Descriere' where ID_Event ='$ID_Event'");
	header("Location: Event.php");
}
?>