<?php

   $judul="Belajar PHP";
   $judul1="Siswa RPL";
   $judul2="SMKN2 Buduran";
   $juduls=["Belajar PHP","Student of RPL","SMKN2 Buduran"]; 
//    this is array

//    echo $judul1
    echo $juduls[0];
    for ($i=0; $i < 3; $i++) {
        echo $juduls[$i];
        echo $i;
        echo $juduls[$i];
    }
    foreach ($juduls as $key ) {
        echo"<br>";
        echo $key;
        # code...
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<h1><?php echo $judul?></h1>
<h2><?=$judul1?></h2>
<h3><?=$judul2?></h3>
<h4><?php echo $judul?></h4>

<?php
for ($i=0; $i <3 ; $i++) {
    echo "<h1>";
    echo $juduls[$i];
    echo "</h1>";
    # code...
}?>
<h1>
    Menampilkan PHP
</h1>
    <?php
    for ($i=0; $i < 3; $i++) { 
        ?>
        <h1><?=$juduls[$i]?></h1>
        <?php
        # code...
    }
    ?>
<?php
   foreach ($juduls as $key) 
   {
    echo "<h2>";
    echo$key;
    echo "</h2>";
    echo "<br>";
    # code...
   }
?>
<?php
foreach ($juduls as $key) {
    ?><h2><?=$key?></h2>
    <?php
    
}
?>
<hr>
    <?php
    for ($i=1; $i < 10; $i++) { 
        echo "<h$i>";
        echo "SMKN 2 Buduran";
        echo "</h$i>";
    }
    ?>
    <?php
        for ($i=6; $i > 0; $i--) { 
            echo "<h$i>"."semeken 2 buduran"."</h$i>";
        }
    ?>
</body>
</html>