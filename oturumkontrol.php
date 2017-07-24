<table align="center" cellpadding="5">
<br>
<br>
<br>
<br>
<br>
<center>
 <?php
	session_start();	
	if(!isset($_SESSION["kullanicino"]))
	{
		echo "Bu Sayfayi Görmek için Lütfen Oturum Açýn";
		exit;
	}	
 ?>
 </center>
 </table>