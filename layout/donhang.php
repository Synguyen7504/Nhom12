<section class="section">
    <div class="container">
        <div class="row justify-content-center text-center mb-5">
            <div class="col-md-7">
                <h2 class="heading" data-aos="fade-up">Đơn hàng</h2>
                <p data-aos="fade-up" data-aos-delay="100">Những đơn hàng mà bạn đã đặt.</p>
            </div>
        </div>
        <div class="row row-cols-1 row-cols-md-3 g-4" style="margin-bottom: 25px;">
            <div class="col">
                <?php
                if (isset($rows)) {
                    # code...

                    foreach ($rows as $key => $value) {


                ?>
                        <div class="card" style="margin-bottom: 20px;">
                            <div class="card-header">
                                <h5 style="font-weight: 600; color: white;">Mã Đơn Hàng: <?php echo $value['maDonHang'] ?></h5>
                            </div>
                            <div class="card-body d-flex align-items-center" style="margin-left: 20px;">
                                <div class="flex-grow-1"> <!-- Keep this div first for content -->
                                    <a href="index.php?act=product&maKhachSan=<?php echo $value['maKhachSan'] ?>">
                                        <h5 class="card-title">Tên khách sạn: <?php echo $value['tenKhachSan'] ?></h5>
                                    </a>
                                    <p class="card-text">Loại phòng: <?php echo $value['tenLoai'] ?></p>
                                    <p class="card-text">Số ngày: 3 ngày</p>
                                    <p class="card-text">Tổng Tiền: <?php echo $value['tongDonHang'] ?></p>
                                    <p style="float: left;" class="card-text">Trạng Thái: </p>
                                    <p style=" color: green;margin-left: 85px; font-weight: bold;" class="card-text"><?php if ($value['trangThai'] != 0) {
                                                                                                                            echo 'Đặt thành công';
                                                                                                                        } else {
                                                                                                                            echo 'Đơn hàng đang được duyệt';
                                                                                                                        } ?></p>

                                </div>
                                <div class="card-img-container">
                                    <img src="images/106_test.jpg" alt="Product Image" class="img-fluid" style="object-fit: cover; border-radius: 8px; margin-left: -50px;">
                                </div>
                            </div>
                        </div>
                    <?php }
                } else { ?>
                    <div class="row justify-content-center text-center mb-5">
                        <div class="col-md-7">
                            <h2 class="heading" data-aos="fade-up" style="font-size: xx-large; font-weight: 500;">Bạn chưa đặt bất kì phòng nào !</h2>
                        </div>
                    <?php
                } ?>
                    </div>
            </div>
        </div>

</section>