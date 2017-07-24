<?php

	strip_tags($kullaniciadi=$_POST["uye_ad"]);
	strip_tags($kullanicisoyadi=$_POST["uye_soyad"]);
	strip_tags($kullaniciemail=$_POST["mail"]);
	strip_tags($kullaniciparola=md5($_POST["parola"]));

	// Bu kullanici var mı?
	// Kullanicidan gelen verilerin güvenlik kontrolleri.
	//güvenlik kontrolleri yapılacak...	
	
$baglan=mysqli_connect("localhost","root","","bote") or die("Bağlanamadı...");
mysqli_query($baglan, "insert into uye(uye_ad,uye_soyad,parola,mail) values ('$kullaniciadi','$kullanicisoyadi','$kullaniciemail','$kullaniciparola')") or die("kaydınız alınamadı");	

	echo "Kaydiniz Tamamlandi. Oturum Açmak için <a href='oturumacmaformu.php>tiklayiniz</a>";
	
 ?>