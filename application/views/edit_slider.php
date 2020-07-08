<!-- AWAL BREADCRUMBS -->
<div class="breadcrumbs-inline pt-2 pb-1" id="breadcrumbs-wrapper">
	<div class="container">
		<div class="row">
			<div class="col s10 m12 l12 breadcrumbs-left">
				<h5 class="breadcrumbs-title mt-0 mb-0 display-inline hide-on-small-and-down"><span>SJMF Fakultas Keperawatan Unsyiah</span>
				</h5>
				<ol class="breadcrumbs mb-0">
					<li class="breadcrumb-item"><a href="<?php echo base_url() ?>">Beranda</a>
					</li>
					<li class="breadcrumb-item active">Edit
					</li>
				</ol>
			</div>
		</div>
	</div>
</div>
<!-- AKHIR BREADCRUMBS -->

<div id="main">
	<div class="row">
		<div class="col s12">
			<div class="container">
				<div class="section">
					<div class="card">
						<div class="card-content">
							<p class="caption">Upload file gambar Beranda.</p>
						</div>
					</div>
					<!--Max file size-->
					<form class="formValidate0" enctype="multipart/form-data" id="formValidate0" method="POST">
						<div class="divider mb-1 mt-1"></div>
						<div class="row section">
							<div class="col s12 m4 l3">
								<p>Upload Gambar Slider 1</p>
							</div>
							<div class="col s12 m8 l9">
								<p>Ukuran maksimal file 2MB.</p>
								<input accept="image/*" class="dropify" data-allowed-file-extensions="png jpg jpeg"
									   data-max-file-size="2M" id="dropify-image" id="img_upload" name="img_uploads"
									   required
									   type="file"/>
							</div>
						</div>

						<div class="divider mb-1 mt-1"></div>
						<div class="row section">
							<div class="col s12 m4 l3">
								<p>Upload Gambar Slider 2</p>
							</div>
							<div class="col s12 m8 l9">
								<p>Ukuran maksimal file 2MB.</p>
								<input accept="image/*" class="dropify" data-allowed-file-extensions="png jpg jpeg"
									   data-max-file-size="2M" id="dropify-image" id="img_upload" name="img_uploads"
									   required
									   type="file"/>
							</div>
						</div>

						<div class="divider mb-1 mt-1"></div>
						<div class="row section">
							<div class="col s12 m4 l3">
								<p>Upload Gambar Slider 3</p>
							</div>
							<div class="col s12 m8 l9">
								<p>Ukuran maksimal file 2MB.</p>
								<input accept="image/*" class="dropify" data-allowed-file-extensions="png jpg jpeg"
									   data-max-file-size="2M" id="dropify-image" id="img_upload" name="img_uploads"
									   required
									   type="file"/>
							</div>
						</div>

						<div class="divider mb-1 mt-1"></div>
						<div class="row section">
							<div class="col s12 m4 l3">
								<p>Upload Gambar Slider 4</p>
							</div>
							<div class="col s12 m8 l9">
								<p>Ukuran maksimal file 2MB.</p>
								<input accept="image/*" class="dropify" data-allowed-file-extensions="png jpg jpeg"
									   data-max-file-size="2M" id="dropify-image" id="img_upload" name="img_uploads"
									   required
									   type="file"/>
							</div>
						</div>

						<div class="divider mb-1 mt-1"></div>
						<div class="row section">
							<div class="col s12 m4 l3">
								<p>Upload Gambar Slider 5</p>
							</div>
							<div class="col s12 m8 l9">
								<p>Ukuran maksimal file 2MB.</p>
								<input accept="image/*" class="dropify" data-allowed-file-extensions="png jpg jpeg"
									   data-max-file-size="2M" id="dropify-image" id="img_upload" name="img_uploads"
									   required
									   type="file"/>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
		<div class="content-overlay"></div>
	</div>
	<div class="row mr-1">
		<div class="input-field col s12">
			<button class="btn cyan waves-effect waves-light right" style="width: 12%" type="submit" name="action">
				Selesai
				<i class="material-icons right">send</i>
			</button>
		</div>
	</div>
</div>
