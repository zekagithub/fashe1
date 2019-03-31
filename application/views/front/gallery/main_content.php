<div role="main" class="main">

				<div class="container">

					<div class="row pt-xl">

						<div class="col-md-9">

							<h1 class="mt-xl mb-none">Gallery</h1>
													 <?php $melumat=gallery();foreach ($melumat as $melumat) {?>

							                 
							<div class="divider divider-primary divider-small mb-xl">

							</div>
                  
							<div class="row">


									<img alt='<?php echo $melumat['sekil_basliq']; ?>' width='320' height='190' src='<?php echo base_url();echo $melumat['sekil']; ?>'><br>
									<p> <?php echo $melumat['sekil_text']; ?></p>
									<hr>

                          
								
							</div>
																<?php } ?>


						</div>



						
					</div>


				</div>

			</div>