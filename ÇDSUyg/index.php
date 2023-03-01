<?php 
session_start();

if(empty($_SESSION["SiteDili"])){
    include("diltr.php");
}else{
    if($_SESSION["SiteDili"] =="TR"){
        include("diltr.php");
    }else{
        include("dilen.php");
    }
}


?>
<!DOCTYPE html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ÇDSuyg</title>
</head>
<body>
    <table width="1000" align="center" border="0">
<tr height="40">
<td width="130"><?php echo ANASAYFA;?></td>
<td width="155"><?php echo HAKKIMIZDA; ?></td>
<td width="130"><?php echo ILETİSİM;?></td>
<td  width="373"><?php echo URUNLER;?></td>
<td width="190"><a href="secim.php?DilSecimi=TR" style="color:#000000; text-decoration:none;">  TR  </a>| <a href="secim.php?DilSecimi=English" style="color:#000000; text-decoration:none;"> EN </td>





</tr>




    </table>
</body>
</html>