<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html xmlns:og="http://opengraphprotocol.org/schema/" xmlns:fb="http://www.facebook.com/2008/fbml">
<!-- <link href="css/windows.css" rel="stylesheet" type="text/css" />  -->
<link href="css/mainmenu.css" rel="stylesheet" type="text/css" />


<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<body>
<table class="main_memu" >    
<tr> 

      <td "width="14%"><div align="center">
     <?php if ($_SERVER['REQUEST_URI']<>"/index.php" AND $_SERVER['REQUEST_URI']<>"/"){echo '<a class="memu_href" href="index.php" >';  }?> 
      <font style="font-size:15px" face="Arial">Главная</font></a></div></td>
      
      <td width="14%"><div align="center">
      <?php if ($_SERVER['REQUEST_URI']<>"/textchoice.php"){echo '<a class="memu_href" href="textchoice.php" >';  }?> 
      <font style="font-size:15px" face="Arial">Тексты</font></a></div></td>
      
      <td width="20%"><div align="center">
      <?php if ($_SERVER['REQUEST_URI']<>"/textwords.php"){echo '<a class="memu_href" href="textwords.php" >';  }?> 
      <font style="font-size:15px"face="Arial">Слова из текста</font></a></div></td>
      
<td width="20%"><div align="center">
      <?php if ($_SERVER['REQUEST_URI']<>"/learnwordscircuit.php"){echo '<a class="memu_href" href="learnwordscircuit.php" >';  }?>
           <font style="font-size:15px"face="Arial">Повторение слов</font></a></div></td>    
    
      
      <td width="14%"><div align="center">
      <?php if ($_SERVER['REQUEST_URI']<>"/vocab.php"){echo '<a class="memu_href" href="vocab.php" >';  }?>
           <font style="font-size:15px"face="Arial">Мои слова</font></a></div></td>


      
        
      
      <td width="20%"><div align="center">
      <a class="memu_href" href="exit.php" >
      <a class="memu_href" href="<?php if (isset( $_SESSION['userName'])){ echo "exit.php";} else {echo "reg.php";}?>" >
      <font style="font-size:15px" face="Arial"><?php if (isset( $_SESSION['userName'])){ echo "выход (" . $_SESSION['userName'] . ")";} else {echo "вход / регистрация ";}?></font>     </a></div></td>
      

   
   
   </tr>

</table>
<BR>


<?php

/* Display error messages */
if($_SESSION['userName'] == NULL){
if($_SESSION['mess'] != "") {
    echo '<div align="center"> ';
    echo $_SESSION['mess']; $_SESSION['mess'] == "" ; 
    echo '</div>';
    $_SESSION['mess']="";}
?>


<form action="lib/login.php" method="post" name="login" id="login" style="display:none;">
  <table  class="login_table" >
<!--    <tr bgcolor="#99CC99" style="position:absolute; width:90px; height:13px;"> 
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
 