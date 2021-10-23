<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Halaman Edit Menu</title>
</head>

<body>
  <h3>Edit Data Menu</h3>
  <form action="<?= base_url('home/fungsiEditMenu'); ?>" method="post">
    <table>
      <tr>
        <td>ID</td>
        <td> : </td>
        <td>
          <input type="text" name="id" value="<?= $queryMnDetail->id; ?>" readonly>
        </td>
      </tr>
      <tr>
        <td>Nama</td>
        <td> : </td>
        <td>
          <input type="text" name="nama" value="<?= $queryMnDetail->nama; ?>" autocompelete="off">
        </td>
      </tr>
      <tr>
        <td>Harga</td>
        <td> : </td>
        <td>
          <input type="number" name="harga" value="<?= $queryMnDetail->harga; ?>" autocomplete="off">
        </td>
      </tr>
      <tr>
        <td colspan="3">
          <button type="submit">Edit Menu</button>
        </td>
      </tr>
    </table>
  </form>
</body>

</html>