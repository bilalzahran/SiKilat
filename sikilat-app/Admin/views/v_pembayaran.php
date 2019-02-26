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
                                <h3>Tabel Pembayaran</h3> 

                                <table class="table mb-0">
                                    <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Jumlah Pembayaran</th>
                                        <th>Tanggal Pembayaran</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                        <?php while ($row = mysqli_fetch_array($data)){
                                            $i = 1;
                                        ?>

                                        <tr>
                                            <td><?php echo $i; ?></td>
                                            <td><?php echo $row ['jumlah']; ?></td>
                                            <td><?php echo $row ['tanggal']; ?></td>
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
			</div>