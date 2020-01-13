<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php echo $page_title;?></title>
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/jquery.slick/1.5.0/slick.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/jquery.slick/1.5.0/slick-theme.css">
    <script src="https://kit.fontawesome.com/5288d6453d.js" crossorigin="anonymous"></script>
      <script src="<?php echo base_url(); ?>assets/js/jquery.min.js"></script>
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/style.css">
    <link href='https://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet'>
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/slick.css">
<link rel="stylesheet" href="<?php echo base_url(); ?>assets/frontend/default_css/my_stylesheet.css">
<link rel="stylesheet" href="<?php echo base_url(); ?>assets/fullcalendar/css/fullcalendar.css" />
 <!--  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha.6/css/bootstrap.css" /> -->
 <!--  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script> -->
  
  <script src="<?php echo base_url(); ?>assets/fullcalendar/js/moment.min.js"></script>
  <script src="<?php echo base_url(); ?>assets/fullcalendar/js/jquery-ui.min.js"></script>
  <script src="<?php echo base_url(); ?>assets/fullcalendar/js/fullcalendar.js"></script>
  

 <script src="https://cdn.jsdelivr.net/jquery.slick/1.6.0/slick.min.js"></script>
 <script src="<?php echo base_url(); ?>assets/js/slick-custom.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.6.0/slick.min.css">
<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/slick-custom.css">

<meta http-equiv="Cache-Control" content="no-cache" />
<meta http-equiv="Pragma" content="no-cache" />
<meta http-equiv="Expires" content="0" />

	<?php if( isset( $header['header_favicon'] )){ ?>
	<link rel="shortcut icon" type="image/png" href="/<?php echo $header['header_favicon'];?>"/>
	<link rel="shortcut icon" type="image/png" href="<?php echo base_url().''.$header['header_favicon'];?> "/>
	<?php }?>
</head>
<?php 

?>
<body>
    <div class="wrapper">
        <section id="notice_div">
        <div class="at-banner">

  <div class="at-banner__content">
  	<?php 
  	$header_top_stripe=(array)json_decode($header['header_top_stripe']);
      	$stripe_link1 = $header_top_stripe['stripe_link'][0]; 
        $stripe_content1 = $header_top_stripe['stripe_content'][0];
  	?>
    <div class="at-banner__text" style="text-align: center;"><a class="check_out_link" href="<?php echo $stripe_link1;?>"><?php echo $stripe_content1;?></a></div>
  </div>


  <div class="at-banner__close"></div>
