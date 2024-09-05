<?php
   for ($i=1; $i <= 10 ; $i++) { 
    echo $i;
    # code...
   }
   echo "<br>";
   for ($i=10; $i >= 0 ; $i--) {
    echo $i;
    
   }

   echo "<br>";
   $ganjil=7%2;
   echo $ganjil;

   echo "<br>";
   for ($i=1; $i <100 ; $i++) { 
    
        $ganjil=$i % 2;
        //echo $ganjil;
        if ( $ganjil==0) {
            echo $i;
        }
    # code...
   }
   echo "<br>";
   $kkm = 80;
   $nilai = 95;
   if ($nilai > $kkm) {
    echo "lulus";
   }
   else {
       echo "tidak lulus";
   }

   echo "<br>";
   $status = "tidak lulus";

   if ($nilai > $kkm) {
    $status = "lulus";
   }

   echo $status;
   echo "<br>";

     $raport = 0;
     $tugas = 1;

     if ($tugas == 1) {
        $raport = 80;
     }

     echo $raport;
     echo "<br>";

     $bulan = 12;
     $tanggal = 31;
     
     $keterangan = "salah";

     if ($bulan > 0 && $bulan < 13) {
       // $keterangan = "benar";
        if ($tanggal > 0 && $tanggal < 32) {
           // $keterangan = "benar";
            if ($bulan == 1 && $tanggal > 0 && $tanggal < 20) {
                $keterangan = "aquarius";
            }
            if ($bulan == 1  && $tanggal > 19 && $tanggal < 32) {
                $keterangan = "capricon";
                # code...
            }

            if ($bulan == 2 && $tanggal > 0 && $tanggal < 20) {
                $keterangan = "Ketchuprus";
            }

            if ($bulan == 2 && $tanggal > 19 && $tanggal < 29) {
                $keterangan = "Sanrus";
            }
            if ($bulan == 3 && $tanggal > 0 && $tanggal < 20) {
                $keterangan = "Metrus";
            }
            if ($bulan == 3 && $tanggal > 19 && $tanggal < 32) {
                $keterangan = "Aries";
            }
            if ($bulan == 4 && $tanggal > 0 && $tanggal < 20) {
                $keterangan = "Cancer";
            }
            if ($bulan == 4 && $tanggal > 19 && $tanggal < 31) {
                $keterangan = "Bagus";
            }
            if ($bulan == 5 && $tanggal > 0 && $tanggal < 20) {
                $keterangan = "Virgo";
            }
            if ($bulan == 5 && $tanggal > 19 && $tanggal < 32) {
                $keterangan = "Leo";
            }
            if ($bulan == 6 && $tanggal > 0 && $tanggal < 20) {
                $keterangan = "Fandus";
            }
            if ($bulan == 6 && $tanggal > 19 && $tanggal < 31) {
                $keterangan = "Atrus";
            }
            if ($bulan == 7 && $tanggal > 0 && $tanggal < 20) {
                $keterangan = "Satrus";
            }
            if ($bulan == 7 && $tanggal > 19 && $tanggal < 32) {
                $keterangan = "Libra";
            }
            if ($bulan == 8 && $tanggal > 0 && $tanggal < 20) {
                $keterangan = "Yuzong";
            }
            if ($bulan == 8 && $tanggal > 19 && $tanggal < 31) {
                $keterangan = "pisces";
            }
            if ($bulan == 9 && $tanggal > 0 && $tanggal < 20) {
                $keterangan = "Daus";
            }
            if ($bulan == 9 && $tanggal > 19 && $tanggal < 32) {
                $keterangan = "Surus";
            }
            if ($bulan == 10 && $tanggal > 0 && $tanggal < 20) {
                $keterangan = "Rezarus";
            }
            if ($bulan == 10 && $tanggal > 19 && $tanggal < 31) {
                $keterangan = "Kairus";
            }
            if ($bulan == 11 && $tanggal > 0 && $tanggal < 20) {
                $keterangan = "Evanrus";
            }
            if ($bulan == 11 && $tanggal > 19 && $tanggal < 31) {
                $keterangan = "Taurus";
            }
            if ($bulan == 12 && $tanggal > 0 && $tanggal < 20) {
                $keterangan = "Scorpio";
            }
            if ($bulan == 12 && $tanggal > 19 && $tanggal < 32) {
                $keterangan = "Gemini";
            }

        }
     }

     echo $keterangan;
     

?>