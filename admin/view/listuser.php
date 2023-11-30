<div class="content">
    <h2 style="margin-left: 20px; margin-bottom: 30px; margin-top: -10px;">Quản lý người dùng</h2>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="header">
                        <h4 class="title">Thống kê tài khoản đã được đăng ký</h4>
                        <p class="category">Có thể chính sửa trạng thái của tài khỏan</p>
                    </div>
                    <div class="content table-responsive table-full-width">
                        <?php foreach ($rows as $key => $value) {
                        ?>
                            <div class="col-md-4">
                                <div class="card card-user" style="margin-top: 20px;">
                                    <div class="image">
                                        <img src="https://ununsplash.imgix.net/photo-1431578500526-4d9613015464?fit=crop&fm=jpg&h=300&q=75&w=400" alt="..." />
                                    </div>
                                    <div class="content">
                                        <div class="author">
                                            <a href="index.php?act=updateUser&maKhachHang=<?php echo $value['maKhachHang'] ?>">
                                                <img class="avatar border-gray" src="../<?php echo $value['avatar'] ?>" alt="..." />
                                                <h4 class="title">Tên: <?php echo $value['tenKhachHang'] ?><br />
                                                    <small style="color: black;">Tên đăng nhập: <?php echo $value['tenDangNhap'] ?></small> <br>
                                                    <small style="color: black;">Email: <?php echo $value['email'] ?></small> <br>
                                                    <small style="color: black;">Số điện thoại: <?php echo $value['soDienThoai'] ?></small>
                                                </h4>
                                            </a>
                                            <hr>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php
                        }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>