<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Halaman Edit Transaksi</title>
</head>

<body>
  <h3>Edit Data Transaksi</h3>
  <form action="<?= base_url('home/fungsiEditTransaksi'); ?>" method="post">
    <table>
      <tr>
        <td>ID</td>
        <td> : </td>
        <td>
          <input type="text" name="id" value="<?= $queryTrDetail->id; ?>" readonly>
        </td>
      </tr>
      <tr>
        <td>Menu</td>
        <td> : </td>
        <td>
          <select name="menu" id="menu">
            <?php foreach ($queryAllMn as $row) : ?>
            <option value="<?= $row->nama; ?>"><?= $row->nama; ?></option>
            <?php endforeach; ?>
          </select>
        </td>
      </tr>
      <tr>
        <td>Jumlah</td>
        <td> : </td>
        <td>
          <input type="number" name="jumlah" value="<?= $queryTrDetail->jumlah; ?>">
        </td>
      </tr>
      <tr>
        <td colspan="3">
          <button type="submit">Edit Transaksi</button>
        </td>
      </tr>
    </table>
  </form>
</body>

</html>