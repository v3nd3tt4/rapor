<div class="row">
    <form action ="<?=base_url()?>home/simpan_guru" method="POST">
    <div class="col-lg-12">
        <div class="ibox float-e-margins">
            <div class="ibox-title">
                <div class="row">
                    <div class="col-md-9">
                        <h2>Tambah Guru</h2>
                    </div>
                    <div class="col-md-3">
                        <div class="pull-right">
                            <a href="<?=base_url()?>home/guru" class="btn btn-danger" ><i class="fa fa-arrow-left" aria-hidden="true"></i>  Kembali</a>  
                            <button type="submit" class="btn btn-success"><i class="fa fa-save"></i>  Simpan</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="ibox-content">
            	<?=@$this->session->flashdata('msg')?>
                <div class="form-group">
                    <label>Kode:</label>
                    <input type="text" name="kodeguru" class="form-control" required />
                </div>
                <div class="form-group">
                    <label>Nama:</label>
                    <input type="text" name="namaguru" class="form-control" required/>
                </div>
                <div class="form-group">
                    <label>Tempat Lahir:</label>
                    <input type="text" name="tempatlahir" class="form-control" required/>
                </div>
                <div class="form-group">
                    <label>Tanggal Lahir:</label>
                    <input type="date" name="tgllahir" class="form-control" required/>
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
                    <label>Nomor Telpon:</label>
                    <input type="text" name="telp" class="form-control" required/>
                </div>
                <div class="form-group">
                    <label>Status Kepegawaian:</label>
                    <input type="text" name="statuskepegawaian" class="form-control" required/>
                </div>
                <div class="form-group">
                    <label>Jenis PTK:</label>
                    <input type="text" name="jenisptk" class="form-control" required/>
                </div>
                <div class="form-group">
                    <label>Alamat:</label>
                    <textarea name="alamat" class="form-control" style="resize: none" required></textarea>
                </div>
                <div class="form-group">
                    <label>Username:</label>
                    <input type="text" name="username" class="form-control" required/>
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
            