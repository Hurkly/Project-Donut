
<!--fungsi nya session start memulai eksekusi session pada server lalu kemudian menyimpannya pada browser.-->
<?php
 session_start();
 
 /*awal awalan variable total berangka pada 0/null*/
 $total = NULL;
 
 /* daftar transaksi nya dalam bentuk session yang nantinya semua array/item dengan variable productid, product, dan qty akan tersimpan di $sesion*/
 $_SESSION['cart'] = array(
       array('productid' => '1donut', 'product' => '1 lusin donut' , 'qty' => 1),
       array('productid' => 'STK', 'product' => 'Gratis Kiriko Sticker' , 'qty' => 1),
       array('productid' => 'TMBLR', 'product' => 'Gratis Kiriko Tumbler' , 'qty' => 1),
      );
       
 /* daftar harga produknya */
 $_SESSION['price'] = array(
       '1donut' => 96000,
       'STK' => 0,
       'TMBLR' => 0,
      ); 
?>


<!DOCTYPE html>
 <head>
      <!--Ini adalah link cssnya-->
  <link rel="stylesheet" href="css/Donuts.css">
 </head>
 
 <body>
  <div id="wrapshopcart">
   <h1>Keranjang</h1>
   <p>Berikut adalah detail transaksi anda, tolong diperiksa sebelum melanjutkan ke tahap berikutnya: </p>
   
   <!--bagian ini adalah table yang ada fungsi tr yaitu baris pada table dan th yaitu untuk judul pada headernya-->
   <table>
    <tr><th width="70%">Produk</th><th width="10%">Jumlah</th><th width="20%">Harga</th></tr>
    
    <!--disini fungsinya foreach untuk melakukan pembacaan nilai array yang nantinya akan tampil semua yang ada di session-->
    <?php foreach($_SESSION['cart'] as $row):?>
     <?php 
      $jumlah = $_SESSION['price'][$row['productid']] * $row['qty']; 
      $total += $jumlah;
     ?>
    <!--Disini baru menampilkan semua array dari product sampai dengan qty dalam perbaris-->
     <tr><td><?php echo $row['product'];?></td><td><?php echo $row['qty'];?></td><td><?php echo $jumlah; ?></td></tr>
    <?php endforeach;?>
    
    <tr class="total"><td></td><td >Total Rp.</td><td><?php echo $total;?></td></tr>
   </table>
   
   <a href="checkout.php" class="btnsubmit">Next >></a>
  </div>
  
 </body>
</html>