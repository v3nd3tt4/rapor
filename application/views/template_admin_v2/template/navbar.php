    <div id="page-wrapper" class="gray-bg">
        <div class="row border-bottom">
        <nav class="navbar navbar-static-top white-bg" role="navigation" style="margin-bottom: 0">
        <div class="navbar-header">
            <img alt="image" class="navbar-minimalize minimalize-styl-2 img-circle" width="60px" src="<?=base_url()?>assets/images/logo.jpg" style="float: left; margin: 10px" />
            <!-- <a class="navbar-minimalize minimalize-styl-2 btn btn-primary " href="#"><i class="fa fa-bars"></i> </a> -->
            <form role="search" class="navbar-form-custom" action="search_results.html">
                
                <div class="form-group">
                    <input type="text" placeholder="Sistem Informasi Raport" class="form-control" name="top-search" id="top-search">
                </div>
            </form>
        </div>
            <ul class="nav navbar-top-links navbar-right">
                <?php if($this->session->userdata('status') != ''){?>
                <li>
                    <span class="m-r-sm text-muted welcome-message">Selamat datang, <?=@$this->session->userdata('nama')?></span>
                </li>

                <li>
                    <a href="<?=base_url()?>login/logout">
                        <i class="fa fa-sign-out"></i> Log out
                    </a>
                </li>
                <?php }else{?>
                <li>
                    <a href="<?=base_url()?>login">
                        <i class="fa fa-sign-out"></i> Login
                    </a>
                </li>
                <?php }?>
            </ul>

        </nav>
        </div>
<div class="wrapper wrapper-content animated" >