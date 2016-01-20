


<div class="row">
    <div class="col-md-6">
        <div class="portlet solid bordered grey-cararra">
            <div class="portlet-title">
                <div class="caption">
                    <i class="fa fa-pie-chart"></i>Signups per device type
                </div>
            </div>
            <div class="portlet-body">
                <div id="pie_chart_device_type_loading">
                    <img src="/assets/admin/layout/img/loading.gif" alt="loading"/>
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
                    <i class="fa fa-pie-chart"></i>Signups per mobile type
                </div>
            </div>
            <div class="portlet-body">
                <div id="pie_chart_mobile_type_loading">
                    <img src="/assets/admin/layout/img/loading.gif" alt="loading"/>
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
                    <i class="fa fa-pie-chart"></i>Signups per iOS type
                </div>
            </div>
            <div class="portlet-body">
                <div id="pie_chart_ios_type_loading">
                    <img src="/assets/admin/layout/img/loading.gif" alt="loading"/>
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
                    <i class="fa fa-pie-chart"></i>Signups per browser type
                </div>
            </div>
            <div class="portlet-body">
                <div id="pie_chart_browser_type_loading">
                    <img src="/assets/admin/layout/img/loading.gif" alt="loading"/>
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





// Process chart for device & mobile types
function createDeviceCharts() {

    <?php 
    // define keen event and properties based on script version
    if (Yii::app()->user->scriptVersion == 1) {
      $eventName = "USERS";
      $groupBy = "userkeen.parsed_user_agent.os.family";
    } else {
      $eventName = "signup_completed";
      $groupBy = "parsed_user_agent.os.family";
    }
    ?>


    var devices = [];
    var mobileDevices = [];

    var count_signups_device = new Keen.Query("count", {
      eventCollection: "<?php echo $eventName; ?>",
      groupBy: "<?php echo $groupBy; ?>",
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
            var device = result[key]['<?php echo $groupBy; ?>']
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

    <?php 
    // define keen event and properties based on script version
    if (Yii::app()->user->scriptVersion == 1) {
      $eventName = "USERS";
      $groupBy = "userkeen.parsed_user_agent.device.family";
    } else {
      $eventName = "signup_completed";
      $groupBy = "parsed_user_agent.device.family";
    }
    ?>
    
    var iosDevices = [];

    var count_signups_ios = new Keen.Query("count", {
      eventCollection: "<?php echo $eventName; ?>",
      groupBy: "<?php echo $groupBy; ?>",
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
            var device = result[key]['<?php echo $groupBy; ?>']
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

    <?php 
    // define keen event and properties based on script version
    if (Yii::app()->user->scriptVersion == 1) {
      $eventName = "USERS";
      $groupBy = "userkeen.parsed_user_agent.browser.family";
    } else {
      $eventName = "signup_completed";
      $groupBy = "parsed_user_agent.browser.family";
    }
    ?>
    
    var browsers = [];

    var count_signups_browser = new Keen.Query("count", {
      eventCollection: "<?php echo $eventName; ?>",
      groupBy: "<?php echo $groupBy; ?>",
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
            var device = result[key]['<?php echo $groupBy; ?>']
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
jQuery(document).ready(function() { 

Charts.initCharts();
Charts.initPieCharts(); 

});
</script>








