<?php
if(empty($_SESSION["kullanici"])){
	/*Üye Giriş Formu - İsmail Fedakar*/
?>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-9">
<title>Üye Giriş Formu - İsmail Fedakar</title>
<style type="text/css">
body,td,th {
	color: rgba(248,242,242,1);
	font-size: 10pt;
	font-family: "Lucida Grande", "Lucida Sans Unicode", "Lucida Sans", "DejaVu Sans", Verdana, sans-serif;
	margin:0px; padding:0px;
}
</style>
</head>

<body>
<div id="ustDiv" style="width:100%; height:15%; float:left;"></div>
<div id="ortala" style="margin:0; float:left; display:block; width:100%" align="center">
<form name="girisformu" action="?sayfa=2" method="post">
<table width="300" border="0" cellpadding="0" cellspacing="0">
  <tbody>
    <tr>
      <td width="260" height="40" align="center" bgcolor="#000000" style="font-size:24px; color:rgba(231,25,28,1.00); font-family:Segoe, 'Segoe UI', 'DejaVu Sans', 'Trebuchet MS', Verdana, sans-serif"><strong>&Uuml;YE GİRİŞ FORMU</strong></td>
    </tr>
  </tbody>
</table>
<table width="300" border="0" cellpadding="0" cellspacing="0">
  <tbody>
    <tr>
      <td width="14" bgcolor="#070707">&nbsp;</td>
      <td width="111" height="30" bgcolor="#070707">Kullanıcı Adı</td>
      <td width="10" bgcolor="#070707">:</td>
      <td width="153" bgcolor="#070707"><input type="text" name="gkullaniciadi" id="gkullaniciadi"></td>
      <td width="13" bgcolor="#070707"><label for="gkullaniciadi"></label></td>
    </tr>
    <tr>
      <td bgcolor="#070707">&nbsp;</td>
      <td height="30" bgcolor="#070707">Kullanıcı Sifre</td>
      <td bgcolor="#070707">:</td>
      <td bgcolor="#070707"><input type="text" name="gkullanicisifre" id="gkullanicisifre"></td>
      <td bgcolor="#070707"><label for="gkullanicisifre"></label></td>
    </tr>
    <tr>
      <td bgcolor="#070707">&nbsp;</td>
      <td bgcolor="#070707">&nbsp;</td>
      <td bgcolor="#070707">&nbsp;</td>
      <td height="30" bgcolor="#070707"><input type="submit" name="submit" id="submit" value="Giriş Yap"></td>
      <td bgcolor="#070707">&nbsp;</td>
    </tr>
  </tbody>
</table>
</form>
</div>
</body>
</html>
<?php
}else{
	@header("location:?sayfa=4");
}
?>