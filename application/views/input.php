<div class="container">

    <div class="row mt-3">
        <div class="col-md-6">
        <div class="card">
        <div class="card-header">
        Form Data Siswa
    </div>
            <div class="card-body">
                
            <form action="" method="post">
            <div class="Form-group">
                <label for="nama">Nama Siswa</label>
                <input type="text" class="form-control" id="nama">
            </form>
            </div>
            <div class="Form-group">
                <label for="nis">NIS</label>
                <input type="number" class="form-control" id="nis">
            </div>
            <div class="Form-group">
                <label for="kelas">Kelas</label>
                <input type="text" class="form-control" id="kelas">
            </div>
            <div class="Form-group">
                <label for="tggl">Tanggal Lahir</label>
                <input type="text" class="form-control" id="tggl">
            </div>
            <div class="Form-group">
            <label for="alamat" class="form-label">Alamat</label>
            <textarea class="form-control" id="alamat" rows="3"></textarea>
            </div>
            <div class="btn-group" role="group" aria-label="Basic radio toggle button group">
                <input type="radio" class="btn-check" name="laki" id="laki" autocomplete="off">
                <label class="btn btn-outline-primary" for="laki">Laki-Laki</label>

                <input type="radio" class="btn-check" name="perempuan" id="perempuan" autocomplete="off">
                <label class="btn btn-outline-primary" for="perempuan">Perempuan</label>
            </div>
            <div class="Form-group">
                <label for="agama">Agama</label>
                <select class="form-control" id="agama" name="agama">
                <option>Islam</option>
                <option>Kristen</option>
                <option>Katolik</option>
                <option>Budha</option>
                <option>Hindu</option>
                <option>Protestan</option>
                <option>Khonghucu</option>
                </select>
            </div>
            <button type="submit" name="tambah" class="btn btn-primary float-right" >Tambah</button>
            </form>
            </div>
        </div>


        </div>


    </div>

</div>