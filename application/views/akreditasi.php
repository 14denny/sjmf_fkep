<!-- AWAL BREADCRUMBS -->
<div class="breadcrumbs-inline pt-2 pb-1" id="breadcrumbs-wrapper">
	<div class="container">
		<div class="row">
			<div class="col s10 m12 l12 breadcrumbs-left">
				<h5 class="breadcrumbs-title mt-0 mb-0 display-inline hide-on-small-and-down"><span>SJMF Fakultas Keperawatan Unsyiah</span></h5>
				<ol class="breadcrumbs mb-0">
					<li class="breadcrumb-item"><a href="#">Beranda</a>
					</li>
					<li class="breadcrumb-item active">Akreditasi
					</li>
				</ol>
			</div>
		</div>
	</div>
</div>
<!-- AKHIR BREADCRUMBS -->

<div class="row">
	<div class="col s12 m12 l12">
		<div id="striped-table" class="card card card-default scrollspy">
			<div class="card-content">
				<blockquote>
					<p>
						<span class="">Status Akreditasi Program Studi di Fakultas Keperawatan Unsyiah oleh BAN PT/ LAM PT Kes. </span>&nbsp;
					</p>
					<p>
<<<<<<< HEAD
						<span class="card-alert card blue darken-2 white-text pd-text">&ensp;Per 4 Februari 2020. &ensp; </span>&nbsp;
=======
						<span class="card-alert card blue darken-3 white-text pd-text">&ensp;Per <?php echo $akreditasi->tanggal ?>. &ensp; </span>&nbsp;
>>>>>>> f7e85aca729890d8cc425cb24f93e9d889008d4a
					</p>

				</blockquote>
				<p class="mb-1 mr-1" style="text-align: right;">
					<a href="<?php echo base_url('akreditasi/edit') ?>"><button class="btn waves-effect waves-light cyan"><i class="material-icons left">edit</i>Edit Akreditasi</button></a>
				</p>
				<div class="row">
					<div class="col s12">
					</div>
					<!-- AWAL TABEL -->
					<div class="col s12">
						<table class="striped">
							<thead>
								<tr style="background-color: #42a5f5; color: #ffff;">
									<th data-field="prodi" style="text-align: center">Program Studi</th>
									<th data-field="program" style="text-align: center">Program Pendidikan</th>
									<th data-field="akreditasi" style="text-align: center">Akreditasi</th>
									<th data-field="berlaku" style="text-align: center">Berlaku Hingga</th>
								</tr>
							</thead>
							<tbody>
								<?php foreach ($data_akreditasi as $data){ ?>
									<tr>
										<td style="text-align: center;"><?php echo $data->prodi ?></td>
										<td style="text-align: center;"><?php echo $data->jenjang ?></td>
										<td style="text-align: center;"><?php echo $data->akreditasi ?></td>
										<td style="text-align: center;"><?php echo date("d F Y", strtotime($data->hingga)) ?></td>
									</tr>
								<?php } ?>
							</tbody>
						</table>
					</div>
				</div>
				<?php if($akreditasi->ket != "" && $akreditasi->ket != null) { ?>
					<p>
						<br><br>
						<span class="card-alert card amber darken-1 white-text pd-text">&ensp;Keterangan: &ensp;</span>&nbsp;
					</p>
					<p>
						<?php echo $akreditasi->ket ?>
					</p>
				<?php } ?>
			</div>
		</div>
	</div>
</div>
<!-- AKHIR TABEL -->
