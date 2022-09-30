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
<!-- <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/plugins/dataTables/css/jquery.dataTables.min.css'"> -->
<script type="text/javascript" src="<?php echo base_url() ?>assets/bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="<?php echo base_url() ?>assets/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
<script type="text/javascript" src="<?php echo base_url() ?>assets/plugins/dataTables/dataTables.min.js"></script>

<!-- Datatable CSS -->
<!-- <link href='//cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css' rel='stylesheet' type='text/css'> -->
<!-- Datatable JS -->
<!-- <script src="//cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script> -->

<!-- leaflet -->
<!-- <link rel="stylesheet" href="https://unpkg.com/leaflet@1.8.0/dist/leaflet.css" integrity="sha512-hoalWLoI8r4UszCkZ5kL8vayOGVae1oxXe/2A4AO6J9+580uKHDO3JdHb7NzwwzK5xr/Fs0W40kiNHxM9vyTtQ==" crossorigin="" />
<script src="https://unpkg.com/leaflet@1.8.0/dist/leaflet.js" integrity="sha512-BB3hKbKWOc9Ez/TAwyWxNXeoV9c1v6FIeYiBieIWkpLjauysF18NzgR1MBNBXf8/KABdlkX68nAhlwcDFLGPCQ==" crossorigin=""></script> -->

<script type="text/javascript">
  $(function(){
// ini.. jd biar gk bnyak script lu nya.. sama bedain ya mana yg lu mau jalanin langsung sama yg bikin method function dlu di bawah baru dipanggil
// yg disini buat yg jalanin lgnsg
  });
</script>

