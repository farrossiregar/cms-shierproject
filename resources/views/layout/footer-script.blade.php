<!-- jQuery -->
<script type="text/javascript" src="{{ asset('bower_components/jquery/dist/jquery.min.js') }}"></script>

<!-- jQuery RAF (improved animation performance) -->
<script type="text/javascript" src="{{ asset('bower_components/jquery-requestAnimationFrame/dist/jquery.requestAnimationFrame.min.js') }}"></script>

<!-- nanoScroller -->
<script type="text/javascript" src="{{ asset('bower_components/nanoscroller/bin/javascripts/jquery.nanoscroller.min.js') }}"></script>

<!-- Materialize -->
<script type="text/javascript" src="{{ asset('bower_components/materialize/bin/materialize.js') }}"></script>

<!-- Simple Weather -->
<script type="text/javascript" src="{{ asset('bower_components/simpleWeather/jquery.simpleWeather.min.js') }}"></script>

<!-- Sparkline -->
<script type="text/javascript" src="{{ asset('bower_components/jquery.sparkline/dist/jquery.sparkline.min.js') }}"></script>

<!-- Flot -->
<script type="text/javascript" src="{{ asset('bower_components/flot/jquery.flot.js') }}"></script>
<script type="text/javascript" src="{{ asset('bower_components/flot/jquery.flot.time.js') }}"></script>
<script type="text/javascript" src="{{ asset('bower_components/flot/jquery.flot.pie.js') }}"></script>
<script type="text/javascript" src="{{ asset('bower_components/flot/jquery.flot.categories.js') }}"></script>
<script type="text/javascript" src="{{ asset('bower_components/flot.tooltip/js/jquery.flot.tooltip.min.js') }}"></script>

<!-- d3 -->
<script type="text/javascript" src="{{ asset('bower_components/d3/d3.min.js') }}"></script>

<!-- nvd3 -->
<script type="text/javascript" src="{{ asset('bower_components/nvd3/build/nv.d3.min.js') }}"></script>

<!-- Rickshaw -->
<script type="text/javascript" src="{{ asset('bower_components/rickshaw/rickshaw.min.js') }}"></script>










<!-- jvectormap -->
<script type="text/javascript" src="{{ asset('assets/jquery-jvectormap/jquery-jvectormap.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('assets/jquery-jvectormap/jquery-jvectormap-world-mill-en.js') }}"></script>
<script type="text/javascript" src="{{ asset('assets/jquery-jvectormap/gdp-data.js') }}"></script>










<!-- Sortable -->
<script type="text/javascript" src="{{ asset('bower_components/Sortable/Sortable.min.js') }}"></script>

<!-- Main -->
<script type="text/javascript" src="{{ asset('assets/_con/js/_con.js') }}"></script>

<!-- Google Prettify -->
<script type="text/javascript" src="{{ asset('bower_components/code-prettify/src/prettify.js') }}"></script>


<script>
/*
    * Sparkline in Card panel
    */
(function() {
    $("#sparkcard1").conSparkline([76, 78, 87, 65, 43, 35, 23, 25, 12, 14, 27, 35, 32, 37, 31, 46, 43, 32, 36, 57, 78, 87, 82, 75, 58, 54, 70, 23, 54, 67, 34, 23, 87, 12, 43, 65, 23, 76, 32, 55], {
        type: 'bar',
        width: '100%',
        height: 20,
        barColor: '#2196f3'
    });
}());


var rickshawLine1 = [{
    "x": 0,
    "y": 13
}, {
    "x": 1,
    "y": 12
}, {
    "x": 2,
    "y": 24
}, {
    "x": 3,
    "y": 25
}, {
    "x": 4,
    "y": 12
}, {
    "x": 5,
    "y": 16
}, {
    "x": 6,
    "y": 24
}, {
    "x": 7,
    "y": 13
}, {
    "x": 8,
    "y": 12
}, {
    "x": 9,
    "y": 11
}];
var rickshawLine2 = [{
    "x": 0,
    "y": 16
}, {
    "x": 1,
    "y": 23
}, {
    "x": 2,
    "y": 17
}, {
    "x": 3,
    "y": 16
}, {
    "x": 4,
    "y": 22
}, {
    "x": 5,
    "y": 25
}, {
    "x": 6,
    "y": 21
}, {
    "x": 7,
    "y": 22
}, {
    "x": 8,
    "y": 12
}, {
    "x": 9,
    "y": 13
}];

