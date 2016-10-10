<?php
@session_start();
/*Üye Giriş Formu - İsmail Fedakar*/
include("ayar.php");
$sayfalar		=	@$_GET["sayfa"];
include("sayfa.php");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" style="height:100%;">
<head>
<title>Üye Giriş Formu - İsmail Fedakar</title>
<meta http-equiv="content-type" content="text/html; charset=iso-8859-9" />
<meta http-equiv="content-language" content="TR" />
<meta http-equiv="content-script-type" content="text/javascript" />
<meta http-equiv="content-style-type" content="text/css" />
<meta name="language" content="turkish" />
</head>
<body>
<table border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td width="0" align="center" valign="top">&nbsp;</td>
    <td align="center" valign="top" bgcolor="#FFFFFF"><table border="0" align="center" cellpadding="0" cellspacing="0">
      <tr>
        <td height="100" align="center" valign="middle"><table border="0" align="center" cellpadding="0" cellspacing="0">
          <tr>
            <td height="100" align="center" valign="middle"><a href="http://www.ismailfedakar.com">Web Sitesine Git</a></td>
            </tr>
        </table></td>
      </tr><?php if(isset($_SESSION["kullanici"])){ ?>
      <tr>
        <td align="center" valign="top">&nbsp;</td>
      </tr>
      <tr>
        <td height="29" align="center" valign="middle"><table border="0" align="center" cellpadding="0" cellspacing="0">
          <tr>
            <td width="10" height="29" align="center" valign="middle">&nbsp;</td>
            <td  height="29" align="center" valign="middle"><table  border="0" align="center" cellpadding="0" cellspacing="0">
              <tr>
                <td height="29" align="left" valign="middle"><a href="index.php"><font color="#333333">Ana Sayfa</font></a><font color="#FFFFFF">|</font></td>
                </tr>
            </table></td>
            <td width="10" height="29" align="center" valign="middle">&nbsp;</td>
          </tr>
        </table></td>
      </tr><?php } ?>
      <tr>
        <td align="center" valign="top">&nbsp;</td>
      </tr>
      <tr>
        <td align="center" valign="top"><?php
        if(!$sayfalar){
			include($sayfa[1]);
		}else{
			include($sayfa[$sayfalar]);
		}
		?></td>
      </tr>
      <tr>
        <td align="center" valign="top">&nbsp;</td>
      </tr>
    </table></td>
    <td width="0" align="center" valign="top">&nbsp;</td>
  </tr>
</table>
</body>
</html>