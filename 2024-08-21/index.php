<?php 
  require_once("content.php");
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
  </head>
  <body>
    <img src="images/<?=$Pics;?>" alt="" />
    <img src="images/<?=$Pics;?>" alt=""/>
    <?php
    foreach ($Pics as $key) {
      echo"<h1>images</h1>";
      echo "<img src='images/$key' alt''>";
      echo '<img src="images/'.$key .'"alt="">';
      
    }
    ?>
  </body>
</html>