<script type="text/javascript">

  /////////                     M A U T                     / /////////
  function searchByCriteria() {
    
    var biaya = ($("#biaya").val() - 1)/(5 - 1);
    var jarak = ($("#jarak").val() - 1)/(5 - 1);
    var luas = ($("#luas").val() - 1)/(5 - 1);
    var fasilitas = ($("#fasilitas").val() - 1)/(5 - 1);

    var nilai = {
            biaya:      roundNumber(biaya, 2),
            jarak:     roundNumber(jarak, 2),
            luas:      roundNumber(luas, 2),
            fasilitas:  roundNumber(fasilitas, 2)
    };
          console.log(nilai);
          bobotHitung(nilai);
          
  }
  function bobotHitung(kriteria) {
        var arrBobot = [];

        var bobot1 = (50 + 50 + 40 ) / 3; //46,67
        var bobot2 = (20 + 30 + 20 ) / 3; //23,33
        var bobot3 = (10 + 10 + 10 ) / 3; // 10
        var bobot4 = (20 + 10 + 30 ) / 3; //20

        var b1 = bobot1 / 100;
        var b2 = bobot2 / 100;
        var b3 = bobot3 / 100;
        var b4 = bobot4 / 100;

        var bobot = {
            w1: roundNumber(b1, 2),
            w2: roundNumber(b2, 2),
            w3: roundNumber(b3, 2),
            w4: roundNumber(b4, 2),
        }
        
        arrBobot.push(bobot);
        console.log(arrBobot);
        perkalian_matriks(arrBobot, kriteria);
    }

    function perkalian_matriks(bobot, kriteria) {
        var hasil = [];

        var matriks1 = bobot[0].w1 * kriteria.biaya;
        var matriks2 = bobot[0].w2 * kriteria.jarak;
        var matriks3 = bobot[0].w3 * kriteria.luas;
        var matriks4 = bobot[0].w4 * kriteria.fasilitas;

        var result = {
            m1: roundNumber(matriks1, 2),
            m2: roundNumber(matriks2, 2),
            m3: roundNumber(matriks3, 2),
            m4: roundNumber(matriks4, 2),
        }
        hasil.push(result);
        console.log(hasil);
        hasilMatriks(hasil);
    }

    function hasilMatriks(hasil) {
        var hasil_matriks = hasil[0].m1 + hasil[0].m2 + hasil[0].m3 + hasil[0].m4;
        var rounded_result = roundNumber(hasil_matriks, 2);
        console.log(rounded_result);

        kriteriaBiaya(rounded_result);
        
    }

    function kriteriaBiaya(maut_filter) {
     
      $.ajax({
        type: "POST",
            url: "<?php echo base_url() ?>rumah/crit_biaya",
            dataType: 'JSON', // datatype itu bsa pake json atau text
            /* data: {
                type: typeSrc
                tyg barusan gua block
            }, */
            
            success: function(response) {
                console.log(response);
                // for (var i = 0; i < response[0]."row_biaya"; index++) {
                //   var j = i+1;
                //   var biaya = response[j]."B1";
                //   console.log(biaya);
                //  
                // }
                // priceCriteria(matrix1, response);
                // console.log(c);
               
             
                kriteriaLuas(maut_filter, response);
                
            },
            error: function(response) {
                console.log(response);
                msg = "Server Fault Error Code ( " + response.status + " ) ";
                alert(msg);
            }
      });
    }

    function kriteriaLuas(maut_filter, biaya) {
      
      $.ajax({
        type: "POST",
            url: "<?php echo base_url() ?>rumah/crit_luas",
            dataType: 'JSON',
            success: function(response) {
                console.log(response);
                // priceCriteria(matrix1, response);
                // console.log(c);
                kriteriaFasilitas(maut_filter, biaya, response);
            },
            error: function(response) {
                console.log(response);
                msg = "Server Fault Error Code ( " + response.status + " ) ";
                alert(msg);
            }
      });
    }

    function kriteriaFasilitas(maut_filter, biaya, luas) {
      
      $.ajax({
        type: "POST",
            url: "<?php echo base_url() ?>rumah/crit_fasilitas",
            dataType: 'JSON',
            success: function(response) {
                console.log(response);
                // priceCriteria(matrix1, response);
                // console.log(c);
                kriteriaJarak(maut_filter, biaya, luas, response);
            },
            error: function(response) {
                console.log(response);
                msg = "Server Fault Error Code ( " + response.status + " ) ";
                alert(msg);
            }
      });
    }

    function kriteriaJarak(maut_filter, biaya, luas, fasilitas){
      var latitudeU = $("#latitudeU").val();
      var longitudeU = $("#longitudeU").val();
      $.ajax({
        type: "POST",
            url: "<?php echo base_url() ?>rumah/crit_jarak",
            dataType: 'JSON',
            // data: {
            //   latitudeU:latitudeU;
            // }
            success: function(response) {
              console.log(response);
              /* var arrResp = {};
              console.log(arrResp); */
                var arrRange = [];
                
                for (var i = 0; i < response[0][0]["row_biaya"]; i++) {
                  // var j = i+1;
                  // var biaya = response[j]."B1";
                  // console.log(biaya);
                  // var arrRange = [];
                  var range = calcCrow(latitudeU, longitudeU, response[1][i]["latitude"], response[1][i]["longitude"]).toFixed(1);
                  console.log("range: " + range);
                  if(range <= 1){
                    var B2 = 5;
                  }else if(range > 1 && range <= 2 ){
                    B2 = 4;
                  }else if(range > 2 && range <= 3){
                    B2 = 3;
                  }else if(range > 3 && range <= 4){
                    B2 = 2;
                  }else{
                    B2 = 1;
                  }
                  console.log(range)
                  console.log(B2);
                  arrRange.push(B2);
                }
                console.log(arrRange);
                normalKriteriaR(maut_filter, biaya, luas, fasilitas, arrRange, response);
            },
            error: function(response) {
                console.log(response);
                msg = "Server Fault Error Code ( " + response.status + " ) ";
                alert(msg);
            }
      });
    }
    function normalKriteriaR(maut_filter, biaya, luas, fasilitas, jarak, rumah){
      // console.log(rumah);
      // var arrBiaya = [biaya[1].B1, biaya[2].B1, biaya[3].B1];
      var arrBiaya = "";
      var arrBiaya1 = [];
      for(i = 1; i<biaya.length;i++){
        arrBiaya = biaya[i].B1;
        arrBiaya1.push(arrBiaya);
      }
      
      //luas
      var arrLuas = "";
      var arrLuas1 = [];
      for(i = 1; i<luas.length;i++){
        arrLuas = luas[i].B3;
        arrLuas1.push(arrLuas);
      }
      //fasilitas
      var arrFasilitas = "";
      var arrFasilitas1 = [];
      for(i = 1; i<fasilitas.length;i++){
        arrFasilitas = fasilitas[i].B4;
        arrFasilitas1.push(arrFasilitas);
      }

      // console.log(arrFasilitas1);
      // console.log(Math.max(...arrFasilitas1));

      //NORMALISASI KRITERIA
      var normalBiaya = [];
      var normalJarak = [];
      var normalLuas = [];
      var normalFasilitas = [];
      var j = 0;
      console.log('JARAK = ' + jarak);
      for(i = 0; i < arrBiaya1.length;i++){
          var biaya1       = (arrBiaya1[i] - Math.min(...arrBiaya1))/(Math.max(...arrBiaya1) - Math.min(...arrBiaya1));
          var jarak1       = (jarak[i] - 1)/(5 - 1);
          var luas1       = (arrLuas1[i] - Math.min(...arrLuas1))/(Math.max(...arrLuas1) - Math.min(...arrLuas1));
          var fasilitas1  = (arrFasilitas1[i] - Math.min(...arrFasilitas1))/(Math.max(...arrFasilitas1) - Math.min(...arrFasilitas1));
          normalBiaya.push(biaya1);
          normalJarak.push(jarak1);
          normalLuas.push(luas1);
          normalFasilitas.push(fasilitas1);
          /* j++; */
      }
      console.log("NORMAL JARAK = " + normalJarak);
      hasilNormal = [];
      for(i=0;i<normalJarak.length;i++){
          var bulatB = normalBiaya[i];
          var bulatJ = normalJarak[i];
          var bulatL = normalLuas[i];
          var bulatF = normalFasilitas[i];
          var nilai = {
            biaya:      roundNumber(bulatB, 2),
            jarak:      roundNumber(bulatJ, 2),
            luas:       roundNumber(bulatL, 2),
            fasilitas:  roundNumber(bulatF, 2)
            };
            hasilNormal.push(nilai);
      }
            console.log(hasilNormal);
            bobotKriteriaR(maut_filter, hasilNormal, rumah);
      // matriksKriteriaR(maut_filter, Biaya, normalJarak, normalLuas, normalFasilitas);
    }
    function bobotKriteriaR(/* bobot, */ maut_filter, hasilNormal, rumah){
      // console.log(hasilNormal);

      var arrBobotR = [];

        var bobot1 = (50 + 50 + 40 ) / 3; //46,67
        var bobot2 = (20 + 30 + 20 ) / 3; //23,33
        var bobot3 = (10 + 10 + 10 ) / 3; // 10
        var bobot4 = (20 + 10 + 30 ) / 3; //20

        var b1 = bobot1 / 100;
        var b2 = bobot2 / 100;
        var b3 = bobot3 / 100;
        var b4 = bobot4 / 100;

        var bobot = {
            w1: roundNumber(b1, 2),
            w2: roundNumber(b2, 2),
            w3: roundNumber(b3, 2),
            w4: roundNumber(b4, 2),
        }
        
        arrBobotR.push(bobot);
        matriksKriteriaR(maut_filter, arrBobotR, hasilNormal, rumah);
        // console.log(arrBobotR);
    }
    function matriksKriteriaR(maut_filter, arrBobotR, hasilNormal, rumah){
      console.log(arrBobotR);
      var hasilR = [];

        for(var i = 0;i < hasilNormal.length; i++){
              
              var matriks1 = arrBobotR[0].w1 * hasilNormal[i].biaya;
              var matriks2 = arrBobotR[0].w2 * hasilNormal[i].jarak;
              var matriks3 = arrBobotR[0].w3 * hasilNormal[i].luas;
              var matriks4 = arrBobotR[0].w4 * hasilNormal[i].fasilitas;

              var result = {
                  m1: roundNumber(matriks1, 2),
                  m2: roundNumber(matriks2, 2),
                  m3: roundNumber(matriks3, 2),
                  m4: roundNumber(matriks4, 2),
              }
              hasilR.push(result);
      }
      // hasilR.push(result);
        console.log(hasilR);
        hasilAkhirR(maut_filter, hasilR, rumah);
    }

    function hasilAkhirR(maut_filter, hasilR, rumah){
      console.log("filter: "+maut_filter);
      console.log(rumah);
      var arrHasilAkhir = [];
      for(var i = 0;i < hasilR.length; i++){
        var id = rumah[1][i].id;
        var hasilAkhir = hasilR[i].m1 + hasilR[i].m2 + hasilR[i].m3 + hasilR[i].m4;
        var hasil_bulat = roundNumber(hasilAkhir, 2);
        console.log("db: "+hasil_bulat);
        console.log("id: "+id);
        if(hasil_bulat >= maut_filter){
          var akhir = {
            id: id,
            rumah: hasil_bulat
          }
          // console.log(akhir);
          arrHasilAkhir.push(akhir);
        
        }
       
      }
      console.log("rumah :"+ arrHasilAkhir);
      if(arrHasilAkhir.length == 1){
        var rekomendasi;
        rekomendasi = "'" + arrHasilAkhir[0].id + "'";
      }else{
        var arrRekomen = [];
        for(var i = 0;i < arrHasilAkhir.length; i++){
          var R = arrHasilAkhir[i].id;
          arrRekomen.push(R);
        }
        var rekomendasi = arrRekomen.join();
      }
      console.log(rekomendasi);
      tampilData(arrHasilAkhir, rumah, rekomendasi); 
  }

  function tampilData(hasilAkhir, rumah, rekomendasi){
    
    // var id = hasilAkhir[0].id;
    var id = rekomendasi;
    console.log(id);
    $.ajax({
    	type: "POST",
    	url: "<?php echo base_url(); ?>rumah/getMaut",
    	dataType: "JSON",
    	data: {
    		id: id
    	},
    	success: function (response){
        // console.log(response);
        if(response.length >0){
          // $("#exampleModal").modal("hide");
          $("#bodyMaut").empty();
          $("#mautModal").modal("show");
          $("#bodyMaut").append(
           /*  "<table class='table'>" + 
                "<tr>" +
                  "<th>"+"Nama" + "</th>" +
                  "<th>"+"Biaya" + "</th>" +
                  "<th>"+"Alamat" + "</th>" +
                  "<th>"+"Foto" + "</th>" +
                  "<th>"+"Aksi" + "</th>" +
                "</tr>" +               
              "</table>" */
          );
        $.each(response, function (AvIndex, AvValue) {
    			var id = AvValue.id;
          console.log(AvValue);
          var nama = AvValue.nama;
          var alamat = AvValue.alamat;
          var biaya = AvValue.biaya; 
          var biaya1 = number_format(biaya,0,',',',','.');               
          var foto1 = AvValue.foto1;
          var lat = AvValue.latitude;
          var lng = AvValue.longitude;
          var url = "<?php echo base_url().'/foto/' ?>";
          $("#bodyMaut").append(
            "<div class='container-fluid'>" +
            "<div class='card col-lg-3 mb-3'>" +
            "<img src='" + url + foto1 + "'" + "width='100' height='100' class='card-img-top'>" +
              "<div class='card-body mb-3'>" +
              "<h5 class='card-title mb-3'>"+
               nama + "</h5>" +
              "<small>"+ alamat +"</small><br>" +
              "<span class='badge bg-info text-dark mb-3'>" +
              "Rp" + biaya1 + "</span>" + "<br>" +
              "<a class='btn btn-sm btn-primary mt-3' href="+"'pesan/"+ id + "'"+ ">Pesan Sekarang</a>" +
              "<a class='btn btn-sm btn-success mt-3' href="+"'detail/"+ id + "'"+ ">Detail</a>" +
    				"</div>" +
            "</div>" 
              /* "<table class='table'>" + 
                "<tr>" +
                  "<td>"+nama + "</td>" +
                  "<td>"+biaya + "</td>" +
                  "<td>"+alamat + "</td>" +
                  "<td>"+"<img src='" + url + foto1 + "'" + "width='100' height='100' class='card-img-top'>" + + "</td>" +
                  "<td>"+"Aksi" + "</td>" +
                "</tr>" +               
              "</table>" */
            );
        });
        };
      },
      error: function (response) {
    		msg = "Server Fault Error Code ( " + response.status + " ) ";
    		alert(msg);
    	}
    });
  }
    //hitung jarak

  function calcCrow(lat1, lon1, lat2, lon2){
    var R = 6371 //
    var dLat = toRad(lat2 - lat1);
    var dLon = toRad(lon2 - lon1);
    var lat1 = toRad(lat1);
    var lat2 = toRad(lat2);

    var a = Math.sin(dLat / 2) * Math.sin(dLat /2) +
      Math.sin(dLon/2) * Math.sin(dLon/2) * Math.cos(lat1) * Math.cos(lat2);
    var c = 2 * Math.atan2(Math.sqrt(a), Math.sqrt(1 - a));
    var d = R * c;
    return d;
    console.log(d);
  }

  //konvert numeric degrees to radians
  function toRad(Value){
    return Value * Math.PI / 180;
  }

