<div class="row">
    <form action ="<?=base_url()?>mapel/update_mapel" method="POST">
    <div class="col-lg-12">
        <div class="ibox float-e-margins">
            <div class="ibox-title">
                <div class="row">
                    <div class="col-md-9">
                        <h2>Tambah Mata Pelajaran</h2>
                    </div>
                    <div class="col-md-3">
                        <div class="pull-right">
                            <a href="<?=base_url()?>mapel" class="btn btn-danger" ><i class="fa fa-arrow-left" aria-hidden="true"></i>  Kembali</a>  
                            <button type="submit" class="btn btn-success"><i class="fa fa-save"></i>  Simpan</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="ibox-content">
            	<?=@$this->session->flashdata('msg')?>
                <input type="hidden" name="idmapel" value="<?=$list->row()->idmapel?>" />
                <div class="form-group">
                    <label>Kode Mata Pelajaran:</label>
                    <input type="text" name="kodemapel" class="form-control" value="<?=$list->row()->kodemapel?>" required />
                </div>
                <div class="form-group">
                    <label>Nama Mata Pelajaran:</label>
                    <input type="text" name="namamapel" class="form-control" value="<?=$list->row()->namamapel?>" required/>
                </div>
                <div class="form-group">
                    <label>Kategori Mata Pelajaran:</label>
                    <input type="text" name="kategorimapel" class="form-control" value="<?=$list->row()->kategorimapel?>" required/>
                </div>
            </div>
        </div>
    </div>
    </form>
</div>
            