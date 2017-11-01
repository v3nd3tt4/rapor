<div class="row">
    <div class="col-lg-12">
        <div class="ibox float-e-margins">
            <div class="ibox-title">
                <div class="row">
                    <div class="col-md-8">
                        <h2>Dashboard Siswa</h2>
                    </div>
                    <div class="col-md-4">
                        
                    </div>
                </div>
            </div>
            <div class="ibox-content">
                <table class="table table-striped">
                    <tr>
                        <td>NIS</td>
                        <td>:</td>
                        <td><?=$siswa->row()->nis?></td>
                    </tr>
                    <tr>
                        <td>Nama Siswa</td>
                        <td>:</td>
                        <td><?=$siswa->row()->namasiswa?></td>
                    </tr>
                    <tr>
                        <td>Tempat/Tanggal Lahir</td>
                        <td>:</td>
                        <td><?=$siswa->row()->tempatlahir?>, <?=$siswa->row()->tgllahir?></td>
                    </tr>
                    <tr>
                        <td>Jenis Kelamin</td>
                        <td>:</td>
                        <td><?=$siswa->row()->jk?></td>
                    </tr>
                    <tr>
                        <td>Agama</td>
                        <td>:</td>
                        <td><?=$siswa->row()->agama?></td>
                    </tr>
                    <tr>
                        <td>No. Telp Ayah</td>
                        <td>:</td>
                        <td><?=$siswa->row()->telpayah?></td>
                    </tr>
                    <tr>
                        <td>Nama Ayah</td>
                        <td>:</td>
                        <td><?=$siswa->row()->namaayah?></td>
                    </tr>
                    <tr>
                        <td>Nama Ibu</td>
                        <td>:</td>
                        <td><?=$siswa->row()->namaibu?></td>
                    </tr>
                    <tr>
                        <td>Nama Wali</td>
                        <td>:</td>
                        <td><?=$siswa->row()->namawali?></td>
                    </tr>
                    <tr>
                        <td>Pekerjaan Ayah</td>
                        <td>:</td>
                        <td><?=$siswa->row()->pekerjaanayah?></td>
                    </tr>
                    <tr>
                        <td>Pekerjaan Ibu</td>
                        <td>:</td>
                        <td><?=$siswa->row()->pekerjaanibu?></td>
                    </tr>
                    <tr>
                        <td>Nama Wali</td>
                        <td>:</td>
                        <td><?=$siswa->row()->pekerjaanwali?></td>
                    </tr>
                    <tr>
                        <td>Asal Sekolah</td>
                        <td>:</td>
                        <td><?=$siswa->row()->asalsekolah?></td>
                    </tr>
                    <tr>
                        <td>Tahun Masuk Sekolah</td>
                        <td>:</td>
                        <td><?=date('d-m-Y',strtotime($siswa->row()->tglmasuksekolah))?></td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
</div>