<?php

$sendgridStats = $this->getSendgridStats($startdate, $enddate);

?>



<!-- BEGIN DASHBOARD STATS -->
<div class="row email-stats display-none">
	<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
		<div class="dashboard-stat blue-madison">
			<div class="visual">
				<i class="fa fa-comments"></i>
			</div>
			<div class="details">
				<div class="number">
					 <?php echo $sendgridStats['subscribers']; ?>
				</div>
				<div class="desc">
					 Active subscribers
				</div>
			</div>
			
		</div>
	</div>
	<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
		<div class="dashboard-stat red-intense">
			<div class="visual">
				<i class="fa fa-bar-chart-o"></i>
			</div>
			<div class="details">
				<div class="number">
					 <?php echo $sendgridStats['delivered']; ?>
				</div>
				<div class="desc">
					 Emails delivered
				</div>
			</div>
		</div>
	</div>
	<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
		<div class="dashboard-stat green-haze">
			<div class="visual">
				<i class="fa fa-shopping-cart"></i>
			</div>
			<div class="details">
				<div class="number">
					 <?php echo $sendgridStats['opens']; ?>
				</div>
				<div class="desc">
					 Emails opened
				</div>
			</div>
		</div>
	</div>
	<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
		<div class="dashboard-stat purple-plum">
			<div class="visual">
				<i class="fa fa-globe"></i>
			</div>
			<div class="details">
				<div class="number" id="email-clicks">
					 <?php echo $sendgridStats['clicks']; ?>
				</div>
				<div class="desc">
					 Email clicks
				</div>
			</div>
		</div>
	</div>
</div>
<!-- END DASHBOARD STATS -->



<div class="row email-stats display-none">
    <div class="col-md-12 col-sm-12">
        <div class="portlet box bordered grey-cararra">
            <div class="portlet-title">
                <div class="caption">
                    <i class="fa fa-circle-o-notch"></i>Email performance rates
                </div>
            </div>
            <div class="portlet-body">
                <div class="row">
                    <div class="col-md-6">
                        <div class="easy-pie-chart">
                            <div class="number transactions" data-percent="<?php echo $sendgridStats['openingRate']; ?>">
                                <span><?php echo $sendgridStats['openingRate']; ?></span>
                                %
                            </div>
                            <a class="title" href="#">
                            Opening Rate
                            </a>
                        </div>
                    </div>
                    <div class="margin-bottom-10 visible-sm">
                    </div>
                    <div class="col-md-6">
                        <div class="easy-pie-chart">
                            <div class="number transactions " data-percent="<?php echo $sendgridStats['ctr']; ?>" id="email-ctr-graph">
                                <span id="email-ctr-label"><?php echo $sendgridStats['ctr']; ?></span>
                                %
                            </div>
                            <a class="title" href="#">
                            Click-Through Rate
                            </a>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
</div>








<div class="row">
    <div class="col-md-6 col-sm-6">
        <!-- BEGIN PORTLET-->
        <div class="portlet solid bordered grey-cararra">
            <div class="portlet-title">
                <div class="caption">
                    <i class="fa fa-area-chart"></i>Sharewall user impressions
                </div>
            </div>
            <div class="portlet-body">
                <div id="impressions_statistics_loading">
                    <img src="/assets/admin/layout/img/loading.gif" alt="loading"/>
                </div>
                <div id="impressions_statistics_content" class="display-none">
                    <div id="impressions_statistics" class="chart">
                    </div>
                </div>
            </div>
        </div>
        <!-- END PORTLET-->
    </div>
    <div class="col-md-6 col-sm-6">
        <!-- BEGIN PORTLET-->
        <div class="portlet solid bordered grey-cararra">
            <div class="portlet-title">
                <div class="caption">
                    <i class="fa fa-area-chart"></i>Sharewall signups completed
                </div>
            </div>
            <div class="portlet-body">
                <div id="signups_statistics_loading">
                    <img src="/assets/admin/layout/img/loading.gif" alt="loading"/>
                </div>
                <div id="signups_statistics_content" class="display-none">
                    <div id="signups_statistics" class="chart">
                    </div>
                </div>
            </div>
        </div>
        <!-- END PORTLET-->
    </div>
</div>


<div class="row">
    <div class="col-md-6 col-sm-6">
        <!-- BEGIN PORTLET-->
        <div class="portlet solid bordered grey-cararra">
            <div class="portlet-title">
                <div class="caption">
                    <i class="fa fa-area-chart"></i>Sharewall signup rates
                </div>
            </div>
            <div class="portlet-body">
                <div id="signuprates_statistics_loading">
                    <img src="/assets/admin/layout/img/loading.gif" alt="loading"/>
                </div>
                <div id="signuprates_statistics_content" class="display-none">
                    <div id="signuprates_statistics" class="chart">
                    </div>
                </div>
            </div>
        </div>
        <!-- END PORTLET-->
    </div>
    <div class="col-md-6 col-sm-6">
        <!-- BEGIN PORTLET-->
        <div class="portlet solid bordered grey-cararra">
            <div class="portlet-title">
                <div class="caption">
                    <i class="fa fa-area-chart"></i>Sharewall unsubscribers
                </div>
            </div>
            <div class="portlet-body">
                <div id="unsubscribers_statistics_loading">
                    <img src="/assets/admin/layout/img/loading.gif" alt="loading"/>
                </div>
                <div id="unsubscribers_statistics_content" class="display-none">
                    <div id="unsubscribers_statistics" class="chart">
                    </div>
                </div>
            </div>
        </div>
        <!-- END PORTLET-->
    </div>
</div>


