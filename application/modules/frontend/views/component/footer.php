       <footer id="footer" class="ftr-sec">
            <div class="container">
                <div class="row text-center text-xs-center text-sm-left text-md-left">
                    <div class="about-info">					<?php if( isset( $header['header_logo'] )){ ?>
                        <div class="logo-ftr">                             <img src="<?php echo base_url().''.$header['header_logo'];?>">                        </div>					<?php } ?>
                        <div class="ftr-info">						<?php if(isset( $header['footer_about'] )){							echo "<p>".$header['footer_about']."</p>";						}							?>
                       
                        </div>
                    </div>
                    <div class="listing-ftr">
                        <div class="row">
                        <?php
                        // print_r(json_decode($footermenuData[0]->value));
                                foreach ($footermenuData as $key) {
                                    if($key->valueKey=='footer-menu'){
                                        $arrayData=(array) json_decode($key->value);
                                        $firstMenu=$arrayData['first_menu'];
                                        $footermenuID=$key->id;
                                        $secondMenu=$arrayData['second_menu'];
                                        $thirdMenu=$arrayData['third_menu'];
                                       
                                    }
                                  }
                                  ?>
                            <div class="col-md-3 ftr_menu_block">
                                <?php
                                    echo "<h6>".$firstMenu."</h6>";
                                  ?>
                               <?php 
                               foreach ($footersubmenuData as $key) {
                                $value=json_decode($key->value);
                                $parent_menu = $key->title;
                                if($value->sub_select_parent=='first_menu'){
                                    ?>

                                    <ul class="list-unstyled quick-links neww">
                                    <li><a href="<?php if($value->select_link_type == 'internal'){echo site_url($value->sub_select_link); } else {echo $value->sub_external_link ; } ?>" <?php if($value->select_link_type == 'external'){?>target="_blank" <?php }?>><?php echo $parent_menu; ?></a>
                                    </li>
                                
                                </ul>
                                <?php
                                }
                               }
                               ?>

                            </div>
                            <div class="col-md-3 ftr_menu_block">
                            <?php
                                    echo "<h6>".$secondMenu."</h6>";
                                  ?>
                                   <?php 
                               foreach ($footersubmenuData as $key) {
                                $value=json_decode($key->value);
                                $parent_menu = $key->title;
                                if($value->sub_select_parent=='second_menu'){
                                    ?>
                                   
                                    <ul class="list-unstyled quick-links neww">
                                    <li><a href="<?php if($value->select_link_type == 'internal'){echo site_url($value->sub_select_link); } else {echo $value->sub_external_link ; } ?>" <?php if($value->select_link_type == 'external'){?>target="_blank" <?php }?>><?php echo $parent_menu; ?></a>
                                    </li>
                                
                                </ul>
                                <?php
                                }
                               }
                               ?>
                               
                            </div>
                            <div class="col-md-3 ftr_menu_block">
                            <?php
                                    echo "<h6>".$thirdMenu."</h6>";
                                  ?>
                                   <?php 
                               foreach ($footersubmenuData as $key) {
                                $value=json_decode($key->value);
                                $parent_menu = $key->title;
                                if($value->sub_select_parent=='third_menu'){
                                    ?>
                                   
                                    <ul class="list-unstyled quick-links neww">
                                    <li><a href="<?php if($value->select_link_type == 'internal'){echo site_url($value->sub_select_link); } else {echo $value->sub_external_link ; } ?>" <?php if($value->select_link_type == 'external'){?>target="_blank" <?php }?>><?php echo $parent_menu; ?></a>
                                    </li>
                                
                                </ul>
                                <?php
                                }
                               }
                               ?>
                           
                            </div>
                            <div class="col-md-3">							<?php 								$header_socials = json_decode($header['socailLink']);					 		?>
                                <h6>GET IN TOUCH</h6>							
                                <ul class="list-unstyled social-ftr link_clr">								<?php foreach( $header_socials as $social )									{										echo "<li><a href='".$social->url."' target='_blank' title='".$social->heading."'><i											class='".$social->icon."' style='color:white;'></i></a></li>";									}								?>
                                </ul>
                            </div>
                        </div>
                    </div>

                </div>

                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12 mt-2 mt-sm-2 text-center ftr-text-style">					<?php if(isset( $header['footer_about_full_details'] ) ){							echo $header['footer_about_full_details'];						}						?>
                         
                    </div>
                    </hr>
                </div>
            </div>
        </footer>
    </div>


    <!-- <script src="<?php echo base_url(); ?>assets/js/jquery.min.js"></script> -->
    <script src="<?php echo base_url(); ?>assets/js/bootstrap.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/popper.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/slick.min.js"></script>

     <!-- <link rel="stylesheet" href="<?php echo base_url(); ?>assets/mec/packages/owl-carousel/owl.carousel.min.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/mec/packages/owl-carousel/owl.theme.min.css"> -->


    
    <script>
        $(document).ready(function () {
            $(".testimponial-slider").slick({

                slidesToShow: 1,
                slidesToScroll: 1,
                dots: true,
                autoplay: true,
            })
            $('.customer-logos').slick({
                slidesToShow: 6,
                slidesToScroll: 1,
                autoplay: true,
                autoplaySpeed: 1500,
                arrows: false,
                dots: false,
                pauseOnHover: false,
                responsive: [{
                    breakpoint: 768,
                    settings: {
                        slidesToShow: 4
                    }
                }, {
                    breakpoint: 520,
                    settings: {
                        slidesToShow: 3
                    }
                }]
            });
        });</script>
    <script>
        $('.navbar-toggler').click(function () {
            $('#navbarSupportedContent').toggle();
        });
    </script>
     <script src="<?php echo base_url(); ?>assets/frontend/frontend.js"></script>
     <script src="<?php echo base_url(); ?>assets/js/custom-js.js"></script>  
    </body>

</html>

