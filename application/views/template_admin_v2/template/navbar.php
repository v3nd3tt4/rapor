<?php
    $hitung = $this->db->get_where('family', array('kategori' => 'Alumni', 'status' => 'menunggu'))->num_rows();
?>
    <div id="page-wrapper" class="gray-bg">
        <div class="row border-bottom">
        <nav class="navbar navbar-static-top white-bg" role="navigation" style="margin-bottom: 0">
        <div class="navbar-header">
            <a class="navbar-minimalize minimalize-styl-2 btn btn-primary " href="#"><i class="fa fa-bars"></i> </a>
            <form role="search" class="navbar-form-custom" action="search_results.html">
                <div class="form-group">
                    <input type="text" placeholder="Search for something..." class="form-control" name="top-search" id="top-search">
                </div>
            </form>
        </div>
            <ul class="nav navbar-top-links navbar-right">
                <li>
                    <span class="m-r-sm text-muted welcome-message">Selamat datang, <?=@$this->session->userdata('nama')?></span>
                </li>
             
                <li class="dropdown">
                    <a class="dropdown-toggle count-info" data-toggle="dropdown" href="#">
                        <i class="fa fa-bell"></i>  <span class="label label-primary"><?=$hitung?></span>
                    </a>
                    <ul class="dropdown-menu dropdown-alerts">
                        <li>
                            <a href="#">
                                <div>
                                    <i class="fa fa-envelope fa-fw"></i> <?=$hitung?> Alumni menunggu untuk di verifikasi
                                    <span class="pull-right text-muted small"></span>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                    </ul>
                </li>


                <li>
                    <a href="<?=base_url()?>adminNew/home/logout">
                        <i class="fa fa-sign-out"></i> Log out
                    </a>
                </li>
               <!-- <li>
                    <a class="right-sidebar-toggle">
                        <i class="fa fa-tasks"></i>
                    </a>
                </li>
                -->
            </ul>

        </nav>
        </div>
<div class="wrapper wrapper-content animated" >