<div class="row">
    <!--
    <div class="col-md-6 col-sm-6">
        <div class="portlet solid bordered grey-cararra">
            <div class="portlet-title">
                <div class="caption">
                    <i class="fa fa-area-chart"></i>Average impressions pr. signup
                </div>
            </div>
            <div class="portlet-body">
                <div id="impressionrates_statistics_loading">
                    <img src="/assets/admin/layout/img/loading.gif" alt="loading"/>
                </div>
                <div id="impressionrates_statistics_content" class="display-none">
                    <div id="impressionrates_statistics" class="chart">
                    </div>
                </div>
            </div>
        </div>
    </div>
    -->
    <div class="col-md-6 col-sm-6">
        <!-- BEGIN PORTLET-->
        <div class="portlet solid bordered grey-cararra">
            <div class="portlet-title">
                <div class="caption">
                    <i class="fa fa-pie-chart"></i>Signup methods
                </div>
            </div>
            <div class="portlet-body">

                <div id="pie_chart_signup_method_loading">
                    <img src="/assets/admin/layout/img/loading.gif" alt="loading"/>
                </div>
                <div id="pie_chart_signup_method_content" class="display-none">
                    <h4></h4>
                    <div id="pie_chart_signup_method" class="chart">
                    </div>
                </div>
   
            </div>
        </div>
        <!-- END PORTLET-->
    </div>

    <div class="col-md-6 col-sm-6 display-none" id="pageviews_period_title_container">
        <!-- BEGIN PORTLET-->
        <div class="portlet solid bordered grey-cararra">
            <div class="portlet-title">
                <div class="caption">
                    <i class="fa fa-area-chart"></i><span id="pageviews_period_title">Hourly pageviews</span>
                </div>
                <div class="tools">
                    <div class="btn-group" data-toggle="buttons">
                      <label class="btn grey-steel btn-sm active">
                      <input type="radio" name="options_period" class="toggle" id="pageviews_period_hourly">Hourly</label>
                      <label class="btn grey-steel btn-sm">
                      <input type="radio" name="options_period" class="toggle" id="pageviews_period_daily">Daily</label>
                    </div>
                </div>

            </div>
            <div class="portlet-body">
                <div id="pageviews_period_loading">
                    <img src="/assets/admin/layout/img/loading.gif" alt="loading"/>
                </div>
                <div id="pageviews_period_content" class="display-none">
                    <div id="pageviews_period" class="chart">
                    </div>
                </div>
            </div>
        </div>
        <!-- END PORTLET-->
    </div>

</div>






<!-- 
<div class="row ">
    <div class="col-md-12 col-sm-12">
        <div class="portlet box bordered grey-cararra">
            <div class="portlet-title">
                <div class="caption">
                    <i class="fa fa-circle-o-notch"></i>Signup rates per scenario
                </div>
            </div>
            <div class="portlet-body">
                <div class="row">
                    <div class="col-md-3">
                        <div class="signuprates_loading">
                            <img src="/assets/admin/layout/img/loading.gif" alt="loading"/>
                        </div>
                        <div class="signuprates_content display-none">
                            <div class="easy-pie-chart">
                                <div class="number transactions" data-percent="0" id="signuprate_scenario1">
                                    <span>0</span>
                                    %
                                </div>
                                <a class="title" href="#">
                                Scenario 1 <div id="scenario1_numbers" class="h5"></div><h6>Hard Sharewall: The user <u>needs</u> to sign in and share via Facebook or Twitter up to access publisher content</h6>
                                </a>
                            </div>
                        </div>

                        
                    </div>
                    <div class="margin-bottom-10 visible-sm">
                    </div>
                    <div class="col-md-3">
                        <div class="signuprates_content display-none">
                            <div class="easy-pie-chart">
                                <div class="number transactions" data-percent="0" id="signuprate_scenario2">
                                    <span>0</span>
                                    %
                                </div>
                                <a class="title" href="#">
                                Scenario 2 <div id="scenario2_numbers" class="h5"></div><h6>Soft Sharewall: The user <u>can skip</u> signing in and sharing via Facebook or Twitter and access publisher content</h6>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="margin-bottom-10 visible-sm">
                    </div>
                    <div class="col-md-3">
                        <div class="signuprates_content display-none">
                            <div class="easy-pie-chart">
                                <div class="number transactions" data-percent="0" id="signuprate_scenario3">
                                    <span>
                                    0</span>
                                    %
                                </div>
                                <a class="title" href="#">
                                Scenario 3 <div id="scenario3_numbers" class="h5"></div><h6>Hard signup: The user <u>needs</u> to sign in via Facebook or enter email address to access publisher content</h6>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="margin-bottom-10 visible-sm">
                    </div>
                    <div class="col-md-3">
                        <div class="signuprates_content display-none">
                            <div class="easy-pie-chart">
                                <div class="number transactions" data-percent="0"  id="signuprate_scenario4">
                                    <span>
                                    0</span>
                                    %
                                </div>
                                <a class="title" href="#">
                                Scenario 4 <div id="scenario4_numbers" class="h5"></div><h6>Soft signup: The user <u>can skip</u> signing in via Facebook or entering email address to access publisher content</h6>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
-->






<script>




// define reporting date range based on daterate dropdown
var startDate = "<?php echo  date('c', $startdate) ?>";
var endDate = "<?php echo  date('c', $enddate) ?>";  

// define output friendly month names for graphs
var months = new Array(12);
months[0] = "Jan";
months[1] = "Feb";
months[2] = "Mar";
months[3] = "Apr";
months[4] = "May";
months[5] = "Jun";
months[6] = "Jul";
months[7] = "Aug";
months[8] = "Sep";
months[9] = "Oct";
months[10] = "Nov";
months[11] = "Dec";


