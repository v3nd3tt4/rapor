<div class="row">
    <div class="col-lg-12">
        <div class="ibox float-e-margins">
            <div class="ibox-title">
                <div class="row">
                    <div class="col-md-8">
                        <h2>Riwayat Nilai</h2>
                    </div>
                    <div class="col-md-4">
                        
                    </div>
                </div>
            </div>
            <div class="ibox-content">
                <table class="table table-striped">
                    <tr>
                        <td>Kode Kelas</td>
                        <td>:</td>
                        <td><?=$kelas->row()->kodekelas?></td>
                    </tr>
                    <tr>
                        <td>Nama Kelas</td>
                        <td>:</td>
                        <td><?=$kelas->row()->namakelas?></td>
                    </tr>
                    <tr>
                        <td>Bidang Studi</td>
                        <td>:</td>
                        <td><?=$kelas->row()->bidangstudi?></td>
                    </tr>
                    <tr>
                        <td>Program Studi Keahlian</td>
                        <td>:</td>
                        <td><?=$kelas->row()->programstudikeahlian?></td>
                    </tr>
                    <tr>
                        <td>Kompetensi Keahlian</td>
                        <td>:</td>
                        <td><?=$kelas->row()->kompetensikeahlian?></td>
                    </tr>
                </table>
                <hr/>
            	<?=@$this->session->flashdata('msg')?>
                <table class="table table-striped table-hover">
                    <thead>
                        <tr>
                            <th>No.</th>
                            <th>NIS</th>
                            <th>Nama</th>
                            <th>aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $no = 1; 
                        foreach ($siswa->result() as $row) {
                            # code...
                        ?>                        
                        <tr>
                            <td><?=$no++?>.</td>
                            <td><?=$row->nis?></td>
                            <td><?=$row->namasiswa?></td>
                            <td>
                                <a href="<?=base_url()?>nilai/nilai_per_siswa?idsiswa=<?=$row->idsiswa?>" target="_blank" class="btn btn-xs btn-primary"><i class="fa fa-eye"></i> Cek </a>
                            </td>
                        </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>