//buletin angka
  function roundNumber(num, scale) {
        if (!("" + num).includes("e")) {
            return +(Math.round(num + "e+" + scale) + "e-" + scale);
        } else {
            var arr = ("" + num).split("e");
            var sig = ""
            if (+arr[1] + scale > 0) {
                sig = "+";
            }
            return +(Math.round(+arr[0] + "e" + sig + (+arr[1] + scale)) + "e-" + scale);
        }
    }

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
        var nama_rumah       = $("#nama_rumah").val();
        var biaya            = $("#inputAngka").val();
        var alamat_rumah     = $("#alamat_rumah").val();
        var luas_rumah       = $("#luas_rumah").val();
        var latitude         = $("#latitude").val();
        var longitude        = $("#longitude").val();
        /* var fasilitas       = $("#fasilitas").val(); */

        form_data.append("nama_rumah", nama_rumah);
        form_data.append("biaya", biaya);
        form_data.append("alamat_rumah", alamat_rumah);
        form_data.append("luas_rumah", luas_rumah);
        form_data.append("jumlah_foto", lengthAll);
        form_data.append("latitude", latitude);
        form_data.append("longitude", longitude);
        
        if (lengthAll == 0 || form_data =="") {
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
                        // location.reload();
                        location.replace("<?php echo base_url(); ?>rumah/rumah");
                    } else {
                        alert("Data Gagal Ditambah! Mohon cek kolom wajib diisi");
                    }
            },
            error: function(response) {
              var msg = "Server Fault Error Code ( " + response.status + " ) ";
              alert(msg);
            }
          });
        }
  }
  
  //coba

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
        console.log(response);
        /* var i = getAvgRat(response[2].id); */
        // console.log(i);
    		$("#divTest").empty();
    		$.each(response, function (AvIndex, AvValue) {
          // console.log("data: "+AvValue.status);
          
          var status = AvValue.status;
          var verifikasi = AvValue.verifikasi;
          if(status == "tersedia" && verifikasi == "TRUE"){
    			var id = AvValue.id;
          var nama = AvValue.nama;
          var alamat = AvValue.alamat;
          var biaya = AvValue.biaya;  
          var biaya1 = number_format(biaya,0,',',',','.');             
          var foto1 = AvValue.foto1;
          var url = "<?php echo base_url().'foto/' ?>";
          var i = getAvgRat(AvValue.id);
                console.log(i);

          // if()
    			$("#divTest").append(
    				"<div class='card col-lg-4 mb-3'>" +
    /*<img src="<php echo base_url().'/foto/'.$rm->foto1 ?>" width="100" height="100" class="card-img-top " alt="..."> */
            "<img src='" + url + foto1 + "'" + "width='100' height='100' class='card-img-top'>" +
              "<div class='card-body'>" +
              "<h5 class='card-title mb-1'>"+
               nama + "</h5>" +
              "<small>"+ alamat +"</small><br>" +
              /* "<span class='badge bg-white text-dark mb-3'>" +
               i + "</span>" +  */
              "<span class='badge bg-info text-dark mb-3'>" +
              "Rp" + biaya1 + "</span>" + "<br>" +
              "<a class='btn btn-sm btn-primary mt-3' href="+"'pesan/"+ id + "'"+ ">Pesan Sekarang</a>" +
              "<a class='btn btn-sm btn-success mt-3' href="+"'detail/"+ id + "'"+ ">Detail</a>" +
    				"</div>"
    			);
    		}});
    	},
    	error: function (response) {
    		msg = "Server Fault Error Code ( " + response.status + " ) ";
    		alert(msg);
    	}
    });
    }
    //avg coba
    function getAvgRat(id){
    $.ajax({
          type: "POST",
          url: "<?php echo base_url(); ?>rumah/selectAvgR",
          dataType: "JSON",
          data: {
            id: id
          },
          success: function (response) {
            console.log(response);
            return response;
          }
        });
      }
    //number_format
    function number_format (number, decimals, dec_point, thousands_sep) {
    // Strip all characters but numerical ones.
    number = (number + '').replace(/[^0-9+\-Ee.]/g, '');
    var n = !isFinite(+number) ? 0 : +number,
        prec = !isFinite(+decimals) ? 0 : Math.abs(decimals),
        sep = (typeof thousands_sep === 'undefined') ? ',' : thousands_sep,
        dec = (typeof dec_point === 'undefined') ? '.' : dec_point,
        s = '',
        toFixedFix = function (n, prec) {
            var k = Math.pow(10, prec);
            return '' + Math.round(n * k) / k;
        };
    // Fix for IE parseFloat(0.55).toFixed(0) = 0;
    s = (prec ? toFixedFix(n, prec) : '' + Math.round(n)).split('.');
    if (s[0].length > 3) {
        s[0] = s[0].replace(/\B(?=(?:\d{3})+(?!\d))/g, sep);
    }
    if ((s[1] || '').length < prec) {
        s[1] = s[1] || '';
        s[1] += new Array(prec - s[1].length + 1).join('0');
    }
    return s.join(dec);
  }
