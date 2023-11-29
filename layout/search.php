<section class="section pb-4">
  <div class="container">

    <div class="row check-availabilty" id="next">
      <div class="block-32" data-aos="fade-up" data-aos-offset="-200">

        <form action="index.php?act=rooms" method="post">
          <div class="row">
            <div class="col-md-6 mb-3 mb-lg-0 col-lg-3">
              <label for="checkin_date" class="font-weight-bold text-black">Địa điểm</label>
              <div class="field-icon-wrap">
                <div class="icon"><span class="ion-ios-arrow-down"></span></div>
                <select name="location" id="location" class="form-control">
                  <option value="" selected disabled>Địa điểm</option>
                  <?php
                  $tinhThanh = truyVanDiaDiem();
                  foreach ($tinhThanh as $key => $value) {
                  ?>
                    <option value="<?php echo $value['tinhThanh'] ?>"><?php echo $value['tinhThanh'] ?></option>
                  <?php
                  }
                  ?>
                </select>
              </div>
            </div>
            <div class="col-md-6 mb-3 mb-lg-0 col-lg-3">
              <label for="checkin_date" class="font-weight-bold text-black">Giá trung bình</label>
              <div class="field-icon-wrap">
                <div class="icon"><span class="ion-ios-arrow-down"></span></div>
                <select name="price" id="price" class="form-control">
                  <option value="" selected disabled>Giá</option>
                  <?php
                  $gia = truyVanGia();
                  foreach ($gia as $key => $value) {
                  ?>
                    <option value="<?php echo $value['khoangGia'] ?>"><?php echo $value['khoangGia'] ?> vnđ</option>
                  <?php
                  }
                  ?>
                </select>
              </div>
            </div>
            <div class="col-md-6 mb-3 mb-lg-0 col-lg-3">
              <label for="checkin_date" class="font-weight-bold text-black">Số sao <i class="fas fa-star" style="color: yellow;"></i></label>
              <div class="field-icon-wrap">
                <div class="icon"><span class="ion-ios-arrow-down"></span></div>
                <select name="stars" id="stars" class="form-control" value="">
                  <option value="" selected disabled>Số sao</option>
                  <option value="1">1</option>
                  <option value="2">2</option>
                  <option value="3">3</option>
                  <option value="4">4</option>
                  <option value="5">5</option>
                </select>
              </div>
            </div>
            <div class="col-md-6 col-lg-3 align-self-end">
              <button class="btn btn-primary btn-block text-white">Tìm khách sạn</button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</section>