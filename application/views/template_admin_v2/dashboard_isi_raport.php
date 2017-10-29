<div class="row">
    <div class="col-lg-12">
        <div class="ibox float-e-margins">
            <div class="ibox-title">
                <div class="row">
                    <div class="col-md-8">
                        <h2>Isi Raport</h2>
                    </div>
                    <div class="col-md-4">
                        
                    </div>
                </div>
            </div>
            <div class="ibox-content">
                <form action="<?=base_url()?>nilai/list_siswa_isi_raport" method="POST">
                    <div class="form-group">
                        <label>Kelas:</label>
                        <select name="kelas" class="form-control" required>
                            <option value="">--pilih--</option>
                            <?php foreach($kelas->result() as $kelas){?>
                            <option value="<?=$kelas->idkelas?>"><?=$kelas->kodekelas?> - <?=$kelas->namakelas?></option>
                            <?php }?>
                        </select>
                    </div>
                    <?php 
                        $bulansaatini = date('m');
                        $tahunsaatini = date('Y');
                        if($bulansaatini == '6' || $bulansaatini == '7' || $bulansaatini == '8' || $bulansaatini == '9' || $bulansaatini == '10' || $bulansaatini == '11' || $bulansaatini == '12'
                        ){
                            $tahun = $tahunsaatini.'/'.date('Y', strtotime('+1 year', strtotime( $tahunsaatini ))); 
                            $semester = 1;
                            $text = 'ganjil';
                        }else{
                            $tahun = date('Y', strtotime('-1 year', strtotime( $tahunsaatini ))).'/'.$tahunsaatini;
                            $semester = 2;
                            $text = 'ganjil';
                        }
                    ?>
                    <div class="form-group">
                        <label>Tahun Ajaran:</label>
                        <input type="text" name="ta" class="form-control" value="<?=$tahun?>" required readonly/>
                    </div>
                    <div class="form-group">
                        <label>Semester:</label>
                        <input type="text" name="semester" class="form-control" value="<?=$semester.' - '.$text?>" required readonly/>
                    </div>
                    <button type="submit" class="btn btn-danger"><i class="fa fa-arrow-right"></i> Selanjutnya</button>
                </form>
            </div>
        </div>
    </div>
</div>