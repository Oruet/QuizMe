<?php
session_start();
$admin=sessionStorage.getItem("lastname");
if (!isset($admin)){
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
// $d1=strtotime("$Start");
// $d2=strtotime("$Stop");
//echo $S1=date("Y-m-d h:m", $Start);
//echo $S2=date("Y-m-d h:m", $Stop);
 $Descriere=$_POST['InputDescriere']; 
$query=@mysql_query("insert into Event  values (NULL,'$Denumire','$Start','$Stop','$Descriere')"); 
//$query=mysql_query("insert into Event  values('$Denumire','$Start','$Stop','$Descriere')"); 

echo "Event added.";
}



?>