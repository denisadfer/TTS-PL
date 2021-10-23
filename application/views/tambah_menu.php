<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Halaman Tambah Menu</title>
</head>

<body>
  <h3>Tambah Data Menu</h3>
  <form action="<?= base_url('home/fungsiTambahMenu'); ?>" method="post">
    <table>
      <tr>
        <td>Nama</td>
        <td> : </td>
        <td>
          <input type="text" name="nama" autocomplete="off">
        </td>
      </tr>
      <tr>
        <td>Harga</td>
        <td> : </td>
        <td>
          <input type="number" name="harga" autocomplete="off">
        </td>
      </tr>
      <tr>
        <td colspan="3">
          <button type="submit">Tambah Menu</button>
        </td>
      </tr>
    </table>
  </form>
</body>

</html>