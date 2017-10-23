<div class="row">
    <div class="col-lg-12">
        <div class="ibox float-e-margins">
            <div class="ibox-title">
                <div class="row">
                    <div class="col-md-12">
                        <h3>Daftar ALumni</h3>
                    </div>
                </div>
            </div>
            <div class="ibox-content">
                <?=@$this->session->flashdata('msg')?>
                <table class="table table-striped table-hover dttbl">
                    <thead>
                        <tr>
                            <th>No.</th>
                            <th>NIM</th>
                            <th>Nama</th>
                            <th>Tahun Masuk</th>
                            <th>Tahun Lulus </th>  
                            <th>Status</th>                        
                            <th>aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            $no = 1;
                            foreach ($list->result() as $row) {
                                if($row->status == 'ter-verifikasi'){
                                    $status = '<b style="color: green">Ter-Verifikasi</b>';
                                }else if($row->status == 'menunggu'){
                                    $status = '<b style="color: red">Menunggu Verifikasi</b>';
                                }else if($row->status == 'dibatalkan'){
                                    $status = '<b style="color: red">DIbatalkan</b>';
                                }
                        ?>
                        <tr>
                            <td><?=$no++?>.</td>
                            <td><?=$row->kode?></td>
                            <td><?=$row->nama?></td>
                            <td><?=$row->tahun_masuk?></td>
                            <td><?=$row->tahun_lulus?></td>       
                            <td><?=$status?></td>                     
                            <td>
                                <a href="<?=base_url()?>adminNew/home/detail_alumni/<?=$row->id?>" class="btn btn-xs btn-primary"><i class="fa fa-eye"></i> Detail</a>
                                <?php 
                                if($row->status == 'ter-verifikasi'){
                                    echo '<a href="'.base_url().'alumni/batalkan_verifikasi_alumni/'.$row->id.'" class="btn btn-xs btn-danger"><i class="fa fa-remove"></i> Batalkan</a>';
                                }else if($row->status == 'menunggu' || $row->status == 'dibatalkan'){
                                    echo '<a href="'.base_url().'alumni/verifikasi_alumni/'.$row->id.'" class="btn btn-xs btn-success"><i class="fa fa-check"></i> Verifikasi</a>';
                                }

                                ?>
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