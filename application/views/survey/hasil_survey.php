<div class="breadcrumbs-inline pt-2 pb-1" id="breadcrumbs-wrapper">
	<div class="container">
		<div class="row">
			<div class="col s10 m12 l12 breadcrumbs-left">
				<h5 class="breadcrumbs-title mt-0 mb-0 display-inline hide-on-small-and-down"><span>SJMF Fakultas Keperawatan Unsyiah</span></h5>
				<ol class="breadcrumbs mb-0">
					<li class="breadcrumb-item"><a href="#">Beranda</a>
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
									<h4 class="card-title">Hasil Survey</h4>
									<div class="row">
										<div class="sample-chart-wrapper"><canvas id="polar-chart" height="400"></canvas></div>
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

<script>
	
	// Polar chart
    // ----------------
    //Get the context of the Chart canvas element we want to select
    var ctx = $("#polar-chart");
 
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
          animateRotate: false
       }
    };
 
    // Chart Data
    var chartData = {
       labels: ["January", "February", "March", "April", "May"],
       datasets: [
          {
             data: [65, 59, 80, 81, 56],
             backgroundColor: ["#03a9f4", "#00bcd4", "#ffc107", "#e91e63", "#4caf50"],
             label: "My dataset" // for legend
          }
       ]
    };
 
    var config = {
       type: "polarArea",
 
       // Chart Options
       options: chartOptions,
 
       data: chartData
    };
 
    // Create the chart
    var polarChart = new Chart(ctx, config);
</script>