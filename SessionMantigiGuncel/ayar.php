<?php
/*Ýsmail Fedakar_Veritabaný Baðlantýsý*/
$hostadresi			=	"localhost";
$veritabani			=	"firma";
$mysqlkullaniciadi	=	"root";
$mysqlsifresi		=	"";
$mysql_baglantisi_yap	=	@mysql_connect($hostadresi,$mysqlkullaniciadi,$mysqlsifresi,false,2) or die ("MySql Baðlantý Hatasý!");
$veritabani_sec			=	@mysql_select_db($veritabani) or die ("Veritabaný Baðlantý Hatasý!");
?>