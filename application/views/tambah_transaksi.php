<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Halaman Tambah Transaksi</title>
</head>

<body>
  <h3>Tambah Data Transaksi</h3>
  <form action="<?= base_url('home/fungsiTambahTransaksi'); ?>" method="post">
    <table>
      <tr>
        <td>
          Masukkan Jumlah :
          <input type="number" name="jumlah" autocomplete="off">
        </td>
      </tr>
      <tr>
        <td>
          <select name="menu" id="menu">
            <option value="" selected disabled hidden>Pilih Menu</option>
            <?php foreach ($queryAllMn as $row) : ?>
            <option value="<?= $row->nama; ?>"><?= $row->nama; ?></option>
            <?php endforeach; ?>
          </select>
        </td>
      </tr>
      <tr>
        <td colspan="3">
          <button type="submit">Tambah Transaksi</button>
        </td>
      </tr>
    </table>
  </form>
</body>

</html>