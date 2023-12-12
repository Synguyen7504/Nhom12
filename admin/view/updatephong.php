<style>
    label {
        display: block;
        margin-bottom: 8px;
    }

    .radio {
        width: 100%;
        display: flex;
        justify-content: space-around;
        color: white;
        flex-wrap: wrap;

        font-family: inherit;
        font-weight: bold;
    }

    .check {
        margin: 5px;
        flex-basis: 300px;
    }

    input[type=checkbox] {
        margin-right: 10px;
    }
</style>
<div class="header" style="margin-left: 50px;">
    <h4 class="title">Thêm Phòng </h4>
    <p class="category"> </p>
    <button type="button" style="border: 0px solid black; padding: 9px; border-radius: 3px; background-color: #ffaa34; " onmouseover="this.style.backgroundColor='#ee9820'" onmouseout="this.style.backgroundColor='#ffaa34'"><a style=" color: white; font-weight: 550;" href="./index.php?act=user">Quay lại</a></button>
</div>
<div class="login-box">

    <form method="post" enctype="multipart/form-data">
        <label for="" style="color: white;">Khách Sạn</label>
        <div class="user-box" style="margin-bottom: 20px;">
            <select name="KhachSan">
                <option value="<?php echo $tenKhachSan['maKhachSan'] ?>"><?php echo $tenKhachSan['tenKhachSan'] ?></option>
                <?php
                foreach ($khachSan as $key => $value) {
                    if ($value['maKhachSan'] != $row['maKhachSan']) {

                ?>
                        <option value="<?php echo $value['maKhachSan'] ?>"><?php echo $value['tenKhachSan'] ?></option>
                <?php
                    }
                }
                ?>
            </select>
        </div>
        <label for="" style="color: white;">Loại</label>
        <div class="user-box" style="margin-bottom: 20px;">
            <select name="loai">
                <option value="<?php echo $tenLoai['maLoaiPhong'] ?>"><?php echo $tenLoai['tenLoai'] ?></option>
                <?php
                foreach ($loai as $key => $value) {
                    if ($value['maLoaiPhong'] != $row['maLoaiPhong']) {

                ?>
                        <option value="<?php echo $value['maLoaiPhong'] ?>"><?php echo $value['tenLoai'] ?></option>
                <?php
                    }
                }
                ?>
            </select>
        </div>
        <div class="user-box">
            <input type="number" name="gia" required="" value="<?php echo $row['giaPhong'] ?>">
            <label>Giá</label>
        </div>
        <div class="user-box">
            <input type="text" name="giuong" required="" value="<?php echo $row['giuong'] ?>">
            <label>Giường</label>
        </div>
        <div class="user-box">
            <input type="number" name="dienTich" required="" value="<?php echo $row['dienTich'] ?>">
            <label>Diện tích</label>
        </div>
        <div class="user-box">
            <input type="file" multiple="multiple" name="file">
        </div>
        <center>
            <button type="submit" style="border: 0px solid black; padding: 9px; border-radius: 3px; background-color: #ffaa34;" onmouseover="this.style.backgroundColor='#ee9820'" onmouseout="this.style.backgroundColor='#ffaa34'">
                Sửa
                <span></span>
            </button>
        </center>
    </form>
</div>