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
        <!-- display all course Start -->
        <?php if( count($courseContent) > 0 ){ ?>
			<div class="trade_station_pivots row">
				<div class="pivots">
					<h4>Beginner Courses</h4>

					<div class="pivots-section"><img src="https://personsplanet.com/wp-content/uploads/2018/11/XLY1-1024x658.jpg" />
					<div class="pivots-desp">
					<p>Beginner Courses content here</p>
					</div>

					<div class="pivot_row">
					<p class="link_color"><a class="btn pivots_dwnlod_link" href="http://demo.personsplanet.com/beginner">Read More</a></p>
					</div>
					</div>
				</div>

				<div class="pivots">
					<h4>Advance Courses</h4>

					<div class="pivots-section"><img src="https://personsplanet.com/wp-content/uploads/2018/11/XLY1-1024x658.jpg" />
					<div class="pivots-desp">
					<p>Advance Courses content here</p>
					</div>

					<div class="pivot_row">
					<p class="link_color"><a class="btn pivots_dwnlod_link" href="http://demo.personsplanet.com/advance">Read More</a></p>
					</div>
					</div>
				</div>

				<div class="pivots">
					<h4>Pro-Trader Courses</h4>

					<div class="pivots-section"><img src="https://personsplanet.com/wp-content/uploads/2018/11/XLY1-1024x658.jpg" />
					<div class="pivots-desp">
					<p>Pro-Trader Courses content here</p>
					</div>

					<div class="pivot_row">
					<p class="link_color"><a class="btn pivots_dwnlod_link" href="http://demo.personsplanet.com/pro-trader">Read More</a></p>
					</div>
					</div>
				</div>
			</div>
		<?php } ?>
        <!-- Display all course End -->

	</div> <!-- End container -->
</br/></br/>
	<?php
	
}else{
	echo "<h1 class='center'>Page not found.</h1>";
}
?>
 