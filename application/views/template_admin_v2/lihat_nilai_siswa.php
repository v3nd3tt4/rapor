<div class="row">
    <div class="col-lg-12">
        <div class="ibox float-e-margins">
            <div class="ibox-title">
                <div class="row">
                    <div class="col-md-8">
                        <h2>Lihat Nilai</h2>
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
                            <tr>
                                <td>Mata Pelajaran</td>
                                <td>:</td>
                                <td><?=$mapel->row()->kodemapel?> - <?=$mapel->row()->namamapel?></td>
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
                                <td><?=$this->input->get('ta', true)?></td>
                            </tr>
                            <tr>
                                <td>Semester</td>
                                <td>:</td>
                                <td><?=$this->input->get('semester', true)?></td>
                            </tr>
                        </table>
                    </div>
                </div>
                <hr/>
                <form action="<?=base_url()?>nilai/update_nilai" method="POST">
                    <?=@$this->session->flashdata('msg')?>
                    <input type="hidden" name="id_siswa" value="<?=$this->input->get('id_siswa', true)?>"/>
                    <input type="hidden" name="nis" value="<?=$siswa->row()->nis?>"/>
                    <input type="hidden" name="id_kelas" value="<?=$this->input->get('id_kelas', true)?>">
                    <input type="hidden" name="kodekelas" value="<?=$kelas->row()->kodekelas?>">
                    <input type="hidden" name="idmapel" value="<?=$this->input->get('idmapel', true)?>">
                    <input type="hidden" name="kodemapel" value="<?=$mapel->row()->kodemapel?>">
                    <input type="hidden" name="ta" value="<?=$this->input->get('ta', true)?>">
                    <input type="hidden" name="semester" value="<?=$this->input->get('semester', true)?>">
                    <div class="form-group">
                        <label>Guru:</label>
                        <select name="guru" class="form-control" required>
                            <option value="">--pilih--</option>
                            <?php foreach($guru->result() as $guru){?>
                            <option value="<?=$guru->kodeguru?>" <?=$cek_nilai->row()->kodeguru == $guru->kodeguru? 'selected' : ''?>><?=$guru->kodeguru?> - <?=$guru->namaguru?></option>
                            <?php }?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>SK7:</label>
                        <input type="text" name="sk7" class="form-control" placeholder="Jika tidak ada isi angka 0" value="<?=$cek_nilai->row()->sk7?>" required/>
                    </div>
                    <div class="form-group">
                        <label>SK8:</label>
                        <input type="text" name="sk8" class="form-control" placeholder="Jika tidak ada isi angka 0" value="<?=$cek_nilai->row()->sk8?>" required/>
                    </div>
                    <div class="form-group">
                        <label>SK9:</label>
                        <input type="text" name="sk9" class="form-control" placeholder="Jika tidak ada isi angka 0" value="<?=$cek_nilai->row()->sk9?>" required/>
                    </div>
                    <div class="form-group">
                        <label>SK10:</label>
                        <input type="text" name="sk10" class="form-control" placeholder="Jika tidak ada isi angka 0" value="<?=$cek_nilai->row()->sk10?>" required/>
                    </div>
                    <div class="form-group">
                        <label>Ujian Tengah Semester:</label>
                        <input type="text" name="uts" class="form-control" placeholder="Jika tidak ada isi angka 0" value="<?=$cek_nilai->row()->uts?>" required/>
                    </div>
                    <div class="form-group">
                        <label>Ujian Akhir Semester:</label>
                        <input type="text" name="uas" class="form-control" placeholder="Jika tidak ada isi angka 0" value="<?=$cek_nilai->row()->us?>" required/>
                    </div>
                    <div class="form-group">
                        <label>AfAktif:</label>
                        <input type="text" name="afaktif" class="form-control" placeholder="Jika tidak ada isi angka 0" value="<?=$cek_nilai->row()->afaktif?>" required/>
                    </div>
                    <div class="form-group">
                        <label>Psycom:</label>
                        <input type="text" name="psycom" class="form-control" placeholder="Jika tidak ada isi angka 0" value="<?=$cek_nilai->row()->psycom?>" required/>
                    </div>
                    <div class="form-group">
                        <label>KKM:</label>
                        <input type="text" name="kkm" class="form-control" placeholder="Jika tidak ada isi angka 0" value="<?=$cek_nilai->row()->kkm?>" required/>
                    </div>
                    <div class="form-group">
                        <label>Deskripsi:</label>
                        <textarea name="deskripsi" class="form-control" style="resize: none" required><?=$cek_nilai->row()->deskripsi?></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary"><i class="fa fa-save"></i> Update</button>
                </form>
            </div>
        </div>
    </div>
</div>