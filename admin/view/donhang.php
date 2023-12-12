<div class="content" style="margin-bottom: 155px;">
    <h2 style="margin-left: 20px; margin-bottom: 30px; margin-top: -10px;">Quản lý phòng</h2>
    <form action="index.php?act=donhang" method="post" style="margin-left: 15px; margin-bottom: 20px;">
        <label for="" style="font-weight: 600;">Tìm kiếm theo mã:</label> <br>
        <input type="text" name="loc" style="height: 30px; border: 0.5px solid gray; border-radius: 3px;" placeholder="search" required>
        <input type="submit" value="Tìm kiếm" style=" height: 30px; background-color: #ffaa34; border: 0px solid black; border-radius: 3px; " onmouseover="this.style.backgroundColor='#ee9820'" onmouseout="this.style.backgroundColor='#ffaa34'">
    </form>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="header">
                        <h4 class="title">Tất cả đơn hàng</h4>
                        <p class="category">Có thể thêm sửa xóa phòng</p>
                    </div>
                    <div class="content table-responsive table-full-width">
                        <table class="table table-hover table-striped">
                            <thead>
                                <th>Mã đơn hàng</th>
                                <th>Mã khách hàng</th>
                                <th>Tổng đơn hàng</th>
                                <th>Ngày đặt hàng</th>
                                <th>Ảnh thanh toán</th>
                                <th>Tên</th>
                                <th>Email</th>
                                <th>Số điện thoại</th>
                                <th>Mã phòng</th>
                                <th>Ngày nhận phòng</th>
                                <th>Ngày trả phòng</th>
                                <th>Trạng thái</th>
                                <th>Chức năng</th>
                            </thead>
                            <tbody>

                                <?php
                                if ($rows[0] != null) {

                                    foreach ($rows as $key => $value) {
                                ?>
                                        <tr>
                                            <td><?php echo $value['maDonHang'] ?></td>
                                            <td><?php echo $value['maKhachHang'] ?></td>
                                            <td><?php echo $value['tongDonHang'] ?></td>
                                            <td><?php echo $value['ngayDat'] ?></td>
                                            <td><img style="width: 70px; height: 70px; border-radius: 5px;" src="../<?php echo $value['image'] ?>" alt=""></td>
                                            <td><?php echo $value['ten'] ?></td>
                                            <td><?php echo $value['email'] ?></td>
                                            <td><?php echo $value['soDienThoai'] ?></td>
                                            <td><?php echo $value['maPhong'] ?></td>
                                            <td><?php echo $value['ngayNhanPhong'] ?></td>
                                            <td><?php echo $value['ngayTraPhong'] ?></td>
                                            <?php if ($value['trangThai'] == 0) { ?>
                                                <td style="color: yellow;">Đơn đang chờ sử lý</td>
                                            <?php
                                            } else { ?>
                                                <td style="color: green;">Đơn hàng thành công</td>
                                            <?php } ?>

                                            <td> <?php if ($value['trangThai'] == 0) { ?>
                                                    <a href="index.php?act=updatedonhang&maDonHang=<?php echo $value['maDonHang'] ?>">Thành công</a><?php } ?><a style="margin-left: 15px;" href="index.php?act=deletedonhang&maDonHang=<?php echo $value['maDonHang'] ?>" onclick="return confirm('Bạn chắc chắn muốn xóa')">Xóa</a>
                                            </td>
                                        </tr>
                                <?php }
                                } ?>
                            </tbody>
                        </table>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>