<!-- AWAL BREADCRUMBS -->
<div class="breadcrumbs-inline pt-2 pb-1" id="breadcrumbs-wrapper">
	<div class="container">
		<div class="row">
			<div class="col s10 m12 l12 breadcrumbs-left">
				<h5 class="breadcrumbs-title mt-0 mb-0 display-inline hide-on-small-and-down"><span>SJMF FKEP</span>
				</h5>
				<ol class="breadcrumbs mb-0">
					<li class="breadcrumb-item"><a href="#">Beranda</a>
					</li>
					<li class="breadcrumb-item active">Pengurus SJMF FKEP
					</li>
				</ol>
			</div>
		</div>
	</div>
</div>
<!-- AKHIR BREADCRUMBS -->

<div id="main">

	<div class="row">
		<div class="col s12 m12 l12">
			<div id="striped-table" class="card card card-default scrollspy">
				<div class="card-content">
					<blockquote>
						<p>
							<span class="">&ensp;Pengurus SJMF FKEP tahun 2020-2022. &ensp; </span>&nbsp;
						</p>
	
					</blockquote>
					<div class="row">
						<div class="col s12">
							<a href="<?php echo base_url("pengurus/edit") ?>"><button class="float-right btn waves-effect waves-light cyan" >Edit Pengurus</button></a>
						</div>
						<!-- AWAL TABEL -->
						<div class="col s12 mt-2">
							<table class="striped" id="table-pengurus">
								<thead>
									<tr style="background-color: #42a5f5; color: #ffff;">
										<th data-field="nama" style="text-align: center">Nama</th>
										<th data-field="jabatan" style="text-align: center">Jabatan</th>
									</tr>
								</thead>
								<tbody>
									<?php foreach ($all_pengurus as $pengurus) { ?>
										<tr>
											<td style="text-align: center;"><?php echo $pengurus->nama ?></td>
											<td style="text-align: center;"><?php echo $pengurus->jabatan ?></td>
										</tr>
									<?php } ?>
									<!-- <tr>
										<td>Alvin</td>
										<td>Eclair</td>
									</tr>
									<tr>
										<td>Alan</td>
										<td>Jellybean</td>
									</tr>
									<tr>
										<td>Jonathan</td>
										<td>Lollipop</td>
									</tr>
									<tr>
										<td>Shannon</td>
										<td>KitKat</td>
									</tr> -->
								</tbody>
							</table>
						</div>
					</div>
				</div>
			</div>
			<div class="content-overlay"></div>
		</div>
	</div>
</div>
<!-- AKHIR TABEL -->

<script src="<?php echo base_url('assets/app-assets/js/scripts/data-tables.js') ?>"></script>
<script src="<?php echo base_url('assets/app-assets/js/jquery.min.js') ?>"></script>

<script>
	$(document).ready(function() {

		//inisialisasi dataTable
		$("#table-pengurus").DataTable();
	})
</script>
