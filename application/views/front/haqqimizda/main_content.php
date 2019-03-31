
			<div role="main" class="main">
				<div class="container">
					<div class="row pt-xl">
						<div class="col-md-7">
							<?php $melumat=haqqimizda();foreach ($melumat as $melumat) {?>
								
							<h1 class="mt-xl mb-none"><?php echo $melumat['haqqimizda_basliq']; ?></h1>
							<div class="divider divider-primary divider-small mb-xl">
								<hr>
								<p><?php echo $melumat['haqqimizda-melumat']; ?></p>
							</div>
                         <?php } ?>
						</div>
						<div class="col-md-4 col-md-offset-1">

							<h4 class="mt-xl mb-none">Sirket Haqqinda</h4>
							<div class="divider divider-primary divider-small mb-xl">
								<hr>
							</div>

							<div class="embed-responsive embed-responsive-16by9 mb-xl">
								<iframe width="200" height="113" src="https://www.youtube.com/embed/ktb8l7Xt9Oc" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
							</div>

							
							<h4 class="mt-xlg">Tariximiz</h4>

							<div class="divider divider-primary divider-small mb-xl">
								<hr>
							</div>

							<ul class="list list-unstyled list-primary list-borders">
								<li class="pt-sm pb-sm"><strong class="text-color-primary font-size-xl">05-04-2018 </strong> Şirketin Zeka Memmedov terefinden qurulmasi</li>
								
							</ul>

						</div>
					</div>
				</div>
			</div>