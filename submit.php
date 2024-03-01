<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $message = $_POST["message"];

    // Form verilerini e-posta olarak gönderme
    $to = "example@example.com"; // Alıcı e-posta adresi
    $subject = "Contact Form Submission";
    $body = "Name: $name\nEmail: $email\nMessage: $message";

    // E-postayı gönderme
    if (mail($to, $subject, $body)) {
        echo "Message sent successfully!";
    } else {
        echo "Failed to send message. Please try again later.";
    }
} else {
    // Formun POST metoduyla gönderilmediği durumda hata mesajı gösterme
    echo "Form submission method is not allowed.";
}
?>
