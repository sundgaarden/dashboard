<?php

$sendgridStats = $this->getSendgridStats($startdate, $enddate);

?>



<div class="row">
	<div class="col-md-6">
		<div class="portlet solid bordered grey-cararra">
			<div class="portlet-title">
				<div class="caption">
					<i class="fa fa-pie-chart"></i>Email opens per gender
				</div>
			</div>
			<div class="portlet-body">

                <div id="pie_chart_openings_gender_loading">
                    <img src="/assets/admin/layout/img/loading.gif" alt="loading"/>
                </div>
                <div id="pie_chart_openings_gender_content" class="display-none">
                    <h4></h4>
                    <div id="pie_chart_openings_gender" class="chart">
                    </div>
                </div>
           
			</div>
		</div>
		
	</div>
    <div class="col-md-6">
        <div class="portlet solid bordered grey-cararra">
            <div class="portlet-title">
                <div class="caption">
                    <i class="fa fa-pie-chart"></i>Email opens per age group
                </div>
            </div>
            <div class="portlet-body">

                <div id="pie_chart_openings_age_loading">
                    <img src="/assets/admin/layout/img/loading.gif" alt="loading"/>
                </div>
                <div id="pie_chart_openings_age_content" class="display-none">
                    <h4></h4>
                    <div id="pie_chart_openings_age" class="chart">
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
                    <i class="fa fa-pie-chart"></i>Email clicks per gender
                </div>
            </div>
            <div class="portlet-body">

                <div id="pie_chart_clicks_gender_loading">
                    <img src="/assets/admin/layout/img/loading.gif" alt="loading"/>
                </div>
                <div id="pie_chart_clicks_gender_content" class="display-none">
                    <h4></h4>
                    <div id="pie_chart_clicks_gender" class="chart">
                    </div>
                </div>
           
            </div>
        </div>
        
    </div>
    <div class="col-md-6">
        <div class="portlet solid bordered grey-cararra">
            <div class="portlet-title">
                <div class="caption">
                    <i class="fa fa-pie-chart"></i>Email clicks per age group
                </div>
            </div>
            <div class="portlet-body">

                <div id="pie_chart_clicks_age_loading">
                    <img src="/assets/admin/layout/img/loading.gif" alt="loading"/>
                </div>
                <div id="pie_chart_clicks_age_content" class="display-none">
                    <h4></h4>
                    <div id="pie_chart_clicks_age" class="chart">
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
                    <i class="fa fa-pie-chart"></i>Email CTR per gender
                </div>
            </div>
            <div class="portlet-body">

                <div id="pie_chart_ctr_gender_loading">
                    <img src="/assets/admin/layout/img/loading.gif" alt="loading"/>
                </div>
                <div id="pie_chart_ctr_gender_content" class="display-none">
                    <h4></h4>
                    <div id="pie_chart_ctr_gender" class="chart">
                    </div>
                </div>
           
            </div>
        </div>
        
    </div>
    <div class="col-md-6">
        <div class="portlet solid bordered grey-cararra">
            <div class="portlet-title">
                <div class="caption">
                    <i class="fa fa-pie-chart"></i>Email CTR per age group
                </div>
            </div>
            <div class="portlet-body">

                <div id="pie_chart_ctr_age_loading">
                    <img src="/assets/admin/layout/img/loading.gif" alt="loading"/>
                </div>
                <div id="pie_chart_ctr_age_content" class="display-none">
                    <h4></h4>
                    <div id="pie_chart_ctr_age" class="chart">
                    </div>
                </div>
           
            </div>
        </div>
        
    </div>
</div>



<div class="row">
    <div class="col-md-6 display-none" id="url_clicks_female_container">

        <div class="portlet solid bordered grey-cararra">
            <div class="portlet-title">
                <div class="caption">
                    <i class="fa fa-table"></i>Most popular email clicks by females
                </div>
            </div>
            <div class="portlet-body">

                <div id="url_clicks_female_loading">
                    <img src="/assets/admin/layout/img/loading.gif" alt="loading"/>
                </div>
                <div id="url_clicks_female_content" class="display-none">
                    <div class="table-scrollable">
                        <table class="table table-striped table-hover" id="url_clicks_female">
                        <thead>
                        <tr>
                            <th>
                                 #
                            </th>
                            <th>
                                 Page
                            </th>
                            <th>
                                 Clicks
                            </th>
                            <th>
                                 Share
                            </th>
                        </tr>
                        </thead>
                        <tbody>
                       
                        </tbody>
                        </table>
                    </div>
                </div>

                
            </div>
        </div>
        
    </div>
    <div class="col-md-6 display-none" id="url_clicks_male_container">

        <div class="portlet solid bordered grey-cararra">
            <div class="portlet-title">
                <div class="caption">
                    <i class="fa fa-table"></i>Most popular email clicks by males
                </div>
            </div>
            <div class="portlet-body">
              <div id="url_clicks_male_loading">
                    <img src="/assets/admin/layout/img/loading.gif" alt="loading"/>
                </div>
                <div id="url_clicks_male_content" class="display-none">
                    <div class="table-scrollable">
                        <table class="table table-striped table-hover" id="url_clicks_male">
                        <thead>
                        <tr>
                            <th>
                                 #
                            </th>
                            <th>
                                 Page
                            </th>
                            <th>
                                 Clicks
                            </th>
                            <th>
                                 Share
                            </th>
                        </tr>
                        </thead>
                        <tbody>
                       
                        </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        
    </div>
    
