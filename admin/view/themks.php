
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
                        <h4 class="title">Thêm khách sạn</h4>
                        <p class="category"> </p> 
                        <button type="button"><a href="./index.php?act=themks">Quay lại</a></button>
                    </div>
<div class="login-box">
 
  <form>
    <div class="user-box">
      <input type="text" name="" required="">
      <label>Tên khách sạn</label>
    </div>
    <div class="user-box">
      <input type="password" name="" required="">
      <label>Địa điểm</label>
    </div>
    <div class="user-box">
      <input type="password" name="" required="">
      <label>Tỉnh thành</label>
    </div>
    <div class="user-box">
      <input type="password" name="" required="">
      <label>Khoảng giá</label>
    </div>
    <div class="user-box">
      <input type="password" name="" required="">
      <label>Đánh giá</label>
    </div>
    <div class="user-box">
      <input type="file" multiple name="" required="">
    </div>
    <div class="radio">
        <div class="check">
            <input type="checkbox">Nhà Hàng
        </div>
        <div class="check">
            <input type="checkbox">Bể Bơi
        </div>
        <div class="check">
            <input type="checkbox">Wifi
        </div>
        <div class="check">
            <input type="checkbox">Nhà Gym
        </div>
    </div>
    

    <center>
    <a href="#">
           Gửi đi
       <span></span>
    </a></center>
  </form>
</div>