<section class="section slider-section bg-light">
  <div class="container text-white py-5 text-center" data-aos="fade-up" style="margin-top: -100px">
    <h1 class="display-4">Khách Sạn</h1>
    <p class="lead mb-0" style="color: black;">Đặt Phòng</p>

  </div>
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="home-slider major-caousel owl-carousel mb-5" data-aos="fade-up" data-aos-delay="200">
          <div class="slider-item">
            <a href="<?php echo $row['anh1'] ?>" data-fancybox="images" data-caption="Caption for this image" "><img src=" <?php echo $row['anh1'] ?> " alt=" Image placeholder" class="img-fluid"></a>
          </div>
          <div class="slider-item">
            <a href="<?php echo $row['anh2'] ?>" data-fancybox="images" data-caption="Caption for this image" "><img src=" <?php echo $row['anh2'] ?> " alt=" Image placeholder" class="img-fluid"></a>
          </div>
          <div class="slider-item">
            <a href="<?php echo $row['anh3'] ?>" data-fancybox="images" data-caption="Caption for this image" "><img src=" <?php echo $row['anh3'] ?> " alt=" Image placeholder" class="img-fluid"></a>
          </div>
          <div class="slider-item">
            <a href="<?php echo $row['anh4'] ?>" data-fancybox="images" data-caption="Caption for this image" "><img src=" <?php echo $row['anh4'] ?> " alt=" Image placeholder" class="img-fluid"></a>
          </div>
        </div>
        <!-- END slider -->
      </div>

    </div>

  </div>
  <div class="show_phong" style="margin-top: -30px;">
    <div class="grid_slyde">
      <div class="box2"></div>
      <div class="box3"></div>
      <div class="box4"></div>
    </div>
    <div class="box_room">
      <div class="lef">
        <div class="loai">
          <span>Khách sạn:</span>
          <?php
          for ($i = 0; $i < $row['danhGia']; $i++) {
          ?>
            <i class="fas fa-star"></i>
          <?php
          }
          ?>
        </div>
        <div class="name">
          <p class="ten"><?php echo $row['tenKhachSan'] ?></p>
          <p class="DC"><?php echo $row['diaDiem'] ?></p>
        </div>
      </div>
      <!--  -->
      <div class="right">
        <p><strong>Trung Bình Giá Từ :</strong> <i>11.500.00 VND</i></p>
        <p><strong><?php $number = addDotToNumber($row['khoangGia']);
                    echo $number  ?> VNĐ/</strong> <em>Đêm</em> </p>
        <Button><a href="card.html">Lựa Chọn Phòng</a></Button>
      </div>
    </div>
    <div class="tien_nghi">
      <h3>
        Tiện Nghi Khách Sạn
      </h3>
      <div class="op_sun">
        <?php
        if ($row['nhaHang'] != 0) { ?>
          <p class="cc"><i class="fa-solid fa-utensils"></i>Nhà hàng</p>
        <?php
        }
        ?>

        <?php
        if ($row['hoBoi'] != 0) { ?>
          <p class="cc"><i class="fa-solid fa-person-swimming"></i>Hồ bơi</p>
        <?php
        }
        ?>

        <?php
        if ($row['phongGym'] != 0) { ?>
          <p class="cc"><i class="fa-solid fa-dumbbell"></i>Phòng Gym</p>
        <?php
        }
        ?>
        <?php
        if ($row['wifi'] != 0) { ?>
          <p class="cc"> <i class="fa-solid fa-wifi"></i>Wifi</p>
        <?php
        }
        ?>

        <?php
        if ($row['mayLanh'] != 0) { ?>
          <p class="cc"> <i class="fa-solid fa-hard-drive"></i>Máy Lạnh</p>
        <?php
        }
        ?>
        <?php
        if ($row['hutThuoc'] != 0) { ?>
          <p class="cc"><i class="fa-solid fa-ban-smoking"></i>Phòng không hút thuốc</p>
        <?php
        }
        ?>
      </div>
    </div>

</section>

<div class="container text-white py-5 text-center" data-aos="fade-up" style="">
  <h1 class="display-4">Tất cả phòng</h1>
  <p class="lead mb-0" style="color: black;">Đặt Phòng</p>
