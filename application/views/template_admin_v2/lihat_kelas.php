<div class="row">
    <form action ="<?=base_url()?>kelas/update_kelas" method="POST">
    <div class="col-lg-12">
        <div class="ibox float-e-margins">
            <div class="ibox-title">
                <div class="row">
                    <div class="col-md-9">
                        <h2>Data Kelas</h2>
                    </div>
                    <div class="col-md-3">
                        <div class="pull-right">
                            <a href="<?=base_url()?>kelas" class="btn btn-danger" ><i class="fa fa-arrow-left" aria-hidden="true"></i>  Kembali</a>  
                            <button type="submit" class="btn btn-success"><i class="fa fa-save"></i>  Update</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="ibox-content">
            	<?=@$this->session->flashdata('msg')?>
                <input type="hidden" name="idkelas" value="<?=$list->row()->idkelas?>" />
                <div class="form-group">
                    <label>Kode:</label>
                    <input type="text" name="kodekelas" class="form-control" value="<?=$list->row()->kodekelas ?>" required />
                </div>
                <div class="form-group">
                    <label>Nama Kelas:</label>
                    <input type="text" name="namakelas" class="form-control" value="<?=$list->row()->namakelas ?>" required/>
                </div>
                <div class="form-group">
                    <label>Bidang Studi:</label>
                    <input type="text" name="bidangstudi" class="form-control" value="<?=$list->row()->bidangstudi ?>" required/>
                </div>
                <div class="form-group">
                    <label>Program Studi Keahlian:</label>
                    <input type="text" name="programstudikeahlian" class="form-control" value="<?=$list->row()->programstudikeahlian ?>" required/>
                </div>
                <div class="form-group">
                    <label>Kompetensi Keahlian</label>
                    <input type="text" name="kompetensikeahlian" class="form-control" value="<?=$list->row()->kompetensikeahlian ?>" required/>
                </div>
                <div class="form-group">
                    <label>Wali kelas:</label>
                    <select name="namawalikelas" class="form-control" required>
                        <option value="">--pilih wali kelas--</option>
                        <?php foreach($guru->result() as $guru){?>
                        <option value="<?=$guru->idguru?>" <?=$list->row()->namawalikelas == $guru->idguru ? 'selected' : ''?>><?=$guru->kodeguru?> - <?=$guru->namaguru?></option>
                        <?php }?>
                    </select>
                </div>
                <div class="form-group">
                    <label>Semester:</label>
                    <input type="text" name="semester" class="form-control" value="<?=$list->row()->semester ?>" required/>
                </div>
            </div>
        </div>
    </div>
    </form>
</div>
            