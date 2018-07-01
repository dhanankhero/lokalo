<?PHP
include '../koneksi.php';
include '../session.php';
$pengirim = $_SESSION['username'];
if (isset($_POST['kirim'])) {
  $pesan = $_POST['pesan'];

  $sql = "INSERT INTO pesan (username,pesan) VALUE ('$pengirim','$pesan')";
  $query = mysqli_query($koneksi, $sql);
}
else {
  echo "akses dilarang";
}
header('location:./chat.php');

?>