</div>



<div class="row">
    <div class="col-md-12 display-none" id="url_clicks_age_container">

        <div class="portlet solid bordered grey-cararra">
            <div class="portlet-title">
                <div class="caption">
                    <i class="fa fa-bar-chart-o"></i>Most popular email clicks per age group
                </div>
            </div>

            <div class="portlet-body">

              <div id="url_clicks_age_loading">
                    <img src="/assets/admin/layout/img/loading.gif" alt="loading" />
                </div>
                <div  id="url_clicks_age_content" class="display-none">
               
                    <div class="tabbable tabbable-custom">
                        <ul class="nav nav-tabs">
                            
                            
                            <li class="active">
                                <a href="#clicks_tab_15-24" data-toggle="tab">
                                15-24 </a>
                            </li>
                            <li>
                                <a href="#clicks_tab_25-34" data-toggle="tab">
                                25-34 </a>
                            </li>
                            <li>
                                <a href="#clicks_tab_35-44" data-toggle="tab">
                                35-44 </a>
                            </li>
                            <li>
                                <a href="#clicks_tab_45-54" data-toggle="tab">
                                45-54 </a>
                            </li>
                            <li>
                                <a href="#clicks_tab_55-64" data-toggle="tab">
                                55-64 </a>
                            </li>
                            <li>
                                <a href="#clicks_tab_64" data-toggle="tab">
                                64+ </a>
                            </li>
                        </ul>
                        <div class="tab-content">

                            <div class="tab-pane active" id="clicks_tab_15-24">
                                <div class="table-scrollable">
                                  <table class="table table-striped table-hover" id="clicks_15-24">
                                  <thead>
                                  <tr>
                                      <th>
                                           #
                                      </th>
                                      <th>
                                           Page
                                      </th>
                                      <th>
                                           Pageviews
                                      </th>
                                      <th>
                                           Share
                                      </th>
                                  </tr>
                                  </thead>
                                  <tbody>
                                 
                                  </tbody>
                                  </table>
                                </div>
                            </div>
                            <div class="tab-pane" id="clicks_tab_25-34">
                                <div class="table-scrollable">
                                  <table class="table table-striped table-hover" id="clicks_25-34">
                                  <thead>
                                  <tr>
                                      <th>
                                           #
                                      </th>
                                      <th>
                                           Page
                                      </th>
                                      <th>
                                           Pageviews
                                      </th>
                                      <th>
                                           Share
                                      </th>
                                  </tr>
                                  </thead>
                                  <tbody>
                                 
                                  </tbody>
                                  </table>
                                </div>
                            </div>
                            <div class="tab-pane" id="clicks_tab_35-44">
                                <div class="table-scrollable">
                                  <table class="table table-striped table-hover" id="clicks_35-44">
                                  <thead>
                                  <tr>
                                      <th>
                                           #
                                      </th>
                                      <th>
                                           Page
                                      </th>
                                      <th>
                                           Pageviews
                                      </th>
                                      <th>
                                           Share
                                      </th>
                                  </tr>
                                  </thead>
                                  <tbody>
                                 
                                  </tbody>
                                  </table>
                                </div>
                            </div>
                            <div class="tab-pane" id="clicks_tab_45-54">
                                <div class="table-scrollable">
                                  <table class="table table-striped table-hover" id="clicks_45-54">
                                  <thead>
                                  <tr>
                                      <th>
                                           #
                                      </th>
                                      <th>
                                           Page
                                      </th>
                                      <th>
                                           Pageviews
                                      </th>
                                      <th>
                                           Share
                                      </th>
                                  </tr>
                                  </thead>
                                  <tbody>
                                 
                                  </tbody>
                                  </table>
                                </div>
                            </div>
                            <div class="tab-pane" id="clicks_tab_55-64">
                                <div class="table-scrollable">
                                  <table class="table table-striped table-hover" id="clicks_55-64">
                                  <thead>
                                  <tr>
                                      <th>
                                           #
                                      </th>
                                      <th>
                                           Page
                                      </th>
                                      <th>
                                           Pageviews
                                      </th>
                                      <th>
                                           Share
                                      </th>
                                  </tr>
                                  </thead>
                                  <tbody>
                                 
                                  </tbody>
                                  </table>
                                </div>
                            </div>
                            <div class="tab-pane" id="clicks_tab_64">
                                <div class="table-scrollable">
                                  <table class="table table-striped table-hover" id="clicks_64">
                                  <thead>
                                  <tr>
                                      <th>
                                           #
                                      </th>
                                      <th>
                                           Page
                                      </th>
                                      <th>
                                           Pageviews
                                      </th>
                                      <th>
                                           Share
                                      </th>
                                  </tr>
                                  </thead>
                                  <tbody>
                                 
                                  </tbody>
                                  </table>
                                </div>
                            </div>

                      </div>
                    </div>
                </div>
            </div>



        </div>
        
    </div>
    
