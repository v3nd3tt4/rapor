<div class="row">
    <div class="col-lg-12">
        <div class="ibox float-e-margins">
            <div class="ibox-title">
                <div class="row">
                    <div class="col-md-8">
                        <h2>Raport Siswa</h2>
                    </div>
                    <div class="col-md-4">
                        
                    </div>
                </div>
            </div>
            <div class="ibox-content">
                <table class="table table-striped dttbl">
                    <thead>
                        <tr>
                            <th>No.</th>
                            <th>Tahun Ajaran</th>
                            <th>Semester</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $no=1; foreach($data->result() as $row){?>
                        <tr>
                            <td><?=$no++?>.</td>
                            <td><?=$row->thnajaran?></td>
                            <td><?=$row->semester?></td>
                            <td>
                                <a href="<?=base_url()?>siswa_user/cetak_raport_siswa?idsiswa=<?=$siswa->row()->idsiswa?>&idkelas=<?=$kelas->row()->idkelas?>&semester=<?=$row->semester?>&ta=<?=$row->thnajaran?>" target="_blank" class="btn btn-xs btn-danger"><i class="fa fa-eye"></i> lihat </a>
                            </td>
                        </tr>
                        <?php }?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>