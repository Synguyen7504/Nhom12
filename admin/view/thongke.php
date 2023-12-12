<div class="content">
    <div class="container-fluid">
        <div class="row">
            <!-- <div class="col-md-8">
                <div class="card">
                    <div class="header">
                        <h4 class="title">Users Behavior</h4>
                        <p class="category">24 Hours performance</p>
                    </div>
                    <div class="content">
                        <div id="chartHours" class="ct-chart"></div>
                        <div class="footer">
                            <div class="legend">
                                <i class="fa fa-circle text-info"></i> Open
                                <i class="fa fa-circle text-danger"></i> Click
                                <i class="fa fa-circle text-warning"></i> Click Second Time
                            </div>
                            <hr>
                            <div class="stats">
                                <i class="fa fa-history"></i> Updated 3 minutes ago
                            </div>
                        </div>
                    </div>
                </div>
            </div> -->
            <div class="col-md-4">
                <div class="card">

                    <div class="header">
                        <h4 class="title">Lượng khách đặt phòng theo mùa</h4>
                        <p class="category">Thống kê lượng đặt phòng theo mùa</p>
                    </div>
                    <div class="content">
                        <div id="chartPreferences" class="ct-chart ct-perfect-fourth"></div>

                        <div class="footer">
                            <div class="legend">
                                <i class="fa fa-circle text-success"></i>% Mùa xuân
                                <i class="fa fa-circle text-danger"></i>% Mùa hạ
                                <i class="fa fa-circle text-warning"></i>% Mùa thu
                                <i class="fa fa-circle text-info"></i>% Mùa đông
                            </div>
                            <hr>
                            <div class="stats">
                                <h5 style="color: black;">Khách đặt nhiều nhất theo mùa: <?php echo $max ?></h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-8">
                <div class="card ">
                    <div class="header">
                        <h4 class="title">Thu nhập</h4>
                        <p class="category">Thu nhập theo từng tháng trong năm</p>
                    </div>
                    <div class="content">
                        <div id="chartActivity" class="ct-chart"></div>

                        <div class="footer">
                            <div class="legend">
                                <i class="fa fa-circle text-info"></i> Tổng doanh thu trong tháng VNĐ
                                <!-- <i class="fa fa-circle text-danger"></i> BMW 5 Series -->
                            </div>
                            <hr>
                            <div class="stats">
                                <!-- <i class="fa fa-check"></i> -->
                                <h5 style="color: black;">Tổng doanh thu của năm: <?php $tong = addDotToNumber($tong);
                                                                                    echo $tong ?> vnđ</h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>



        <div class="row">
            <div class="col-md-6">
                <div class="card ">
                    <div class="header">
                        <h4 class="title">Tỷ lệ lập đầy của phòng</h4>
                        <p class="category">Thu nhập theo từng tháng trong năm</p>
                    </div>
                    <div class="content">
                        <div id="chart" class="ct-chart"></div>

                        <div class="footer">
                            <div class="legend">
                                <i class="fa fa-circle text-info"></i> Tổng số phòng
                                <i class="fa fa-circle text-danger"></i> % Tỷ lệ lấp đầy
                            </div>
                            <hr>
                            <div class="stats">
                                <!-- <i class="fa fa-check"></i> -->
                                <h5 style="color: black;">Tổng phòng: <?php echo $tongPhong ?></h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card ">
                    <div class="header">
                        <h4 class="title">Đơn hàng</h4>
                        <p class="category">Thống kê số đơn hàng</p>
                    </div>
                    <div class="content">
                        <div class="table-full-width">
                            <table class="table">
                                <tbody>
                                    <tr>
                                        <td><i class="fa fa-circle text-success"></i> Đã hoàn thành: <?php echo $hoanThanh ?> </td>
                                        <td></td>
                                        <td class="td-actions text-right">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><i class="fa fa-circle text-warning"></i> Đang sử lý: <?php echo $dangSuLy ?></td>
                                        <td></td>
                                        <td class="td-actions text-right">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><i class="fa fa-circle text-danger"></i> Đã hủy: 0</td>
                                        <td></td>
                                        <td class="td-actions text-right">
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>

                        <div class="footer">
                            <hr>
                            <div class="stats">
                                <h5 style="color: black;">Tổng đơn hàng: <?php echo $tongDon ?></h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>