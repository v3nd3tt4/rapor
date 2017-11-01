<div class="row">
    <div class="col-lg-12">
        <div class="ibox float-e-margins">
            <div class="ibox-title">
                <div class="row">
                    <div class="col-md-8">
                        <h2>Dashboard Pegawai</h2>
                    </div>
                    <div class="col-md-4">
                        
                    </div>
                </div>
            </div>
            <div class="ibox-content">
                <table class="table table-striped">
                    <tr>
                        <td>Kode Pegawai</td>
                        <td>:</td>
                        <td><?=$pegawai->row()->kodepegawai?></td>
                    </tr>
                    <tr>
                        <td>Nama Pegawai</td>
                        <td>:</td>
                        <td><?=$pegawai->row()->namapegawai?></td>
                    </tr>
                    <tr>
                        <td>Tempat/Tanggal Lahir</td>
                        <td>:</td>
                        <td><?=$pegawai->row()->tempatlahir?>, <?=$pegawai->row()->tgllahir?></td>
                    </tr>
                    <tr>
                        <td>Jenis Kelamin</td>
                        <td>:</td>
                        <td><?=$pegawai->row()->jk?></td>
                    </tr>
                    <tr>
                        <td>Agama</td>
                        <td>:</td>
                        <td><?=$pegawai->row()->agama?></td>
                    </tr>
                    
                </table>
            </div>
        </div>
    </div>
</div>