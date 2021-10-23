<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Transaksi</title>
  <style>
  table {
    border-collapse: collapse;
    width: 800px;
  }

  table td,
  table th {
    border: 1px solid #ddd;
    padding: 8px;
  }

  table tr:nth-child(even) {
    background-color: #f2f2f2;
  }

  table th {
    padding-top: 10px;
    padding-bottom: 10px;
    text-align: left;
    background-color: #523fff;
    color: white;
  }
  </style>
</head>

<body>
  <h1>Data Transaksi</h1>

  <a href="<?= base_url('/home/halaman_tambah_transaksi') ?>">Tambah Data Transaksi</a>
  <a href="<?= base_url('/home/main') ?>" style="margin-left: 50px;">
    << Back</a><br><br>
      <table border=1 cellpadding=10 cellspacing=0>
        <tr>
          <th>No</th>
          <th>ID</th>
          <th>Menu</th>
          <th>Harga</th>
          <th>Jumlah</th>
          <th>Total</th>
          <th>Tanggal Transaksi</th>
          <th>Aksi</th>
          <th>Cetak</th>
        </tr>
        <?php $i=1; foreach ($queryAllTr as $row) : ?>
        <tr>
          <td><?= $i; ?></td>
          <td><?= $row->id; ?></td>
          <td><?= $row->nama; ?></td>
          <td><?= $row->harga; ?></td>
          <td><?= $row->jumlah; ?></td>
          <td><?= $row->total; ?></td>
          <td><?= $row->tanggal; ?></td>
          <td>
            <a href="<?= base_url('/home/halaman_edit_transaksi') ?>/<?= $row->id; ?>">Edit</a> |
            <a href="<?= base_url('/home/fungsiDeleteTransaksi') ?>/<?= $row->id; ?>"
              onclick="return confirm('Yakin ingin dihapus?');">Delete</a>
          </td>
          <td>
            <a href="<?= base_url('/home/halaman_cetak') ?>/<?= $row->id; ?>">Cetak</a>
          </td>
        </tr>
        <?php $i++; endforeach; ?>
      </table>
</body>

</html>