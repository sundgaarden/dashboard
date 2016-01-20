<?php


// get publisher credentials for sendgrid
$publisherId = Yii::app()->user->publisherId;
$publisher = Publisher::model()->findByPk($publisherId);
$sendgridUsername = $publisher->sendgridusername;
$sendgridPassword = $publisher->sendgridpassword;

if (strlen($sendgridUsername) > 0 && strlen($sendgridPassword) > 0)
    $enableSendgridReporting = true;
else
    $enableSendgridReporting = false;


if ($enableSendgridReporting) {
    $url = 'https://api.sendgrid.com/';


    $params = array(
        'api_user'  => $sendgridUsername,
        'api_key'   => $sendgridPassword,
        'start_date' => $startdate,
        'end_date' => $enddate,
        'aggregate' => '1',
      );


    $request =  $url.'api/stats.get.json';

    // Generate curl request
    $session = curl_init($request);
    // Tell curl to use HTTP POST
    curl_setopt ($session, CURLOPT_POST, true);
    // Tell curl that this is the body of the POST
    curl_setopt ($session, CURLOPT_POSTFIELDS, $params);
    // Tell curl not to return headers, but do return the response
    curl_setopt($session, CURLOPT_HEADER, false);
    curl_setopt($session, CURLOPT_RETURNTRANSFER, true);

    // obtain response
    $response = curl_exec($session);
    curl_close($session);


    $data = json_decode($response, true);

    $emailOpeningRate = 0;
    $emailCTR = 0;

    // disable sendgrip reporting if API credentials are not valid
    if (array_key_exists('error', $data)) {
        $enableSendgridReporting = false;
    } else {
        $delivered = $data['delivered'];
        $opens = $data['opens'];
        $clicks = $data['clicks'];
        $bounces = $data['bounces'];

        // calculate opening and click-through rates
        if($delivered == 0)
            $emailOpeningRate = 0;
        else
            $emailOpeningRate = round(($opens * 100) / $delivered, 2);

        if($opens == 0)
            $emailCTR = 0;
        else
            $emailCTR = round(($clicks * 100) / $opens, 2);
    }    



}


?>


<?php if ($enableSendgridReporting) { ?>
<!-- BEGIN DASHBOARD STATS -->
<div class="row">
	<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
		<div class="dashboard-stat blue-madison">
			<div class="visual">
				<i class="fa fa-comments"></i>
			</div>
			<div class="details">
				<div class="number">
					 <?php echo $delivered; ?>
				</div>
				<div class="desc">
					 Emails delivered
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
					 <?php echo $opens; ?>
				</div>
				<div class="desc">
					 Emails opened
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
					 <?php echo $clicks; ?>
				</div>
				<div class="desc">
					 Email clicks
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
				<div class="number">
					 <?php echo $bounces; ?>
				</div>
				<div class="desc">
					 Email bounces
				</div>
			</div>
		</div>
	</div>
</div>
<!-- END DASHBOARD STATS -->



<div class="row ">
    <div class="col-md-12 col-sm-12">
        <div class="portlet box bordered grey-cararra">
            <div class="portlet-title">
                <div class="caption">
                    <i class="fa fa-calendar"></i>Email performance rates
                </div>
            </div>
            <div class="portlet-body">
                <div class="row">
                    <div class="col-md-6">
                        <div class="easy-pie-chart">
                            <div class="number transactions" data-percent="<?php echo $emailOpeningRate; ?>">
                                <span><?php echo $emailOpeningRate; ?></span>
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
                            <div class="number transactions" data-percent="<?php echo $emailCTR; ?>">
                                <span><?php echo $emailCTR; ?></span>
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


<?php } ?>