function showChartTooltip(x, y, xValue, yValue) {
    $('<div id="tooltip" class="chart-tooltip">' + yValue + '<\/div>').css({
        position: 'absolute',
        display: 'none',
        top: y - 40,
        left: x - 40,
        border: '0px solid #ccc',
        padding: '2px 6px',
        'background-color': '#fff'
    }).appendTo("body").fadeIn(200);
}

var Charts = function () {

    return {
        //main function to initiate the module

        init: function () {

            Metronic.addResizeHandler(function () {
                 Charts.initPieCharts(); 
            });
            
        },

        initCharts: function () {

            if (!jQuery.plot) {
                return;
            }


            

            Keen.ready(function(){


                createUnsubscribersChart();
      
                createPerformanceCharts();
                //createScenarioCharts();
                createSignupMethodChart()
                

                createPeriodPageviewsChart('hourly');

 
   

                
            });


        },



        initPieCharts: function () {

             $('.easy-pie-chart .number.transactions').easyPieChart({
                animate: 1000,
                size: 80,
                lineWidth: 3,
                //barColor: Metronic.getBrandColor('yellow')
            });

        }
        
    };

}();


// Process charts for impressions, signups and signup rates
function createPerformanceCharts() {
   
    var impressions = [];
    var signups = [];
    var signuprates = [];
    var impressionrates = [];
    

    var count_impressions_daily = new Keen.Query("count", {
      eventCollection: "signup_impression",
      interval: "daily",
      timeframe: 
        {
          "start" : startDate,
          "end" : endDate
        },
      
    
    });

    var count_unique_impressions_daily = new Keen.Query("count_unique", {
      eventCollection: "signup_impression",
      target_property: "id",
      interval: "daily",
      timeframe: 
        {
          "start" : startDate,
          "end" : endDate
        },
      
    
    });

    
    var count_signups_daily = new Keen.Query("count", {
      eventCollection: "signup_completed",
      interval: "daily",
      timeframe: 
        {
          "start" : startDate,
          "end" : endDate
        },
      
    
    });


    var count_email_signups_daily = new Keen.Query("count", {
      eventCollection: "signup completed",
      interval: "daily",
      timeframe: 
        {
          "start" : startDate,
          "end" : endDate
        },
      filters: [
        {
          "property_name" : "signup_method",
          "operator" : "eq",
          "property_value" : "email" // look at particular scenarios only
        },
      ]
    
    });

          
    // Send query
    client.run([count_impressions_daily, count_unique_impressions_daily, count_signups_daily, count_email_signups_daily], function(response){

        // get total signup impressions for each day
        var result_impressions = response[0]['result'];

        // get unique signup impressions for each day
        var result_unique_impressions = response[1]['result'];

        //alert(JSON.stringify(result_impressions, null, 4));
        //console.log(result_impressions)
        
        // get total completed signups for each day
        var result_signups = response[2]['result'];

        // get total completed email signups for each day
        var result_email_signups = response[3]['result'];


        // loop through unique impressions
        for (var key in result_unique_impressions) {
            var cnt = result_unique_impressions[key]['value'];
            var timeframe = result_unique_impressions[key]['timeframe'];
            
            // get start date and adjust timezone with moment.js
            var timeframeOffset = moment.utc(timeframe['start']).zone("<?php echo $timezoneOffset; ?>");

            // create new date object
            var date = new Date(timeframeOffset.years(), timeframeOffset.months(), timeframeOffset.dates(), timeframeOffset.hours(), timeframeOffset.minutes(), 0, 0);
 
            impressions.push(new Array(months[date.getMonth()] + '&nbsp;' + date.getDate(), cnt));
        }




        // loop through signups
        for (var key in result_signups) {
            var cnt_signups = result_signups[key]['value'];
            var cnt_email_signups = result_email_signups[key]['value'];
            cnt_signups += cnt_email_signups;

            var timeframe = result_signups[key]['timeframe'];
            
            // get start date and adjust timezone with moment.js
            var timeframeOffset = moment.utc(timeframe['start']).zone("<?php echo $timezoneOffset; ?>");

            // create new date object
            var date = new Date(timeframeOffset.years(), timeframeOffset.months(), timeframeOffset.dates(), timeframeOffset.hours(), timeframeOffset.minutes(), 0, 0);
 
            signups.push(new Array(months[date.getMonth()] + '&nbsp;' + date.getDate(), cnt_signups));

            var cnt_unique_impressions = result_unique_impressions[key]['value'];
            var cnt_impressions = result_impressions[key]['value'];
            var signup_rate = 0;


            // calculate signup rate
            if (cnt_unique_impressions > 0) {
                signup_rate = (cnt_signups / cnt_unique_impressions) * 100;

                // format decimals
                signup_rate = parseFloat(Math.round(signup_rate * 100) / 100).toFixed(2);
            }

            signuprates.push(new Array(months[date.getMonth()] + '&nbsp;' + date.getDate(), signup_rate));

            var avg_impression_rate = 0;

            // calculate avg impressions pr signup
            if (cnt_impressions > 0) {
                avg_impression_rate = (cnt_impressions / cnt_signups);

                // format decimals
                avg_impression_rate = parseFloat(Math.round(avg_impression_rate * 100) / 100).toFixed(2);
            }

            impressionrates.push(new Array(months[date.getMonth()] + '&nbsp;' + date.getDate(), avg_impression_rate));
        }



        
        
        // draw signup impressions graph
        if ($('#impressions_statistics').size() != 0) {

            $('#impressions_statistics_loading').hide();
            $('#impressions_statistics_content').show();

            var plot_statistics = $.plot($("#impressions_statistics"),
                [{
                    data: impressions,
                    lines: {
                        fill: 0.2,
                        lineWidth: 0
                    },
                    color: ['#BAD9F5']
                }, {
                    data: impressions,
                    points: {
                        show: true,
                        fill: true,
                        radius: 4,
                        fillColor: "#9ACAE6",
                        lineWidth: 2
                    },
                    color: '#9ACAE6',
                    shadowSize: 1
                }, {
                    data: impressions,
                    lines: {
                        show: true,
                        fill: false,
                        lineWidth: 3
                    },
                    color: '#9ACAE6',
                    shadowSize: 0
                }],

                {
                    xaxis: {
                        tickLength: 0,
                        tickDecimals: 0,
                        mode: "categories",
                        min: 0,
                        font: {
                            lineHeight: 18,
                            style: "normal",
                            variant: "small-caps",
                            color: "#6F7B8A"
                        }
                    },
                    yaxis: {
                        ticks: 5,
                        tickDecimals: 0,
                        tickColor: "#eee",
                        min: 0,
                        font: {
                            lineHeight: 14,
                            style: "normal",
                            variant: "small-caps",
                            color: "#6F7B8A"
                        }
                    },
                    grid: {
                        hoverable: true,
                        clickable: true,
                        tickColor: "#eee",
                        borderColor: "#eee",
                        borderWidth: 1
                    }
                });

            var previousPoint = null;
            $("#impressions_statistics").bind("plothover", function (event, pos, item) {
                $("#x").text(pos.x.toFixed(2));
                $("#y").text(pos.y.toFixed(2));
                if (item) {
                    if (previousPoint != item.dataIndex) {
                        previousPoint = item.dataIndex;

                        $("#tooltip").remove();
                        var x = item.datapoint[0].toFixed(2),
                            y = item.datapoint[1].toFixed(2);

                        showChartTooltip(item.pageX, item.pageY, item.datapoint[0], item.datapoint[1] + ' unique impressions');
                    }
                } else {
                    $("#tooltip").remove();
                    previousPoint = null;
                }
            });

         }

         // draw completed signups graph
         if ($('#signups_statistics').size() != 0) {

            $('#signups_statistics_loading').hide();
            $('#signups_statistics_content').show();

            var plot_statistics = $.plot($("#signups_statistics"),
                [{
                    data: signups,
                    lines: {
                        fill: 0.2,
                        lineWidth: 0
                    },
                    color: ['#f89f9f']
                }, {
                    data: signups,
                    points: {
                        show: true,
                        fill: true,
                        radius: 4,
                        fillColor: "#f89f9f",
                        lineWidth: 2
                    },
                    color: '#f89f9f',
                    shadowSize: 1
                }, {
                    data: signups,
                    lines: {
                        show: true,
                        fill: false,
                        lineWidth: 3
                    },
                    color: '#f89f9f',
                    shadowSize: 0
                }],

                {
                    xaxis: {
                        tickLength: 0,
                        tickDecimals: 0,
                        mode: "categories",
                        min: 0,
                        font: {
                            lineHeight: 18,
                            style: "normal",
                            variant: "small-caps",
                            color: "#6F7B8A"
                        }
                    },
                    yaxis: {
                        ticks: 5,
                        tickDecimals: 0,
                        tickColor: "#eee",
                        min: 0,
                        font: {
                            lineHeight: 14,
                            style: "normal",
                            variant: "small-caps",
                            color: "#6F7B8A"
                        }
                    },
                    grid: {
                        hoverable: true,
                        clickable: true,
                        tickColor: "#eee",
                        borderColor: "#eee",
                        borderWidth: 1
                    }
                });

            var previousPoint = null;
            $("#signups_statistics").bind("plothover", function (event, pos, item) {
                $("#x").text(pos.x.toFixed(2));
                $("#y").text(pos.y.toFixed(2));
                if (item) {
                    if (previousPoint != item.dataIndex) {
                        previousPoint = item.dataIndex;

                        $("#tooltip").remove();
                        var x = item.datapoint[0].toFixed(2),
                            y = item.datapoint[1].toFixed(2);

                        showChartTooltip(item.pageX, item.pageY, item.datapoint[0], item.datapoint[1] + ' signups');
                    }
                } else {
                    $("#tooltip").remove();
                    previousPoint = null;
                }
            });

         }

         // draw signup rates graph
        if ($('#signuprates_statistics').size() != 0) {

            $('#signuprates_statistics_loading').hide();
            $('#signuprates_statistics_content').show();

            var plot_statistics = $.plot($("#signuprates_statistics"),
                [{
                    data: signuprates,
                    lines: {
                        fill: 0.2,
                        lineWidth: 0
                    },
                    color: ['#BAD9F5']
                }, {
                    data: signuprates,
                    points: {
                        show: true,
                        fill: true,
                        radius: 4,
                        fillColor: "#9ACAE6",
                        lineWidth: 2
                    },
                    color: '#9ACAE6',
                    shadowSize: 1
                }, {
                    data: signuprates,
                    lines: {
                        show: true,
                        fill: false,
                        lineWidth: 3
                    },
                    color: '#9ACAE6',
                    shadowSize: 0
                }],

                {
                    xaxis: {
                        tickLength: 0,
                        tickDecimals: 0,
                        mode: "categories",
                        min: 0,
                        font: {
                            lineHeight: 18,
                            style: "normal",
                            variant: "small-caps",
                            color: "#6F7B8A"
                        }
                    },
                    yaxis: {
                        ticks: 5,
                        tickDecimals: 0,
                        tickColor: "#eee",
                        min: 0,
                        font: {
                            lineHeight: 14,
                            style: "normal",
                            variant: "small-caps",
                            color: "#6F7B8A"
                        }
                    },
                    grid: {
                        hoverable: true,
                        clickable: true,
                        tickColor: "#eee",
                        borderColor: "#eee",
                        borderWidth: 1
                    }
                });

            var previousPoint = null;
            $("#signuprates_statistics").bind("plothover", function (event, pos, item) {
                $("#x").text(pos.x.toFixed(2));
                $("#y").text(pos.y.toFixed(2));
                if (item) {
                    if (previousPoint != item.dataIndex) {
                        previousPoint = item.dataIndex;

                        $("#tooltip").remove();
                        var x = item.datapoint[0].toFixed(2),
                            y = item.datapoint[1].toFixed(2);

                        showChartTooltip(item.pageX, item.pageY, item.datapoint[0], item.datapoint[1] + ' %');
                    }
                } else {
                    $("#tooltip").remove();
                    previousPoint = null;
                }
            });

         }


          // draw impression rates graph
        if ($('#impressionrates_statistics').size() != 0) {

            $('#impressionrates_statistics_loading').hide();
            $('#impressionrates_statistics_content').show();

            var plot_statistics = $.plot($("#impressionrates_statistics"),
                [{
                    data: impressionrates,
                    lines: {
                        fill: 0.2,
                        lineWidth: 0
                    },
                    color: ['#BAD9F5']
                }, {
                    data: impressionrates,
                    points: {
                        show: true,
                        fill: true,
                        radius: 4,
                        fillColor: "#9ACAE6",
                        lineWidth: 2
                    },
                    color: '#9ACAE6',
                    shadowSize: 1
                }, {
                    data: impressionrates,
                    lines: {
                        show: true,
                        fill: false,
                        lineWidth: 3
                    },
                    color: '#9ACAE6',
                    shadowSize: 0
                }],

                {
                    xaxis: {
                        tickLength: 0,
                        tickDecimals: 0,
                        mode: "categories",
                        min: 0,
                        font: {
                            lineHeight: 18,
                            style: "normal",
                            variant: "small-caps",
                            color: "#6F7B8A"
                        }
                    },
                    yaxis: {
                        ticks: 5,
                        tickDecimals: 0,
                        tickColor: "#eee",
                        min: 0,
                        font: {
                            lineHeight: 14,
                            style: "normal",
                            variant: "small-caps",
                            color: "#6F7B8A"
                        }
                    },
                    grid: {
                        hoverable: true,
                        clickable: true,
                        tickColor: "#eee",
                        borderColor: "#eee",
                        borderWidth: 1
                    }
                });

            var previousPoint = null;
            $("#impressionrates_statistics").bind("plothover", function (event, pos, item) {
                $("#x").text(pos.x.toFixed(2));
                $("#y").text(pos.y.toFixed(2));
                if (item) {
                    if (previousPoint != item.dataIndex) {
                        previousPoint = item.dataIndex;

                        $("#tooltip").remove();
                        var x = item.datapoint[0].toFixed(2),
                            y = item.datapoint[1].toFixed(2);

                        showChartTooltip(item.pageX, item.pageY, item.datapoint[0], item.datapoint[1] + ' impressions/signup');
                    }
                } else {
                    $("#tooltip").remove();
                    previousPoint = null;
                }
            });

         }
   


    });


}


