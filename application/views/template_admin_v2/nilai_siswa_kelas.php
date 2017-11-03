<div class="row">
    <div class="col-lg-12">
        <div class="ibox float-e-margins">
            <div class="ibox-title">
                <div class="row">
                    <div class="col-md-8">
                        <h2>Data Seluruh Siswa</h2>
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
                    <tr>
                        <td>Nama Mata Pelajaran</td>
                        <td>:</td>
                        <td><?=$mapel->row()->kodemapel.' - '.$mapel->row()->namamapel?></td>
                    </tr>
                    <tr>
                        <td>Tahun Ajaran</td>
                        <td>:</td>
                        <td><?=$tahunajaran?></td>
                    </tr>
                    <tr>
                        <td>Semester</td>
                        <td>:</td>
                        <td><?=$semester?></td>
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
                                <?php 
                                $cek_niliai = $this->db->get_where('tb_nilai', array('nis' => $row->nis, 'kodemapel' => $mapel->row()->kodemapel, 'thnajaran' => $tahunajaran, 'semester' => $semester));
                                if($cek_niliai->num_rows() != 0){
                                ?>

                                <a href="<?=base_url()?>nilai/lihat_nilai_siswa?id_siswa=<?=$row->idsiswa?>&id_kelas=<?=$kelas->row()->idkelas?>&idmapel=<?=$mapel->row()->idmapel?>&ta=<?=$tahunajaran?>&semester=<?=$semester?>" target="_blank" class="btn btn-xs btn-primary"><i class="fa fa-eye"></i> Lihat Nilai </a> 
                                <?php }else{?> 
                                <a href="<?=base_url()?>nilai/isi_nilai_siswa?id_siswa=<?=$row->idsiswa?>&id_kelas=<?=$kelas->row()->idkelas?>&idmapel=<?=$mapel->row()->idmapel?>&ta=<?=$tahunajaran?>&semester=<?=$semester?>" target="_blank" class="btn btn-xs btn-danger"><i class="fa fa-pencil"></i> Isi Nilai </a>
                                <?php }?>
                            </td>
                        </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
            