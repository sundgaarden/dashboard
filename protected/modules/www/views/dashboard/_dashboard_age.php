

<div class="row">
    <div class="col-md-12">
        <div class="portlet solid bordered grey-cararra">
            <div class="portlet-title">
                <div class="caption">
                    <i class="fa fa-area-chart"></i>Signups per age
                </div>
            </div>
            <div class="portlet-body">
                <div id="bar_chart_age_loading">
                    <img src="/assets/admin/layout/img/loading.gif" alt="loading"/>
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
    <div class="col-md-12 display-none" id="pageviews_period_container">

        <div class="portlet solid bordered grey-cararra">
            <div class="portlet-title">
                <div class="caption">
                    <i class="fa fa-table"></i><span id="pageviews_period_title">Hourly pageviews per age group</span>
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
    <div class="col-md-12 display-none" id="pageviews_age_container">

        <div class="portlet solid bordered grey-cararra">
            <div class="portlet-title">
                <div class="caption">
                    <i class="fa fa-bar-chart-o"></i>Most popular pages per age group
                </div>
            </div>

            <div class="portlet-body">

              <div id="pageviews_age_loading">
                    <img src="/assets/admin/layout/img/loading.gif" alt="loading" />
                </div>
                <div  id="pageviews_age_content" class="display-none">
               
                    <div class="tabbable tabbable-custom">
                        <ul class="nav nav-tabs">
                            
                            
                            <li class="active">
                                <a href="#pageviews_tab_15-24" data-toggle="tab">
                                15-24 </a>
                            </li>
                            <li>
                                <a href="#pageviews_tab_25-34" data-toggle="tab">
                                25-34 </a>
                            </li>
                            <li>
                                <a href="#pageviews_tab_35-44" data-toggle="tab">
                                35-44 </a>
                            </li>
                            <li>
                                <a href="#pageviews_tab_45-54" data-toggle="tab">
                                45-54 </a>
                            </li>
                            <li>
                                <a href="#pageviews_tab_55-64" data-toggle="tab">
                                55-64 </a>
                            </li>
                            <li>
                                <a href="#pageviews_tab_64" data-toggle="tab">
                                64+ </a>
                            </li>
                        </ul>
                        <div class="tab-content">

                            <div class="tab-pane active" id="pageviews_tab_15-24">
                                <div class="table-scrollable">
                                  <table class="table table-striped table-hover" id="pageviews_15-24">
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
                            <div class="tab-pane" id="pageviews_tab_25-34">
                                <div class="table-scrollable">
                                  <table class="table table-striped table-hover" id="pageviews_25-34">
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
                            <div class="tab-pane" id="pageviews_tab_35-44">
                                <div class="table-scrollable">
                                  <table class="table table-striped table-hover" id="pageviews_35-44">
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
                            <div class="tab-pane" id="pageviews_tab_45-54">
                                <div class="table-scrollable">
                                  <table class="table table-striped table-hover" id="pageviews_45-54">
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
                            <div class="tab-pane" id="pageviews_tab_55-64">
                                <div class="table-scrollable">
                                  <table class="table table-striped table-hover" id="pageviews_55-64">
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
                            <div class="tab-pane" id="pageviews_tab_64">
                                <div class="table-scrollable">
                                  <table class="table table-striped table-hover" id="pageviews_64">
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



