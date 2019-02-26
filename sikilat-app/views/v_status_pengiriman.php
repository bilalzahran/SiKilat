<ul class="list-inline menu-left mb-0">
    <li class="float-left">
        <button class="button-menu-mobile open-left disable-btn">
        <i class="dripicons-menu"></i>
        </button>
    </li>
    <li>
        <div class="page-title-box">
            <h1 class="page-title">Status Pengiriman</h1>
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
    <div class="col-md-12">
        <div class="card-box">
            <h4 class="m-t-0 header-title">Status Pengiriman Saya</h4>           
            <table class="table mb-0">
                <thead class="thead-dark">
                    <tr>
                        <th>#</th>
                        <th>Nama Penerima</th>
                        <th>Tujuan</th>
                        <th>Jenis Pengiriman</th>
                        <th>Status Pengiriman</th>                                                
                    </tr>
                </thead>
                <tbody>
                    <?php while($row = mysqli_fetch_array($data)) {
                        $i = 1;
                    ?>
                    <tr>
                        <th><?php echo $i; ?></th>
                        <td><?php echo $row['nama_penerima']; ?></td>                        
                        <td><?php echo $row['kota']; ?></td>                        
                        <td><?php echo $row['jenis_pengiriman']; ?></td>                        
                        <td><?php echo $row['status_pengiriman']; ?></td>                        
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