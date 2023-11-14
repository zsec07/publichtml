<?php
include "config.php";

if (!isset($_POST['g-recaptcha-response'])) {
    header('Location: captcha.php');
    exit;
}

if (isset($_COOKIE["session_id"])) {
    setcookie("session_id", "", time() - 3600, "/");

}

$recaptchaSecretKey = $RECAPTCHA_SECRET_KEY;
$recaptchaResponse = $_POST['g-recaptcha-response'];

// Cookie
$expiration_time = time() + 900;
$cookie_name = "session_id";
$cookie_value = $recaptchaResponse;
setcookie($cookie_name, $cookie_value, $expiration_time, '/');

$url = 'https://www.google.com/recaptcha/api/siteverify';
$data = array(
    'secret' => $recaptchaSecretKey,
    'response' => $recaptchaResponse
);

$options = array(
    'http' => array(
        'header' => "Content-Type: application/x-www-form-urlencoded\r\n",
        'method' => 'POST',
        'content' => http_build_query($data)
    )
);

$context = stream_context_create($options);
$response = file_get_contents($url, false, $context);
$responseData = json_decode($response);

if ($responseData->success) {
    header('Location: index.php');
} else {
}

?>