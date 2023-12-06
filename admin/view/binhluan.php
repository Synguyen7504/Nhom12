<div class="content" style="margin-bottom: 235px;">
    <h2 style="margin-left: 20px; margin-bottom: 30px; margin-top: -10px;">Quản lý bình luận</h2>
    <form action="index.php?act=binhluan" method="post" style="margin-left: 15px; margin-bottom: 20px;">
        <label for="" style="font-weight: 600;">Tìm kiếm theo mã:</label> <br>
        <input type="text" name="loc" style="height: 30px; border: 0.5px solid gray; border-radius: 3px;" placeholder="search" required>
        <input type="submit" value="Tìm kiếm" style=" height: 30px; background-color: #ffaa34; border: 0px solid black; border-radius: 3px; " onmouseover="this.style.backgroundColor='#ee9820'" onmouseout="this.style.backgroundColor='#ffaa34'">
    </form>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="header">
                        <h4 class="title">Tất cả bình luận</h4>
                        <p class="category">Có thể xóa bình luận</p>
                    </div>
                    <div class="content table-responsive table-full-width">
                        <table class="table table-hover table-striped">
                            <thead>
                                <th>Mã bình luận</th>
                                <th>Số sao đánh giá</th>
                                <th>Nội dung</th>
                                <th>Mã khách sạn</th>
                                <th>Mã khách hàng</th>
                                <th>Chức năng</th>
                            </thead>
                            <tbody>
                                <?php
                                if ($rows[0] != null) {
                                    foreach ($rows as $key => $value) {
                                ?>
                                        <tr>
                                            <td><?php echo $value['ma_bl'] ?></td>
                                            <td><?php echo $value['so_sao'] ?></td>
                                            <td><?php echo $value['noi_dung'] ?></td>
                                            <td><?php echo $value['ma_khs'] ?></td>
                                            <td><?php echo $value['ma_kh'] ?></td>
                                            <td><a style="margin-left: 0px; font-size: larger;" href="index.php?act=deletebinhluan&maBinhLuan=<?php echo $value['ma_bl'] ?>" onclick="return confirm('Bạn chắc chắn muốn xóa')">Xóa</a></td>
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