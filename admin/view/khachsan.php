<div class="content" style="margin-bottom: 155px;">
    <h2 style="margin-left: 20px; margin-bottom: 30px; margin-top: -10px;">Quản lý khách sạn</h2>
    <form action="index.php?act=khachsan" method="post" style="margin-left: 15px; margin-bottom: 20px;">
        <label for="" style="font-weight: 600;">Tìm kiếm theo mã:</label> <br>
        <input type="text" name="loc" style="height: 30px; border: 0.5px solid gray; border-radius: 3px;" placeholder="search" required>
        <input type="submit" value="Tìm kiếm" style=" height: 30px; background-color: #ffaa34; border: 0px solid black; border-radius: 3px; " onmouseover="this.style.backgroundColor='#ee9820'" onmouseout="this.style.backgroundColor='#ffaa34'">
    </form>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="header">
                        <h4 class="title">Tất cả khách sạn</h4>
                        <p class="category">Có thể thêm sửa xóa </p>
                        <button type="button" style="border: 0px solid black; margin-top: 20px; padding: 9px; border-radius: 3px; background-color: #ffaa34; " onmouseover="this.style.backgroundColor='#ee9820'" onmouseout="this.style.backgroundColor='#ffaa34'"><a style=" color: white; font-weight: 550;" href="./index.php?act=themks">Thêm khách sạn</a></button>
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
                                <?php
                                if ($rows[0] != null) {
                                    foreach ($rows as $key => $value) {
                                        $hoi = 'onclick="return confirm(\'Bạn Có Muốn Xóa Khách Sạn Này Không\')"';
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
                                            <td><a href="index.php?act=updateKhachSan&maKhachSan=<?php echo $value['maKhachSan'] ?>">Sửa</a><a <?= $hoi ?> style="margin-left: 15px;" href="index.php?act=deleteKhachSan&maKhachSan=<?php echo $value['maKhachSan'] ?>">Xóa</a></td>
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