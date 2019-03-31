<div role="main" class="main">
				<div class="container">
					<div class="row pt-xl">
						<div class="col-md-7">
							<h1 class="mt-xl mb-none">Bizimle Elaqe </h1>
							<div class="divider divider-primary divider-small mb-xl">
								<hr>
								<?php echo $this->session->flashdata('status'); ?>
							</div>
							<p class="lead mb-xl mt-lg">Sirketle Elaqe yaratmaqcin asaqidaki formu doldurmaqiniz lazimdir </p>

							<div class="alert alert-success hidden mt-lg" id="contactSuccess">
								<strong>Success!</strong> Your message has been sent to us.
							</div>

							<div class="alert alert-danger hidden mt-lg" id="contactError">
								<strong>Error!</strong> There was an error sending your message.
								<span class="font-size-xs mt-sm display-block" id="mailErrorMessage"></span>
							</div>

							<form  action="<?php echo base_url('anasehife/mesaj'); ?>" method="post">
								<div class="row">
									<div class="form-group">
										<div class="col-md-12">
											<input type="text" placeholder="Adınız" value="" data-msg-required="Please enter your name." maxlength="100" class="form-control input-lg" name="adi" id="name" required>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="form-group">
										<div class="col-md-12">
											<input type="email" placeholder="E-mail adresiniz" value="" data-msg-required="Please enter your email address." data-msg-email="Please enter a valid email address." maxlength="100" class="form-control input-lg" name="email" id="email" required>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="form-group">
										<div class="col-md-12">
											<input type="text" placeholder="Mövzu" value="" data-msg-required="Please enter the subject." maxlength="100" class="form-control input-lg" name="movzu" id="subject" required>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="form-group">
										<div class="col-md-12">
											<textarea maxlength="5000" placeholder="Mesaj" data-msg-required="Please enter your message." rows="5" class="form-control input-lg" name="mesaj" id="message" required></textarea>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-md-12">
										<input type="submit" value="Mesaj Gönder" class="btn btn-primary btn-lg mb-xlg" data-loading-text="gozleyin...">
									</div>
								</div>
							</form>

						</div>
						<div class="col-md-4 col-md-offset-1">

							<h4 class="mt-xl mb-none">Bizim Unvan:</h4>
							<div class="divider divider-primary divider-small mb-xl">
								<hr>
							</div>

<?php $melumat=elaqe();foreach ($melumat as $melumat) {?>

							<ul class="list list-icons list-icons-style-3 mt-xlg mb-xlg">
								<li><i class="fa fa-map-marker"></i> <strong>Unvan:</strong><?php echo $melumat['adres']; ?> </li>
								<li><i class="fa fa-phone"></i> <strong>Telefon:</strong><?php echo $melumat['tel']; ?></li>
								<li><i class="fa fa-envelope"></i> <strong>Email:</strong> <a href="zekamemmedov18.gmail.com"><?php echo $melumat['mail']; ?></a></li>
							</ul>

							<h4 class="pt-xl mb-none">Is vaxti</h4>
							<div class="divider divider-primary divider-small mb-xl">
								<hr>
							</div>

							<ul class="list list-icons list-dark mt-xlg">
								<li><i class="fa fa-clock-o"></i> <?php echo $melumat['is_vaxti']; ?></li>
								<?php } ?>
							</ul>

						</div>
					</div>
				</div>

				<!-- Google Maps - Go to the bottom of the page to change settings and map location. -->
			<!--	<div id="googlemaps" class="google-map google-map-footer">
					<iframe 
					width="100%"
					height="100%"
					frameborder="0" style="border:0" 
					src="https://www.google.com/maps/embed/v1/place?key=<?php //echo $ayarcek['ayar_googlemap']; ?>
					&q=<?php// echo $ayarcek['ayar_adres']; ?>" allowfullscreen>
					
					</iframe>
				-->
					




				</div>
			</div>