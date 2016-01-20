



<div class="row">
	<div class="col-md-6">
		<div class="portlet solid bordered grey-cararra">
			<div class="portlet-title">
				<div class="caption">
					<i class="fa fa-pie-chart"></i>Signups per gender
				</div>
			</div>
			<div class="portlet-body">

                <div id="pie_chart_signups_loading">
                    <img src="/assets/admin/layout/img/loading.gif" alt="loading"/>
                </div>
                <div id="pie_chart_signups_content" class="display-none">
                    <h4></h4>
                    <div id="pie_chart_signups" class="chart">
                    </div>
                </div>
           
			</div>
		</div>
		
	</div>
    <div class="col-md-6 display-none" id="pie_chart_pageviews_container">
        <div class="portlet solid bordered grey-cararra">
            <div class="portlet-title">
                <div class="caption">
                    <i class="fa fa-pie-chart"></i>Pageviews per gender
                </div>
            </div>
            <div class="portlet-body">

                <div id="pie_chart_pageviews_loading">
                    <img src="/assets/admin/layout/img/loading.gif" alt="loading"/>
                </div>
                <div id="pie_chart_pageviews_content" class="display-none">
                    <h4></h4>
                    <div id="pie_chart_pageviews" class="chart">
                    </div>
                </div>
   
            </div>
        </div>
        
    </div>
</div>


<div class="row">
    <div class="col-md-12 display-none" id="pageviews_period_container">

        <div class="portlet solid bordered grey-cararra">
            <div class="portlet-title">
                <div class="caption">
                    <i class="fa fa-table"></i><span id="pageviews_period_title">Hourly pageviews per gender</span>
                </div>

            </div>

            <div class="portlet-body">

                <div id="pageviews_period_loading">
                    <img src="/assets/admin/layout/img/loading.gif" alt="loading"/>
                </div>
                <div id="pageviews_period_content" class="display-none">

                    <div class="btn-group" data-toggle="buttons">
                      <label class="btn grey-steel btn-sm active">
                      <input type="radio" name="options_period" class="toggle" id="pageviews_period_hourly">Hourly</label>
                      <label class="btn grey-steel btn-sm">
                      <input type="radio" name="options_period" class="toggle" id="pageviews_period_daily">Daily</label>
                    </div>
                    <div class="btn-group pull-right"  data-toggle="buttons">
                      <label class="btn grey-steel btn-sm active">
                      <input type="radio" name="options_pageviews" class="toggle" id="pageviews_period_absolute">Absolute pageviews</label>
                      <label class="btn grey-steel btn-sm">
                      <input type="radio" name="options_pageviews" class="toggle" id="pageviews_period_relative">Relative pageviews</label>
                    </div>

                    <div id="pageviews_period" style="height:350px;margin-top:10px">
                    </div>
                </div>

                
            </div>
        </div>
        
    </div>

</div>



<div class="row">
    <div class="col-md-6 display-none" id="pageviews_female_container">

        <div class="portlet solid bordered grey-cararra">
            <div class="portlet-title">
                <div class="caption">
                    <i class="fa fa-table"></i>Most popular pages by females
                </div>
            </div>
            <div class="portlet-body">

                <div id="pageviews_female_loading">
                    <img src="/assets/admin/layout/img/loading.gif" alt="loading"/>
                </div>
                <div id="pageviews_female_content" class="display-none">
                  <div class="scroller" style="height: 350px;" data-always-visible="1" data-rail-visible="0">

                    <div class="table-scrollable">
                        <table class="table table-striped table-hover" id="pageviews_female">
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
    <div class="col-md-6 display-none" id="pageviews_male_container">

        <div class="portlet solid bordered grey-cararra">
            <div class="portlet-title">
                <div class="caption">
                    <i class="fa fa-table"></i>Most popular pages by males
                </div>
            </div>
            <div class="portlet-body">
              <div id="pageviews_male_loading">
                    <img src="/assets/admin/layout/img/loading.gif" alt="loading"/>
                </div>
                <div id="pageviews_male_content" class="display-none">
                  <div class="scroller" style="height: 350px;" data-always-visible="1" data-rail-visible="0">
                    <div class="table-scrollable">
                        <table class="table table-striped table-hover" id="pageviews_male">
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






<script>




// define reporting date range based on daterate dropdown
var startDate = "<?php echo  date('c', $startdate) ?>";
var endDate = "<?php echo  date('c', $enddate) ?>";  




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

                createGenderSignupsChart();
                createGenderPageviewsChart();
                createPeriodPageviewsChart('hourly', 'absolute');
                createPageviewGenderChart('female');
                createPageviewGenderChart('male');
                
            


                
                
            });


        },



        initPieCharts: function () {


        }
        
    };

}();




