<footer class="main-footer">
    <div class="pull-right hidden-xs">
      <b>Version</b> 2.4.13
    </div>
    <strong>Copyright &copy; 2014-2019 <a href="https://adminlte.io">AdminLTE</a>.</strong> All rights
    reserved.
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark" style="display: none;">
    <!-- Create the tabs -->
    <ul class="nav nav-tabs nav-justified control-sidebar-tabs">
      <li><a href="#control-sidebar-home-tab" data-toggle="tab"><i class="fa fa-home"></i></a></li>
      <li><a href="#control-sidebar-settings-tab" data-toggle="tab"><i class="fa fa-gears"></i></a></li>
    </ul>
    <!-- Tab panes -->
    <div class="tab-content">
      <!-- Home tab content -->
      <div class="tab-pane" id="control-sidebar-home-tab">
        <h3 class="control-sidebar-heading">Recent Activity</h3>
        <ul class="control-sidebar-menu">
          <li>
            <a href="javascript:void(0)">
              <i class="menu-icon fa fa-birthday-cake bg-red"></i>

              <div class="menu-info">
                <h4 class="control-sidebar-subheading">Langdon's Birthday</h4>

                <p>Will be 23 on April 24th</p>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <i class="menu-icon fa fa-user bg-yellow"></i>

              <div class="menu-info">
                <h4 class="control-sidebar-subheading">Frodo Updated His Profile</h4>

                <p>New phone +1(800)555-1234</p>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <i class="menu-icon fa fa-envelope-o bg-light-blue"></i>

              <div class="menu-info">
                <h4 class="control-sidebar-subheading">Nora Joined Mailing List</h4>

                <p>nora@example.com</p>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <i class="menu-icon fa fa-file-code-o bg-green"></i>

              <div class="menu-info">
                <h4 class="control-sidebar-subheading">Cron Job 254 Executed</h4>

                <p>Execution time 5 seconds</p>
              </div>
            </a>
          </li>
        </ul>
        <!-- /.control-sidebar-menu -->

        <h3 class="control-sidebar-heading">Tasks Progress</h3>
        <ul class="control-sidebar-menu">
          <li>
            <a href="javascript:void(0)">
              <h4 class="control-sidebar-subheading">
                Custom Template Design
                <span class="label label-danger pull-right">70%</span>
              </h4>

              <div class="progress progress-xxs">
                <div class="progress-bar progress-bar-danger" style="width: 70%"></div>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <h4 class="control-sidebar-subheading">
                Update Resume
                <span class="label label-success pull-right">95%</span>
              </h4>

              <div class="progress progress-xxs">
                <div class="progress-bar progress-bar-success" style="width: 95%"></div>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <h4 class="control-sidebar-subheading">
                Laravel Integration
                <span class="label label-warning pull-right">50%</span>
              </h4>

              <div class="progress progress-xxs">
                <div class="progress-bar progress-bar-warning" style="width: 50%"></div>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <h4 class="control-sidebar-subheading">
                Back End Framework
                <span class="label label-primary pull-right">68%</span>
              </h4>

              <div class="progress progress-xxs">
                <div class="progress-bar progress-bar-primary" style="width: 68%"></div>
              </div>
            </a>
          </li>
        </ul>
        <!-- /.control-sidebar-menu -->

      </div>
      <!-- /.tab-pane -->
      <!-- Stats tab content -->
      <div class="tab-pane" id="control-sidebar-stats-tab">Stats Tab Content</div>
      <!-- /.tab-pane -->
      <!-- Settings tab content -->
      <div class="tab-pane" id="control-sidebar-settings-tab">
        <form method="post">
          <h3 class="control-sidebar-heading">General Settings</h3>

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Report panel usage
              <input type="checkbox" class="pull-right" checked>
            </label>

            <p>
              Some information about this general settings option
            </p>
          </div>
          <!-- /.form-group -->

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Allow mail redirect
              <input type="checkbox" class="pull-right" checked>
            </label>

            <p>
              Other sets of options are available
            </p>
          </div>
          <!-- /.form-group -->

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Expose author name in posts
              <input type="checkbox" class="pull-right" checked>
            </label>

            <p>
              Allow the user to show his name in blog posts
            </p>
          </div>
          <!-- /.form-group -->

          <h3 class="control-sidebar-heading">Chat Settings</h3>

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Show me as online
              <input type="checkbox" class="pull-right" checked>
            </label>
          </div>
          <!-- /.form-group -->

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Turn off notifications
              <input type="checkbox" class="pull-right">
            </label>
          </div>
          <!-- /.form-group -->

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Delete chat history
              <a href="javascript:void(0)" class="text-red pull-right"><i class="fa fa-trash-o"></i></a>
            </label>
          </div>
          <!-- /.form-group -->
        </form>
      </div>
      <!-- /.tab-pane -->
    </div>
  </aside>
  <!-- /.control-sidebar -->
  <!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->