</script>

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

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css" />
<script type="text/javascript">

//// js tambah pesan
 $(document).ready(function() {
     $(".btn-submit").click(function(e){
      e.preventDefault();
      /* var nama = $("#nama").val(); */
      var id_rumah = $("#id_rumah").val();
      var id_user = $("#id_user").val();
      var tgl_mulai = $("#tgl_mulai").val();
      var durasi = $("#durasi").val();
      console.log(tgl_mulai);
      if(tgl_mulai=="" || durasi == ""){
        alert("pastikan semua kolom terisi")
      }else{
         $.ajax({
             type:"POST",
             url: "<?php echo base_url(); ?>rumah/tambah_pesan",
             dataType: "TEXT",
             data: {
                    id_rumah:id_rumah, 
                    id_user:id_user, 
                    tgl_mulai:tgl_mulai, 
                    durasi:durasi 
                  },
             success: function(data) {
                 if($.isEmptyObject(data.error)){
                  $(".print-error-msg").css('display','none');
                  alert("BERHASIL");
                  location.replace("<?php echo base_url(); ?>rumah/tampil_konfirmasi");
                 }else{
                  $(".print-error-msg").css('display','block');
                  $(".print-error-msg").html(data.error);
                 }
             }
         })};
     }); 
 });


</script>

