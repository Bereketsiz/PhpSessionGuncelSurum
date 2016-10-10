<?php
if(empty($_SESSION["kullanici"])){
	/*Üye Giriş Formu - İsmail Fedakar*/
$gelenkullaniciadi			=	$_POST["gkullaniciadi"];
$gelenkullanicisifre		=	$_POST["gkullanicisifre"];
	if(($gelenkullaniciadi=="") or ($gelenkullanicisifre=="")){
		@header("location:?sayfa=6");
	}else{
		$kontrolet		=	@mysql_num_rows(@mysql_query("SELECT * FROM kullanicilar WHERE kullaniciadi='$gelenkullaniciadi' AND kullanicisifre='$gelenkullanicisifre' ORDER BY id ASC LIMIT 1"));
			if($kontrolet<1){
				@header("location:?sayfa=6");
			}else{
				$_SESSION["kullanici"]	=	$gelenkullaniciadi;
				@header("location:?sayfa=5");
			}
	}
}else{
	@header("location:?sayfa=4");
}
?>