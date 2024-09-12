<!-- <form action="" method="get">
    <input type="number" name="bulan" placeholder="masukkan bulan">
    <input type="number" name="tanggal" placeholder="masukkan tanggal">
     <input type="submit" name="simpan" placeholder="kirim">
</form> -->


<form action="" method="post">
    <input type="number" name="bulan" placeholder="masukkan bulan">
    <input type="number" name="tanggal" placeholder="masukkan tanggal">
     <input type="submit" name="simpan" placeholder="kirim">
</form>

<?php
    // if (isset ($_GET["tombol"])) {
    //     # code...
    //         $bulan = $_GET["bulan"];
    //         $tanggal = $_GET["tanggal"];

    //     echo $bulan;
    //     echo $tanggal;
    // }

    
    if (isset ($_POST["simpan"])) {
        # code...
            $bulan = $_POST["bulan"];
            $tanggal = $_POST["tanggal"];

            //  echo $bulan;
            //  echo $tanggal;

        $keterangan = "salah";

        if ($bulan > 0 && $bulan < 13 && $tanggal > 0 && $tanggal < 32) {

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

        echo $keterangan;   
    }


?>
