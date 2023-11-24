<div class="px-4 px-lg-0" id="cuon">
  <!-- For demo purpose -->
  <div class="container text-white py-5 text-center" data-aos="fade-up">
    <h1 class="display-4" style="color: #23272b;">Thanh Toán</h1>
    <p class="lead mb-0" style="color: #23272b;">Đặt Phòng</p>

  </div>
  <!-- End -->

  <div class="pb-5">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 p-5 bg-white rounded shadow-sm mb-5" style="border: 1px solid rgba(116, 112, 108, 0.267);">

          <!-- Shopping cart table -->
          <div class="table-responsive">
            <table class="table">
              <thead>
                <tr data-aos="fade-up">
                  <th scope="col" class="border-0 bg-light">
                    <div class="p-2 px-3 text-uppercase">Phòng</div>
                  </th>
                  <th scope="col" class="border-0 bg-light">
                    <div class="py-2 text-uppercase">Tổng tiền</div>
                  </th>
                  <th scope="col" class="border-0 bg-light">
                    <div class="py-2 text-uppercase">Nhận phòng</div>
                  </th>
                  <th scope="col" class="border-0 bg-light">
                    <div class="py-2 text-uppercase">Trả phòng</div>
                </tr>
              </thead>
              <tbody>
                <?php
                if (isset($_SESSION['card'])) {
                  foreach ($_SESSION['card'] as $key => $value) {
                ?>
                    <tr data-aos="fade-up">
                      <th scope="row" class="border-0">
                        <div class="p-2">
                          <img src="<?php echo $value['image'] ?>" alt="" width="70" class="img-fluid rounded shadow-sm">
                          <div class="ml-3 d-inline-block align-middle">
                            <h5 class="mb-0"> <a href="#" class="text-dark d-inline-block align-middle"><?php echo $value['tenKhachSan'] ?></a></h5>
                            <span class="text-muted font-weight-normal font-italic d-block">Địa chỉ: <?php echo $value['diaDiem'] ?></span>
                          </div>
                        </div>
                      </th>
                      <td class="border-0 align-middle"><strong><?php echo $value['tongTien'] ?>VNĐ</strong></td>
                      <td class="border-0 align-middle"><strong><?php echo $value['ngayNhan'] ?></strong></td>
                      <td class="border-0 align-middle"><strong><?php echo $value['ngayTra'] ?></strong></td>
                    </tr>
                <?php
                  }
                }
                ?>
              </tbody>
            </table>
          </div>
          <!-- End -->
        </div>
      </div>
    </div>
  </div>
  <form action="index.php?act=pay" method="post" enctype="multipart/form-data">
    <div class="pb-5">
      <div class="container">
        <div class="row py-5 p-4 bg-white rounded shadow-sm" style="border: 1px solid rgba(116, 112, 108, 0.267);">
          <div class="col-lg-6" data-aos="fade-up">
            <div class="bg-light rounded-pill px-4 py-3 text-uppercase font-weight-bold">Thông tin của bạn</div>
            <div class="p-4">
              <p class="font-italic mb-4">Nếu chưa có tài khoản, bạn hãy tạo tài khoản để việc đặt phòng thuận tiện hơn nhé!</p>
              <div class="input-group mb-4 border rounded-pill p-2">
                <input type="text" placeholder="Tên" name="name" <?php if (isset($_SESSION['login'])) {
                                                                  ?> value="<?php echo $_SESSION['login']['tenKhachHang'] ?>" <?php
                                                                                                                            } ?> aria-describedby="button-addon3" class="form-control border-0" required>
              </div>
              <div class="input-group mb-4 border rounded-pill p-2">
                <input type="text" placeholder="Số điện thoại" <?php if (isset($_SESSION['login'])) {
                                                                ?> value="<?php echo $_SESSION['login']['soDienThoai'] ?>" <?php
                                                                                                                            } ?> name="phoneNumber" aria-describedby="button-addon3" class="form-control border-0" required>
              </div>
              <div class="input-group mb-4 border rounded-pill p-2">
                <input type="text" placeholder="Email" <?php if (isset($_SESSION['login'])) {
                                                        ?> value="<?php echo $_SESSION['login']['email'] ?>" <?php
                                                                                                                      } ?> name="email" aria-describedby="button-addon3" class="form-control border-0" required>
              </div>
              <label for="" style="color: #23272b; font-weight: 300;">Ảnh chụp đã thanh toán:</label>
              <div class="input-group mb-4 border rounded-pill p-2">
                <input type="file" placeholder="File" name="file" aria-describedby="button-addon3" class="form-control border-0" required>
              </div>
            </div>
          </div>
          <div class="col-lg-6" data-aos="fade-up">
            <div class="bg-light rounded-pill px-4 py-3 text-uppercase font-weight-bold">Đơn hàng</div>
            <div class="p-4">
              <p class="font-italic mb-4">Số tiền phải thanh toán trước khi đặt phòng là 50% tổng giá trị hóa đơn.</p>
              <ul class="list-unstyled mb-4">
                <li class="d-flex justify-content-between py-3 border-bottom"><strong class="text-muted">Tổng hóa đơn</strong><input type="text" name="tongDonHang" style="border: 0px solid black; background-color: white; display: inline; margin-right: -81%;" value="<?php echo $tongTien ?>"><strong> VNĐ</strong></li>
                <li class="d-flex justify-content-between py-3 border-bottom"><strong class="text-muted">Thuế</strong><strong>$0.00</strong></li>
                <li class="d-flex justify-content-between py-3 border-bottom"><strong class="text-muted">Cần trả</strong>
                  <h5 class="font-weight-bold"><?php echo $phaiTra ?> VNĐ</h5>
                </li>
                <p class="" style="color: #23272b; font-weight: 300;">Quét mã QR chuyển khoản:</p>
                <img src="images/QR.png" alt="" style="width: 50%; height: 50%; margin-left: 25%;">
                <input type="submit" value="Thanh Toán" class="btn btn-dark rounded-pill py-2 btn-block" style="margin-top: 20px;" onclick="alert('Đơn hàng của bạn đang thực hiện, để xem trạng vui lòng vào phần quản lý đơn hàng của bạn trân trọng !')">
            </div>
          </div>
        </div>
      </div>
    </div>
  </form>
</div>
</div>