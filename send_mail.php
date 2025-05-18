<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'mail/src/Exception.php';
require 'mail/src/PHPMailer.php';
require 'mail/src/SMTP.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $email = filter_var($_POST['exampleInputEmail1'], FILTER_VALIDATE_EMAIL);
    $message = htmlspecialchars($_POST['msg']);

    if (!$email) {
        die("Invalid email");
    }

    $mail = new PHPMailer(true);
    try {
        $mail->isSMTP();
        $mail->Host = 'smtp.gmail.com'; // your SMTP server
        $mail->SMTPAuth = true;
        $mail->Username = 'talenthunt079@gmail.com';  // your email
        $mail->Password = 'kmckwfrdqcccdtps';    // your SMTP password or app password
        $mail->SMTPSecure = 'tls';
        $mail->Port = 587;

        $mail->setFrom('talenthunt079@gmail.com', 'Portfolio Site');
        $mail->addAddress('talenthunt079@gmail.com'); // where you want to receive emails
        $mail->addReplyTo($email);

       $mail->isHTML(true);
       $mail->Subject = "New message from codebyharsh portfolio site";
       $mail->Body = "
                    <h2>New Contact Message</h2>
                    <table border='1' cellpadding='10' cellspacing='0' style='border-collapse: collapse;'>
                        <tr>
                            <th align='left' style='background-color: #f2f2f2;'>Field</th>
                            <th align='left' style='background-color: #f2f2f2;'>Value</th>
                        </tr>
                        <tr>
                            <td><strong>Email</strong></td>
                            <td>{$email}</td>
                        </tr>
                        <tr>
                            <td><strong>Message</strong></td>
                            <td>" . nl2br(htmlspecialchars($message)) . "</td>
                        </tr>
                    </table>
                ";

        $mail->send();
        echo "<script>alert('Msg was sended!...');window.location.href ='index.php';</script>";
    } catch (Exception $e) {
        echo "Mailer error: {$mail->ErrorInfo}";
    }
} else {
    echo "Invalid request";
}
