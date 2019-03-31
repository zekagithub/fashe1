	<div role="main" class="main">
				<div class="container">
					<div class="row pt-xl">

						<div class="col-md-9">

							<h2 class="mt-xl mb-none">Əsas Xəbərlər</h2>
					 <?php $melumat=xeberler();foreach ($melumat as $melumat ) {?>

					<img alt='<?php echo $melumat['xeber_basliq']; ?>' width='320' height='190' src='<?php echo base_url();echo $melumat['xeber_sekilurl']; ?>'>

							<h4><?php echo $melumat['xeber_basliq'] ?></h4>
							<div class="divider divider-primary divider-small mb-xl">
								<hr>
							</div>
              
							<div class="row">
								<p><?php echo $melumat['xeber']; ?></p>

                                
								
								<!--xeberin bitisi-->
								
							</div>
<?php } ?>

						</div>

						<div class="col-md-3">
							<aside class="sidebar">
								<div id="combinationFilters" class="filters">

									<h4 class="mt-xl mb-md">Təcrübə sahəsi:</h4>
									<ul class="nav nav-list mb-xlg sort-source team-filter-group" data-filter-group="group1">
										<li data-option-value=".criminal-law"><a href="#">Cəza Qanunu</a></li>
										<li data-option-value=".business-law"><a href="#">Biznes qanunu</a></li>
										<li data-option-value=".divorce-law"><a href="#">Boşanma Qanunu</a></li>
										<li data-option-value=".health-law"><a href="#"> Sağlamlıq Qanunu</a></li>
										<li data-option-value=".capital-law"><a href="#">Kapital Qanunu</a></li>
									</ul>

							

								</div>

										</div>
									</div>

							</aside>
						</div>
					</div>

				</div>
			</div>