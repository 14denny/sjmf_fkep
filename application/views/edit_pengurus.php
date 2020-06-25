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
					<li class="breadcrumb-item"><a href="#">Pengurus SJMF FKEP</a>
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
							<button id="kurang" class="float-right">-</button>
							<button id="tambah" class="float-right">+</button>
						</div>
						<!-- AWAL TABEL -->
						<div class="col s12 mt-2">
							<form action="<?php echo base_url('pengurus/submit') ?>" method="post">
								<div id="form-input-pengurus">
									<?php foreach ($all_pengurus as $pengurus) { ?>
										<div class="row div-input-pengurus">
											<div class="input-field col s6">
												<input type="text" name="nama[]" require value="<?php echo $pengurus->nama ?>">
												<label>Nama</label>
											</div>
											<div class="input-field col s6">
												<input type="text" name="jabatan[]" require value="<?php echo $pengurus->jabatan ?>">
												<label>Jabatan</label>
											</div>
										</div>
									<?php } ?>
								</div>
								<button>Selesai</button>
							</form>

						</div>
					</div>
				</div>
			</div>
			<div class="content-overlay"></div>
		</div>
	</div>
</div>
<!-- AKHIR TABEL -->


<!-- MULAI SCRIPT -->
<script src="<?php echo base_url('assets/app-assets/js/jquery.min.js') ?>"></script>
<script>
	$(document).ready(function() {

		//inisialisasi dataTable


		$("#tambah").click(function() {
			$("#form-input-pengurus").append('<div style="display: none;" class="row div-input-pengurus"><div class="input-field col s6"><input type="text" name="nama[]" required><label>Nama</label></div><div class="input-field col s6"><input type="text" name="jabatan[]" required><label>Jabatan</label></div></div>')
			$(".div-input-pengurus").last().slideDown();
		})

		$("#kurang").click(function(){
			let last_div = $(".div-input-pengurus").last();
			last_div.slideUp("normal", function(){
				$(this).remove();
			});
		})
	})
</script>
<!-- AKHIR SCRIPT -->