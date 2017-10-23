<div class="row">
    <div class="col-lg-12">
        <div class="ibox float-e-margins">
            <div class="ibox-title">
                <div class="row">
                    <div class="col-md-12">
                        <h3>Daftar Judul Yang Diajukan</h3>
                    </div>
                </div>
            </div>
            <div class="ibox-content">
                <?=@$this->session->flashdata('msg')?>
                <table class="table table-striped table-hover dttbl">
                    <thead>
                        <tr>
                            <th>No.</th>
                            <th>NPM</th>
                            <th>Nama</th>
                            <th>Tanggal Mengajukan</th>                      
                            <th>aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            $no = 1;
                            foreach ($data->result() as $row) {
                        ?>
                        <tr>
                            <td><?=$no++?>.</td>
                            <td><?=$row->npm?></td>
                            <td><?=$row->nama?></td>
                            <td><?=$row->tanggal?></td>                      
                            <td>
                                <a href="<?=base_url()?>adminNew/home/detail_judul/<?=$row->id_pengajuan_judul?>" class="btn btn-xs btn-primary"><i class="fa fa-eye"></i> Detail</a>
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