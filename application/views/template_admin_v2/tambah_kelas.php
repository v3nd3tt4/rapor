<div class="row">
    <form action ="<?=base_url()?>kelas/simpan_kelas" method="POST">
    <div class="col-lg-12">
        <div class="ibox float-e-margins">
            <div class="ibox-title">
                <div class="row">
                    <div class="col-md-9">
                        <h2>Tambah Kelas</h2>
                    </div>
                    <div class="col-md-3">
                        <div class="pull-right">
                            <a href="<?=base_url()?>kelas" class="btn btn-danger" ><i class="fa fa-arrow-left" aria-hidden="true"></i>  Kembali</a>  
                            <button type="submit" class="btn btn-success"><i class="fa fa-save"></i>  Simpan</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="ibox-content">
            	<?=@$this->session->flashdata('msg')?>
                <div class="form-group">
                    <label>Kode:</label>
                    <input type="text" name="kodekelas" class="form-control" value="<?=isset($_POST['kodekelas']) ? $_POST['kodekelas'] : '' ?>" required />
                </div>
                <div class="form-group">
                    <label>Nama Kelas:</label>
                    <input type="text" name="namakelas" class="form-control" value="<?=isset($_POST['namakelas']) ? $_POST['namakelas'] : '' ?>" required/>
                </div>
                <div class="form-group">
                    <label>Bidang Studi:</label>
                    <input type="text" name="bidangstudi" class="form-control" value="<?=isset($_POST['bidangstudi']) ? $_POST['bidangstudi'] : '' ?>" required/>
                </div>
                <div class="form-group">
                    <label>Program Studi Keahlian:</label>
                    <input type="text" name="programstudikeahlian" class="form-control" value="<?=isset($_POST['programstudikeahlian']) ? $_POST['programstudikeahlian'] : '' ?>" required/>
                </div>
                <div class="form-group">
                    <label>Kompetensi Keahlian</label>
                    <input type="text" name="kompetensikeahlian" class="form-control" value="<?=isset($_POST['kompetensikeahlian']) ? $_POST['kompetensikeahlian'] : '' ?>" required/>
                </div>
                <div class="form-group">
                    <label>Wali kelas:</label>
                    <select name="namawalikelas" class="form-control" required>
                        <option value="">--pilih wali kelas--</option>
                        <?php foreach($guru->result() as $guru){?>
                        <option value="<?=$guru->idguru?>"><?=$guru->kodeguru?> - <?=$guru->namaguru?></option>
                        <?php }?>
                    </select>
                </div>
                <div class="form-group">
                    <label>Semester:</label>
                    <input type="text" name="semester" class="form-control" value="<?=isset($_POST['semester']) ? $_POST['semester'] : '' ?>" required/>
                </div>
            </div>
        </div>
    </div>
    </form>
</div>
            