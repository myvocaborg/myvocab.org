<?php
include("lib/compWordHistory.php");
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html xmlns:og="http://opengraphprotocol.org/schema/" xmlns:fb="http://www.facebook.com/2008/fbml">
<script type="text/javascript" src="js/jquery-1.9.1.min.js"></script>
<script src="js/textwords.js" type="text/javascript"></script>
<script src="js/setfunct.js" type="text/javascript"></script>
<title>История слова</title>
<head>
    

<meta http-equiv="pragma" content="no-cache" />
<meta http-equiv="Cache-Control" content="no-cache" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />


    </head>
<body id="body_words" onLoad="">
<?php echo " ".$nameBook ?>
<font style="font-size:13px" face="Arial"></font><br><br>
<?php for ($i = 1; $i <= $k; $i++) { $ns[$i-1]= str_replace($wordO,"<font color='red'>".$wordO."</font>",$ns[$i-1]); ?>

<a class="memu_href" href="text.php?page=<?php echo $np[$i-1]; ?>&cBook=<?php echo $cBook; ?>&ch=0&wordSeek=<?php echo $wordO; ?>" >   
<font style="font-size:13px" face="Arial"><?php echo $ns[$i-1].' - стр.'.$np[$i-1]; ?></font></a><br><br>
      
 <?php }  ?>  
      
      
<script language="javascript" type="text/javascript">  
//document.write("111"+document.getElementById("s3").innerHTML);
</script>
</body>

</html>
