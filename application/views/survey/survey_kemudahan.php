<div class="breadcrumbs-inline pt-2 pb-1" id="breadcrumbs-wrapper">
	<div class="container">
		<div class="row">
			<div class="col s10 m12 l12 breadcrumbs-left">
				<h5 class="breadcrumbs-title mt-0 mb-0 display-inline hide-on-small-and-down"><span>SJMF Fakultas Keperawatan Unsyiah</span>
				</h5>
				<ol class="breadcrumbs mb-0">
					<li class="breadcrumb-item"><a href="#">Beranda</a>
					</li>
					<li class="breadcrumb-item"><a href="#">Survey</a>
					</li>
					<li class="breadcrumb-item active">Survey Kemudahan dan Kelengkapan Informasi Web
					</li>
				</ol>
			</div>
		</div>
	</div>
</div>

<!--Using Color-->
<div class="row">
	<div class="col s12">
		<div class="row">
			<div class="col s12">
				<blockquote>
					<p>
						Klik tombol <span class="card-alert card  blue light-3 white-text pd-text">&nbsp;Cara Pengisian Survey&nbsp;</span>untuk
						informasi.
					</p>
				</blockquote>
			</div>
			<div class="col s12">
				<ul class="collapsible collapsible-accordion">
					<li>
						<div class="collapsible-header gradient-45deg-light-blue-cyan white-text">
							<i class="material-icons">info</i> Cara Pengisian Survey.
						</div>
						<div class="collapsible-body cyan lighten-5 lighten-5">
							<p>
								Survey ini bertujuan untuk mengetahui tingkat kemudahan dan kelengkapan informasi yang
								tersedia di web SJMF FKEP Unsyiah.
								<br>
								Isilah pertanyaan-pertanyaan dibawah ini dengan skala 1-10.
							</p>
						</div>
					</li>
				</ul>
			</div>
		</div>
	</div>
</div>

<div class="row">
	<div class="col s12 m12 l12">
		<div id="prism" class="card card card-default scrollspy">
			<div class="card-content">
				<h4 class="card-title">Survey Kemudahan dan Kelengkapan Informasi Web</h4>
				<div class="row">
					<div class="col s12">
						<table class="table table-striped table-hover">
							<thead>
								<tr style="font-size: medium; font-weight: bolder">
									<td>Pertanyaan</td>
									<td>Jawaban</td>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td>1. Seberapa mudah Anda menggunakan Web ini?</td>
									<td>
										<div class="container" style="padding: 20px">
											<div class="row">
												<form>
													<label>
														<input class="with-gap" name="group1" type="radio" />
														<span>1</span>
													</label>
													<label>
														<input class="with-gap" name="group1" type="radio" />
														<span>2</span>
													</label>
													<label>
														<input class="with-gap" name="group1" type="radio" />
														<span>3</span>
													</label>
													<label>
														<input class="with-gap" name="group1" type="radio" />
														<span>4</span>
													</label>
													<label>
														<input class="with-gap" name="group1" type="radio" />
														<span>5</span>
													</label>
													<label>
														<input class="with-gap" name="group1" type="radio" />
														<span>6</span>
													</label>
													<label>
														<input class="with-gap" name="group1" type="radio" />
														<span>7</span>
													</label>
													<label>
														<input class="with-gap" name="group1" type="radio" />
														<span>8</span>
													</label>
													<label>
														<input class="with-gap" name="group1" type="radio" />
														<span>9</span>
													</label>
													<label>
														<input class="with-gap" name="group1" type="radio" />
														<span>10</span>
													</label>
												</form>
											</div>
										</div>
									</td>
								</tr>
								<tr>
									<td>2. Seberapa informatif Web ini?</td>
									<td>
										<div class="container" style="padding: 20px">
											<div class="row">
												<form>
													<label>
														<input class="with-gap" name="group1" type="radio" />
														<span>1</span>
													</label>
													<label>
														<input class="with-gap" name="group1" type="radio" />
														<span>2</span>
													</label>
													<label>
														<input class="with-gap" name="group1" type="radio" />
														<span>3</span>
													</label>
													<label>
														<input class="with-gap" name="group1" type="radio" />
														<span>4</span>
													</label>
													<label>
														<input class="with-gap" name="group1" type="radio" />
														<span>5</span>
													</label>
													<label>
														<input class="with-gap" name="group1" type="radio" />
														<span>6</span>
													</label>
													<label>
														<input class="with-gap" name="group1" type="radio" />
														<span>7</span>
													</label>
													<label>
														<input class="with-gap" name="group1" type="radio" />
														<span>8</span>
													</label>
													<label>
														<input class="with-gap" name="group1" type="radio" />
														<span>9</span>
													</label>
													<label>
														<input class="with-gap" name="group1" type="radio" />
														<span>10</span>
													</label>
												</form>
											</div>
										</div>
									</td>
								</tr>
							</tbody>
						</table>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<script>
	$(document).ready(function() {
		$('<script/>', {
			type: 'text/javascript',
			src: '<?php echo base_url('assets/app-assets/vendors/sweetalert/sweetalert.min.js') ?>'
		}).appendTo('head');

		swal({
			title: "This page is under construction",
			icon: '<?php echo base_url('assets/app-assets/images/gallery/maintenance.png') ?>',
			padding: '5em'
		});
	})
</script>