<div class="row">
    <div class="col-md-6 col-sm-6">
        <!-- BEGIN PORTLET-->
        <div class="portlet solid bordered grey-cararra">
            <div class="portlet-title">
                <div class="caption">
                    <i class="fa fa-bar-chart-o"></i>Sharewall signup impressions
                </div>
            </div>
            <div class="portlet-body">
                <div id="impressions_statistics_loading">
                    <img src="../../assets/admin/layout/img/loading.gif" alt="loading"/>
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
                    <i class="fa fa-bar-chart-o"></i>Sharewall signups completed
                </div>
            </div>
            <div class="portlet-body">
                <div id="signups_statistics_loading">
                    <img src="../../assets/admin/layout/img/loading.gif" alt="loading"/>
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
                    <i class="fa fa-bar-chart-o"></i>Sharewall signup rates
                </div>
            </div>
            <div class="portlet-body">
                <div id="signuprates_statistics_loading">
                    <img src="../../assets/admin/layout/img/loading.gif" alt="loading"/>
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
                    <i class="fa fa-bar-chart-o"></i>Sharewall unsubscribers
                </div>
            </div>
            <div class="portlet-body">
                <div id="unsubscribers_statistics_loading">
                    <img src="../../assets/admin/layout/img/loading.gif" alt="loading"/>
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


<script type="text/javascript">
  !function(a,b){if(void 0===b[a]){b["_"+a]={},b[a]=function(c){b["_"+a].clients=b["_"+a].clients||{},b["_"+a].clients[c.projectId]=this,this._config=c},b[a].ready=function(c){b["_"+a].ready=b["_"+a].ready||[],b["_"+a].ready.push(c)};for(var c=["addEvent","setGlobalProperties","trackExternalLink","on"],d=0;d<c.length;d++){var e=c[d],f=function(a){return function(){return this["_"+a]=this["_"+a]||[],this["_"+a].push(arguments),this}};b[a].prototype[e]=f(e)}var g=document.createElement("script");g.type="text/javascript",g.async=!0,g.src="https://d26b395fwzu5fz.cloudfront.net/3.0.5/keen.min.js";var h=document.getElementsByTagName("script")[0];h.parentNode.insertBefore(g,h)}}("Keen",this);
</script>


<script type="text/javascript">

  //Configure the client
  var client = new Keen({
      projectId: "53f6fc7e33e40629f7000000",
      readKey: "9aa3c17e2ac93495bd92876cdcb44eaad46b08e286aa326908952df64c15e0c386c27e073393613e6211c7cad75979b2d3bdc798386666b32c6fab3c2e1b5391e2d5b7b1c71db9f40cb2c2f46d55132dc86493d45ca07d01c08b809d654e1ab427d307605544695380fa8edc58baa770"
  });

</script>





<div class="row ">
    <div class="col-md-12 col-sm-12">
        <div class="portlet box bordered grey-cararra">
            <div class="portlet-title">
                <div class="caption">
                    <i class="fa fa-calendar"></i>Signup rates per scenario
                </div>
            </div>
            <div class="portlet-body">
                <div class="row">
                    <div class="col-md-3">
                        <div class="signuprates_loading">
                            <img src="../../assets/admin/layout/img/loading.gif" alt="loading"/>
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




<div class="row">
	<div class="col-md-6">
		<div class="portlet solid bordered grey-cararra">
			<div class="portlet-title">
				<div class="caption">
					<i class="fa fa-gift"></i>Signups per gender
				</div>
			</div>
			<div class="portlet-body">

                <div id="pie_chart_gender_loading">
                    <img src="../../assets/admin/layout/img/loading.gif" alt="loading"/>
                </div>
                <div id="pie_chart_gender_content" class="display-none">
                    <h4></h4>
                    <div id="pie_chart_gender" class="chart">
                    </div>
                </div>
           
			</div>
		</div>
		
	</div>
    <div class="col-md-6">
        <div class="portlet solid bordered grey-cararra">
            <div class="portlet-title">
                <div class="caption">
                    <i class="fa fa-gift"></i>Signups per region
                </div>
            </div>
            <div class="portlet-body">

                <div id="pie_chart_region_loading">
                    <img src="../../assets/admin/layout/img/loading.gif" alt="loading"/>
                </div>
                <div id="pie_chart_region_content" class="display-none">
                    <h4></h4>
                    <div id="pie_chart_region" class="chart">
                    </div>
                </div>
   
            </div>
        </div>
        
    </div>
</div>


