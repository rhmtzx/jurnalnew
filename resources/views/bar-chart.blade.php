
            <!-- ============================================================== -->
<header>
    <title>Bar Chart</title>
    <script src="https://code.jquery.com/jquery-3.6.3.min.js" integrity="sha256-pvPw+upLPUjgMXY0G+8O0xUf+/Im1MZjXxxgOcBQBXU=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.bundle.min.js" integrity="sha512-vBmx0N/uQOXznm/Nbkp7h0P1RfLSj0HQrFSzV8m7rOGyj30fYAOKHYvCNez+yM8IrfnW0TCodDEjRqf6fodf/Q==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</header>
<body>            
 

                            <div style="height: 400px; width: 900px; margin: auto;">
                                <canvas id="BarChart"></canvas>
                            </div>
                            
                            <script>
                                $(function(){
                                    var datas = <?php echo json_encode($datas); ?>;
                                    var barCanvas = $("#barChart");
                                    var barChart = new Chart(barCanvas,{
                                        type:'bar',
                                        data:{
                                            labels:['Jan','Feb','Mar','Apr','May','Jun','Jul','Aug','Sep','Oct',
                                            'Nov','Dec'],
                                            datasets:[
                                                {
                                                    label:'New User Growth, 2023',
                                                    data:datas,
                                                    backgroundColor:['red','orange','yellow','green','blue','indigo','violet','purple','pink','silver','gold','brown'],
                                                }
                                            ]
                                        },
                                        options:{
                                            scales:{
                                                yAxes:[{
                                                    ticks:{
                                                        beginAtZero:true
                                                    }
                                                }]
                                            }
                                        }
                                    });
                                }
                            </script>
                           
</body>     
