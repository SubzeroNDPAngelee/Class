<?php
$host = '127.0.0.1';
$user = 'root';
$password = '';
$database = 'sekolah';
$koneksi = mysqli_connect($host, $user, $password, $database);
if (isset($_GET['menu'])) {
    $menu = $_GET['menu'];
    $id = $_GET['id'];
    // echo $menu;
    // echo $id;
    if ($menu == 'edit') {
        # code...
        $sql="SELECT * FROM siswa WHERE id=$id";
        echo $sql;
    }

    # code...
}
?>

<form action="" method="post">

nama :
<input type="text" name="nama" placeholder="masukkkan nama">
<br>
Alamat :
<input type="text" name="alamat" placeholder="masukkan alamat">
<br>
<input type="submit" name="save" value="save">
<br>
</form>



<?php
if (isset($_POST['save'])){

    $nama = $_POST['nama'];
    $alamat = $_POST['alamat'];
    $hapus = $_POST['alamat'];
    $sql = "INSERT INTO siswa VALUES ('', '$nama', '$alamat')";
    // echo $sql;
    mysqli_query($koneksi,$sql);
}
   if (isset($_GET["menu"])) {
    $menu=$_GET['menu'];
    $id=$_GET['id'];
    // echo $menu;
    // echo $id;
    if ($menu=='hapus') {
    $sql = "DELETE FROM siswa WHERE id =$id";
    // echo $sql;
    mysqli_query($koneksi,$sql);
    }
    
   }


//    if (condition) {
//     # code...
//    }


    # code...

$query = "SELECT * FROM siswa";

// echo $query;

$result = mysqli_query( $koneksi, $query);
// var_dump($result);

$nama = mysqli_fetch_assoc($result);
// var_dump($nama);

echo '<h1> Data Siswa </h1>';
echo'<table border=2>';
echo '<thead>
       <tr>
         <th>Id</th>
         <th>Nama</th>
         <th> Alamat> </th>
         <th>Hapus</th>
         <th>Edit</th>
         </tr>
        </thead>
        
        <tbody>';


while($row = mysqli_fetch_array($result)){
//      echo $row[1];
//      echo '&nbsp &nbsp';
//      echo $row[2];
//      echo '<br>';
     echo '<tr>';
     echo '<td>'.$row[0].'</td>';
     echo '<td>'.$row[1].'</td>';
     echo '<td>'.$row[2].'</td>';
     echo '<td><a href="?id='.$row[0].'&menu=hapus">Hapus</a></td>';
     echo '<td><a href="?id='.$row[0].'&menu=edit">edit</a></td>';
     echo '</tr>';


         }

         echo '</tbody>';
         echo '</thead>';


         echo "</table>";

         echo '<h1> Data Kelas </h1>';
         
        
         $query = "SELECT * FROM siswa2";
         $result = mysqli_query( $koneksi, $query);

          ?>
          <table border=4>;
          <thead>
            <tr>
                <th>id</th>
                <th>Nama</th>
                <th>Alamat</th>
                <th>Hapus</th>
            </tr>
        </thead>
        <tbody>;
<?php
while ($row = mysqli_fetch_array($result)){
    echo '<tr>';
    echo '<td>'.$row[0].'</td>';
    echo '<td>'.$row[1].'</td>';
    echo '<td>'.$row[2].'</td>';
    echo '</tr>';
    
}


 ?>
  </br>
   </body>
   </table>