// Process chart for genders
function createGenderSignupsChart() {


    <?php 
    // define keen event and properties based on script version
    if (Yii::app()->user->scriptVersion == 1) {
      $eventName = "USERS";
      $groupBy = "userdb.gender";
    } else {
      $eventName = "signup_completed";
      $groupBy = "user.gender";
    }
    ?>

    var count_signups_gender = new Keen.Query("count", {
      eventCollection: "<?php echo $eventName; ?>",
      groupBy: "<?php echo $groupBy; ?>",
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

            switch(result[key]['<?php echo $groupBy; ?>']) {
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
        $('#pie_chart_signups_loading').hide();
        $('#pie_chart_signups_content').show();


        // draw pie chart
        $.plot($("#pie_chart_signups"), data, {
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




// Process chart for genders
function createGenderPageviewsChart() {

    <?php 
    // define keen event and properties based on script version
    if (Yii::app()->user->scriptVersion == 1) {
      $groupBy = "userdb.gender";
    } else {
      $groupBy = "gender";
    }
    ?>

    $('#pie_chart_pageviews_container').show();

    var count_signups_gender = new Keen.Query("count", {
      eventCollection: "PAGE_USERS_VIEWS",
      groupBy: "<?php echo $groupBy; ?>",
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

            switch(result[key]['<?php echo $groupBy; ?>']) {
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
        $('#pie_chart_pageviews_loading').hide();
        $('#pie_chart_pageviews_content').show();


        // draw pie chart
        $.plot($("#pie_chart_pageviews"), data, {
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



// Process list of top pageviews for a specific gender
function createPageviewGenderChart(gender) {

    var urls = [];
    var containerId = '#pageviews_' + gender; 
    $('#pageviews_'+gender+'_container').show();

    <?php 
    // define keen event and properties based on script version
    if (Yii::app()->user->scriptVersion == 1) {
    ?>

    

    var count_pageviews_total = new Keen.Query("count", {
      eventCollection: "PAGE_USERS_VIEWS",
      timeframe: 
        {
          "start" : startDate,
          "end" : endDate
        },
      filters: [
        {
          "property_name" : "userdb.gender",
          "operator" : "eq",
          "property_value" : gender // look at one particular scenario only
        },

     ]
    });

    var count_pageviews = new Keen.Query("count", {
      eventCollection: "PAGE_USERS_VIEWS",
      timeframe: 
        {
          "start" : startDate,
          "end" : endDate
        },
      groupBy: "userkeen.base_url",
      filters: [
        {
          "property_name" : "userdb.gender",
          "operator" : "eq",
          "property_value" : gender // look at one particular scenario only
        },

     ]
    });

    

    client.run([count_pageviews_total, count_pageviews], function(response){

        // get total pageviews for specific gender
        var totalPageviews = response[0]['result'];

        // get pageviews grouped by url for specific gender
        var result = response[1]['result'];
        
        
        for (var key in result) {
            var cnt = result[key]['result'];
            var url = result[key]['userkeen.base_url'];
            if (url != null)
                urls.push({label: url, data: cnt});
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
        for (var i=0; i < 20; i++) {
            var url = urls[i]['label'];
            var pageviews = urls[i]['data'];
            var rank = i+1;
            var share = (pageviews * 100/ totalPageviews).toFixed(2);

        
            var articleId = url.substring(url.lastIndexOf('/')+1, url.length);

            // only call article api if url has a valid article identifier
            if (!isNaN(parseFloat(articleId)) && isFinite(articleId)) {
              jQuery.ajax({
                  url: "http://54.77.203.52:4000/item?id=" + articleId,
                  type: "GET",
                  context:{rank:rank, url: url, pageviews: pageviews, share: share}, // pass along url parameters

                  contentType: 'application/json; charset=utf-8',
                  success: function(resultData) {

                        // print url with title if api returns one
                        if (resultData['errorCode'] == 0) {
                          $(containerId).append("<tr><td>" + this.rank + "</td><td><a target='blank' href='" + this.url + "'>" + resultData['title']  + "</a></td><td>" + this.pageviews + "</td><td>" + this.share + "%</td></tr>");
                        } else {
                          $(containerId).append("<tr><td>" + this.rank + "</td><td><a target='blank' href='" + this.url + "'>" + this.url + "</a></td><td>" + this.pageviews + "</td><td>" + this.share + "%</td></tr>");
                        }
                        
                  },
                  error : function(jqXHR, textStatus, errorThrown) {
                     // print url without title if api fails
                      $(containerId).append("<tr><td>" + this.rank + "</td><td><a target='blank' href='" + this.url + "'>" + this.url + "</a></td><td>" + this.pageviews + "</td><td>" + this.share + "%</td></tr>");
                  },
                  async:   false,

                  timeout: 500000,
              });
            } else {
                // print url without title if article identifier is not available
                $(containerId).append("<tr><td>" + rank + "</td><td><a target='blank' href='" + url + "'>" + url + "</a></td><td>" + pageviews + "</td><td>" + share + "%</td></tr>");
            }
           
        }

        
        // hide loader and display chart content
        $(containerId + '_loading').hide();
        $(containerId + '_content').show();

    });



    <?php 
    // newest script version
    } else {
    ?>


    var count_pageviews_total = new Keen.Query("count", {
      eventCollection: "PAGE_USERS_VIEWS",
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

     ]
    });

    var count_pageviews = new Keen.Query("count", {
      eventCollection: "PAGE_USERS_VIEWS",
      timeframe: 
        {
          "start" : startDate,
          "end" : endDate
        },
      groupBy: ["base_url", "title"],
      filters: [
        {
          "property_name" : "gender",
          "operator" : "eq",
          "property_value" : gender // look at one particular scenario only
        },

     ]
    });

    

    client.run([count_pageviews_total, count_pageviews], function(response){

        // get total pageviews for specific gender
        var totalPageviews = response[0]['result'];

        // get pageviews grouped by url for specific gender
        var result = response[1]['result'];
        
        
        for (var key in result) {
            var cnt = result[key]['result'];
            var url = result[key]['base_url'];
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
        for (var i=0; (i < 20 && i < urls.length); i++) {
            var url = urls[i]['label'];
            var pageviews = urls[i]['data'];
            var title = urls[i]['url_title'];
            var rank = i+1;
            var share = (pageviews * 100/ totalPageviews).toFixed(2);

            $(containerId).append("<tr><td>" + rank + "</td><td><a target='blank' href='" + url + "'>" + title  + "</a></td><td>" + pageviews + "</td><td>" + share + "%</td></tr>");

           
        }

        
        // hide loader and display chart content
        $(containerId + '_loading').hide();
        $(containerId + '_content').show();

    });


    <?php 
    }
    ?>
}






// Process chart for hourly or daily pageviews
function createPeriodPageviewsChart(period, mode) {

    <?php 
    // define keen event and properties based on script version
    if (Yii::app()->user->scriptVersion == 1) {
      $propertyName = "userdb.gender";
    } else {
      $propertyName = "gender";
    }
    ?>

    $('#pageviews_period_container').show();


    if (period == 'hourly') {
      periodTicks = 24;
      keenInterval = 'hourly';
      graphTitle = "Hourly pageviews per gender";
    } else {
      periodTicks = 7;
      keenInterval = 'daily';
      graphTitle = "Daily pageviews per gender";
    }

    $('#pageviews_period_title').text(graphTitle);

    // used for graph
    var pageviews_male = [];
    var pageviews_female = [];

    // create arrays for all 24 hours with a default value of 0
    var pageviews_period_male = Array.apply(null, new Array(periodTicks)).map(Number.prototype.valueOf,0);
    var pageviews_period_female = Array.apply(null, new Array(periodTicks)).map(Number.prototype.valueOf,0);


    var count_pageviews_male = new Keen.Query("count", {
      eventCollection: "PAGE_USERS_VIEWS",
      interval: keenInterval,
      timeframe: 
        {
          "start" : startDate,
          "end" : endDate
        }
      ,
      filters: [
        {
          "property_name" : "<?php echo $propertyName; ?>",
          "operator" : "eq",
          "property_value" : "male" // look at one particular scenario only
        }

        ]
      });

    var count_pageviews_female = new Keen.Query("count", {
      eventCollection: "PAGE_USERS_VIEWS",
      interval: keenInterval,
      timeframe: 
        {
          "start" : startDate,
          "end" : endDate
        }
      ,
      filters: [
        {
          "property_name" : "<?php echo $propertyName; ?>",
          "operator" : "eq",
          "property_value" : "female" // look at one particular scenario only
        }

        ]
      });

    client.run([count_pageviews_male, count_pageviews_female], function(response){

       
         // get pageviews for each gender
        var result_pageviews_male = response[0]['result'];
        var result_pageviews_female = response[1]['result'];
        

        // loop through each day and increment value
        for (var key in result_pageviews_male) {
            var cnt = result_pageviews_male[key]['value'];
            var timeframe = result_pageviews_male[key]['timeframe'];
            
            // get start date and adjust timezone with moment.js
            var timeframeOffset = moment.utc(timeframe['start']).zone("<?php echo $timezoneOffset; ?>");

            // create new date object
            var date = new Date(timeframeOffset.years(), timeframeOffset.months(), timeframeOffset.dates(), timeframeOffset.hours(), timeframeOffset.minutes(), 0, 0);

            if (period == 'hourly') {
              pageviews_period_male[date.getHours()] += cnt;
            } else {
              pageviews_period_male[date.getDay()] += cnt;
            }
        }

        // loop through each day and increment value
        for (var key in result_pageviews_female) {
            var cnt = result_pageviews_female[key]['value'];
            var timeframe = result_pageviews_female[key]['timeframe'];
            
            // get start date and adjust timezone with moment.js
            var timeframeOffset = moment.utc(timeframe['start']).zone("<?php echo $timezoneOffset; ?>");

            // create new date object
            var date = new Date(timeframeOffset.years(), timeframeOffset.months(), timeframeOffset.dates(), timeframeOffset.hours(), timeframeOffset.minutes(), 0, 0);
            
            if (period == 'hourly') {
              pageviews_period_female[date.getHours()] += cnt;
            } else {
              pageviews_period_female[date.getDay()] += cnt;
            }

        }

        // loop through each hour and populate graph array
        if (mode == 'absolute') {
          for (var i in pageviews_period_male) {
              pageviews_male.push(new Array(i, pageviews_period_male[i]));
              pageviews_female.push(new Array(i, pageviews_period_female[i]));
          }
        } else {
          for (var i in pageviews_period_male) {
              pageviews_male.push(new Array(i, (pageviews_period_male[i]*100)/(pageviews_period_male[i]+pageviews_period_female[i])));
              pageviews_female.push(new Array(i, (pageviews_period_female[i]*100)/(pageviews_period_male[i]+pageviews_period_female[i])));
          }
        }
        
        




        // draw unsubscribers graph
        if ($('#pageviews_period').size() != 0) {

            $('#pageviews_period_loading').hide();
            $('#pageviews_period_content').show();



            var stack = (mode=='relative'),
                    bars = false,
                    lines = true,
                    steps = false;

            var maxYValue = 100;

            if (mode != 'relative')
              maxYValue = null;

            $.plot($("#pageviews_period"), 

                [{
                    label: "Male",
                    data: pageviews_male,
                    lines: {
                        lineWidth: 1,
                    },
                    shadowSize: 0
                }, {
                    label: "Female",
                    data: pageviews_female,
                    lines: {
                        lineWidth: 1,
                    },
                    shadowSize: 0
                }]

                , {
                    series: {
                        stack: stack,
                        lines: {
                            show: lines,
                            fill: true,
                            steps: steps,
                            lineWidth: 0, // in pixels
                        },
                        bars: {
                            show: bars,
                            barWidth: 0.5,
                            lineWidth: 0, // in pixels
                            shadowSize: 0,
                            align: 'center'
                        }
                    },
                    grid: {
                        tickColor: "#eee",
                        borderColor: "#eee",
                        borderWidth: 1
                    },
                    xaxis: {
                        ticks: 24,
                        tickDecimals: 0,
                        tickColor: "#eee",
                        tickFormatter: periodXFormatter,
                    },
                    yaxis: {
                        tickFormatter: periodYFormatter,
                        max: maxYValue,
                    },

                    
                }                       
            );

         }

    });

    function periodXFormatter(val, axis) {
      if (period == 'hourly') {
        return val; 
      } else {
        return getWeekDay(val); 
      }
    }

    function periodYFormatter(val, axis) {
      if (mode == 'absolute') {
        return val; 
      } else {
        return percentageFormatter(val); 
      }
    }
}


function percentageFormatter(val) {
    return val + "%"; 
}



function getWeekDay(day) {
    var daysOfWeek = new Array('Sunday', 'Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday');
    return daysOfWeek[day];
}




$('body').on('change','input:radio[name="options_period"]',function(){
    refreshPageviewPeriodGraph();
});

$('body').on('change','input:radio[name="options_pageviews"]',function(){
    refreshPageviewPeriodGraph();
});

function refreshPageviewPeriodGraph() {
    mode = $('#pageviews_period_relative').is(':checked')?'relative':'absolute';
    period = $('#pageviews_period_daily').is(':checked')?'daily':'hourly';

    $('#pageviews_period_loading').show();
    $('#pageviews_period_content').hide();
    createPeriodPageviewsChart(period, mode);
}

</script>



<script>
jQuery(document).ready(function() { 

Charts.initCharts();
Charts.initPieCharts(); 

});
</script>








