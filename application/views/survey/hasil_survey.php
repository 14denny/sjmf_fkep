<div class="breadcrumbs-inline pt-2 pb-1" id="breadcrumbs-wrapper">
   <div class="container">
      <div class="row">
         <div class="col s10 m12 l12 breadcrumbs-left">
            <h5 class="breadcrumbs-title mt-0 mb-0 display-inline hide-on-small-and-down"><span>SJMF Fakultas Keperawatan Unsyiah</span></h5>
            <ol class="breadcrumbs mb-0">
				<li class="breadcrumb-item"><a href="<?php echo base_url() ?>">Beranda</a>
				</li>
               <li class="breadcrumb-item"><a href="#">Survey</a>
               </li>
               <li class="breadcrumb-item active">Hasil Survey
               </li>
            </ol>
         </div>
      </div>
   </div>
</div>

<!--START HOW TO SURVEY-->
<div class="row">
	<div class="col s12">
		<div class="row">
			<div class="col s12">
				<div class="card">
					<div class="card-content">
						<blockquote>
							<p>
								Pilih Grafik yang ingin ditampilkan.
								<br>
								Grafik <span class="card-alert card  blue darken-2 white-text pd-text">&nbsp;Survey Kemudahan dan Kelengkapan Informasi Web&nbsp;</span>untuk
								menampilkan data hasil survey tentang Web.
								<br>
								Grafik <span class="card-alert card  blue darken-2  white-text pd-text">&nbsp;Survey Perkuliahan&nbsp;</span>untuk
								menampilkan data hasil survey perkuliahan.
							</p>
						</blockquote>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!--END HOW TO SURVEY-->

<!-- BEGIN: Page Main-->
<div id="main">
   <div class="row">
      <div class="col s12">
         <div class="container">
            <div class="section">
               <div class="row">
                  <div class="col s12">
                     <div class="card">
                        <div class="card-content">
                           <h4 class="card-title">Grafik Hasil Survey</h4>
                           <div class="row mb-2">
                              <div class="input-field col s5">
                                 <select id="select_survey">
                                    <option disabled selected>Pilih Survey</option>
                                    <option value="1">Kemudahan dan Kelengkapan Informasi Web</option>
                                    <option value="2">Perkuliahan</option>
                                 </select>
                              </div>
                              <br>
                           </div>
                           <div class="row">
                              <div class="sample-chart-wrapper chart-kemudahan col s12 m6 l6" style="display: none; text-align:center">
                                 <h5>Kemudahan</h5>
                                 <div>
                                    <canvas id="polar-chart-kemudahan" class="canvas" height="400"></canvas>
                                 </div>
                              </div>
                              <div class="sample-chart-wrapper chart-informatif col s12 m6 l6" style="display: none; text-align:center">
                                 <h5>Informatif</h5>
                                 <div>
                                    <canvas id="polar-chart-informatif" class="canvas" height="400"></canvas>
                                 </div>
                              </div>
                              <div class="sample-chart-wrapper chart-kuliah" style="display: none; text-align:center">
                                 <canvas id="polar-chart-kuliah" class="canvas" height="400"></canvas>
                              </div>
                              <div class="no-data" style="text-align: center; display:none">
                                 <img src="<?php echo base_url("assets/app-assets/images/icon/nodata.png") ?>" alt="">
                                 <h5 style="color:coral">Belum ada data!</h5>
                              </div>
   
                              <div style="text-align: center; display:none" id="spinner">
                                 <div class="preloader-wrapper big active">
                                    <div class="spinner-layer spinner-blue-only">
                                       <div class="circle-clipper left">
                                          <div class="circle"></div>
                                       </div>
                                       <div class="gap-patch">
                                          <div class="circle"></div>
                                       </div>
                                       <div class="circle-clipper right">
                                          <div class="circle"></div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="content-overlay"></div>
      </div>
   </div>
</div>
<!-- END: Page Main-->

