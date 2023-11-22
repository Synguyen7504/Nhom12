<section class="section slider-section bg-light">
<div class="container text-white py-5 text-center"  data-aos="fade-up" style ="margin-top: -100px">
      <h1 class="display-4" >Khách Sạn</h1>
      <p class="lead mb-0" style = "color: black;">Đặt Phòng</p>
      
    </div>   
<div class="container">
      <div class="row">
      <div class="col-md-12">
          <div class="home-slider major-caousel owl-carousel mb-5" data-aos="fade-up" data-aos-delay="200">
            <div class="slider-item">
              <a href="<?php echo $row['anh1'] ?>" data-fancybox="images" data-caption="Caption for this image" "><img src="<?php echo $row['anh1'] ?>
                " alt="Image placeholder" class="img-fluid"></a>
            </div>
            <div class="slider-item">
              <a href="<?php echo $row['anh2'] ?>" data-fancybox="images" data-caption="Caption for this image" "><img src="<?php echo $row['anh2'] ?>
                " alt="Image placeholder" class="img-fluid"></a>
            </div>
            <div class="slider-item">
              <a href="<?php echo $row['anh3'] ?>" data-fancybox="images" data-caption="Caption for this image" "><img src="<?php echo $row['anh3'] ?>
                " alt="Image placeholder" class="img-fluid"></a>
            </div>
            <div class="slider-item">
              <a href="<?php echo $row['anh4'] ?>" data-fancybox="images" data-caption="Caption for this image" "><img src="<?php echo $row['anh4'] ?>
                " alt="Image placeholder" class="img-fluid"></a>
            </div>
          </div>
          <!-- END slider -->
        </div>

      </div>
      
    </div>
    <div class="show_phong" style = "margin-top: -30px;">
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
                    for ($i= 0; $i < $row['danhGia']  ; $i++) { 
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
                <p><strong><?php echo $row['khoangGia'] ?> VNĐ/</strong> <em>Đêm</em> </p>
                <Button><a href="card.html">Lựa Chọn Phòng</a></Button>
            </div>
          </div>
          <div class="tien_nghi">
            <h3 >
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
                <p class="cc" ><i class="fa-solid fa-person-swimming"></i>Hồ bơi</p>              
                <?php
              }
              ?>

              <?php
              if ($row['phongGym'] != 0) { ?>
                <p class="cc" ><i class="fa-solid fa-dumbbell"></i>Phòng Gym</p>              
                <?php
              }
              ?>
              <?php
              if ($row['wifi'] != 0) { ?>
                <p class="cc" > <i class="fa-solid fa-wifi"></i>Wifi</p>
                <?php
              }
              ?>

              <?php
              if ($row['mayLanh'] != 0) { ?>
                <p class="cc" > <i class="fa-solid fa-hard-drive"></i>Máy Lạnh</p>
                <?php
              }
              ?>
              <?php
              if ($row['hutThuoc'] != 0) { ?>
                <p class="cc" ><i class="fa-solid fa-ban-smoking"></i>Phòng không hút thuốc</p>
                <?php
              }
              ?>
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
                <img src="<?php echo $value['image']?>" alt="">
                <div class="tn">
                  <p><i class="fa-solid fa-house"></i><?php echo $value['dienTich']?>m <sup>2</sup></p>
                  <p><i class="fa-solid fa-bed"></i><?php echo $value['giuong'] ?></p>
                </div>
              </div>
              <div class="all_right">
                <p class="he"><i class="fa-solid fa-person"></i> <?php echo $value['tenLoai'] ?></p>
                <div class="uu_dai">
                  <h3>Tiện ích phòng  </h3>
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
                    <p><strong><?php echo $value['giaPhong'] ?> VNĐ</strong>
                      / đêm
                      </p>
                      <a href="index.php?act=addtocard&maKhachSan=<?php echo $_SESSION['maKhachSan'] ?>&maPhongAdd=<?php echo $value['maPhong'] ?>"><button>Đặt Ngay</button></a>
                  </div>
                </div>
              </div>
            </div>
          </div>
      <?php 
    }
    ?>
         
          <div class="cac_phon">
            <h3>Các Phòng Tương Tự</h3>
            <div class="row">
              <div class="col-md-6 col-lg-4 mb-5" data-aos="fade-up">
                <a href="#" class="room">
                  <figure class="img-wrap">
                    <img src="images/img_1.jpg" alt="Free website template" class="img-fluid mb-3">
                  </figure>
                  <div class="p-3 text-center room-info">
                    <h2>Room in Ha Long</h2>
                    <span class="text-uppercase letter-spacing-1">90$ / per night</span>
                  </div>
                </a>
              </div>
    
              <div class="col-md-6 col-lg-4 mb-5" data-aos="fade-up">
                <a href="#" class="room">
                  <figure class="img-wrap">
                    <img src="images/img_2.jpg" alt="Free website template" class="img-fluid mb-3">
                  </figure>
                  <div class="p-3 text-center room-info">
                    <h2>Room in Ha Long</h2>
                    <span class="text-uppercase letter-spacing-1">120$ / per night</span>
                  </div>
                </a>
              </div>
    
              <div class="col-md-6 col-lg-4 mb-5" data-aos="fade-up">
                <a href="#" class="room">
                  <figure class="img-wrap">
                    <img src="images/img_3.jpg" alt="Free website template" class="img-fluid mb-3">
                  </figure>
                  <div class="p-3 text-center room-info">
                    <h2>Room in Ha Long</h2>
                    <span class="text-uppercase letter-spacing-1">250$ / per night</span>
                  </div>
                </a>
              </div>
    
              <div class="col-md-6 col-lg-4 mb-5" data-aos="fade-up">
                <a href="#" class="room">
                  <figure class="img-wrap">
                    <img src="images/img_1.jpg" alt="Free website template" class="img-fluid mb-3">
                  </figure>
                  <div class="p-3 text-center room-info">
                    <h2>Room in Da Lat</h2>
                    <span class="text-uppercase letter-spacing-1">90$ / per night</span>
                  </div>
                </a>
              </div>
    
              <div class="col-md-6 col-lg-4 mb-5" data-aos="fade-up">
                <a href="#" class="room">
                  <figure class="img-wrap">
                    <img src="images/img_2.jpg" alt="Free website template" class="img-fluid mb-3">
                  </figure>
                  <div class="p-3 text-center room-info">
                    <h2>Room in Da Lat</h2>
                    <span class="text-uppercase letter-spacing-1">120$ / per night</span>
                  </div>
                </a>
              </div>
    
              <div class="col-md-6 col-lg-4 mb-5" data-aos="fade-up">
                <a href="#" class="room">
                  <figure class="img-wrap">
                    <img src="images/img_3.jpg" alt="Free website template" class="img-fluid mb-3">
                  </figure>
                  <div class="p-3 text-center room-info">
                    <h2>Room in Da Lat</h2>
                    <span class="text-uppercase letter-spacing-1">250$ / per night</span>
                  </div>
                </a>
              </div>
    
            </div>
          </div>