<!-- coba button -->
<script>
    var hidden = true;
    function action() {
      
        hidden = !hidden;
        
        if(hidden) {
            document.getElementById('foto1').style.visibility = 'hidden';
            /* document.getElementById('foto1').style.visibility = 'visible'; */
        } else {
            document.getElementById('foto1').style.visibility = 'visible';
           /*  document.getElementById('foto1').style.visibility = 'hidden'; */
        }
    }
</script>
<!-- <script src="https://code.jquery.com/jquery-3.5.0.js"></script> -->


<script>
  //button foto1
  // showData($(this).val());
  var edit1 ="";
  var edit2 = "";
  var edit3 = "";
  $(document).ready(function(){
    $('.btn-ubah1').on('click',function(){
        edit1 = "TRUE";
        $( "#ubah1" ).hide();
        $("#foto1").show();
        $(".btn-ubah1").hide();
        $(".btn-batal1").show();
        /* updaterumah(ubah1); */
        /* console.log(edit1); */
        getEdit(edit1);
        // updaterumah($(this).val());
    });
    $('.btn-batal1').on('click',function(){
        edit1 = "FALSE";
        $( "#ubah1" ).show();
        $("#foto1").hide();
        $(".btn-ubah1").show();
        $(".btn-batal1").hide();
        /* updaterumah(ubah1); */
        /* console.log(edit1); */
        getEdit(edit1);
        // updaterumah($(this).val());
    });
    //btn 2
    $('.btn-ubah2').on('click',function(){
        edit2 = "TRUE";
        $( "#ubah2" ).hide();
        $("#foto2").show();
        $(".btn-ubah2").hide();
        $(".btn-batal2").show();
        /* updaterumah(ubah1); */
        /* console.log(edit1); */
        getEdit2(edit2);
        // updaterumah($(this).val());
    });
    $('.btn-batal2').on('click',function(){
        edit2 = "FALSE";
        $( "#ubah2" ).show();
        $("#foto2").hide();
        $(".btn-ubah2").show();
        $(".btn-batal2").hide();
        /* updaterumah(ubah1); */
        /* console.log(edit1); */
        getEdit2(edit2);
        // updaterumah($(this).val());
    });
    //btn 3
    $('.btn-ubah3').on('click',function(){
        edit3 = "TRUE";
        $( "#ubah3" ).hide();
        $("#foto3").show();
        $(".btn-ubah3").hide();
        $(".btn-batal3").show();
        /* updaterumah(ubah1); */
        /* console.log(edit1); */
        getEdit3(edit3);
        // updaterumah($(this).val());
    });
    $('.btn-batal3').on('click',function(){
        edit3 = "FALSE";
        $( "#ubah3" ).show();
        $("#foto3").hide();
        $(".btn-ubah3").show();
        $(".btn-batal3").hide();
        /* updaterumah(ubah1); */
        /* console.log(edit1); */
        getEdit3(edit3);
        // updaterumah($(this).val());
    });
});
  
  /* var ubah1 = "FALSE"; */
  // $( ".btn-uba1" ).click(function() {
  //   var ubah1 = "TRUE";
  //   $( "#ubah1" ).hide();
  //   $("#foto1").show();
  //   $(".btn-ubah1").hide();
  //   $(".btn-batal1").show();
    
  //   }
  // );
  // $( ".btn-batal1" ).click(function() {
  //   var ubah1 = "FALSE";
  //   $( "#ubah1" ).show();
  //   $("#foto1").hide();
  //   $(".btn-ubah1").show();
  //   $(".btn-batal1").hide();
    
  //   }
  // );
  // console.log(ubah1);
  //button foto2
  // $( ".btn-ubah2" ).click(function() {
  //   $( "#ubah2" ).hide();
  //   $("#foto2").show();
  //   $(".btn-ubah2").hide();
  //   $(".btn-batal2").show();
  //   var edit2 = "TRUE";
  //   console.log(edit2);
  //   }
  // );
  // $( ".btn-batal2" ).click(function() {
  //   $( "#ubah2" ).show();
  //   $("#foto2").hide();
  //   $(".btn-ubah2").show();
  //   $(".btn-batal2").hide();
  //   edit2 = "FALSE";
  //   console.log(edit2); 
  //   }
  // );
  

  //button foto3
  // $( ".btn-ubah3" ).click(function() {
  //   $( "#ubah3" ).hide();
  //   $("#foto3").show();
  //   $(".btn-ubah3").hide();
  //   $(".btn-batal3").show();
  //   }
  // );
  // $( ".btn-batal3" ).click(function() {
  //   $( "#ubah3" ).show();
  //   $("#foto3").hide();
  //   $(".btn-ubah3").show();
  //   $(".btn-batal3").hide();
  //   }
  // );

  ///gagal
 /*  $(function () {
    if ($("#ubah1").length == 0) {
      var edit1 = "FALSE";
      updaterumah(edit1);
    }

    $(".btn-ubah1").on("click", function (e) {
    	e.preventDefault();
      $( "#ubah1" ).hide();
      $("#foto1").show();
      $(".btn-ubah1").hide();
      $(".btn-batal1").show();
      edit1 = "TRUE";
    	updaterumah(edit1);
    });
  }) */

  </script>


  <script>
    function getEdit(edit1){
      if(edit1 == "TRUE"){
      alert("Silahkan upload gambar 1");
    }else{
      alert("Tidak mengubah gambar 1");
    }
  }
  function getEdit2(edit2){
    if(edit2 == "TRUE"){
      alert("Silahkan upload gambar 2");
    }else{
      alert("Tidak mengubah gambar 2");
    }
  }
  function getEdit3(edit3){
    if(edit3 == "TRUE"){
      alert("Silahkan upload gambar 3");
    }else{
      alert("Tidak mengubah gambar 3");
    }
  }

    
