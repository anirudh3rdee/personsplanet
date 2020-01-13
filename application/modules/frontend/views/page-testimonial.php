 
 <section>
    <div class="container">
        <div class="row">
          <div id="test-list" class="container">
    		<ul class="list">
        		<hr>
        		<?php 
        		// echo "<pre>";
        		// print_r($pageData);
        		foreach ($pageData as $key ) {
        			$list_data = json_decode($key->value);
        			 
        			?>
        			<p class="name"><?php echo $list_data->clientMessage;?></p><hr>
        			<?php
        		}
        		?>
        		 
        	</ul>
        	 
        	<div class="pagination" style="justify-content: center;">
        		<nav aria-label="...">
			  		<ul class="pagination pagination-md">
			  			<?php for( $i = 1; $i <= $lastpage; $i++ ){
			  				$extra_class = ( $current_page == $i ) ? ' active' : '';

			  				echo "<li class='page-item ".$extra_class."'><a class='page-link' href='/testmonials/".$i."'>".$i."</a></li>";
			  				
			  			}
			  			?>
					     
				  </ul>
				</nav>
        	</div>
        </div>
    </div>
</section>
       
         	 
         	 