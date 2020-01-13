<?php //var_dump($pageData); die;
foreach ($pageData as $key ) {
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
<section class="about-detail">

<div class="container">

    <div class="row about-heading">

        <div class="col-md-12">

            <div class="row">

                <div class="col-12">

                    <h3>

                        PedfsdfrsonsPlanet

                    </h3>

                    <p>

                        PersonsPlanet.com is an Educational and Advisory Service Company for investors and

                        active

                        traders, founded by John Person.

                    </p>

                </div>

                <div class="col-md-4 col-sm-5">

                    <div class="company_img">

                        <img src="<?php echo base_url(); ?>assets/images/o.png" alt="" />

                    </div>

                </div>

                <div class="col-md-8">

                    <ul>

                        <li> We have a variety of products and services to meet the needs of all individuals

                            interested in learning to trade from the beginner to the advanced student.</li>

                        <li>We help traders with products such as Newsletters on Stocks, Futures and ETF’s

                            including

                            videos, updates, emails alerts and trading systems with our proprietary

                            indicators.</li>

                        <li>Our University program formatted to fit all types of traders, beginners and

                            advanced; is

                            the BEST program available to teach you step by step all the information you

                            will need

                            to create and develop your OWN trading strategy.</li>

                        <li>Our Licensed indicators are found on multiple trading platforms including TD

                            Ameritrades, Thinkorswim, Bloomberg Terminals, TradeStation Platform as well as

                            MetaStock and TradeNavigator.</li>

                    </ul>

                </div>

            </div>

        </div>

    </div>

</div>

</section>

<section class="about-detail">

<div class="container">

    <div class="row about-heading">

        <div class="col-md-12">

            <div class="row">

                <div class="col-12">

                    <h3>

                        The Founder - John Person

                    </h3>

                    <p>

                        John Person is an internationally recognized specialist in investments, trading, and

                        financial management. John has

                        written several books, popular worldwide, that target trading Futures as well as

                        ETF’s and Stocks.

                    </p>

                </div>

                <div class="col-md-8">

                    <ul>

                        <li> He is currently an elected member of The American Association of Professional

                            Technical Analysts (AAPTA). John is the former Founder and President of First

                            National Futures Group, a Futures Brokerage firm, as well as the founder and

                            President of John Person Inc., dba Personsplanet.com.</li>

                        <li>John’s goal is to help educate traders on the positive aspects that trading can

                            provide using time tested techniques based off of the technical tools and

                            technology that our industry offers.</li>

                        <li>John’s indicators are found on multiple trading platforms including TD

                            Ameritrade/Thinkorswim, Bloomberg Terminals, TradeStation and TradeNavigator

                            platforms.</li>

                        <li> As a business major at Loyola University’s downtown campus, John worked part

                            time under the direct supervision of George Lane, credited with the innovation

                            of the Stochastic Indicator. </li>



                        <li>The PersonsPlanet.com Support Team consists of John Person, himself; along-side

                            his wife, Mary Person. Both of which are dedicated professionals readily

                            available for all their clients’ needs.</li>

                    </ul>

                </div>

                <div class="col-md-4 col-sm-5">

                    <div class="company_img">

                        <img src="<?php echo base_url(); ?>assets/images/jp-head-267x300.jpg" alt="" />

                    </div>&lt;?php echo base_url(); ?&gt;assets/images/o.png

                </div>

            </div>

        </div>

    </div>

</div>

</section>

