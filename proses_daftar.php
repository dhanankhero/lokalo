<?PHP
include 'koneksi.php';
if (isset($_POST['daftar'])) {
  $username = $_POST['username'];
  $password = $_POST['password'];

  $sql = "INSERT INTO akun (username,password) VALUE ('$username','$password')";
  $query = mysqli_query($koneksi, $sql);
}
else {
  echo "akses dilarang";
}
header('location:index.php?pesan=berhasildaftar');

?>
