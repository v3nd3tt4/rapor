<div class="row">
    <form action ="<?=base_url()?>predikat/update_predikat" method="POST">
    <div class="col-lg-12">
        <div class="ibox float-e-margins">
            <div class="ibox-title">
                <div class="row">
                    <div class="col-md-9">
                        <h2>Tambah Predikat</h2>
                    </div>
                    <div class="col-md-3">
                        <div class="pull-right">
                            <a href="<?=base_url()?>predikat" class="btn btn-danger" ><i class="fa fa-arrow-left" aria-hidden="true"></i>  Kembali</a>  
                            <button type="submit" class="btn btn-success"><i class="fa fa-save"></i>  Simpan</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="ibox-content">
            	<?=@$this->session->flashdata('msg')?>
                <input type="hidden" name="idpredikat" value="<?=$list->row()->idpredikat?>" />
                <div class="form-group">
                    <label>Nilai Atas:</label>
                    <input type="text" name="nilaiatas" class="form-control" value="<?=$list->row()->nilaiatas?>" required />
                </div>
                <div class="form-group">
                    <label>Nilai Bawah:</label>
                    <input type="text" name="nilaibawah" class="form-control" value="<?=$list->row()->nilaibawah?>" required />
                </div>
                <div class="form-group">
                    <label>Huruf:</label>
                    <input type="text" name="huruf" class="form-control" value="<?=$list->row()->huruf?>" required/>
                </div>
                <div class="form-group">
                    <label>Predikat:</label>
                    <input type="text" name="predikat" class="form-control" value="<?=$list->row()->predikat?>" required/>
                </div>
            </div>
        </div>
    </div>
    </form>
</div>
            