<?php
if(isset($_SESSION["kullanici"])){
?>
  <tr>
    <td rowspan="3" align="center" valign="middle" style="line-height:10px;"><table width="305" border="0" align="center" cellpadding="0" cellspacing="0">
      <tr>
        <td height="25" colspan="3" align="center" valign="middle"><b><font color="#000000">Site K�sa �statislik Bilgisi </font></b></td>
        </tr>
      <tr>
        <td height="25" colspan="3" align="center" valign="middle"><hr /></td>
        </tr>
      <tr>
        <td width="250" height="25" align="left" valign="middle"><font color="#000099">Sitede Kay�tl� �r�n Say�s�</font></td>
        <td width="26" height="25" align="left" valign="middle"><font color="#000099">:</font></td>
        <td width="124" height="25" align="right" valign="middle">&nbsp;</td>
        </tr>
      <tr>
        <td height="25" align="left" valign="middle"><font color="#000099">Sitede Kay�tl� Referans Say�s�</font></td>
        <td height="25" align="left" valign="middle"><font color="#000099">:</font></td>
        <td height="25" align="right" valign="middle">&nbsp;</td>
        </tr>
      <tr>
        <td height="25" align="left" valign="middle"><font color="#000099">Sitede Kay�tl� Yard�m Say�s�</font></td>
        <td height="25" align="left" valign="middle"><font color="#000099">:</font></td>
        <td height="25" align="right" valign="middle">&nbsp;</td>
        </tr>
      <tr>
        <td height="25" align="left" valign="middle"><font color="#000099">Sitede Kay�tl� Banner Say�s�</font></td>
        <td height="25" align="left" valign="middle"><font color="#000099">:</font></td>
        <td height="25" align="right" valign="middle">&nbsp;</td>
        </tr>
      <tr>
        <td height="25" colspan="3" align="right" valign="middle"><a href="?sayfa=3"><font color="#FF0000">��k��</font></a></td>
        </tr>
    </table>      </td></td>
    <td width="10" height="10" align="center" valign="middle" >&nbsp;</td>
  </tr>
  <tr>
    <td align="center" valign="middle">&nbsp;</td>
  </tr>
  <tr>
    &nbsp;
    <td height="10" align="center" valign="middle">&nbsp;</td>
    <td height="10" align="center" valign="middle" />&nbsp;</td>
  </tr>
</table>
<?php
}else{
	@header("location:index.php");
}
?>