<?php
session_start();
$connection=mysql_connect("localhost","root","") or die("Conexiune la baza de date nereusita!");
//$connection = mysqli_connect("localhost", "root", "", "quizme") or die ("Conexiune la baza de date nereusita!");
mysql_select_db("quizme");
	 $localemail=$_POST['inputEmail'];
	 $localpass=$_POST['inputPassword'];  
	$query=mysql_query("Select * from Account where Email='$localemail' and password='$localpass'");
if( mysql_num_rows($query))
{
	$_SESSION['admin']=$localemail;
	sessionStorage.setItem("admin", $localemail);
	header("Location: Untitled-7.html");
}
else{
	?>
<script language="JavaScript"> 
	alert('Cartea  exista  si va fi stearsa!!!');  
	</script>
	<?php
	header("Location: Event.html");
}


	
?>