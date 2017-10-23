<?php $row = $list->row(); ?>
<div class="row">
    <div class="col-lg-12">
        <div class="ibox float-e-margins">
            <div class="ibox-title">
                <div class="row">
                    <div class="col-md-12">
                        <h3>Detail Pengajuan Judul</h3>
                    </div>
                </div>
            </div>
            <div class="ibox-content">
                <form id="form_judul_diterima" method="POST" action="<?=base_url()?>pengajuan_judul/update_judul_yang_diterima">
                    <input type="hidden" name="id_judul" value="<?=$row->id_pengajuan_judul?>">
                    <table class="table table-striped table-bordered table-hover">
                        <tr>
                            <td>NPM</td>
                            <td>: </td>
                            <td><?=$row->npm?></td>
                        </tr>
                        <tr>
                            <td>Nama</td>
                            <td>: </td>
                            <td><?=$row->nama?></td>
                        </tr>
                        <tr>
                            <td>Tanggal Pengajuan Judul </td>
                            <td>: </td>
                            <td><?=$row->tanggal?></td>
                        </tr>
                        <tr>
                            <td>judul 1 </td>
                            <td>: </td>
                            <td><?=$row->judul_1?></td>
                        </tr>
    		              <tr>
                            <td>judul 2 </td>
                            <td>: </td>
                            <td><?=$row->judul_2?></td>
                        </tr>
                        <tr>
                            <td>judul 3 </td>
                            <td>: </td>
                            <td><?=$row->judul_3?></td>
                        </tr>
                        <tr>
                            <td>Keterangan </td>
                            <td>: </td>
                            <td><?=$row->keterangan?></td>
                        </tr>
                        <tr>
                            <td>Judul Yang Diterima </td>
                            <td>: </td>
                            <td>
                                <label class="radio-inline"><input type="radio" name="judul_yang_diterima" value="1" <?=$row->judul_diterima == 1 ? "checked" : ""?>>Judul 1</label>
                                <label class="radio-inline"><input type="radio" name="judul_yang_diterima" value="2" <?=$row->judul_diterima == 2 ? "checked" : ""?>>Judul 2</label>
                                <label class="radio-inline"><input type="radio" name="judul_yang_diterima" value="3" <?=$row->judul_diterima == 3 ? "checked" : ""?>>Judul 3</label>
                                <!-- <label class="radio-inline"><input type="radio" name="judul_yang_diterima" value="4" <?=$row->judul_diterima == 4 ? "checked" : ""?>>Tolak</label> -->
                            </td>
                        </tr>
                        <tr>
                            <td>Alasan Judul Diterima </td>
                            <td>: </td>
                            <td>
                                <textarea name="alasan_judul_diterima" class="form-control"><?=$row->alasan_diterima != null ? $row->alasan_diterima : ""?></textarea>
                            </td>
                        </tr>
                        <tr>
                            <td></td>
                            <td></td>
                            <td>
                                <button type="submit" class="btn btn-primary"><i class="fa fa-save"></i>  Simpan</button>
                                <?=@$this->session->flashdata('msg')?>
                            </td>
                        </tr>
                    </table>
                </form>
            </div>
        </div>
    </div>
</div>
