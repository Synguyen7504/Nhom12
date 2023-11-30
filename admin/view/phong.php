<div class="content" style="margin-bottom: 155px;">
    <h2 style="margin-left: 20px; margin-bottom: 30px; margin-top: -10px;">Quản lý phòng</h2>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="header">
                        <h4 class="title">Tất cả phòng</h4>
                        <p class="category">Có thể thêm sửa xóa phòng</p>
                    </div>
                    <div class="content table-responsive table-full-width">
                        <table class="table table-hover table-striped">
                            <thead>
                                <th>Mã phòng</th>
                                <th>Tên khách sạn</th>
                                <th>Loại Phòng</th>
                                <th>Ảnh</th>
                                <th>Giá</th>
                                <th>Giường</th>
                                <th>Chức năng</th>
                            </thead>
                            <tbody>
                                <?php foreach ($rows as $key => $value) {

                                ?>
                                    <tr>
                                        <td><?php echo $value['maPhong'] ?></td>
                                        <td><?php echo $value['tenKhachSan'] ?></td>
                                        <td><?php echo $value['tenLoai'] ?></td>
                                        <td><img style="width: 70px; height: 70px; border-radius: 5px;" src="../<?php echo $value['image'] ?>" alt=""></td>
                                        <td><?php echo $value['giaPhong'] ?></td>
                                        <td><?php echo $value['giuong'] ?></td>
                                        <td><a href="index.php?act=updatePhong&maPhong=<?php echo $value['maPhong'] ?>">Sửa</a><a style="margin-left: 15px;" href="index.php?act=deletePhong&maPhong=<?php echo $value['maPhong'] ?>">Xóa</a></td>
                                    </tr>
                                <?php } ?>
                            </tbody>
                        </table>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>