<div class="row">
    <div class="col-lg-12">
        <div class="ibox float-e-margins">
            <div class="ibox-title">
                <div class="row">
                    <div class="col-md-12">
                        <a href="<?=base_url()?>adminNew/home/tambah_galeri" class="btn btn-danger" style="float: right;"><i class="fa fa-plus"></i>  Tambah Gambar Baru</a>
                    </div>
                </div>
            </div>
            <div class="ibox-content">
                <?=@$this->session->flashdata('msg')?>
                <table class="table table-striped table-hover dttbl">
                    <thead>
                        <tr>
                            <th>No.</th>
                            <th>Judul</th>
                            <th>Nama Gambar</th>
                            <th>Kategori</th>                      
                            <th>aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php 
                        $no = 1; 
                        foreach($list->result() as $row){
                        ?>
                        <tr>
                            <td><?=$no++?>.</td>
                            <td><?=$row->judul?></td>
                            <td><?=$row->nama?></td>
                            <td><?=$row->kategori?></td>
                            <td>
                                <a href="<?=base_url()?>adminNew/home/edit_galeri/<?=$row->id?>" class="btn btn-xs btn-warning"><i class="fa fa-pencil"></i> Edit </a>
                                <a href="<?=base_url()?>gallery/hapus_galeri/<?=$row->id?>/<?=$row->nama?>" onclick="return confirm('yakin akan menghapus data ini?')" class="btn btn-xs btn-danger"><i class="fa fa-remove"></i> Hapus</a>
                                <a href="<?=base_url()?>assets/upload/images/asli/<?=$row->nama?>" class="btn btn-xs btn-primary"><i class="fa fa-eye"></i> Lihat</a>
                            </td>
                        </tr>
                        <?php
                        }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>