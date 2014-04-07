<?php
session_start();

include("lib/connect_db.php");
$ip = $_SERVER['REMOTE_ADDR'];

$strSQL="INSERT INTO  stlog (ip, page ,dt) VALUES ('".$ip."',  'reg', CURRENT_TIMESTAMP)"; 
$result = mysqli_query($link, $strSQL);

include('lib/menu.inc');
?>



<?php

/* Display error messages */
if($_SESSION['userName'] == NULL){
if($_SESSION['mess'] != "") {
    echo '<div align="center"> ';
    echo $_SESSION['mess']; $_SESSION['mess'] == "" ; 
    echo '</div>';
    $_SESSION['mess']="";}
?>


<form action="lib/login.php" method="post" name="login" id="login" style="position:absolute; display:block;  ">
  <table  class="login_table" >
<!--    <tr bgcolor="#99CC99" style="position:absolute; "> 
      <td colspan="2"><div align="center"><strong>Please log in:</strong></div></td>
    </tr>-->
    <tr> 
      <td width="50%" height="50%" ><strong>Логин:</strong></td>
      <td width="50%"><input name="userName" type="text" id="userName"></td>
    </tr>
    <tr> 
      <td><strong>Пароль:</strong></td>
      <td><input name="password" type="password" id="password"></td>
    </tr>
    <tr> 
      <td colspan="2"><div align="center"><font face="Georgia, Times New Roman, Times, serif"><strong>
          <input name="Submit" type="submit" id="Submit" value="Войти">
          
</strong></font> </div></td>
    </tr>
   <tr>
      <td colspan="2" ><div align="center"><font style="font-size:13px"  face="Arial"><a href="registry.php" id="c1" >Зарегистрироваться</a></font></div></td>
    </tr>
  </table>
 </form>
<?php } ?>
 