<div class="row">
    <div class="col-md-12">
        <div class="portlet solid bordered grey-cararra">
            <div class="portlet-title">
                <div class="caption">
                    <i class="fa fa-gift"></i>Signups per age
                </div>
            </div>
            <div class="portlet-body">
                <div id="bar_chart_age_loading">
                    <img src="../../assets/admin/layout/img/loading.gif" alt="loading"/>
                </div>
                <div id="bar_chart_age_content" class="display-none">
                    <h4></h4>
                    <div id="bar_chart_age" class="chart">
                    </div>
                </div>

            </div>
        </div>
        
    </div>
</div>


<div class="row">
    <div class="col-md-6">
        <div class="portlet solid bordered grey-cararra">
            <div class="portlet-title">
                <div class="caption">
                    <i class="fa fa-gift"></i>Signups per device type
                </div>
            </div>
            <div class="portlet-body">
                <div id="pie_chart_device_type_loading">
                    <img src="../../assets/admin/layout/img/loading.gif" alt="loading"/>
                </div>
                <div id="pie_chart_device_type_content" class="display-none">
                    <h4></h4>
                    <div id="pie_chart_device_type" class="chart">
                    </div>
                </div>
            </div>
        </div>
        
    </div>
    <div class="col-md-6">
        <div class="portlet solid bordered grey-cararra">
            <div class="portlet-title">
                <div class="caption">
                    <i class="fa fa-gift"></i>Signups per mobile type
                </div>
            </div>
            <div class="portlet-body">
                <div id="pie_chart_mobile_type_loading">
                    <img src="../../assets/admin/layout/img/loading.gif" alt="loading"/>
                </div>
                <div id="pie_chart_mobile_type_content" class="display-none">
                    <h4></h4>
                    <div id="pie_chart_mobile_type" class="chart">
                    </div>
                </div>
            </div>
        </div>
        
    </div>
</div>

<div class="row">
    <div class="col-md-6">
        <div class="portlet solid bordered grey-cararra">
            <div class="portlet-title">
                <div class="caption">
                    <i class="fa fa-gift"></i>Signups per iOS type
                </div>
            </div>
            <div class="portlet-body">
                <div id="pie_chart_ios_type_loading">
                    <img src="../../assets/admin/layout/img/loading.gif" alt="loading"/>
                </div>
                <div id="pie_chart_ios_type_content" class="display-none">
                    <h4></h4>
                    <div id="pie_chart_ios_type" class="chart">
                    </div>
                </div>
            </div>
        </div>
        
    </div>
    <div class="col-md-6">
        <div class="portlet solid bordered grey-cararra">
            <div class="portlet-title">
                <div class="caption">
                    <i class="fa fa-gift"></i>Signups per browser type
                </div>
            </div>
            <div class="portlet-body">
                <div id="pie_chart_browser_type_loading">
                    <img src="../../assets/admin/layout/img/loading.gif" alt="loading"/>
                </div>
                <div id="pie_chart_browser_type_content" class="display-none">
                    <h4></h4>
                    <div id="pie_chart_browser_type" class="chart">
                    </div>
                </div>
            </div>
        </div>
        
    </div>
    
</div>


<script>

// define reporting date range based on daterate dropdown
var startDate = "<?php echo$startdate; ?>T00:00Z";
var endDate = "<?php echo$enddate; ?>T23:59Z";  

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
                
                createPerformanceCharts();
                createScenarioCharts();
                createUnsubscribersChart();
                createGenderChart();
                createRegionChart();
                createAgeChart();
                createDeviceCharts();
                createIosChart();
                createBrowserChart();
                
            });


        },



        initPieCharts: function () {

             $('.easy-pie-chart .number.transactions').easyPieChart({
                animate: 1000,
                size: 80,
                lineWidth: 3,
                barColor: Metronic.getBrandColor('yellow')
            });

        }
        
    };

}();


