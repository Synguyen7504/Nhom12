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

    <h4 class="title">Thêm Phòng</h4>
        <p class="category"> </p>
        <button type="button" style="border: 0px solid black; padding: 9px; border-radius: 3px; background-color: #ffaa34; " onmouseover="this.style.backgroundColor='#ee9820'" onmouseout="this.style.backgroundColor='#ffaa34'"><a style=" color: white; font-weight: 550;" href="./index.php?act=user">Quay lại</a></button>
</div>
<div class="login-box">

    <form method="post" enctype="multipart/form-data">
        <label for="" style="color: white;">Khách Sạn</label>
        <div class="user-box" style="margin-bottom: 20px;">
            <select name="KhachSan">
                <?php
                foreach ($khachSan as $key => $value) {
                ?>
                    <option value="<?php echo $value['maKhachSan'] ?>"><?php echo $value['tenKhachSan'] ?></option>
                <?php
                }
                ?>
            </select>
        </div>
        <label for="" style="color: white;">Khách Sạn</label>
        <div class="user-box" style="margin-bottom: 20px;">
            <select name="loai">
                <?php
                foreach ($loai as $key => $value) {
                ?>
                    <option value="<?php echo $value['maLoaiPhong'] ?>"><?php echo $value['tenLoai'] ?></option>
                <?php
                }
                ?>
            </select>
        </div>
        <div class="user-box">
            <input type="number" name="gia" required="">
            <label>Giá</label>
        </div>
        <div class="user-box">
            <input type="text" name="giuong" required="">
            <label>Giường</label>
        </div>
        <div class="user-box">
            <input type="number" name="dienTich" required="">
            <label>Diện tích</label>
        </div>
        <div class="user-box">
            <input type="file" multiple="multiple" name="file" required="">
        </div>
        <center>
            <button type="submit" style="border: 0px solid black; padding: 9px; border-radius: 3px; background-color: #ffaa34;" onmouseover="this.style.backgroundColor='#ee9820'" onmouseout="this.style.backgroundColor='#ffaa34'">
                Thêm
                <span></span>
            </button>
        </center>
    </form>
</div>