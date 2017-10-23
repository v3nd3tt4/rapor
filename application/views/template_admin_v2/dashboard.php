<div class="row">
    <div class="col-lg-12">
        <div class="ibox float-e-margins">
            <div class="ibox-title">
                <div class="row">
                    <div class="col-md-12">
                        <a href="<?=base_url()?>adminNew/home/tambah" class="btn btn-danger" style="float: right;"><i class="fa fa-plus"></i>  Tambah Baru</a>
                    </div>
                </div>
            </div>
            <div class="ibox-content">
            	<?=@$this->session->flashdata('msg')?>
                <table class="table table-striped table-hover dttbl">
                    <thead>
                        <tr>
                            <th>No.</th>
                            <th>Judul</th>
                            <th>Kategori</th>
                            <th>Status</th>
                            <th>Tanggal</th>                            
                            <th>aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $no = 1; 
                        foreach ($list->result() as $row) {
                            # code...
                        ?>                        
                        <tr>
                            <td><?=$no++?>.</td>
                            <td><?=$row->judul?></td>
                            <td><?=$row->kategori?></td>
                            <td><?=$row->status?></td>
                            <td><?=$row->tanggal?></td>
                            <td>
                                <a href="<?=base_url()?>adminNew/home/edit/<?=$row->id?>" class="btn btn-xs btn-warning"><i class="fa fa-pencil"></i> Edit </a>
                                <a href="<?=base_url()?>posting/hapus_posting/<?=$row->id?>/<?=$row->gambar != '' ? $row->gambar : ''?>" class="btn btn-xs btn-success" onclick="return confirm('yakin akan menghapus data ini?')"><i class="fa fa-remove"></i>  Hapus </a>
                                <a href="<?=base_url()?>detail/index/<?=$row->id?>/<?php $kata=array('.', '/', '(', ')', ':', ';', ',', ' '); echo str_replace($kata,'-',$row->judul); ?>" target="_blank" class="btn btn-xs btn-danger"><i class="fa fa-eye"></i> Lihat </a>
                            </td>
                        </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
            <!--Data Pertahun-->
            <!-- 
            <div class="row">             
                <div class="col-lg-3">
                    <div class="ibox float-e-margins">
                        <div class="ibox-title">
                            <h5>Report Botol Sample PAP bulan ini</h5>
                            <div class="ibox-tools">
                                <a class="collapse-link">
                                    <i class="fa fa-chevron-up"></i>
                                </a>
                                
                            </div>
                        </div>
                        <div class="ibox-content">
                            <div id="morris-donut-chart" style="height: 110px;" ></div>
                        </div>
                        <div class="ibox-content">
                        <div class="row">
                            <div class="col-xs-3">
                                <small class="stats-label">Botol Dikirim</small>
                                <h4>3600</h4>
                            </div>

                            <div class="col-xs-3">
                                <small class="stats-label">Botol Masuk</small>
                                <h4>2566</h4>
                            </div>
                            <div class="col-xs-3">
                                <small class="stats-label">Urgent</small>
                                <h4>329</h4>
                            </div>

                            <div class="col-xs-3">
                                <small class="stats-label">Error</small>
                                <h4>97</h4>
                            </div>
                        </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3">
                    <div class="ibox float-e-margins">
                        <div class="ibox-title">
                            <h5>Report Botol Sample PAP tahun ini</h5>
                            <div class="ibox-tools">
                                <a class="collapse-link">
                                    <i class="fa fa-chevron-up"></i>
                                </a>
                                
                            </div>
                        </div>
                        <div class="ibox-content">
                            <div id="morris-donut-chart2" style="height: 110px;" ></div>
                        </div>
                        <div class="ibox-content">
                        <div class="row">
                            <div class="col-xs-3">
                                <small class="stats-label">Botol Dikirim</small>
                                <h4>43200</h4>
                            </div>

                            <div class="col-xs-3">
                                <small class="stats-label">Botol Masuk</small>
                                <h4>30672</h4>
                            </div>
                            <div class="col-xs-3">
                                <small class="stats-label">Urgent</small>
                                <h4>3948</h4>
                            </div>

                            <div class="col-xs-3">
                                <small class="stats-label">Error</small>
                                <h4>1164</h4>
                            </div>
                        </div>
                        </div>
                    </div>
                </div>

            <div class="row">
                <div class="col-lg-3">
                    <div class="ibox float-e-margins">
                    <div class="ibox-title">
                        <h5>Report Botol Sample PAP 3 bulan terakhir</h5>
                    </div>
                    <div class="ibox-content">
                        <div>
                            <canvas id="barChart" height="325"></canvas>
                        </div>
                    </div>
                    </div>
                </div>

                <div class="col-lg-3">
                    <div class="ibox float-e-margins">
                    <div class="ibox-title">
                        <h5>Oil Hours Error pada PAP 3 bulan terakhir</h5>
                    </div>
                    <div class="ibox-content">
                        <div>
                            <canvas id="barChart2" height="325"></canvas>
                        </div>
                    </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-6">
                    <div class="ibox float-e-margins">
                        <div class="ibox-title">
                            <h5>Leadtime Received Date - Reported Date Bulanan</h5>
                        </div>
                        <div class="ibox-content">
                            <div id="ct-chart4" class="ct-perfect-fourth"></div>
                        </div>
                    </div>
                </div>
                
                 <div class="col-lg-6">
                    <div class="ibox float-e-margins">
                        <div class="ibox-title">
                            <h5>Leadtime Pengiriman Sample Bulanan</h5>
                        </div>
                        <div class="ibox-content">
                            <div id="ct-chart4_2" class="ct-perfect-fourth"></div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
            <div class="col-lg-12">
                <div class="ibox float-e-margins">
                        <div class="ibox-title">
                            <h5>Trending PAP</h5>
                            <div class="ibox-tools">
                                <a class="collapse-link">
                                    <i class="fa fa-chevron-up"></i>
                                </a>
                                <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                                    <i class="fa fa-wrench"></i>
                                </a>
                                <ul class="dropdown-menu dropdown-user">
                                    <li><a href="#">Config option 1</a>
                                    </li>
                                    <li><a href="#">Config option 2</a>
                                    </li>
                                </ul>
                                <a class="close-link">
                                    <i class="fa fa-times"></i>
                                </a>
                            </div>
                        </div>
                        <div class="ibox-content">
                             <label>Site</label>
                                <div class="input-group">
                                <select data-placeholder="Choose a Country..." class="chosen-select" style="width:350px;" tabindex="2">
                                <option value="">Select</option>
                                <option value="Y">Adaro</option>
                                <option value="N">Bendili</option>
                                <option value="N">Batukajang</option>
                                <option value="N">Bontang</option>
                                </select>
                                </div>
                            <div class="table-responsive">
                                <table class="table table-striped">
                                    <thead>
                                    <tr>
                                        <th rowspan="2">No</th>
                                        <th rowspan="2">Jobsite</th>
                                        <th rowspan="2">Customer</th>
                                        <th rowspan="2">Unit Model</th>
                                        <th rowspan="2">Component</th>
                                        <th colspan="5">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Bulan</th>
                                        <th rowspan="2">Remarks</th>
                                    </tr>
                                    <tr>
                                        <th>Juni</th>
                                        <th>Juli</th>
                                        <th>Agustus</th>
                                        <th>September</th>
                                        <th>Oktober</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td rowspan="4">1.</td>
                                        <td rowspan="4">Adaro</td>
                                        <td rowspan="4">PAMA</td>
                                        <td rowspan="4">PC3000-6</td>
                                        <td>Engine</td>
                                        <td bgcolor="#61C217"></td>
                                        <td></td>
                                        <td bgcolor="#61C217"></td>
                                        <td bgcolor="#61C217"></td>
                                        <td bgcolor="#F21111"><font color="white">Cu#</font></td>
                                        <td>SH502</td>
                                    </tr>
                                    <tr>
                                        <td>PTO</td>
                                        <td bgcolor="#61C217"></td>
                                        <td></td>
                                        <td bgcolor="#61C217"></td>
                                        <td bgcolor="#61C217"></td>
                                        <td bgcolor="#61C217"></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>Gear</td>
                                        <td bgcolor="#F21111"><font color="white">Dust, Fe, Wtr, PQ#</font></td>
                                        <td></td>
                                        <td bgcolor="#F21111"><font color="white">Vist, Dust, Fe, Cu, PQ#</font></td>
                                        <td bgcolor="#F21111"><font color="white">Vist, Dust, Cu, PQ#</font></td>
                                        <td bgcolor="#F21111"><font color="white">Vist, Dust, Cu, PQ#</font></td>
                                        <td>SH502 (xx), EX716(3x)</td>
                                    </tr>
                                    <tr>
                                        <td>Hydraulic</td>
                                        <td bgcolor="#61C217"><font color="white">Test</font>   </td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>

                        </div>
                </div>
            </div>

            </div>


            </div>
        
        
   

     -->