<section class="banner_sec_about about_bg" style="background-image: url('http://demo.personsplanet.com/assets/media_files/Trade-Station-Slide2.jpg');">
    <div class="container">
        <div class="row">
            <div class="banner_text1">
                <h1 style="color: white;" class="market_banner">Events</h1>
            </div>
        </div>
    </div>
</section>

<div class="container-fluid">
<?php

if(count( $pageData ) > 0 ){
	$page_data = json_decode($pageData[0]->value);
	echo html_entity_decode( $page_data->event_content );
}else{
	echo "<h1 class='center' style='text-align:center'>Page not found.</h1>";
}
?>
</div> <!-- end .container --> 