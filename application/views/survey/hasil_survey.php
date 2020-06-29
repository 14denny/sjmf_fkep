<div class="breadcrumbs-inline pt-2 pb-1" id="breadcrumbs-wrapper">
	<div class="container">
		<div class="row">
			<div class="col s10 m12 l12 breadcrumbs-left">
				<h5 class="breadcrumbs-title mt-0 mb-0 display-inline hide-on-small-and-down"><span>SJMF FKEP</span></h5>
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
								menampilkand data hasil survey perkuliahan.
							</p>
						</blockquote>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!--END HOW TO SURVEY-->

<!-- START CATEGORY -->
<div class="row">
	<div class="col s12">
		<div class="row">
			<div class="col s12">
				<div class="card">
					<div class="card-content">
						<h4 class="card-title">Pilih Kategori</h4>
						<div class="divider mt-2"></div>
						<div class="row">
							<div class="col s12 m6 l4">
								<h6>Jenis Survey</h6>
								<div class="input-field">
									<select class="select2 browser-default" id="survey">
										<option disabled selected value="--">-- Pilih Jenis Survey --</option>
										<option value="1">Survey Kemudahan dan Kelengkapan Informasi Web</option>
										<option value="2">Survey Perkuliahan</option>
										<option disabled value="--">No data found</option>
									</select>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- END CATEGORY -->
<div class="divider mt-2"></div>

<!--Polar Chart-->
<div class="row">
	<div class="col s12">
		<h4>Chart</h4>
		<div id="chartjs-polar-chart" class="card">
			<div class="card-content">
				<h4 class="card-title" style="text-align: center !important;">Disini Judul Grafik</h4>
				<div class="row">
					<div class="col s12">
						<div class="sample-chart-wrapper"><canvas id="polar-chart" height="400"></canvas></div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>


