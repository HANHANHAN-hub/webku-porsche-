<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $firstName = htmlspecialchars($_POST['first-name']);
    $lastName = htmlspecialchars($_POST['last-name']);
    $email = htmlspecialchars($_POST['email']);

    echo "<h1>Terima kasih telah mendaftar!</h1>";
    echo "<p><strong>Nama Depan:</strong> $firstName</p>";
    echo "<p><strong>Nama Belakang:</strong> $lastName</p>";
    echo "<p><strong>Email:</strong> $email</p>";
} else {
    echo "<p>Form belum dikirim.</p>";
}
?>
