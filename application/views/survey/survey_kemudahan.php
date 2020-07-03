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
<?php if (!$status_survey) { ?>
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
<?php } ?>

<div id="main">
	<div class="row">
		<div class="col s12 m12 l12">
			<div id="prism" class="card card card-default scrollspy">
				<div class="card-content">
					<h4 class="card-title">Survey Kemudahan dan Kelengkapan Informasi Web</h4>
					<div class="row">
						<div class="col s12">
							<?php if ($status_survey) { ?>
								<p style="text-align: center;">
									<img width="50%" src="<?php echo base_url("assets/app-assets/images/cards/thanks.png") ?>" alt="Thanks!">
								</p>
							<?php } else { ?>
								<form id="form_survey" action="<?php echo base_url("survey/submit_kemudahan") ?>" method="post">
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
															<label>
																<input class="with-gap" name="kemudahan" type="radio" value="1" checked required />
																<span>1</span>
															</label>
															<label>
																<input class="with-gap" name="kemudahan" type="radio" value="2"/>
																<span>2</span>
															</label>
															<label>
																<input class="with-gap" name="kemudahan" type="radio" value="3"/>
																<span>3</span>
															</label>
															<label>
																<input class="with-gap" name="kemudahan" type="radio" value="4"/>
																<span>4</span>
															</label>
															<label>
																<input class="with-gap" name="kemudahan" type="radio" value="5"/>
																<span>5</span>
															</label>
															<label>
																<input class="with-gap" name="kemudahan" type="radio" value="6"/>
																<span>6</span>
															</label>
															<label>
																<input class="with-gap" name="kemudahan" type="radio" value="7"/>
																<span>7</span>
															</label>
															<label>
																<input class="with-gap" name="kemudahan" type="radio" value="8"/>
																<span>8</span>
															</label>
															<label>
																<input class="with-gap" name="kemudahan" type="radio" value="9"/>
																<span>9</span>
															</label>
															<label>
																<input class="with-gap" name="kemudahan" type="radio" value="10"/>
																<span>10</span>
															</label>
														</div>
													</div>
												</td>
											</tr>
											<tr>
												<td>2. Seberapa informatif Web ini?</td>
												<td>
													<div class="container" style="padding: 20px">
														<div class="row">
															<label>
																<input class="with-gap" name="informatif" type="radio" value="1" checked required />
																<span>1</span>
															</label>
															<label>
																<input class="with-gap" name="informatif" type="radio" value="2"/>
																<span>2</span>
															</label>
															<label>
																<input class="with-gap" name="informatif" type="radio" value="3"/>
																<span>3</span>
															</label>
															<label>
																<input class="with-gap" name="informatif" type="radio" value="4"/>
																<span>4</span>
															</label>
															<label>
																<input class="with-gap" name="informatif" type="radio" value="5"/>
																<span>5</span>
															</label>
															<label>
																<input class="with-gap" name="informatif" type="radio" value="6" />
																<span>6</span>
															</label>
															<label>
																<input class="with-gap" name="informatif" type="radio" value="7"/>
																<span>7</span>
															</label>
															<label>
																<input class="with-gap" name="informatif" type="radio" value="8"/>
																<span>8</span>
															</label>
															<label>
																<input class="with-gap" name="informatif" type="radio" value="9"/>
																<span>9</span>
															</label>
															<label>
																<input class="with-gap" name="informatif" type="radio"  value="10"/>
																<span>10</span>
															</label>
														</div>
													</div>
												</td>
											</tr>
										</tbody>
									</table>

									<p class="mt-2">
										<button type="button" id="button" class="float-right mr-1 btn waves-effect waves-light cyan">Submit Survey</button>
									</p>
								</form>

							<?php } ?>
						</div>
					</div>
				</div>
			</div>
			<div class="content-overlay"></div>
		</div>
	</div>
</div>

<script>
	$(document).ready(function() {
		$('<script/>', {
			type: 'text/javascript',
			src: '<?php echo base_url('assets/app-assets/vendors/sweetalert/sweetalert.min.js') ?>'
		}).appendTo('head');
	})
</script>

<?php if ($status_survey) { ?>
	<script>
		$(document).ready(function() {
			swal({
				title: 'Anda telah mengisi survey ini',
				icon: 'success'
			})
		})
	</script>
<?php } else { ?>
	<script>
		$(document).ready(function() {

			$("#button").click(function() {
				swal({
					title: "Apa anda yakin dengan nilai survey tersebut?",
					icon: "info",
					buttons: {
						cancel: true,
						confirm: true,
					}
				}).then(function(isConfirm) {
					if (isConfirm) {
						$("#form_survey").submit();
					}
				})
			})
		})
	</script>
<?php } ?>