<?php //var_dump($pageData);
foreach ($pageData as $key ) {
  $array_data = (array) json_decode($key->value);

?>	
    
  <?php 
//end .banner_sec_about
}
?>
<section class="algo_blue_bg">
        <div class="container">
	<?php
	echo html_entity_decode($array_data['pageContent']);

?>
</div> <!-- end .container -->
</section> 
<section>

<div class="container">
<hr/>
<div class="row table_row">
    <div class="col-6">
    <div id="get_book_para">
<form accept-charset="UTF-8" action="https://ua268.infusionsoft.com/app/form/process/d6d9059716eb6a435f09c05626dcaa78" class="infusion-form" id="inf_form_d6d9059716eb6a435f09c05626dcaa78" method="POST" name="Planning and Scanning Sign up" onsubmit="var form = document.forms[0];
var resolution = document.createElement('input');
resolution.setAttribute('id', 'screenResolution');
resolution.setAttribute('type', 'hidden');
resolution.setAttribute('name', 'screenResolution');
var resolutionString = screen.width + 'x' + screen.height;
resolution.setAttribute('value', resolutionString);
form.appendChild(resolution);
var pluginString = '';
if (window.ActiveXObject) {
    var activeXNames = {'AcroPDF.PDF':'Adobe Reader',
        'ShockwaveFlash.ShockwaveFlash':'Flash',
        'QuickTime.QuickTime':'Quick Time',
        'SWCtl':'Shockwave',
        'WMPLayer.OCX':'Windows Media Player',
        'AgControl.AgControl':'Silverlight'};
    var plugin = null;
    for (var activeKey in activeXNames) {
        try {
            plugin = null;
            plugin = new ActiveXObject(activeKey);
        } catch (e) {
            // do nothing, the plugin is not installed
        }
        pluginString += activeXNames[activeKey] + ',';
    }
    var realPlayerNames = ['rmockx.RealPlayer G2 Control',
        'rmocx.RealPlayer G2 Control.1',
        'RealPlayer.RealPlayer(tm) ActiveX Control (32-bit)',
        'RealVideo.RealVideo(tm) ActiveX Control (32-bit)',
        'RealPlayer'];
    for (var index = 0; index < realPlayerNames.length; index++) {
        try {
            plugin = new ActiveXObject(realPlayerNames[index]);
        } catch (e) {
            continue;
        }
        if (plugin) {
            break;
        }
    }
    if (plugin) {
        pluginString += 'RealPlayer,';
    }
} else {
    for (var i = 0; i < navigator.plugins.length; i++) {
        pluginString += navigator.plugins[i].name + ',';
    }
}
pluginString = pluginString.substring(0, pluginString.lastIndexOf(','));
var plugins = document.createElement('input');
plugins.setAttribute('id', 'pluginList');
plugins.setAttribute('type', 'hidden');
plugins.setAttribute('name', 'pluginList');
plugins.setAttribute('value', pluginString);
form.appendChild(plugins);
var java = navigator.javaEnabled();
var javaEnabled = document.createElement('input');
javaEnabled.setAttribute('id', 'javaEnabled');
javaEnabled.setAttribute('type', 'hidden');
javaEnabled.setAttribute('name', 'javaEnabled');
javaEnabled.setAttribute('value', java);
form.appendChild(javaEnabled);">
<input name="inf_form_xid" type="hidden" value="d6d9059716eb6a435f09c05626dcaa78"><input name="inf_form_name" type="hidden" value="Planning and Scanning Sign up"><input name="infusionsoft_version" type="hidden" value="1.70.0.75009">
<div class="default beta-base beta-font-b" id="mainContent" style="height:100%">

<label for="f_name"><b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;First Name</b></label><br>
    <input type="text" id="inf_field_FirstName" name="inf_field_FirstName" class="sssss" placeholder="Enter First Name"><br>

    <label for="f_name"><b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Last Name</b></label><br>
    <input type="text" id="inf_field_LastName" name="inf_field_LastName"  class="sssss" placeholder="Enter Last Name"><br>

    <label for="psw-repeat"><i class="fas fa-phone-alt" aria-hidden="true" style="
    font-size: larger;
"></i><b>&nbsp;&nbsp;Home Phone</b></label><br>
    <input type="text" class="sssss" id="inf_field_Phone1" name="inf_field_Phone1" placeholder="Repeat Password"><br>

    <label for="email" style=""><b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Email&nbsp;&nbsp;<span style="color: red;">*</span></b></label><br>
    <input type="email" id="inf_field_Email" name="inf_field_Email" class="sssss" placeholder="Enter Email" required=""><br>

   <div>
<div class="infusion-submit" style="text-align:left;">
<div><div class="grecaptcha-badge" data-style="bottomright" style="width: 256px; height: 60px; display: block; transition: right 0.3s ease 0s; position: fixed; bottom: 14px; right: -186px; box-shadow: gray 0px 0px 5px; border-radius: 2px; overflow: hidden;"><div class="grecaptcha-logo"><iframe src="https://www.google.com/recaptcha/api2/anchor?ar=1&amp;k=6Le4bx0UAAAAANeDRNRCRSCL2O-zB5Lf5yUUmxXQ&amp;co=aHR0cHM6Ly9wZXJzb25zcGxhbmV0LmNvbTo0NDM.&amp;hl=en&amp;v=0bBqi43w2fj-Lg1N3qzsqHNu&amp;size=invisible&amp;cb=2bicv79uca4n" width="256" height="60" role="presentation" name="a-yxpavjydfgd8" frameborder="0" scrolling="no" sandbox="allow-forms allow-popups allow-same-origin allow-scripts allow-top-navigation allow-modals allow-popups-to-escape-sandbox"></iframe></div><div class="grecaptcha-error"></div><textarea id="g-recaptcha-response" name="g-recaptcha-response" class="g-recaptcha-response" style="width: 250px; height: 40px; border: 1px solid rgb(193, 193, 193); margin: 10px 25px; padding: 0px; resize: none; display: none;"></textarea></div></div><button class="infusion-recaptcha submit_btn" id="recaptcha_d6d9059716eb6a435f09c05626dcaa78" style="outline: none;" type="submit" value="Submit">Submit</button>
</div>
</div>
</div>
<input type="hidden" id="timeZone" name="timeZone" value="Asia/Calcutta"></form>


  </div>
</div>
</div>
</div>
</section>
