<?php
/*�smail Fedakar_Veritaban� Ba�lant�s�*/
$hostadresi			=	"localhost";
$veritabani			=	"firma";
$mysqlkullaniciadi	=	"root";
$mysqlsifresi		=	"";
$mysql_baglantisi_yap	=	@mysql_connect($hostadresi,$mysqlkullaniciadi,$mysqlsifresi,false,2) or die ("MySql Ba�lant� Hatas�!");
$veritabani_sec			=	@mysql_select_db($veritabani) or die ("Veritaban� Ba�lant� Hatas�!");
?>