/////////////////////////COBA EDIT 1-3 FOTO??????????????????????????????
  function updaterumah() {
    /* console.log(edit1);
    if(edit1 == "TRUE"){
      alert("Silahkan upload gambar");
    }else{
      alert("Tidak mengubah gambar");
    } */
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
        var id               = $("#id").val();
        var nama             = $("#nama").val();
        var biaya            = $("#biaya").val();
        var alamat           = $("#alamat").val();
        var luas              = $("#luas").val();
        var latitude         = $("#latitude").val();
        var longitude        = $("#longitude").val();
        /* var fasilitas       = $("#fasilitas").val(); */

        form_data.append("id", id);
        form_data.append("nama", nama);
        form_data.append("biaya", biaya);
        form_data.append("alamat", alamat);
        form_data.append("luas", luas);
        form_data.append("jumlah_foto", lengthAll);
        form_data.append("latitude", latitude);
        form_data.append("longitude", longitude);
        
        /* if (lengthAll == 0) {
          alert("Gambar kosong");
        } else { */
          // gambar > 1
          for (let i = 1; i < 4; i++) {
            var id    = "#foto"+i;
            var file  = "file"+i;
            var length = $(id).get(0).files.length;
            if (length != 0) {
              form_data.append(file, $(id)[0].files[0]);
            }
          }
         
          $.ajax({
            type: "POST",
            url: "<?php echo base_url(); ?>rumah/update",
            contentType: false,
            processData: false,
            dataType: "TEXT",
            data: form_data,
            success: function(response) {
              if (jQuery.trim(response) === "Berhasil") {
                        alert("Data Berhasil Diubah!!!");
                        // location.reload();
                        location.replace("<?php echo base_url(); ?>rumah/rumah");
                    } else {
                        alert("Data Gagal Diubah! Mohon cek kolom wajib diisi");
                    }
            },
            error: function(response) {
              var msg = "Server Fault Error Code ( " + response.status + " ) ";
              alert(msg);
            }
          });
        // }
  }

