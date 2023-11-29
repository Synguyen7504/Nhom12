<div class="container text-white py-5 text-center" data-aos="fade-up">
        <h1 class="display-4" style="color: white;">Đổi mật khẩu</h1>
        <p class="lead mb-0">Sogo Holel</p>

    </div>

    <section style="margin-top: 0px; margin-bottom: 50px;">

        <!-- <div class="container-fluid"> -->
        <div class="row" style="display: flex; justify-content: center; align-items: center; margin: 20px 0 20px 0">
            <div class="col-md-5">
                <div class="card">
                    <div class="header" style="margin: 20px 0 0 20px;" data-aos="fade">
                        <h4 class="title">Đổi mật khẩu</h4>
                        <?php 
             if (!empty($loi)) {
                echo "<h4 class='loidn'>". implode($loi)."</h4>";
             }
             ?>
                    </div>
                    <div class="content" style="margin: 00px 20px 20px 20px;">
                   
                        <form method="post">
                            <div class="row" data-aos="fade">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Mật khẩu cũ</label>
                                        <input type="password" class="form-control" placeholder="mật khẩu cũ ..." name="mkc">
                                    </div>
                                </div>
                            </div>

                            <div class="row" data-aos="fade">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Mật khẩu mới</label>
                                        <input type="password" class="form-control" placeholder="mật khẩu mới ..." name="mk1">
                                    </div>
                                </div>
                            </div>
                            <div class="row" data-aos="fade">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Xác nhận lại mật khẩu</label>
                                        <input type="password" class="form-control"
                                            placeholder="xác nhận lại mật khẩu ..." name="mk2">
                                    </div>
                                </div>
                            </div>

                            <button type="submit" name="sub" class="btn btn-info btn-fill "
                                style="background-color: #23272b; border: 0px; border-radius: 7px; margin-top: 20px; margin-left: 50%; transform: translateX(-50%);">Cập
                                nhập tài khoản</button>
                            <div class="clearfix"></div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>