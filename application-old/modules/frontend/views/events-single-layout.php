<div class="container-fluid">
<?php

if(count( $pageData ) > 0 ){
	$page_data = json_decode($pageData[0]->value);
	echo $page_data->event_content;
}else{
	echo "<h1 class='center' style='text-align:center'>Page not found.</h1>";
}
?>
</div> <!-- end .container --> 