<?php
@mysql_connect("localhost","root","") or die ("Nu se poate conecta la serverul MySQL");
mysql_select_db("quizme") or die("Nu se poate selecta baza de date");
echo $Denumire=$_POST['InputDenumire'];
 $Start=$_POST['InputStart'];
 $Stop=$_POST['InputStop'];
 $d1=strtotime("$Start");
 $d2=strtotime("$Stop");
echo $S1=date("Y-m-d h:m", $Start);
echo $S2=date("Y-m-d h:m", $Stop);
echo $Descriere=$_POST['InputDescriere']; 
$query=mysql_query("insert into Event(Denumire,Start,Stop,Descriere) values('$Denumire','$d1','$d2','$Descriere)"); 
echo $query;
echo "Eventul a fost adaugat.";

?>