<div class="px-4 px-lg-0" id="cuon">
  <!-- For demo purpose -->
  <div class="container text-white py-5 text-center" data-aos="fade-up">
    <h1 class="display-4" style="color: #23272b;">Giỏ Hàng</h1>
    <p class="lead mb-0" style="color: #23272b;">Các phòng</p>
  </div>
  <!-- End -->

  <div class="pb-5">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 p-5 bg-white rounded shadow-sm mb-5" style="border: 1px solid rgba(116, 112, 108, 0.267);">
          <form action="" id="myFrom" method="post">
            <!-- Shopping cart table -->
            <div class="">
              <table class="table">
                <thead>
                  <tr data-aos="fade-up">
                    <th scope="col" class="border-0 bg-light">
                      <div class="p-2 px-3 text-uppercase">Phòng</div>
                    </th>
                    <th scope="col" class="border-0 bg-light">
                      <div class="py-2 text-uppercase">Giá</div>
                    </th>
                    <th scope="col" class="border-0 bg-light">
                      <div class="py-2 text-uppercase">Nhận phòng</div>
                    </th>
                    <th scope="col" class="border-0 bg-light">
                      <div class="py-2 text-uppercase">Trả phòng</div>
                    </th>
                  </tr>
                </thead>
                <tbody>
                  <?php
                  $value = addToCard($_GET['maPhongAdd']);
                  ?>
                  <tr data-aos="fade-up">
                    <th scope="row" class="border-0">
                      <div class="p-2">
                        <img src="<?php echo $value['image'] ?>" alt="" width="100" class="img-fluid rounded shadow-sm">
                        <div class="ml-3 d-inline-block align-middle">
                          <h5 class="mb-0"> <a href="#" class="text-dark d-inline-block align-middle"><?php echo $value['tenKhachSan'] ?></a></h5>
                          <span class="text-muted font-weight-normal font-italic d-block">Địa chỉ: <?php echo $value['diaDiem'] ?></span>
                          <span id="maPhong" class="text-muted font-weight-normal font-italic d-block">Mã số phòng: <?php echo $value['maPhong'];
                                                                                                                    $_SESSION['maPhong'] = $value['maPhong'] ?></span>
                        </div>
                      </div>
                    </th>
                    <td class="border-0 align-middle"><strong><?php $number = addDotToNumber($value['giaPhong']);
                                                              echo $number  ?> VNĐ</strong></td>
                    <td><input type="date" id="ngayNhan" name="ngayNhan" style="margin-top: 27px;" min="<?php $date = date('Y-m-d');
                                                                                                        echo $date ?>" max="<?php $chuyenDate = strtotime($date) + (30 * 86400);
                                                                                                                            $datemax = date('Y-m-d', $chuyenDate);
                                                                                                                            echo $datemax ?>"></td>
                    <td><input type="date" id="ngayTra" name="ngayTra" style="margin-top: 27px;" min="<?php $date = date('Y-m-d');
                                                                                                      echo $date ?>" max="<?php $chuyenDate = strtotime($date) + (30 * 86400);
                                                                                                                          $datemax = date('Y-m-d', $chuyenDate);
                                                                                                                          echo $datemax ?>"></td>
                  </tr>
                  <tr>
                  </tr>
                </tbody>
              </table>
              <!-- <h4>Các ngày đã đặt</h4> -->
            </div>
            <input type="submit" value="Đặt phòng" class="btn btn-dark px-4 rounded-pill" style="margin-left: 85%; margin-top: 60px">
          </form>
          <!-- End -->
        </div>
      </div>
    </div>
  </div>
</div>
</div>
</div>
</div>
<script>
  <?php
  $rows = layDateDonHangChiTiet();
  $rows = json_encode($rows);
  ?>
  var rows = <?php echo $rows ?>;
  // rows.forEach(element => {
  //   console.log(element['maPhong'])
  //   console.log(element['ngayNhanPhong'])
  //   console.log(element['ngayTraPhong'])

  // });
  // console.log('Đây là mã phòng', rows[0]['maPhong']);
  var maPhong = document.getElementById('maPhong').innerText;
  maPhong = maPhong.replace(/\D/g, '');
  var from = document.getElementById('myFrom');
  var ngayNhanInput = document.getElementById('ngayNhan');
  ngayNhanInput.addEventListener('change', function() {
    ngayNhan = ngayNhanInput.value;
  });
  var ngayTraInput = document.getElementById('ngayTra');
  ngayTraInput.addEventListener('change', function() {
    ngayTra = ngayTraInput.value;
    check()
  });

  function check() {
    console.log('Ngày trả', ngayTra);
    console.log('Ngày nhận', ngayNhan)
    if (maPhong !== '' && ngayNhan !== '' && ngayTra !== '') {
      rows.forEach(element => {
        if (maPhong == element['maPhong']) {
          var ngayNhanPhong = new Date(element['ngayNhanPhong']);
          var ngayTraPhong = new Date(element['ngayTraPhong']);
          var ngayNhanInputDate = new Date(ngayNhan);
          var ngayTraInputDate = new Date(ngayTra);

          if ((ngayNhanInputDate < ngayNhanPhong && ngayTraInputDate < ngayNhanPhong) || (ngayNhanInputDate > ngayTraPhong && ngayTraInputDate > ngayTraPhong)) {
            from.action = 'index.php?act=order';
          } else {
            from.action = '';
            alert('Ngày bạn đặt đã có người đặt');
          }
        } else {
          from.action = 'index.php?act=order';
        }
      });

    }
  }
  var ngayNhanInput = document.getElementById('ngayNhan');
  var ngayTraInput = document.getElementById('ngayTra');

  ngayNhanInput.addEventListener('change', function() {
    var ngayNhanValue = new Date(ngayNhanInput.value);
    var ngayTraMin = new Date(ngayNhanValue.getTime() + (24 * 60 * 60 * 1000)); // Thêm 1 ngày (24 giờ * 60 phút * 60 giây * 1000 milliseconds)

    // Định dạng ngày tháng cho thuộc tính 'min' của ngayTraInput
    var minDate = ngayTraMin.toISOString().split('T')[0];
    ngayTraInput.setAttribute('min', minDate);
  });
</script>