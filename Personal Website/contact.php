<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $message = $_POST["message"];
    
    // Validasi data (misalnya, pastikan email valid)
    
    // Kirim email
    $to = "tujuan@email.com";
    $subject = "Pesan dari $name";
    $headers = "From: $email";
    
    if (mail($to, $subject, $message, $headers)) {
        echo "Pesan berhasil dikirim.";
    } else {
        echo "Terjadi kesalahan saat mengirim pesan.";
    }
}
?>