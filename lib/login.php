<?php
 session_start();
include("connect_db.php");

if (isset($_POST['userName']) && isset($_POST['password']))
{
    $login = mysqli_real_escape_string($link, $_POST['userName']);
//    $password = md5($_POST['password']);
     $password = mysqli_real_escape_string($link, $_POST['password']);
    // делаем запрос к БД
    // и ищем юзера с таким логином и паролем
    
    $login = mysqli_real_escape_string($link, $_POST['userName']);
    $password = mysqli_real_escape_string($link, $_POST['password']);
    
    
   $query = "SELECT id FROM users WHERE (username='" . $login . "' AND passwd='" . $password . "') LIMIT 1";
 //   $sql = mysql_query($query) or die(mysql_error());

    
  
 $sql = mysqli_query($link, $query);
    // если такой пользователь нашелся
    if (mysqli_num_rows($sql) == 1) {
        // то мы ставим об этом метку в сессии (допустим мы будем ставить ID пользователя)

        $row = mysqli_fetch_assoc($sql);
        $_SESSION['userId'] = $row['id'];
        
        // не забываем, что для работы с сессионными данными, у нас в каждом скрипте должно присутствовать session_start();
    }
    else {
               $_SESSION['mess'] = '<font style="position:absolute; left:50px;  font-size:13px" color="#FF0000" face="Arial"><b>
               Неправильный пароль или логин!</font></b><br>';
               header("Location:../reg.php");
               exit();
                
    }
}

$ip = $_SERVER['REMOTE_ADDR'];
$strSQL="INSERT INTO  stlog (ip, page ,dt) VALUES ('".$ip."',  '".$_SESSION['userId']."', CURRENT_TIMESTAMP)"; 
$result = mysqli_query($link, $strSQL);



$_SESSION['userName'] = $login;
//$_SESSION['UserID'] = 1;
/* Config file */

 header("Location:../textwords.php");
?>