</div>
    </section>
        <section class="top-header">
            <div class="container" id="myDIV">
                <div class="row align-items-center">
                    <div class="col-sm-6">
					<?php if( isset( $header['member_login_url'] )){
						?>
                        <div class="member_login text-center text-sm-left">
                            <a class="member_login" href="<?php echo $header['member_login_url'];?>">Member Login</a>
                        </div>
					<?php } ?>
                    </div>
                    <div class="col-sm-6">
					<?php 
					$header_socials = json_decode($header['socailLink']);
					 
					?>
                        <div class="social_link text-center text-sm-right">
                            <ul>
							<?php foreach( $header_socials as $social )
							{
								echo "<li class='social_link_icon'><a href='".$social->url."' target='_blank' title='".$social->heading."'><i
                                            class='".$social->icon."'></i></a></li>";
							}
							?>
                          

                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Dynamic code -->
        
        <header class="main_header" id="myScndDIV" style="background-color: white;">
        	<?php
        	$temp_menu =array();
        	// print_r($temp_menu); die; 
                                     foreach ($menu_data as $key) {

                                     $value=json_decode($key->value);
                                       
                                         $parent_menu = $key->title;
                                        if($value->select_parent=='no'){ 
                                          
                                          $temp = array('tt' => $key->title, 'url' => base_url().''.$value->select_link, $value->select_link_type, 'child' => array());
                                          //print_r($temp);
                                          $temp_menu[$key->title] = $temp;

                                          foreach ($menu_data as $key1) {
                                               $value1=json_decode($key1->value);

                                                if($value1->select_parent !='no'){
                                                  $child_array = array();
                                                   if( $value1->select_parent == $parent_menu ){
                                                   

                                                   $child_array = array('select_link_type' => $value1->select_link_type, 'exurl' => $value1->external_link ,'tt' => $key1->title, 'url' => base_url().''.$value1->select_link);

                                                   $temp_menu[$parent_menu]['child'][] = $child_array;

                                                      }
                                                  }
                                             }

                                        }
                                    }
 
                                    
                                  
                                    ?>

            <div class="container">
                <div class="row">
                    <nav class="navbar navbar-expand-lg navbar-light">
						<?php if( isset( $header['header_logo'] )){ ?>
                        <a class="navbar-brand" href="<?php echo base_url(); ?>">
						<img src="<?php echo base_url().''.$header['header_logo'];?>" alt="Logo">
						</a>
						<?php } ?>
                        <button class="navbar-toggler" type="button" aria-controls="navbarSupportedContent"
                            aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>

                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul class="navbar-nav ml-auto">
                            	
                               
                                 <?php 
                                     
                                    foreach ($temp_menu as $key => $value) {
                                    		 
                                               if( count( $value['child'] ) > 0 ){

                                               	?>
												
                                                <li class="nav-item dropdown" <?php echo $key ; ?> <?php if(base_url(uri_string()) == $value['url']){echo 'class=".nav-link active"';} ?>>
                                   <a class="nav-link dropdown-toggle" href="<?php echo $value['url']; ?>" id="navbarDropdown" role="button"
                                        ><?php echo $key ; ?>
                                    </a>

                                    <?php
                                      }else{
                                                                                    ?>
                                             <li <?php echo $key ; ?> <?php if(base_url(uri_string()) == $value['url']){echo 'class=".nav-link active"';} ?>>                

                                            <?php echo $value['title'];?>
                                              <a class="nav-link" role="button" href="<?php echo $value['url']; ?>"><?php echo $key ; ?>
                                                                                     </a>
                                        <?php                       }
                                                                           

                                         ?>
                                    
                                    <?php 
                                    if( count( $value['child'] ) > 0 ){
                                    	?>
                                    	<ul class="submenu navbar-nav ml-auto">
                                    		 <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    		<?php foreach ($value['child'] as $key1 => $value1) {?>
										

                                    <li <?php echo $key ; ?> <?php if(base_url(uri_string()) == $value1['url']){echo 'class=".nav-item drop_active"';} ?>>

                                 
                                   <a class="dropdown-item abcd" href="<?php if($value1['select_link_type'] =='external'){ echo $value1['exurl'];} else { echo $value1['url']; } ?>" <?php if($value1['select_link_type'] =='external'){?> target="_blank" <?php }?>><?php echo $value1['tt'] ; ?>
                                    </a></li>
							

                                    <br>
                                		<?php }?>
                                    		</div>
                                    	</ul>

									<?php
                                    }
                                    ?>
                                    	 
                                </li>
                                    <?php
                                       

                                }
                                    ?>
                                   
                            </ul>
                        </div>
                    </nav>
                </div>
            </div>
        </header>


   <script type="text/javascript">
   jQuery(function($) {
      var pgurl = window.location.href.substr(window.location.href
         .lastIndexOf("/") + 1);
      $(".navbar .navbar-nav li a").each(function() {
         if ($(this).attr("href") == pgurl || $(this).attr("href") == '')
            $(this).addClass("active");
      })
   });
   </script> 

<script>
window.onscroll = function() {myFunction()};

var navbar = document.getElementById("myScndDIV");
var sticky = navbar.offsetTop;

function myFunction() {
  if (window.pageYOffset >= sticky) {
    navbar.classList.add("sticky")
  } else {
    navbar.classList.remove("sticky");
  }
}
</script>

<script>
      jQuery('.at-banner__close').on('click', function() {
  jQuery(this).parent().remove();
});
      </script>

    <script>
          $(document).ready(function(){
  $('navbar-light navbar-nav nav-item nav-link').click(function(){
    $('navbar-nav nav-item nav-link').removeClass("active");
    $(this).addClass("active");
});
});
    </script>