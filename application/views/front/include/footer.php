
			<footer class="short" id="footer">
				<div class="container">
					<div class="row">
						<div class="col-md-5">
							<a href="demo-law-firm.html" class="logo mb-md">
								<img alt="Porto Website Template" class="img-responsive" width="97" height="32" src="img/demos/law-firm/logo-law-firm-footer.png">
							</a>
							<p style="color: white;">Biz musterilerimizin daim huquqlarinin qorunmasiyla bagli problemlerini hell ediriik</p>
						</div>
						<?php $melumat=elaqe_ayarlari();foreach ($melumat as $melumat ) {?>
						
						<div class="col-md-3 col-md-offset-1">
							<h5 class="mb-sm">Unvan</h5>
							<ul class="list list-icons mt-xl">
								<li style="color: white;"><i class="fa fa-map-marker"></i> Address:&nbsp;&nbsp;&nbsp;<?php echo $melumat['adres']; ?></li>
								<li style="color: white;"><i class="fa fa-envelope"></i> Mail:&nbsp;&nbsp;&nbsp;<a href=""><?php echo $melumat['mail']; ?></a></li>
							</ul>
						</div>
					
						<div class="col-md-3">
							<h5 class="mb-sm">Firma ile elaqe</h5>
							<hr>
							<span class="phone"><?php echo  $melumat['tel'];?></span>
							<ul class="social-icons mt-lg">
								<li class="social-icons-facebook"><a href="" target="_blank" title="Facebook"><i class="fa fa-facebook"></i></a></li>
								<li class="social-icons-twitter"><a href="" target="_blank" title="Twitter"><i class="fa fa-twitter"></i></a></li>
								<li class="social-icons-linkedin"><a href="" target="_blank" title="Linkedin"><i class="fa fa-youtube"></i></a></li>
							</ul>
						</div>
					</div>
				</div>
					<?php } ?>
				<div class="footer-copyright">
					<div class="container">
						<div class="row">
							<div class="col-md-12">
								<p style="color: white;">© Copyright 2018. Bütün hüquqları qorunur.&nbsp;&nbsp;&nbsp; <a href="http://google.com" target="_blank">Porto Hüquq Şirkəti</a></p>
							</div>
						</div>
					</div>
				</div>
			</footer>