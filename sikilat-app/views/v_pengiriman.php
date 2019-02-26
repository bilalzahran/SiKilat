<link rel="stylesheet" type="text/css" href="Assets/plugins/jquery.steps/css/jquery.steps.css" />                       <ul class="list-inline menu-left mb-0">
<li class="float-left">
    <button class="button-menu-mobile open-left disable-btn">
    <i class="dripicons-menu"></i>
    </button>
</li>
<li>
    <div class="page-title-box">
        <h1 class="page-title">Pengiriman</h1>
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
        <h4>Request Pengiriman</h4>
        <form method="POST" action="Pengiriman.php">
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="inputEmail4" class="col-form-label">Nama Penerima</label>
                    <input type="text" class="form-control" name="nama_penerima" placeholder="Nama Penerima">
                </div>
                <div class="form-group col-md-6">
                    <label for="inputPassword4" class="col-form-label">No Telepon Penerima</label>
                    <input type="text" class="form-control" name="no_telp_penerima" placeholder="No Telepon Penerima">
                </div>
            </div>
            <div class="form-group">
                <label for="inputAddress" class="col-form-label">Alamat Penerima</label>
                <input type="text" class="form-control" name="alamat_penerima" placeholder="Jalan Anggrek">
            </div>
            <div class="form-row">
                <div class="form-group col-md-3">
                    <label for="inputCity" class="col-form-label">Kota</label>
                    <input type="text" class="form-control" name="kota" placeholder="Kota">
                </div>
                <div class="form-group col-md-3">
                    <label for="inputCity" class="col-form-label">Kecamatan</label>
                    <input type="text" class="form-control" name="kecamatan" placeholder="Kecamatan">
                </div>
                <div class="form-group col-md-3">
                    <label for="inputState" class="col-form-label">Provinsi</label>
                    <input type="text" class="form-control" name="provinsi" placeholder="Provinsi">
                </div>
                <div class="form-group col-md-3">
                    <label for="inputZip" class="col-form-label">Kode Pos</label>
                    <input type="text" class="form-control" name="kode_pos" placeholder="Kode Pos">
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="inputCity" class="col-form-label">Nama Barang</label>
                    <input type="text" class="form-control" name="nama_barang" placeholder="Nama Barang">
                </div>
                <div class="form-group col-md-6">
                    <label for="inputCity" class="col-form-label">Berat (Gram)</label>
                    <input type="text" class="form-control" name="berat" placeholder="Berat">
                </div>
            </div>
            <div class="form-group">
                <label for="inputAddress" class="col-form-label">Deskripsi</label>
                <textarea class="form-control" name="deskripsi" rows="5" placeholder="Deskripsi Barang"></textarea>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="inputAddress" class="col-form-label">Jenis Pengiriman</label>
                    <select class="form-control" name="jenis_pengiriman">
                        <option value="Reguler">Reguler</option>
                        <option value="Kilat">Kilat</option>
                    </select>
                </div>
            </div>
            <input type="submit" class="btn btn-primary" name="submit" value="Kirim Request"></input>
        </form>
    </div>
</div>
</div>