<div class="row">
    <div class="col-md-12 display-none" id="referrers_age_container">

        <div class="portlet solid bordered grey-cararra">
            <div class="portlet-title">
                <div class="caption">
                    <i class="fa fa-bar-chart-o"></i>Top referrers per age group
                </div>
            </div>

            <div class="portlet-body">

                <div id="referrers_age_loading">
                    <img src="/assets/admin/layout/img/loading.gif" alt="loading" />
                </div>
                <div  id="referrers_age_content" class="display-none">
                    <div class="tabbable tabbable-custom">
                        <ul class="nav nav-tabs">
                            
                            
                            <li class="active">
                                <a href="#referrers_tab_15-24" data-toggle="tab">
                                15-24 </a>
                            </li>
                            <li>
                                <a href="#referrers_tab_25-34" data-toggle="tab">
                                25-34 </a>
                            </li>
                            <li>
                                <a href="#referrers_tab_35-44" data-toggle="tab">
                                35-44 </a>
                            </li>
                            <li>
                                <a href="#referrers_tab_45-54" data-toggle="tab">
                                45-54 </a>
                            </li>
                            <li>
                                <a href="#referrers_tab_55-64" data-toggle="tab">
                                55-64 </a>
                            </li>
                            <li>
                                <a href="#referrers_tab_64" data-toggle="tab">
                                64+ </a>
                            </li>
                         
                        </ul>
                        <div class="tab-content">
                            <div class="tab-pane active" id="referrers_tab_15-24">
                                <div class="table-scrollable">
                                  <table class="table table-striped table-hover" id="referrers_15-24">
                                  <thead>
                                  <tr>
                                      <th>
                                           #
                                      </th>
                                      <th>
                                           Referrer page
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
                            <div class="tab-pane" id="referrers_tab_25-34">
                                <div class="table-scrollable">
                                  <table class="table table-striped table-hover" id="referrers_25-34">
                                  <thead>
                                  <tr>
                                      <th>
                                           #
                                      </th>
                                      <th>
                                           Referrer page
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
                            <div class="tab-pane" id="referrers_tab_35-44">
                                <div class="table-scrollable">
                                  <table class="table table-striped table-hover" id="referrers_35-44">
                                  <thead>
                                  <tr>
                                      <th>
                                           #
                                      </th>
                                      <th>
                                           Referrer page
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
                            <div class="tab-pane" id="referrers_tab_45-54">
                                <div class="table-scrollable">
                                  <table class="table table-striped table-hover" id="referrers_45-54">
                                  <thead>
                                  <tr>
                                      <th>
                                           #
                                      </th>
                                      <th>
                                           Referrer page
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
                            <div class="tab-pane" id="referrers_tab_55-64">
                                <div class="table-scrollable">
                                  <table class="table table-striped table-hover" id="referrers_55-64">
                                  <thead>
                                  <tr>
                                      <th>
                                           #
                                      </th>
                                      <th>
                                           Referrer page
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
                            <div class="tab-pane" id="referrers_tab_64">
                                <div class="table-scrollable">
                                  <table class="table table-striped table-hover" id="referrers_64">
                                  <thead>
                                  <tr>
                                      <th>
                                           #
                                      </th>
                                      <th>
                                           Referrer page
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



              
                createAgeChart();
                createPeriodPageviewsChart('hourly', 'absolute');
                createPageviewAgeGroupCharts();
                
                
  
                <?php 
                // check whether to display referrer graph based on script version

                if (Yii::app()->user->scriptVersion == 1) { ?>
                createReferrerAgeChart(15, 24, "#referrers_15-24");
                createReferrerAgeChart(25, 34, "#referrers_25-34");
                createReferrerAgeChart(35, 44, "#referrers_35-44");
                createReferrerAgeChart(45, 54, "#referrers_45-54");
                createReferrerAgeChart(55, 64, "#referrers_55-64");
                createReferrerAgeChart(65, 120, "#referrers_64");
                <?php } ?>

                
            
                
        
                
            });


        },



        initPieCharts: function () {



        }
        
    };

}();



