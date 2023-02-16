<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
	$name = $_POST['name'];
	$email = $_POST['email'];
	$message = $_POST['message'];
	$to = 'your-email@example.com';
	$subject = 'Message from ' . $name;
	$body = "From: $name\nEmail: $email\nMessage:\n$message";

	if (mail($to, $subject, $body)) {
	  echo '<p>Message sent successfully.</p>';
	} else {
	  echo '<p>Message failed to send.</p>';
	}
}
?>
