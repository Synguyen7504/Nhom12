</div>
</div>


</body>

<!--   Core JS Files   -->
<script src="assets/js/jquery.3.2.1.min.js" type="text/javascript"></script>
<script src="assets/js/bootstrap.min.js" type="text/javascript"></script>

<!--  Charts Plugin -->
<script src="assets/js/chartist.min.js"></script>

<!--  Notifications Plugin    -->
<script src="assets/js/bootstrap-notify.js"></script>

<!--  Google Maps Plugin    -->
<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>

<!-- Light Bootstrap Table Core javascript and methods for Demo purpose -->
<script src="assets/js/light-bootstrap-dashboard.js?v=1.4.0"></script>

<!-- Light Bootstrap Table DEMO methods, don't include it in your project! -->
<!-- <script src="assets/js/demo.js"></script> -->
<?php if ($act == 'thongke') {

?>
    <script>
        // type = ['', 'info', 'success', 'warning', 'danger'];
        var cacPhong = <?php echo $cacPhong ?>;
        var tongPhong = <?php echo $tongPhong ?>;
        console.log(cacPhong)
        for (let index = 1; index <= 12; index++) {
            cacPhong[index] = (cacPhong[index] / tongPhong) * 100;
            cacPhong[index] = cacPhong[index].toFixed(1);
        }

        var rowsThuNhap = <?php echo $json ?>;
        var cacMua = <?php echo $theoMua ?>;
        var tong = cacMua['xuan'] + cacMua['ha'] + cacMua['thu'] + cacMua['dong'];
        var xuan = (cacMua['xuan'] / tong) * 100;
        var ha = (cacMua['ha'] / tong) * 100;
        var thu = (cacMua['thu'] / tong) * 100;
        var dong = (cacMua['dong'] / tong) * 100;
        xuan = xuan.toFixed(1);
        ha = ha.toFixed(1);
        thu = thu.toFixed(1);
        dong = dong.toFixed(1);
        demo = {

            initChartist: function() {

                // Thông kê
                // var dataSales = {
                //     labels: ['9:00AM', '12:00AM', '3:00PM', '6:00PM', '9:00PM', '12:00PM', '3:00AM', '6:00AM'],
                //     series: [
                //         [287, 385, 490, 492, 554, 586, 698, 695, 752, 788, 846, 944],
                //         [67, 152, 143, 240, 287, 335, 435, 437, 539, 542, 544, 647],
                //         [23, 113, 67, 108, 190, 239, 307, 308, 439, 410, 410, 509]
                //     ]
                // };

                var optionsSales = {
                    lineSmooth: false,
                    low: 0,
                    high: 800,
                    showArea: true,
                    height: "245px",
                    axisX: {
                        showGrid: false,
                    },
                    lineSmooth: Chartist.Interpolation.simple({
                        divisor: 3
                    }),
                    showLine: false,
                    showPoint: false,
                };

                var responsiveSales = [
                    ['screen and (max-width: 640px)', {
                        axisX: {
                            labelInterpolationFnc: function(value) {
                                return value[0];
                            }
                        }
                    }]
                ];

                // Chartist.Line('#chartHours', dataSales, optionsSales, responsiveSales);


                var data1 = {
                    labels: ['Tháng 1', 'Tháng 2', 'Tháng 3', 'Tháng 4', 'Tháng 5', 'Tháng 6', 'Tháng 7', 'Tháng 8', 'Tháng 9', 'Tháng 10', 'Tháng 11', 'Tháng 12'],
                    series: [
                        [rowsThuNhap[1], rowsThuNhap[2], rowsThuNhap[3], rowsThuNhap[4], rowsThuNhap[5], rowsThuNhap[6], rowsThuNhap[7], rowsThuNhap[8], rowsThuNhap[9], rowsThuNhap[10], rowsThuNhap[11], rowsThuNhap[12]]
                        // [412, 243, 280, 580, 453, 353, 300, 364, 368, 410, 636, 695]
                    ]
                };
                var data2 = {
                    labels: ['Tháng 1', 'Tháng 2', 'Tháng 3', 'Tháng 4', 'Tháng 5', 'Tháng 6', 'Tháng 7', 'Tháng 8', 'Tháng 9', 'Tháng 10', 'Tháng 11', 'Tháng 12'],
                    series: [
                        [100, 100, 100, 100, 100, 100, 100, 100, 100, 100, 100, 100],
                        [cacPhong[1], cacPhong[2], cacPhong[3], cacPhong[4], cacPhong[5], cacPhong[6], cacPhong[7], cacPhong[8], cacPhong[9], cacPhong[10], cacPhong[11], cacPhong[12]]
                    ]
                };

                var options = {
                    seriesBarDistance: 10,
                    axisX: {
                        showGrid: false
                    },
                    height: "245px"
                };

                var responsiveOptions = [
                    ['screen and (max-width: 640px)', {
                        seriesBarDistance: 5,
                        axisX: {
                            labelInterpolationFnc: function(value) {
                                return value[0];
                            }
                        }
                    }]
                ];

                Chartist.Bar('#chartActivity', data1, options, responsiveOptions);
                Chartist.Bar('#chart', data2, options, responsiveOptions);
                // var dataPreferences = {
                //     series: [
                //         [25, 30, 20, 25]
                //     ]
                // };

                // var optionsPreferences = {
                //     donut: true,
                //     donutWidth: 40,
                //     startAngle: 0,
                //     total: 100,
                //     showLabel: false,
                //     axisX: {
                //         showGrid: false
                //     }
                // };

                // Chartist.Pie('#chartPreferences', dataPreferences, optionsPreferences);

                Chartist.Pie('#chartPreferences', {
                    labels: [xuan, ha, thu, dong],
                    series: [xuan, ha, thu, dong]
                });
            },
        }
    </script>
<?php
} ?>
<script type="text/javascript">
    $(document).ready(function() {

        demo.initChartist();

        // $.notify({
        // 	// icon: 'pe-7s-hammer',
        // 	// message: "Đây là admin"

        // },{
        //     type: 'info',
        //     timer: 4000
        // });

    });
</script>


</html>