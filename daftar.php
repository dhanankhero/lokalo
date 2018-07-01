<?PHP
require_once"koneksi.php";
if(!empty($_SESSION['member_id'])) {
header ('location:./chat.php');
}
?>
<!DOCTYPE html>
<html lang="id" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Localo</title>
    <link href="https://fonts.googleapis.com/css?family=Muli" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
  </head>
  <body>
    <div class="headpage">
      <img src="img/logo.png" alt="" style="height:100px;" title="LokalO">
    </div>
    <div class="container-login">
      <div class="paper-login">
        <div class="head-paper">
          <h1>Daftar</h1>
        </div>
        <div class="form">
          <form class="" action="proses_daftar.php" method="post" name="pendaftaran">
            <input type="text" name="username" value="" class="username" placeholder="Nama Pengguna">
            <input type="password" name="password" value="" class="password" placeholder="Kode Pengguna">
            <div class="input-logreg">
              <div class="register">
                <input type="submit" name="daftar" value="" title="Daftar">
              </div>
              <div class="login">
                <a href="index.php"><input type="button" name="" value="" title="Login"></a>
              </div>
              <div class="clear"></div>
            </div>
          </form>
        </div>
      </div>
      <div class="tolong">
        <span>Susah Login atau Buat akun??<br/>Klik <a href="#">disini</a> jika butuh bantuan</span>
      </div>
    </div>
  </body>
</html>