/*
    * Rickshaw Stacked Area Chart
    */
(function() {
    var element = $("#rickshawStackedArea");
    var graph = new Rickshaw.Graph({
        element: element[0],
        renderer: 'area',
        stroke: false,
        series: [{
            data: rickshawLine1,
            color: '#42a5f5',
            name: 'Visits'
        }, {
            data: rickshawLine2,
            color: '#90caf9',
            name: 'Views'
        }]
    });
    graph.render();

    var hoverDetail = new Rickshaw.Graph.HoverDetail({
        graph: graph,
        xFormatter: function(x) {
            return x
        },
        yFormatter: function(y) {
            return y
        }
    });

    // responsive
    $(window).on('resize', function() {
        graph.configure({
            width: element.width()
        });
        graph.render();
    });
}());


/*
    * Rickshaw Stacked Bars
    */
(function() {
    var element = $("#rickshawStackedBars");
    var graph = new Rickshaw.Graph({
        element: element[0],
        renderer: 'bar',
        series: [{
            data: rickshawLine1,
            color: '#26a69a',
            name: 'Visits'
        }, {
            data: rickshawLine2,
            color: '#80cbc4',
            name: 'Views'
        }]
    });
    graph.render();

    var hoverDetail = new Rickshaw.Graph.HoverDetail({
        graph: graph,
        xFormatter: function(x) {
            return x
        },
        yFormatter: function(y) {
            return y
        }
    });

    // responsive
    $(window).on('resize', function() {
        graph.configure({
            width: element.width()
        });
        graph.render();
    });
}());



/*
    * Flot Line Chart
    */
(function() {
    var chart = $("#flotLineChart");
    var data1 = {
        data: [
            [1, 50],
            [2, 58],
            [3, 45],
            [4, 62],
            [5, 55],
            [6, 65],
            [7, 61],
            [8, 70],
            [9, 65],
            [10, 70],
            [11, 53],
            [12, 49]
        ],
        label: "Mails"
    };
    var data2 = {
        data: [
            [1, 25],
            [2, 31],
            [3, 23],
            [4, 48],
            [5, 38],
            [6, 40],
            [7, 47],
            [8, 55],
            [9, 43],
            [10, 50],
            [11, 37],
            [12, 29]
        ],
        label: "SMS"
    };
    var data3 = {
        data: [
            [1, 4],
            [2, 13],
            [3, 7],
            [4, 17],
            [5, 20],
            [6, 24],
            [7, 13],
            [8, 17],
            [9, 10],
            [10, 17],
            [11, 6],
            [12, 3]
        ],
        label: "Invoices"
    };
    var options = {
        series: {
            lines: {
                show: true,
                lineWidth: 1,
                fill: true,
                fillColor: {
                    colors: [{
                        opacity: 0.1
                    }, {
                        opacity: 0.13
                    }]
                }
            },
            points: {
                show: true,
                lineWidth: 2,
                radius: 3
            },
            shadowSize: 0,
            stack: true
        },
        grid: {
            hoverable: true,
            clickable: true,
            tickColor: "#f9f9f9",
            borderWidth: 0
        },
        legend: {
            // show: false
            backgroundOpacity: 0,
            labelBoxBorderColor: "#fff"
        },
        colors: ["#3f51b5", "#009688", "#2196f3"],
        xaxis: {
            ticks: [
                [1, "Jan"],
                [2, "Feb"],
                [3, "Mar"],
                [4, "Apr"],
                [5, "May"],
                [6, "Jun"],
                [7, "Jul"],
                [8, "Aug"],
                [9, "Sep"],
                [10, "Oct"],
                [11, "Nov"],
                [12, "Dec"]
            ],
            font: {
                family: "Roboto,sans-serif",
                color: "#ccc"
            }
        },
        yaxis: {
            ticks: 7,
            tickDecimals: 0,
            font: {
                color: "#ccc"
            }
        }
    };

    function initFlot() {
        $.plot(chart, [data1, data2, data3], options);
        chart.find('.legend table').css('width', 'auto')
            .find('td').css('padding', 5);
    }
    initFlot();
    $(window).on('resize', initFlot);

    function showTooltip(x, y, contents) {
        $('<div id="tooltip">' + contents + '</div>').css({
            position: 'absolute',
            display: 'none',
            top: y - 40,
            left: x - 55,
            color: "#fff",
            padding: '5px 10px',
            'border-radius': '3px',
            'background-color': 'rgba(0,0,0,0.6)'
        }).appendTo("body").fadeIn(200);
    }

    var previousPoint = null;
    chart.bind("plothover", function(event, pos, item) {
        if (item) {
            if (previousPoint != item.dataIndex) {
                previousPoint = item.dataIndex;

                $("#tooltip").remove();
                var x = item.datapoint[0].toFixed(0),
                    y = item.datapoint[1].toFixed(0);

                var month = item.series.xaxis.ticks[item.dataIndex].label;

                showTooltip(item.pageX, item.pageY,
                    item.series.label + " of " + month + ": " + y);
            }
        } else {
            $("#tooltip").remove();
            previousPoint = null;
        }
    });
}());



