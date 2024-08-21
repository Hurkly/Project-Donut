<!--Disini masih ada session_start gunanya untuk masih menyimpan array pada sebelumnya di shopcart-->
<?php
 session_start();
?>


<!DOCTYPE html>
 <head>
    <!--link css-->
 <link rel="stylesheet" href="css/Checkout.css">
 </head>
 
 <body>
  <div id="wrapshopcart">
   <h1>Identitas</h1>
   <p>Tolong Lengkapi Identitas anda untuk melanjutkan pembelian: </p>
   <!--disini menggunakan form action yang menge-post data dari inputan ke bagian invoice-->
   <form action="invoice.php" method="POST">
    <!--disini ada label untuk pelengkap keterangan input form-->
   <label>Nama Depan : </label><input type="text" name="nama_depan" class="inputan" /><br />
   <label>Nama Belakang : </label><input type="text" name="nama_belakang" class="inputan" /><br />
   <label>Email : </label><input type="text" name="email" class="inputan" /><br />
   <label>Nomor telephone : </label><input type="text" name="no_hp" class="inputan" /><br />
   <label>Nomor telephone Rumah : </label><input type="text" name="no_telp" class="inputan" /><br />
   <label>Alamat :</label><textarea name="alamat" class="textan"></textarea><br />
   <input type="submit" name="kirim" value="Proceed" class="submitbtn" />
   </form>
   
   
  </div>
  
 </body>
</html>