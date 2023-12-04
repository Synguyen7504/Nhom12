<div class="content" style="margin-bottom: 235px;">
    <h2 style="margin-left: 20px; margin-bottom: 30px; margin-top: -10px;">Quản lý phòng</h2>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="header">
                        <h4 class="title">Tất cả phòng</h4>
                        <p class="category">Có thể thêm sửa xóa phòng</p>
                        <button type="button"><a href="./index.php?act=themloai">Thêm Loại</a></button>
                    </div>
                    <div class="content table-responsive table-full-width">
                        <table class="table table-hover table-striped">
                            <thead>
                                <th>Mã loại</th>
                                <th>Loại Phòng</th>
                                <th>Chức năng</th>
                            </thead>
                            <tbody>
                                <?php foreach ($rows as $key => $value) {
                                      $hoi='onclick="return confirm(\'Bạn Có Muốn Xóa Loại Phòng Này Không\')"';
                                ?>
                                    <tr>
                                        <td><?php echo $value['maLoaiPhong'] ?></td>
                                        <td><?php echo $value['tenLoai'] ?></td>
                                        <td><a href="index.php?act=updateLoaiPhong&maLoaiPhong=<?php echo $value['maLoaiPhong'] ?>">Sửa</a><a style="margin-left: 15px;"<?=$hoi?> href="index.php?act=deleteLoaiPhong&maLoaiPhong=<?php echo $value['maLoaiPhong'] ?>">Xóa</a></td>
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