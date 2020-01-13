<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php echo $page_title;?></title>
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://kit.fontawesome.com/5288d6453d.js" crossorigin="anonymous"></script>
      <script src="<?php echo base_url(); ?>assets/js/jquery.min.js"></script>
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/style.css">
    <link href='https://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet'>
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/slick.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link rel="stylesheet" href="<?php echo base_url(); ?>assets/fullcalendar/css/fullcalendar.css" />
 <!--  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha.6/css/bootstrap.css" /> -->
 <!--  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script> -->
  <script src="<?php echo base_url(); ?>assets/fullcalendar/js/jquery-ui.min.js"></script>
  <script src="<?php echo base_url(); ?>assets/fullcalendar/js/moment.min.js"></script>
  <script src="<?php echo base_url(); ?>assets/fullcalendar/js/fullcalendar.js"></script>
   

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
 
   


	<?php if( isset( $header['header_favicon'] )){ ?>
	<link rel="shortcut icon" type="image/png" href="/<?php echo $header['header_favicon'];?>"/>
	<link rel="shortcut icon" type="image/png" href="<?php echo base_url().''.$header['header_favicon'];?> "/>
	<?php }?>
</head>
<?php 

?>
<body>
    <div class="wrapper">
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
        	// print_r($menu_data); die; 
                                     foreach ($menu_data as $key) {
                                     $value=json_decode($key->value);
                                         
                                         $parent_menu = $key->title;
                                        if($value->select_parent=='no'){ 
                                          $temp = array('tt' => $key->title, 'url' => base_url().''.$value->select_link, 'child' => array());
                                          // print_r($temp); die; 
                                          $temp_menu[$key->title] = $temp;

                                          foreach ($menu_data as $key1) {
                                               $value1=json_decode($key1->value);
                                                if($value1->select_parent !='no'){
                                                  $child_array = array();
                                                   if( $value1->select_parent == $parent_menu ){
                                                   $child_array = array('tt' => $key1->title, 'url' => base_url().''.$value1->select_link);
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

                                                <li class="nav-item dropdown" <?php echo $key ; ?>>
                                   <a class="nav-link dropdown-toggle" id="navbarDropdown" role="button"
                                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" href="<?php echo $value['url']; ?>"><?php echo $key ; ?>
                                    </a>

                                    <?php
                                      }else{
                                                                                    ?>
                                             <li class="nav-item" <?php echo $key ; ?>>                                                           <a class="nav-link" role="button" href="<?php echo $value['url']; ?>"><?php echo $key ; ?>
                                                                                     </a>
                                        <?php                       }

                                                                                                                    

                                         ?>
                                    
                                    <?php 
                                    if( count( $value['child'] ) > 0 ){
                                    	?>
                                    	<ul class="submenu navbar-nav ml-auto">
                                    		 <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    		<?php foreach ($value['child'] as $key1 => $value1) {
                                    			
                                    			?>
                                    		 
                                    	 <li class="nav-item" <?php echo $key ; ?>>
                                   <a class="dropdown-item abcd" href="<?php echo $value1['url']; ?>"><?php echo $value1['tt'] ; ?>
                                    </a></li><br>
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