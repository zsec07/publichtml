<?php
  include 'config.php';
?>
<!DOCTYPE html>
<html class="no-js" lang="en-US">
  <head>
      <title>Attention Required! | CloudFlare</title>
      <meta charset="UTF-8" />
      <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
      <meta http-equiv="X-UA-Compatible" content="IE=Edge,chrome=1" />
      <meta name="robots" content="noindex, nofollow" />
      <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1" />
      <link rel="stylesheet" id="cf_styles-css" href="cf_err.css" type="text/css" media="screen,projection" />
      <style type="text/css">body{margin:0;padding:0}</style>
      <script src='https://www.google.com/recaptcha/api.js'></script>
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
      <script>
        var submitForm = function () {
            $("#challenge-form").submit();
        }
      </script>
    </head>
  <body>
      <div id="cf-wrapper">
        <div class="cf-alert cf-alert-error cf-cookie-error" id="cookie-alert" data-translate="enable_cookies">Please enable cookies.</div>
        <div id="cf-error-details" class="cf-error-details-wrapper">
            <div class="cf-wrapper cf-header cf-error-overview">
              <h1 data-translate="challenge_headline">One more step</h1>
              <h2 class="cf-subheadline"><span data-translate="complete_sec_check">Please complete the security check</span></h2>
            </div>
            <!-- /.header -->
            <div class="cf-section cf-highlight cf-captcha-container">
              <div class="cf-wrapper">
                  <div class="cf-columns two">
                    <div class="cf-column">
                        <div class="cf-highlight-inverse cf-form-stacked">
                          <form class="challenge-form" id="challenge-form" action="chk_captcha.php" method="post" name="form">
                              <div class="g-recaptcha" data-sitekey="<?=$RECAPTCHA_SITE_KEY?>" data-callback="submitForm"></div>
                              <noscript id="cf-captcha-bookmark" class="cf-captcha-info">
                                <div>
                                    <div style="width: 302px">
                                      <div style="width: 300px; border-style: none; bottom: 12px; left: 25px; margin: 0px; padding: 0px; right: 25px; background: #f9f9f9; border: 1px solid #c1c1c1; border-radius: 3px;">
                                          <textarea id="g-recaptcha-response" name="g-recaptcha-response" class="g-recaptcha-response" style="width: 250px; height: 40px; border: 1px solid #c1c1c1; margin: 10px 25px; padding: 0px; resize: none;"></textarea>
                                          <input type="submit" value="Submit"></input>
                                      </div>
                                    </div>
                                </div>
                              </noscript>
                          </form>
                        </div>
                    </div>
                    <div class="cf-column">
                        <div class="cf-screenshot-container">
                          <span class="cf-no-screenshot"></span>
                        </div>
                    </div>
                  </div>
                  <!-- /.columns -->
              </div>
            </div>
            <!-- /.captcha-container -->
            <div class="cf-section cf-wrapper">
              <div class="cf-columns two">
                  <div class="cf-column">
                    <h2 data-translate="why_captcha_headline">Why do I have to complete a CAPTCHA?</h2>
                    <p data-translate="why_captcha_detail">Completing the CAPTCHA proves you are a human and gives you temporary access to the web property.</p>
                  </div>
                  <div class="cf-column">
                    <h2 data-translate="resolve_captcha_headline">What can I do to prevent this in the future?</h2>
                    <p data-translate="resolve_captcha_antivirus">If you are on a personal connection, like at home, you can run an anti-virus scan on your device to make sure it is not infected with malware.</p>
                    <p data-translate="resolve_captcha_network">If you are at an office or shared network, you can ask the network administrator to run a scan across the network looking for misconfigured or infected devices.</p>
                  </div>
              </div>
            </div>
            <!-- /.section -->
            <!-- /.error-footer -->
        </div>
        <!-- /#cf-error-details -->
      </div>
      <!-- /#cf-wrapper -->
  </body>
</html>