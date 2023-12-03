<div class="content" style="margin-bottom: 155px;">
    <h2 style="margin-left: 20px; margin-bottom: 30px; margin-top: -10px;">Quản lý khách sạn</h2>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="header">
                        <h4 class="title">Tất cả khách sạn</h4>
                        <p class="category">Có thể thêm sửa xóa </p>
                        <button type="button"><a href="./index.php?act=themks">Thêm khách sạn</a></button>
                    </div>
                    <div class="content table-responsive table-full-width">
                        <table class="table table-hover table-striped">
                            <thead>
                                <th>Mã phòng</th>
                                <th>Tên khách sạn</th>
                                <th>Ảnh 1</th>
                                <th>Ảnh 2</th>
                                <th>Ảnh 3</th>
                                <th>Giá trung bình</th>
                                <th>Địa điểm</th>
                                <th>Sao</th>
                                <th>Chức năng</th>
                            </thead>
                            <tbody>
                                <?php foreach ($rows as $key => $value) {

                                ?>
                                    <tr>
                                        <td><?php echo $value['maKhachSan'] ?></td>
                                        <td><?php echo $value['tenKhachSan'] ?></td>
                                        <td><img style="width: 70px; height: 70px; border-radius: 5px;" src="../<?php echo $value['anh1'] ?>" alt=""></td>
                                        <td><img style="width: 70px; height: 70px; border-radius: 5px;" src="../<?php echo $value['anh2'] ?>" alt=""></td>
                                        <td><img style="width: 70px; height: 70px; border-radius: 5px;" src="../<?php echo $value['anh3'] ?>" alt=""></td>
                                        <td><?php echo $value['khoangGia'] ?></td>
                                        <td><?php echo $value['diaDiem'] ?></td>
                                        <td><?php echo $value['danhGia']; ?>
                                        </td>
                                        <td><a href="index.php?act=updateKhachSan&maKhachSan=<?php echo $value['maKhachSan'] ?>">Sửa</a><a style="margin-left: 15px;" href="index.php?act=deleteKhachSan&maKhachSan=<?php echo $value['maKhachSan'] ?>">Xóa</a></td>
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