<section class="section section-default section-no-border mt-none">
					<div class="container">
						<div class="row mb-xl">
							<?php $melumat=haqqimizda(); foreach ($melumat as $melumat) {?>
						
							<div class="col-md-7">
								<h2 class="mt-xl mb-none"><?php echo $melumat['haqqimizda_basliq']; ?></h2>
								<div class="divider divider-primary divider-small mb-xl">
									<hr>
								</div>
								<p class="mt-lg" style="color: black;"><?php echo $melumat['haqqimizda-melumat']; ?></p>

							</div>
							<div class="col-md-4 col-md-offset-1">
								<h2 class="mt-xl mb-none">Öhdeliklerimiz</h2>
								<div class="divider divider-primary divider-small mb-xl">
								</div>
								<p class="mt-lg" style="color: black;">
								Hüquq — pozitiv və normativ hüquq nəzəriyyəsinə görə ictimai münasibətləri tənzimləyən, dövlətin müəyyənləşdirdiyi və sanksiyalaşdırdığı, dövlət tərəfindən qorunan, ümumməcburi davranış qaydalarının məcmusu, liberal hüquq nəzəriyyəsinə görə isə hər bir şəxs üçün bərabər azadlıq və ədaləti özündə nəzərdə tutan ...	</p>
							</div>
							<?php } ?>
						</div>
					</div>
				</section>