<?php
session_start();
if (!isset($_SESSION['admin'])){
  header("Location: Login1.html");
}
else
{
@mysql_connect("localhost","root","") or die ("Nu se poate conecta la serverul MySQL");
mysql_select_db("quizme") or die("Nu se poate selecta baza de date");
//echo $ID_Event="11";
 $Denumire=$_POST['InputDenumire'];
 $Start=$_POST['InputStart'];
  $Stop=$_POST['InputStop'];
 $Descriere=$_POST['InputDescriere']; 
$query=@mysql_query("insert into Event  values (NULL,'$Denumire','$Start','$Stop','$Descriere')"); 
header("Location: Event.php");
}
?>