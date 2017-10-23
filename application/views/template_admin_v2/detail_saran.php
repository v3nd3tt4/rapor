<?php $row = $list->row(); ?>
<div class="row">
    <div class="col-lg-12">
        <div class="ibox float-e-margins">
            <div class="ibox-title">
                <div class="row">
                    <div class="col-md-12">
                        <h3>Detail Saran</h3>
                    </div>
                </div>
            </div>
            <div class="ibox-content">
                <table class="table table-striped table-bordered table-hover">
                    <tr>
                        <td>Nama</td>
                        <td>: </td>
                        <td><?=$row->nama?></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>E-mail</td>
                        <td>: </td>
                        <td><?=$row->email?></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>Tanggal </td>
                        <td>: </td>
                        <td><?=$row->tanggal?></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>Pesan </td>
                        <td>: </td>
                        <td><?=$row->pesan?></td>
                        <td></td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
</div>
