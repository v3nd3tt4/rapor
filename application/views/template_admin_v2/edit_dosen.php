<?php $row = $data->row()?>
<div class="row">
    <div class="col-lg-12">
        <div class="ibox float-e-margins">
            <form id="frm_tambah_dosen" enctype="multipart/form-data" method="POST" action="<?=base_url()?>family/update_family">
            	<div class="ibox-title">
                    <div class="row">
                        <div class="col-md-10">
                            <h3>Edit Dosen</h3>
                        </div>
                        <div class="col-md-2">
                            <button type="submit" class="btn btn-danger" style="float: right;"><i class="fa fa-save"></i>  Simpan</button>
                        </div>
                    </div>
                </div>
                <div class="ibox-content">
                    <?=@$this->session->flashdata('msg')?>
            		<div class="form-group">
            			<label>Nama:</label>
            			<input type="text" name="namafamily" class="form-control" value="<?=$row->nama?>" required />
                        <input type="hidden" name="idfamily" class="form-control" value="<?=$row->id?>" required />
            		</div>
            		<div class="form-group">
            			<label>Jenis ID:</label>
            			<select name="idnyafamily" class="form-control" required>
                            <option value="">--pilih--</option>
                            <option value="-" <?=$row->jenis_id == '-' ? 'selected' : ''?>>-</option>
                            <option value="NIDN" <?=$row->jenis_id == 'NIDN' ? 'selected' : ''?>>NIDN</option>
                            <option value="NIDK" <?=$row->jenis_id == 'NIDK' ? 'selected' : ''?>>NIDK</option>
                        </select>
            		</div>
                    <div class="form-group">
                        <label>NIDN / NIDK:</label>
                        <input type="text" name="kodefamily" class="form-control" value="<?=$row->kode?>"  required />
                    </div>
            		<div class="form-group">
            			<label>Foto:</label>
            			<input type="file" name="gambarfamily" class="form-control"/>
            		</div>
                    <div class="form-group">
                        <label>Kategori User:</label>
                        <select class="form-control" name="kategorifamily" id="kategorifamily">
                            <option selected>-- pilih --</option>     
                            <option value="Dosen" <?=$row->kategori == 'Dosen' ? 'selected' : ''?>>Dosen</option>
                            <option value="Mahasiswa" <?=$row->kategori == 'Mahasiswa' ? 'selected' : ''?>>Mahasiswa</option>
                            <option value="Alumni" <?=$row->kategori == 'Alumni' ? 'selected' : ''?>>Alumni</option>                          
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Kategori Dosen:</label>
                        <select name="kategoridosen" class="form-control" required>
                            <option value="">--pilih--</option>
                            <option value="-" <?=$row->kategori_dosen == '-' ? 'selected' : ''?>>-</option>
                            <option value="dosen" <?=$row->kategori_dosen == 'dosen' ? 'selected' : ''?>>dosen</option>
                            <option value="dosen_kontrak" <?=$row->kategori_dosen == 'dosen_kontrak' ? 'selected' : ''?>>dosen_kontrak</option>
                            <option value="dosen_Luar_biasa" <?=$row->kategori_dosen == 'dosen_Luar_biasa' ? 'selected' : ''?>>dosen_Luar_biasa</option>
                        </select>
                    </div>
            		<div class="form-group">
            			<label>Deskripsi:</label>
            			<textarea name="keteranganfamily" class="form-control ckeditor" style="height: 700px" required><?=$row->keterangan?></textarea>
            		</div>
                </div>
            </form>
        </div>
    </div>
</div>
