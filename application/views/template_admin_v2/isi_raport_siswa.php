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
                    <li <?php if($this->input->get('page', true) == 'phb' || $this->input->get('page', true) == '' || empty($this->input->get('page', true))){ echo 'class="active"'; }else{ echo '';} ?> ><a href="#pa" data-toggle="tab">Peniliaian Hasil Belajar</a></li>  
                    <li <?=$this->input->get('page', true) == 'cas' ? 'class="active"' : ''?>><a href="#cas" data-toggle="tab">Catatan Akhir Semester</a></li>
                 </ul>
                <div class="tab-content">
                    <div class="tab-pane <?php if($this->input->get('page', true) == 'phb' || $this->input->get('page', true) == '' || empty($this->input->get('page', true))){ echo 'active'; }else{ echo '';} ?>" id="pa">
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
                                <td>
                                    <?php echo @$this->M_admin->cek_predikat($this->session->userdata('idguru'), $nilai_normatif->nr);?>
                                </td>
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
                                <td>
                                    <?php echo @$this->M_admin->cek_predikat($this->session->userdata('idguru'), $nilai_adaptif->nr);?>
                                </td>
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
                                <td>
                                    <?php echo @$this->M_admin->cek_predikat($this->session->userdata('idguru'), $nilai_produktif->nr);?>
                                </td>
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
                                <td>
                                    <?php echo @$this->M_admin->cek_predikat($this->session->userdata('idguru'), $nilai_mulok->nr);?>
                                </td>
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
                    <div class="tab-pane <?=$this->input->get('page', true) == 'cas' ? 'active' : ''?>" id="cas">
                        <br/>
                        <?=@$this->session->flashdata('msg')?>
                        <h3>1. Kegiatan Belajar di Dunia Usaha/Industri dan Instansi Relevan</h3>
                        <table class="table table-striped">
                            <tr>
                                <th>No.</th>
                                <th>Nama DU/DI </th>
                                <th>Alamat</th>
                                <th>Lama dan Waktu Pelaksanaan</th>
                                <th>Nilai</th>
                                <th>Predikat</th>
                                <th></th>
                            </tr>
                            <form action="<?=base_url()?>nilai/simpan_kegiatan" method="POST">
                            <tr>
                                <td>#</td>
                                <td>
                                    <input type="hidden" name="nis" value="<?=$siswa->row()->nis?>"/>
                                    <input type="hidden" name="idsiswa" value="<?=$siswa->row()->idsiswa?>"/>
                                    <input type="hidden" name="idkelas" value="<?=$kelas->row()->idkelas?>"/>
                                    <input type="hidden" name="ta" value="<?=$ta?>"/>
                                    <input type="hidden" name="semester" value="<?=$semester?>"/>
                                    <input type="text" name="namaadu" class="form-control input-sm" required /></td>
                                <td><input type="text" name="alamat" class="form-control input-sm" required/></td>
                                <td><input type="text" name="lamadanwaktu" class="form-control input-sm" required/></td>
                                <td><input type="text" name="nilai" class="form-control input-sm" required/></td>
                                <td><input type="text" name="predikat" class="form-control input-sm" required/></td>
                                <td><button type="submit" class="btn btn-sm btn-primary"><i class="fa fa-save"></i> Simpan</button></td>
                            </tr>
                            </form>
                            <?php if($kegiatan->num_rows() == 0){?>
                            <tr>
                                <td>1.</td>
                                <td></td>
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
                                <td></td>
                            </tr>
                            <?php }else{$no = 1; foreach($kegiatan->result() as $kegiatan){?>
                            <tr>
                                <td><?=$no++?>.</td>
                                <td><?=$kegiatan->namadu?></td>
                                <td><?=$kegiatan->alamat?></td>
                                <td><?=$kegiatan->lamadanwaktu?></td>
                                <td><?=$kegiatan->nilai?></td>
                                <td><?=$kegiatan->predikat?></td>
                                <td><a href="<?=base_url()?>nilai/hapus_kegiatan?idkegiatan=<?=$kegiatan->idkegiatan?>&idsiswa=<?=$siswa->row()->idsiswa?>&idkelas=<?=$kelas->row()->idkelas?>&ta=<?=$ta?>&semester=<?=$semester?>&page=cas" class="btn btn-sm btn-danger" onclick="return confirm('yakin akan menghapus data ini?')"><i class="fa fa-remove"></i>  Hapus </a></td>
                            </tr>
                                <?php } ?>
                            <?php } ?>
                        </table>
                        <hr/>
                        
                        <div class="row">
                            <div class="col-md-6">
                                <h3>2. Pengembangan Diri</h3>
                                <table class="table table-striped">
                                    <tr>
                                        <th>No.</th>
                                        <th>Komponen</th>
                                        <th>Predikat</th>
                                        <th></th>
                                    </tr>
                                    <form action="<?=base_url()?>nilai/simpan_pengembangan_diri" method="POST">
                                    <tr>
                                        <td>#.</td>
                                        <td>
                                            <input type="hidden" name="nis" value="<?=$siswa->row()->nis?>"/>
                                            <input type="hidden" name="idsiswa" value="<?=$siswa->row()->idsiswa?>"/>
                                            <input type="hidden" name="idkelas" value="<?=$kelas->row()->idkelas?>"/>
                                            <input type="hidden" name="ta" value="<?=$ta?>"/>
                                            <input type="hidden" name="semester" value="<?=$semester?>"/>
                                            <select name="komponen" class="form-control input-sm" required>
                                                <option value="">--pilih--</option>
                                                <option value="osis">OSIS</option>
                                                <option value="sepak bola">Sepak Bola</option>
                                                <option value="rohis">Rohis</option>
                                                <option value="pramuka">Pramuka</option>
                                            </select>
                                        </td>
                                        <td><input type="text" name="predikat" class="form-control" required /></td>
                                        <td><button type="submit" class="btn btn-sm btn-primary"><i class="fa fa-save"></i> Simpan</button></td>
                                    </tr>
                                    </form>
                                    <?php $no = 1; foreach($pengembangan_diri->result() as $pengembangan_diri){?>
                                    <tr>
                                        <td><?=$no++?>.</td>
                                        <td><?=$pengembangan_diri->komponen?></td>
                                        <td><?=$pengembangan_diri->predikat?></td>
                                        <td><a href="<?=base_url()?>nilai/hapus_pengembangan_diri?idkepribadian=<?=$pengembangan_diri->id?>&idsiswa=<?=$siswa->row()->idsiswa?>&idkelas=<?=$kelas->row()->idkelas?>&ta=<?=$ta?>&semester=<?=$semester?>&page=cas" class="btn btn-sm btn-danger" onclick="return confirm('yakin akan menghapus data ini?')"><i class="fa fa-remove"></i>  Hapus </a></td>
                                    </tr>
                                    <?php }?>
                                </table>
                            </div>
                            <div class="col-md-6">
                                <h3>Kepribadian</h3>
                                <table class="table table-striped">
                                    <tr>
                                        <th>No.</th>
                                        <th>Komponen</th>
                                        <th>Predikat</th>
                                        <th></th>
                                    </tr>
                                    <form action="<?=base_url()?>nilai/simpan_kepribadian" method="POST">
                                    <tr>
                                        <td>#.</td>
                                        <td>
                                            <input type="hidden" name="nis" value="<?=$siswa->row()->nis?>"/>
                                            <input type="hidden" name="idsiswa" value="<?=$siswa->row()->idsiswa?>"/>
                                            <input type="hidden" name="idkelas" value="<?=$kelas->row()->idkelas?>"/>
                                            <input type="hidden" name="ta" value="<?=$ta?>"/>
                                            <input type="hidden" name="semester" value="<?=$semester?>"/>
                                            <select name="komponen" class="form-control input-sm" required>
                                                <option value="">--pilih--</option>
                                                <option value="kelakuan">Kelakuan</option>
                                                <option value="kerajinan">Kerajinan</option>
                                                <option value="kerapian">Kerapian</option>
                                            </select>
                                        </td>
                                        <td><input type="text" name="predikat" class="form-control" required /></td>
                                        <td><button type="submit" class="btn btn-sm btn-primary"><i class="fa fa-save"></i> Simpan</button></td>
                                    </tr>
                                    </form>
                                    <?php $no = 1; foreach($kepribadian->result() as $kepribadian){?>
                                    <tr>
                                        <td><?=$no++?>.</td>
                                        <td><?=$kepribadian->komponen?></td>
                                        <td><?=$kepribadian->predikat?></td>
                                        <td><a href="<?=base_url()?>nilai/hapus_pengembangan_diri?idkepribadian=<?=$kepribadian->id?>&idsiswa=<?=$siswa->row()->idsiswa?>&idkelas=<?=$kelas->row()->idkelas?>&ta=<?=$ta?>&semester=<?=$semester?>&page=cas" class="btn btn-sm btn-danger" onclick="return confirm('yakin akan menghapus data ini?')"><i class="fa fa-remove"></i>  Hapus </a></td>
                                    </tr>
                                    <?php }?>
                                </table>
                            </div>
                        </div>
                        <hr/>
                        <h3>3. Ketidakhadiran</h3>
                        <table class="table table-striped">
                            <tr>
                                <th>No.</th>
                                <th>Jenis </th>
                                <th>Jumlah</th>
                                <th></th>
                            </tr>
                            <form action="<?=base_url()?>nilai/simpan_presensi" method="POST">
                            <tr>
                                <td>#.</td>
                                <td>
                                    <input type="hidden" name="nis" value="<?=$siswa->row()->nis?>"/>
                                    <input type="hidden" name="idsiswa" value="<?=$siswa->row()->idsiswa?>"/>
                                    <input type="hidden" name="idkelas" value="<?=$kelas->row()->idkelas?>"/>
                                    <input type="hidden" name="ta" value="<?=$ta?>"/>
                                    <input type="hidden" name="semester" value="<?=$semester?>"/>
                                    <select name="jenis" class="form-control input-sm" required>
                                        <option value="">--pilih--</option>
                                        <option value="sakit">Sakit</option>
                                        <option value="izin">Izin</option>
                                        <option value="tanpa keterangan">Tanpa Keterangan</option>
                                    </select>
                                </td>
                                <td>
                                    <input type="text" name="jumlah" class="form-control" required/>
                                </td>
                                <td>
                                    <button type="submit" class="btn btn-sm btn-primary"><i class="fa fa-save"></i> Simpan</button>
                                </td>
                            </tr>
                            </form>
                            <?php $no = 1; foreach($presensi->result() as $presensi){?>
                            <tr>
                                <td><?=$no++?>.</td>
                                <td><?=$presensi->jenis?></td>
                                <td><?=$presensi->jumlah?> Hari</td>
                                <td>
                                    <a href="<?=base_url()?>nilai/hapus_presensi?idpresensi=<?=$presensi->id?>&idsiswa=<?=$siswa->row()->idsiswa?>&idkelas=<?=$kelas->row()->idkelas?>&ta=<?=$ta?>&semester=<?=$semester?>&page=cas" class="btn btn-sm btn-danger" onclick="return confirm('yakin akan menghapus data ini?')"><i class="fa fa-remove"></i>  Hapus </a>
                                </td>
                            </tr>
                            <?php }?>
                        </table>
                        <hr/>
                        <h3>4. Catatan Untuk Perhatian Orang Tua Wali</h3>
                        <?php if($catatan->num_rows() != 0){?>
                        <table class="table table-striped">
                            <tr>
                                <td><?=$catatan->row()->catatan?></td>
                                <td>
                                    <a href="<?=base_url()?>nilai/hapus_catatan?idcatatan=<?=$catatan->row()->id?>&idsiswa=<?=$siswa->row()->idsiswa?>&idkelas=<?=$kelas->row()->idkelas?>&ta=<?=$ta?>&semester=<?=$semester?>&page=cas" class="btn btn-sm btn-danger" onclick="return confirm('yakin akan menghapus data ini?')"><i class="fa fa-remove"></i>  Hapus </a>
                                </td>
                            </tr>
                        </table>
                        <?php }else{?>
                        <form action="<?=base_url()?>nilai/simpan_catatan" method="POST">
                            <input type="hidden" name="nis" value="<?=$siswa->row()->nis?>"/>
                            <input type="hidden" name="idsiswa" value="<?=$siswa->row()->idsiswa?>"/>
                            <input type="hidden" name="idkelas" value="<?=$kelas->row()->idkelas?>"/>
                            <input type="hidden" name="ta" value="<?=$ta?>"/>
                            <input type="hidden" name="semester" value="<?=$semester?>"/>
                            <textarea class="form-control input-sm" name="catatan" style="resize: none"></textarea><br/>
                            <button type="submit" class="btn btn-primary"><i class="fa fa-save"></i> Simpan</button>
                        </form>
                        <?php }?>
                    </div> 
                </div> 
            </div>
        </div>
    </div>
</div>