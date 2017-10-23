    <nav class="navbar-default navbar-static-side" role="navigation">
        <div class="sidebar-collapse">
            <ul class="nav metismenu" id="side-menu">
                <li class="nav-header">
                    <div class="dropdown profile-element"> <span>
                            <img alt="image" class="img-circle" width="100px" src="<?=base_url()?>assets/images/user_fb.jpeg" />
                             </span>
                        <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                            <span class="clear"> <span class="block m-t-xs"> <strong class="font-bold"><?=$this->session->userdata('nama')?></strong>
                            </span> <span class="text-muted text-xs block">Bimbingan Konseling <b class="caret"></b></span> </span> </a>
                        <ul class="dropdown-menu animated fadeInRight m-t-xs">
                          
                            <li><a href="<?=base_url()?>adminNew/home/logout">Logout</a></li>
                        </ul>
                    </div>
                    <div class="logo-element">
                        IN+
                    </div>
                </li>
                    <li <?php  if($link == 'home'){?>class="active" <?php }?>>
                    <a href="<?=base_url()?>adminNew/home"><i class="fa fa-th-large"></i> <span class="nav-label">Artikel</span> <!-- <span class="fa arrow"></span> --></a>
                    <!-- <ul class="nav nav-second-level">
                        <li class="active"><a href="index.html">Dashboard FMC</a></li>
                        <li><a href="reguler.html">Dashboard V.2</a></li>

                    </ul> -->
                </li>
                <li <?php  if($link == 'dosen'){?>class="active" <?php }?>>
                    <a href="<?=base_url()?>adminNew/home/dosen"><i class="fa fa-graduation-cap" aria-hidden="true"></i> <span class="nav-label">Dosen</span><!-- <span class="fa arrow"></span> --></a>
                    <!-- <ul class="nav nav-second-level collapse">
                        <li><a href="transaction.html">Used Oil</a></li>
                        <li><a href="newoil.html">New Oil, Fuel & Others</a></li>
                        <li><a href="unitno.html">UnitNo History</a></li>
                        <li><a href="mhealth.html">Machine Health</a></li>
                        <li><a href="chealth.html">Component Health</a></li>
                        <li><a href="mcomparation.html">Machine Comparation</a></li>
                    </ul> -->
                </li>
                <li <?php  if($link == 'alumni'){?>class="active" <?php }?>>
                    <a href="<?=base_url()?>adminNew/home/alumni"><i class="fa fa-users" aria-hidden="true"></i>
 <span class="nav-label">Alumni</span></a>
                </li>
                <li <?php  if($link == 'kotak_saran'){?>class="active" <?php }?>>
                    <a href="<?=base_url()?>adminNew/home/kotak_saran"><i class="fa fa-newspaper-o" aria-hidden="true"></i>
 <span class="nav-label">Kotak Saran</span></a>
                </li>
                 <li <?php  if($link == 'pengajuan_judul'){?>class="active" <?php }?>>
                    <a href="<?=base_url()?>adminNew/home/pengajuan_judul"><i class="fa fa-book" aria-hidden="true"></i>
 <span class="nav-label">Pengajuan Judul</span></a>
                </li>
                <li <?php  if($link == 'galeri'){?>class="active" <?php }?>>
                    <a href="<?=base_url()?>adminNew/home/galeri"><i class="fa fa-folder-open" aria-hidden="true"></i>
 <span class="nav-label">Galeri</span></a>
                </li>
                <li <?php  if($link == 'user'){?>class="active" <?php }?>>
                    <a href="<?=base_url()?>adminNew/home/user"><i class="fa fa-user" aria-hidden="true"></i>
 <span class="nav-label">User</span></a>
                </li>
            </ul>
        </div>
    </nav>