</div>




<script>




// define reporting date range based on daterate dropdown
var startDate = "<?php echo  date('c', $startdate) ?>";
var endDate = "<?php echo  date('c', $enddate) ?>";  


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

                
                createGenderChart('open', '#pie_chart_openings_gender', 'opens');
                createAgeChart('open', '#pie_chart_openings_age', 'opens');

                createGenderChart('click', '#pie_chart_clicks_gender', 'clicks');
                createAgeChart('click', '#pie_chart_clicks_age', 'clicks');

                createGenderCtrChart("#pie_chart_ctr_gender");
                createAgeCtrChart("#pie_chart_ctr_age");
                

                createGenderClicksTable('female');
                createGenderClicksTable('male');
                
                createAgeGroupClicksTables();

   
                
            });


        },



        initPieCharts: function () {


        }
        
    };

}();






// Process chart for genders
function createGenderChart(eventName, container, labelSuffix) {




    var count_gender = new Keen.Query("count", {
      eventCollection: "email_event",
      groupBy: "gender",
      timeframe: 
        {
          "start" : startDate,
          "end" : endDate
        },
      filters: [
        {
          "property_name" : "event",
          "operator" : "eq",
          "property_value" : eventName
        },

     ]
    });

    client.run([count_gender], function(response){

        var result = response['result'];

        var count_male = 0;
        var count_female = 0;
        var count_unknown = 0;

        for (var key in result) {
            var cnt = result[key]['result'];

            switch(result[key]['gender']) {
                case 'male':
                    count_male = cnt;
                    break;
                case 'female':
                    count_female = cnt;
                    break;
                case null:
                    count_unknown= cnt;
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

        /*
        data[2] = {
                label: "Unknown",
                data: count_unknown
            }
        */

        // hide loader and display chart content
        $(container+'_loading').hide();
        $(container+'_content').show();


        // draw pie chart
        $.plot($(container), data, {
            series: {
                pie: {
                    show: true,
                    radius: 1,
                    label: {
                        show: true,
                        radius: 1,
                        formatter: function (label, series) {
                            return '<div style="font-size:8pt;text-align:center;padding:2px;color:white;">' + label + '<br/>' + Math.round(series.percent) + '% </div>';
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


// Process chart for genders
function createGenderCtrChart(container) {




    var count_openings = new Keen.Query("count", {
      eventCollection: "email_event",
      groupBy: "gender",
      timeframe: 
        {
          "start" : startDate,
          "end" : endDate
        },
      filters: [
        {
          "property_name" : "event",
          "operator" : "eq",
          "property_value" : "open"
        },

     ]
    });

    var count_clicks = new Keen.Query("count", {
      eventCollection: "email_event",
      groupBy: "gender",
      timeframe: 
        {
          "start" : startDate,
          "end" : endDate
        },
      filters: [
        {
          "property_name" : "event",
          "operator" : "eq",
          "property_value" : "click"
        },

     ]
    });

    client.run([count_openings, count_clicks], function(response){


        var result_openings = response[0]['result'];
        var result_clicks = response[1]['result'];

        var totalOpenings = 0;
        var totalClicks = 0;

        var count_openings_male = 0;
        var count_openings_female = 0;
        var count_openings_unknown = 0;
        var count_clicks_male = 0;
        var count_clicks_female = 0;
        var count_clicks_unknown = 0;

        for (var key in result_openings) {
            var cnt = result_openings[key]['result'];

            switch(result_openings[key]['gender']) {
                case 'male':
                    count_openings_male = cnt;
                    break;
                case 'female':
                    count_openings_female = cnt;
                    break;
                case null:
                    count_openings_unknown = cnt;
                    break;
            }

            totalOpenings += cnt;
        }

        for (var key in result_clicks) {
            var cnt = result_clicks[key]['result'];

            switch(result_clicks[key]['gender']) {
                case 'male':
                    count_clicks_male = cnt;
                    break;
                case 'female':
                    count_clicks_female = cnt;
                    break;
                case null:
                    count_clicks_unknown = cnt;
                    break;
            }

            totalClicks += cnt;
        }
        
        var openDiff = <?php echo $sendgridStats['opens']?> / totalOpenings;
        var clickDiff = <?php echo $sendgridStats['clicks']?> / totalClicks;
        clickDiff = 1;


        var male_ctr = 0;
        var female_ctr = 0;
        var unknown_ctr = 0;

        if (count_openings_male > 0) {
            male_ctr = ((count_clicks_male * clickDiff) / (count_openings_male * openDiff)) * 100;

            // format decimals
            male_ctr = parseFloat(Math.round(male_ctr * 100) / 100).toFixed(2);
        }

        
        if (count_openings_female > 0) {
            female_ctr = ((count_clicks_female * clickDiff) / (count_openings_female * openDiff)) * 100;

            // format decimals
            female_ctr = parseFloat(Math.round(female_ctr * 100) / 100).toFixed(2);
        }

        if (count_openings_unknown > 0) {
            unknown_ctr = ((count_clicks_unknown * clickDiff) / (count_openings_unknown * openDiff)) * 100;

            // format decimals
            unknown_ctr = parseFloat(Math.round(unknown_ctr * 100) / 100).toFixed(2);
        }


        var data = [];

        data.push(["Male", male_ctr]);
        data.push(["Female", female_ctr]);
        //data.push(["Unknown gender", unknown_ctr]);



        // hide loader and display chart content
        $(container+'_loading').hide();
        $(container+'_content').show();


        // draw bar chart
        if ($(container).size() != 0) {

            $.plot(container, [ data ], {
                series: {
                    bars: {
                        show: true,
                        barWidth: 0.6,
                        align: "center"
                    },
                    color: ['#BAD9F5']
                },
                xaxis: {
                    mode: "categories",
                    tickLength: 0
                },
                grid: {
                    hoverable: true,
                    clickable: true,
                    tickColor: "#BAD9F5",
                    borderColor: "#BAD9F5",
                    borderWidth: 0
                }
            });

            var previousPoint = null;
            $(container).bind("plothover", function (event, pos, item) {
                $("#x").text(pos.x.toFixed(2));
                $("#y").text(pos.y.toFixed(2));
                if (item) {
                    if (previousPoint != item.dataIndex) {
                        previousPoint = item.dataIndex;

                        $("#tooltip").remove();
                        var x = item.datapoint[0].toFixed(2),
                            y = item.datapoint[1].toFixed(2);

                        showChartTooltip(item.pageX, item.pageY, item.datapoint[0], item.datapoint[1] + ' % CTR');
                    }
                } else {
                    $("#tooltip").remove();
                    previousPoint = null;
                }
            });


         }


    });
}



// Process chart for age group
function createAgeChart(eventName, container, labelSuffix) {


    var count_agegroup_15_24 = new Keen.Query("count", {
      eventCollection: "email_event",
      timeframe: 
        {
          "start" : startDate,
          "end" : endDate
        },
      filters: [
        {
          "property_name" : "age",
          "operator" : "gte",
          "property_value" : 15 // look at one particular scenario only
        },
        {
          "property_name" : "age",
          "operator" : "lte",
          "property_value" : 24 // look at one particular scenario only
        },
        {
          "property_name" : "event",
          "operator" : "eq",
          "property_value" : eventName
        },

     ]
    });

    var count_agegroup_25_34 = new Keen.Query("count", {
      eventCollection: "email_event",
      timeframe: 
        {
          "start" : startDate,
          "end" : endDate
        },
      filters: [
        {
          "property_name" : "age",
          "operator" : "gte",
          "property_value" : 25 // look at one particular scenario only
        },
        {
          "property_name" : "age",
          "operator" : "lte",
          "property_value" : 34 // look at one particular scenario only
        },
        {
          "property_name" : "event",
          "operator" : "eq",
          "property_value" : eventName
        },

     ]
    });

    var count_agegroup_35_44 = new Keen.Query("count", {
      eventCollection: "email_event",
      timeframe: 
        {
          "start" : startDate,
          "end" : endDate
        },
      filters: [
        {
          "property_name" : "age",
          "operator" : "gte",
          "property_value" : 35 // look at one particular scenario only
        },
        {
          "property_name" : "age",
          "operator" : "lte",
          "property_value" : 44 // look at one particular scenario only
        },
        {
          "property_name" : "event",
          "operator" : "eq",
          "property_value" : eventName
        },

     ]
    });

    var count_agegroup_45_54 = new Keen.Query("count", {
      eventCollection: "email_event",
      timeframe: 
        {
          "start" : startDate,
          "end" : endDate
        },
      filters: [
        {
          "property_name" : "age",
          "operator" : "gte",
          "property_value" : 45 // look at one particular scenario only
        },
        {
          "property_name" : "age",
          "operator" : "lte",
          "property_value" : 54 // look at one particular scenario only
        },
        {
          "property_name" : "event",
          "operator" : "eq",
          "property_value" : eventName
        },

     ]
    });

    var count_agegroup_55_64 = new Keen.Query("count", {
      eventCollection: "email_event",
      timeframe: 
        {
          "start" : startDate,
          "end" : endDate
        },
      filters: [
        {
          "property_name" : "age",
          "operator" : "gte",
          "property_value" : 55 // look at one particular scenario only
        },
        {
          "property_name" : "age",
          "operator" : "lte",
          "property_value" : 64 // look at one particular scenario only
        },
        {
          "property_name" : "event",
          "operator" : "eq",
          "property_value" : eventName
        },

     ]
    });

    var count_agegroup_65 = new Keen.Query("count", {
      eventCollection: "email_event",
      timeframe: 
        {
          "start" : startDate,
          "end" : endDate
        },
      filters: [
        {
          "property_name" : "age",
          "operator" : "gte",
          "property_value" : 65 // look at one particular scenario only
        },
        {
          "property_name" : "event",
          "operator" : "eq",
          "property_value" : eventName
        },

     ]
    });




    client.run([count_agegroup_15_24, count_agegroup_25_34, count_agegroup_35_44, count_agegroup_45_54, count_agegroup_55_64, count_agegroup_65], function(response){

        
        // get counts for specific age groups
        var count_15_24 = response[0]['result'];
        var count_25_34 = response[1]['result'];
        var count_35_44 = response[2]['result'];
        var count_45_54 = response[3]['result'];
        var count_55_64 = response[4]['result'];
        var count_65 = response[5]['result'];


        
        var data = [];
        data[0] = {
                label: "15-24",
                data: count_15_24
            }

        data[1] = {
                label: "25-34",
                data: count_25_34
            }

        data[2] = {
                label: "35-44",
                data: count_35_44
            }

        data[3] = {
                label: "45-54",
                data: count_45_54
            }

        data[4] = {
                label: "55-64",
                data: count_55_64
            }

        data[5] = {
                label: "65+",
                data: count_55_64
            }
        

        // hide loader and display chart content
        $(container+'_loading').hide();
        $(container+'_content').show();


        // draw pie chart
        $.plot($(container), data, {
            series: {
                pie: {
                    show: true,
                    radius: 1,
                    label: {
                        show: true,
                        radius: 1,
                        formatter: function (label, series) {
                            return '<div style="font-size:8pt;text-align:center;padding:2px;color:white;">' + label + ' years<br/>' + Math.round(series.percent) + '% </div>';
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


// Process chart for age group
function createAgeCtrChart(container) {


    var count_agegroup_15_24 = new Keen.Query("count", {
      eventCollection: "email_event",
      groupBy: "event",
      timeframe: 
        {
          "start" : startDate,
          "end" : endDate
        },
      filters: [
        {
          "property_name" : "age",
          "operator" : "gte",
          "property_value" : 15 // look at one particular scenario only
        },
        {
          "property_name" : "age",
          "operator" : "lte",
          "property_value" : 24 // look at one particular scenario only
        },

     ]
    });

    var count_agegroup_25_34 = new Keen.Query("count", {
      eventCollection: "email_event",
      groupBy: "event",
      timeframe: 
        {
          "start" : startDate,
          "end" : endDate
        },
      filters: [
        {
          "property_name" : "age",
          "operator" : "gte",
          "property_value" : 25 // look at one particular scenario only
        },
        {
          "property_name" : "age",
          "operator" : "lte",
          "property_value" : 34 // look at one particular scenario only
        },

     ]
    });

    var count_agegroup_35_44 = new Keen.Query("count", {
      eventCollection: "email_event",
      groupBy: "event",
      timeframe: 
        {
          "start" : startDate,
          "end" : endDate
        },
      filters: [
        {
          "property_name" : "age",
          "operator" : "gte",
          "property_value" : 35 // look at one particular scenario only
        },
        {
          "property_name" : "age",
          "operator" : "lte",
          "property_value" : 44 // look at one particular scenario only
        },

     ]
    });

    var count_agegroup_45_54 = new Keen.Query("count", {
      eventCollection: "email_event",
      groupBy: "event",
      timeframe: 
        {
          "start" : startDate,
          "end" : endDate
        },
      filters: [
        {
          "property_name" : "age",
          "operator" : "gte",
          "property_value" : 45 // look at one particular scenario only
        },
        {
          "property_name" : "age",
          "operator" : "lte",
          "property_value" : 54 // look at one particular scenario only
        },

     ]
    });

    var count_agegroup_55_64 = new Keen.Query("count", {
      eventCollection: "email_event",
      groupBy: "event",
      timeframe: 
        {
          "start" : startDate,
          "end" : endDate
        },
      filters: [
        {
          "property_name" : "age",
          "operator" : "gte",
          "property_value" : 55 // look at one particular scenario only
        },
        {
          "property_name" : "age",
          "operator" : "lte",
          "property_value" : 64 // look at one particular scenario only
        },

     ]
    });

    var count_agegroup_65 = new Keen.Query("count", {
      eventCollection: "email_event",
      groupBy: "event",
      timeframe: 
        {
          "start" : startDate,
          "end" : endDate
        },
      filters: [
        {
          "property_name" : "age",
          "operator" : "gte",
          "property_value" : 65 // look at one particular scenario only
        },

     ]
    });




    client.run([count_agegroup_15_24, count_agegroup_25_34, count_agegroup_35_44, count_agegroup_45_54, count_agegroup_55_64, count_agegroup_65], function(response){

        
        // get counts for specific age groups
        var count_15_24 = response[0]['result'];
        var count_25_34 = response[1]['result'];
        var count_35_44 = response[2]['result'];
        var count_45_54 = response[3]['result'];
        var count_55_64 = response[4]['result'];
        var count_65 = response[5]['result'];


        var count_openings_15_24 = 0;
        var count_openings_25_32 = 0;
        var count_openings_35_44 = 0;
        var count_openings_45_54 = 0;
        var count_openings_55_64 = 0;
        var count_openings_65 = 0;



        var count_clicks_15_24 = 0;
        var count_clicks_25_34 = 0;
        var count_clicks_35_44 = 0;
        var count_clicks_45_54 = 0;
        var count_clicks_55_64 = 0;
        var count_clicks_65 = 0;

        var totalOpenings = 0;

        for (var key in count_15_24) {
            var cnt = count_15_24[key]['result'];

            switch(count_15_24[key]['event']) {
                case 'open':
                    count_openings_15_24 = cnt;
                    totalOpenings += cnt;
                    break;
                case 'click':
                    count_clicks_15_24 = cnt;
                    break;
            }
        }

        for (var key in count_25_34) {
            var cnt = count_25_34[key]['result'];

            switch(count_25_34[key]['event']) {
                case 'open':
                    count_openings_25_34 = cnt;
                    totalOpenings += cnt;
                    break;
                case 'click':
                    count_clicks_25_34 = cnt;
                    break;
            }
        }

        for (var key in count_35_44) {
            var cnt = count_35_44[key]['result'];

            switch(count_35_44[key]['event']) {
                case 'open':
                    count_openings_35_44 = cnt;
                    totalOpenings += cnt;
                    break;
                case 'click':
                    count_clicks_35_44 = cnt;
                    break;
            }
        }

        for (var key in count_45_54) {
            var cnt = count_45_54[key]['result'];

            switch(count_45_54[key]['event']) {
                case 'open':
                    count_openings_45_54 = cnt;
                    totalOpenings += cnt;
                    break;
                case 'click':
                    count_clicks_45_54 = cnt;
                    break;
            }
        }

        for (var key in count_55_64) {
            var cnt = count_55_64[key]['result'];

            switch(count_55_64[key]['event']) {
                case 'open':
                    count_openings_55_64 = cnt;
                    totalOpenings += cnt;
                    break;
                case 'click':
                    count_clicks_55_64 = cnt;
                    break;
            }
        }

        for (var key in count_65) {
            var cnt = count_65[key]['result'];

            switch(count_65[key]['event']) {
                case 'open':
                    count_openings_65 = cnt;
                    totalOpenings += cnt;
                    break;
                case 'click':
                    count_clicks_65 = cnt;
                    break;
            }
        }

        
        var openDiff = <?php echo $sendgridStats['opens']?> / totalOpenings;


        var ctr_15_24 = 0;
        var ctr_25_34 = 0;
        var ctr_35_44 = 0;
        var ctr_45_54 = 0;
        var ctr_55_64 = 0;
        var ctr_65 = 0;

        if (count_openings_15_24 > 0) {
            ctr_15_24 = parseFloat(Math.round(((count_clicks_15_24 / (count_openings_15_24 * openDiff)) * 100) * 100) / 100).toFixed(2);
        }

        if (count_openings_25_34 > 0) {
            ctr_25_34 = parseFloat(Math.round(((count_clicks_25_34 / (count_openings_25_34 * openDiff)) * 100) * 100) / 100).toFixed(2);
        }

        if (count_openings_35_44 > 0) {
            ctr_35_44 = parseFloat(Math.round(((count_clicks_35_44 / (count_openings_35_44 * openDiff)) * 100) * 100) / 100).toFixed(2);
        }

        if (count_openings_45_54 > 0) {
            ctr_45_54 = parseFloat(Math.round(((count_clicks_45_54 / (count_openings_45_54 * openDiff)) * 100) * 100) / 100).toFixed(2);
        }

        if (count_openings_55_64 > 0) {
            ctr_55_64 = parseFloat(Math.round(((count_clicks_55_64 / (count_openings_55_64 * openDiff)) * 100) * 100) / 100).toFixed(2);
        }

        if (count_openings_65 > 0) {
            ctr_65 = parseFloat(Math.round(((count_clicks_65 / (count_openings_65 * openDiff)) * 100) * 100) / 100).toFixed(2);
        }
        


        var data = [];

        data.push(["15-24 years", ctr_15_24]);
        data.push(["25-34 years", ctr_25_34]);
        data.push(["35-44 years", ctr_35_44]);
        data.push(["45-54 years", ctr_45_54]);
        data.push(["55-64 years", ctr_55_64]);
        data.push(["65+ years", ctr_65]);

        
        
        

        // hide loader and display chart content
        $(container+'_loading').hide();
        $(container+'_content').show();


        // draw bar chart
        if ($(container).size() != 0) {

            $.plot(container, [ data ], {
                series: {
                    bars: {
                        show: true,
                        barWidth: 0.6,
                        align: "center"
                    },
                    color: ['#BAD9F5']
                },
                xaxis: {
                    mode: "categories",
                    tickLength: 0
                },
                grid: {
                    hoverable: true,
                    clickable: true,
                    tickColor: "#BAD9F5",
                    borderColor: "#BAD9F5",
                    borderWidth: 0
                }
            });

            var previousPoint = null;
            $(container).bind("plothover", function (event, pos, item) {
                $("#x").text(pos.x.toFixed(2));
                $("#y").text(pos.y.toFixed(2));
                if (item) {
                    if (previousPoint != item.dataIndex) {
                        previousPoint = item.dataIndex;

                        $("#tooltip").remove();
                        var x = item.datapoint[0].toFixed(2),
                            y = item.datapoint[1].toFixed(2);

                        showChartTooltip(item.pageX, item.pageY, item.datapoint[0], item.datapoint[1] + ' % CTR');
                    }
                } else {
                    $("#tooltip").remove();
                    previousPoint = null;
                }
            });


         }

    });
}




// Process list of top pageviews for a specific gender
function createGenderClicksTable(gender) {

    var urls = [];
    var containerId = '#url_clicks_' + gender; 
    $('#url_clicks_'+gender+'_container').show();


    var count_total = new Keen.Query("count", {
      eventCollection: "email_event",
      timeframe: 
        {
          "start" : startDate,
          "end" : endDate
        },
      filters: [
        {
          "property_name" : "gender",
          "operator" : "eq",
          "property_value" : gender // look at one particular scenario only
        },
        {
          "property_name" : "event",
          "operator" : "eq",
          "property_value" : "click" // look at one particular scenario only
        },

     ]
    });

    var count_url = new Keen.Query("count", {
      eventCollection: "email_event",
      timeframe: 
        {
          "start" : startDate,
          "end" : endDate
        },
      groupBy: ["url", "title"],
      filters: [
        {
          "property_name" : "gender",
          "operator" : "eq",
          "property_value" : gender // look at one particular scenario only
        },
        {
          "property_name" : "event",
          "operator" : "eq",
          "property_value" : "click" // look at one particular scenario only
        },

     ]
    });

    

    client.run([count_total, count_url], function(response){

        // get total clicks for specific gender
        var totalClicks = response[0]['result'];

        // get clicks grouped by url for specific gender
        var result = response[1]['result'];
        
        
        for (var key in result) {
            var cnt = result[key]['result'];
            var url = result[key]['url'];
            var title = result[key]['title'];
            if (url != null)
                urls.push({label: url, data: cnt, url_title: title});
        }

        
        function compare(a,b) {
          if (a.data < b.data)
             return 1;
          if (a.data > b.data)
            return -1;
          return 0;
        }

        // sort from high to low
        urls.sort(compare);

        // populate top list
        for (var i=0; (i < 10 && i < urls.length); i++) {
            var url = urls[i]['label'];
            var clicks = urls[i]['data'];
            var title = urls[i]['url_title'];
            var rank = i+1;
            var share = (clicks * 100/ totalClicks).toFixed(2);

            $(containerId).append("<tr><td>" + rank + "</td><td><a target='blank' href='" + url + "'>" + title  + "</a></td><td>" + clicks + "</td><td>" + share + "%</td></tr>");

           
        }

        
        // hide loader and display chart content
        $(containerId + '_loading').hide();
        $(containerId + '_content').show();

    });

}



function createAgeGroupClicksTables() {
                
  createAgeGroupClicksTable(15, 24, "#clicks_15-24");
  createAgeGroupClicksTable(25, 34, "#clicks_25-34");
  createAgeGroupClicksTable(35, 44, "#clicks_35-44");
  createAgeGroupClicksTable(45, 54, "#clicks_45-54");
  createAgeGroupClicksTable(55, 64, "#clicks_55-64");
  createAgeGroupClicksTable(65, 120, "#clicks_64");


  
}


// Process list of top clicks for age groups
function createAgeGroupClicksTable(startAge, endAge, chartElement) {


    $('#url_clicks_age_container').show();

    var urls = [];


    var count_total = new Keen.Query("count", {
      eventCollection: "email_event",
      timeframe: 
        {
          "start" : startDate,
          "end" : endDate
        },
      filters: [
        {
          "property_name" : "age",
          "operator" : "gte",
          "property_value" : startAge // look at one particular scenario only
        },
        {
          "property_name" : "age",
          "operator" : "lte",
          "property_value" : endAge // look at one particular scenario only
        },
        {
          "property_name" : "event",
          "operator" : "lte",
          "property_value" : "click" // look at one particular scenario only
        },

     ]
    });

    var count_url = new Keen.Query("count", {
      eventCollection: "email_event",
      timeframe: 
        {
          "start" : startDate,
          "end" : endDate
        },
      groupBy: ["url","title"],
      filters: [
        {
          "property_name" : "age",
          "operator" : "gte",
          "property_value" : startAge // look at one particular scenario only
        },
        {
          "property_name" : "age",
          "operator" : "lte",
          "property_value" : endAge // look at one particular scenario only
        },
        {
          "property_name" : "event",
          "operator" : "lte",
          "property_value" : "click" // look at one particular scenario only
        },

     ]
    });

    

    client.run([count_total, count_url], function(response){

        // get total clicks for specific age group
        var totalClicks = response[0]['result'];

        // get clicks grouped by url for specific age group
        var result = response[1]['result'];

        
        
        for (var key in result) {
            var cnt = result[key]['result'];
            var url = result[key]['url'];
            var title = result[key]['title'];
            if (url != null)
                urls.push({label: url, data: cnt, url_title: title});
        }

        

        
        function compare(a,b) {
          if (a.data < b.data)
             return 1;
          if (a.data > b.data)
            return -1;
          return 0;
        }

        // sort from high to low
        urls.sort(compare);
   

        // populate top list
        for (var i=0; (i < 10 && i < urls.length); i++) {

            var url = urls[i]['label'];
            var clicks = urls[i]['data'];
            var title = urls[i]['url_title'];
            var rank = i+1;
            var share = (clicks * 100/ totalClicks).toFixed(2);

            $(chartElement).append("<tr><td>" + rank + "</td><td><a target='blank' href='" + url + "'>" + title  + "</a></td><td>" + clicks + "</td><td>" + share + "%</td></tr>");

        }

        // hide loader and display chart content
        $('#url_clicks_age_loading').hide();
        $('#url_clicks_age_content').show();

    });


  
}





function percentageFormatter(val) {
    return val + "%"; 
}



function getWeekDay(day) {
    var daysOfWeek = new Array('Sunday', 'Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday');
    return daysOfWeek[day];
}





</script>



<script>
jQuery(document).ready(function() { 

Charts.initCharts();
Charts.initPieCharts(); 

});
</script>







