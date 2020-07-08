<link rel="stylesheet" type="text/css" href="<?php echo base_url("assets/app-assets/vendors/sweetalert/sweetalert.css") ?>"">
<link rel=" stylesheet" type="text/css" href="<?php echo base_url("assets/app-assets/vendors/dropify/css/dropify.min.css") ?>"">

<div class=" breadcrumbs-inline pt-2 pb-1" id="breadcrumbs-wrapper">
<div class="container">
	<div class="row">
		<div class="col s10 m12 l12 breadcrumbs-left">
			<h5 class="breadcrumbs-title mt-0 mb-0 display-inline hide-on-small-and-down"><span>SJMF Fakultas Keperawatan Unsyiah</span></h5>
			<ol class="breadcrumbs mb-0">
				<li class="breadcrumb-item"><a href="<?php echo base_url() ?>">Beranda</a>
				</li>
				<li class="breadcrumb-item active">Dokumen
				</li>
			</ol>
		</div>
	</div>
</div>
</div>


<div id="main">
	<div class="row">
		<div class="col s12">
			<div class="container">
				<div class="section section-data-tables">
					<div class="row">
						<div class="col s12">
							<div class="card">
								<div class="progress" style="display: none;">
									<div class="indeterminate"></div>
								</div>
								<div class="card-content">
									<h4 class="card-title">Daftar Dokumen SJMF Fakultas Keperawatan</h4>
									<div class="row">
										<?php if ($this->AdminMdl->isLoggedIn()) { ?>
											<p style="text-align: right"><a href="#modal-add" class="btn waves-effect waves-light green modal-trigger"><i class="material-icons left">note_add</i>Tambah dokumen</a></p>
										<?php } ?>
										<div class="col s12">
											<table id="page-length-option" class="display">
												<thead>
													<tr>
														<th>Judul</th>
														<th>Kategori</th>
														<th>Terakhir Update</th>
														<th>Download</th>
														<?php if ($this->AdminMdl->isLoggedIn()) { ?>
															<th>Aksi</th>
														<?php } ?>
													</tr>
												</thead>
												<tbody>
													<?php if ($files != null) foreach ($files as $file) { ?>
														<tr>
															<td>
															<strong><i class="material-icons left" style="margin-right: 1px; font-size: 21px; line-height: 1.1">insert_drive_file</i><?php echo $file->nama ?></strong>
																<br>
																<span><i class="material-icons left" style="margin-right: 1px; font-size: 18px; line-height: 1.4">file_download</i>&nbsp;<?php echo $file->total_downloads ?>&nbsp;downloads</span>
															</td>
															<td><?php echo $file->kategori ?></td>
															<td><?php echo $file->tanggal_update ?></td>
															<td style="text-align: center;">
																<a href="<?php echo base_url("download/download?file=$file->id_file") ?>"><button class="btn waves-effect waves-light red accent-2"><i class="material-icons left">file_download</i>Download</button></a>
															</td>
															<?php if ($this->AdminMdl->isLoggedIn()) { ?>
																<td style="text-align: center;">
																	<button class="btn waves-effect waves-light cyan btn-edit" data-id="<?php echo $file->id ?>"><i class="material-icons center">edit</i></button>
																	<button class="btn waves-effect waves-light orange btn-delete" data-id="<?php echo $file->id ?>"><i class="material-icons center"><span>delete</span></i></button>
																</td>
															<?php } ?>
														</tr>
													<?php } ?>
												</tbody>
											</table>
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


