
<section>
<div class="container">
    <div class="row">
        <div class="col-4">
</div>
<div class="col-4 station_video_sec bs-example">
        <br/><p><a data-target="#videoModal" class="btn btn-lg btn-primary" data-toggle="modal">Instructional Video Click Here</a></p>
            <!-- Modal HTML -->
    <div id="videoModal" class="modal"> 
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <h4 class="modal-title">YouTube Video</h4>
                </div>
                <div class="modal-body">
                    <iframe id="cartoonVideo" width="560" height="315" src="https://www.youtube.com/embed/FRIlmisTo-Y" frameborder="0" allowfullscreen></iframe>
                </div>
            </div>
        </div>
    </div>

    </div>
<div class="col-4">
</div>
</div>
    <h1 class="station_heading">John Person’s Pivot Indicators, Scanning and Histogram are the #1 downloaded apps at TradeStation Securities.</h1>
    <div class="trade_station_pivots row">
<div class="col-4 pivots">
<div>
<img src="https://personsplanet.com/wp-content/uploads/2018/11/DAily_XLY-1024x658.jpg"> 
<h4>FREE Daily Person's Pivots</h4>
<p>This Indicator is absolutely free when you open an account with TradeStation Securities.</p>
<p class="link_color"><a class="btn btn-info pivots_link" href="http://demo.personsplanet.com/free-daily-persons-pivots">Learn More</a></p>
</div>
</div>
<div class="col-4 pivots">
<div>
<img src="https://personsplanet.com/wp-content/uploads/2018/11/XLY1-1024x658.jpg"> 
<h4>Person's Pivot Triggers</h4>
<p>John’s Daily Person’s Pivots indicator is really just the start. John has developed</p>
<div class="pivot_row">
<p class="link_color"><a class="btn btn-info pivots_link" href="http://demo.personsplanet.com/persons-pivot-triggers/">Learn More</a></p>
<p class="link_color"><a target="_blank" class="btn pivots_dwnlod_link" href="https://tradestation.tradingappstore.com/products/PersonPivotsTriggers">Download - $79.00 Monthly</a></p>
</div>
</div>
</div>
<div class="col-4 pivots">
<div>
<img src="https://personsplanet.com/wp-content/uploads/2019/08/advance-trading-1024x622.png"> 
<h4>The Advance Trading Indicator</h4>
<p>The Advanced Trading System encompasses the daily, weekly and monthly pivots as well as</p>
<div>
<p class="link_color"><a class="btn btn-info pivots_link" href="http://demo.personsplanet.com/the-advance-trading-indicator/">Learn More</a></p>
<p class="link_color"><a class="btn pivots_dwnlod_link" target="_blank" href="https://tradestation.tradingappstore.com/products/PersonPivotsAdvanceTradingSystem">Download - $159.00 Monthly</a></p>
</div>
</div>
</div>
<div class="col-4 pivots">
 <div>
<img src="https://personsplanet.com/wp-content/uploads/2019/08/thumb_6814_7_12_2019_27_54_tsi1.png"> 
<h4>John LIFETIME Package</h4>
<p>John Person’s LIFETIME Advance Trading System is for the professional Hedge Fund,</p>
<div class="second_row">
<p class="link_color"><a class="btn btn-info pivots_link" href="http://demo.personsplanet.com/john-lifetime-package/">Learn More</a></p>
<p class="link_color"><a class="btn pivots_dwnlod_link" href="https://www.mcssl.com/SecureCart/ViewCart.aspx?mid=86602864-2B9E-45E5-98E2-F187330DCFC3&sctoken=814fffae1d554f1c9f6dd1ad5fc70988&bhim=1&bhqs=1">Purchase License $3900</a></p>
</div>
</div>
</div>
<div class="col-4 pivots">
<div>
<img src="https://personsplanet.com/wp-content/uploads/2019/08/thumb_6814_7_12_2019_27_54_tsi1.png"> 
<h4>TSI Indicator $79 dollars</h4>
<p>John’s Daily Person’s Pivots indicator is really just the start. John has developed</p>
<div class="second_row">
<p class="link_color"><a class="btn btn-info pivots_link" href="https://tradestation.tradingappstore.com/products/JPTrendSignalIdentifier">Learn More</a></p>
</div>
</div>
</div>
<div class="col-4 pivots">
<div>
<img src="https://personsplanet.com/wp-content/uploads/2019/08/algo-1024x574.jpg"> 
<h4>Algo V17-Xtreme $3997</h4>
<p>The Advanced Trading System encompasses the daily, weekly and monthly pivots as well as</p>
<p class="link_color"><a class="btn btn-info pivots_link" href="http://demo.personsplanet.com/algo">Learn More</a></p>
</div>
</div>
<div class="col-4 pivots">
<div>
<img src="https://personsplanet.com/wp-content/uploads/2018/11/XLY1-1024x658.jpg"> 
<h4>PUG VIP Subscription $1129</h4>
<p>John Person’s LIFETIME Advance Trading System is for the professional Hedge Fund,</p>
<div class="second_row">
<p class="link_color"><a class="btn btn-info pivots_link" href="http://demo.personsplanet.com/pugclub">Learn More</a></p>
</div>
</div>
</div>
</div>
</div>
</div>
</section>
<script>
$(document).ready(function(){
    /* Get iframe src attribute value i.e. YouTube video url
    and store it in a variable */
    var url = $("#cartoonVideo").attr('src');
    
    /* Assign empty url value to the iframe src attribute when
    modal hide, which stop the video playing */
    $("#videoModal").on('hide.bs.modal', function(){
        $("#cartoonVideo").attr('src', '');
    });
    
    /* Assign the initially stored url back to the iframe src
    attribute when modal is displayed again */
    $("#videoModal").on('show.bs.modal', function(){
        $("#cartoonVideo").attr('src', url);
    });
});
</script>