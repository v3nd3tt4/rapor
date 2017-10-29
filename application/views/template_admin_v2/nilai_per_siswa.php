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
                <div class="row">
                    <div class="col-md-6">
                        <table class="table">
                            <tr>
                                <td>Nama Peserta Didik</td>
                                <td>:</td>
                                <td><?=$siswa->row()->namasiswa?></td>
                            </tr>
                            <tr>
                                <td>Program Studi Keahlian</td>
                                <td>:</td>
                                <td><?=$kelas->row()->programstudikeahlian?></td>
                            </tr>
                            <tr>
                                <td>Bidang Studi Keahlian</td>
                                <td>:</td>
                                <td><?=$kelas->row()->bidangstudi?></td>
                            </tr>                            
                        </table>
                    </div>
                    <div class="col-md-6">
                        <table class="table">
                            <tr>
                                <td>Nomor Induk Siswa</td>
                                <td>:</td>
                                <td><?=$siswa->row()->nis?></td>
                            </tr>
                            <tr>
                                <td>Kelas/Semester</td>
                                <td>:</td>
                                <td><?=$kelas->row()->namakelas?> / <?php if($kelas->row()->semester == 1){
                                        echo '1 (Satu)';
                                    }else if($kelas->row()->semester == 2){
                                        echo '2 (Dua)';
                                    }else if($kelas->row()->semester == 3){
                                        echo '3 (Tiga)';
                                    }else if($kelas->row()->semester == 4){
                                        echo '4 (Empat)';
                                    }else if($kelas->row()->semester == 5){
                                        echo '5 (Lima)';
                                    }else if($kelas->row()->semester == 6){
                                        echo '6 (Enam)';
                                    }else if($kelas->row()->semester == 7){
                                        echo '7 (Tujuh)';
                                    }else if($kelas->row()->semester == 8){
                                        echo '8 (Delapan)';
                                    } ?>
                                    
                                </td>
                            </tr>
                            
                        </table>
                    </div>
                </div>
                <hr/>
                <table class="table table-striped dttbl" >
                    <thead>
                        <tr>
                            <th>No. </th>
                            <th>Tahun Ajaran </th>
                            <th>Semester </th>
                            <th>Mata Pelajaran </th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $no = 1; foreach($data_nilai->result() as $data_nilai){?>
                        <tr>
                            <td><?=$no++?>.</td>
                            <td><?=$data_nilai->thnajaran?></td>
                            <td><?=$data_nilai->semester?></td>
                            <td><?=$data_nilai->kodemapel?> - <?=$data_nilai->namamapel?></td>
                            <td>
                                <a href="<?=base_url()?>nilai/lihat_nilai_siswa?id_siswa=<?=$siswa->row()->idsiswa?>&id_kelas=<?=$kelas->row()->idkelas?>&idmapel=<?=$data_nilai->idmapel?>&ta=<?=$data_nilai->thnajaran?>&semester=<?=$data_nilai->semester?>" class="btn btn-xs btn-danger" target="_blank"><i class="fa fa-search"></i> Detail</a>
                            </td>
                        </tr>
                        <?php }?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>