</script>


<!-- <script type="text/javascript">
   ///js coba update
 $(document).ready(function() {
     $(".btn-update").click(function(e){
      e.preventDefault();
      /* var form_data = new FormData(); */
      if ($('#kamar_mandi').is(":checked")) {
          var kamar_mandi = "TRUE";
        } else {
          var kamar_mandi = "FALSE";
        }
        if ($('#kasur').is(":checked")) {
          var kasur = "TRUE";
        } else {
          var kasur = "FALSE";
        }
        if ($('#lemari').is(":checked")) {
          var lemari = "TRUE";
        } else {
          var lemari = "FALSE";
        }
        if ($('#meja').is(":checked")) {
          var meja = "TRUE";
        } else {
          var meja = "FALSE";
        }
        if ($('#ac').is(":checked")) {
          var ac ="TRUE";
        } else {
          var ac ="FALSE";
        }
        var id        =$("#id").val();
        var nama       = $("#nama").val();
        var biaya            = $("#biaya").val();
        var alamat     = $("#alamat").val();
        var luas       = $("#luas").val();
        var latitude         = $("#latitude").val();
        var longitude        = $("#longitude").val();

        /* var fasilitas       = $("#fasilitas").val(); */

        /* form_data.append("nama_rumah", nama_rumah);
        form_data.append("biaya", biaya);
        form_data.append("alamat_rumah", alamat_rumah);
        form_data.append("luas_rumah", luas_rumah); */

      /* var nama = $("#nama").val();
      var id_rumah = $("#id_rumah").val();
      var id_user = $("#id_user").val();
      var tgl_mulai = $("#tgl_mulai").val();
      var durasi = $("#durasi").val(); */
        // console.log(form_data.values);
      if(nama =="" || biaya == ""){
        
        alert("Pastikan semua kolom terisi")
        
      }else{
         $.ajax({
             type:"POST",
             url: "<?php echo base_url(); ?>rumah/update",
             dataType: "TEXT",
             data: {
                    id:id,
                    nama:nama, 
                    biaya:biaya, 
                    alamat:alamat, 
                    luas:luas,
                    kamar_mandi:kamar_mandi,
                    kasur:kasur,
                    lemari:lemari,
                    meja:meja,
                    ac:ac,
                    latitude:latitude,
                    longitude:longitude
                  },
             success: function(data) {
                 if($.isEmptyObject(data.error)){
                  $(".print-error-msg").css('display','none');
                  alert("BERHASIL");
                  location.replace("<?php echo base_url(); ?>rumah/rumah");
                 }else{
                  $(".print-error-msg").css('display','block');
                  $(".print-error-msg").html(data.error);
                 }
             }
         })};
     }); 
 });
</script> -->
<!-- leaflet MAP PENCARI -->
<script>
 var peta1 = L.tileLayer('https://api.mapbox.com/styles/v1/{id}/tiles/{z}/{x}/{y}?access_token=pk.eyJ1IjoibWFwYm94IiwiYSI6ImNpejY4NXVycTA2emYycXBndHRqcmZ3N3gifQ.rJcFIG214AriISLbB6B5aw', {
		attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/">OpenStreetMap</a> contributors, ' +
			'<a href="https://creativecommons.org/licenses/by-sa/2.0/">CC-BY-SA</a>, ' +
			'Imagery © <a href="https://www.mapbox.com/">Mapbox</a>',
		id: 'mapbox/streets-v11'
	});

var peta2 = L.tileLayer('https://api.mapbox.com/styles/v1/{id}/tiles/{z}/{x}/{y}?access_token=pk.eyJ1IjoibWFwYm94IiwiYSI6ImNpejY4NXVycTA2emYycXBndHRqcmZ3N3gifQ.rJcFIG214AriISLbB6B5aw', {
		attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/">OpenStreetMap</a> contributors, ' +
			'<a href="https://creativecommons.org/licenses/by-sa/2.0/">CC-BY-SA</a>, ' +
			'Imagery © <a href="https://www.mapbox.com/">Mapbox</a>',
		id: 'mapbox/satellite-v9'
	});


var peta3 = L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
		attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
	});

