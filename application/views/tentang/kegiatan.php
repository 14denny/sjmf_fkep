<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/app-assets/vendors/quill/quill.snow.css') ?>">

<div class="breadcrumbs-inline pt-2 pb-1" id="breadcrumbs-wrapper">
	<div class="container">
		<div class="row">
			<div class="col s10 m12 l12 breadcrumbs-left">
				<h5 class="breadcrumbs-title mt-0 mb-0 display-inline hide-on-small-and-down"><span>SJMF Fakultas Keperawatan Unsyiah</span></h5>
				<ol class="breadcrumbs mb-0">
					<li class="breadcrumb-item"><a href="#">Beranda</a>
					</li>
					<li class="breadcrumb-item"><a href="#">Tentang Kami</a>
					</li>
					<li class="breadcrumb-item active">Kegiatan
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
				<div class="section">
					<!-- Snow Editor start -->
					<section class="snow-editor">
						<div class="row">
							<div class="col s12">
								<div class="card">
									<div class="card-content">
										<p style="text-align: right;">
											<a href="<?php echo base_url('tentang/edit_kegiatan') ?>"><button class="btn waves-effect waves-light cyan"><i class="material-icons left">edit</i>Edit Konten Kegiatan</button></a>
										</p>
										<div class="row ql-editor" style="white-space: normal;">
											<?php echo $konten ?>
										</div>
									</div>
								</div>
							</div>
						</div>
					</section>
				</div>
			</div>
			<div class="content-overlay"></div>
		</div>
	</div>
</div>
