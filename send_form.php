<?php
  $name = $_POST['name'];
  $email = $_POST['email'];
  $message = $_POST['message'];

  $to = 'gqad9935@hotmail.com';
  $subject = 'New message from ' . $name;
  $body = "Name: $name\nEmail: $email\n\n$message";

  if (mail($to, $subject, $body)) {
    echo '<p>Your message has been sent!</p>';
  } else {
    echo '<p>There was an error sending your message. Please try again later.</p>';
  }
?>
