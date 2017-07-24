
<?php
/*
	strip_tags($kullaniciemail=$_POST["mail"]);
	           $kullanicisifre=md5($_POST["parola"]);
			   
			   
$baglan=mysqli_connect("localhost","root","","bote") or die("Bağlanamadı...");
	//güvenlik kontrolleri yapylacak...	

	
	

	$sorgu=mysqli_query($baglan,"select * from uye where mail='$kullaniciemail' and parola='$kullanicisifre'") or die(mysql_error());
	if(mysqli_num_rows($sorgu)==0)
	{
		echo "Kullanıcı Adı veya Şifre hatalı lütfen tekrar deneyin";
		exit;
	}
	else
	{
		session_start();
		$_SESSION["uye_id"]=mysqli_next_result($sorgu,0,"uye_id");
		$_SESSION["kullaniciadi"]=mysqli_next_result($sorgu,0,"kullaniciadi");
		echo "Oturumunuz Açıldı. Kitap Dünyası Anasayfa'ya gitmek İçin <a href='index.php'>tiklayiniz</a>.";		
	}
	*/
	
	$adminmail=("admin");
	$adminsifre=("admin");
	if($adminmail="admin" and $adminsifre="admin")
	{
				echo "Başarıyla açıldı. admin paneline gitmek için <a href='adminpanel.php'>tiklayiniz</a>.";		

	}
	else
	{
		echo "Kullanıcı Adı veya Şifre hatalı lütfen tekrar deneyin";
		exit;
	}
 ?>
	