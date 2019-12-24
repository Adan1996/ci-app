<div class="container mt-3">

        <div class="row mt-3">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">
                        Form Tambah Data Mahasiswa
                    </div>
                    <div class="card-body">
                        <form action="" method="post">
                            <div class="form-group">
                                <label for="nama">Nama</label>
                                <input type="text" class="form-control" name="nama" id="nama">
                                <small class="form-text text-danger"><?= form_error('nama'); ?></small>
                            </div>
                            <div class="form-group">
                                <label for="npm">NPM</label>
                                <input type="text" class="form-control" name="npm" id="npm">
                                <small class="form-text text-danger"><?= form_error('npm'); ?></small>
                            </div>
                            <div class="form-group">
                                <label for="email">Email</label>
                                <input type="text" class="form-control" name="email" id="email">
                                <small class="form-text text-danger"><?= form_error('email'); ?></small>
                            </div>
                            <div class="form-group">
                                <label for="jurusan">Jurusan</label>
                                <select class="form-control" name="jurusan" id="jurusan">
                                    <option value="Teknik Komputer">Teknik Komputer</option>
                                    <option value="Teknik Mesin">Teknik Mesin</option>
                                    <option value="Teknik Industri">Teknik Industri</option>
                                </select>
                            </div>
                            <button type="submit" name="tambah" class="btn btn-primary float-right">Tambah Data</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>

</div>