// Process chart for signup method
function createSignupMethodChart() {

    var signupmethods = [];

    var count_signups_fb = new Keen.Query("count", {
      eventCollection: "signup_completed",
      timeframe: 
        {
          "start" : startDate,
          "end" : endDate
        },
      filters: [
        {
          "property_name" : "signup_method",
          "operator" : "eq",
          "property_value" : "facebook" // look at one particular scenario only
        },

     ]

    });

    var count_signups_twitter = new Keen.Query("count", {
      eventCollection: "signup_completed",
      timeframe: 
        {
          "start" : startDate,
          "end" : endDate
        },
      filters: [
        {
          "property_name" : "signup_method",
          "operator" : "eq",
          "property_value" : "twitter" // look at one particular scenario only
        },

     ]

    });

    var count_signups_email = new Keen.Query("count", {
      eventCollection: "signup_completed",
      timeframe: 
        {
          "start" : startDate,
          "end" : endDate
        },
      filters: [
        {
          "property_name" : "signup_method",
          "operator" : "eq",
          "property_value" : "email" // look at one particular scenario only
        },

     ]
    });



    client.run([count_signups_fb, count_signups_twitter, count_signups_email], function(response){


        signups_fb = response[0]['result'];
        signups_twitter = response[1]['result'];
        signups_email = response[2]['result'];


        signupmethods.push({label: 'Facebook', data: signups_fb});
        signupmethods.push({label: 'Twitter', data: signups_twitter});
        signupmethods.push({label: 'Email', data: signups_email});

        // hide loader and display chart content
        $('#pie_chart_signup_method_loading').hide();
        $('#pie_chart_signup_method_content').show();

        // draw pie chart
        $.plot($("#pie_chart_signup_method"), signupmethods, {
            series: {
                pie: {
                    show: true,
                    radius: 1,
                    label: {
                        show: true,
                        radius: 1,
                        formatter: function (label, series) {
                            return '<div style="font-size:8pt;text-align:center;padding:2px;color:white;">' + label + '<br/>' + Math.round(series.percent) + '%</div>';
                        },
                        background: {
                            opacity: 0.5,
                            color: '#000'
                        }
                    },
                    combine: {
                            threshold: 0.01
                        }
                }
            },
            legend: {
                show: true
            }
        });
        

    });
}