// Process charts for impressions, signups and signup rates
function createPerformanceCharts() {
   
    var impressions = [];
    var signups = [];
    var signuprates = [];
    

    var count_impressions_daily = new Keen.Query("count", {
      eventCollection: "signup impression",
      interval: "daily",
      timeframe: 
        {
          "start" : startDate,
          "end" : endDate
        },
      filters: [
        {
          "property_name" : "scenario",
          "operator" : "lte",
          "property_value" : "4" // look at particular scenarios only
        },
      ]
    
    });

    
    var count_signups_daily = new Keen.Query("count", {
      eventCollection: "signup completed",
      interval: "daily",
      timeframe: 
        {
          "start" : startDate,
          "end" : endDate
        },
      filters: [
        {
          "property_name" : "scenario",
          "operator" : "lte",
          "property_value" : "4" // look at particular scenarios only
        },
      ]
    
    });

    var count_fbdeclines_daily = new Keen.Query("count", {
      eventCollection: "facebook decline",
      interval: "daily",
      timeframe: 
        {
          "start" : startDate,
          "end" : endDate
        },
      filters: [
        {
          "property_name" : "scenario",
          "operator" : "lte",
          "property_value" : "4" // look at particular scenarios only
        },
      ]
    
    });

          
    // Send query
    client.run([count_impressions_daily, count_signups_daily, count_fbdeclines_daily], function(response){

        // get total signup impressions for each day
        var result_impressions = response[0]['result'];

        //alert(JSON.stringify(result_impressions, null, 4));
        //console.log(result_impressions)
        
        // get total completed signups for each day
        var result_signups = response[1]['result'];

        // get total FB declines for each day
        var result_declines = response[2]['result'];

        // loop through impressions
        for (var key in result_impressions) {
            var cnt = result_impressions[key]['value'];
            var timeframe = result_impressions[key]['timeframe'];
            var date = new Date(timeframe['start']);
            impressions.push(new Array(months[date.getMonth()] + '&nbsp;' + date.getUTCDate(), cnt));
        }


        // loop through signups
        for (var key in result_signups) {
            var cnt_signups = result_signups[key]['value'];
            var cnt_declines = result_declines[key]['value'];

            // subtract FB declines from completes signups
            cnt_signups = cnt_signups - cnt_declines; 

            var timeframe = result_signups[key]['timeframe'];
            var date = new Date(timeframe['start']);
            signups.push(new Array(months[date.getMonth()] + '&nbsp;' + date.getUTCDate(), cnt_signups));

            var cnt_impressions = result_impressions[key]['value'];
            var signup_rate = 0;

            // calculate signup rate
            if (cnt_impressions > 0) {
                signup_rate = (cnt_signups / cnt_impressions) * 100;

                // format decimals
                signup_rate = parseFloat(Math.round(signup_rate * 100) / 100).toFixed(2);
            }

            signuprates.push(new Array(months[date.getMonth()] + '&nbsp;' + date.getUTCDate(), signup_rate));
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

                        showChartTooltip(item.pageX, item.pageY, item.datapoint[0], item.datapoint[1] + ' impressions');
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
      eventCollection: "signup completed",
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
      eventCollection: "signup completed",
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
      eventCollection: "signup completed",
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

    var count_fbdeclines_scenario3 = new Keen.Query("count", {
      eventCollection: "facebook decline",
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



    client.run([count_impressions_scenario3, count_signups_scenario3, count_fbdeclines_scenario3], function(response){

        // get total impressions and signups for scenario 3 in time period
        var impressions_scenario3 = 0;
        var signups_scenario3 = 0;
        var fbdeclines_scenario3 = 0;
        var signup_rate_scenario3 = 0;

        if (response[0]['result'].length > 0)
            impressions_scenario3 = response[0]['result'][0]['result'];

        if (response[1]['result'].length > 0)
            signups_scenario3 = response[1]['result'][0]['result'];

        if (response[2]['result'].length > 0)
            fbdeclines_scenario3 = response[2]['result'][0]['result'];


        // subtract FB declines from completes signups
        signups_scenario3 = signups_scenario3 - fbdeclines_scenario3; 

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
      eventCollection: "signup completed",
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
            var date = new Date(timeframe['start']);
            unsubscribers.push(new Array(months[date.getMonth()] + '&nbsp;' + date.getUTCDate(), cnt));
        }


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



// Process chart for genders
function createGenderChart() {
    var count_signups_gender = new Keen.Query("count", {
      eventCollection: "USERS",
      groupBy: "userdb.gender",
      timeframe: 
        {
          "start" : startDate,
          "end" : endDate
        }
    });

    client.run([count_signups_gender], function(response){

        var result = response['result'];

        var count_male = 0;
        var count_female = 0;

        for (var key in result) {
            var cnt = result[key]['result'];

            switch(result[key]['userdb.gender']) {
                case 'male':
                    count_male = cnt;
                    break;
                case 'female':
                    count_female = cnt;
                    break;
            }
        }
        
        var data = [];
        data[0] = {
                label: "Male",
                data: count_male
            }

        data[1] = {
                label: "Female",
                data: count_female
            }

        // hide loader and display chart content
        $('#pie_chart_gender_loading').hide();
        $('#pie_chart_gender_content').show();


        // draw pie chart
        $.plot($("#pie_chart_gender"), data, {
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
                    }
                }
            },
            legend: {
                show: false
            }
        });

    });
}



// Process chart for region
function createRegionChart() {
    var regions = [];

    var count_signups_region = new Keen.Query("count", {
      eventCollection: "USERS",
      groupBy: "userkeen.ip_geo_info.province",
      timeframe: 
        {
          "start" : startDate,
          "end" : endDate
        }
    });

    client.run([count_signups_region], function(response){

        var result = response['result'];

        
        for (var key in result) {
            var cnt = result[key]['result'];
            var region = result[key]['userkeen.ip_geo_info.province']
            if (region != null)
                regions.push({label: region, data: cnt});
        }

        
        function compare(a,b) {
          if (a.data < b.data)
             return 1;
          if (a.data > b.data)
            return -1;
          return 0;
        }

        regions.sort(compare);
        regions.splice(10, 100);
        

        // hide loader and display chart content
        $('#pie_chart_region_loading').hide();
        $('#pie_chart_region_content').show();


        // draw pie chart
        $.plot($("#pie_chart_region"), regions, {
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


// Process chart for age
function createAgeChart() {
    var ages = [];

    var count_signups_age = new Keen.Query("count", {
      eventCollection: "USERS",
      groupBy: "userdb.age",
      timeframe: 
        {
          "start" : startDate,
          "end" : endDate
        }
    });

    client.run([count_signups_age], function(response){

        var result = response['result'];
        
        for (var key in result) {
            var cnt = result[key]['result'];
            var age = result[key]['userdb.age']
            if (age != null)
                ages.push([age,cnt]);
        }

        function compare(a,b) {
          if (a.data < b.data)
             return -1;
          if (a.data > b.data)
            return 1;
          return 0;
        }

        ages.sort(compare);
        
        

        // hide loader and display chart content
        $('#bar_chart_age_loading').hide();
        $('#bar_chart_age_content').show();


        var plot = $.plot($("#bar_chart_age"), [{
                data: ages,
                lines: {
                    lineWidth: 1,
                },
                shadowSize: 0

            }
        ], {
            series: {
                lines: {
                    show: false,
                    lineWidth: 2,
                    fill: false,
                    fillColor: {
                        colors: [{
                                opacity: 0.05
                            }, {
                                opacity: 0.01
                            }
                        ]
                    }
                },
                
                points: {
                        show: true,
                        fill: true,
                        radius: 4,
                        fillColor: "#9ACAE6",
                        lineWidth: 2
                    },
                shadowSize: 1
            },
            grid: {
                hoverable: true,
                clickable: true,
                tickColor: "#eee",
                borderColor: "#eee",
                borderWidth: 1
            },
            colors: ["#9ACAE6", "#37b7f3", "#52e136"],
            xaxis: {
                ticks: 50,
                tickDecimals: 0,
                tickColor: "#eee",
            },
            yaxis: {
                ticks: 11,
                tickDecimals: 0,
                tickColor: "#eee",
            }
        });

        function showTooltip(x, y, contents) {
        $('<div id="tooltip">' + contents + '</div>').css({
                position: 'absolute',
                display: 'none',
                top: y + 5,
                left: x + 15,
                border: '1px solid #333',
                padding: '4px',
                color: '#fff',
                'border-radius': '3px',
                'background-color': '#333',
                opacity: 0.80
            }).appendTo("body").fadeIn(200);
        }



        var previousPoint = null;
        $("#bar_chart_age").bind("plothover", function (event, pos, item) {
            $("#x").text(pos.x.toFixed(2));
            $("#y").text(pos.y.toFixed(2));

            if (item) {
                if (previousPoint != item.dataIndex) {
                    previousPoint = item.dataIndex;

                    $("#tooltip").remove();
                    var x = item.datapoint[0].toFixed(0),
                        y = item.datapoint[1].toFixed(0);

                    showTooltip(item.pageX, item.pageY, x + " years old (" + y + " signups)");
                }
            } else {
                $("#tooltip").remove();
                previousPoint = null;
            }
        });


    });
}



// Process chart for device & mobile types
function createDeviceCharts() {
    var devices = [];
    var mobileDevices = [];

    var count_signups_device = new Keen.Query("count", {
      eventCollection: "USERS",
      groupBy: "userkeen.parsed_user_agent.os.family",
      timeframe: 
        {
          "start" : startDate,
          "end" : endDate
        }
    });

    client.run([count_signups_device], function(response){

        var result = response['result'];

        //alert(JSON.stringify(result, null, 4));
        var mobileDeviceList = new Array('Android', 'iOS', 'BlackBerry OS', 'Windows Phone');
        var mobileDeviceCount = 0;
        var desktopDeviceCount = 0;
        
        for (var key in result) {
            var cnt = result[key]['result'];
            var device = result[key]['userkeen.parsed_user_agent.os.family']
            if (device != null) {
                if ($.inArray(device, mobileDeviceList) != -1) {
                    mobileDeviceCount += cnt;
                    mobileDevices.push({label: device, data: cnt});
                } else {
                    desktopDeviceCount += cnt;
                }  
            }
        }

        devices.push({label: 'Desktop', data: desktopDeviceCount});
        devices.push({label: 'Mobile', data: mobileDeviceCount});

        
      
        

        // hide loader and display chart content
        $('#pie_chart_device_type_loading').hide();
        $('#pie_chart_device_type_content').show();

        $('#pie_chart_mobile_type_loading').hide();
        $('#pie_chart_mobile_type_content').show();


        // draw pie chart
        $.plot($("#pie_chart_device_type"), devices, {
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
                    }
                }
            },
            legend: {
                show: false
            }
        });

        // draw pie chart
        $.plot($("#pie_chart_mobile_type"), mobileDevices, {
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


// Process chart for ios types
function createIosChart() {
    
    var iosDevices = [];

    var count_signups_ios = new Keen.Query("count", {
      eventCollection: "USERS",
      groupBy: "userkeen.parsed_user_agent.device.family",
      timeframe: 
        {
          "start" : startDate,
          "end" : endDate
        }
    });

    client.run([count_signups_ios], function(response){

        var result = response['result'];

        //alert(JSON.stringify(result, null, 4));
        var iosDeviceList = new Array('iPad', 'iPhone');
        
        for (var key in result) {
            var cnt = result[key]['result'];
            var device = result[key]['userkeen.parsed_user_agent.device.family']
            if (device != null) {
                if ($.inArray(device, iosDeviceList) != -1) {
                    iosDevices.push({label: device, data: cnt});
                }  
            }
        }
        

        // hide loader and display chart content
        $('#pie_chart_ios_type_loading').hide();
        $('#pie_chart_ios_type_content').show();


        // draw pie chart
        $.plot($("#pie_chart_ios_type"), iosDevices, {
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
                    }
                }
            },
            legend: {
                show: false
            }
        });


    });
}

// Process chart for browser types
function createBrowserChart() {
    
    var browsers = [];

    var count_signups_browser = new Keen.Query("count", {
      eventCollection: "USERS",
      groupBy: "userkeen.parsed_user_agent.browser.family",
      timeframe: 
        {
          "start" : startDate,
          "end" : endDate
        }
    });

    client.run([count_signups_browser], function(response){

        var result = response['result'];
        
        for (var key in result) {
            var cnt = result[key]['result'];
            var device = result[key]['userkeen.parsed_user_agent.browser.family']
            if (device != null) {
                browsers.push({label: device, data: cnt});
            }
        }
        

        // hide loader and display chart content
        $('#pie_chart_browser_type_loading').hide();
        $('#pie_chart_browser_type_content').show();


        // draw pie chart
        $.plot($("#pie_chart_browser_type"), browsers, {
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
                            threshold: 0.001
                        }
                }
            },
            legend: {
                show: true
            }
        });


    });
}

</script>



<script>
Charts.initCharts();
Charts.initPieCharts();   
</script>








