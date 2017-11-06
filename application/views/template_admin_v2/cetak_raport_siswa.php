<!DOCTYPE html>
<html>

    <head>

        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title>Dashboard </title>
        <!-- <link rel="shortcut icon" href="<?php echo base_url(); ?>assets/images/Logo_IAIN_Raden_Intan_Bandar_Lampung.png"/> -->
        <link href="<?=base_url()?>assets/assets/css/bootstrap.min.css" rel="stylesheet">
        <link href="<?=base_url()?>assets/assets/font-awesome/css/font-awesome.css" rel="stylesheet">
        <style type="text/css">
            @page {
              size: legal;
              margin: 0mm;
            }
            @media all {
                .page-break { display: none; }
            }

            @media print {
                .page-break { display: block; page-break-before: always; }
            }
            html
            {
                background-color: #FFFFFF; 
                margin: 0px;  /* this affects the margin on the html before sending to printer */
            }

            body
            {
                font-size: 12pt;
                margin: 15mm 15mm 15mm 15mm; /* margin you want for the content */
            }
        </style>
        <script type="text/javascript"> 
            window.onload=function(){self.print();} 
        </script> 
    </head>
    <body>
        <div class="container">
            <center>
                <img src="<?=base_url()?>assets/images/garuda.jpg"/>
                <br/><br/>
                <h1><b>LAPORAN HASIL BELAJAR<br/>SEKOLAH MENENGAH KEJURUAN<br/>(SMK)</b></h1>
            </center>
            <br/><br/><br/>
            <h2>
            <table class="table table-bordered">
                <tr>
                    <td>Bidang Studi </td>
                    <td>:</td>
                    <td><?=$kelas->row()->bidangstudi?></td>
                </tr>
                <tr>
                    <td>Program Studi Keahlian</td>
                    <td>:</td>
                    <td><?=$kelas->row()->programstudikeahlian?></td>
                </tr>
                <tr>
                    <td>Kompetensi Keahlian </td>
                    <td>:</td>
                    <td><?=$kelas->row()->kompetensikeahlian?></td>
                </tr>
                <tr>
                    <td>Nama Sekolah </td>
                    <td>:</td>
                    <td>SMK BUDI KARYA NATAR</td>
                </tr>
                <tr>
                    <td>Alamat Sekolah </td>
                    <td>:</td>
                    <td>JL. PTP NUSANTARA VII</td>
                </tr>
                <tr>
                    <td>Kecamatan </td>
                    <td>:</td>
                    <td>NATAR</td>
                </tr>
                <tr>
                    <td>Kabupaten </td>
                    <td>:</td>
                    <td>LAMPUNG SELATAN</td>
                </tr>
                <tr>
                    <td>Provinsi </td>
                    <td>:</td>
                    <td>LAMPUNG</td>
                </tr>
            </table>
            <br/><br/><br/>
            <center>
                NAMA PESERTA DIDIK
                <br/>
                <?=$siswa->row()->namasiswa?>
                <br/><br/><br/>
                NOMOR INDUK SISWA<br/>
                <?=$siswa->row()->nis?>
            </center>
            <br/><br/>
            <center>
                <h1>
                    <b>KEMENTERIAN PENDIDIKAN DAN KEBUDAYAAN<br/>REPUBLIK INDONESIA</b>
                </h1>
            </center>
            </h2>
            <div class="row page-break">
                <div class="row">
                    <div class="col-md-12">
                        <br/><br/>
                        <table width="100%">
                            <tr>
                                <td >Nama Peserta Didik</td>
                                <td>&nbsp;&nbsp;&nbsp;:</td>
                                <td width="50%"><?=$siswa->row()->namasiswa?></td>
                                <td>Nomor Induk Siswa</td>
                                <td>&nbsp;&nbsp;&nbsp;:</td>
                                <td><?=$siswa->row()->nis?></td>
                            </tr>
                            <tr>
                                <td>Program Studi Keahlian</td>
                                <td>&nbsp;&nbsp;&nbsp;:</td>
                                <td><?=$kelas->row()->programstudikeahlian?></td>

                                <td>Kelas/Semester</td>
                                <td>&nbsp;&nbsp;&nbsp;:</td>
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
                                <td>Bidang Studi Keahlian</td>
                                <td>&nbsp;&nbsp;&nbsp;:</td>
                                <td><?=$kelas->row()->bidangstudi?></td>
                                <td>Tahun Ajaran</td>
                                <td>&nbsp;&nbsp;&nbsp;:</td>
                                <td><?=$ta?> - <?=$semester?></td>
                            </tr> 
                        </table>
                    </div>
                </div>
                <div class="row">
                    <br/><br/><br/>
                    <h3>1. NORMATIF</h3>
                    <table class="table table-striped table-bordered">
                        <tr>
                            <th>No.</th>
                            <th>Mata Pelajaran</th>
                            <th>KKM</th>
                            <th>Angka</th>
                            <th>Huruf</th>
                            <th>Predikat</th>
                            <th>Deskripsi Kemauan Belajar</th>
                        </tr>
                        <?php if($nilai_normatif->num_rows() == 0){
                            for($i=1;$i<=10;$i++){
                        ?>
                        <tr>
                            <td><?=$i?>.</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                        </tr>
                        
                        <?php } }else{ $no = 1; $hitung = count($nilai_normatif->result()); foreach($nilai_normatif->result() as $nilai_normatif){?>
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
                        <?php } 
                        if($hitung == 1){
                            $tot_looping = 9;
                        }
                        if($hitung == 2){
                            $tot_looping = 8;
                        }
                        if($hitung == 3){
                            $tot_looping = 7;
                        }
                        if($hitung == 4){
                            $tot_looping = 6;
                        }
                        if($hitung == 5){
                            $tot_looping = 5;
                        }
                        if($hitung == 6){
                            $tot_looping = 4;
                        }
                        if($hitung == 7){
                            $tot_looping = 3;
                        }
                        if($hitung == 8){
                            $tot_looping = 2;
                        }
                        if($hitung == 9){
                            $tot_looping = 1;
                        }
                        for($i=0;$i<$tot_looping;$i++){
                        ?>
                        <tr>
                            <td><?=$no++?>.</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                        </tr>
                        
                        <?php }} ?>
                    </table>
                    <br/><br/>
                    <h3>2. ADAPTIF</h3>
                    <table class="table table-striped table-bordered">
                        <tr>
                            <th>No.</th>
                            <th>Mata Pelajaran</th>
                            <th>KKM</th>
                            <th>Angka</th>
                            <th>Huruf</th>
                            <th>Predikat</th>
                            <th>Deskripsi Kemauan Belajar</th>
                        </tr>
                        <?php if($nilai_adaptif->num_rows() == 0){
                            for($j=1;$j<=10;$j++){
                        ?>
                        <tr>
                            <td><?=$j?>.</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                        </tr>
                        <?php } } else{ $no = 1; $hitung_adaptif = count($nilai_adaptif->result());foreach($nilai_adaptif->result() as $nilai_adaptif){?>
                        <tr>
                            <td><?=$no++?>.</td>
                            <td><?=$nilai_adaptif->namamapel?></td>
                            <td><?=$nilai_adaptif->kkm?></td>
                            <td><?=number_format($nilai_adaptif->nr)?></td>
                            <td><?=$this->M_admin->terbilang(number_format($nilai_adaptif->nr))?></td>
                            <td>
                                <?php echo @$this->M_admin->cek_predikat($this->session->userdata('idguru'), $nilai_normatif->nr);?>
                            </td>
                            <td><?=$nilai_adaptif->deskripsi?></td>
                        </tr>
                        <?php }
                        if($hitung_adaptif == 1){
                            $tot_looping1 = 9;
                        }
                        if($hitung_adaptif == 2){
                            $tot_looping1 = 8;
                        }
                        if($hitung_adaptif == 3){
                            $tot_looping1 = 7;
                        }
                        if($hitung_adaptif == 4){
                            $tot_looping1 = 6;
                        }
                        if($hitung_adaptif == 5){
                            $tot_looping1 = 5;
                        }
                        if($hitung_adaptif == 6){
                            $tot_looping1 = 4;
                        }
                        if($hitung_adaptif == 7){
                            $tot_looping1 = 3;
                        }
                        if($hitung_adaptif == 8){
                            $tot_looping1 = 2;
                        }
                        if($hitung_adaptif == 9){
                            $tot_looping1 = 1;
                        }
                        for($i=0;$i<$tot_looping1;$i++){
                        ?>
                        <tr>
                            <td><?=$no++?>.</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                        </tr>
                        <?php } }?>
                    </table>
                    
                    <div class="page-break">
                        <br/><br/><br/>
                    <h3>3. Produktif</h3>
                    <table class="table table-striped table-bordered">
                        <tr>
                            <th>No.</th>
                            <th>Mata Pelajaran</th>
                            <th>KKM</th>
                            <th>Angka</th>
                            <th>Huruf</th>
                            <th>Predikat</th>
                            <th>Deskripsi Kemauan Belajar</th>
                        </tr>
                        <?php if($nilai_produktif->num_rows() == 0){
                            for($i=1;$i<=10;$i++){
                        ?>
                        <tr>
                            <td><?=$i?>.</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                        </tr>
                        <?php } }else{ $no = 1; $hitung_produktif = count($nilai_produktif->result()); foreach($nilai_produktif->result() as $nilai_produktif){?>
                        <tr>
                            <td><?=$no++?>.</td>
                            <td><?=$nilai_produktif->namamapel?></td>
                            <td><?=$nilai_produktif->kkm?></td>
                            <td><?=number_format($nilai_produktif->nr)?></td>
                            <td><?=$this->M_admin->terbilang(number_format($nilai_produktif->nr))?></td>
                            <td>
                                <?php echo @$this->M_admin->cek_predikat($this->session->userdata('idguru'), $nilai_normatif->nr);?>
                            </td>
                            <td><?=$nilai_produktif->deskripsi?></td>
                        </tr>
                        <?php } 
                        if($hitung_adaptif == 1){
                            $tot_looping2 = 9;
                        }
                        if($hitung_adaptif == 2){
                            $tot_looping2 = 8;
                        }
                        if($hitung_adaptif == 3){
                            $tot_looping2= 7;
                        }
                        if($hitung_adaptif == 4){
                            $tot_looping2 = 6;
                        }
                        if($hitung_adaptif == 5){
                            $tot_looping2 = 5;
                        }
                        if($hitung_adaptif == 6){
                            $tot_looping2 = 4;
                        }
                        if($hitung_adaptif == 7){
                            $tot_looping2 = 3;
                        }
                        if($hitung_adaptif == 8){
                            $tot_looping2 = 2;
                        }
                        if($hitung_adaptif == 9){
                            $tot_looping2 = 1;
                        }
                        for($i=0;$i<$tot_looping1;$i++){
                        ?>
                        <tr>
                            <td><?=$no++?>.</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                        </tr>
                        <?php } }?>
                    </table>
                    <br/><br/>
                    <h3>4. Muatan Lokal</h3>
                    <table class="table table-striped table-bordered">
                        <tr>
                            <th>No.</th>
                            <th>Mata Pelajaran</th>
                            <th>KKM</th>
                            <th>Angka</th>
                            <th>Huruf</th>
                            <th>Predikat</th>
                            <th>Deskripsi Kemauan Belajar</th>
                        </tr>
                        <?php if($nilai_mulok->num_rows() == 0){
                        for($i=1;$i<=10;$i++){
                        ?>
                        <tr>
                            <td><?=$i?>.</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                        </tr>
                        
                        <?php } }else{ $no = 1; $hitung_mulok=count($nilai_mulok->result()); foreach($nilai_mulok->result() as $nilai_mulok){?>
                        <tr>
                            <td><?=$no++?>.</td>
                            <td><?=$nilai_mulok->namamapel?></td>
                            <td><?=$nilai_mulok->kkm?></td>
                            <td><?=number_format($nilai_mulok->nr)?></td>
                            <td><?=$this->M_admin->terbilang(number_format($nilai_mulok->nr))?></td>
                            <td><?php echo @$this->M_admin->cek_predikat($this->session->userdata('idguru'), $nilai_normatif->nr);?></td>
                            <td><?=$nilai_mulok->deskripsi?></td>
                        </tr>
                        <?php } 
                        if($hitung_adaptif == 1){
                            $tot_looping3 = 9;
                        }
                        if($hitung_adaptif == 2){
                            $tot_looping3 = 8;
                        }
                        if($hitung_adaptif == 3){
                            $tot_looping3= 7;
                        }
                        if($hitung_adaptif == 4){
                            $tot_looping3 = 6;
                        }
                        if($hitung_adaptif == 5){
                            $tot_looping3 = 5;
                        }
                        if($hitung_adaptif == 6){
                            $tot_looping3 = 4;
                        }
                        if($hitung_adaptif == 7){
                            $tot_looping3 = 3;
                        }
                        if($hitung_adaptif == 8){
                            $tot_looping3 = 2;
                        }
                        if($hitung_adaptif == 9){
                            $tot_looping3 = 1;
                        }
                        for($i=1;$i<=$tot_looping3;$i++){
                        ?>
                        <tr>
                            <td><?=$no++?>.</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                        </tr>
                        <?php } }?>
                    </table>
                    <br/><br/>
                    <table width="100%">
                    <tr>
                        <td><b>JUMLAH TOTAL </b></td>
                        <td>:</td>
                        <td width="50%"><b> <?=number_format($jumlah_nilai->row()->jumlah_nilai)?></b></td>
                        
                    </tr>
                    <tr>
                        <td><b>Rata-Rata </b></td>
                        <td>:</td>
                        <td><b> <?=number_format($jumlah_nilai->row()->jumlah_nilai/$total_nilai->row()->total_nilai, 2)?></b></td>
                        
                    </tr>
                    <tr>
                        <td><b>Peringkat </b></td>
                        <td>:</td>
                        <td><b></b>
                        <?php $rank = 0; foreach($ranking->result() as $ranking){
                            if($ranking->nis == $siswa->row()->nis){
                                $rank = $ranking->ranking;
                            }
                         }?>
                         <b><?=$rank?></b> Dari <?=count($total_siswa->result())?> Siswa</td>
                    </tr>
                    </table>
                    <br/><br/>
                    <table width="100%">
                        <tr>
                            <td><center>Mengetahui</center></td>
                            <td></td>
                            <td width="50%"><center>Natar, <?=date('d-m-Y')?></center></td>
                        </tr>
                        <tr>
                            <td><center>Orang Tua/Wali</center></td>
                            <td></td>
                            <td width="50%"><center>Wali Kelas</center></td>
                        </tr>                            
                    </table>
                    <br/><br/>
                    <br/><br/>
                    <table width="100%">
                        <tr>
                            <td><center></center></td>
                            <td></td>
                            <td width="50%"><center></center></td>
                        </tr>
                        <tr>
                            <td><center></center></td>
                            <td></td>
                            <td width="50%"><center><?=$guru->row()->namaguru?></center></td>
                        </tr>
                    </table>
                    </div>
                </div>
            </div>

            <div class="row page-break">
                <br/>
                <center><h3>Catatan Akhir Semester</h3></center>
                        <?=@$this->session->flashdata('msg')?>
                        <h3>1. Kegiatan Belajar di Dunia Usaha/Industri dan Instansi Relevan</h3>
                        <table class="table table-bordered">
                            <tr>
                                <th>No.</th>
                                <th>Nama DU/DI </th>
                                <th>Alamat</th>
                                <th>Lama dan Waktu Pelaksanaan</th>
                                <th>Nilai</th>
                                <th>Predikat</th>
                            </tr>
                            <?php if($kegiatan->num_rows() == 0){?>
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
                            <?php }else{$no = 1; foreach($kegiatan->result() as $kegiatan){?>
                            <tr>
                                <td><?=$no++?>.</td>
                                <td><?=$kegiatan->namadu?></td>
                                <td><?=$kegiatan->alamat?></td>
                                <td><?=$kegiatan->lamadanwaktu?></td>
                                <td><?=$kegiatan->nilai?></td>
                                <td><?=$kegiatan->predikat?></td>
                            </tr>
                                <?php } ?>
                            <?php } ?>
                        </table>
                        
                        <div class="row">
                            <div class="col-md-6">
                                <h3>2. Pengembangan Diri</h3>
                                <table class="table table-bordered">
                                    <tr>
                                        <th>No.</th>
                                        <th>Komponen</th>
                                        <th>Predikat</th>
                                    </tr>
                                    <?php $no = 1; foreach($pengembangan_diri->result() as $pengembangan_diri){?>
                                    <tr>
                                        <td><?=$no++?>.</td>
                                        <td><?=$pengembangan_diri->komponen?></td>
                                        <td><?=$pengembangan_diri->predikat?></td>
                                    </tr>
                                    <?php }?>
                                </table>
                            </div>
                            <div class="col-md-6">
                                <h3>3. Kepribadian</h3>
                                <table class="table table-bordered">
                                    <tr>
                                        <th>No.</th>
                                        <th>Komponen</th>
                                        <th>Predikat</th>
                                    </tr>
                                    <?php $no = 1; foreach($kepribadian->result() as $kepribadian){?>
                                    <tr>
                                        <td><?=$no++?>.</td>
                                        <td><?=$kepribadian->komponen?></td>
                                        <td><?=$kepribadian->predikat?></td>
                                    </tr>
                                    <?php }?>
                                </table>
                            </div>
                        </div>
                        <h3>4. Ketidakhadiran</h3>
                        <table class="table table-bordered">
                            <tr>
                                <th>No.</th>
                                <th>Jenis </th>
                                <th>Jumlah</th>
                            </tr>
                            <?php $no = 1; foreach($presensi->result() as $presensi){?>
                            <tr>
                                <td><?=$no++?>.</td>
                                <td><?=$presensi->jenis?></td>
                                <td><?=$presensi->jumlah?> Hari</td>
                            </tr>
                            <?php }?>
                        </table>
                        <br/>
                        <h3>5. Catatan Untuk Perhatian Orang Tua Wali</h3>
                        <?php if($catatan->num_rows() != 0){?>
                        <table class="table table-bordered">
                            <tr>
                                <td><?=$catatan->row()->catatan?></td>
                                
                            </tr>
                        </table>
                        <?php }else{?>
                        <table class="table table-bordered">
                            <tr>
                                <td>-</td>
                            </tr>
                        </table>
                        <?php }?>
                        <br/><br/>
                        <table width="100%">
                            <tr>
                                <td><center>Mengetahui</center></td>
                                <td></td>
                                <td width="50%"><center>Natar, <?=date('d-m-Y')?></center></td>
                            </tr>
                            <tr>
                                <td><center>Orang Tua/Wali</center></td>
                                <td></td>
                                <td width="50%"><center>Wali Kelas</center></td>
                            </tr>                            
                        </table>
                        <br/><br/>
                        <br/><br/>
                        <br/><br/>
                        <table width="100%">
                            <tr>
                                <td><center></center></td>
                                <td></td>
                                <td width="50%"><center></center></td>
                            </tr>
                            <tr>
                                <td><center></center></td>
                                <td></td>
                                <td width="50%"><center><?=$guru->row()->namaguru?></center></td>
                            </tr>
                        </table>
                        <br/><br/>
                        <center>Kepala Sekolah</center>
                        <br/><br/><br/><br/>
                        <center>Rohmadi, S.T</center>

            </div>
        </div>
    </body>
</html>