
				<section class="section section-background section-footer" style="background-image: url(https://www.ebilisim.org/wp-content/uploads/2017/08/69664660-lawyer-wallpapers.jpg); background-position: 50% 100%;" style="backgrodund-color: ##F5F5F5;">
					<div class="container">
						<div class="row">
							<div class="col-md-6 col-md-offset-6">
								<h2 class="mt-xl mb-none">Pulsuz Meslehet İsteyirik</h2>
                                                                                      
								<p>Hüquqi məsələlərinizə tam həllər üçün təcrübəli komandamızla məsləhətləşin. </p>

                                                                                                                   
								<div class="divider divider-primary divider-small mb-xl">
									<hr>
								</div>
								<form  action="<?php echo base_url('anasehife/pulsuzmesaj'); ?>" method="POST">
									<div class="row">
										<p><?php echo $this->session->flashdata('status'); ?></p>
										<div class="form-group">
											<div class="col-sm-6">
												<input type="text" value="" placeholder="Adiniz" data-msg-required="Please enter your name." maxlength="100" class="form-control" name="adi" id="name" required>
											</div>
											<div class="col-sm-6">
												<input type="email" value="" placeholder="Email adresiniz *" data-msg-required="Please enter your email addressiniz." data-msg-email="Please enter a valid email address." maxlength="100" class="form-control" name="email" id="email" required>
											</div>
										</div>
									</div>
									<div class="row">
										<div class="form-group">
											<div class="col-md-12">
												<input type="text" value="" placeholder="Movzu" data-msg-required="Please enter the subject." maxlength="100" class="form-control" name="movzu" id="subject" required>
											</div>
										</div>
									</div>
									<div class="row">
										<div class="form-group">
											<div class="col-md-12">
												<textarea maxlength="5000" placeholder="Mesaj *" data-msg-required="Please enter your message." rows="3" class="form-control" name="mesaj" id="message" required></textarea>
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col-md-12">
											<input type="submit" value="Mesaj Gonder" class="btn btn-primary mb-xl" data-loading-text="Gozleyin...">
											

		
										</div>
									</div>
								</form>

							</div>
						</div>
					</div>
				</section>
