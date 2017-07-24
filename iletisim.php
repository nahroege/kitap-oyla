
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





<body>


   <div a>
	<table>
    <center><br>
	<caption><h1>İletişim Bilgileri</h1></caption>
	<td>

      <h5>
		  <a href="https://www.facebook.com/zubeyir.buyuk">Zübeyir Büyük Facebook hesabı için tıklayınız.</a>
  		  <br>
          <a href="https://www.facebook.com/aysegul.akmese.1">Ayşegül Akmeşe  Facebook hesabı için tıklayınız.</a>
		  <br>
          <a href="https://www.facebook.com/egeorhan">Ege Orhan  Facebook hesabı için tıklayınız.</a>
		  <br>
          <a href="https://www.facebook.com/ozan.sahin.940">Ozan Onur Şahin   Facebook hesabı için tıklayınız.</a>

		 </h5>
     </td>

	<td>
    
      <h5>
		  <a href="mailto:zubeyir.buyuk@gmail.com" > >>  Mail göndermek için tıkla.</a>
  		  <br>
          <a href="mailto:aysegul.akmese.1@gmail.com"> >>   Mail göndermek için tıkla.</a>
		  <br>
          <a href="https://www.facebook.com/egeorhan"> >>   Mail göndermek için tıkla.</a>
		  <br>
          <a href="https://www.facebook.com/ozan.sahin.940"> >>   Mail göndermek için tıkla.</a>
		 
		 </h5>
     </td>
	 
	
      </table></center> <div class="a">  </div>





<style>

		
   </style>

<body>