// Process charts for all scenarios
function createScenarioCharts() {
    createScenario1Chart();
    createScenario2Chart();
    createScenario3Chart();
    createScenario4Chart();

    // draw scenario pies
    $('.signuprates_loading').hide();
    $('.signuprates_content').show();
}


// Process chart for scenario 1
function createScenario1Chart() {

    var count_impressions_scenario1 = new Keen.Query("count", {
      eventCollection: "signup impression",
      timeframe: 
        {
          "start" : startDate,
          "end" : endDate
        },
      groupBy: "scenario",
      filters: [
        {
          "property_name" : "scenario",
          "operator" : "eq",
          "property_value" : "1" // look at one particular scenario only
        },

     ]
    });

    var count_signups_scenario1 = new Keen.Query("count", {
      eventCollection: "user_signup",
      timeframe: 
        {
          "start" : startDate,
          "end" : endDate
        },
      groupBy: "org_scenario",
      filters: [
        {
          "property_name" : "org_scenario",
          "operator" : "eq",
          "property_value" : "1" // look at one particular scenario only
        },

     ]
    });



    client.run([count_impressions_scenario1, count_signups_scenario1], function(response){

        // get total impressions and signups for scenario 1 in time period
        var impressions_scenario1 = 0;
        var signups_scenario1 = 0;
        var signup_rate_scenario1 = 0;

        if (response[0]['result'].length > 0)
            impressions_scenario1 = response[0]['result'][0]['result'];

        if (response[1]['result'].length > 0)
            signups_scenario1 = response[1]['result'][0]['result'];

        // calculate signup rate
        if (impressions_scenario1 > 0) {
            signup_rate_scenario1 = (signups_scenario1 / impressions_scenario1) * 100;

            // format decimals
            signup_rate_scenario1 = parseFloat(Math.round(signup_rate_scenario1 * 100) / 100).toFixed(2);
        }


        $('#signuprate_scenario1').data('easyPieChart').update(signup_rate_scenario1);
        $('#signuprate_scenario1').find('span').text(signup_rate_scenario1);
        $('#scenario1_numbers').text('(' + signups_scenario1 + ' signups / ' + impressions_scenario1 + ' impressions)');

    });
}

