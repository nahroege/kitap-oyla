<!DOCTYPE html>
<html>
<head>
 <meta charset="UTF-8">
    <title>Kitap Dünyası</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">

</head>



<style>
* 
{
	margin:0px;
	padding:0;
}
body
 { background:#00FF33;}

ul.araccubuk
{
    list-style-type: none;
    margin: 0;
    padding: 0;
    overflow: hidden;
    background-color: #333;
}

ul.araccubuk li {float: left;}

ul.araccubuk li a 
{
	/* menü çubuğundaki yazıların ayarlar*/
    display: block;
    color: white;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
}

ul.araccubuk li a:hover:not(.active) {background-color: #111;}

ul.araccubuk li a.active {background-color:red;}  /* anasaybuttonun arkaplan rengi */

ul.araccubuk li.right {float: right;} /* sağ menü konumu */







input[type="text"] 
{
    width: 200px;
}
input[type="password"] 
{
    width: 200px;
}


table
{
  
	margin:30px auto;
	table-layout:fixed;
	border-collapse:collapse;
    border-spacing: 0;
    width: 80%;
	height: 80%;
   font-size:20px;
	background:yellow;
}

td, th
 {
 border: 5px solid black;
padding:10px;
}


@media screen and (max-width:600px) and (min-width:100px)
{
  ul.araccubuk li.right, 
  ul.araccubuk li {float: none;}

 table{
   
	margin:30px auto;
	table-layout:fixed;
	border-collapse:collapse;
    border-spacing: 0;
    width: 60%;
	height: 60%;
   font-size:15px;

	background:yellow;
	}


input[type="text"] 
{
    width: 60px;
}
input[type="password"] 
{
    width: 60px;
}	
}

@media screen and (max-width:400px) and (min-width:80px)
{
  ul.araccubuk li.right, 
  ul.araccubuk li {float: none;}

 table{
    
	margin:20px auto;
	table-layout:fixed;
	border-collapse:collapse;
    border-spacing: 0;
    width: 30%;
	height: 30%;
   font-size:8px;
  
	background:yellow;
	}


input[type="text"] 
{
    width: 30px;
}
input[type="password"] 
{
    width: 30px;
}	
}

</style>
<body>

<ul class="araccubuk">
  <li><a class="active" href="index.php">Ana Sayfa</a></li>
  <li><a href="kitaplar.php">Kitaplar</a></li>
  <li><a href="yazarlar.php">Yazarlar</a></li>
  <li><a href="kategori.php">Kategoriler</a></li>
  <li class="right"><a href="iletisim.php">İletişim</a></li>
<li class="right"><a href="hakkinda.php">Hakkında</a></li>
  <li class="right"><a href="kayitformu.php">Üye ol</a></li>
   <li class="right"><a href="oturumacmaformu.php">Giriş</a></li>
  
</ul>

  

	
	

'<table border="3" align="center"  cellspacing="4">
<tr>
<td>
<img src="http://i.dr.com.tr/cache/600x600-0/originals/0000000718827-1.jpg" alt="Örnek Resim" width=250 height=200 align="center">
 <p><a href="index.php?k='k'" role="button" >İncele</a></p>
</td>     
 <td> 
 <img src="http://i.dr.com.tr/cache/600x600-0/originals/0000000719091-1.jpg" alt="Örnek Resim" width=250 height=200 align="center"> 
 <p><a href="index.php?k='k'" role="button" >İncele</a></p>
 </td> 
<td> 
 <img src="http://i.dr.com.tr/cache/600x600-0/originals/0000000717001-1.jpg" alt="Örnek Resim" width=250 height=200 align="center"> 
 </td> 
<td> 
 <img src="http://i.dr.com.tr/cache/600x600-0/originals/0000000058246-1.jpg" alt="Örnek Resim" width=250 height=200 align="center"> 
 </td>  
 </tr>
<tr>
<td>
<img src="http://i.dr.com.tr/cache/600x600-0/originals/0000000610771-1.jpg" alt="Örnek Resim" width=250 height=200 align="center">
</td>     
 <td> 
 <img src="http://i.dr.com.tr/cache/600x600-0/originals/0000000687038-1.jpg" alt="Örnek Resim" width=250 height=200 align="center"> 
 </td>   
<td> 
 <img src="http://i.dr.com.tr/cache/600x600-0/originals/0000000411500-1.jpg" alt="Örnek Resim" width=250 height=200 align="center"> 
 </td> 
<td> 
 <img src="http://i.dr.com.tr/cache/600x600-0/originals/0000000064464-1.jpg" alt="Örnek Resim" width=250 height=200 align="center"> 
 </td>  
 </tr>

</table>


	
	
	
	
	
</body>
</html>
<?php

if(isset($_GET['k']))
{
	echo "<center>";
	$baglan=mysqli_connect("localhost","root","","bote") or die("Bağlanamadı...");
	if($_GET['k']="k")
		{
		$sorgu=mysqli_query($baglan,"select * from kitap where kitap_id='1'");
		$sonuc=mysqli_fetch_assoc($sorgu);
		echo $sonuc["ozet"];
}}
	?>