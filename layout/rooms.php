<?php
$rows = truyVanAll();
$rows1 = truyVan2();
// include "search.php";
?>

<!-- Danh mục phòng -->

<!-- Danh mục-->

<section class="section">
  <div class="container">
    <div class="row justify-content-center text-center mb-5">
      <div class="col-md-7">
        <h2 class="heading" data-aos="fade-up">Khách sạn</h2>
        <p data-aos="fade-up" data-aos-delay="100">Những khách sạn tuyệt vời của chúng tôi.</p>
      </div>
    </div>
    <div class="row">
      <?php
      foreach ($rows as $key => $value) {
      ?>
        <div class="col-md-6 col-lg-4" data-aos="fade-up">
          <a href="index.php?act=product&maKhachSan=<?php echo $value['maKhachSan'] ?>" class="room">
            <figure class="img-wrap">
              <img src="<?php echo $value['anh1'] ?>" class="img-fluid mb-3" style="border-radius: 15px;">
            </figure>
            <div class="p-3 text-center room-info">
              <h2 style="color: black;"><?php echo $value['tenKhachSan'] ?></h2>
              <span class="text-uppercase letter-spacing-1" style="font-weight: normal;">Trung bình giá: <?php $number = addDotToNumber($value['khoangGia']);
                                                                                                          echo $number  ?> vnđ / Đêm</span>
            </div>
          </a>
        </div>
      <?php
      }
      ?>


    </div>
  </div>
</section>


<section class="section bg-light">
  <div class="container">
    <div class="row justify-content-center text-center mb-5">
      <div class="col-md-7">
        <h2 class="heading" data-aos="fade">Ưu đãi Tuyệt vời</h2>
        <p data-aos="fade">
          Chào mừng quý khách đến với Khách sạn Sang Trọng! Chúng tôi hân hạnh thông báo về chương trình ưu đãi đặc
          biệt dành cho quý khách yêu thương. Từ ngày 1 đến ngày 15 tháng 12, khi quý khách đặt phòng trước cho kỳ
          nghỉ của mình, chúng tôi sẽ mang đến cho bạn một trải nghiệm không gì sánh kịp.
        </p>
      </div>
    </div>
    <?php
    foreach ($rows1 as $key => $value) {
      if ($value['maKhachSan'] % 2 == 0) {
        # code...

    ?>

        <div class="site-block-half d-block d-lg-flex bg-white" data-aos="fade" data-aos-delay="100">
          <a href="#" class="image d-block bg-image-2" style="background-image: url('<?php echo $value['anh1'] ?>');"></a>
          <div class="text">
            <span class="d-block mb-4"><span class="display-4 text-primary"><?php $number = addDotToNumber($value['khoangGia']);
                                                                            echo $number  ?> vnđ</span> <span class="text-uppercase letter-spacing-2">/ Đêm</span></span>
            <h2 class="mb-4"><?php echo $value['tenKhachSan'] ?></h2>
            <p>Ở một nơi xa xôi, phía sau những dãy núi chữ, xa xôi từ các quốc gia Vokalia và Consonantia, sống những
              đoạn văn mù mịt. Chúng sống tách biệt tại Bookmarksgrove ngay tại bờ biển của Semantics, một đại dương ngôn
              ngữ lớn.</p>
            <p><a href="index.php?act=product&maKhachSan=<?php echo $value['maKhachSan'] ?>" class="btn btn-primary text-white">Đặt Ngay</a></p>
          </div>
        </div>
      <?php
      }
      ?>
      <?php
      if ($value['maKhachSan'] % 2 == 1) {
      ?>
        <div class="site-block-half d-block d-lg-flex bg-white" data-aos="fade" data-aos-delay="200">
          <a href="#" class="image d-block bg-image-2 order-2" style="background-image: url('<?php echo $value['anh1'] ?>');"></a>
          <div class="text order-1">
            <span class="d-block mb-4"><span class="display-4 text-primary"><?php $number = addDotToNumber($value['khoangGia']);
                                                                            echo $number  ?> vnđ</span> <span class="text-uppercase letter-spacing-2">/ Đêm</span></span>
            <h2 class="mb-4"><?php echo $value['tenKhachSan'] ?></h2>
            <p>Ở một nơi xa xôi, phía sau những dãy núi chữ, xa xôi từ các quốc gia Vokalia và Consonantia, sống những
              đoạn văn mù mịt. Chúng sống tách biệt tại Bookmarksgrove ngay tại bờ biển của Semantics, một đại dương ngôn
              ngữ lớn.</p>
            <p><a href="index.php?act=product&maKhachSan=<?php echo $value['maKhachSan'] ?>" class="btn btn-primary text-white">Đặt Ngay</a></p>
          </div>
        </div>
      <?php
      }
      ?>

    <?php
    }
    ?>
  </div>
</section>