// Process chart for scenario 2
function createScenario2Chart() {

    var count_impressions_scenario2 = new Keen.Query("count", {
      eventCollection: "signup impression",
      timeframe: 
        {
          "start" : startDate,
          "end" : endDate
        },
      groupBy: "scenario",
      filters: [
        {
          "property_name" : "scenario",
          "operator" : "eq",
          "property_value" : "2" // look at one particular scenario only
        },

     ]
    });

    var count_signups_scenario2 = new Keen.Query("count", {
      eventCollection: "user_signup",
      timeframe: 
        {
          "start" : startDate,
          "end" : endDate
        },
      groupBy: "org_scenario",
      filters: [
        {
          "property_name" : "org_scenario",
          "operator" : "eq",
          "property_value" : "2" // look at one particular scenario only
        },

     ]
    });



    client.run([count_impressions_scenario2, count_signups_scenario2], function(response){

        // get total impressions and signups for scenario 2 in time period
        var impressions_scenario2 = 0;
        var signups_scenario2 = 0;
        var signup_rate_scenario2 = 0;

        if (response[0]['result'].length > 0)
            impressions_scenario2 = response[0]['result'][0]['result'];

        if (response[1]['result'].length > 0)
            signups_scenario2 = response[1]['result'][0]['result'];

        // calculate signup rate
        if (impressions_scenario2 > 0) {
            signup_rate_scenario2 = (signups_scenario2 / impressions_scenario2) * 100;

            // format decimals
            signup_rate_scenario2 = parseFloat(Math.round(signup_rate_scenario2 * 100) / 100).toFixed(2);
        }


        $('#signuprate_scenario2').data('easyPieChart').update(signup_rate_scenario2);
        $('#signuprate_scenario2').find('span').text(signup_rate_scenario2);
        $('#scenario2_numbers').text('(' + signups_scenario2 + ' signups / ' + impressions_scenario2 + ' impressions)');

    });
}


// Process chart for scenario 3
function createScenario3Chart() {

    var count_impressions_scenario3 = new Keen.Query("count", {
      eventCollection: "signup impression",
      timeframe: 
        {
          "start" : startDate,
          "end" : endDate
        },
      groupBy: "scenario",
      filters: [
        {
          "property_name" : "scenario",
          "operator" : "eq",
          "property_value" : "3" // look at one particular scenario only
        },

     ]
    });

    var count_signups_scenario3 = new Keen.Query("count", {
      eventCollection: "user_signup",
      timeframe: 
        {
          "start" : startDate,
          "end" : endDate
        },
      groupBy: "org_scenario",
      filters: [
        {
          "property_name" : "org_scenario",
          "operator" : "eq",
          "property_value" : "3" // look at one particular scenario only
        },

     ]
    });




    client.run([count_impressions_scenario3, count_signups_scenario3], function(response){

        // get total impressions and signups for scenario 3 in time period
        var impressions_scenario3 = 0;
        var signups_scenario3 = 0;
        var signup_rate_scenario3 = 0;

        if (response[0]['result'].length > 0)
            impressions_scenario3 = response[0]['result'][0]['result'];

        if (response[1]['result'].length > 0)
            signups_scenario3 = response[1]['result'][0]['result'];


        // calculate signup rate
        if (impressions_scenario3 > 0) {
            signup_rate_scenario3 = (signups_scenario3 / impressions_scenario3) * 100;

            // format decimals
            signup_rate_scenario3 = parseFloat(Math.round(signup_rate_scenario3 * 100) / 100).toFixed(2);
        }


        $('#signuprate_scenario3').data('easyPieChart').update(signup_rate_scenario3);
        $('#signuprate_scenario3').find('span').text(signup_rate_scenario3);
        $('#scenario3_numbers').text('(' + signups_scenario3 + ' signups / ' + impressions_scenario3 + ' impressions)');

    });
}


