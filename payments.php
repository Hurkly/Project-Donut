<?php
session_start();
$total = NULL;
?>


<!DOCTYPE html>
<html>
<head>
  <title>Payment</title>

  <!--ini adalah cssnya-->
  <link rel="stylesheet" type="text/css" href="css/paystyle.css">

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!--ini adalah stylesheet css direktori tambahan-->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  <!--ini adalah link font-->
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
  <!--bagian javascript ini berfungsi sebagai alert yang jika kalau kita menekan tombol akan muncul pesan di atas-->
  <script type="text/javascript">
    function disp_alert(txt)
    {if (confirm("Sukses, Orderan Anda sudah diterima dan akan diproses. Mohon Tunggu")) window.location = "home.php";}
    </script>


</head>
<body>
  <main class="page payment-page">
    <section class="payment-form dark">
      <div class="container">
        <div class="block-heading">
          <h2>Payment</h2>
          <p>Continue to pay for donut purchases at Varo D'Nuts</p>
        </div>
        <!--bagian ini adalah bagian form-->
        <form>
          <table>
            <!--seperti tadi menampilkan session array dari shop cart-->
            <tr><th width="70%">Produk</th><th width="10%">Quantity</th><th width="20%">Jumlah</th></tr>
    
            <?php foreach($_SESSION['cart'] as $row):?>
            <?php 
              $jumlah = $_SESSION['price'][$row['productid']] * $row['qty']; 
              $total += $jumlah;
            ?>
    
            <tr><td><?php echo $row['product'];?></td><td><?php echo $row['qty'];?></td><td><?php echo $jumlah; ?></td></tr>
              <?php endforeach;?>
    
            <tr class="total"><td></td><td >Total</td><td><?php echo $total;?></td></tr>
          </table>

          <!--Disini ada form card detail yang isinya form inputan-->
          <div class="card-details">
            <h3 class="title">Pembayaran Tunai</h3>
            <div class="row">
              <div class="form-group col-sm-8">
                <label for="card-number">Nama</label>
                <input id="card-number" type="text" class="form-control" placeholder="Nama" aria-label="Card Holder" aria-describedby="basic-addon1">
              </div>
              <div class="form-group col-sm-4">
                <label for="cvc">Masukkan Nilai Rupiah</label>
                <input id="cvc" type="text" class="form-control" placeholder="Tunai" aria-label="Card Holder" aria-describedby="basic-addon1">
              </div>
              <div class="form-group col-sm-12">
                <button type="button" class="btn btn-primary btn-block" onclick="disp_alert()" value="Succsessful">Proceed</button>
              </div>
            </div>
          </div>
        </form>
      </div>
    </section>
  </main>
</body>
<!--disini ada script direktori tambahan-->
<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</body>
</html>
