<!DOCTYPE html>
<html>
<head>
  <title>Login</title>
  <link rel="stylesheet" type="text/css" href="css/style1.css">
</head>
<body>
     <form action="login.php" method="post">
      <h2>Aplikasi Prediksi Rawan Longsor Kabupaten Kulon Progo</h2>
      <?php if (isset($_GET['error'])) { ?>
        <p class="error"><?php echo $_GET['error']; ?></p>
      <?php } ?>
      <label>Username</label>
      <input type="text" name="uname" placeholder="Username"><br>

      <label>Password</label>
      <input type="password" name="password" placeholder="Password"><br>

      <button type="submit" align = "center">Login</button>
     </form>
</body>
</html>