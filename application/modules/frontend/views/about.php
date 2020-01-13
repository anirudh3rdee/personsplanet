<?php //var_dump($pageData); die;
foreach ($pageData as $key ) {
  $array_data = (array) json_decode($key->value);
  $featureImage = trim( $array_data['featureImage'] );
    $back_url = base_url().$featureImage;
    $back_css = '';

    if( '' != $featureImage ){
     $back_css = "style='background-image: url(".$back_url.")'";

    ?>

<section class="banner_sec_about_new about_bg" <?php echo $back_css;?>>
    <div class="container">
        <div class="row">
            <div class="banner_text1_new">
                <h1 style="color: white;" class="market_banner"><?php echo $array_data['bannerhead']; ?></h1>
            </div>
        </div>
    </div>
    </section>  
  <?php 
}//end .banner_sec_about
}
?>

<section class="about-detail">

<div class="container">

    <div class="row about-heading">

        <div class="col-md-12">

            <div class="row">

                <div class="col-12">

                    <h2>

                        John L. Person

                    </h2>

                    <p class="about_subheading"><strong><em>Founder and President of John Person Inc., dba Personsplanet.com</em></strong></p>

                    <p>

                        John Person is an internationally recognized specialist in investments, trading, and financial management. John has written several books, popular worldwide, that target trading Futures as well as ETF’s and Stocks.

                    </p>

                </div>

   

                   <ul class="about-list-style">
    <li>He is currently an elected member of The American Association of Professional Technical Analysts (AAPTA). John is the former Founder and President of First National Futures Group, a Futures Brokerage firm, as well as the founder and President of John Person Inc., dba Personsplanet.com.</li>
    <li>John’s goal is to help educate traders on the positive aspects that trading can provide using time tested techniques based off of the technical tools and technology that our industry offers.</li>
    <li>John’s indicators are found on multiple trading platforms including TD Ameritrade/Thinkorswim, Bloomberg Terminals, TradeStation and TradeNavigator platforms.</li>
    <li>As a business major at Loyola University’s downtown campus, John worked part time under the direct supervision of George Lane, credited with the innovation of the Stochastic Indicator.</li>
    <li>The PersonsPlanet.com Support Team consists of John Person, himself; along-side his wife,Mary Person. Both of which are dedicated professionals readily available for all their clients’ needs.</li>
</ul>
 <!--about footer section-->
 <div class="about_footer_banner container-fluid">
    <div class="container">
        <div class="row">
            
<div class="portrait_image_div">
    <div class="portrait_img">
        <img src="http://demo.personsplanet.com/assets/media_files/jp-head-267x3001.jpg" class="portrait">
    </div>
</div>
                
            
        </div>
        <div class="row">
            <div class="col-md-12 portrait_content">
                <h3 class="about_portrait_heading">Follow john l person</h3>
                <p>Learn about the markets, trading, and more from this TD&nbsp;Ameritrade industry pro and 30-year trading veteran</p>

               
                <ul class="portrait_sociaList">
                    <li style="display: block;">                    
                        <a style="display: block;color: #FFFFFF;" href="https://twitter.com/personsplanet" onclick="trackOmniture('stickyfooter:follow jj twitter', this);" target="_blank">
                            <i class="fab fa-twitter" aria-hidden="true"></i>
                        </a>

                        <a style="display: block;color: #FFFFFF;" href="https://twitter.com/personsplanet" onclick="trackOmniture('stickyfooter:follow jj twitter', this);" target="_blank">Follow on Twitter</a>
                    </li>

                    <li style="display: block;"><a style="display: block;color: #FFFFFF;" href="https://www.facebook.com/personsplanet" onclick="trackOmniture('stickyfooter:follow jj facebook', this);" target="_blank">
                        <i class="fab fa-facebook-f" aria-hidden="true"></i></a>
                        <a style="display: block;color: #FFFFFF;" href="https://www.facebook.com/personsplanet" onclick="trackOmniture('stickyfooter:follow jj facebook', this);" target="_blank">Like on Facebook</a></li>

                    <li style="display: block;"><a style="display: block;color: #FFFFFF;" href="https://www.youtube.com/user/Personsplanet" onclick="trackOmniture('stickyfooter:follow jj linkedin', this);" target="_blank"><i class="fab fa-youtube" aria-hidden="true"></i></a>
                        <a style="display: block;color: #FFFFFF;" href="https://www.youtube.com/user/Personsplanet" onclick="trackOmniture('stickyfooter:follow jj linkedin', this);" target="_blank">Connect on YouTube</a></li>
                </ul>
            </div>
        </div>
    </div>
</div>
<!-- New Section -->
<div class="col-12">

                    <h2>

                        Persons Planet

                    </h2>

                    <p class="about_subheading"><strong><em>An Educational and Advisory service company for investors and active traders founded by John Person</em></strong></p>

                    <p>

                        John Person is an internationally recognized specialist in investments, trading, and financial management. John has written several books, popular worldwide, that target trading Futures as well as ETF’s and Stocks.

                    </p>
</div>

<ul>
    <li>We have a variety of products and services to meet the needs of all individuals interested in learning to trade from the beginner to the advanced student.</li>
    <li>We help traders with products such as Newsletters on Stocks, Futures and ETF’s including videos, updates, emails alerts and trading systems with our proprietary indicators.</li>
    <li>Our University program formatted to fit all types of traders, beginners and advanced; is the BEST program available to teach you step by step all the information you will need to create and develop your OWN trading strategy.</li>
    <li>Our Licensed indicators are found on multiple trading platforms including TD Ameritrades, Thinkorswim, Bloomberg Terminals, TradeStation Platform as well as MetaStock and TradeNavigator.</li>
</ul>


                </div>
            </div>

        </div>

    </div>



</section>



