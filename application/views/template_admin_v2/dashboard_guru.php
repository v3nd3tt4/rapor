<div class="row">
    <div class="col-lg-12">
        <div class="ibox float-e-margins">
            <div class="ibox-title">
                <div class="row">
                    <div class="col-md-8">
                        <h2>Data Guru</h2>
                    </div>
                    <div class="col-md-4">
                        <a href="<?=base_url()?>home/tambah_guru" class="btn btn-danger" style="float: right;"><i class="fa fa-plus"></i>  Tambah Guru</a>
                    </div>
                </div>
            </div>
            <div class="ibox-content">
            	<?=@$this->session->flashdata('msg')?>
                <table class="table table-striped table-hover dttbl">
                    <thead>
                        <tr>
                            <th>No.</th>
                            <th>Kode</th>
                            <th>Nama</th>
                            <th>aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $no = 1; 
                        foreach ($list->result() as $row) {
                            # code...
                        ?>                        
                        <tr>
                            <td><?=$no++?>.</td>
                            <td><?=$row->kodeguru?></td>
                            <td><?=$row->namaguru?></td>
                            <td>
                                <!-- <a href="<?=base_url()?>home/edit_guru/<?=$row->idguru?>" class="btn btn-xs btn-warning"><i class="fa fa-pencil"></i> Edit </a> -->
                                <a href="<?=base_url()?>home/hapus_guru/<?=$row->idguru?>" class="btn btn-xs btn-success" onclick="return confirm('yakin akan menghapus data ini?')"><i class="fa fa-remove"></i>  Hapus </a>
                                <a href="<?=base_url()?>home/lihat_guru/<?=$row->idguru?>" target="_blank" class="btn btn-xs btn-danger"><i class="fa fa-eye"></i> Lihat </a>
                            </td>
                        </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
            