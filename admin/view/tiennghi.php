<div class="content" style="margin-bottom: 235px;">
    <h2 style="margin-left: 20px; margin-bottom: 30px; margin-top: -10px;">Quản tiện nghi</h2>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="header">
                        <h4 class="title">Tất cả phòng</h4>
                        <p class="category">Có thể thêm sửa xóa phòng</p>
                    </div>
                    <div class="content table-responsive table-full-width">
                        <table class="table table-hover table-striped">
                            <thead>
                                <th>Mã Tiện Nghi</th>
                                <th>Tên Tiện Nghi</th>
                                <th>Chức năng</th>
                            </thead>
                            <tbody>
                                <?php foreach ($rows as $key => $value) {

                                ?>
                                    <tr>
                                        <td><?php echo $value['maTienNghi'] ?></td>
                                        <td><?php echo $value['tenTienNghi'] ?></td>
                                        <td><a href="index.php?act=updateTienNghi&maTienNghi=<?php echo $value['maTienNghi'] ?>">Sửa</a><a style="margin-left: 15px;" href="index.php?act=deleteTienNghi&maTienNghi=<?php echo $value['maTienNghi'] ?>">Xóa</a></td>
                                    </tr>
                                <?php } ?>
                            </tbody>
                        </table>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>