<div class="content-wrapper">

    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Institute Teknologi Bina Sarana Global</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Blank Page</a>
                    </ol>
                </div>
            </div>
        </div>
    </section>
    <section class="content">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Create Dosen</h3>
                <div class="card-tools">
                    <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
                        <i class="fas fa-minus"></i>
                    </button>
                    <button type="button" class="btn btn-tool" data-card-widget="remove" data-toggle="tooltip" title="Collapse">
                        <i class="fas fa-times"></i>
                    </button>
                </div>
            </div>
            <div class="card-body">
                <form action="<?php echo base_url(). "dosen/insert/";?>" method="POST">
                <div class="box-body">
                    <div class="form-group">
                        <label for="nidn">NIDN</label>
                        <input type="text" class="form-control" name="nidn" placeholder="NIDN" required>
                    </div>
                    <div class="form-group">
                        <label for="nama_dosen">Nama Dosen</label>
                        <input type="text" class="form-control" name="nama_dosen" placeholder="Nama Dosen" required>
                    </div>
                    <div class="form-group">
                        <label for="alamat">Alamat</label>
                        <input type="text" class="form-control" name="alamat" placeholder="Alamat" required>
                    </div>
                    <div class="form-group">
                        <label for="jenis_kelamin">Jenis Kelamin</label>
                        <select type="text" class="form-control" name="jenis_kelamin" placeholder="Jenis Kelamin" required>
                        <option value="Pilih">Pilih</option>
                        <option value="Laki-laki">Laki-laki</option>
                        <option value="Perempuan">Perempuan</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="text" class="form-control" name="email" placeholder="Email" required>
                    </div>
                    <div class="form-group">
                        <label for="telp">Telp</label>
                        <input type="text" class="form-control" name="telp" placeholder="Telp" required>
                    </div>
                </div>
                <div class="box-footer">
                    <button type="submit" class="btn btn-primary">Create</button>
                    <button type="reset" class="btn btn-secondary">Cancel</button>
                </div>
                </form>
            </div>

            <div class="card-footer"></div>
        </div>
    </section>
</div>