/*
    * Flot Pie Chart
    */
(function() {
    var chart = $("#flotPieChart");
    var data = [{
        label: "IE",
        data: 19.5,
        color: "#90a4ae"
    }, {
        label: "Safari",
        data: 4.5,
        color: "#7986cb"
    }, {
        label: "Opera",
        data: 2.3,
        color: "#9575cd"
    }, {
        label: "Firefox",
        data: 36.6,
        color: "#4db6ac"
    }, {
        label: "Chrome",
        data: 36.3,
        color: "#64b5f6"
    }];
    var options = {
        series: {
            pie: {
                innerRadius: 0.5,
                show: true
            }
        },
        grid: {
            hoverable: true
        },
        legend: {
            backgroundOpacity: 0,
            labelBoxBorderColor: "#fff"
        },
        tooltip: true,
        tooltipOpts: {
            content: "%p.0%, %s", // show percentages, rounding to 2 decimal places
            shifts: {
                x: 20,
                y: 0
            },
            defaultTheme: false
        }
    };

    function initFlot() {
        $.plot(chart, data, options);
        chart.find('.legend table').css('width', 'auto')
            .find('td').css('padding', 5);
    }
    initFlot();
    $(window).on('resize', initFlot);

}());


/*
    * MAP 1
    */
(function() {
    $('#map1').vectorMap({
        map: 'world_mill_en',
        zoom: 2,
        series: {
            regions: [{
                values: gdpData,
                scale: ['#e3f2fd', '#2196f3'],
                normalizeFunction: 'polynomial'
            }]
        },
        backgroundColor: '#fff',
        onRegionTipShow: function(e, el, code) {
            el.html(el.html() + ' (GDP - ' + gdpData[code] + ')');
        }
    });
}());




/*
    * Rickshaw
    */
(function() {
    var rickshawSeries = [
        [],
        []
    ];

    // Create random data
    var randomData = new Rickshaw.Fixtures.RandomData(50);
    for (var i = 0; i < 40; i++) {
        randomData.addData(rickshawSeries);
    }

    // Init Richshaw graph
    var element = $("#rickshawGraph");
    var graph = new Rickshaw.Graph({
        element: element[0],
        height: 253,
        interpolation: 'cardinal',
        renderer: 'area',
        series: [{
            data: rickshawSeries[0],
            color: '#4db6ac',
            name: 'HDD'
        }, {
            data: rickshawSeries[1],
            color: '#b2dfdb',
            name: 'CPU'
        }]
    });

    // Add hover info
    new Rickshaw.Graph.HoverDetail({
        graph: graph
    });

    // Render graph
    graph.render();

    // Live Update
    setInterval(function() {
        randomData.removeData(rickshawSeries);
        randomData.addData(rickshawSeries);
        graph.update();
    }, 1000);

    // Responsive
    $(window).on('resize', function() {
        graph.configure({
            width: element.width()
        });
        graph.render();
    });

}());


setTimeout(function() {
    Materialize.toast('Welcome to Con!', 1000);
}, 1000);
</script>


<script src="{{ asset('bower_components/ckeditor/ckeditor.js') }}" type="text/javascript"></script>

<!-- Data Tables -->
<script type="text/javascript" src="{{ asset('bower_components/datatables/media/js/jquery.dataTables.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('bower_components/datatables-tabletools/js/dataTables.tableTools.js') }}"></script>
<script type="text/javascript" src="{{ asset('bower_components/datatables-scroller/js/dataTables.scroller.js') }}"></script>
