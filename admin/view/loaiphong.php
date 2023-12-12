<div class="content" style="margin-bottom: 235px;">
    <h2 style="margin-left: 20px; margin-bottom: 30px; margin-top: -10px;">Quản lý phòng</h2>
    <form action="index.php?act=loaiphong" method="post" style="margin-left: 15px; margin-bottom: 20px;">
        <label for="" style="font-weight: 600;">Tìm kiếm theo mã:</label> <br>
        <input type="text" name="loc" style="height: 30px; border: 0.5px solid gray; border-radius: 3px;" placeholder="search" required>
        <input type="submit" value="Tìm kiếm" style=" height: 30px; background-color: #ffaa34; border: 0px solid black; border-radius: 3px; " onmouseover="this.style.backgroundColor='#ee9820'" onmouseout="this.style.backgroundColor='#ffaa34'">
    </form>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="header">
                        <h4 class="title">Tất cả phòng</h4>
                        <p class="category">Có thể thêm sửa xóa phòng</p>
                        <button type="button" style="border: 0px solid black; margin-top: 20px; padding: 9px; border-radius: 3px; background-color: #ffaa34; " onmouseover="this.style.backgroundColor='#ee9820'" onmouseout="this.style.backgroundColor='#ffaa34'"><a style=" color: white; font-weight: 550;" href="./index.php?act=themloai">Thêm Loại</a></button>
                    </div>
                    <div class="content table-responsive table-full-width">
                        <table class="table table-hover table-striped">
                            <thead>
                                <th>Mã loại</th>
                                <th>Loại Phòng</th>
                                <th>Chức năng</th>
                            </thead>
                            <tbody>
                                <?php
                                if ($rows[0] != null) {
                                    foreach ($rows as $key => $value) {
                                        $hoi = 'onclick="return confirm(\'Bạn Có Muốn Xóa Loại Phòng Này Không\')"';
                                ?>
                                        <tr>
                                            <td><?php echo $value['maLoaiPhong'] ?></td>
                                            <td><?php echo $value['tenLoai'] ?></td>
                                            <td><a href="index.php?act=updateLoaiPhong&maLoaiPhong=<?php echo $value['maLoaiPhong'] ?>">Sửa</a><a style="margin-left: 15px;" <?= $hoi ?> href="index.php?act=deleteLoaiPhong&maLoaiPhong=<?php echo $value['maLoaiPhong'] ?>">Xóa</a></td>
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