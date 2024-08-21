<!--pada bagian invoice disini ada fungsi post untuk menampilkan hasil dari inputan kita maupun array yang dari session start di shop cart-->
<?php
 session_start();
 $total = NULL;
 $post = $_POST;
 
 /* bagian ini adalah nomor invoice yang nanti berapa jumlah invoice kemudian di tambahkan 1 */
 $numrows_invoice_db = 0;
 $invoice = $numrows_invoice_db + 1;
?>


<!DOCTYPE html>
 <head>
    <!--link css-->
  <link rel="stylesheet" href="css/Invoice.css">
 </head>
 
 <body>
  <div id="wrapshopcart">
   <h1>Bukti Pemesanan <?php echo $invoice;?></h1>
   <p>Silahkan discreenshot sebagai bukti pembelian</p>
   
   <h3>Tolong isi Data diri anda : </h3>

   <!--disini ada fungsi post yang menampilkan data inputan sebelumnya-->
   <label>Nama Lengkap <td>: <?php echo $post['nama_depan'] . ' ' . $post['nama_belakang'] ;?> </label><br />
   <label>Email        <td>: <?php echo $post['email'] ;?> </label><br />
   <label>Nomor Telephone        <td>: <?php echo $post['no_hp'] ;?></label><br />
   <label>Nomor Telephone Rumah      <td>: <?php echo $post['no_telp'] ;?></label><br />
   <label>Alamat       <td>: <?php echo $post['alamat'] ;?></label><br />
   
   <h3>Produk Yang Kamu Beli : </h3>
   <table>
    <tr><th width="70%">Produk</th><th width="10%">Quantity</th><th width="20%">Jumlah</th></tr>
    

    <!--Bagian ini sama seperti di bagian shop cart gunanya untuk menampilkan item array yang sudah diinput di session dengan variable nya-->
    <?php foreach($_SESSION['cart'] as $row):?>
     <?php 
      $jumlah = $_SESSION['price'][$row['productid']] * $row['qty']; 
      $total += $jumlah;
     ?>
    
     <tr><td><?php echo $row['product'];?></td><td><?php echo $row['qty'];?></td><td><?php echo $jumlah; ?></td></tr>
    <?php endforeach;?>
    
    <tr class="total"><td></td><td >Total</td><td><?php echo $total;?></td></tr>
   </table>   
   
   <h3>Silahkan Membayar Pembelian anda...<a href="payments.php" class="button">Next</a></h3>

 
  </div>
  
 </body>
</html>