// Process chart for age
function createAgeChart() {

    <?php 
    // define keen event and properties based on script version
    if (Yii::app()->user->scriptVersion == 1) {
      $eventName = "USERS";
      $groupBy = "userdb.age";
    } else {
      $eventName = "signup_completed";
      $groupBy = "user.age";
    }
    ?>

    var ages = [];

    var count_signups_age = new Keen.Query("count", {
      eventCollection: "<?php echo $eventName; ?>",
      groupBy: "<?php echo $groupBy; ?>",
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
            var age = result[key]['<?php echo $groupBy; ?>']
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


function createPageviewAgeGroupCharts() {
                
  createPageviewAgeChart(15, 24, "#pageviews_15-24");
  createPageviewAgeChart(25, 34, "#pageviews_25-34");
  createPageviewAgeChart(35, 44, "#pageviews_35-44");
  createPageviewAgeChart(45, 54, "#pageviews_45-54");
  createPageviewAgeChart(55, 64, "#pageviews_55-64");
  createPageviewAgeChart(65, 120, "#pageviews_64");


  
}


// Process list of top pageviews for age groups
function createPageviewAgeChart(startAge, endAge, chartElement) {


    $('#pageviews_age_container').show();

    var urls = [];

    <?php 
    // define keen event and properties based on script version
    if (Yii::app()->user->scriptVersion == 1) {
    ?>

    var count_pageviews_agegroup_total = new Keen.Query("count", {
      eventCollection: "PAGE_USERS_VIEWS",
      timeframe: 
        {
          "start" : startDate,
          "end" : endDate
        },
      filters: [
        {
          "property_name" : "userdb.age",
          "operator" : "gte",
          "property_value" : startAge // look at one particular scenario only
        },
        {
          "property_name" : "userdb.age",
          "operator" : "lte",
          "property_value" : endAge // look at one particular scenario only
        },

     ]
    });

    var count_pageviews_agegroup = new Keen.Query("count", {
      eventCollection: "PAGE_USERS_VIEWS",
      timeframe: 
        {
          "start" : startDate,
          "end" : endDate
        },
      groupBy: "userkeen.base_url",
      filters: [
        {
          "property_name" : "userdb.age",
          "operator" : "gte",
          "property_value" : startAge // look at one particular scenario only
        },
        {
          "property_name" : "userdb.age",
          "operator" : "lte",
          "property_value" : endAge // look at one particular scenario only
        },

     ]
    });

    

    client.run([count_pageviews_agegroup_total, count_pageviews_agegroup], function(response){

        // get total pageviews for specific age group
        var totalPageviews = response[0]['result'];

        // get pageviews grouped by url for specific age group
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
        for (var i=0; i < 10; i++) {
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
                          $(chartElement).append("<tr><td>" + this.rank + "</td><td><a target='blank' href='" + this.url + "'>" + resultData['title']  + "</a></td><td>" + this.pageviews + "</td><td>" + this.share + "%</td></tr>");
                        } else {
                          $(chartElement).append("<tr><td>" + this.rank + "</td><td><a target='blank' href='" + this.url + "'>" + this.url + "</a></td><td>" + this.pageviews + "</td><td>" + this.share + "%</td></tr>");
                        }
                        
                  },
                  error : function(jqXHR, textStatus, errorThrown) {
                     // print url without title if api fails
                      $(chartElement).append("<tr><td>" + this.rank + "</td><td><a target='blank' href='" + this.url + "'>" + this.url + "</a></td><td>" + this.pageviews + "</td><td>" + this.share + "%</td></tr>");
                  },
                  async:   false,

                  timeout: 500000,
              });
            } else {
                // print url without title if article identifier is not available
                $(chartElement).append("<tr><td>" + rank + "</td><td><a target='blank' href='" + url + "'>" + url + "</a></td><td>" + pageviews + "</td><td>" + share + "%</td></tr>");
            }
        }

        // hide loader and display chart content
        $('#pageviews_age_loading').hide();
        $('#pageviews_age_content').show();

    });

    <?php 
    // newest script version
    } else {
    ?>


    var count_pageviews_agegroup_total = new Keen.Query("count", {
      eventCollection: "PAGE_USERS_VIEWS",
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

     ]
    });

    var count_pageviews_agegroup = new Keen.Query("count", {
      eventCollection: "PAGE_USERS_VIEWS",
      timeframe: 
        {
          "start" : startDate,
          "end" : endDate
        },
      groupBy: ["base_url","title"],
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

     ]
    });

    

    client.run([count_pageviews_agegroup_total, count_pageviews_agegroup], function(response){

        // get total pageviews for specific age group
        var totalPageviews = response[0]['result'];

        // get pageviews grouped by url for specific age group
        var result = response[1]['result'];

        
        
        for (var key in result) {
            var cnt = result[key]['result'];
            var url = result[key]['base_url'];
            var title = result[key]['title'];
            if (url != null)
                urls.push({label: url, data: cnt, url_title: title});
        }

        //alert(urls.length);

        
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
            var pageviews = urls[i]['data'];
            var title = urls[i]['url_title'];
            var rank = i+1;
            var share = (pageviews * 100/ totalPageviews).toFixed(2);

            $(chartElement).append("<tr><td>" + rank + "</td><td><a target='blank' href='" + url + "'>" + title  + "</a></td><td>" + pageviews + "</td><td>" + share + "%</td></tr>");

        }

        // hide loader and display chart content
        $('#pageviews_age_loading').hide();
        $('#pageviews_age_content').show();

    });


    <?php 
    }
    ?>

  
}




