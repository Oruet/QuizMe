<?php
@mysql_connect("localhost","root","") or die ("Nu se poate conecta la serverul MySQL");
mysql_select_db("quizme") or die("Nu se poate selecta baza de date");
echo  $email=$_POST['emailsignup'];
 echo  $phone=$_POST['phonesignup'];
echo  $pass=sha1($_POST['passwordsignup']); 
echo	$name=$_POST['namesignup']; 
$query=@mysql_query("Insert into Account (Email, Name, Phone, Password,Type ) values ('$email','$name','$phone','$pass','User')"); 
$query2=mysql_query("select count(*) from Account where Email='$email'");
$num=mysql_num_rows($query2);
if($num==1)
{
	$subject="Registration";
	$text="Contul email:".$email." si password :".$pass." a fost creat cu succes";
	$a =mail($email, $subject, $text, 'From: sebi_hartie@yahoo.com');
	//$a=mail("$email","Registration","Contul email:".$mail." si password :".$pass." a fost creat cu succes");
	echo $a;
}
//header("Location: Event.php");11
?>