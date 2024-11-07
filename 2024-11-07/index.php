<?php

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SMP Negeri 6 Sidoarjo</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
        <div class="container">
            <div class="header">
              <div class="logo">
                 <a href="?menu=home"><img src="image/logo.jpeg" alt=""></a>
              </div>
              <div class="sekolah">
                <h2>Sekolah Cabul</h2>
              </div>
              <div class="nav">
                <ul>
                    <li><a href="?menu=Home">Home</a></li>
                    <li><a href="?menu=Sejarah">Sejarah</a></li>
                    <li><a href="?menu=Kegiatan">Kegiatan</a></li>
                    <li><a href="?menu=Jadwal">Jadwal</a></li>
                    <li><a href="?menu=Galeri">Galeri</a></li>
                    <li><a href="?menu=Contact">Contact</a></li>
                </ul>
              </div>
            </div>
            <div class="content">
                 <?php
                if (isset($_GET["menu"])) {
                    $menu = $_GET["menu"];
                    echo $menu;
                    if ($menu == "Home") {
                        require_once("page/Home.php");
                    }
                    if ($menu == "Sejarah") {
                        require_once("page/Sejarah.php");
                    }
                    if ($menu == "Kegiatan") {
                        require_once("page/Kegiatan.php");
                    }
                    if ($menu == "Jadwal") {
                        require_once("page/Jadwal.php");
                    }
                    if ($menu == "Galeri") {
                        require_once("page/Galeri.php");
                    }
                    if ($menu == "Contact") {
                        require_once("page/Contact.php");
                    }
                    
                    }
                    else {
                        require_once("page/Home.php");
                }
                   


                 ?>
            </div>
            <div class="footer">
              <p>WEB ini Dibuat oleh:SUBZERO</p>
            </div>
        </div>
</body>
</html>