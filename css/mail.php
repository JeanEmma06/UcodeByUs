
<?php

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $name = $_POST['name'];
  $email = $_POST['email'];
  $subject = $_POST['subject'];
  $message = $_POST['message'];

  $mailheader = "From: $name <$email>\r\n";
  $recipient = "jeanemmanuel225@gmail.com";

  if (mail($recipient, $subject, $message, $mailheader)) {
    echo "E-mail sent successfully.";
  } else {
    echo "Error sending e-mail.";
  }
}

?>