// Process list of top referrer for agegroup
function createReferrerAgeChart(startAge, endAge, chartElement) {

    $('#referrers_age_container').show();


    var urls = [];

    var count_referrer_agegroup_total = new Keen.Query("count", {
      eventCollection: "PAGE_USERS_VIEWS",
      timeframe: 
        {
          "start" : startDate,
          "end" : endDate
        },
      filters: [
        {
          "property_name" : "userdb.age",
          "operator" : "gte",
          "property_value" : startAge // look at one particular scenario only
        },
        {
          "property_name" : "userdb.age",
          "operator" : "lte",
          "property_value" : endAge // look at one particular scenario only
        },

     ]
    });

    var count_referrer_agegroup = new Keen.Query("count", {
      eventCollection: "PAGE_USERS_VIEWS",
      timeframe: 
        {
          "start" : startDate,
          "end" : endDate
        },
      groupBy: "userkeen.referrer",
      filters: [
        {
          "property_name" : "userdb.age",
          "operator" : "gte",
          "property_value" : startAge // look at one particular scenario only
        },
        {
          "property_name" : "userdb.age",
          "operator" : "lte",
          "property_value" : endAge // look at one particular scenario only
        },

     ]
    });

    

    client.run([count_referrer_agegroup_total, count_referrer_agegroup], function(response){

        // get total referrers for specific age group
        var totalPageviews = response[0]['result'];

        // get referrers for specific age group
        var result = response[1]['result'];

            
        for (var key in result) {
            var cnt = result[key]['result'];
            var url = result[key]['userkeen.referrer'];
            if (url == '')
                url = '(direct)';
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
        for (var i=0; i < 10; i++) {
            var url = urls[i]['label'];
            var pageviews = urls[i]['data'];
            var index = i+1;
            var share = (pageviews * 100/ totalPageviews).toFixed(2);
            $(chartElement).append("<tr><td>" + index + "</td><td>" + url + "</td><td>" + pageviews + "</td><td>" + share + "%</td></tr>");
        }


        // hide loader and display chart content
        $('#referrers_age_loading').hide();
        $('#referrers_age_content').show();

    });
}



// Process chart for hourly pageviews
function createPeriodPageviewsChart(period, mode) {

    <?php 
    // define keen event and properties based on script version
    if (Yii::app()->user->scriptVersion == 1) {
      $propertyName = "userdb.age";
    } else {
      $propertyName = "age";
    }
    ?>

    $('#pageviews_period_container').show();


    if (period == 'hourly') {
      periodTicks = 24;
      keenInterval = 'hourly';
      graphTitle = "Hourly pageviews per age group";
    } else {
      periodTicks = 7;
      keenInterval = 'daily';
      graphTitle = "Daily pageviews per age group";
    }

    $('#pageviews_period_title').text(graphTitle);

    // used for graph
    var pageviews_15 = [];
    var pageviews_25 = [];
    var pageviews_35 = [];
    var pageviews_45 = [];
    var pageviews_55 = [];
    var pageviews_65 = [];

    // create arrays for all 24 hours with a default value of 0
    var pageviews_period_15 = Array.apply(null, new Array(periodTicks)).map(Number.prototype.valueOf,0);
    var pageviews_period_25 = Array.apply(null, new Array(periodTicks)).map(Number.prototype.valueOf,0);
    var pageviews_period_35 = Array.apply(null, new Array(periodTicks)).map(Number.prototype.valueOf,0);
    var pageviews_period_45 = Array.apply(null, new Array(periodTicks)).map(Number.prototype.valueOf,0);
    var pageviews_period_55 = Array.apply(null, new Array(periodTicks)).map(Number.prototype.valueOf,0);
    var pageviews_period_65 = Array.apply(null, new Array(periodTicks)).map(Number.prototype.valueOf,0);


    var count_pageviews_15 = new Keen.Query("count", {
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
          "operator" : "gte",
          "property_value" : "15" // look at one particular scenario only
        },
        {
          "property_name" : "<?php echo $propertyName; ?>",
          "operator" : "lte",
          "property_value" : "24" // look at one particular scenario only
        },

        ]
      });

    var count_pageviews_25 = new Keen.Query("count", {
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
          "operator" : "gte",
          "property_value" : "25" // look at one particular scenario only
        },
        {
          "property_name" : "<?php echo $propertyName; ?>",
          "operator" : "lte",
          "property_value" : "34" // look at one particular scenario only
        },

        ]
      });


    var count_pageviews_35 = new Keen.Query("count", {
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
          "operator" : "gte",
          "property_value" : "35" // look at one particular scenario only
        },
        {
          "property_name" : "<?php echo $propertyName; ?>",
          "operator" : "lte",
          "property_value" : "44" // look at one particular scenario only
        },

        ]
      });

    var count_pageviews_45 = new Keen.Query("count", {
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
          "operator" : "gte",
          "property_value" : "45" // look at one particular scenario only
        },
        {
          "property_name" : "<?php echo $propertyName; ?>",
          "operator" : "lte",
          "property_value" : "54" // look at one particular scenario only
        },

        ]
      });


    var count_pageviews_55 = new Keen.Query("count", {
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
          "operator" : "gte",
          "property_value" : "55" // look at one particular scenario only
        },
        {
          "property_name" : "<?php echo $propertyName; ?>",
          "operator" : "lte",
          "property_value" : "64" // look at one particular scenario only
        },

        ]
      });


    var count_pageviews_65 = new Keen.Query("count", {
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
          "operator" : "gte",
          "property_value" : "65" // look at one particular scenario only
        },
        {
          "property_name" : "<?php echo $propertyName; ?>",
          "operator" : "lte",
          "property_value" : "120" // look at one particular scenario only
        },

        ]
      });

    

    client.run([count_pageviews_15, count_pageviews_25, count_pageviews_35, count_pageviews_45, count_pageviews_55, count_pageviews_65], function(response){

       
         // get hourly pageviews for each day
        var result_pageviews_15 = response[0]['result'];
        var result_pageviews_25 = response[1]['result'];
        var result_pageviews_35 = response[2]['result'];
        var result_pageviews_45 = response[3]['result'];
        var result_pageviews_55 = response[4]['result'];
        var result_pageviews_65 = response[5]['result'];
        

        // loop through each day and increment hourly value
        for (var key in result_pageviews_15) {
            var cnt = result_pageviews_15[key]['value'];
            var timeframe = result_pageviews_15[key]['timeframe'];
            
            // get start date and adjust timezone with moment.js
            var timeframeOffset = moment.utc(timeframe['start']).zone("<?php echo $timezoneOffset; ?>");

            // create new date object
            var date = new Date(timeframeOffset.years(), timeframeOffset.months(), timeframeOffset.dates(), timeframeOffset.hours(), timeframeOffset.minutes(), 0, 0);

            if (period == 'hourly') {
              pageviews_period_15[date.getHours()] += cnt;
            } else {
              pageviews_period_15[date.getDay()] += cnt;
            }

        }

        // loop through each day and increment hourly value
        for (var key in result_pageviews_25) {
            var cnt = result_pageviews_25[key]['value'];
            var timeframe = result_pageviews_25[key]['timeframe'];
            
            // get start date and adjust timezone with moment.js
            var timeframeOffset = moment.utc(timeframe['start']).zone("<?php echo $timezoneOffset; ?>");

            // create new date object
            var date = new Date(timeframeOffset.years(), timeframeOffset.months(), timeframeOffset.dates(), timeframeOffset.hours(), timeframeOffset.minutes(), 0, 0);

            if (period == 'hourly') {
              pageviews_period_25[date.getHours()] += cnt;
            } else {
              pageviews_period_25[date.getDay()] += cnt;
            }

        }

        // loop through each day and increment hourly value
        for (var key in result_pageviews_35) {
            var cnt = result_pageviews_35[key]['value'];
            var timeframe = result_pageviews_35[key]['timeframe'];
            
            // get start date and adjust timezone with moment.js
            var timeframeOffset = moment.utc(timeframe['start']).zone("<?php echo $timezoneOffset; ?>");

            // create new date object
            var date = new Date(timeframeOffset.years(), timeframeOffset.months(), timeframeOffset.dates(), timeframeOffset.hours(), timeframeOffset.minutes(), 0, 0);

            if (period == 'hourly') {
              pageviews_period_35[date.getHours()] += cnt;
            } else {
              pageviews_period_35[date.getDay()] += cnt;
            }

        }

        // loop through each day and increment hourly value
        for (var key in result_pageviews_45) {
            var cnt = result_pageviews_45[key]['value'];
            var timeframe = result_pageviews_45[key]['timeframe'];
            
            // get start date and adjust timezone with moment.js
            var timeframeOffset = moment.utc(timeframe['start']).zone("<?php echo $timezoneOffset; ?>");

            // create new date object
            var date = new Date(timeframeOffset.years(), timeframeOffset.months(), timeframeOffset.dates(), timeframeOffset.hours(), timeframeOffset.minutes(), 0, 0);

            if (period == 'hourly') {
              pageviews_period_45[date.getHours()] += cnt;
            } else {
              pageviews_period_45[date.getDay()] += cnt;
            }

        }

        // loop through each day and increment hourly value
        for (var key in result_pageviews_55) {
            var cnt = result_pageviews_55[key]['value'];
            var timeframe = result_pageviews_55[key]['timeframe'];
            
            // get start date and adjust timezone with moment.js
            var timeframeOffset = moment.utc(timeframe['start']).zone("<?php echo $timezoneOffset; ?>");

            // create new date object
            var date = new Date(timeframeOffset.years(), timeframeOffset.months(), timeframeOffset.dates(), timeframeOffset.hours(), timeframeOffset.minutes(), 0, 0);

            if (period == 'hourly') {
              pageviews_period_55[date.getHours()] += cnt;
            } else {
              pageviews_period_55[date.getDay()] += cnt;
            }

        }

        // loop through each day and increment hourly value
        for (var key in result_pageviews_65) {
            var cnt = result_pageviews_65[key]['value'];
            var timeframe = result_pageviews_65[key]['timeframe'];
            
            // get start date and adjust timezone with moment.js
            var timeframeOffset = moment.utc(timeframe['start']).zone("<?php echo $timezoneOffset; ?>");

            // create new date object
            var date = new Date(timeframeOffset.years(), timeframeOffset.months(), timeframeOffset.dates(), timeframeOffset.hours(), timeframeOffset.minutes(), 0, 0);
            
            if (period == 'hourly') {
              pageviews_period_65[date.getHours()] += cnt;
            } else {
              pageviews_period_65[date.getDay()] += cnt;
            }

        }



        // loop through each hour and populate graph array
        if (mode == 'absolute') {
          for (var i in pageviews_period_15) {
              pageviews_15.push(new Array(i, pageviews_period_15[i]));
              pageviews_25.push(new Array(i, pageviews_period_25[i]));
              pageviews_35.push(new Array(i, pageviews_period_35[i]));
              pageviews_45.push(new Array(i, pageviews_period_45[i]));
              pageviews_55.push(new Array(i, pageviews_period_55[i]));
              pageviews_65.push(new Array(i, pageviews_period_65[i]));
          }
        } else {
          for (var i in pageviews_period_15) {
              var totalPageviews = pageviews_period_15[i]+pageviews_period_25[i]+pageviews_period_35[i]+pageviews_period_45[i]+pageviews_period_55[i]+pageviews_period_65[i];
              pageviews_15.push(new Array(i, (pageviews_period_15[i]*100)/totalPageviews));
              pageviews_25.push(new Array(i, (pageviews_period_25[i]*100)/totalPageviews));
              pageviews_35.push(new Array(i, (pageviews_period_35[i]*100)/totalPageviews));
              pageviews_45.push(new Array(i, (pageviews_period_45[i]*100)/totalPageviews));
              pageviews_55.push(new Array(i, (pageviews_period_55[i]*100)/totalPageviews));
              pageviews_65.push(new Array(i, (pageviews_period_65[i]*100)/totalPageviews));
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
                    label: "15-24",
                    data: pageviews_15,
                    lines: {
                        lineWidth: 1,
                    },
                    shadowSize: 0
                }, {
                    label: "25-34",
                    data: pageviews_25,
                    lines: {
                        lineWidth: 1,
                    },
                    shadowSize: 0
                }, {
                    label: "35-44",
                    data: pageviews_35,
                    lines: {
                        lineWidth: 1,
                    },
                    shadowSize: 0
                }, {
                    label: "45-54",
                    data: pageviews_45,
                    lines: {
                        lineWidth: 1,
                    },
                    shadowSize: 0
                }, {
                    label: "55-64",
                    data: pageviews_55,
                    lines: {
                        lineWidth: 1,
                    },
                    shadowSize: 0
                }, {
                    label: "64+",
                    data: pageviews_65,
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
                    legend: {
                      sorted: "reverse"
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


function percentageFormatter(val, axis) {
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








