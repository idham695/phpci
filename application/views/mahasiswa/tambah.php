<div class="container">
    <div class="row mt-3">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                Form Tambah Data Mahasiswa
                </div>
                <div class="card-body">
                    <form action="" method="post" novalidate>
                        <div class="form-group">
                            <label for="nama">Nama</label>
                            <input type="Text" class="form-control" id="nama" name="nama">
                            <small class="form-text text-danger"><?= form_error('nama'); ?></small>
                        </div>
                        <div class="form-group">
                            <label for="NIM">NIM</label>
                            <input type="Text" class="form-control" id="NIM" name="nim">
                            <small class="form-text text-danger"><?= form_error('nim'); ?></small>
                        </div>
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" class="form-control" id="email" name="email">
                            <small class="form-text text-danger"><?= form_error('email'); ?></small>
                        </div>
                        <div class="form-group">
                            <label for="jurusan">Jurusan</label>
                            <select class="form-control" id="jurusan" name="jurusan">
                            <option value="Teknik Informatika">Teknik Informatika</option>
                            <option value="MID">MID</option>
                            <option value="Teknik Sipil">Teknik Sipil</option>
                            </select>
                        </div>
                        <button type="submit" name="tambah" class="btn btn-primary float-right">Tambah data</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>