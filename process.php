

<?php

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    if (isset($_POST["sendnow"])) {
        if (empty($_POST["name"]) || empty($_POST["email"]) || empty($_POST["message"])) {
            header("Location:contactus.php?error=3");
        } else if (!filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)) {
            header("Location:contactus.php?error=4");
        } else {
            $name = $_POST["name"];
            $email = $_POST["email"];
            $message = $_POST["message"];

            $to = "yashodhakulathunga@gmail.com";
            $mail_subject = "Message from the website";
            /* $email_body = "Message from the Contatct Us page of the Website";
              $email_body = "<b>From:</b> {$name} <br>";
              $email_body = "<b>Message:</b><br>" . nl2br(strip_tags($message)); */
            $email_body = "Message from the Contact Us page of the Website";
            $email_body .= "<b>From:</b> {$name} <br>";
            $email_body .= "<b>Message:</b><br>" . nl2br(strip_tags($message));
            $header = "From: {$email}\r\nContent-Type: text/html;";


            $send_email_result = mail($to, $email_body, $mail_subject,$header);


            if ($send_email_result) {
                echo '<script type="text/javascript">
              alert("Message Sent!");
              window.location="contactus.php";
          </script>';
            } else {
                echo '<script type="text/javascript">
              alert("Message not Sent!");
              window.location="contactus.php";
          </script>';
            }
        }
    } else {
        header("Location:contactus.php?error=2");
    }
} else {
    header("Location:contactus.php?error=1");
}
?>
