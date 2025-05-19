<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    $data = "Name: $name\nEmail: $email\nMessage: $message\n\n";
    file_put_contents("messages.txt", $data, FILE_APPEND);
    echo "Pesan berhasil dikirim!";
}
?>
<form method="POST">
    Nama: <input type="text" name="name" required><br>
    Email: <input type="email" name="email" required><br>
    Pesan: <textarea name="message" required></textarea><br>
    <input type="submit" value="Kirim">
</form>