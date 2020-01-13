<?php foreach ($pageData as $key ) {

  $array_data = (array) json_decode($key->value);
  //var_dump($array_data );
  $featureImage = trim( $array_data['featureImage'] );
	$back_url = base_url().$featureImage;
	$back_css = '';

	if( '' != $featureImage ){
     $back_css = "style='background-image: url(".$back_url.")'";
 } }
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


<section class="container">
<div class="video-gallery">
<div class="row pug_video_sec">

<?php 
$i=1;
foreach ($pugContent as $newcontent) {
    $title = $newcontent->title;
    $slug = $newcontent->valueKey;
    
    $arrayData = (array) json_decode($newcontent->value); 
    $featured_img = $arrayData['featureImage'];
    $video_url = $arrayData['video_url'];
    $buttontext = $arrayData['buttontext'];
    $buttonlink = $arrayData['buttonlink'];
?>
<div class="col-md-4 pug<?php echo $i?>" id="pug-video<?php echo $i?>" 
data-toggle="modal" data-target="#homeVideo<?php echo $i?>">
<h3><?php echo $title;?></h3>
<div class="gallery-item"><img alt="North Cascades National Park" src="<?php echo $featured_img;?>" />
<p><?php echo $buttontext;?></p>
</div>
</div>
<div aria-labelledby="myModalLabel" class="modal fade" id="homeVideo<?php echo $i?>" role="dialog" tabindex="-1">
<div class="modal-dialog pug_modal_dialog" role="document">
<div class="modal-content" style="background-color: black;"><button class="btn btn-default pug_modal" data-dismiss="modal" id="pug_modal" onclick="pauseVid()" type="button">X</button>

<div class="embed-responsive embed-responsive-16by9 pug_iframe"><iframe allowfullscreen="" class="station_modal_video" frameborder="0" height="315" id="cartoonVideo" src="<?php echo $video_url;?>" width="560"></iframe></div>
</div>
</div>
</div>
<?php $i++; } ?>

</div>
</div>
</section>

<div class="container">
    <p>To learn more about becoming a member, email <a href="mailto:mperson@personsplanet.com">mperson@personsplanet.com</a></p>
</div>

<script type="text/javascript">
jQuery(document).ready(function(){

var vid = document.getElementById("gossVideo"); 

function playVid() { 
    vid.play(); 
} 

function pauseVid() { 
    vid.pause(); 
} 

});
</script>