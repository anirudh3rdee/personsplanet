 

            <!-- Container fluid  -->

            <!-- ============================================================== -->

            <div class="container-fluid">

                <!-- ============================================================== -->

                <!-- Start Page Content -->

                <!-- ============================================================== -->

               <?php 

                  if($this->session->flashdata('msg')){

                    ?>

                    <div class="alert alert-primary" role="alert">

	                    <?php echo $this->session->flashdata('msg'); ?>

	                </div>

                    <?php

                  }

               ?>

                <?php
                  
                $tradeTitle = '';

                $pageSlug = '';

                $abTradeID = '';

                $old_image = '';

                $shortContent = '';
                
                $btntext = '';

                $btnlink = '';

                if( !empty( $pageData )){

                    $abTradeID = $pageData[0]->id;

                    $tradeTitle = $pageData[0]->title;

                    $pageSlug = $pageData[0]->valueKey;

                    $array_data = (array) json_decode($pageData[0]->value);

                    $shortContent = html_entity_decode($array_data['shortdescription']);

                    $old_image = trim( $array_data['featureImage'] );

                    $btntext = trim( $array_data['buttontext'] );

                    $btnlink = trim( $array_data['buttonlink'] );

                    $purchasebtntext = trim( $array_data['purchasebuttontext'] );

                    $purchasebtnlink = trim( $array_data['purchasebuttonlink'] );
                }

                ?>

                <div class="row">

                    <div class="col-12">

                        <div class="card">
                            </br></br>
                            <form class="form-horizontal" enctype="multipart/form-data" method="post" action="<?php echo base_url('admin/tradestation/save_trade/'.$abTradeID);?>">

                                <div class="card-body">

                                    <div class="form-group row">

                                        <label for="TradeTitle" class="col-sm-3 text-right control-label col-form-label">Title</label>

                                        <div class="col-sm-9">

                                            <input type="text" class="form-control" name="tradeTitle" id="tradeTitle" placeholder="Title Here" required="" value="<?php echo $tradeTitle;?>">

                                             <input type="hidden" class="form-control" name="abTradeID" id="abTradeID" placeholder="Title Here" required="" value="<?php echo $abTradeID;?> ">

                                        </div>

                                    </div>
                                    

                                      <div class="form-group row">

                                        <label for="pageSlug" class="col-sm-3 text-right control-label col-form-label">Slug</label>

                                        <div class="col-sm-9">

                                            <input type="text" class="form-control" name="pageSlug" id="pageSlug" placeholder="Slug Here" required="" value="<?php echo $pageSlug;?>">

                                        </div>

                                    </div>


                                    <div class="form-group row">

                                        <label for="featureImage" class="col-sm-3 text-right control-label col-form-label">Image</label>

                                        <div class="col-sm-9">

                                            <input type="file" class="form-control" id="featureImage" name="featureImage" accept="image/*">

                                             <input type="hidden" class="form-control"  name="old_image" value="<?php echo $old_image;?>" >

                                            <?php if( $old_image != ''){ 

                                                echo "<p>Preview :";

                                                echo "<img width='50' src='".base_url($old_image)."' />";

                                                 echo "</p>";

                                            } 

                                            ?>

                                        </div>

                                    </div>

                                    <div class="form-group row">

                                        <label for="pageShortContent" class="col-sm-3 text-right control-label col-form-label">Description</label>

                                        <div class="col-sm-9">

                                           <textarea  name="shortdescription" class="form-control"><?php echo html_entity_decode($shortContent);?></textarea>

                                        </div>

                                    </div>

                                    
                                    <div class="form-group row">
                                        <label for="Buttontext" class="col-sm-3 text-right control-label col-form-label">Button Text</label>

                                        <div class="col-sm-9">
                                            <input type="text" name="buttontext" placeholder="Enter Button Text Here" value="<?php echo $btntext;?>">
                                        </div>
                                    </div>

                                     <div class="form-group row">
                                        <label for="buttonlink" class="col-sm-3 text-right control-label col-form-label">Button Link</label>

                                        <div class="col-sm-9">
                                            <input type="text" name="buttonlink" placeholder="Enter Button Link Here" value="<?php echo $btnlink;?>">
                                        </div>
                                    </div>
                                    
                                    <div class="form-group row">
                                        <label for="purchasebuttontext" class="col-sm-3 text-right control-label col-form-label">Purchase Button Text</label>

                                        <div class="col-sm-9">
                                            <input type="text" name="purchasebuttontext" placeholder="Enter Button Link Here" value="<?php echo $purchasebtntext;?>">
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="purchasebuttonlink" class="col-sm-3 text-right control-label col-form-label">Purchase Button Link</label>

                                        <div class="col-sm-9">
                                            <input type="text" name="purchasebuttonlink" placeholder="Enter Button Link Here" value="<?php echo $purchasebtnlink;?>">
                                        </div>
                                    </div>

                                </div>

                                <div class="border-top">

                                    <div class="card-body">

                                        <input class="btn btn-primary" type="submit" name="save_tradestation" value="Save">

                                    </div>

                                </div>

                            </form>

                        </div>

                     

                    </div>

                </div>



                  

                <!-- ============================================================== -->

                <!-- End PAge Content -->

                <!-- ============================================================== -->

            </div>

           <!-- ============================================================== -->

            <!-- End Container fluid  -->

            <!-- ============================================================== -->

<script src="https://cdn.ckeditor.com/4.12.1/standard/ckeditor.js"></script>

<script>

CKEDITOR.replace('shortContent', {
    allowedContent: true
} );

</script>