// Process chart for scenario 4
function createScenario4Chart() {

    var count_impressions_scenario4 = new Keen.Query("count", {
      eventCollection: "signup impression",
      timeframe: 
        {
          "start" : startDate,
          "end" : endDate
        },
      groupBy: "scenario",
      filters: [
        {
          "property_name" : "scenario",
          "operator" : "eq",
          "property_value" : "4" // look at one particular scenario only
        },

     ]
    });

    var count_signups_scenario4 = new Keen.Query("count", {
      eventCollection: "user_signup",
      timeframe: 
        {
          "start" : startDate,
          "end" : endDate
        },
      groupBy: "org_scenario",
      filters: [
        {
          "property_name" : "org_scenario",
          "operator" : "eq",
          "property_value" : "4" // look at one particular scenario only
        },

     ]
    });



    client.run([count_impressions_scenario4, count_signups_scenario4], function(response){

        // get total impressions and signups for scenario 4 in time period
        var impressions_scenario4 = 0;
        var signups_scenario4 = 0;
        var signup_rate_scenario4 = 0;

        if (response[0]['result'].length > 0)
            impressions_scenario4 = response[0]['result'][0]['result'];

        if (response[1]['result'].length > 0)
            signups_scenario4 = response[1]['result'][0]['result'];

        // calculate signup rate
        if (impressions_scenario4 > 0) {
            signup_rate_scenario4 = (signups_scenario4 / impressions_scenario4) * 100;

            // format decimals
            signup_rate_scenario4 = parseFloat(Math.round(signup_rate_scenario4 * 100) / 100).toFixed(2);
        }


        $('#signuprate_scenario4').data('easyPieChart').update(signup_rate_scenario4);
        $('#signuprate_scenario4').find('span').text(signup_rate_scenario4);
        $('#scenario4_numbers').text('(' + signups_scenario4 + ' signups / ' + impressions_scenario4 + ' impressions)');

    });
}




// Process chart for unsubscribers
function createUnsubscribersChart() {

    var unsubscribers = [];
    var totalUnsubscribers = 0;

    var count_unsubscribers_daily = new Keen.Query("count", {
      eventCollection: "unsubscribed",
      interval: "daily",
      timeframe: 
        {
          "start" : startDate,
          "end" : endDate
        }
    });

    client.run([count_unsubscribers_daily], function(response){


         // get total unsubscribers for each day
        var result_unsubcribers = response['result'];

        // loop through unsubscribers
        for (var key in result_unsubcribers) {
            var cnt = result_unsubcribers[key]['value'];
            var timeframe = result_unsubcribers[key]['timeframe'];
              // get start date and adjust timezone with moment.js
            var timeframeOffset = moment.utc(timeframe['start']).zone("<?php echo $timezoneOffset; ?>");

            // create new date object
            var date = new Date(timeframeOffset.years(), timeframeOffset.months(), timeframeOffset.dates(), timeframeOffset.hours(), timeframeOffset.minutes(), 0, 0);
 
            unsubscribers.push(new Array(months[date.getMonth()] + '&nbsp;' + date.getDate(), cnt));

            totalUnsubscribers += cnt;
        }


        var emailOpens = <?php echo $sendgridStats['opens']?>;
        var emailClicks = <?php echo $sendgridStats['clicks']?> - totalUnsubscribers;
        var emailCTR = 0;

        // calculate signup rate
        if (emailOpens > 0) {
            emailCTR = (emailClicks/ emailOpens) * 100;

            // format decimals
            emailCTR = parseFloat(Math.round(emailCTR * 100) / 100).toFixed(2);
        }

        $('#email-ctr-label').text(emailCTR);
        $('#email-clicks').text(emailClicks);
        $('#email-ctr-graph').data('easyPieChart').update(emailCTR);

        <?php if ($sendgridStats['enabled']) { ?>
        $('.email-stats').show();
        <?php } ?>
        


        // draw unsubscribers graph
        if ($('#unsubscribers_statistics').size() != 0) {

            $('#unsubscribers_statistics_loading').hide();
            $('#unsubscribers_statistics_content').show();

            var plot_statistics = $.plot($("#unsubscribers_statistics"),
                [{
                    data: unsubscribers,
                    lines: {
                        fill: 0.2,
                        lineWidth: 0
                    },
                    color: ['#f89f9f']
                }, {
                    data: unsubscribers,
                    points: {
                        show: true,
                        fill: true,
                        radius: 4,
                        fillColor: "#f89f9f",
                        lineWidth: 2
                    },
                    color: '#f89f9f',
                    shadowSize: 1
                }, {
                    data: unsubscribers,
                    lines: {
                        show: true,
                        fill: false,
                        lineWidth: 3
                    },
                    color: '#f89f9f',
                    shadowSize: 0
                }],

                {
                    xaxis: {
                        tickLength: 0,
                        tickDecimals: 0,
                        mode: "categories",
                        min: 0,
                        font: {
                            lineHeight: 18,
                            style: "normal",
                            variant: "small-caps",
                            color: "#6F7B8A"
                        }
                    },
                    yaxis: {
                        ticks: 5,
                        tickDecimals: 0,
                        tickColor: "#eee",
                        min: 0,
                        font: {
                            lineHeight: 14,
                            style: "normal",
                            variant: "small-caps",
                            color: "#6F7B8A"
                        }
                    },
                    grid: {
                        hoverable: true,
                        clickable: true,
                        tickColor: "#eee",
                        borderColor: "#eee",
                        borderWidth: 1
                    }
                });

            var previousPoint = null;
            $("#unsubscribers_statistics").bind("plothover", function (event, pos, item) {
                $("#x").text(pos.x.toFixed(2));
                $("#y").text(pos.y.toFixed(2));
                if (item) {
                    if (previousPoint != item.dataIndex) {
                        previousPoint = item.dataIndex;

                        $("#tooltip").remove();
                        var x = item.datapoint[0].toFixed(2),
                            y = item.datapoint[1].toFixed(2);

                        showChartTooltip(item.pageX, item.pageY, item.datapoint[0], item.datapoint[1] + ' unsubscribers');
                    }
                } else {
                    $("#tooltip").remove();
                    previousPoint = null;
                }
            });

         }

    });
}



