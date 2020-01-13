<?php foreach ($pageData as $key ) {
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


<?php
if(count( $pageData ) > 0 ){
    $page_data = json_decode($pageData[0]->value);
    ?>
    <div class="container">
        <div class="row">
            <?php //echo $pageData[0]->title;
            echo html_entity_decode($page_data->pageContent);
            ?>
        </div>
    </div>

<?php }?>

<section>
    <div class="container">
        <div class="trade_station_pivots row">

            <?php 
                foreach ($tradeContent as $newcontent) {
                    $title = $newcontent->title;
                    $slug = $newcontent->valueKey;
                    
                    $arrayData = (array) json_decode($newcontent->value); 
                    $featured_img = $arrayData['featureImage'];
                    $shortdescription = $arrayData['shortdescription'];
                    $buttontext = $arrayData['buttontext'];
                    $buttonlink = $arrayData['buttonlink'];
                    $purchasebuttontext = $arrayData['purchasebuttontext'];
                    $purchasebuttonlink = $arrayData['purchasebuttonlink'];
            ?>
            <div class="pivots">
                <h4><?php echo $title;?></h4>
                 <div class="pivots-section"><img src="<?php echo $featured_img;?>" />
                    <div class="pivots-desp">
                        <p><?php echo word_limiter($shortdescription, 10, '');?></p>
                    </div>

                    <div class="pivot_row">
                        <div class="second_row">
                            <p class="link_color"><a class="btn btn-info pivots_link" href="<?php echo $buttonlink;?>"><?php echo $buttontext;?></a></p>
                            
                            <?php if($purchasebuttontext !=''){?>
                            <p class="link_color"><a class="btn pivots_dwnlod_link" href="<?php echo $purchasebuttontext;?>" target="_blank"><?php echo $purchasebuttontext;?></a></p>
                            <?php }?>

                        </div>
                    </div>
                </div>
            </div>

        <?php }?>

        </div>
    </div>
</section>
