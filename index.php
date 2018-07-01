
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
          <h1>Login</h1>
        </div>
        <div class="form">
          <?php
    	if(isset($_GET['pesan'])){
    		if($_GET['pesan'] == "gagal"){
    			echo "Login gagal! username dan password salah!";
    		}else if($_GET['pesan'] == "logout"){
    			echo "Anda telah berhasil logout";
    		}else if($_GET['pesan'] == "belum_login"){
    			echo "Anda harus login untuk mengakses LokalO";
    		}else if($_GET['pesan'] == "berhasildaftar"){
    			echo "Silahkan login untuk mengakses akun anda";
    		}
    	}
    	?>
          <form class="" action="login_proses.php" method="post">
            <input type="text" name="username" value="" class="username" placeholder="Nama Pengguna">
            <input type="password" name="password" value="" class="password" placeholder="Kode Pengguna">
            <div class="input-logreg">
              <div class="register">
                <a href="daftar.php"><input type="button" name="" value="" title="Daftar"></a>
              </div>
              <div class="login">
                <input type="submit" name="" value="" title="Login">
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
