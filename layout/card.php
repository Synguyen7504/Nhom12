<div class="px-4 px-lg-0" id="cuon">
    <!-- For demo purpose -->
    <div class="container text-white py-5 text-center"  data-aos="fade-up">
      <h1 class="display-4" style="color: #23272b;">Giỏ Hàng</h1>
      <p class="lead mb-0" style="color: #23272b;">Các phòng</p>
    </div>
    <!-- End -->
  
    <div class="pb-5" >
      <div class="container">
        <div class="row" >
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
                      <div class="py-2 text-uppercase">Giá</div>
                    </th>
                    <th scope="col" class="border-0 bg-light">
                      <div class="py-2 text-uppercase">Nhận phòng</div>
                    </th>
                    <th scope="col" class="border-0 bg-light">
                      <div class="py-2 text-uppercase">Trả phòng</div>
                    </th>
                    <th scope="col" class="border-0 bg-light">
                      <div class="py-2 text-uppercase">Xóa</div>
                    </th>
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
                        <img src="images/khach_san_can_ho.jpg" alt="" width="70" class="img-fluid rounded shadow-sm">
                        <div class="ml-3 d-inline-block align-middle">
                          <h5 class="mb-0"> <a href="#" class="text-dark d-inline-block align-middle"><?php echo $value['tenKhachSan'] ?></a></h5>
                          <span class="text-muted font-weight-normal font-italic d-block">Địa chỉ: <?php echo $value['diaDiem'] ?></span>
                        </div>
                      </div>
                    </th>
                    <td class="border-0 align-middle"><strong><?php echo $value['giaPhong'] ?>VNĐ</strong></td>
                    <td><input type="date" style= "margin-top: 20px;" min = "<?php $date = date('Y-m-d'); echo $date ?>" max = "<?php $chuyenDate = strtotime($date) + (30 * 86400); $datemax = date('Y-m-d',$chuyenDate) ; echo $datemax ?>"></td>
                    <td><input type="date" style= "margin-top: 20px;"min = "<?php $date = date('Y-m-d'); echo $date ?>" max = "<?php $chuyenDate = strtotime($date) + (30 * 86400); $datemax = date('Y-m-d',$chuyenDate) ; echo $datemax ?>" ></td>
                    <td class="align-middle"><a href="index.php?act=delete&maPhongDelete=<?php echo $value['maPhong']?>" class="text-dark"><!--<i class="fa fa-trash"></i>-->Xóa</a></td>
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
      </div>
    </div>
  </div>
  </div>