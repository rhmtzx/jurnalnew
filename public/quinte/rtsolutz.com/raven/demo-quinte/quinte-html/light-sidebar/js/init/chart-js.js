/* ========================================================================

Chart Js Init

=========================================================================
 */


"use strict";


/*======== Doucument Ready Function =========*/
jQuery(document).ready(function () {

    if ($('#bar_chart').length) {
        var ctx = document.getElementById("bar_chart").getContext('2d');
        var myChart = new Chart(ctx, {
            type: 'bar',
            data: {
                labels: ["January", "February", "March", "April", "May", "June", "July"],
                datasets: [{
                    label: 'Profit Months',
                    data: [12, 19, 3, 17, 28, 24, 7],
                    backgroundColor: "#2671FF",
                    borderColor: "#2671FF",
                    borderWidth: 2
                }, {
                    label: 'Loss Month',
                    data: [30, 29, 5, 5, 20, 3, 10],
                    backgroundColor: "#3C3ACC",
                    borderColor: "#3C3ACC",
                    borderWidth: 2
                }]
            },
            options: {
                maintainAspectRatio: false,
                legend: {
                    display: false,
                    position: 'bottom',

                    labels: {
                        fontColor: '#71748d',
                        fontSize: 14,
                    }
                },

                scales: {
                    xAxes: [{
                        ticks: {
                            fontSize: 14,
                            fontColor: '#71748d',
                        }
                    }],
                    yAxes: [{
                        ticks: {
                            fontSize: 14,
                            fontColor: '#71748d',
                        }
                    }]
                }
            }


        });
    }

    if ($('#line_chart').length) {
        var ctx = document.getElementById('line_chart').getContext('2d');

        var myChart = new Chart(ctx, {
            type: 'line',

            data: {
                labels: ['Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat', 'Sun'],
                datasets: [{
                    label: 'Main Data',
                    data: [12, 19, 3, 17, 6, 3, 7],
                    backgroundColor: "rgba(54, 68, 255, 0.5)",
                    borderColor: "rgba(54, 68, 255, 0.7)",
                    borderWidth: 2
                }, {
                    label: 'Basic Data',
                    data: [2, 29, 5, 5, 2, 3, 10],
                    backgroundColor: "rgba(60, 58, 204,0.5)",
                    borderColor: "rgba(60, 58, 204,0.7)",
                    borderWidth: 2
                }]

            },
            options: {
                maintainAspectRatio: false,
                legend: {
                    display: true,
                    position: 'bottom',

                    labels: {
                        fontColor: '#71748d',
                        fontSize: 14,
                    }
                },

                scales: {
                    xAxes: [{
                        ticks: {
                            fontSize: 14,
                            fontColor: '#71748d',
                        }
                    }],
                    yAxes: [{
                        ticks: {
                            fontSize: 14,
                            fontColor: '#71748d',
                        }
                    }]
                }
            }



        });
    }

    if ($('#doughnut_chart').length) {
        var ctx = document.getElementById("doughnut_chart").getContext('2d');
        var myChart = new Chart(ctx, {
            type: 'doughnut',
            data: {
                labels: ["Data 1", "Data 2", "Data 3", "Data 4"],
                datasets: [{
                    backgroundColor: [
                        "#1687FC",
                        "#2671FF",
                        "#3C3ACC",
                        "#02007C",
                        "#2D2C91",
                    ],
                    data: [12, 19, 3, 17]
                }]
            },
            options: {
                maintainAspectRatio: false,

                legend: {
                    display: true,
                    position: 'bottom',

                    labels: {
                        fontColor: '#71748d',
                        fontSize: 14,
                    }
                },


            }

        });
    }

    if ($('#pie_chart').length) {
        var ctx = document.getElementById("pie_chart").getContext('2d');
        var myChart = new Chart(ctx, {
            type: 'pie',
            data: {
                labels: ["Data 1", "Data 2", "Data 3", "Data 4"],
                datasets: [{
                    backgroundColor: [
                        "#2D2C91",
                        "#1687FC",
                        "#3C3ACC",
                        "#02007C",
                        "#2671FF",
                    ],
                    data: [12, 19, 3, 17]
                }]
            },
            options: {
                maintainAspectRatio: false,
                legend: {
                    display: true,
                    position: 'bottom',

                    labels: {
                        fontColor: '#71748d',
                        fontSize: 14,
                    }
                },


            }
        });
    }

    if ($('#polar_chart').length) {
        var ctx = document.getElementById("polar_chart").getContext('2d');
        var myChart = new Chart(ctx, {
            type: 'polarArea',
            data: {
                labels: ["Data 1", "Data 2", "Data 3", "Data 4"],
                datasets: [{
                    backgroundColor: [
                        "#1687FC",
                        "#2671FF",
                        "#3C3ACC",
                        "#02007C",
                        "#2D2C91",
                    ],
                    data: [12, 19, 3, 17]
                }]
            },
            options: {
                maintainAspectRatio: false,

                legend: {
                    display: true,
                    position: 'bottom',

                    labels: {
                        fontColor: '#71748d',
                        fontSize: 14,
                    }
                },


            }
        });
    }

    if ($('#radar_chart').length) {
        var ctx = document.getElementById("radar_chart");
        var myChart = new Chart(ctx, {
            type: 'radar',
            data: {
                labels: ["Data 1", "Data 2", "Data 3", "Data 4"],
                datasets: [{
                    label: 'Main Data',
                    backgroundColor: "rgba(54, 68, 255, 0.5)",
                    borderColor: "rgba(54, 68, 255, 0.7)",
                    data: [12, 19, 3, 17],
                    borderWidth: 2
                }, {
                    label: 'Basic Data',
                    backgroundColor: "rgba(60, 58, 204,0.5)",
                    borderColor: "rgba(60, 58, 204,0.7)",
                    data: [30, 29, 5, 5, 20, 3, 10],
                    borderWidth: 2
                }]
            },
            options: {
                maintainAspectRatio: false,

                legend: {
                    display: true,
                    position: 'bottom',

                    labels: {
                        fontColor: '#71748d',
                        fontSize: 14,
                    }
                },


            }

        });
    }

});
/*======== End Doucument Ready Function =========*/