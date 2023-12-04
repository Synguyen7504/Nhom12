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

    <h4 class="title">Thêm khách sạn</h4>
    <p class="category"> </p>
    <button type="button" style="border: 0px solid black; padding: 9px; border-radius: 3px; background-color: #ffaa34; " onmouseover="this.style.backgroundColor='#ee9820'" onmouseout="this.style.backgroundColor='#ffaa34'"><a style=" color: white; font-weight: 550;" href="./index.php?act=user">Quay lại</a></button>
</div>
<div class="login-box">

    <form method="post" enctype="multipart/form-data">
        <div class="user-box">
            <input type="text" name="name" required="">
            <label>Tên Khách hàng</label>
        </div>
        <div class="user-box">
            <input type="text" name="email" required="">
            <label>Email</label>
        </div>
        <div class="user-box">
            <input type="text" name="phone" required="">
            <label>Số điện thoại</label>
        </div>
        <div class="user-box">
            <input type="text" name="username" required="">
            <label>Tên đăng nhập</label>
        </div>
        <div class="user-box">
            <input type="text" name="pass" required="">
            <label>Mật khẩu</label>
        </div>
        <label for="" style="color: white;">Quyền</label>
        <div class="user-box" style="margin-bottom: 20px;">
            <select name="quyen">
                <option value="staff">Nhân Viên</option>
                <option value="admin">Admin</option>
            </select>
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