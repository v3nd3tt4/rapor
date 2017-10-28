<div class="row">
    <form action ="<?=base_url()?>home/update_guru" method="POST">
    <div class="col-lg-12">
        <div class="ibox float-e-margins">
            <div class="ibox-title">
                <div class="row">
                    <div class="col-md-9">
                        <h2>Data Guru</h2>
                    </div>
                    <div class="col-md-3">
                        <div class="pull-right">
                            <a href="<?=base_url()?>home/guru" class="btn btn-danger" ><i class="fa fa-arrow-left" aria-hidden="true"></i>  Kembali</a>  
                            <button type="submit" class="btn btn-success"><i class="fa fa-save"></i>  Update</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="ibox-content">
            	<?=@$this->session->flashdata('msg')?>
                <input type="hidden" name="idguru" value="<?=$list->row()->idguru?>" />

                <div class="form-group">
                    <label>Kode:</label>
                    <input type="text" name="kodeguru" class="form-control" value="<?=$list->row()->kodeguru?>" required />
                </div>
                <div class="form-group">
                    <label>Nama:</label>
                    <input type="text" name="namaguru" class="form-control" value="<?=$list->row()->namaguru?>" required/>
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
                    <label>Nomor Telpon:</label>
                    <input type="text" name="telp" class="form-control" value="<?=$list->row()->telp?>" required/>
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
                    <textarea name="alamat" class="form-control" style="resize: none" required><?=$list->row()->alamat?></textarea>
                </div>
                <div class="form-group">
                    <label>Username:</label>
                    <input type="text" name="username" class="form-control" value="<?=$list->row()->username?>" required/>
                </div>
                <div class="form-group">
                    <label>Password:</label>
                    <input type="password" name="password" class="form-control" placeholder="isi jika hanya anda ingin merubah password"/>
                </div>
            </div>
        </div>
    </div>
    </form>
</div>
            