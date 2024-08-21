<?php
 session_start();
 
 $total = NULL;
 
 /* daftar transaksi nya dalam bentuk session */
 $_SESSION['cart'] = array(
       array('productid' => '1donut', 'product' => '2 Dozens of Donuts' , 'qty' => 1),
       array('productid' => 'STK', 'product' => 'Free Kiriko Stickers R34' , 'qty' => 1),
       array('productid' => 'TMBLR', 'product' => 'Free Kiriko Tumbler' , 'qty' => 1),
       array('productid' => 'PLSH', 'product' => 'Free Fox Plushie' , 'qty' => 1),
      );
       
 /* daftar harga produknya */
 $_SESSION['price'] = array(
       '1donut' => 305000,
       'STK' => 0,
       'TMBLR' => 0,
       'PLSH' => 0,
      ); 
?>


<!DOCTYPE html>
 <head>
  <link rel="stylesheet" href="css/Donuts.css">
 </head>
 
 <body>
  <div id="wrapshopcart">
   <h1>Keranjang</h1>
   <p>Berikut adalah detail transaksi anda, tolong diperiksa sebelum melanjutkan ke tahap berikutnya: </p>
   
   <table>
    <tr><th width="70%">Produk</th><th width="10%">Jumlah</th><th width="20%">Harga</th></tr>
    
    <?php foreach($_SESSION['cart'] as $row):?>
     <?php 
      $jumlah = $_SESSION['price'][$row['productid']] * $row['qty']; 
      $total += $jumlah;
     ?>
    
     <tr><td><?php echo $row['product'];?></td><td><?php echo $row['qty'];?></td><td><?php echo $jumlah; ?></td></tr>
    <?php endforeach;?>
    
    <tr class="total"><td></td><td >Total Rp.</td><td><?php echo $total;?></td></tr>
   </table>
   
   <a href="checkout.php" class="btnsubmit">Next >></a>
  </div>
  
 </body>
</html>