<?php $row = $data->row()?>
<div class="row">
    <div class="col-lg-12">
        <div class="ibox float-e-margins">
            <form id="frm_tambah_user" enctype="multipart/form-data" method="POST" action="<?=base_url()?>admin/updateadmin">
            	<div class="ibox-title">
                    <div class="row">
                        <div class="col-md-10">
                            <h3>Edit User</h3>
                        </div>
                        <div class="col-md-2">
                            <button type="submit" class="btn btn-danger" style="float: right;"><i class="fa fa-save"></i>  Simpan</button>
                        </div>
                    </div>
                </div>
                <div class="ibox-content">
                    <?=@$this->session->flashdata('msg')?>
                    <div class="form-group">
                        <label>Username:</label>
                        <input type="hidden" name="id"  value="<?=$row->id?>">
                        <input type="text" name="usernametambah" value="<?=$row->username?>" class="form-control" readonly required />
                    </div>
            		<div class="form-group">
            			<label>Nama:</label>
            			<input type="text" name="namatambah" class="form-control" value="<?=$row->nama?>" required />
            		</div>
                    <div class="form-group">
                        <label>Password:</label>
                        <input type="password" name="passwordtambah" class="form-control" required />
                    </div>
                    <div class="form-group">
                        <label>Konfirmasi Password:</label>
                        <input type="password" name="konfirmasipasswordtambah" class="form-control" required />
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