<!-- jQuery 3 -->
<script src="<?php echo base_url() ?>assets/bower_components/jquery/dist/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="<?php echo base_url() ?>assets/bower_components/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button);
</script>
<!-- Bootstrap 3.3.7 -->
<script src="<?php echo base_url() ?>assets/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- Morris.js charts -->
<script src="<?php echo base_url() ?>assets/bower_components/raphael/raphael.min.js"></script>
<script src="<?php echo base_url() ?>assets/bower_components/morris.js/morris.min.js"></script>
<!-- Sparkline -->
<script src="<?php echo base_url() ?>assets/bower_components/jquery-sparkline/dist/jquery.sparkline.min.js"></script>
<!-- jvectormap -->
<script src="<?php echo base_url() ?>assets/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
<script src="<?php echo base_url() ?>assets/plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
<!-- jQuery Knob Chart -->
<script src="<?php echo base_url() ?>assets/bower_components/jquery-knob/dist/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="<?php echo base_url() ?>assets/bower_components/moment/min/moment.min.js"></script>
<script src="<?php echo base_url() ?>assets/bower_components/bootstrap-daterangepicker/daterangepicker.js"></script>
<!-- datepicker -->
<script src="<?php echo base_url() ?>assets/bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>
<!-- Bootstrap WYSIHTML5 -->
<script src="<?php echo base_url() ?>assets/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
<!-- Slimscroll -->
<script src="<?php echo base_url() ?>assets/bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="<?php echo base_url() ?>assets/bower_components/fastclick/lib/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="<?php echo base_url() ?>assets/dist/js/adminlte.min.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="<?php echo base_url() ?>assets/dist/js/pages/dashboard.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?php echo base_url() ?>assets/dist/js/demo.js"></script>
<!-- Multi image -->
<script src="<?php echo base_url() ?>assets/plugins/multi-image-uploader-bootstrap/jquery.imagesloader-1.0.1.js"></script>
<!-- Data Tables -->
<link rel="stylesheet" href="<?php echo base_url(); ?>assets/plugins/dataTables/css/dataTables.bootstrap4.min.css" type="text/css">
<link rel="stylesheet" href="<?php echo base_url(); ?>assets/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/plugins/dataTables/css/jquery.dataTables.min.css'">
<script type="text/javascript" src="<?php echo base_url() ?>assets/bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="<?php echo base_url() ?>assets/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
<script type="text/javascript" src="<?php echo base_url() ?>assets/plugins/dataTables/dataTables.min.js"></script>

<!-- Datatable CSS -->
<link href='//cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css' rel='stylesheet' type='text/css'>
<!-- Datatable JS -->
<script src="//cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>

<script type="text/javascript">
  $(function(){

  });
</script>

