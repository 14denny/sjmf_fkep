<!-- AWAL BREADCRUMBS -->
<div class="breadcrumbs-inline pt-2 pb-1" id="breadcrumbs-wrapper">
	<div class="container">
		<div class="row">
			<div class="col s10 m12 l12 breadcrumbs-left">
				<h5 class="breadcrumbs-title mt-0 mb-0 display-inline hide-on-small-and-down"><span>SJMF Fakultas Keperawatan Unsyiah</span>
				</h5>
				<ol class="breadcrumbs mb-0">
					<li class="breadcrumb-item"><a href="#">Beranda</a>
					</li>
					<li class="breadcrumb-item"><a href="#">Akreditasi</a>
					</li>
					<li class="breadcrumb-item active">Edit Akreditasi
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
							<span class="">&ensp;Akreditasi Fakultas Keperawatan Unsyiah. &ensp; </span>&nbsp;
						</p>
					</blockquote>

					<div class="row">
						<div class="col s12">
							<button id="kurang" class="float-right btn waves-effect waves-light red">-
							</button>
							<button id="tambah" class="float-right btn waves-effect waves-light cyan">+</button>
						</div>
						<!--MULAI FORM EDIT AKREDITASI-->
						<div class="col s12 mt-2">
							<form action="<?php echo base_url('akreditasi/submit') ?>" method="post">
								<div class="col s12">
									<div class="col s12">
										Tanggal Akreditasi:
										<div class="input-field inline">
											<input value="<?php echo date('Y-m-d') ?>" type="text" name="tanggal" class="tanggal" id="tanggal_akreditasi" require>
											<label for="tanggal_akreditasi" data-error="wrong" data-success="right">Pilih tanggal</label>
										</div>
									</div>
								</div>
								<div id="form-input-akreditasi">

									<?php foreach ($data_akreditasi as $data) { ?>
										<div class="row div-input-akreditasi col s12">
											<div class="input-field col s3">
												<input type="text" name="prodi[]" require value="<?php echo $data->prodi ?>">
												<label>Prodi</label>
											</div>
											<div class="input-field col s3">
												<label>Jenjang</label>
												<input type="text" name="jenjang[]" require value="<?php echo $data->jenjang ?>">
											</div>
											<div class="input-field col s3">
												<select name="akreditasi[]">
													<option value="1" <?php echo $data->id_nilai == 1 ? "selected" : "" ?>>A
													</option>
													<option value="2" <?php echo $data->id_nilai == 2 ? "selected" : "" ?>>B
													</option>
													<option value="3" <?php echo $data->id_nilai == 3 ? "selected" : "" ?>>C
													</option>
													<option value="4" <?php echo $data->id_nilai == 4 ? "selected" : "" ?>>D
													</option>
													<option value="5" <?php echo $data->id_nilai == 5 ? "selected" : "" ?>>
														Tidak Ada
													</option>
												</select>
												<label>Nilai Akreditasi</label>
											</div>
											<div class="input-field col s3">
												<label>Berlaku hingga</label>
												<input type="text" class="tanggal" name="hingga[]" value="<?php echo $data->hingga ?>" require>
											</div>
										</div>
									<?php } ?>
								</div>
								<div class="input-field col s12">
									<textarea class="materialize-textarea" name="ket"><?php echo $akreditasi->ket ?></textarea>
									<label>Keterangan</label>
								</div>
								<div class="row">
									<div class="input-field col s12">
										<button class="btn cyan waves-effect waves-light right" type="submit" name="action">
											Selesai
										</button>
									</div>
								</div>
							</form>

						</div>
					</div>
				</div>
			</div>
			<div class="content-overlay"></div>
		</div>
	</div>
</div>
<!--AKHIR FORM EDIT AKREDITASI-->

<!-- MULAI SCRIPT -->
<script>
	$(document).ready(function() {

		$(".tanggal").datepicker({
			format: 'yyyy-mm-dd',
		});

		$("#tambah").click(function() {
			$("#form-input-akreditasi").append('<div class="row div-input-akreditasi col s12" style="display:none;"><div class="input-field col s3"><input type="text" name="prodi[]" require><label>Prodi</label></div><div class="input-field col s3"><label>Jenjang</label><input type="text" name="jenjang[]" require"></div><div class="input-field col s3"><select name="akreditasi[]"><option value="1">A</option><option value="2">B</option><option value="3">C</option><option value="4">D</option><option value="5">Tidak Ada</option></select><label>Nilai Akreditasi</label></div><div class="input-field col s3"><label>Berlaku hingga</label><input type="text" class="tanggal" name="hingga[]" require></div></div>')
			$("select").formSelect();
			$(".tanggal").datepicker({
				format: 'yyyy-mm-dd',
			});
			$(".div-input-akreditasi").last().slideDown();
		})

		$("#kurang").click(function() {
			let last_div = $(".div-input-akreditasi").last();
			last_div.slideUp("normal", function() {
				$(this).remove();
			});
		})
	})
</script>
<!-- AKHIR SCRIPT -->