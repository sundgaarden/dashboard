


<div class="row">
    <div class="col-md-6">
        <div class="portlet solid bordered grey-cararra">
            <div class="portlet-title">
                <div class="caption">
                    <i class="fa fa-pie-chart"></i>Signups per country
                </div>
            </div>
            <div class="portlet-body">

                <div id="pie_chart_country_loading">
                    <img src="/assets/admin/layout/img/loading.gif" alt="loading"/>
                </div>
                <div id="pie_chart_country_content" class="display-none">
                    <h4></h4>
                    <div id="pie_chart_country" class="chart">
                    </div>
                </div>
   
            </div>
        </div>
        
    </div>

    <div class="col-md-6">
        <div class="portlet solid bordered grey-cararra">
            <div class="portlet-title">
                <div class="caption">
                    <i class="fa fa-pie-chart"></i>Signups per region
                </div>
            </div>
            <div class="portlet-body">

                <div id="pie_chart_region_loading">
                    <img src="/assets/admin/layout/img/loading.gif" alt="loading"/>
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
    <div class="col-md-6">
        <div class="portlet solid bordered grey-cararra">
            <div class="portlet-title">
                <div class="caption">
                    <i class="fa fa-pie-chart"></i>Signups per city
                </div>
            </div>
            <div class="portlet-body">

                <div id="pie_chart_city_loading">
                    <img src="/assets/admin/layout/img/loading.gif" alt="loading"/>
                </div>
                <div id="pie_chart_city_content" class="display-none">
                    <h4></h4>
                    <div id="pie_chart_city" class="chart">
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

                createCountryChart();
                createRegionChart();
                createCityChart();
                
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




// Process chart for country
function createCountryChart() {

    <?php 
    // define keen event and properties based on script version
    if (Yii::app()->user->scriptVersion == 1) {
      $eventName = "USERS";
      $groupBy = "userkeen.ip_geo_info.country";
    } else {
      $eventName = "signup_completed";
      $groupBy = "ip_geo_info.country";
    }
    ?>


    var items = [];

    var count_signups = new Keen.Query("count", {
      eventCollection: "<?php echo $eventName; ?>",
      groupBy: "<?php echo $groupBy; ?>",
      timeframe: 
        {
          "start" : startDate,
          "end" : endDate
        }
    });

    client.run([count_signups], function(response){

        var result = response['result'];

        
        for (var key in result) {
            var cnt = result[key]['result'];
            var item = result[key]['<?php echo $groupBy; ?>']
            if (item != null)
                items.push({label: item, data: cnt});
        }

        
        function compare(a,b) {
          if (a.data < b.data)
             return 1;
          if (a.data > b.data)
            return -1;
          return 0;
        }

        items.sort(compare);
        //items.splice(10, 100);
        

        // hide loader and display chart content
        $('#pie_chart_country_loading').hide();
        $('#pie_chart_country_content').show();


        // draw pie chart
        $.plot($("#pie_chart_country"), items, {
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


// Process chart for region
function createRegionChart() {

    <?php 
    // define keen event and properties based on script version
    if (Yii::app()->user->scriptVersion == 1) {
      $eventName = "USERS";
      $groupBy = "userkeen.ip_geo_info.province";
    } else {
      $eventName = "signup_completed";
      $groupBy = "ip_geo_info.province";
    }
    ?>


    var items = [];

    var count_signups = new Keen.Query("count", {
      eventCollection: "<?php echo $eventName; ?>",
      groupBy: "<?php echo $groupBy; ?>",
      timeframe: 
        {
          "start" : startDate,
          "end" : endDate
        }
    });

    client.run([count_signups], function(response){

        var result = response['result'];

        
        for (var key in result) {
            var cnt = result[key]['result'];
            var item = result[key]['<?php echo $groupBy; ?>']
            if (item != null)
                items.push({label: item, data: cnt});
        }

        
        function compare(a,b) {
          if (a.data < b.data)
             return 1;
          if (a.data > b.data)
            return -1;
          return 0;
        }

        items.sort(compare);
        items.splice(18, 100);
        

        // hide loader and display chart content
        $('#pie_chart_region_loading').hide();
        $('#pie_chart_region_content').show();


        // draw pie chart
        $.plot($("#pie_chart_region"), items, {
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

// Process chart for city
function createCityChart() {

    <?php 
    // define keen event and properties based on script version
    if (Yii::app()->user->scriptVersion == 1) {
      $eventName = "USERS";
      $groupBy = "userkeen.ip_geo_info.city";
    } else {
      $eventName = "signup_completed";
      $groupBy = "ip_geo_info.city";
    }
    ?>


    var items = [];

    var count_signups = new Keen.Query("count", {
      eventCollection: "<?php echo $eventName; ?>",
      groupBy: "<?php echo $groupBy; ?>",
      timeframe: 
        {
          "start" : startDate,
          "end" : endDate
        }
    });

    client.run([count_signups], function(response){

        var result = response['result'];

        
        for (var key in result) {
            var cnt = result[key]['result'];
            var item = result[key]['<?php echo $groupBy; ?>']
            if (item != null)
                items.push({label: item, data: cnt});
        }

        
        function compare(a,b) {
          if (a.data < b.data)
             return 1;
          if (a.data > b.data)
            return -1;
          return 0;
        }

        items.sort(compare);
        //items.splice(50, 100);
        

        // hide loader and display chart content
        $('#pie_chart_city_loading').hide();
        $('#pie_chart_city_content').show();


        // draw pie chart
        $.plot($("#pie_chart_city"), items, {
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



</script>



<script>
jQuery(document).ready(function() { 

Charts.initCharts();
Charts.initPieCharts(); 

});
</script>








