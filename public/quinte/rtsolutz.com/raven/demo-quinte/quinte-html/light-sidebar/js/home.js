/* ========================================================================

Home Js

=========================================================================
 */


"use strict";


/*======== Doucument Ready Function =========*/
jQuery(document).ready(function ($) {
    //CACHE JQUERY OBJECTS
    var $window = $(window);

    if ($('#morris_line').length) {
        // Use Morris.Area instead of Morris.Line
        Morris.Line({
            element: 'morris_line',
            behaveLikeLine: true,
            data: [
                { y: '2008', a: 50, b: 0 },
                { y: '2009', a: 75, b: 43 },
                { y: '2010', a: 30, b: 75 },
                { y: '2011', a: 50, b: 40 },
                { y: '2012', a: 75, b: 10 },
                { y: '2013', a: 50, b: 25 },
                { y: '2014', a: 75, b: 50 },
                { y: '2015', a: 100, b: 70 }
            ],

            xkey: 'y',
            ykeys: ['a', 'b'],
            labels: ['Series A', 'Series B'],
            lineColors: ['#3644FF', '#06D6A0'],
            resize: true,
            gridTextSize: '14px'
        });

    }

    // Average Sale Chart

    if ($("#avg-sale").length) {
        var avgChartCanvas = $("#avg-sale").get(0).getContext("2d");
        var avgChart = new Chart(avgChartCanvas, {
            type: 'bar',
            data: {
                labels: ["Jan", "Feb", "Mar", "Apr", "May", "Jun"],
                datasets: [{
                    label: 'Europe',
                    data: [345, 454, 690, 237, 700, 600],
                    backgroundColor: '#4908FA'
                },
                    {
                        label: 'USA',
                        data: [950, 900, 500, 620, 1020, 1200],
                        backgroundColor: '#eaf0ff'
                    }
                ]
            },
            options: {
                responsive: true,
                maintainAspectRatio: true,
                layout: {
                    padding: {
                        left: 0,
                        right: 0,
                        top: 20,
                        bottom: 0
                    }
                },
                scales: {
                    yAxes: [{
                        display: false,
                        gridLines: {
                            drawBorder: false,
                        },
                        ticks: {
                            stepSize: 250,
                            fontColor: "#686868"
                        }
                    }],
                    xAxes: [{
                        stacked: true,
                        ticks: {
                            beginAtZero: true,
                            fontColor: "#686868"
                        },
                        gridLines: {
                            display: false,
                            drawBorder: false
                        },
                        barPercentage: 0.4
                    }]
                },
                legend: {
                    display: false
                },
                elements: {
                    point: {
                        radius: 0
                    }
                },
                legendCallback: function(chart) {
                    var text = [];
                    text.push('<ul class="legend'+ chart.id +'">');
                    for (var i = 0; i < chart.data.datasets.length; i++) {
                        text.push('<li><span class="legend-dots" style="background-color:' + chart.data.datasets[i].backgroundColor + '"></span>');
                        if (chart.data.datasets[i].label) {
                            text.push(chart.data.datasets[i].label);
                        }
                        text.push('</li>');
                    }
                    text.push('</ul>');
                    return text.join("");
                }
            }
        });
    }

    // Views Map

    var latlong = {};
    latlong["AU"] = {
        "latitude": -27,
        "longitude": 133
    };
    latlong["BW"] = {
        "latitude": -22,
        "longitude": 24
    };
    latlong["IN"] = {
        "latitude": 20,
        "longitude": 77
    };
    latlong["KE"] = {
        "latitude": 1,
        "longitude": 38
    };
    latlong["MY"] = {
        "latitude": 2.5,
        "longitude": 112.5
    };
    latlong["NI"] = {
        "latitude": 13,
        "longitude": -85
    };
    latlong["NZ"] = {
        "latitude": -41,
        "longitude": 174
    };
    latlong["PH"] = {
        "latitude": 13,
        "longitude": 122
    };
    latlong["PL"] = {
        "latitude": 52,
        "longitude": 20
    };
    latlong["TH"] = {
        "latitude": 15,
        "longitude": 100
    };
    latlong["ZA"] = {
        "latitude": -29,
        "longitude": 24
    };

    var mapData = [
        {
            "code": "PL",
            "name": "Poland",
            "value": 38298949,
            "color": "#f44236"
        },
        {
            "code": "KE",
            "name": "Kenya",
            "value": 41609728,
            "color": "#1dc4e9"
        },
        {
            "code": "ZA",
            "name": "South Africa",
            "value": 50459978,
            "color": "#f4c22b"
        },
        {
            "code": "IN",
            "name": "India",
            "value": 141491960,
            "color": "#06D6A0"
        },
        {
            "code": "PH",
            "name": "Philippines",
            "value": 94852030,
            "color": "#0093FF"
        },
        {
            "code": "AU",
            "name": "Australia",
            "value": 22605732,
            "color": "#1dc4e9"
        },
        {
            "code": "TH",
            "name": "Thailand",
            "value": 69518555,
            "color": "#f44236"
        },
        {
            "code": "BW",
            "name": "Botswana",
            "value": 2030738,
            "color": "#0093FF"
        },
        {
            "code": "MY",
            "name": "Malaysia",
            "value": 28859154,
            "color": "#06D6A0"
        },
        {
            "code": "NZ",
            "name": "New Zealand",
            "value": 4414509,
            "color": "#0093FF"
        },
        {
            "code": "NI",
            "name": "Nicaragua",
            "value": 5869859,
            "color": "#06D6A0"
        }
    ];

    var minBulletSize = 3;
    var maxBulletSize = 70;
    var min = Infinity;
    var max = -Infinity;
    for (var i = 0; i < mapData.length; i++) {
        var value = mapData[i].value;
        if (value < min) {
            min = value;
        }
        if (value > max) {
            max = value;
        }
    }

    var maxSquare = maxBulletSize * maxBulletSize * 2 * Math.PI;
    var minSquare = minBulletSize * minBulletSize * 2 * Math.PI;

    var images = [];
    for (var i = 0; i < mapData.length; i++) {
        var dataItem = mapData[i];
        var value = dataItem.value;

        var square = (value - min) / (max - min) * (maxSquare - minSquare) + minSquare;
        if (square < minSquare) {
            square = minSquare;
        }
        var size = Math.sqrt(square / (Math.PI * 8));
        var id = dataItem.code;

        images.push({
            "type": "circle",
            "theme": "light",
            "width": size,
            "height": size,
            "color": dataItem.color,
            "longitude": latlong[id].longitude,
            "latitude": latlong[id].latitude,
            "title": dataItem.name + "</br> [ " + value + " ]",
            "value": value
        });
    }
    var map = AmCharts.makeChart("country_map", {
        "type": "map",
        "projection": "eckert6",

        "dataProvider": {
            "map": "worldLow",
            "images": images
        },
        "export": {
            "enabled": true
        }
    });
});
/*======== End Doucument Ready Function =========*/