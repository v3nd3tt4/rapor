<div class="row">
    <div class="col-lg-12">
        <div class="ibox float-e-margins">
            <div class="ibox-title">
                <div class="row">
                    <div class="col-md-8">
                        <h2>Isi Raport</h2>
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
                            <tr>
                                <td>Tahun Ajaran</td>
                                <td>:</td>
                                <td><?=$ta?></td>
                            </tr>
                        </table>
                    </div>
                </div>
                <hr/>
                <ul class="nav nav-tabs">
                    <li class="active"><a href="#pa" data-toggle="tab">Peniliaian Hasil Belajar</a></li>  
                    <li><a href="#cas" data-toggle="tab">Catatan Akhir Semester</a></li>
                 </ul>
                <div class="tab-content">
                    <div class="tab-pane active" id="pa">
                        <br/>
                        <!-- <button class="btn btn-danger pull-right" id="input_nilai"> <i class="fa fa-pencil"></i>  Input Nilai</button> -->
                        <h3>1. Normatif</h3>
                        <table class="table table-striped">
                            <tr>
                                <th>No.</th>
                                <th>Mata Pelajaran</th>
                                <th>KKM</th>
                                <th>Angka</th>
                                <th>Huruf</th>
                                <th>Predikat</th>
                                <th>Deskripsi Kemauan Belajar</th>
                            </tr>
                            <?php if($nilai_normatif->num_rows() == 0){?>
                            <tr>
                                <td>1.</td>
                                <td>-</td>
                                <td>-</td>
                                <td>-</td>
                                <td>-</td>
                                <td>-</td>
                                <td>-</td>
                            </tr>
                            <tr>
                                <td>2.</td>
                                <td>-</td>
                                <td>-</td>
                                <td>-</td>
                                <td>-</td>
                                <td>-</td>
                                <td>-</td>
                            </tr>
                            <tr>
                                <td>3.</td>
                                <td>-</td>
                                <td>-</td>
                                <td>-</td>
                                <td>-</td>
                                <td>-</td>
                                <td>-</td>
                            </tr>
                            <?php }else{ $no = 1; foreach($nilai_normatif->result() as $nilai_normatif){?>
                            <tr>
                                <td><?=$no++?>.</td>
                                <td><?=$nilai_normatif->namamapel?></td>
                                <td><?=$nilai_normatif->kkm?></td>
                                <td><?=number_format($nilai_normatif->nr)?></td>
                                <td><?=$this->M_admin->terbilang(number_format($nilai_normatif->nr))?></td>
                                <td></td>
                                <td><?=$nilai_normatif->deskripsi?></td>
                            </tr>
                            <?php } ?>
                            <tr>
                                <td><?=$no++?>.</td>
                                <td>-</td>
                                <td>-</td>
                                <td>-</td>
                                <td>-</td>
                                <td>-</td>
                                <td>-</td>
                            </tr>
                            <tr>
                                <td><?=$no++?>.</td>
                                <td>-</td>
                                <td>-</td>
                                <td>-</td>
                                <td>-</td>
                                <td>-</td>
                                <td>-</td>
                            </tr>
                            <?php } ?>
                        </table>
                        <hr/>
                        <h3>2. Adaptif</h3>
                        <table class="table table-striped">
                            <tr>
                                <th>No.</th>
                                <th>Mata Pelajaran</th>
                                <th>KKM</th>
                                <th>Angka</th>
                                <th>Huruf</th>
                                <th>Predikat</th>
                                <th>Deskripsi Kemauan Belajar</th>
                            </tr>
                            <?php if($nilai_adaptif->num_rows() == 0){?>
                            <tr>
                                <td>1.</td>
                                <td>-</td>
                                <td>-</td>
                                <td>-</td>
                                <td>-</td>
                                <td>-</td>
                                <td>-</td>
                            </tr>
                            <tr>
                                <td>2.</td>
                                <td>-</td>
                                <td>-</td>
                                <td>-</td>
                                <td>-</td>
                                <td>-</td>
                                <td>-</td>
                            </tr>
                            <tr>
                                <td>3.</td>
                                <td>-</td>
                                <td>-</td>
                                <td>-</td>
                                <td>-</td>
                                <td>-</td>
                                <td>-</td>
                            </tr>
                            <?php }else{ $no = 1; foreach($nilai_adaptif->result() as $nilai_adaptif){?>
                            <tr>
                                <td><?=$no++?>.</td>
                                <td><?=$nilai_adaptif->namamapel?></td>
                                <td><?=$nilai_adaptif->kkm?></td>
                                <td><?=number_format($nilai_adaptif->nr)?></td>
                                <td><?=$this->M_admin->terbilang(number_format($nilai_adaptif->nr))?></td>
                                <td></td>
                                <td><?=$nilai_adaptif->deskripsi?></td>
                            </tr>
                            <?php } ?>
                            <tr>
                                <td><?=$no++?>.</td>
                                <td>-</td>
                                <td>-</td>
                                <td>-</td>
                                <td>-</td>
                                <td>-</td>
                                <td>-</td>
                            </tr>
                            <tr>
                                <td><?=$no++?>.</td>
                                <td>-</td>
                                <td>-</td>
                                <td>-</td>
                                <td>-</td>
                                <td>-</td>
                                <td>-</td>
                            </tr>
                            <?php } ?>
                        </table>
                        <hr/>
                        <h3>3. Produktif</h3>
                        <table class="table table-striped">
                            <tr>
                                <th>No.</th>
                                <th>Mata Pelajaran</th>
                                <th>KKM</th>
                                <th>Angka</th>
                                <th>Huruf</th>
                                <th>Predikat</th>
                                <th>Deskripsi Kemauan Belajar</th>
                            </tr>
                            <?php if($nilai_produktif->num_rows() == 0){?>
                            <tr>
                                <td>1.</td>
                                <td>-</td>
                                <td>-</td>
                                <td>-</td>
                                <td>-</td>
                                <td>-</td>
                                <td>-</td>
                            </tr>
                            <tr>
                                <td>2.</td>
                                <td>-</td>
                                <td>-</td>
                                <td>-</td>
                                <td>-</td>
                                <td>-</td>
                                <td>-</td>
                            </tr>
                            <tr>
                                <td>3.</td>
                                <td>-</td>
                                <td>-</td>
                                <td>-</td>
                                <td>-</td>
                                <td>-</td>
                                <td>-</td>
                            </tr>
                            <?php }else{ $no = 1; foreach($nilai_produktif->result() as $nilai_produktif){?>
                            <tr>
                                <td><?=$no++?>.</td>
                                <td><?=$nilai_produktif->namamapel?></td>
                                <td><?=$nilai_produktif->kkm?></td>
                                <td><?=number_format($nilai_produktif->nr)?></td>
                                <td><?=$this->M_admin->terbilang(number_format($nilai_produktif->nr))?></td>
                                <td></td>
                                <td><?=$nilai_produktif->deskripsi?></td>
                            </tr>
                            <?php } ?>
                            <tr>
                                <td><?=$no++?>.</td>
                                <td>-</td>
                                <td>-</td>
                                <td>-</td>
                                <td>-</td>
                                <td>-</td>
                                <td>-</td>
                            </tr>
                            <tr>
                                <td><?=$no++?>.</td>
                                <td>-</td>
                                <td>-</td>
                                <td>-</td>
                                <td>-</td>
                                <td>-</td>
                                <td>-</td>
                            </tr>
                            <?php } ?>
                        </table>
                        <h3>4. Muatan Lokal</h3>
                        <table class="table table-striped">
                            <tr>
                                <th>No.</th>
                                <th>Mata Pelajaran</th>
                                <th>KKM</th>
                                <th>Angka</th>
                                <th>Huruf</th>
                                <th>Predikat</th>
                                <th>Deskripsi Kemauan Belajar</th>
                            </tr>
                            <?php if($nilai_mulok->num_rows() == 0){?>
                            <tr>
                                <td>1.</td>
                                <td>-</td>
                                <td>-</td>
                                <td>-</td>
                                <td>-</td>
                                <td>-</td>
                                <td>-</td>
                            </tr>
                            <tr>
                                <td>2.</td>
                                <td>-</td>
                                <td>-</td>
                                <td>-</td>
                                <td>-</td>
                                <td>-</td>
                                <td>-</td>
                            </tr>
                            <tr>
                                <td>3.</td>
                                <td>-</td>
                                <td>-</td>
                                <td>-</td>
                                <td>-</td>
                                <td>-</td>
                                <td>-</td>
                            </tr>
                            <?php }else{ $no = 1; foreach($nilai_mulok->result() as $nilai_mulok){?>
                            <tr>
                                <td><?=$no++?>.</td>
                                <td><?=$nilai_mulok->namamapel?></td>
                                <td><?=$nilai_mulok->kkm?></td>
                                <td><?=number_format($nilai_mulok->nr)?></td>
                                <td><?=$this->M_admin->terbilang(number_format($nilai_mulok->nr))?></td>
                                <td></td>
                                <td><?=$nilai_mulok->deskripsi?></td>
                            </tr>
                            <?php } ?>
                            <tr>
                                <td><?=$no++?>.</td>
                                <td>-</td>
                                <td>-</td>
                                <td>-</td>
                                <td>-</td>
                                <td>-</td>
                                <td>-</td>
                            </tr>
                            <tr>
                                <td><?=$no++?>.</td>
                                <td>-</td>
                                <td>-</td>
                                <td>-</td>
                                <td>-</td>
                                <td>-</td>
                                <td>-</td>
                            </tr>
                            <?php } ?>
                        </table>
                    </div>
                    <!-- Untuk Tab pertama berikan div class=”active” agar pertama kali halaman di load content langsung active-->
                    <div class="tab-pane" id="cas">
                        <br/>
                        <h3>1. Kegiatan Belajar di Dunia Usaha/Industri dan Instansi Relevan</h3>
                        <table class="table table-striped">
                            <tr>
                                <th>No.</th>
                                <th>Nama DU/DI </th>
                                <th>Alamat</th>
                                <th>Lama dan Waktu Pelaksanaan</th>
                                <th>Nilai</th>
                                <th>Predikat</th>
                            </tr>
                            <tr>
                                <td>1.</td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                             <tr>
                                <td>2.</td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                        </table>
                        <hr/>
                        <h3>2. Pengembangan Diri dan Kepribadian</h3>
                        <table class="table table-striped">
                            <tr>
                                <th>No.</th>
                                <th>Nama DU/DI </th>
                                <th>Alamat</th>
                                <th>Lama dan Waktu Pelaksanaan</th>
                                <th>Nilai</th>
                                <th>Predikat</th>
                            </tr>
                            <tr>
                                <td>1.</td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                             <tr>
                                <td>2.</td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                        </table>
                        <hr/>
                        <h3>3. Ketidakhadiran</h3>
                        <table class="table table-striped">
                            <tr>
                                <th>No.</th>
                                <th>Jenis </th>
                                <th>Jumlah</th>
                            </tr>
                            <tr>
                                <td>1.</td>
                                <td></td>
                                <td></td>
                            </tr>
                             <tr>
                                <td>2.</td>
                                <td></td>
                                <td></td>
                            </tr>
                        </table>
                        <hr/>
                        <h3>4. Catatan Untuk Perhatian Orang Tua Wali</h3>
                        <table class="table table-striped">
                            <tr>
                                <td></td>
                            </tr>
                        </table>
                    </div> 
                </div> 
            </div>
        </div>
    </div>
</div>