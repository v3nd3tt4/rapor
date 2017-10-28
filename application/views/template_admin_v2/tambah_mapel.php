<div class="row">
    <form action ="<?=base_url()?>mapel/simpan_mapel" method="POST">
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
                <div class="form-group">
                    <label>Kode Mata Pelajaran:</label>
                    <input type="text" name="kodemapel" class="form-control" value="<?=isset($_POST['kodemapel']) ? $_POST['kodemapel'] : '' ?>" required />
                </div>
                <div class="form-group">
                    <label>Nama Mata Pelajaran:</label>
                    <input type="text" name="namamapel" class="form-control" value="<?=isset($_POST['namamapel']) ? $_POST['namamapel'] : '' ?>" required/>
                </div>
                <div class="form-group">
                    <label>Kategori Mata Pelajaran:</label>
                    <select name="kategorimapel" class="form-control" value="<?=isset($_POST['kategorimapel']) ? $_POST['kategorimapel'] : '' ?>" required/>
                        <option value="">--pilih--</option>
                        <option value="normatif">normatif</option>
                        <option value="adaptif">adaptif</option>
                        <option value="produktif">produktif</option>
                        <option value="mulok">mulok</option>
                    </select>
                </div>
            </div>
        </div>
    </div>
    </form>
</div>
            