<div class="content">
    <h2 style="margin-left: 20px; margin-bottom: 30px; margin-top: -10px;">Quản lý người dùng</h2>
    <form action="index.php?act=user" method="post" style="margin-left: 15px; margin-bottom: 20px;">
        <label for="" style="font-weight: 600;">Tìm kiếm theo mã:</label> <br>
        <input type="text" name="loc" style="height: 30px; border: 0.5px solid gray; border-radius: 3px;" placeholder="search" required>
        <input type="submit" value="Tìm kiếm" style=" height: 30px; background-color: #ffaa34; border: 0px solid black; border-radius: 3px; " onmouseover="this.style.backgroundColor='#ee9820'" onmouseout="this.style.backgroundColor='#ffaa34'">
    </form>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="header">
                        <h4 class="title">Thống kê tài khoản đã được đăng ký</h4>
                        <p class="category">Có thể chính sửa trạng thái của tài khỏan</p>
                        <button type="button" style="border: 0px solid black; margin-top: 20px; padding: 9px; border-radius: 3px; background-color: #ffaa34; " onmouseover="this.style.backgroundColor='#ee9820'" onmouseout="this.style.backgroundColor='#ffaa34'"><a style=" color: white; font-weight: 550;" href="./index.php?act=adduser">Thêm tài khoản</a></button>
                    </div>
                    <div class="content table-responsive table-full-width">
                        <?php
                        if ($rows[0] != null) {
                            foreach ($rows as $key => $value) {
                        ?>
                                <div class="col-md-4">
                                    <div class="card card-user" style="margin-top: 20px;">
                                        <div class="image">
                                            <img src="https://ununsplash.imgix.net/photo-1431578500526-4d9613015464?fit=crop&fm=jpg&h=300&q=75&w=400" alt="..." />
                                        </div>
                                        <div class="content">
                                            <div class="author">
                                                <img class="avatar border-gray" src="../<?php echo $value['avatar'] ?>" alt="..." />
                                                <h4 class="title">Tên: <?php echo $value['tenKhachHang'] ?><br />
                                                    <small style="color: black;">Tên đăng nhập: <?php echo $value['tenDangNhap'] ?></small> <br>
                                                    <small style="color: black;">Email: <?php echo $value['email'] ?></small> <br>
                                                    <small style="color: black;">Số điện thoại: <?php echo $value['soDienThoai'] ?></small>
                                                </h4>
                                                <hr>
                                                <br>
                                                <a style="margin-right: 120px; font-size: larger;" href="index.php?act=updateuser&maKhachHang=<?php echo $value['maKhachHang'] ?>">Sửa</a>
                                                <a style="margin-left: 0px; font-size: larger;" href="index.php?act=deleteuser&maKhachHang=<?php echo $value['maKhachHang'] ?>" onclick="return confirm('Bạn chắc chắn muốn xóa')">Xóa</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                        <?php
                            }
                        }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>