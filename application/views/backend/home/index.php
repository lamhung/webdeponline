
<div class="graphs">
    <div class="col_3">
        <div class="col-md-3 widget widget1">
            <div class="r3_counter_box">
                <i class="fa fa-mail-forward"></i>
                <div class="stats">
                    <h5>45 <span>%</span></h5>
                    <div class="grow">
                        <p>Growth</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-3 widget widget1">
            <div class="r3_counter_box">
                <i class="fa fa-users"></i>
                <div class="stats">
                    <h5>50 <span>%</span></h5>
                    <div class="grow grow1">
                        <p>New Users</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-3 widget widget1">
            <div class="r3_counter_box">
                <i class="fa fa-eye"></i>
                <div class="stats">
                    <h5>70 <span>%</span></h5>
                    <div class="grow grow3">
                        <p>Visitors</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-3 widget">
            <div class="r3_counter_box">
                <i class="fa fa-usd"></i>
                <div class="stats">
                    <h5>70 <span>%</span></h5>
                    <div class="grow grow2">
                        <p>Profit</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="clearfix"> </div>
    </div>

    <!-- switches -->
    <div class="switches">
        <div class="col-4">
            <div class="col-md-4 switch-right">
                <div class="switch-right-grid">
                    <div class="switch-right-grid1">
                        <h3>TODAY'S STATS</h3>
                        <p>Duis aute irure dolor in reprehenderit.</p>
                        <ul>
                            <li>Earning: $400 USD</li>
                            <li>Items Sold: 20 Items</li>
                            <li>Last Hour Sales: $34 USD</li>
                        </ul>
                    </div>
                </div>
                <div class="sparkline">
                    <canvas id="line" height="150" width="480" style="width: 480px; height: 150px;"></canvas>
                    <script>
                        var lineChartData = {
                            labels: ["Mon", "Tue", "Wed", "Thu", "Fri", "Sat", "Mon"],
                            datasets: [
                                {
                                    fillColor: "#fff",
                                    strokeColor: "#F44336",
                                    pointColor: "#fbfbfb",
                                    pointStrokeColor: "#F44336",
                                    data: [20, 35, 45, 30, 10, 65, 40]
                                }
                            ]

                        };
                        new Chart(document.getElementById("line").getContext("2d")).Line(lineChartData);
                    </script>
                </div>
            </div>
            <div class="col-md-4 switch-right">
                <div class="switch-right-grid">
                    <div class="switch-right-grid1">
                        <h3>MONTHLY STATS</h3>
                        <p>Duis aute irure dolor in reprehenderit.</p>
                        <ul>
                            <li>Earning: $5,000 USD</li>
                            <li>Items Sold: 400 Items</li>
                            <li>Last Hour Sales: $2,434 USD</li>
                        </ul>
                    </div>
                </div>
                <div class="sparkline">
                    <canvas id="bar" height="150" width="480" style="width: 480px; height: 150px;"></canvas>
                    <script>
                        var barChartData = {
                            labels: ["Mon", "Tue", "Wed", "Thu", "Fri", "Sat", "Mon", "Tue", "Wed", "Thu"],
                            datasets: [
                                {
                                    fillColor: "#8BC34A",
                                    strokeColor: "#8BC34A",
                                    data: [25, 40, 50, 65, 55, 30, 20, 10, 6, 4]
                                },
                                {
                                    fillColor: "#8BC34A",
                                    strokeColor: "#8BC34A",
                                    data: [30, 45, 55, 70, 40, 25, 15, 8, 5, 2]
                                }
                            ]

                        };
                        new Chart(document.getElementById("bar").getContext("2d")).Bar(barChartData);
                    </script>
                </div>
            </div>
            <div class="col-md-4 switch-right">
                <div class="switch-right-grid">
                    <div class="switch-right-grid1">
                        <h3>ALLTIME STATS</h3>
                        <p>Duis aute irure dolor in reprehenderit.</p>
                        <ul>
                            <li>Earning: $80,000 USD</li>
                            <li>Items Sold: 8,000 Items</li>
                            <li>Last Hour Sales: $75,434 USD</li>
                        </ul>
                    </div>
                </div>
                
            </div>
            <div class="clearfix"></div>
        </div>
    </div>
    <!-- //switches -->
    
</div>
<!--body wrapper start-->
