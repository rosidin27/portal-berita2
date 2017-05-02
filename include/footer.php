<?php
$kontak = getKontak(); 
$your_email = $kontak['email'];// <<=== update to your email address
$errors = '';
//$name = '';
$visitor_email = '';
$user_message = '';

if(isset($_POST['submit']))
{
    
    //$name = $_POST['name'];
    $visitor_email = $_POST['email'];
    $user_message = $_POST['message'];
    ///------------Do Validations-------------
    if(empty($visitor_email))
    {
        $errors .= "\n Email are required fields. ";   
    }
    if(IsInjected($visitor_email))
    {
        $errors .= "\n Bad email value!";
    }
    if(empty($_SESSION['6_letters_code'] ) ||
      strcasecmp($_SESSION['6_letters_code'], $_POST['6_letters_code']) != 0)
    {
    //Note: the captcha code is compared case insensitively.
    //if you want case sensitive match, update the check above to
    // strcmp()
        $errors .= "\n The captcha code does not match!";
        echo "<script>alert('The captcha code does not match !'); window.location='".$GLOBALS['BASE_URL']."/home#kontak'</script>";
    }
    
    if(empty($errors))
    {
        //send the email
        $to = $your_email;
        $subject="New form submission";
        $from = $your_email;
        $ip = isset($_SERVER['REMOTE_ADDR']) ? $_SERVER['REMOTE_ADDR'] : '';
        
        $body = "A user $visitor_email submitted the contact form:\n".
        "Email: $visitor_email \n".
        "Message: \n ".
        "$user_message\n".
        "IP: $ip\n";    
        
        $headers = "From: $from \r\n";
        $headers .= "Reply-To: $visitor_email \r\n";
        
        mail($to, $subject, $body,$headers);
        
        echo "<script>alert('Pesan terkirim !'); window.location='".$GLOBALS['BASE_URL']."/home#kontak'</script>";
    }
}

// Function to validate against any email injection attempts
function IsInjected($str)
{
  $injections = array('(\n+)',
              '(\r+)',
              '(\t+)',
              '(%0A+)',
              '(%0D+)',
              '(%08+)',
              '(%09+)'
              );
  $inject = join('|', $injections);
  $inject = "/$inject/i";
  if(preg_match($inject,$str))
    {
    return true;
  }
  else
    {
    return false;
  }
}

