<?php

session_start();

include('lib/menu.inc');


/* Display error messages */

if($_SESSION['messR'] != "") {
    echo $_SESSION['messR']; $_SESSION['messR']=""; }
?>

<form action="lib/registration.php" method="post" name="login" id="reg" style="display:inline;">
  <table width="18%"  border="1" align="left" cellpadding="1" cellspacing="0" background-color="#0A01AD" bordercolor="#99CC33">
<!--    <tr bgcolor="#99CC99"> 
      <td colspan="2"><div align="center"><strong>Please log in:</strong></div></td>
    </tr>-->
    <tr> 
      <td width="50%" ><strong>ЛОГИН:</strong></td>
      <td width="50%"><input name="userName" type="text" id="userName"></td>
    </tr>
    <tr> 
      <td><strong>Пароль:</strong></td>
      <td><input name="password1" type="password" id="password1"></td>
    </tr>
    <tr> 
    </tr>
    <tr> 
      <td><strong>Подтвердить:</strong></td>
      <td><input name="password2" type="password" id="password2"></td>
    </tr>
    <tr>
      <td colspan="2"><div align="center"><font face="Georgia, Times New Roman, Times, serif"><strong>
          <input name="Submit" type="submit" id="Submit" value="Регистрация">
          
</strong></font> </div></td>
    </tr>
   <tr>
      
  </table>
 </form>
 </body>