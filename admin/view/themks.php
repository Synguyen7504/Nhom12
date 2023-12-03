
<style>
      label {
            display: block;
            margin-bottom: 8px;
        }
        .radio{
            width: 100%;
    display: flex;
    justify-content: space-around;
    color: white;
    flex-wrap: wrap;

    font-family: inherit;
    font-weight: bold;
        }
        .check{
            margin: 5px;
            flex-basis: 300px;
        }
        input[type=checkbox]{
            margin-right: 10px;
}
        
</style>
<div class="header"style="
    margin-left: 50px;
">
 <?php
                echo "<h6 class='loidn'>" . implode($loi) . "</h6>";
                ?>
                        <h4 class="title">Thêm khách sạn</h4>
                        <p class="category"> </p> 
                        <button type="button"><a href="./index.php?act=themks">Quay lại</a></button>
                    </div>
<div class="login-box">
 
  <form method="post" enctype="multipart/form-data">
    <div class="user-box">
      <input type="text" name="name" required="">
      <label>Tên khách sạn</label>
    </div>
    <div class="user-box">
      <input type="text" name="diadiem" required="">
      <label>Địa điểm</label>
    </div>
    <div class="user-box">
      <input type="text" name="tinh" required="">
      <label>Tỉnh thành</label>
    </div>
    <div class="user-box">
      <input type="number" name="gia" required="">
      <label>Khoảng giá</label>
    </div>
    <div class="user-box">
      <input type="number" name="sao" required="">
      <label>Đánh giá</label>
    </div>
    <div class="user-box">
      <input type="file" multiple="multiple" name="img[]" required="" >
    </div>
    <div class="radio">
        <div class="check">
            <input type="checkbox" name="nhah">Nhà Hàng
        </div>
        <div class="check">
            <input type="checkbox" name="beboi">Bể Bơi
        </div>
        <div class="check">
            <input type="checkbox" name="wifi">Wifi
        </div>
        <div class="check">
            <input type="checkbox" name="gym">Nhà Gym
        </div>
        <div class="check">
            <input type="checkbox" name="maylanh">Máy lạnh
        </div>
        <div class="check">
            <input type="checkbox" name="thuoc">Phòng hút thuốc
        </div>
    </div>
    <center>
    <button type="submit">
           Gửi đi
       <span></span>
    </button></center>
  </form>
</div>