?>
<div id="kontak" class="footer" style="margin-top: 50px;">
  <div class="soc-media">
    <div class="container">
      <div class="col-lg-2.2 col-md-2 col-sm-2 col-xs-2 soc-medeia-footer facebook"></div>
      <div class="col-lg-2.2 col-md-2 col-sm-2 col-xs-2 soc-medeia-footer facebook"><div class="soc-more"><a href="<?php echo $kontak['facebook']; ?>" target="_blank" title="Facebook"><i class="icon-facebook"></i></a></div></div>
      <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2 soc-medeia-footer twitter"><div class="soc-more"><a href="https://www.twitter.com/<?php echo $kontak['twitter']; ?>" target="_blank" title="Twitter"><i class="icon-twitter"></i></a></div></div>
      <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2 soc-medeia-footer dribbble"><div class="soc-more"><a href="<?php echo $kontak['youtube']; ?>" target="_blank" title="Youtube"><i class="icon-video"></i></a></div></div>
      <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2 soc-medeia-footer rss" style="border-right: 1px solid #444;"><div class="soc-more"><a href="https://www.instagram.com/<?php echo $kontak['instagram']; ?>" target="_blank" title="Instagram"><i class="icon-camera"></i></a></div></div>
    </div>
  </div>
  <div class="container">
    <div class="row">
      <div class="col-lg-3 col-md-3 col-sm-3">
        <div class="widget_text footer-widget">
          <div class="textwidget">
            <a href="#" style="width: 100%;display: inline-block;padding-bottom: 15px;"><img src="<?= $GLOBALS['BASE_URL'] ?>/assets/images/logo_footer.png" alt="" ></a>Can curiosity may end shameless explained. True high on said mr on come. Attended of on stronger or mr pleasure. Rich four like real yet west get. His pleasure new steepest for reserved formerly disposed jennings. Projection at literature insensible motionless projecting.
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-md-3 col-sm-3">
        <div class="widget_primary-get-in-touch footer-widget">
          <h4 class="widget-title">Contact</h4>
          <ul class="contact-footer contact-composer">
            <li><i class="icon-map-pin"></i> <span><?= $kontak['kontak']?></span></li>
            <li><i class="icon-phone"></i> <span>Phone: <?= $kontak['phone']?></span></li>
            <li><i class="icon-envelope"></i> <span>E-mail: <?= $kontak['email']?></span></li>
          </ul>
        </div>            
      </div>
      <div class="col-lg-3 col-md-3 col-sm-3">
        <div class="widget_categories footer-widget"><h4 class="widget-title">Categories</h4>   
          <ul>
            <?php 
              $kat = getKategori();
              $count = 0;
              while($kategori = $kat->fetch(PDO::FETCH_ASSOC)){ 
                $count = JumlahData("SELECT *FROM berita WHERE id_kategori='".$kategori['id_kategori']."'");
                ?>
                <li><a href="<?= $GLOBALS['BASE_URL'] ?>/berita/kategori/<?= $kategori['id_kategori'] ?>" ><?= $kategori['kategori'] ?></a> <span class="oi_cat_count"><?= $count ?></span></li>
              <?php
              }
            ?>
          </ul>
        </div>            
      </div>
      <div class="col-lg-3 col-md-3 col-sm-3" style="margin-top: 30px;">
        <form action="" method="post" name="contact_form">
            <div class="form-group">
                <label  style="color:white">Email<span class="form-asterisk">*</span></label>
                <input type="email" class="form-control input-sm input-inverse" name="email" required="" data-form-field="Email" id="contacts3-2-email" value="<?php echo htmlentities($visitor_email) ?>">
            </div>
            <div class="form-group">
                <label style="color:white">Message</label>
                <textarea class="form-control input-sm input-inverse" name="message" data-form-field="Message" rows="5" id="contacts3-2-message"><?php echo htmlentities($user_message) ?></textarea>
            </div>
            <div class="form-group">
                <img src="<?= $GLOBALS['BASE_URL'] ?>/captcha/rand/<?php echo rand(); ?>" id='captchaimg' ><br>
                <label style="color:white">Enter the code above here :</label><br>
                <input class="form-control" id="6_letters_code" name="6_letters_code" type="text" required=""><br>
                <small style="color:white">Can't read the image? click <a href='javascript: refreshCaptcha();'>here</a> to refresh</small>
            </div>
            <div><button type="submit" name="submit" class="btn btn-sm btn-black">Send</button></div>
        </form>
      </div>
    </div>
    <div class="row">
      <div class="container">
        <div class="footer-bottom">
          <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-6 col-ms-12 pull-left">
              <div class="copyright">Copyright © 2017 Primary. Design by <a href="https://themeforest.net/item/primary-business-htmlcss-template/11810558?ref=Dankov" target="_blank">Dankov</a></div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-6 col-ms-12 pull-right">
              <div class="foot_menu">
                <div class="menu-footer-menu-container">
                  <ul>
                    <li><a href="#">Home</a></li>
                    <li><a href="#">About Us</a></li>
                    <li><a href="#">Blog</a></li>
                    <li><a href="#">Services</a></li>
                    <li><a href="http://themeforest.net/user/Dankov">Purchase</a></li>
                  </ul>
                </div>            
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<script language="JavaScript">
    // Code for validating the form
    // Visit http://www.javascript-coder.com/html-form/javascript-form-validation.phtml
    // for details
    var frmvalidator  = new Validator("contact_form");
    //remove the following two lines if you like error message box popups
    frmvalidator.EnableOnPageErrorDisplaySingleBox();
    frmvalidator.EnableMsgsTogether();

    frmvalidator.addValidation("message","req","Please provide your message"); 
    frmvalidator.addValidation("email","req","Please provide your email"); 
    frmvalidator.addValidation("email","email","Please enter a valid email address"); 
    </script>
    <script language='JavaScript' type='text/javascript'>
    function refreshCaptcha()
    {
        var img = document.images['captchaimg'];
        img.src = img.src.substring(0,img.src.lastIndexOf("?"))+"?rand="+Math.random()*1000;
    }
</script>
<?php
function getKontak(){
    $sql_kontak = "SELECT *FROM kontak ORDER BY id_kontak DESC LIMIT 1";
    $kontak = PdoSelect($sql_kontak);

    return $kontak;
}
?>