<script type="text/javascript">
  function tambahrumah() {
    var form_data = new FormData();
        var length1 = $("#foto1").get(0).files.length;
        var length2 = $("#foto2").get(0).files.length;
        var length3 = $("#foto3").get(0).files.length;
        var lengthAll = length1 + length2 + length3;

        if ($('#kamar_mandi').is(":checked")) {
          form_data.append("kamar_mandi", "TRUE");
        } else {
          form_data.append("kamar_mandi", "FALSE");
        }
        if ($('#kasur').is(":checked")) {
          form_data.append("kasur", "TRUE");
        } else {
          form_data.append("kasur", "FALSE");
        }
        if ($('#lemari').is(":checked")) {
          form_data.append("lemari", "TRUE");
        } else {
          form_data.append("lemari", "FALSE");
        }
        if ($('#meja').is(":checked")) {
          form_data.append("meja", "TRUE");
        } else {
          form_data.append("meja", "FALSE");
        }
        if ($('#ac').is(":checked")) {
          form_data.append("ac", "TRUE");
        } else {
          form_data.append("ac", "FALSE");
        }
        /* $(function(){
          $('#fasilitas').click(function(){
            var val = [];
            $(':checkbox:checked').each(function(i){
              val[i] = $(this).val();
            });
          });
        }); */
        /* var arr = $('input[name="fasilitas"]:checked').map(function () { return this.value; }).get();
          console.log(arr); */
          /* var myCheckboxes = new Array();
              $('input[name="fasilitas[]"]').each(function() {
                data['fasilitas[]'].push($(this).val());
              }); */
        var nama_rumah       = $("#nama_rumah").val();
        var biaya            = $("#inputAngka").val();
        var alamat_rumah     = $("#alamat_rumah").val();
        var luas_rumah       = $("#luas_rumah").val();
        /* var fasilitas       = $("#fasilitas").val(); */

        form_data.append("nama_rumah", nama_rumah);
        form_data.append("biaya", biaya);
        form_data.append("alamat_rumah", alamat_rumah);
        form_data.append("luas_rumah", luas_rumah);
        form_data.append("jumlah_foto", lengthAll);

        if (lengthAll == 0) {
          alert("Gambar kosong");
        } else {
          // gambar > 1
          for (let i = 1; i < 4; i++) {
            var id    = "#foto"+i;
            var file  = "file"+i;
            var length = $(id).get(0).files.length;
            if (length != 0) {
              form_data.append(file, $(id)[0].files[0]);
            }
          }
          
         /*  for (var value of form_data.values()) {
            console.log(value);
            
          } */

          $.ajax({
            type: "POST",
            url: "<?php echo base_url(); ?>rumah/tambah_rumah1",
            contentType: false,
            processData: false,
            dataType: "TEXT",
            data: form_data,
            success: function(response) {
              if (jQuery.trim(response) === "Berhasil") {
                        alert("Data Berhasil Ditambah!!!");
                        location.reload();
                    } else {
                        alert("Data Gagal Ditambah!!!");
                    }
            },
            error: function(response) {
              var msg = "Server Fault Error Code ( " + response.status + " ) ";
              alert(msg);
            }
          });
        }
  }
</script>

<!-- Ini view footer-->
<script>
  $(function () {
    if ($("#divTest").length > 0) {
      showData("ASC");
    }

    $("#sortir").on("change", function (e) {
    	e.preventDefault();
    	showData($(this).val());
    });
  })
</script>

<script>
  function showData(param) {
    $.ajax({
    	type: "POST",
    	url: "<?php echo base_url(); ?>rumah/getData",
    	dataType: "JSON",
    	data: {
    		sortir: param
    	},
    	success: function (response) {
    		$("#divTest").empty();
    		$.each(response, function (AvIndex, AvValue) {
    			var id = AvValue.id;
          var nama = AvValue.nama;
          var alamat = AvValue.alamat;
          var biaya = AvValue.biaya;               
          var foto1 = AvValue.foto1;
          var url = "<?php echo base_url().'/foto/' ?>";

    			$("#divTest").append(
    				"<div class='card col-lg-4 mb-3'>" +
    /*<img src="<php echo base_url().'/foto/'.$rm->foto1 ?>" width="100" height="100" class="card-img-top " alt="..."> */
            "<img src='" + url + foto1 + "'" + "width='100' height='100' class='card-img-top'>" +
              "<div class='card-body'>" +
              "<h5 class='card-title mb-1'>"+
               nama + "</h5>" +
              "<small>"+ alamat +"</small><br>" +
              "<span class='badge bg-info text-dark mb-3'>" +
              "Rp" + biaya + "</span>" + 
              "<a class='btn btn-sm btn-primary mt-3' href="+"'pesan/"+ id + "'"+ ">Pesan Sekarang</a>" +
              "<a class='btn btn-sm btn-success mt-3' href="+"'detail/"+ id + "'"+ ">Detail</a>" +
    				"</div>"
    			);
    		});
    	},
    	error: function (response) {
    		msg = "Server Fault Error Code ( " + response.status + " ) ";
    		toastr.error(msg);
    	}
    });
    }
