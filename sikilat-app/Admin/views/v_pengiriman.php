<ul class="list-inline menu-left mb-0">
    <li class="float-left">
        <button class="button-menu-mobile open-left disable-btn">
        <i class="dripicons-menu"></i>
        </button>
    </li>
    <li>
        <div class="page-title-box">
            <h4 class="page-title">Starter </h4>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Highdmin</a></li>
                <li class="breadcrumb-item"><a href="#">Pages</a></li>
                <li class="breadcrumb-item active">Starter</li>
            </ol>
        </div>
    </li>
</ul>
</nav>
</div>
<!-- Top Bar End -->
<!-- Start Page content -->
<div class="content">
<div class="container-fluid">
<div class="row">
    <div class="col-lg-12">
        <div class="card-box">
            <h3>Tabel Pengiriman</h3>
            <table class="table mb-0">
                <thead>
                    <tr>
                        <th>No Pengiriman</th>
                        <th>Nama Pengirim</th>
                        <th>Alamat Pengirim</th>
                        <th>Tujuan</th>
                        <th>Status</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php while ($row = mysqli_fetch_array($data)){
                    $i = 1;
                    ?>
                    <tr>
                        <td><?php echo $i; ?></td>
                        <td><?php echo $row ['nama_pengirim']; ?></td>
                        <td><?php echo $row ['alamat']; ?></td>
                        <td><?php echo $row ['alamat_penerima']; ?></td>
                        <td><?php echo $row ['status_pengiriman']; ?></td>
                        <td>
                            <button type="button" class="btn btn-primary waves-effect waves-light" data-toggle="modal" data-target="#myModal">Info</button>
                            <button type="button" class="btn btn-success waves-light waves-effect" name="konfirmasi">Konfirmasi</button>    
                        </td>
                    </tr>
                    <?php
                    $i = $i + 1;
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
</div>
</div>

<!-- <div id="myModal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                            <h4 class="modal-title" id="myModalLabel">Info Pengiriman</h4>
                                            
                                        </div>
                                        <div class="modal-body">
                                            <p>Pop Up ini berisikan informasi lengkap tentang pengriman</p>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-light waves-effect" data-dismiss="modal">Close</button>
                                            <button type="button" class="btn btn-success waves-light waves-effect">Konfirmasi</button>
                                        </div>
                                        </div><!-- /.modal-content -->
                                        <!-- </div> --><!-- /.modal-dialog -->
                                        <!-- </div> --><!-- /.modal --> -->