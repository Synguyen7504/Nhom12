<div class="container text-white py-5 text-center" data-aos="fade-up">
    <h1 class="display-4" style="color: black;">Thông tin cá nhân</h1>
    <p class="lead mb-0" style="color: black;">Chỉnh sửa</p>

</div>
<style>
    #show {
        position: absolute;
        margin-top: -41px;
        background: none;
        border: none;
        left: 210px;
        font-size: 20px;

    }
</style>
<script>
    function togglePasswordVisibility() {
        var passwordInput = document.getElementById("password");

        // Kiểm tra trạng thái của input password
        if (passwordInput.type === "password") {
            passwordInput.type = "text";
        } else {
            passwordInput.type = "password";
        }
    }
</script>
<section style="margin-top: 90px; margin-bottom: 50px;">

    <!-- <div class="container-fluid"> -->
    <div class="row" style="display: flex; justify-content: center; align-items: center; margin: 20px 0 20px 0">
        <div class="col-md-7">
            <div class="card">

                <div class="col-md-12" style="margin-top: -70px; " data-aos="fade">
                    <div class="card card-user" style="border: 0px solid white; background-color: #f1f1f1;">
                        <div class="image text-center">
                            <img src="images/person_4.jpg" alt="..." style="border-radius: 100px; width: 20%; height: 20%;" />
                        </div>
                        <div class="content">
                            <p class="description text-center"> Khám phá thế giới với Sogo Booking - Nơi tạo nên những kỷ niệm đặc biệt của bạn!
                            </p>
                        </div>
                    </div>
                </div>

                <div class="content" style="margin: 00px 20px 20px 20px;">
                    <form method="post">
                        <div class="row" data-aos="fade">
                            <div class="col-md-5">
                                <div class="form-group">
                                    <label>Tên đang nhập:</label>
                                    <input type="text" class="form-control" disabled placeholder="Company" value="<?= $tenDangNhap ?>">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Mật khẩu</label>
                                    <input type="password" class="form-control" disabled placeholder="Username" value="<?= $matKhau ?>" id="password">
                                    <button id="show" type="button" onclick="togglePasswordVisibility()"><i class="fa-solid fa-eye"></i></button>
                                </div>
                            </div>
                            <div class="col-md-3" style="text-align: center; display: inline-block; margin-top: 38px; margin-left: -35px;">
                                <div class="form-group">
                                    <a href="./index.php?act=doimk"><button type="button" class="btn btn-info btn-fill pull-right" style="background-color: #23272b; border: 0px; border-radius: 7px;">Đổi
                                            mật khẩu</button></a>
                                </div>
                            </div>
                        </div>

                        <div class="row" data-aos="fade">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Họ Tên</label>
                                    <input type="text" class="form-control" placeholder="Company" name="hoten" value="<?= $tenKhachHang ?>">
                                </div>
                            </div>
                            <!-- <div class="col-md-6">
                                <div class="form-group">
                                    <label>Tên</label>
                                    <input type="text" class="form-control" placeholder="Last Name" value="Andrew">
                                </div>
                            </div> -->
                        </div>

                        <div class="row" data-aos="fade">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Địa chỉ</label>
                                    <input type="text" class="form-control" name="diachi" placeholder="Hà nội - Việt Nam" value="<?= $diaChi ?>">
                                </div>
                            </div>
                        </div>

                        <div class="row" data-aos="fade">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Email</label>
                                    <input type="text" class="form-control" name="email" placeholder="@gmail.com" value="<?= $email ?>">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Số điện thoại</label>
                                    <input type="text" class="form-control" name="sdt" placeholder="Số điện thoại" value="<?= $soDienThoai ?>">
                                    <input type="text" class="form-control" name="sdt" placeholder="Số điện thoại" value="<?=$soDienThoai?>">
                            </div>
                        <div class="row" data-aos="fade">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Giới thiệu</label>
                                    <textarea rows="5" class="form-control" name="gioithieu" placeholder="Here can be your description" value="<?= $gioiThieu ?>"></textarea>
                                </div>
                            </div>
                        </div>

                        <button type="submit" name="sup" class="btn btn-info btn-fill pull-right" style="background-color: #23272b; border: 0px; border-radius: 7px;" data-aos="fade">Cập nhập tài khoản</button>
                        <div class="clearfix"></div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>