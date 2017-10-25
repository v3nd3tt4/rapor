<div class="row">
    <form action ="<?=base_url()?>siswa/simpan_siswa" method="POST">
    <div class="col-lg-12">
        <div class="ibox float-e-margins">
            <div class="ibox-title">
                <div class="row">
                    <div class="col-md-9">
                        <h2>Tambah Siswa</h2>
                    </div>
                    <div class="col-md-3">
                        <div class="pull-right">
                            <a href="<?=base_url()?>siswa" class="btn btn-danger" ><i class="fa fa-arrow-left" aria-hidden="true"></i>  Kembali</a>  
                            <button type="submit" class="btn btn-success"><i class="fa fa-save"></i>  Simpan</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="ibox-content">
            	<?=@$this->session->flashdata('msg')?>
                <div class="form-group">
                    <label>NIS:</label>
                    <input type="text" name="nis" class="form-control" value="<?=isset($_POST['nis']) ? $_POST['nis'] : '' ?>" required />
                </div>
                <div class="form-group">
                    <label>Nama:</label>
                    <input type="text" name="namasiswa" class="form-control" value="<?=isset($_POST['namaguru']) ? $_POST['namaguru'] : '' ?>" required/>
                </div>
                <div class="form-group">
                    <label>Kelas:</label>
                    <select name="idkelas" class="form-control" required>
                        <option value="">--pilih kelas--</option>
                        <?php foreach($kelas->result() as $kelas){?>
                        <option value="<?=$kelas->idkelas?>"><?=$kelas->kodekelas.' - '.$kelas->namakelas?></option>
                        <?php }?>
                    </select>
                </div>
                <div class="form-group">
                    <label>Tempat Lahir:</label>
                    <input type="text" name="tempatlahir" class="form-control" value="<?=isset($_POST['tempatlahir']) ? $_POST['tempatlahir'] : '' ?>" required/>
                </div>
                <div class="form-group">
                    <label>Tanggal Lahir:</label>
                    <input type="date" name="tgllahir" class="form-control" value="<?=isset($_POST['tgllahir']) ? $_POST['tgllahir'] : '' ?>" required/>
                </div>
                <div class="form-group">
                    <label>Jenis Kelamin:</label>
                    <select name="jk" class="form-control" required>
                        <option value="">--pilih--</option>
                        <option value="Pria">pria</option>
                        <option value="Wanita">wanita</option>
                    </select>
                </div>
                <div class="form-group">
                    <label>Agama:</label>
                    <select name="agama" class="form-control" required>
                        <option value="">--pilih--</option>
                        <option value="Islam">Islam</option>
                        <option value="Kristen">Kristen</option>
                        <option value="Katolik">Katolik</option>
                        <option value="Hindu">Hindu</option>
                        <option value="Budha">Budha</option>
                        <option value="Kongucu">Kongucu</option>
                    </select>
                </div>
                <div class="form-group">
                    <label>Nomor Telpon (ayah atau Ibu):</label>
                    <input type="text" name="telpayah" class="form-control" value="<?=isset($_POST['telpayah']) ? $_POST['telpayah'] : '' ?>" required/>
                </div>
                <div class="form-group">
                    <label>Nama Ayah:</label>
                    <input type="text" name="namaayah" class="form-control" value="<?=isset($_POST['namaayah']) ? $_POST['namaayah'] : '' ?>" required/>
                </div>
                <div class="form-group">
                    <label>Pekerjaan Ayah:</label>
                    <input type="text" name="pekerjaanayah" class="form-control" value="<?=isset($_POST['pekerjaanayah']) ? $_POST['pekerjaanayah'] : '' ?>" required/>
                </div>
                <div class="form-group">
                    <label>Nama Ibu:</label>
                    <input type="text" name="namaibu" class="form-control" value="<?=isset($_POST['namaibu']) ? $_POST['namaibu'] : '' ?>" required/>
                </div>
                <div class="form-group">
                    <label>Pekerjaan Ibu:</label>
                    <input type="text" name="pekerjaanibu" class="form-control" value="<?=isset($_POST['pekerjaanibu']) ? $_POST['pekerjaanibu'] : '' ?>" required/>
                </div>
                <div class="form-group">
                    <label>Nama Wali:</label>
                    <input type="text" name="namawali" class="form-control" value="<?=isset($_POST['namawali']) ? $_POST['namawali'] : '' ?>" required/>
                </div>
                <div class="form-group">
                    <label>Pekerjaan Wali:</label>
                    <input type="text" name="pekerjaanwali" class="form-control" value="<?=isset($_POST['pekerjaanwali']) ? $_POST['pekerjaanwali'] : '' ?>" required/>
                </div>
                <div class="form-group">
                    <label>Asal Sekolah:</label>
                    <input type="text" name="asalsekolah" class="form-control" value="<?=isset($_POST['asalsekolah']) ? $_POST['asalsekolah'] : '' ?>" required/>
                </div>
                <div class="form-group">
                    <label>Tanggal Masuk Sekolah:</label>
                    <input type="date" name="tglmasuksekolah" class="form-control" value="<?=isset($_POST['tglmasuksekolah']) ? $_POST['tglmasuksekolah'] : '' ?>" required/>
                </div>
                <div class="form-group">
                    <label>Alamat:</label>
                    <textarea name="alamat" class="form-control" style="resize: none" required><?=isset($_POST['alamat']) ? $_POST['alamat'] : '' ?></textarea>
                </div>
                <div class="form-group">
                    <label>Username:</label>
                    <input type="text" name="username" class="form-control" value="<?=isset($_POST['username']) ? $_POST['username'] : '' ?>" required/>
                </div>
                <div class="form-group">
                    <label>Password:</label>
                    <input type="password" name="password" class="form-control" required/>
                </div>
            </div>
        </div>
    </div>
    </form>
</div>
            