<?php if ($this->AdminMdl->isLoggedIn()) { ?>
	<!-- modal -->
	<div id="modal-edit" class="modal bottom-sheet">
		<div class="modal-content">
			<h5>Edit Dokumen</h5>
			<div class="row">
				<div class="col s12">
					<form action="<?php echo base_url('download/submit') ?>" method="post" enctype="multipart/form-data">
						<div class="input-field col s12">
							<input class="active" type="text" name="nama" id='nama' require value="">
							<label for="nama">Nama Dokumen</label>
						</div>
						<div class="input-field col s12">
							<input class="active" type="text" name="kategori" id='kategori' require value="">
							<label for="kategori">Kategori Dokumen</label>
						</div>
						<div class="col s12 m4 l3">
							<p>Update File
								<br>
								<sub class="red-text text-daken-1">Kosongkan (remove) atau abaikan jika tidak ingin mengganti dokumen</sub>
								<br>
								<sub class="red-text text-daken-1" style="text-decoration: underline;">Max: 20MB</sub>
							</p>
						</div>
						<div class="col s12 m8 l9">
							<input type="file" name="dokumen" id="input-file-dokumen" />
						</div>
						<input type="hidden" name="id_file" id="id_file">
						<div class="input-field col s12">
							<button type="submit" class="btn right waves-effect waves-light cyan">Selesai</button>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>

	<div id="modal-add" class="modal bottom-sheet">
		<div class="modal-content">
			<h5>Tambah Dokumen</h5>
			<div class="row">
				<div class="col s12">
					<form action="<?php echo base_url('download/add') ?>" method="post" enctype="multipart/form-data">
						<div class="input-field col s12">
							<input type="text" name="nama" require>
							<label>Nama Dokumen</label>
						</div>
						<div class="input-field col s12">
							<input type="text" name="kategori" require>
							<label>Kategori Dokumen</label>
						</div>
						<div class="col s12 m4 l3">
							<p>Upload File Dokumen
								<br>
								<sub class="red-text text-daken-1" style="text-decoration: underline;">Max: 20MB</sub>
							</p>
						</div>
						<div class="col s12 m8 l9">
							<input type="file" name="dokumen" class="dropify" required />
						</div>
						<div class="input-field col s12">
							<button type="submit" class="btn right waves-effect waves-light cyan">Selesai</button>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>

<?php } ?>

<script src="<?php echo base_url("assets/app-assets/vendors/sweetalert/sweetalert.min.js") ?>"></script>

<script>
	$(document).ready(function() {

		//load dropify
		$('<script/>', {
			type: 'text/javascript',
			src: '<?php echo base_url('assets/app-assets/vendors/dropify/js/dropify.min.js') ?>'
		}).appendTo('head');

		//initialization
		$(".modal").modal(); //modal
		// $('.dropify').dropify(); //dropify

		<?php if ($this->AdminMdl->isLoggedIn()) { ?>

			$("#page-length-option").on("click", ".btn-delete", function() {
				let btn = $(this);
				let id = btn.data("id");

				btn.toggleClass("disabled"); //disable button

				swal({
					title: "Hapus dokumen ini?",
					text: "Dokumen akan selamanya dihapus dari server dan tidak akan dapat didownload lagi!",
					icon: 'warning',
					dangerMode: true,
					buttons: {
						cancel: 'Tidak, batalkan!',
						delete: 'Ya, hapus dokumen'
					}
				}).then(function(willDelete) {
					if (willDelete) {
						$(".progress").show(); //show loader

						$.post("<?php echo base_url('download/delete_download') ?>", {
							id: id
						}, function(data) {
							console.log(data)
							if (data.status) {
								swal("Dokumen berhasil dihapus!", {
									icon: "success",
								}).then(function() {
									location.reload();
								});
							}
							btn.toggleClass("disabled");
							$(".progress").hide(); //show loader
						})

					} else {
						swal("Penghapusan dokumen dibatalkan!", {
							title: 'Dibatalkan',
							icon: "error",
						});
						btn.toggleClass("disabled");
						$(".progress").hide(); //show loader
					}
				});
			})

			$("#page-length-option").on("click", ".btn-edit", function() {
				let id = $(this).data("id");
				$.post("<?php echo base_url('download/get_file_data') ?>", {
					id: id
				}, function(data) {
					console.log(data)
					$("#nama").val(data.nama)
					$("#kategori").val(data.kategori)
					$("#id_file").val(data.id)
					// $("#input-file-dokumen").attr("data-default-file", "<?php echo base_url() ?>/"+data.location)
					$("#input-file-dokumen").dropify({
						defaultFile: "<?php echo base_url() ?>/" + data.location
					})
					M.updateTextFields();
					$("#modal-edit").modal("open");
				})
			})

		<?php } ?>

		///////// SESSION /////////
		<?php if ($this->session->flashdata("error")) { ?>
			swal({
				title: "Gagal",
				text: '<?php echo $this->session->flashdata("error") ?>',
				icon: 'error'
			})
		<?php } ?>

		<?php if ($this->session->flashdata("success")) { ?>
			swal({
				title: "Berhasil",
				text: '<?php echo $this->session->flashdata("success") ?>',
				icon: 'success'
			})
		<?php } ?>

	})
</script>