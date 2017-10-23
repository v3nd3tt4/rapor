<div class="row">
    <div class="col-lg-12">
        <div class="ibox float-e-margins">
            <div class="ibox-title">
                <div class="row">
                    <div class="col-md-12">
                        <a href="<?=base_url()?>adminNew/home/tambah_dosen" class="btn btn-danger" style="float: right;"><i class="fa fa-plus"></i>  Tambah Dosen Baru</a>
                    </div>
                </div>
            </div>
            <div class="ibox-content">
            	<?=@$this->session->flashdata('msg')?>
                <table class="table table-striped table-hover dttbl">
                    <thead>
                        <tr>
                            <th>No.</th>
                            <th>Jenis ID</th>
                            <th>NIDK / NIDN</th>
                            <th>Nama</th>
                            <th>Kategori</th>                          
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
                            <td><?=$row->jenis_id?></td>
                            <td><?=$row->kode?></td>
                            <td><?=$row->nama?></td>
                            <td><?=$row->kategori_dosen?></td>
                            <td>
                                <a href="<?=base_url()?>adminNew/home/edit_dosen/<?=$row->id?>" class="btn btn-xs btn-warning"><i class="fa fa-pencil"></i> Edit </a>
                                <a href="<?=base_url()?>family/hapus_family/<?=$row->id?>/<?=$row->foto != '' ? $row->foto : ''?>" class="btn btn-xs btn-success" onclick="return confirm('yakin akan menghapus data ini?')"><i class="fa fa-remove"></i>  Hapus </a>
                                <a href="<?=base_url()?>prev/index/<?=$row->id?>/<?php $kata=array('.', '/', '(', ')', ':', ';', ',', ' '); echo str_replace($kata,'-',$row->nama); ?>" target="_blank" class="btn btn-xs btn-danger"><i class="fa fa-eye"></i> Lihat </a>
                            </td>
                        </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
            