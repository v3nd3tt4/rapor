<div class="row">
    <div class="col-lg-12">
        <div class="ibox float-e-margins">
            <div class="ibox-title">
                <div class="row">
                    <div class="col-md-12">
                        <h3>Daftar Saran</h3>
                    </div>
                </div>
            </div>
            <div class="ibox-content">
                <?=@$this->session->flashdata('msg')?>
                <table class="table table-striped table-hover dttbl">
                    <thead>
                        <tr>
                            <th>No.</th>
                            <th>Nama</th>
                            <th>Email</th>
                            <th>Tanggal</th>                      
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
                            <td><?=$row->nama?></td>
                            <td><?=$row->email?></td>
                            <td><?=$row->tanggal?></td>
                            <td>
                                <a href="<?=base_url()?>adminNew/home/detail_saran/<?=$row->id?>" class="btn btn-xs btn-primary"><i class="fa fa-eye"></i> Detail</a>
                                <a href="<?=base_url()?>kotak_saran/hapus_saran/<?=$row->id?>" onclick="return confirm('yakin akan menghapus data ini?')" class="btn btn-xs btn-danger"><i class="fa fa-remove"></i> Hapus</a>
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