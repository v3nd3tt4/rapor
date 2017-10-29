<div class="row">
    <div class="col-lg-12">
        <div class="ibox float-e-margins">
            <div class="ibox-title">
                <div class="row">
                    <div class="col-md-8">
                        <h2>Riwayat Nilai</h2>
                    </div>
                    <div class="col-md-4">
                        
                    </div>
                </div>
            </div>
            <div class="ibox-content">
                <form action="<?=base_url()?>nilai/list_siswa" method="POST">
                    <div class="form-group">
                        <label>Silahkan pilih kelas terlebih dahulu:</label>
                        <select name="kelas" class="form-control" required>
                            <option value="">--pilih--</option>
                            <?php foreach($kelas->result() as $kelas){?>
                            <option value="<?=$kelas->idkelas?>"><?=$kelas->kodekelas?> - <?=$kelas->namakelas?></option>
                            <?php }?>
                        </select>
                    </div>
                    <button type="submit" class="btn btn-danger"><i class="fa fa-arrow-right"></i> Selanjutnya</button>
                </form>
            </div>
        </div>
    </div>
</div>