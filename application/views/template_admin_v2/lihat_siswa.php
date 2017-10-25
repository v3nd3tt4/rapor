<div class="row">
    <form action ="<?=base_url()?>siswa/update_siswa" method="POST">
    <div class="col-lg-12">
        <div class="ibox float-e-margins">
            <div class="ibox-title">
                <div class="row">
                    <div class="col-md-9">
                        <h2>Data Siswa</h2>
                    </div>
                    <div class="col-md-3">
                        <div class="pull-right">
                            <a href="<?=base_url()?>siswa" class="btn btn-danger" ><i class="fa fa-arrow-left" aria-hidden="true"></i>  Kembali</a>  
                            <button type="submit" class="btn btn-success"><i class="fa fa-save"></i>  Update</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="ibox-content">
            	<?=@$this->session->flashdata('msg')?>
                <input type="hidden" name="idsiswa" value="<?=$list->row()->idsiswa?>" />
                <div class="form-group">
                    <label>NIS:</label>
                    <input type="text" name="nis" class="form-control" value="<?=$list->row()->nis?>" required />
                </div>
                <div class="form-group">
                    <label>Nama:</label>
                    <input type="text" name="namasiswa" class="form-control" value="<?=$list->row()->namasiswa?>"  required/>
                </div>
                <div class="form-group">
                    <label>Kelas:</label>
                    <select name="idkelas" class="form-control" required>
                        <option value="">--pilih kelas--</option>
                        <?php foreach($kelas->result() as $kelas){?>
                        <option value="<?=$kelas->idkelas?>" <?=$list->row()->idkelas == $kelas->idkelas ? 'selected' : ''?>><?=$kelas->kodekelas.' - '.$kelas->namakelas?></option>
                        <?php }?>
                    </select>
                </div>
                <div class="form-group">
                    <label>Tempat Lahir:</label>
                    <input type="text" name="tempatlahir" class="form-control" value="<?=$list->row()->tempatlahir?>" required/>
                </div>
                <div class="form-group">
                    <label>Tanggal Lahir:</label>
                    <input type="date" name="tgllahir" class="form-control" value="<?=$list->row()->tgllahir?>" required/>
                </div>
                <div class="form-group">
                    <label>Jenis Kelamin:</label>
                    <select name="jk" class="form-control" required>
                        <option value="">--pilih--</option>
                        <option value="Pria" <?=$list->row()->jk == 'Pria' ? 'selected' : ''?>>pria</option>
                        <option value="Wanita" <?=$list->row()->jk == 'Wanita' ? 'selected' : ''?>>wanita</option>
                    </select>
                </div>
                <div class="form-group">
                    <label>Agama:</label>
                    <select name="agama" class="form-control" required>
                        <option value="">--pilih--</option>
                        <option value="Islam" <?=$list->row()->agama == 'Islam' ? 'selected' : ''?> >Islam</option>
                        <option value="Kristen" <?=$list->row()->agama == 'Kristen' ? 'selected' : ''?> >Kristen</option>
                        <option value="Katolik" <?=$list->row()->agama == 'Katolik' ? 'selected' : ''?> >Katolik</option>
                        <option value="Hindu" <?=$list->row()->agama == 'Hindu' ? 'selected' : ''?> >Hindu</option>
                        <option value="Budha" <?=$list->row()->agama == 'Budha' ? 'selected' : ''?> >Budha</option>
                        <option value="Kongucu" <?=$list->row()->agama == 'Kongucu' ? 'selected' : ''?> >Kongucu</option>
                    </select>
                </div>
                <div class="form-group">
                    <label>Nomor Telpon (ayah atau Ibu):</label>
                    <input type="text" name="telpayah" class="form-control" value="<?=$list->row()->telpayah?>" required/>
                </div>
                <div class="form-group">
                    <label>Nama Ayah:</label>
                    <input type="text" name="namaayah" class="form-control" value="<?=$list->row()->namaayah?>" required/>
                </div>
                <div class="form-group">
                    <label>Pekerjaan Ayah:</label>
                    <input type="text" name="pekerjaanayah" class="form-control" value="<?=$list->row()->pekerjaanayah?>" required/>
                </div>
                <div class="form-group">
                    <label>Nama Ibu:</label>
                    <input type="text" name="namaibu" class="form-control" value="<?=$list->row()->namaibu?>" required/>
                </div>
                <div class="form-group">
                    <label>Pekerjaan Ibu:</label>
                    <input type="text" name="pekerjaanibu" class="form-control" value="<?=$list->row()->pekerjaanibu?>" required/>
                </div>
                <div class="form-group">
                    <label>Nama Wali:</label>
                    <input type="text" name="namawali" class="form-control" value="<?=$list->row()->namawali?>" required/>
                </div>
                <div class="form-group">
                    <label>Pekerjaan Wali:</label>
                    <input type="text" name="pekerjaanwali" class="form-control" value="<?=$list->row()->pekerjaanwali?>" required/>
                </div>
                <div class="form-group">
                    <label>Asal Sekolah:</label>
                    <input type="text" name="asalsekolah" class="form-control" value="<?=$list->row()->asalsekolah?>" required/>
                </div>
                <div class="form-group">
                    <label>Tanggal Masuk Sekolah:</label>
                    <input type="date" name="tglmasuksekolah" class="form-control" value="<?=$list->row()->tglmasuksekolah?>" required/>
                </div>
                <div class="form-group">
                    <label>Alamat:</label>
                    <textarea name="alamat" class="form-control" style="resize: none" required><?=$list->row()->alamat?></textarea>
                </div>
                <div class="form-group">
                    <label>Username:</label>
                    <input type="text" name="username" class="form-control" value="<?=$list->row()->username?>" required/>
                </div>
                <div class="form-group">
                    <label>Password:</label>
                    <input type="password" name="password" placeholder="isi jika hanya anda ingin merubah password" class="form-control"/>
                </div>
            </div>
        </div>
    </div>
    </form>
</div>
            