<div class="row">
    <div class="col-lg-12">
        <div class="ibox float-e-margins">
            <div class="ibox-title">
                <div class="row">
                    <div class="col-md-8">
                        <h2>Dashboard Guru</h2>
                    </div>
                    <div class="col-md-4">
                        
                    </div>
                </div>
            </div>
            <div class="ibox-content">
                <table class="table table-striped">
                    <tr>
                        <td>Kode Guru</td>
                        <td>:</td>
                        <td><?=$guru->row()->kodeguru?></td>
                    </tr>
                    <tr>
                        <td>Nama Guru</td>
                        <td>:</td>
                        <td><?=$guru->row()->namaguru?></td>
                    </tr>
                    <tr>
                        <td>Tempat/Tanggal Lahir</td>
                        <td>:</td>
                        <td><?=$guru->row()->tempatlahir?>, <?=$guru->row()->tgllahir?></td>
                    </tr>
                    <tr>
                        <td>Jenis Kelamin</td>
                        <td>:</td>
                        <td><?=$guru->row()->jk?></td>
                    </tr>
                    <tr>
                        <td>Agama</td>
                        <td>:</td>
                        <td><?=$guru->row()->agama?></td>
                    </tr>
                    <tr>
                        <td>No. Telp</td>
                        <td>:</td>
                        <td><?=$guru->row()->telp?></td>
                    </tr>
                    <tr>
                        <td>Status Kepegawaian</td>
                        <td>:</td>
                        <td><?=$guru->row()->statuskepegawaian?></td>
                    </tr>
                    <tr>
                        <td>Jenis PTK</td>
                        <td>:</td>
                        <td><?=$guru->row()->jenisptk?></td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
</div>