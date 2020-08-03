 <?php

 
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "web";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

 if (isset($_POST['submit']))
{

$Nama   = $_POST['Nama'];
$Jabatan  = $_POST['Jabatan'];
$komentas = $_POST['comment'];

$sql = "INSERT INTO tentangku VALUES ('', '$komentas', '$Nama', '$Jabatan')";


if ($conn->query($sql) === TRUE) {
   
                   
} else {
    echo "Error updating record: " . $conn->error;
}

}
$conn->close();
?>
<html>
<head>
	<title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
	</head>
   <body>
      <script>
         setTimeout(function(){
            window.location.href = 'index.php';
         }, 5000);
      </script>
      <div class="alert alert-success">
    <strong>Thank you!</strong> Terima kasih telah mengirim tanggapan anda 
  </div>
    <div class="alert alert-info">
    <strong>Informasi!</strong> Harap Tunggu, anda akan direct ke halaman utama
  </div>
   </body>
</html>

 