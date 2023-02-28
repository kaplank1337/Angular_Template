<?php include 'header.php'; ?>

<body>
	<section class="py-3">
		<div class="container col-xl-10 col-xxl-8 px-4 py-5">
			<h1 class="display-4 fw-bold lh-1 mb-3">Support Ticket </h1>
			<div class="row align-items-center g-lg-5 py-5">
				<div class="col-lg-7 text-center text-lg-start" style="height:450px;">
					<p class="col-lg-10 fs-4">Vielen Dank für das Erstellen eines Tickets. Ich werde mich in Kürze bei dir via E-Mail oder telefonisch melden.</p>
				</div>
				<div class="col-md-10 mx-auto col-lg-5" style="margin: auto;">
					<div class="form-floating mb-3">
						<!-- value kismina mail adresin gelicek -->
						<input  type="email" id="e-mail-adresse" name="e-mail-adresse" onblur="this.value = (this.value == '' ? 'Vorname.Nachname@Beispiel.com' : this.value);" onclick="this.value=(this.value == 'Vorname.Nachname@Beispiel.com' ? '' : this.value);" onfocus="this.select()" style="background:none;" class="form-control" id="floatingInput" value="Vorname.Nachname@Beispiel.com">
						<label  for="floatingInput">Ihre E-Mail Adresse</label>
					</div>
					<div class="form-floating mb-3">
						<!-- value kismina mail adresin gelicek -->
						<textarea type="email" style="background:none; height: 200px;" class="form-control" id="text_anliegen" value="name@example.com"></textarea>
						<label for="floatingInput">Ihr Anliegen</label>
					</div>
					<div class="form-floating mb-3">
						<!-- value kismina mail adresin gelicek -->
						<button class="btn btn-outline btn-block" id="button-send" style="width: 100%;">Send</button>
					</div>
					<hr class="my-4">
					<small class="text-muted">Falls Sie im Anschluss mit meiner Dienstleistung zufrieden sind wäre ich froh, falls Sie mein Angebot im Umfeld weiterempfehlen würden.</small>
					<img src="https://blog.readyplanet.com/images/editor/webchat_online-5-edit1.png" style="float:right; position: absolute; z-index: -1;width: 15%; top:20%;opacity: 0.4; float: right; right: 0;">
				</div>
			</div>
		</div>
	</section>
</body>
<div class="footer">
	<?php include 'footer.php'; ?>
</div>