</script>

<!-- <script>
  function memberTables(){
  $(document).ready(function() {

            var dataTable = $('#table-member').dataTable({
                /*"columnDefs": [
                    {
                        "targets": [ 4 ],
                        "visible": false
                    }
                ],*/
                "paging" : true,
                "lengthChange" : true,
                "searching" : true,
                "ordering" : true,
                "bProcessing" : true,
                //"serverSide" : true,
                "serverMethod" : 'post',
                "bDestroy": true,
                "bAutoWidth": true,
                "sPaginationType": "full_numbers",
                "dom": 'lBfrtip',
                "buttons": [
                    'copy', 'csv', 'excel', 'pdf', 'print'
                ],
                "ajax" : {
                    url: "<?php echo base_url(); ?>/rumah/getDataMember",
                    dataSrc: "",
                   /*  data:{
                        period  : param,
                        start   : startDate,
                        finish  : finishDate,
                        loc     : location
                    } */
                },
                /* "columns": [
                    {
                        "data": "barcode",
                        "className": "text-center"
                    },
                    { 
                        "data": "type",
                        "className": "text-center"
                    },
                    { 
                        "data": "colour",
                        "className": "text-center"
                    },
                    { 
                        "data": "stock",
                        "className": "text-center",
                        /* "render": function ( data, type, row ) {
                            var pembanding = row.pembanding;
                            var stock = row.stock;
                            if(pembanding == 1){
                                return stock;
                            }else {
                                return "Out of Stock"; }
                        }
                    },
                ]*/
                "order": [
                    [3, "asc"]
                ],
            });
        });
  }
</script> -->

<!-- tabel data member -->
<script type="text/javascript">
    $(document).ready(function(){
        tampil_data_member();   //pemanggilan fungsi tampil.
         
        $('#tableMember').dataTable();
          
        //fungsi tampil 
        function tampil_data_member(){
            $.ajax({
                type  : 'ajax',
                url   : '<?php echo base_url(); ?>rumah/getDataMember',
                async : false,
                dataType : 'json',
                success : function(data){
                    var html = '';
                    var i;
                    for(i=0; i<data.length; i++){
                        html += '<tr>'+
                                '<td>'+data[i].nama_l+'</td>'+
                                '<td>'+data[i].username+'</td>'+
                                '<td>'+data[i].alamat_user+'</td>'+
                                '<td>'+data[i].no_telp+'</td>'+
                                '<td>'+data[i].role_l+'</td>'+
                                '</tr>';
                    }
                    $('#show_data').html(html);
                }
 
            });
        }
 
    });
 
</script>

<!-- <script type="text/javascript">
     $(document).ready(function(){
        $('#tableMember').DataTable({
          'processing': true,
          'serverSide': true,
          'serverMethod': 'post',
          'ajax': {
             'url':'<?=base_url()?>rumah/getDataMember'
          },
          'columns': [
             { data: 'nama_l' },
             { data: 'username' },
             { data: 'alamat_user' },
             { data: 'no_telp' },
             { data: 'role_l' },
          ]
        });
     });
     </script> -->

     <!-- tabel data rumah -->
<script type="text/javascript">
    $(document).ready(function(){
        tampil_data_rumah();   //pemanggilan fungsi tampil.
         
        $('#tableRumah').dataTable();
          
        //fungsi tampil 
        function tampil_data_rumah(){
            $.ajax({
                type  : 'ajax',
                url   : '<?php echo base_url(); ?>rumah/getDataRumah',
                async : false,
                dataType : 'json',
                success : function(data){
                    
                    var html = '';
                    var i;
                    for(i=0; i<data.length; i++){
                        html += '<tr>'+
                                '<td>'+data[i].nama+'</td>'+
                                '<td>'+data[i].biaya+'</td>'+
                                '<td>'+data[i].alamat+'</td>'+
                                '<td>'+data[i].luas+'</td>'+
                                /* '<td>'+ data[i].kamar_mandi + ', ' + '</td>'+ */
                                '<td>' + '<a class="btn btn-sm btn-success" href="detail/' + data[i].id + '">Detail</a>' + '</td>'
                                 +
                                '</tr>';
                    }
                    $('#show_data_r').html(html);
                }
 
            });
        }
 
    });
 
</script>