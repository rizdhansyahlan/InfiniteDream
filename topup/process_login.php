<?php
require 'koneksi.php';
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = isset($_POST["email"]) ? $_POST["email"] : "";
    $password = isset($_POST["password"]) ? $_POST["password"] : "";

    // Ambil kata sandi dari formulir
    $enteredPassword = $_POST["password"];

    // Melakukan kueri untuk mendapatkan hash kata sandi dari database berdasarkan email
    $query = "SELECT password_hash FROM users WHERE email = '$email'";
    $result = $conn->query($query);
    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $storedPasswordHash = $row["password_hash"];

        // Verifikasi kata sandi
        if (password_verify($password, $storedPasswordHash)) {
            // Login berhasil
            header("Location: topup.html");
            exit();
        } else {
            // Kata sandi tidak cocok
            echo "Login gagal. Kata sandi salah.";
        }
    } else {
        // Email tidak ditemukan
        echo "Login gagal. Email tidak terdaftar.";
    }

    $conn->close();
}
?>