</div>
<section class="section pb-4" style="margin-top: 50px;">
  <div class="container">

    <div class="row check-availabilty" id="next">
      <div class="block-32" data-aos="fade-up" data-aos-offset="-200">

        <form action="index.php?act=product&maKhachSan=<?php echo $maKhachSan ?>" method="post">
          <div class="row">
            <div class="col-md-6 mb-3 mb-lg-0 col-lg-3">
              <label for="checkin_date" class="font-weight-bold text-black">Ngày Nhận</label>
              <div class="field-icon-wrap">
                <div class="icon"><span class="ion-ios-arrow-down"></span></div>
                <input type="date" name="ngayNhan" placeholder="Ngày nhận" required>
              </div>
            </div>
            <div class="col-md-6 mb-3 mb-lg-0 col-lg-3">
              <label for="checkin_date" class="font-weight-bold text-black">Ngày Trả</label>
              <div class="field-icon-wrap">
                <div class="icon"><span class="ion-ios-arrow-down"></span></div>
                <input type="date" name="ngayTra" placeholder="Ngày trả" required>
              </div>
            </div>
            <div class="col-md-6 mb-3 mb-lg-0 col-lg-3">
              <label for="checkin_date" class="font-weight-bold text-black">Loại Phòng</label>
              <div class="field-icon-wrap">
                <div class="icon"><span class="ion-ios-arrow-down"></span></div>
                <select name="loai" id="location" class="form-control">
                  <option value="" selected disabled>chọn loại phòng</option>
                  <?php
                  foreach ($layLoai as $key => $value) { ?>
                    <option value="<?php echo $value['maLoaiPhong'] ?>"><?php echo $value['tenLoai'] ?></option>
                  <?php
                  }
                  ?>
                </select>
              </div>
            </div>
            <div class="col-md-6 col-lg-3 align-self-end">
              <button class="btn btn-primary btn-block text-white">Tìm phòng</button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</section>
<section class="section pb-4" style="margin-top: 70px; margin-bottom: -50px;">
  <div class="container">
    <div class="row check-availabilty" id="next">
      <div class="block-32" data-aos="fade-up" data-aos-offset="-200">
        <ul class="nav nav-pills justify-content-center" style="padding: 10px 0;">
          <li class="nav-item">
            <a class="nav-link" href="index.php?act=product&maKhachSan=<?php echo $maKhachSan ?>">Tất cả phòng</a>
          </li>
          <?php
          foreach ($layLoai as $key => $value) { ?>
            <li class="nav-item">
              <a class="nav-link" href="index.php?act=product&maKhachSan=<?php echo $maKhachSan ?>&maLoai=<?php echo $value['maLoaiPhong'] ?>"><?php echo $value['tenLoai'] ?></a>
            </li>
          <?php
          } ?>
        </ul>
      </div>
    </div>
  </div>
</section>


