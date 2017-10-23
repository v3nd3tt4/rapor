<?php $row = $list->row(); ?>
<div class="row">
    <div class="col-lg-12">
        <div class="ibox float-e-margins">
            <div class="ibox-title">
                <div class="row">
                    <div class="col-md-12">
                        <h3>Detail ALumni</h3>
                    </div>
                </div>
            </div>
            <div class="ibox-content">
                <table class="table table-striped table-bordered table-hover">
                    <tr>
                        <td>NPM</td>
                        <td>: </td>
                        <td><?=$row->kode?></td>
                        <td rowspan="4">
                            <?php
                                if($row->foto == ''){
                                    $gambar = base_url().'assets/images/user.png';
                                }else{
                                    $gambar = base_url().'assets/upload/images/asli/'.$row->foto;
                                }
                            ?>
                            <center>
                                <img src="<?=$gambar?>" class="img-thumbnail" width="150px"/>
                            </center>
                        </td>
                    </tr>
                    <tr>
                        <td>Nama</td>
                        <td>: </td>
                        <td><?=$row->nama?></td>
                    </tr>
                    <tr>
                        <td>Tahun Masuk</td>
                        <td>: </td>
                        <td><?=$row->tahun_masuk?></td>
                    </tr>
                    <tr>
                        <td>Tahun lulus</td>
                        <td>: </td>
                        <td><?=$row->tahun_lulus?></td>
                    </tr>
                    <tr>
                        <td>Pekerjaan</td>
                        <td>: </td>
                        <td><?=$row->posisi_kerja?></td>
                    </tr>
                    <tr>
                        <td>Tempat Bekerja</td>
                        <td>: </td>
                        <td><?=$row->tempat_kerja?></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>Alamat </td>
                        <td>: </td>
                        <td><?=$row->alamat?></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>Keterangan Lainnya </td>
                        <td>: </td>
                        <td><?=$row->keterangan?></td>
                        <td></td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
</div>
