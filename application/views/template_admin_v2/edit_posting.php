<?php $row = $data->row()?>
<div class="row">
    <div class="col-lg-12">
        <div class="ibox float-e-margins">
            <form method="POST" enctype="multipart/form-data" action="<?=base_url()?>posting/update_posting">
            	<div class="ibox-title">
                    <div class="row">
                        <div class="col-md-10">
                            <h3>Update Posting</h3>
                        </div>
                        <div class="col-md-2">
                            <button type="submit" class="btn btn-danger" style="float: right;"><i class="fa fa-save"></i>  Simpan</button>
                        </div>
                    </div>
                </div>
                <div class="ibox-content">
                    <?=@$this->session->flashdata('msg')?>
            		<div class="form-group">
            			<label>Judul:</label>
            			<input type="text" name="judulposting" class="form-control" value="<?=$row->judul?>" required />
            			<input type="hidden" name="idposting" class="form-control" value="<?=$row->id?>" required />
            		</div>
            		<div class="form-group">
            			<label>Kategori:</label>
            			<select name="kategoriposting" class="form-control" required>
                            <option value="">--pilih--</option>
                            <option value="sejarah" <?=$row->kategori == 'sejarah' ? 'selected' : ''?>>sejarah</option>
                            <option value="visi_misi" <?=$row->kategori == 'visi_misi' ? 'selected' : ''?>>visi_misi</option>
                            <option value="struktur_organisasi" <?=$row->kategori == 'struktur_organisasi' ? 'selected' : ''?>>struktur_organisasi</option>
                            <option value="activity" <?=$row->kategori == 'activity' ? 'selected' : ''?>>activity</option>
                            <option value="informasi_pengumuman" <?=$row->kategori == 'informasi_pengumuman' ? 'selected' : ''?>>informasi_pengumuman</option>
                            <option value="kurikulum" <?=$row->kategori == 'kurikulum' ? 'selected' : ''?>>kurikulum</option>
                            <option value="konseling" <?=$row->kategori == 'konseling' ? 'selected' : ''?>>konseling</option>
<option value="pages" <?=$row->kategori == 'pages' ? 'selected' : ''?>>pages</option>
                        </select>
            		</div>
            		<div class="form-group">
            			<label>Gambar Utama:</label>
            			<input type="file" name="gambarposting" class="form-control"/>
            		</div>
            		<div class="form-group">
            			<label>Artikel:</label>
            			<textarea name="keteranganposting" class="form-control ckeditor" style="height: 700px" required><?=$row->keterangan?></textarea>
            		</div>
                </div>
            </form>
        </div>
    </div>
</div>
