<?php   //Contact page you should use if you get SMTP service
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];


    $to = "mert7can4114@gmail.com";


    $subject = "Contact Form Message";


    $email_content = "Sender Name: $name\n";
    $email_content .= "Sender Email Address: $email\n\n";
    $email_content .= "Message:\n$message\n";


    $headers = "From: $name <$email>";


    if (mail($to, $subject, $email_content, $headers)) {

        echo "<p>Your message has been sent successfully. Thanks!</p>";
    } else {

        echo "<p>Sorry, there was an error sending your message. Please try again later.</p>";
    }
} else {

    echo "<p>The form was not sent via post method.</p>";
}
?>
