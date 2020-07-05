<div class="breadcrumbs-inline pt-2 pb-1" id="breadcrumbs-wrapper">
	<div class="container">
		<div class="row">
			<div class="col s10 m12 l12 breadcrumbs-left">
				<h5 class="breadcrumbs-title mt-0 mb-0 display-inline hide-on-small-and-down"><span>SJMF Fakultas Keperawatan Unsyiah</span>
				</h5>
				<ol class="breadcrumbs mb-0">
					<li class="breadcrumb-item"><a href="<?php echo base_url() ?>">Beranda</a>
					</li>
					<li class="breadcrumb-item"><a href="#">Survey</a>
					</li>
					<li class="breadcrumb-item active">Survey Perkuliahan
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
				<blockquote>
					<p>
						Klik tombol <span class="card-alert card  blue darken-2 white-text pd-text">&nbsp;Cara Pengisian Survey&nbsp;</span>untuk
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
								Survey ini bertujuan untuk mengetahui perkuliahan blablablabla. Survey ini terdari dari
								** pertanyaan dan setiap pertanyaan memiliki skala 1-10.
							</p>
							<h6 style="font-weight: bolder; font-size: 16px">Harap mengisi Nomor Pokok Mahasiswa (NPM)
								dan nama lengkap untuk mengikuti survey. </h6>
							<div id="view-small-button">
								<div class="row">
									<div class="col s12 mt-2 mb-2">
										<a class="waves-effect waves-light btn-small mb-1 mr-1">OK</a>
									</div>
								</div>
							</div>
						</div>
					</li>
				</ul>
			</div>
		</div>
	</div>
</div>
<!--END HOW TO SURVEY-->

<!--START FORM STUDENT ID-->
<div class="row">
	<div class="col s12 m12 l12">
		<div id="inline-form" class="card card card-default scrollspy">
			<div class="card-content">
				<h4 class="card-title">Form Data Diri</h4>
				<form>
					<div class="row">
						<div class="input-field col m4 s6">
							<i class="material-icons prefix">payment</i>
							<input id="npm" type="text" class="validate" required>
							<label for="npm">NPM</label>
						</div>
						<div class="input-field col m4 s6">
							<i class="material-icons prefix">account_circle</i>
							<input id="nama_lengkap" type="text" class="validate" required>
							<label for="nama_lengkap">Nama Lengkap</label>
						</div>
						<div class="input-field col m4 s12">
							<div class="input-field col s12">
								<button class="btn cyan waves-effect waves-light" type="submit" name="action">
									Submit
								</button>
							</div>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>
<!--END FORM STUDENT ID-->

<div class="row">
	<div class="col s12 m12 l12">
		<!-- disini alert message -->
		<div id="notification" style="display: block">
			<div class="card-alert card #81c784 green lighten-2">
				<div class="card-content white-text">
					<p>
						<i class="material-icons">check</i> Jawaban Anda berhasil dikirim.</p>
				</div>
			</div>
		</div>
		<!-- akhir alert message -->
		<div id="prism" class="card card card-default scrollspy">
			<div class="card-content">
				<h4 class="card-title" style="text-align: center; font-weight: bolder">Survey Perkuliahan</h4>
				<div class="row">
					<div class="col s12" style="padding-top: 15px">
						<!--START FORM SURVEY-->
						<form>
							<table class="table table-striped table-hover">
								<thead>
									<tr style="font-size: larger; font-weight: bolder; padding-left: 50px">
										<td>Pertanyaan</td>
										<td>Jawaban</td>
									</tr>
								</thead>
								<tbody>
									<!--START QUESTION 1-->
									<tr>
										<td style="padding-top: 20px">1. Apakah Anda lelah?</td>
										<td style="padding-top: 20px">
											<div class="constainer" style="display: block">
												<label>
													<input class="with-gap" name="question1" type="radio" required />
													<span>A. Ya</span>
												</label>
												<label>
													<input class="with-gap" name="question1" type="radio" required />
													<span>B. Tidak</span>
												</label>
												<label>
													<input class="with-gap" name="question1" type="radio" required />
													<span>C. Bisa Jadi</span>
												</label>
												<label>
													<input class="with-gap" name="question1" type="radio" required />
													<span>D. Kepo</span>
												</label>
											</div>
										</td>
									</tr>
									<!--END QUESTION 1-->

									<!--START QUESTION 2-->
									<tr>
										<td style="padding-top: 20px">2. Apakah Anda ngantuk?</td>
										<td style="padding-top: 20px">
											<div class="constainer" style="display: block">
												<label>
													<input class="with-gap" name="question2" type="radio" required />
													<span>A. Ya</span>
												</label>
												<label>
													<input class="with-gap" name="question2" type="radio" required />
													<span>B. Tidak</span>
												</label>
												<label>
													<input class="with-gap" name="question2" type="radio" required />
													<span>C. Bisa Jadi</span>
												</label>
												<label>
													<input class="with-gap" name="question2" type="radio" required />
													<span>D. Kepo</span>
												</label>
											</div>
										</td>
									</tr>
									<!--END QUESTION 2-->
								</tbody>
							</table>
							<div class="row">
								<div class="input-field col s12">
									<button class="btn cyan waves-effect waves-light right" type="submit" name="action">
										Submit Survey
										<i class="material-icons right">send</i>
									</button>
								</div>
							</div>
						</form>
						<!--END FORM SURVEY-->
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<script>
	$(document).ready(function() {
		$("#npm").keydown(function(e) {
			if (!($.isNumeric(String.fromCharCode(e.keyCode)) || e.keyCode == 8)) {
				e.preventDefault()
			}
		})
	})
</script>
