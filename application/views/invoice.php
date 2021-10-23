<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Invoice</title>
  <style>
  div {
    border: 2px solid black;
    width: 350px;
    height: 270px;
    margin: auto;
  }
  </style>
</head>

<body>
  <a href="<?= base_url('/home/daftar_transaksi') ?>">
    << Back</a><br><br>
      <div align=center>
        <h2>Invoice</h2>
        <table cellspacing=10 cellpadding=0>
          <tr>
            <td>ID Transaksi</td>
            <td>:</td>
            <td><?= $queryTrDetail->id ; ?></td>
          </tr>
          <tr>
            <td>Tanggal Transaksi</td>
            <td>:</td>
            <?php 
            $tanggal = date_create($queryTrDetail->tanggal);
            $tgl = date_format($tanggal, 'd/m/Y H:i:s');
            ?>
            <td><?= $tgl ; ?></td>
          </tr>
          <tr>
            <td>Menu</td>
            <td>:</td>
            <td><?= $queryTrDetail->nama ; ?></td>
          </tr>
          <tr>
            <td>Harga/pcs</td>
            <td>:</td>
            <td><?= $queryTrDetail->harga ; ?></td>
          </tr>
          <tr>
            <td>Qty</td>
            <td>:</td>
            <td><?= $queryTrDetail->jumlah ; ?></td>
          </tr>
          <tr>
            <td>Total</td>
            <td>:</td>
            <td><?= $queryTrDetail->total ; ?></td>
          </tr>

        </table>
      </div>

</body>

</html>