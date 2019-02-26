                        <ul class="list-inline menu-left mb-0">
                            <li class="float-left">
                                <button class="button-menu-mobile open-left disable-btn">
                                    <i class="dripicons-menu"></i>
                                </button>
                            </li>
                            <li>
                                <div class="page-title-box">
                                    <h4 class="page-title"> Laporan Pembayaran </h4>
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="#">Laporan</a></li>
                                        <li class="breadcrumb-item active">Pembayaran</li>
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
                                <div class="row">
                                    <div class="col-md-6">
                                       <h3 class="d-inline title">Tabel Laporan Pembayaran</h3> 
                                    </div>
                                    <div class="col-md-6">
                                <button type="button" class="btn btn-primary waves-light waves-effect pull-right d-inline"> Tambah Laporan </button>  
                                    </div>
                                </div>
                                <br>
                                <div class="table-responsive">
                                    <table class="table table-striped mb-0">
                                    <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Tanggal</th>
                                        <th>Admin</th>
                                        <th>Aksi</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                        <?php while($row = mysqli_fetch_array($data)){
                                            $i = 1;
                                        ?>
                                        <tr>
                                            <td><?php echo $i; ?> </td>
                                            <td><?php echo $row['tanggal']; ?> </td>
                                            <td> <?php echo $row['nama']; ?></td>
                                            <td><button type="button" class="btn btn-light waves-effect">Detail</button></td>
                                        </tr>
                                        <?php
                                            $i = $i + 1;
                                        } ?>                                    
                                    </tbody>
                                </table>    
                                </div>
                            </div>
                        </div>
                    </div>

