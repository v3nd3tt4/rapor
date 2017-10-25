<div class="row">
    <div class="col-lg-12">
        <div class="ibox float-e-margins">
            <div class="ibox-title">
                <div class="row">
                    <div class="col-md-8">
                        <h2>Data Siswa Di Kelas</h2>
                    </div>
                    <div class="col-md-4">
                        <!-- <a href="<?=base_url()?>kelas/tambah_kelas" class="btn btn-danger" style="float: right;"><i class="fa fa-plus"></i>  Tambah Kelas</a> -->
                    </div>
                </div>
            </div>
            <div class="ibox-content">
            	<?=@$this->session->flashdata('msg')?>
                <table class="table table-striped table-hover dttbl">
                    <thead>
                        <tr>
                            <th>No.</th>
                            <th>Nis</th>
                            <th>Nama Siswa</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $no = 1; 
                        foreach ($list->result() as $row) {
                            # code...
                        ?>                        
                        <tr>
                            <td><?=$no++?>.</td>
                            <td><a href="<?=base_url()?>siswa/lihat_siswa/<?=$row->idsiswa?>" target="_blank"><?=$row->nis?></a></td>
                            <td><?=$row->namasiswa?></td>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
            