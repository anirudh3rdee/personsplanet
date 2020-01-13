<?php 
if(isset($_POST['submit'])){

$user_fname = $_POST['user_fname'];
$user_lname = $_POST['user_lname'];
$user_email = $_POST['user_email'];
$user_contact = $_POST['user_contact'];
$user_msg = $_POST['user_msg']; 

$to = "mperson@nationalfutures.com";
$subject = "Contact Us Form";

$message = "
<table>
<tr>
<td>Firstname</td>
<td>$user_fname</td>
</tr>

<tr>
<td>Lastname</td>
<td>$user_lname</td>
</tr>

<tr>
<td>Email Address</td>
<td>$user_email</td>
</tr>

<tr>
<td>Contact Number</td>
<td>$user_contact</td>
</tr>

<tr>
<td>Message</td>
<td>$user_msg</td>
</tr>

</table>
";

// Always set content-type when sending HTML email
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

$mailsend = mail($to,$subject,$message,$headers);

  if($mailsend)
  {
    echo '<h3 class="email_output">Mail Send Sucessfully...</h3>';
  }
  else
  {
    echo '<h3 class="email_output">Mail Not Sending...</h3>';
  }
}

foreach ($pageData as $key ) {
  $array_data = (array) json_decode($key->value);
  $featureImage = trim( $array_data['featureImage'] );
	$back_url = base_url().$featureImage;
	$back_css = '';

	if( '' != $featureImage ){
     $back_css = "style='background-image: url(".$back_url.")'";

	?>

<section class="banner_sec_about about_bg" <?php echo $back_css;?>>
    <div class="container">
        <div class="row">
            <div class="banner_text1">
                <h1 style="color: white;" class="market_banner"><?php echo $array_data['bannerhead']; ?></h1>
            </div>
        </div>
    </div>
	</section>
  <?php 
}//end .banner_sec_about
}
?>
    <div class="container">
      <div class="row">
    
      <div class="col-md-8 offset-2" >
        <div id="para">
      <h1 class="contact_heading">Contact Us</h1>
      <p class="para_dark">Please Complete the form in its entirely </p>
      <hr>

  <form method="POST" action="" id="contact_form">
  <div class="row">
    <div class="col-md-6">
        <div class="c-field">
          <label for="f_name" ><b>First Name </b></label><br>
          <input type="text" name="user_fname" id="user_fname" class="sssss" placeholder="Enter First Name" name="user_fname">
        </div>
    </div>
    <div class="col-md-6">
        <div class="c-field">
            <label for="f_name" ><b>Last Name</b></label><br>
            <input type="text" name="user_lname" id="user_lname" class="sssss" placeholder="Enter Last Name" name="user_lname">
        </div>
      </div>
      <div class="col-md-6">
        <div class="c-field">
          <label for="email" style=""><b>Email&nbsp&nbsp<span style="color: red;">*</span></b></label><br>
          <input type="email" name="user_email" id="user_email" class="sssss" placeholder="Enter Email" name="user_email" required><br>
        </div>
      </div>
      <div class="col-md-6">
        <div class="c-field">
        <!-- <label for="psw-repeat"><i class="fas fa-phone-alt" aria-hidden="true" style="
      font-size: 100;"></i><b>&nbsp;&nbsp;Home Phone</b></label> -->
      <label for="psw-repeat"><b>Home Phone</b></label><br>
      <input type="text" name="user_contact" class="sssss" id="user_contact" placeholder="Enter Phone Number" name="user_contact">
        </div>
      </div>
      <div class="col-md-12">
        <div class="c-field">
        <label for="msg" ><b>YourMessage</b></label><br>
      <textarea id="user_msg" name="user_msg" placeholder="Write something.." style=""></textarea>
        </div>
      </div>
      <div class="col-md-12">
        <div class="c-field">
        <label>
<div class="email_consent">
      <p>Email Consent&nbsp&nbsp<span style="color: red;">*</span></p>
      
          <input type="checkbox" checked="checked" id="remember" name="remember" value="yes" height="100px;" required="required">&nbsp&nbsp I give John Person Inc permission to send me email about new products, services and special offers.
        </label>
        </div>
      </div>
    </div>
     
</div>
      <p style="font-size: 12px;"><span style="color: red;">*</span>&nbsp&nbspRequired Fields</p>
      <div class="c-field-btn">
        <button type="submit" name="submit" class="registerbtn yellow_btn">Contact Us Today</button>
      </div>

      

      <div align="center"><span>We respect your <a href="<?php echo base_url('/privacy-policy');?>" class="privacy_link">privacy</a></span></div>
  </form>
    </div>
  </div>
  
  </div>
  </div>
  <br/>
