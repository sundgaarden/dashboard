var Index = function () {

    return {

        //main function
        init: function () {
            Metronic.addResizeHandler(function () {
                jQuery('.vmaps').each(function () {
                    var map = jQuery(this);
                    map.width(map.parent().width());
                });
            });
        },

        initJQVMAP: function () {

            var showMap = function (name) {
                jQuery('.vmaps').hide();
                jQuery('#vmap_' + name).show();
            }

            var setMap = function (name) {
                var data = {
                    map: 'world_en',
                    backgroundColor: null,
                    borderColor: '#333333',
                    borderOpacity: 0.5,
                    borderWidth: 1,
                    color: '#c6c6c6',
                    enableZoom: true,
                    hoverColor: '#c9dfaf',
                    hoverOpacity: null,
                    values: sample_data,
                    normalizeFunction: 'linear',
                    scaleColors: ['#b6da93', '#909cae'],
                    selectedColor: '#c9dfaf',
                    selectedRegion: null,
                    showTooltip: true,
                    onLabelShow: function (event, label, code) {

                    },
                    onRegionOver: function (event, code) {
                        if (code == 'ca') {
                            event.preventDefault();
                        }
                    },
                    onRegionClick: function (element, code, region) {
                        var message = 'You clicked "' + region + '" which has the code: ' + code.toUpperCase();
                        alert(message);
                    }
                };

                data.map = name + '_en';
                var map = jQuery('#vmap_' + name);
                if (!map) {
                    return;
                }
                map.width(map.parent().parent().width());
                map.show();
                map.vectorMap(data);
                map.hide();
            }

            setMap("world");
            setMap("usa");
            setMap("europe");
            setMap("russia");
            setMap("germany");
            showMap("world");

            jQuery('#regional_stat_world').click(function () {
                showMap("world");
            });

            jQuery('#regional_stat_usa').click(function () {
                showMap("usa");
            });

            jQuery('#regional_stat_europe').click(function () {
                showMap("europe");
            });
            jQuery('#regional_stat_russia').click(function () {
                showMap("russia");
            });
            jQuery('#regional_stat_germany').click(function () {
                showMap("germany");
            });

            $('#region_statistics_loading').hide();
            $('#region_statistics_content').show();
        },

        initCalendar: function () {
            if (!jQuery().fullCalendar) {
                return;
            }

            var date = new Date();
            var d = date.getDate();
            var m = date.getMonth();
            var y = date.getFullYear();


            var h = {};

            if ($('#calendar').width() <= 400) {
                $('#calendar').addClass("mobile");
                h = {
                    left: 'title, prev, next',
                    center: '',
                    right: 'today,month,agendaWeek,agendaDay'
                };
            } else {
                $('#calendar').removeClass("mobile");
                if (Metronic.isRTL()) {
                    h = {
                        right: 'title',
                        center: '',
                        left: 'prev,next,today,month,agendaWeek,agendaDay'
                    };
                } else {
                    h = {
                        left: 'title',
                        center: '',
                        right: 'prev,next,today,month,agendaWeek,agendaDay'
                    };
                }
            }

            $('#calendar').fullCalendar('destroy'); // destroy the calendar
            $('#calendar').fullCalendar({ //re-initialize the calendar
                disableDragging: false,
                header: h,
                editable: true,
                events: [{
                    title: 'All Day Event',
                    start: new Date(y, m, 1),
                    backgroundColor: Metronic.getBrandColor('yellow')
                }, {
                    title: 'Long Event',
                    start: new Date(y, m, d - 5),
                    end: new Date(y, m, d - 2),
                    backgroundColor: Metronic.getBrandColor('blue')
                }, {
                    title: 'Repeating Event',
                    start: new Date(y, m, d - 3, 16, 0),
                    allDay: false,
                    backgroundColor: Metronic.getBrandColor('red')
                }, {
                    title: 'Repeating Event',
                    start: new Date(y, m, d + 4, 16, 0),
                    allDay: false,
                    backgroundColor: Metronic.getBrandColor('green')
                }, {
                    title: 'Meeting',
                    start: new Date(y, m, d, 10, 30),
                    allDay: false
                }, {
                    title: 'Lunch',
                    start: new Date(y, m, d, 12, 0),
                    end: new Date(y, m, d, 14, 0),
                    backgroundColor: Metronic.getBrandColor('grey'),
                    allDay: false
                }, {
                    title: 'Birthday Party',
                    start: new Date(y, m, d + 1, 19, 0),
                    end: new Date(y, m, d + 1, 22, 30),
                    backgroundColor: Metronic.getBrandColor('purple'),
                    allDay: false
                }, {
                    title: 'Click for Google',
                    start: new Date(y, m, 28),
                    end: new Date(y, m, 29),
                    backgroundColor: Metronic.getBrandColor('yellow'),
                    url: 'http://google.com/'
                }]
            });
        },

    

        initMiniCharts: function () {

            // IE8 Fix: function.bind polyfill
            if (Metronic.isIE8() && !Function.prototype.bind) {
                Function.prototype.bind = function (oThis) {
                    if (typeof this !== "function") {
                        // closest thing possible to the ECMAScript 5 internal IsCallable function
                        throw new TypeError("Function.prototype.bind - what is trying to be bound is not callable");
                    }

                    var aArgs = Array.prototype.slice.call(arguments, 1),
                        fToBind = this,
                        fNOP = function () {},
                        fBound = function () {
                            return fToBind.apply(this instanceof fNOP && oThis ? this : oThis,
                        aArgs.concat(Array.prototype.slice.call(arguments)));
                    };

                    fNOP.prototype = this.prototype;
                    fBound.prototype = new fNOP();

                    return fBound;
                };
            }

           


        },

        initChat: function () {

            var cont = $('#chats');
            var list = $('.chats', cont);
            var form = $('.chat-form', cont);
            var input = $('input', form);
            var btn = $('.btn', form);

            var handleClick = function (e) {
                e.preventDefault();

                var text = input.val();
                if (text.length == 0) {
                    return;
                }

                var time = new Date();
                var time_str = (time.getHours() + ':' + time.getMinutes());
                var tpl = '';
                tpl += '<li class="out">';
                tpl += '<img class="avatar" alt="" src="' + Layout.getLayoutImgPath() + 'avatar1.jpg"/>';
                tpl += '<div class="message">';
                tpl += '<span class="arrow"></span>';
                tpl += '<a href="#" class="name">Bob Nilson</a>&nbsp;';
                tpl += '<span class="datetime">at ' + time_str + '</span>';
                tpl += '<span class="body">';
                tpl += text;
                tpl += '</span>';
                tpl += '</div>';
                tpl += '</li>';

                var msg = list.append(tpl);
                input.val("");

                var getLastPostPos = function () {
                    var height = 0;
                    cont.find("li.out, li.in").each(function () {
                        height = height + $(this).outerHeight();
                    });

                    return height;
                }

                cont.find('.scroller').slimScroll({
                    scrollTo: getLastPostPos()
                });
            }

            $('body').on('click', '.message .name', function (e) {
                e.preventDefault(); // prevent click event

                var name = $(this).text(); // get clicked user's full name
                input.val('@' + name + ':'); // set it into the input field
                Metronic.scrollTo(input); // scroll to input if needed
            });

            btn.click(handleClick);

            input.keypress(function (e) {
                if (e.which == 13) {
                    handleClick(e);
                    return false; //<---- Add this line
                }
            });
        },

        initDashboardDaterange: function () {
            //moment.tz.setDefault("Asia/Singapore");
            $('#dashboard-report-range').daterangepicker({
                    opens: (Metronic.isRTL() ? 'right' : 'left'),
                    startDate: moment(localeToday, "YYYY-MM-DD").subtract('days', 6),
                    endDate: moment(localeToday, "YYYY-MM-DD"),
                    minDate: '01/01/2013',
                    maxDate: '12/31/2016',
                    dateLimit: {
                        days: 60
                    },
                    showDropdowns: false,
                    showWeekNumbers: true,
                    timePicker: false,
                    timePickerIncrement: 1,
                    timePicker12Hour: true,
                    ranges: {
                        'Today': [moment(localeToday, "YYYY-MM-DD"), moment(localeToday, "YYYY-MM-DD")],
                        'Yesterday': [moment(localeToday, "YYYY-MM-DD").subtract('days', 1), moment(localeToday, "YYYY-MM-DD").subtract('days', 1)],
                        'Last 7 Days': [moment(localeToday, "YYYY-MM-DD").subtract('days', 6), moment(localeToday, "YYYY-MM-DD")],
                        'Last 30 Days': [moment(localeToday, "YYYY-MM-DD").subtract('days', 29), moment(localeToday, "YYYY-MM-DD")],
                        'This Month': [moment(localeToday, "YYYY-MM-DD").startOf('month'), moment(localeToday, "YYYY-MM-DD").endOf('month')],
                        'Last Month': [moment(localeToday, "YYYY-MM-DD").subtract('month', 1).startOf('month'), moment(localeToday, "YYYY-MM-DD").subtract('month', 1).endOf('month')]
                    },
                    buttonClasses: ['btn btn-sm'],
                    applyClass: ' blue',
                    cancelClass: 'default',
                    format: 'MM/DD/YYYY',
                    separator: ' to ',
                    locale: {
                        applyLabel: 'Apply',
                        fromLabel: 'From',
                        toLabel: 'To',
                        customRangeLabel: 'Custom Range',
                        daysOfWeek: ['Su', 'Mo', 'Tu', 'We', 'Th', 'Fr', 'Sa'],
                        monthNames: ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'],
                        firstDay: 1
                    }
                },
                function (start, end) {
                    $('#dashboard-report-range span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'));
                   
                    var loc = window.location.pathname;
                    var dir = loc.substring(loc.lastIndexOf('/')+1, loc.length);


                    var url = "/dashboard/elements";
                    url += "/view/" + dir;
                    url += "/startdate/" + start.format('YYYY-MM-DD');
                    url += "/enddate/" + end.format('YYYY-MM-DD'); 
                    //console.log(url);          

                    $.ajax({
                        'url': url,
                        'cache': false,
                        'success': function(html) {
                            $('#dashboard-elements').html(html);

                        }
                    });


                }
            );


            $('#dashboard-report-range span').html(moment(localeToday, "YYYY-MM-DD").subtract('days', 6).format('MMMM D, YYYY') + ' - ' + moment(localeToday, "YYYY-MM-DD").format('MMMM D, YYYY'));
            $('#dashboard-report-range').show();
        },

        initIntro: function () {

            // display marketing alert only once
            if (!$.cookie('intro_show')) {
                setTimeout(function () {
                    var unique_id = $.gritter.add({
                        // (string | mandatory) the heading of the notification
                        title: '<a href="http://themeforest.net/item/metronic-responsive-admin-dashboard-template/4021469?ref=keenthemes" target="_blank">Get Metronic Just For 25$</a>',
                        // (string | mandatory) the text inside the notification
                        text: 'Metronic is World\'s #1 Selling Bootstrap 3 Admin Theme Ever! 15400+ Users Can\'t be Wrong.',
                        // (string | optional) the image to display on the left
                        image: '../../assets/admin/layout/img/avatar1.jpg',
                        // (bool | optional) if you want it to fade out on its own or just sit there
                        sticky: true,
                        // (int | optional) the time you want it to be alive for before fading out
                        time: '',
                        // (string | optional) the class name you want to apply to that specific message
                        class_name: 'my-sticky-class'
                    });

                    // You can have it return a unique id, this can be used to manually remove it later using
                    setTimeout(function () {
                        $.gritter.remove(unique_id, {
                            fade: true,
                            speed: 'slow'
                        });
                    }, 12000);
                }, 2000);

                setTimeout(function () {
                    var unique_id = $.gritter.add({
                        // (string | mandatory) the heading of the notification
                        title: '<a href="http://themeforest.net/item/metronic-responsive-admin-dashboard-template/4021469?ref=keenthemes" target="_blank">Develop with Metronic!</a>',
                        // (string | mandatory) the text inside the notification
                        text: 'Metronic comes with 160+ templates, 70+ plugins and 500+ UI components. Also 3 Frontend Themes, Corporate Frontend, eCommerce Frontend and One Page Parallax Frontend are included. Buy 1 Get 4!',
                        // (string | optional) the image to display on the left
                        image: '../../assets/admin/layout/img/avatar1.jpg',
                        // (bool | optional) if you want it to fade out on its own or just sit there
                        sticky: true,
                        // (int | optional) the time you want it to be alive for before fading out
                        time: '',
                        // (string | optional) the class name you want to apply to that specific message
                        class_name: 'my-sticky-class'
                    });

                    // You can have it return a unique id, this can be used to manually remove it later using
                    setTimeout(function () {
                        $.gritter.remove(unique_id, {
                            fade: true,
                            speed: 'slow'
                        });
                    }, 13000);
                }, 8000);

                setTimeout(function () {

                    $('#styler').pulsate({
                        color: "#bb3319",
                        repeat: 10
                    });

                    $.extend($.gritter.options, {
                        position: 'top-left'
                    });

                    var unique_id = $.gritter.add({
                        position: 'top-left',
                        // (string | mandatory) the heading of the notification
                        title: '<a href="http://themeforest.net/item/metronic-responsive-admin-dashboard-template/4021469?ref=keenthemes" target="_blank">Customize Metronic!</a>',
                        // (string | mandatory) the text inside the notification
                        text: 'Metronic allows you to easily customize the theme with unlimited layout options and color schemes. Try Metronic Today!',
                        // (string | optional) the image to display on the left
                        image1: './assets/img/avatar1.png',
                        // (bool | optional) if you want it to fade out on its own or just sit there
                        sticky: true,
                        // (int | optional) the time you want it to be alive for before fading out
                        time: '',
                        // (string | optional) the class name you want to apply to that specific message
                        class_name: 'my-sticky-class'
                    });

                    $.extend($.gritter.options, {
                        position: 'top-right'
                    });

                    // You can have it return a unique id, this can be used to manually remove it later using
                    setTimeout(function () {
                        $.gritter.remove(unique_id, {
                            fade: true,
                            speed: 'slow'
                        });
                    }, 10000);

                }, 23000);

                $.cookie('intro_show', 1);
            }
        }

    };

}();