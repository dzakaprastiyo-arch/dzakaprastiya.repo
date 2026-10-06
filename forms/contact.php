<?php
// Handler sederhana agar fungsi contact form tidak mengarah ke endpoint milik template lama.
// Dibutuhkan hosting yang mendukung PHP dan mail().

header('Content-Type: text/plain; charset=utf-8');

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
  http_response_code(405);
  echo 'Method Not Allowed';
  exit;
}

$name = trim((string)($_POST['name'] ?? ''));
$email = trim((string)($_POST['email'] ?? ''));
$subject = trim((string)($_POST['subject'] ?? ''));
$message = trim((string)($_POST['message'] ?? ''));

if ($name === '' || $subject === '' || $message === '' || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
  http_response_code(422);
  echo 'Please complete all fields with a valid email address.';
  exit;
}

$to = 'dzakaprasetyo123@gmail.com';
$subject = '[Portfolio] ' . preg_replace('/[\r\n]+/', ' ', $subject);
$body = "Name: {$name}\nEmail: {$email}\n\n{$message}";
$headers = "From: portfolio@localhost\r\n" .
           "Reply-To: {$email}\r\n" .
           "Content-Type: text/plain; charset=UTF-8\r\n";

if (@mail($to, $subject, $body, $headers)) {
  echo 'OK';
  exit;
}

http_response_code(500);
echo 'Unable to send the message on this server. Configure a Formspree endpoint or SMTP-enabled mail handler.';
?>
