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

 <section>
    
<?php
    if( count($pageData) > 0 ){
       
        echo '<div class="container">';
      echo '<div class="row">';

    $page_data = json_decode($pageData[0]->value);
    echo html_entity_decode( $page_data->pageContent );
     
     echo '</div>';
     echo '</div>';
     
    } 

    ?>
       
    <div class="container">
        <br/>
  
        <div class="modal fade" id="display-instruction-video" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog station_modal_dialog" role="document">
    <div class="modal-content" style="background-color: black;">
      <button type="button" class="btn btn-default station_modal" data-dismiss="modal" onclick="pauseVid()">X</button>
      <div class="embed-responsive embed-responsive-16by9 station_iframe">
         <?php 
        if( count($videoData) > 0 ){
            $single_data = json_decode($videoData[0]->value);
        ?>
<iframe class="station_modal_video" id="instruction-modal" width="560" height="315" src="https://www.youtube.com/embed/o9cxZU6GIaI" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" frameborder="0" allowfullscreen></iframe>
 <?php } ?>
      </div>
    </div>
  </div>
</div>
        
  
        <br/>
        <br/>
        <div class="row">
		<?php 
		foreach ($videoData as $key ) {
			$list_data = json_decode($key->value);
			 
             $video_id = str_replace('https://www.youtube.com/embed/', '', $list_data->videoURL);
            ?>
            
            <div class="col-md-3 show-instruction-video" data-toggle="modal" data-target="#display-instruction-video" data-url="<?php echo $list_data->videoURL;?>">
                <div class="yotu-video-thumb-wrp">
                    <img class="yotu-video-thumb" src="https://i.ytimg.com/vi/<?php echo $video_id;?>/hqdefault.jpg" alt="<?php echo $list_data->videoTitle;?>">
                </div>
                
                <!-- <iframe src="<?php echo $list_data->videoURL;?>"></iframe> -->
			<p class="name"><?php echo $list_data->videoTitle;?></p>
            <br/>
             </div>
			<?php
		}
		?>
        </div>
        <div class="row">
            <div class="container">
            <div class="pagination" style="justify-content: center;">
                <nav aria-label="...">
                    <ul class="pagination pagination-md">
                        <?php for( $i = 1; $i <= $lastpage; $i++ ){
                            $extra_class = ( $current_page == $i ) ? ' active' : '';

                            echo "<li class='page-item ".$extra_class."'><a class='page-link' href='/instructional-videos/".$i."'>".$i."</a></li>";
                            
                        }
                        ?>
                         
                  </ul>
                </nav>
            </div>
             </div>
        </div>
    </div>
</section>
<!-- <script>
$(document).ready(function(){

    var url = $("#instructional-video").attr('src');
    

    $("#instructionalVideoModal").on('hide.bs.modal', function(){
        $("#instructional-video").attr('src', '');
    });
    

    $("#instructionalVideoModal").on('show.bs.modal', function(){
        $("#instructional-video").attr('src', url);
    });
});
</script> -->
       
         	 
         	 