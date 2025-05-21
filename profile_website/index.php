<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $name    = htmlspecialchars($_POST["name"]);
    $email   = htmlspecialchars($_POST["email"]);
    $message = htmlspecialchars($_POST["message"]);

    $to = "arip.only.62@gmail.com"; // Ganti sesuai kebutuhan
    $subject = "Pesan dari $name";
    $body = "Nama: $name\nEmail: $email\n\nPesan:\n$message";
    $headers = "From: $email";

    if (mail($to, $subject, $body, $headers)) {
        echo "<p class='success'>Pesan berhasil dikirim!</p>";
    } else {
        echo "<p class='error'>Maaf, terjadi kesalahan saat mengirim pesan.</p>";
    }
}
?>
    
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profil Mas Arip</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: #f4f6f8;
            margin: 0;
            padding: 2em;
            color: #333;
        }

        .container {
            background: #fff;
            padding: 2em;
            border-radius: 12px;
            box-shadow: 0 4px 12px rgba(0,0,0,0.1);
            max-width: 720px;
            margin: auto;
        }

        h1, h2 {
            color: #2c3e50;
        }

        a {
            color: #3498db;
            text-decoration: none;
        }

        a:hover {
            text-decoration: underline;
        }

        .skill-list {
            list-style: none;
            padding: 0;
            display: flex;
            flex-wrap: wrap;
            gap: 10px;
        }

        .skill-list li {
            background: #eaf4ff;
            padding: 8px 14px;
            border-radius: 20px;
            font-size: 0.9em;
            box-shadow: 0 2px 4px rgba(0,0,0,0.05);
        }

        form {
            margin-top: 2em;
        }

        label {
            display: block;
            margin-top: 1em;
            font-weight: bold;
        }

        input[type="text"],
        input[type="email"],
        textarea {
            width: 100%;
            padding: 10px;
            margin-top: 6px;
            border: 1px solid #ccc;
            border-radius: 8px;
            resize: vertical;
        }

        textarea {
            min-height: 120px;
        }

        button {
            margin-top: 1.5em;
            padding: 10px 20px;
            border: none;
            background: #3498db;
            color: #fff;
            border-radius: 8px;
            cursor: pointer;
            font-weight: bold;
        }

        button:hover {
            background: #2980b9;
        }

        .success {
            color: green;
            margin-top: 1em;
        }

        .error {
            color: red;
            margin-top: 1em;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Halo, saya Arip</h1>
        <p>Saya seorang junior web developer yang fokus pada clean code dan solusi praktis.</p>
        <p>Penguasaan: PHP, JavaScript, MySQL, HTML, CSS, Bootstrap, dan administrasi jaringan.</p>
        
        <p>Email: <a href="mailto:arip.only.62@gmail.com">arip.only.62@gmail.com</a></p>
        <p>GitHub: <a href="https://github.com/AripOnly" target="_blank">github.com/AripOnly</a></p>

        <h2>Skill Saya</h2>
        <ul class="skill-list">
            <li>HTML</li>
            <li>CSS</li>
            <li>JavaScript</li>
            <li>PHP</li>
            <li>MySQL</li>
            <li>Bootstrap</li>
            <li>Network Administration</li>
        </ul>

        <h2>Kontak Saya</h2>
        <form action="contact_form.php" method="POST">
            <label for="name">Nama</label>
            <input type="text" id="name" name="name" required>

            <label for="email">Email</label>
            <input type="email" id="email" name="email" required>

            <label for="message">Pesan</label>
            <textarea id="message" name="message" required></textarea>

            <button type="submit">Kirim Pesan</button>
        </form>
    </div>
</body>
</html>