<?php
foreach ($rows as $key => $value) {
?>
  <div class="mota">
    <h3><?php echo $value['tenLoai'] ?></h3>
    <div class="all">
      <div class="all_lef">
        <img src="<?php echo $value['image'] ?>" alt="">
        <div class="tn">
          <p><i class="fa-solid fa-house"></i><?php echo $value['dienTich'] ?>m <sup>2</sup></p>
          <p><i class="fa-solid fa-bed"></i><?php echo $value['giuong'] ?></p>
        </div>
      </div>
      <div class="all_right">
        <p class="he"><i class="fa-solid fa-person"></i> <?php echo $value['tenLoai'] ?></p>
        <div class="uu_dai">
          <h3>Tiện ích phòng </h3>
          <div class="ct_ud">
            <?php
            if ($value['nhaHang']) { ?>
              <p><i class="fa-solid fa-check" style="color: #0d5be3;"></i>Nhà Hàng</p>
            <?php
            }
            ?>
            <?php
            if ($value['hoBoi']) { ?>
              <p><i class="fa-solid fa-check" style="color: #0d5be3;"></i>Hồ Bơi</p>
            <?php
            }
            ?>
            <?php
            if ($value['phongGym']) { ?>
              <p><i class="fa-solid fa-check" style="color: #0d5be3;"></i>Phòng Gym</p>
            <?php
            }
            ?>
            <?php
            if ($value['wifi']) { ?>
              <p><i class="fa-solid fa-check" style="color: #0d5be3;"></i>Wifi</p>
            <?php
            }
            ?>
            <?php
            if ($value['mayLanh']) { ?>
              <p><i class="fa-solid fa-check" style="color: #0d5be3;"></i>Máy Lạnh</p>
            <?php
            }
            ?>
            <?php
            if ($value['hutThuoc']) { ?>
              <p><i class="fa-solid fa-check" style="color: #0d5be3;"></i>Có Hút Thuốc</p>
            <?php
            }
            ?>
          </div>
          <div class="van_dap">
            <a href=""><i class="fa-solid fa-question"></i>Xem chính sách hủy phòng</a>
            <p>Lưu ý: Giá phòng có thể thay đổi vào các dịp lễ tết, cuối tuần...</p>
          </div>
        </div>
        <div class="book_ct">
          <p class="ct"><i class="fa-solid fa-circle-exclamation" style="color: #005eff;"></i> Giá đã bao gồm thuế, phí</p>
          <div class="dat_ngay">
            <p><del>1,399,667 VND</del></p>
            <p><strong><?php $number = addDotToNumber($value['giaPhong']);
                        echo $number  ?> VNĐ</strong>
              / đêm
            </p>
            <a href="index.php?act=card&maPhongAdd=<?php echo $value['maPhong'] ?>"><button>Đặt Ngay</button></a>
          </div>
        </div>
      </div>
    </div>
  </div>
<?php
}
?>
<style>
  .rating {
      direction: rtl; /* Đặt hướng viết từ phải sang trái */
    }

    .rating input {
      display: none;
    }

    .rating label {
      font-size: 24px;
      cursor: pointer;
    }

    .rating label:hover,
    .rating label:hover ~ label,
    .rating input:checked ~ label {
      color: gold;
    }
    /* //css form */
    .binhluan {
      width: 80%;
    margin-left: 10%;
    margin-top: 50px;
    padding: 20px;
    border: 1px solid #ccc;
    border-radius: 5px;
    background-color: #f9f9f9;
    display: flex;
    justify-content: flex-start;
    margin-bottom: 30px;
}
.abc{
  width: 20%;
}
.abc h5{
  color: red;
  font-size: 20px;
}
    .binhluan h3 {
  font-size: 1.5em;
  margin-bottom: 15px;
  width: 100%;
}

.binhluan form {
  display: flex;
  flex-direction: column;
  width: 70%;
  margin-top: -10px;
}

.binhluan input[type="radio"] {
  display: none;
}

.binhluan label {
  font-size: 24px;
  cursor: pointer;
  margin-right: 5px;
}

.binhluan input[type="text"] {
  width: 100%;
  height: 45px;
  padding: 8px;
  border: 1px solid #ccc;
  border-radius: 3px;
  margin-right: 20px;
}
.buton{
  display: flex;
}
.binhluan button {
  padding: 8px 15px;
  background-color: #4caf50;
  color: white;
  border: none;
  border-radius: 3px;
  cursor: pointer;
}

.binhluan button i {
  margin-right: 5px;
}
  </style>
</head>
<body>

<div class="all_binnhluan">
<div class="binhluan">
  <div class="abc">
  <h3>Đánh Giá</h3>
  <?php
                echo "<h5 class='loidn'>" . implode($loi) . "</h5>";
                ?>
  </div>
  <form action="" method="post">
  <div class="rating">
  <input type="radio" id="star5" name="rating" value="5">
  <label for="star5"><i class="fas fa-star"></i></label>
  <input type="radio" id="star4" name="rating" value="4">
  <label for="star4"><i class="fas fa-star"></i></label>
  <input type="radio" id="star3" name="rating" value="3">
  <label for="star3"><i class="fas fa-star"></i></label>
  <input type="radio" id="star2" name="rating" value="2">
  <label for="star2"><i class="fas fa-star"></i></label>
  <input type="radio" id="star1" name="rating" value="1">
  <label for="star1"><i class="fas fa-star"></i></label>
</div>
  <div class="buton">
  <input type="text" placeholder="Viết bình luận..." name="nd">
  <button type="submit"  name="subp"><i class="fa-regular fa-paper-plane"></i></button>
  </div>
</form>
</div>
<div class="ls_binhl">

</div>
</div>