var peta4 = L.tileLayer('https://api.mapbox.com/styles/v1/{id}/tiles/{z}/{x}/{y}?access_token=pk.eyJ1IjoibWFwYm94IiwiYSI6ImNpejY4NXVycTA2emYycXBndHRqcmZ3N3gifQ.rJcFIG214AriISLbB6B5aw', {
		attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/">OpenStreetMap</a> contributors, ' +
			'<a href="https://creativecommons.org/licenses/by-sa/2.0/">CC-BY-SA</a>, ' +
			'Imagery © <a href="https://www.mapbox.com/">Mapbox</a>',
		id: 'mapbox/dark-v10'
	});

  var map = L.map('map', {
		center: [-6.1809950377213285, 106.62685294077394],
		zoom: 20,
		layers: [peta1],
	});

  var baseLayers = {
    'Default': peta1,
    'Satelit': peta2,
    'Jalan': peta3,
    'Malam': peta4,
  };

  var layerControl = L.control.layers(baseLayers).addTo(map);

  //get coordinat
  var latInput = document.querySelector("#latitudeU");
  var lngInput = document.querySelector("#longitudeU");

  var curLocation = [<?php echo $user['latitudeU'] ?>, <?php echo $user['longitudeU'] ?>];

  map.attributionControl.setPrefix(false);

  var marker = new L.marker(curLocation, {
    draggable: 'true', 
  });
 
  marker.on('dragend', function(e){
    var position = marker.getLatLng();
    marker.setLatLng(position, {
      curLocation
    }).bindPopup(position).update();
    $("#latitudeU").val(position.lat);
    $("#longitudeU").val(position.lng);
  });

  //mengambil coordinat saat peta diklik
  map.on("click", function(e){
    var lat = e.latlng.lat;
    var lng = e.latlng.lng;
    if(!marker){
      marker = L.marker(e.latlng).addTo(map);
    }else{
      marker.setLatLng(e.latlng);
    }
    latInput.value = lat;
    lngInput.value = lng;
  })

  
  map.addLayer(marker);

</script>

</script>

<!-- MAP RUMAH -->
<script>
 var peta1 = L.tileLayer('https://api.mapbox.com/styles/v1/{id}/tiles/{z}/{x}/{y}?access_token=pk.eyJ1IjoibWFwYm94IiwiYSI6ImNpejY4NXVycTA2emYycXBndHRqcmZ3N3gifQ.rJcFIG214AriISLbB6B5aw', {
		attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/">OpenStreetMap</a> contributors, ' +
			'<a href="https://creativecommons.org/licenses/by-sa/2.0/">CC-BY-SA</a>, ' +
			'Imagery © <a href="https://www.mapbox.com/">Mapbox</a>',
		id: 'mapbox/streets-v11'
	});

var peta2 = L.tileLayer('https://api.mapbox.com/styles/v1/{id}/tiles/{z}/{x}/{y}?access_token=pk.eyJ1IjoibWFwYm94IiwiYSI6ImNpejY4NXVycTA2emYycXBndHRqcmZ3N3gifQ.rJcFIG214AriISLbB6B5aw', {
		attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/">OpenStreetMap</a> contributors, ' +
			'<a href="https://creativecommons.org/licenses/by-sa/2.0/">CC-BY-SA</a>, ' +
			'Imagery © <a href="https://www.mapbox.com/">Mapbox</a>',
		id: 'mapbox/satellite-v9'
	});


var peta3 = L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
		attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
	});

var peta4 = L.tileLayer('https://api.mapbox.com/styles/v1/{id}/tiles/{z}/{x}/{y}?access_token=pk.eyJ1IjoibWFwYm94IiwiYSI6ImNpejY4NXVycTA2emYycXBndHRqcmZ3N3gifQ.rJcFIG214AriISLbB6B5aw', {
		attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/">OpenStreetMap</a> contributors, ' +
			'<a href="https://creativecommons.org/licenses/by-sa/2.0/">CC-BY-SA</a>, ' +
			'Imagery © <a href="https://www.mapbox.com/">Mapbox</a>',
		id: 'mapbox/dark-v10'
	});

  var map1 = L.map('map1', {
		center: [-6.177985886888341, 106.62489948674742],
		zoom: 20,
		layers: [peta1],
	});

  var baseLayers = {
    'Default': peta1,
    'Satelit': peta2,
    'Jalan': peta3,
    'Malam': peta4,
  };

  var layerControl = L.control.layers(baseLayers).addTo(map1);

  //get coordinat
  var latInput = document.querySelector("#latitude");
  var lngInput = document.querySelector("#longitude");

  var curLocation = [-6.177985886888341, 106.62489948674742];

  map1.attributionControl.setPrefix(false);

  var marker = new L.marker(curLocation, {
    draggable: 'true', 
  });

  //mengambil coordinat saat marker didrag
  marker.on('dragend', function(e){
    var position = marker.getLatLng();
    marker.setLatLng(position, {
      curLocation
    }).bindPopup(position).update();
    $("#latitude").val(position.lat);
    $("#longitude").val(position.lng);
  });

  //mengambil coordinat saat peta diklik
  map1.on("click", function(e){
    var lat = e.latlng.lat;
    var lng = e.latlng.lng;
    if(!marker){
      marker = L.marker(e.latlng).addTo(map1);
    }else{
      marker.setLatLng(e.latlng);
    }
    latInput.value = lat;
    lngInput.value = lng;
  })

  
  map1.addLayer(marker);

 //memasukan marker rumah
</script>