// Process chart for hourly pageviews
function createPeriodPageviewsChart(period) {

    $('#pageviews_period_title_container').show();

    if (period == 'hourly') {
      periodTicks = 24;
      keenInterval = 'hourly';
      graphTitle = "Hourly pageviews";
    } else {
      periodTicks = 7;
      keenInterval = 'daily';
      graphTitle = "Daily pageviews";
    }

    $('#pageviews_period_title').text(graphTitle);

    // used for graph
    var pageviews = [];

    // create array for all 24 hours with a default value of 0
    var pageviews_period = Array.apply(null, new Array(periodTicks)).map(Number.prototype.valueOf,0);


    var count_pageviews = new Keen.Query("count", {
      eventCollection: "PAGE_USERS_VIEWS",
      interval: keenInterval,
      timeframe: 
        {
          "start" : startDate,
          "end" : endDate
        }
    });

    client.run([count_pageviews], function(response){


         // get hourly pageviews for each day
        var result_pageviews = response['result'];
        
        var i = 0;
        // loop through each day and increment hourly value
        for (var key in result_pageviews) {
            i++;

            var cnt = result_pageviews[key]['value'];
            var timeframe = result_pageviews[key]['timeframe'];

            // get start date and adjust timezone with moment.js
            var timeframeOffset = moment.utc(timeframe['start']).zone("<?php echo $timezoneOffset; ?>");

            // create new date object
            var date = new Date(timeframeOffset.years(), timeframeOffset.months(), timeframeOffset.dates(), timeframeOffset.hours(), timeframeOffset.minutes(), 0, 0);


            if (period == 'hourly') {
              pageviews_period[date.getHours()] += cnt;
            } else {
              pageviews_period[date.getDay()] += cnt;
            }

        }

        // loop through each hour and populate graph array
        


        // loop through each hour and populate graph array
        for (var i in pageviews_period) {
            pageviews.push(new Array(i, pageviews_period[i]));
        }

      

        // draw unsubscribers graph
        if ($('#pageviews_period').size() != 0) {

            $('#pageviews_period_loading').hide();
            $('#pageviews_period_content').show();

            var plot_statistics = $.plot($("#pageviews_period"),
                [{
                    data: pageviews,
                    lines: {
                        fill: 0.2,
                        lineWidth: 0
                    },
                    color: ['#f89f9f']
                }, {
                    data: pageviews,
                    points: {
                        show: true,
                        fill: true,
                        radius: 4,
                        fillColor: "#f89f9f",
                        lineWidth: 2
                    },
                    color: '#f89f9f',
                    shadowSize: 1
                }, {
                    data: pageviews,
                    lines: {
                        show: true,
                        fill: false,
                        lineWidth: 3
                    },
                    color: '#f89f9f',
                    shadowSize: 0
                }],

                {
                    xaxis: {
                        ticks: 24,
                        tickDecimals: 0,
                        tickColor: "#eee",
                        tickFormatter: periodXFormatter,
                    },
                    yaxis: {
                        ticks: 5,
                        tickDecimals: 0,
                        tickColor: "#eee",
                        min: 0,
                        font: {
                            lineHeight: 14,
                            style: "normal",
                            variant: "small-caps",
                            color: "#6F7B8A"
                        }
                    },
                    grid: {
                        hoverable: true,
                        clickable: true,
                        tickColor: "#eee",
                        borderColor: "#eee",
                        borderWidth: 1
                    }
                });

            var previousPoint = null;
            $("#pageviews_period").bind("plothover", function (event, pos, item) {
                $("#x").text(pos.x.toFixed(2));
                $("#y").text(pos.y.toFixed(2));
                if (item) {
                    if (previousPoint != item.dataIndex) {
                        previousPoint = item.dataIndex;

                        $("#tooltip").remove();
                        var x = item.datapoint[0].toFixed(2),
                            y = item.datapoint[1].toFixed(2);
                        
                        if (period == 'hourly') {
                            showChartTooltip(item.pageX, item.pageY, item.datapoint[0], item.datapoint[0] + '.00-' + parseInt(item.datapoint[0]+1) + '.00: ' + item.datapoint[1] + ' pageviews');
                        } else {
                            showChartTooltip(item.pageX, item.pageY, item.datapoint[0], item.datapoint[1] + ' pageviews');
                        }
                        
                    }
                } else {
                    $("#tooltip").remove();
                    previousPoint = null;
                }
            });

            

         }

    });

    

    function periodXFormatter(val, axis) {
      if (period == 'hourly') {
        return val; 
      } else {
        return getWeekDay(val); 
      }
    }
}



function getWeekDay(day) {
    var daysOfWeek = new Array('Sunday', 'Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday');
    return daysOfWeek[day];
}


$('body').on('change','input:radio[name="options_period"]',function(){
    refreshPageviewPeriodGraph();
});


function refreshPageviewPeriodGraph() {
    period = $('#pageviews_period_daily').is(':checked')?'daily':'hourly';

    $('#pageviews_period_loading').show();
    $('#pageviews_period_content').hide();
    createPeriodPageviewsChart(period);
}






</script>



<script>
jQuery(document).ready(function() { 

Charts.initCharts();
Charts.initPieCharts(); 

});
</script>








