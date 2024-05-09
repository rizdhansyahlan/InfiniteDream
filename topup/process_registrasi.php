<?php
require 'koneksi.php';
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Ambil data dari formulir
    $name = $_POST["username"];
    $email = $_POST["email"];
    $password = $_POST["password"];

    // Simpan password sebelum di-hash ke dalam database
    $query = "INSERT INTO users (name, email, password_plain) VALUES ('$name', '$email', '$password')";

    // Hash kata sandi
    $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

    // Update kolom password_hash dengan nilai yang di-hash
    $updateQuery = "UPDATE users SET password_hash = '$hashedPassword' WHERE email = '$email'";

    // Periksa apakah email sudah terdaftar sebelumnya
    $checkEmailQuery = "SELECT * FROM users WHERE email = '$email'";
    $result = $conn->query($checkEmailQuery);

    if ($result->num_rows > 0) {
        // Email sudah terdaftar, berikan pesan kesalahan atau tindakan lainnya
        echo "Email sudah terdaftar. Gunakan email lain.";
    } else {
        // Insert data pengguna baru ke dalam database
        $insertQuery = "INSERT INTO users (name, email, password_hash) VALUES ('$name', '$email', '$hashedPassword')";

        if ($conn->query($insertQuery) === TRUE) {
            // Registrasi berhasil, berikan pesan sukses atau tindakan lainnya
            header("Location: /uas_wp7/topup/logintopup.php");
        } else {
            // Registrasi gagal, berikan pesan kesalahan atau tindakan lainnya
            echo "Error: " . $insertQuery . "<br>" . $conn->error;
        }
    }

    $conn->close();
}
?>
