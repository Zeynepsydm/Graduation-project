<?php
// Veritabanı bağlantısı için gerekli bilgileri asagida veriyoruz
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "LastClassProject";

// POST ile gelen kullanıcı adı ve şifre yi aliyoruz
$user = $_POST['username'];
$pass = $_POST['password'];

// Veritabanı bağlantısını oluşturmamiz gerek
$conn = new mysqli($servername, $username, $password, $dbname);

// Bağlantıyı kontrol etmemiz gerek
if ($conn->connect_error) {
    die("Connection error to database: " . $conn->connect_error);
}

// Kullanıcı adı ve şifreyi kontrol ediyor
$sql = "SELECT * FROM Users WHERE username='$user' AND password='$pass'";
$result = $conn->query($sql);

if ($result->num_rows == 1) {
    // Giriş başarılı
   
} else {
    // Giriş başarısız
   
}

$conn->close();
?>
