<div class="cart">
    <h1>Cart</h1>

<?php
   if (!isset($_SESSION['email'])) {
    header(header: "location: index.php?menu=login");
    
   }

   if (!isset($_SESSION['cart'])) {
    echo "<h1>Keranjang Kosong</h1>";
    
   }
   if (isset($_GET['hapus'])) {
    $id = $_GET['hapus'];
    unset($_SESSION['cart'][$id]);
    # code...
   }
   $isiKeranjang = count($_SESSION['cart']);
if ($isiKeranjang == 0) {
    header('location:index.php');
}

    if (isset($_GET['add'])){
    $id = $_GET['add'];
    $sql = "SELECT * FROM produk WHERE  id = $id";
//     echo $sql;
//     // echo $id;
     $hasil = mysqli_query($koneksi, $sql);
     $row = mysqli_fetch_array($hasil);
    // echo $row[1];
    // echo $row[3];
     $_SESSION['cart'][$id]= ['produk' => $row[1],
    'harga' => $row[3], 'jumlah' => isset($_SESSION['cart'][$id]) ? $_SESSION['cart'][$id]['jumlah'] + 1 : 1,
'id' => $row[0] ];
    
   }
?>

<table>
    <thead>
           <tr>
            <th>NO</th>
            <th>PRODUK</th>
            <th>HARGA</th>
            <th>JUMLAH</th>
            <th>HAPUS</th>
           </tr>
    </thead>
    <tbody>
        <?php
        $no = 1;
          foreach ($_SESSION['cart'] as $key) {
             ?>
             <tr>
                <td><?= $no++?></td>
                <td><?= $key['produk'] ?></td>
                <td><?= $key['harga'] ?></td>
                <td><?= $key['jumlah'] ?></td>
                <td> <a href="?menu=cart&hapus=<? $key['id'] ?>">Hapus</a>
                </td>
             </tr>
             <?php
          }
        ?>
    </tbody>
</table>


</div>