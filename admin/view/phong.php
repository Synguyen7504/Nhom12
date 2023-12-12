<div class="content" style="margin-bottom: 155px;">
    <h2 style="margin-left: 20px; margin-bottom: 30px; margin-top: -10px;">Quản lý phòng</h2>
    <form action="index.php?act=phong" method="post" style="margin-left: 15px; margin-bottom: 20px;">
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
                        <button type="button" style="border: 0px solid black; margin-top: 20px; padding: 9px; border-radius: 3px; background-color: #ffaa34; " onmouseover="this.style.backgroundColor='#ee9820'" onmouseout="this.style.backgroundColor='#ffaa34'"><a style=" color: white; font-weight: 550;" href="./index.php?act=addphong">Thêm Phòng</a></button>
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
                                <?php
                                if ($rows[0] != null) {
                                    foreach ($rows as $key => $value) {

                                ?>
                                        <tr>
                                            <td><?php echo $value['maPhong'] ?></td>
                                            <td><?php echo $value['tenKhachSan'] ?></td>
                                            <td><?php echo $value['tenLoai'] ?></td>
                                            <td><img style="width: 70px; height: 70px; border-radius: 5px;" src="../<?php echo $value['image'] ?>" alt=""></td>
                                            <td><?php echo $value['giaPhong'] ?></td>
                                            <td><?php echo $value['giuong'] ?></td>
                                            <td><a href="index.php?act=updatephong&maPhong=<?php echo $value['maPhong'] ?>">Sửa</a><a style="margin-left: 15px;" href="index.php?act=deletephong&maPhong=<?php echo $value['maPhong'] ?>" onclick="return confirm('Bạn chắc chắn muốn xóa')">Xóa</a></td>
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