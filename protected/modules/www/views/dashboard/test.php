<?php


$url = 'https://api.sendgrid.com/';
$user = 'sundgaard';
$pass = 'ChR.22.09';

$params = array(
    'api_user'  => $user,
    'api_key'   => $pass,
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


$json = json_decode($response, true);

$data = $json;

$delivered = $data['delivered'];
$opens = $data['opens'];
$clicks = $data['clicks'];
$bounces = $data['bounces'];



// Scenario 1
$scenarioData = $this->getScenarioData($startdate, $enddate, 1);
$scenario1 = $scenarioData[0]['cnt'];
if(is_null($scenario1))
	$scenario1 = 0;

// Scenario 2
$scenarioData = $this->getScenarioData($startdate, $enddate, 2);
$scenario2 = $scenarioData[0]['cnt'];
if(is_null($scenario2))
	$scenario2 = 0;

// Scenario 3
$scenarioData = $this->getScenarioData($startdate, $enddate, 3);
$scenario3 = $scenarioData[0]['cnt'];
if(is_null($scenario3))
	$scenario3 = 0;

// Scenario 4
$scenarioData = $this->getScenarioData($startdate, $enddate, 4);
$scenario4 = $scenarioData[0]['cnt'];
if(is_null($scenario4))
	$scenario4 = 0;

// Scenario 5
$scenarioData = $this->getScenarioData($startdate, $enddate, 5);
$scenario5 = $scenarioData[0]['cnt'];
if(is_null($scenario5))
	$scenario5 = 0;

// Scenario 1
$scenarioData = $this->getScenarioData($startdate, $enddate, 6);
$scenario6 = $scenarioData[0]['cnt'];
if(is_null($scenario6))
	$scenario6 = 0;



?>



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



<!-- BEGIN PIE CHART PORTLET-->
			<div class="row">
				<div class="col-md-12">
					<div class="portlet box yellow">
						<div class="portlet-title">
							<div class="caption">
								<i class="fa fa-gift"></i>Sharewall user signups
							</div>
						</div>
						<div class="portlet-body">
							<h4></h4>
							<div id="pie_chart_scenarios" class="chart">
							</div>
						</div>
					</div>
					
				</div>
				
			</div>
			<!-- END PIE CHART PORTLET-->


<script>

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

            var data = [];


        },

        

        initPieCharts: function () {

            var data = [];
            /*
            var series = Math.floor(Math.random() * 10) + 1;
            series = series < 5 ? 5 : series;
            
            for (var i = 0; i < series; i++) {
                data[i] = {
                    label: "Series" + (i + 1),
                    data: Math.floor(Math.random() * 100) + 1
                }
            }
            */

            data[0] = {
                    label: "Scenario 1",
                    data: <?php echo $scenario1; ?>
                }

            data[1] = {
                    label: "Scenario 2",
                    data: <?php echo $scenario2; ?>
                }

            data[2] = {
                    label: "Scenario 3",
                    data: <?php echo $scenario3; ?>
                }

            data[3] = {
                    label: "Scenario 4",
                    data: <?php echo $scenario4; ?>
                }

            data[4] = {
                    label: "Scenario 5",
                    data: <?php echo $scenario5; ?>
                }

            data[5] = {
                    label: "Scenario 6",
                    data: <?php echo $scenario6; ?>
                }



            // GRAPH 4
            $.plot($("#pie_chart_scenarios"), data, {
                    series: {
                        pie: {
                            show: true,
                            radius: 1,
                            label: {
                                show: true,
                                radius: 3 / 4,
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



            function pieHover(event, pos, obj) {
            if (!obj)
                    return;
                percent = parseFloat(obj.series.percent).toFixed(2);
                $("#hover").html('<span style="font-weight: bold; color: ' + obj.series.color + '">' + obj.series.label + ' (' + percent + '%)</span>');
            }

            function pieClick(event, pos, obj) {
                if (!obj)
                    return;
                percent = parseFloat(obj.series.percent).toFixed(2);
                alert('' + obj.series.label + ': ' + percent + '%');
            }

        }
        
    };

}();

</script>









