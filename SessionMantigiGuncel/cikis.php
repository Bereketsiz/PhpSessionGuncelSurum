<?php
/*Üye Giriş Formu - İsmail Fedakar*/
if(isset($_SESSION["kullanici"])){
	@session_destroy();
	@header("location:index.php");
}else{
	@header("location:index.php");
}
?>