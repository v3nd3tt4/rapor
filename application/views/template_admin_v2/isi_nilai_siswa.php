<div class="row">
    <div class="col-lg-12">
        <div class="ibox float-e-margins">
            <div class="ibox-title">
                <div class="row">
                    <div class="col-md-8">
                        <h2>Isi Nilai</h2>
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
                                <td>Tahun Pelajaran</td>
                                <td>:</td>
                                <td>
                                    <?php 
                                        $bulansaatini = date('m');
                                        $tahunsaatini = date('Y');
                                        if($bulansaatini == '6' || $bulansaatini == '7' || $bulansaatini == '8' || $bulansaatini == '9' || $bulansaatini == '10' || $bulansaatini == '11' || $bulansaatini == '12'
                                        ){
                                            $tahun = $tahunsaatini.'/'.date('Y', strtotime('+1 year', strtotime( $tahunsaatini ))).' ( Ganjil)'; 
                                        }else{
                                            $tahun = date('Y', strtotime('-1 year', strtotime( $tahunsaatini ))).'/'.$tahunsaatini.' ( Genap)';
                                        }
                                        echo $tahun;
                                    ?>
                                </td>
                            </tr>
                        </table>
                    </div>
                </div>
                <hr/>
                <ul class="nav nav-tabs">
                <!-- Untuk Semua Tab.. pastikan a href=”#nama_id” sama dengan nama id di “Tap Pane” dibawah-->
                    <li class="active"><a href="#pa" data-toggle="tab">Peniliaian Hasil Belajar</a></li> <!-- Untuk Tab pertama berikan li class=”active” agar pertama kali halaman di load tab langsung active-->
                    <li><a href="#cas" data-toggle="tab">Catatan Akhir Semester</a></li>
                </ul>
                <div class="tab-content">
                    <div class="tab-pane active" id="pa">
                        <br/>
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
                        </table>
                    </div><!-- Untuk Tab pertama berikan div class=”active” agar pertama kali halaman di load content langsung active-->
                    <div class="tab-pane" id="cas">
                        Penilaian Akhir Semester
                    </div>
                   
                </div>
            </div>
        </div>
    </div>
</div>