<script src="<?php echo base_url("assets/app-assets/vendors/chartjs/chart.min.js") ?>"></script>
<script src="<?php echo base_url('assets/app-assets/vendors/sweetalert/sweetalert.min.js') ?>"></script>

<script>
   function buildChartKemudahan(kemudahan, informatif) {
      // Chart Options
      var chartOptions = {
         responsive: true,
         maintainAspectRatio: false,
         responsiveAnimationDuration: 500,
         legend: {
            position: "top"
         },
         title: {
            display: false,
            text: "Chart.js Polar Area Chart"
         },
         scale: {
            ticks: {
               beginAtZero: true
            },
            reverse: false
         },
         animation: {
            animateRotate: true
         }
      };


      // Chart Data Kemudahan
      var chartKemudahanData = {
         labels: kemudahan.labels,
         datasets: [{
            data: kemudahan.values,
            backgroundColor: ["#03a9f4", "#d50000", "#ffc107", "#e91e63", "#4caf50", "#00b8d4", "#aeea00", "#ff6d00", "#6200ea", "#9e9d24"],
            label: "Nilai Hasil Survey" // for legend
         }]
      };

      var configKemudahan = {
         type: "polarArea",

         // Chart Options
         options: chartOptions,

         data: chartKemudahanData
      };

      // Chart Data Informatif
      var chartInformatifData = {
         labels: informatif.labels,
         datasets: [{
            data: informatif.values,
            backgroundColor: ["#03a9f4", "#d50000", "#ffc107", "#e91e63", "#4caf50", "#00b8d4", "#aeea00", "#ff6d00", "#6200ea", "#9e9d24"],
            label: "Nilai Hasil Survey" // for legend
         }]
      };

      var configInformatif = {
         type: "polarArea",

         // Chart Options
         options: chartOptions,

         data: chartInformatifData
      };

      $(".chart-kemudahan").slideDown()
      $(".chart-informatif").slideDown()
      
      // Create the chart
      var ctx = $("#polar-chart-kemudahan"); //kemudahan
      new Chart(ctx, configKemudahan);

      var ctx = $("#polar-chart-informatif"); //informatif
      new Chart(ctx, configInformatif);
   }

   $(document).ready(function() {
      // buildChart();
      $("#select_survey").change(function() {

         $("#spinner").show() //show spinner
         $(".sample-chart-wrapper").hide() //hide all chart
         $(".canvas").empty(); //clear all chart

         let value = $(this).val();
         if (value === "1") {
            $.post("<?php echo base_url("survey/get_kemudahan") ?>", function(data) {

               if (data.kemudahan.length === 0) {
                  $(".no-data").slideDown();
                  //hide spinner
                  $("#spinner").hide()
                  return;
               }

               console.log("total: " + typeof(parseFloat(data.kemudahan[0].total)));
               console.log("count: " + typeof(parseFloat(data.count)));

               //buat kemudahan
               let labels = [];
               let values = [];
               for (let i = 0; i < data.kemudahan.length; i++) {

                  labels.push(data.kemudahan[i].nilai);
                  values.push(parseFloat(data.kemudahan[i].total) / parseFloat(data.count) * 100);
               }

               let kemudahan = {
                  labels: labels,
                  values: values
               };

               //buat informatif
               labels = [];
               values = [];
               total = 0;
               for (let i = 0; i < data.informatif.length; i++) {
                  labels.push(data.informatif[i].nilai);
                  values.push(parseFloat(data.informatif[i].total) / parseFloat(data.count) * 100);
               }

               let informatif = {
                  labels: labels,
                  values: values
               };

               //hide spinner
               $("#spinner").hide()
               buildChartKemudahan(kemudahan, informatif);

            })
         } else {
            swal({
               title: "This feature is under development",
               icon:"<?php echo base_url("assets/app-assets/images/gallery/maintenance.png") ?>"
            });
            $("#spinner").hide()
         }
      })


   })
</script>
