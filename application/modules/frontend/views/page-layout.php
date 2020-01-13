<?php
if(count( $pageData ) > 0 ){
	$page_data = json_decode($pageData[0]->value);

	$featureImage = trim( $page_data->featureImage );
	$back_url = base_url().$featureImage;
	 $back_css = '';

	if( '' != $featureImage ){
		 $back_css = "style='background-image: url(".$back_url.")'";
	?>
	<section class="banner_sec_about about_bg" <?php echo $back_css;?> >
    <div class="container">
        <div class="row">
            <div class="banner_text1">
                <h1 style="color: white;" class="market_banner"><?php echo $page_data->bannerhead;?></h1>
            </div>
        </div>
    </div>
	</section>
<?php 
	} //end .banner_sec_about
?>
<section class="algo_blue_bg">
        <div class="container">
	<?php
	echo html_entity_decode($page_data->pageContent);
}else{
	echo "<h1 class='center' style='text-align:center'>Page not found.</h1>";
}
?>
	</div> <!-- end .container -->
</section> 