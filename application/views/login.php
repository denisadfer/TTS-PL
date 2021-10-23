<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login</title>
</head>

<body>
  <h1>Halaman Login</h1>
  <hr style="border: 1px solid black; margin-bottom: 16px;">
  <form action="<?= base_url('/home/fungsiLogin') ?>" method="post">
    <table cellpadding="5" cellspacing="0">
      <tr>
        <td>Username</td>
        <td>:</td>
        <td><input type="text" name="username" size="25"></td>
      </tr>
      <tr>
        <td>Password</td>
        <td>:</td>
        <td><input type="password" name="pass" size="25"></td>
      </tr>
      <tr>
        <td></td>
        <td></td>
        <td align="left">
          <button type="submit" name="login">Login</button>
        </td>
      </tr>
    </table>
  </form>

</body>

</html>