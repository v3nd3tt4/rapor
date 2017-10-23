<div class="row">
    <div class="col-lg-12">
        <div class="ibox float-e-margins">
            <form id="frm_tambah_posting" enctype="multipart/form-data" method="POST" action="<?=base_url()?>posting/simpan_posting">
            	<div class="ibox-title">
                    <div class="row">
                        <div class="col-md-10">
                            <h3>Tambah Posting</h3>
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
            			<input type="text" name="judulposting" class="form-control" required />
            		</div>
            		<div class="form-group">
            			<label>Kategori:</label>
            			<select name="kategoriposting" class="form-control" required>
                            <option value="">--pilih--</option>
                            <option value="sejarah">sejarah</option>
                            <option value="visi_misi">visi_misi</option>
                            <option value="struktur_organisasi">struktur_organisasi</option>
                            <option value="activity">activity</option>
                            <option value="informasi_pengumuman">informasi_pengumuman</option>
                            <option value="kurikulum">kurikulum</option>
                            <option value="konseling">konseling</option>
                            <option value="pages">pages</option>
                        </select>
            		</div>
            		<div class="form-group">
            			<label>Gambar Utama:</label>
            			<input type="file" name="gambarposting" class="form-control"/>
            		</div>
            		<div class="form-group">
            			<label>Artikel:</label>
            			<textarea name="keteranganposting" class="form-control ckeditor" style="height: 700px" required></textarea>
            		</div>
                </div>
            </form>
        </div>
    </div>
</div>
