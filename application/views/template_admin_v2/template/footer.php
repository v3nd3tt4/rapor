    		  <div class="footer">
                <div>
                    
                </div>
            </div>

            </div>
        </div>


    <!-- Mainly scripts -->
    <script src="<?=base_url()?>assets/assets/js/jquery-2.1.1.js"></script>
    <script src="<?=base_url()?>assets/assets/js/bootstrap.min.js"></script>
    <script src="<?=base_url()?>assets/assets/js/plugins/metisMenu/jquery.metisMenu.js"></script>
    <script src="<?=base_url()?>assets/assets/js/plugins/slimscroll/jquery.slimscroll.min.js"></script>

    <!-- Morris -->
    
    <script src="<?=base_url()?>assets/assets/js/plugins/morris/raphael-2.1.0.min.js"></script>
    <script src="<?=base_url()?>assets/assets/js/plugins/morris/morris.js"></script>
    <script src="<?=base_url()?>assets/assets/js/plugins/chartJs/Chart.min.js"></script>

    <script src="<?=base_url()?>assets/assets/js/plugins/chartist/chartist.min.js"></script>

    <!-- Custom and plugin javascript -->
    <script src="<?=base_url()?>assets/assets/js/inspinia.js"></script>
    <script src="<?=base_url()?>assets/assets/js/plugins/pace/pace.min.js"></script>
    <script src="<?=base_url()?>assets/ckeditor/ckeditor.js"></script>
    <script type="text/javascript" src="<?=base_url()?>assets/js/plugins/jquery.dataTables.min.js"></script>
    <script type="text/javascript" src="<?=base_url()?>assets/jquery.bxslider.js"></script>
    <script type="text/javascript" src="<?=base_url()?>assets/js/plugins/dataTables.bootstrap.min.js"></script>

    <!-- Morris demo data-->
    <script type="text/javascript">
    $(document).ready(function() {

        $('.dttbl').dataTable();

        for (instance in CKEDITOR.instances) {
            CKEDITOR.instances[instance].updateElement();
        }

    });

    </script>
    <script type="text/javascript">
    $(document).ready(function() {
        $('.bxslider').bxSlider();
        $(document).on('submit', '#frm_tambah_posting', function(e){
            e.preventDefult();
            $('#notif_tambah_posting').html('<img src="<?=base_url()?>assets/images/loading4.gif"/> Loading...');
            // var data = new FormData(document.getElementById("frm_tambah_posting"));
            // $.ajax({
            //     url : '<?=base_url()?>posting/simpan_posting',
            //     type: 'POST',
            //     enctype: 'multipart/form-data',
            //     data: data,
            //     processData: false,
            //     contentType: false,
            //     success: function(msg){
            //         $('#notif_tambah_posting').html(msg);
            //     }
            // });
        });
    });
    </script>
	</body>
</html>