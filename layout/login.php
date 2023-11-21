<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/main.css">
</head>
<body style="background-image: url(images/hero_4.jpg);">
    <div class="login-wrap" style="margin-top: 30px;">
        <div class="login-html" style="border-radius: 10px;">
            <input id="tab-11" type="radio" name="tab" class="sign-in" checked><label for="tab-11" class="tab">Đăng Nhập</label>
            <input id="tab-21" type="radio" name="tab" class="sign-up"><label for="tab-21" class="tab">Đăng ký</label>
            <div class="login-form">
                <!-- login -->
              <form action="" method="post">
              <div class="sign-in-htm">
                    <div class="group">
                        <label for="user" class="label">Tên Đăng nhập</label>
                        <input id="user" type="text" class="input" name="tk">
                    </div>
                    <div class="group">
                        <label for="pass" class="label">Mật khẩu</label>
                        <input id="pass" type="password" class="input" data-type="password" name="mk">
                    </div>
                    <div class="group">
                        <input id="check" type="checkbox" class="check" >
                        <label for="check"><span class="icon"></span>Giữ đăng nhập</label>
                    </div>
                    <div class="group">
                        <input type="submit" class="button" value="Đăng nhập" name="dangnhap">
                    </div>
                    <div class="hr"></div>
                    <div class="foot-lnk">
                        <a href="forgot.html">Quên Mật khẩu?</a>
                    </div>
                </div>
              </form>
              <!-- end login -->
             <!-- sig in -->
             <form action="" method="post">
             <div class="sign-up-htm">
             <?php 
             if (!empty($loi)) {
                echo "<h4 class='loidn'>". implode($loi)."</h4>";
             }
             ?>
                    <div class="group">
                        <label for="user" class="label">Tên Đăng nhập</label>
                        <input id="user" type="text" class="input" name="namedk">
                    </div>
                    <div class="group">
                        <label for="pass" class="label">Mật khẩu</label>
                        <input id="pass" type="password" class="input" data-type="password" name="pas1">
                    </div>
                    <div class="group">
                        <label for="pass" class="label">Lặp lại mật khẩu</label>
                        <input id="pass" type="password" class="input" data-type="password" name="pas2">
                    </div>
                    <div class="group">
                        <label for="pass" class="label">Số Điện Thoại</label>
                        <input id="pass" type="text" class="input" name="sdt">
                    </div>
                    <div class="group">
                        <input type="submit" class="button" value="Đăng ký" name="dangki">
                    </div>
                    <div class="hr"></div>
                    <div class="foot-lnk">
                        <label for="tab-1">Đã có tài khoản?</a>
                    </div>
                </div>
             </form>
             <!-- end sig -->
            </div>
        </div>
    </div>
</body>
</html>