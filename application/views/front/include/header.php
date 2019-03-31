	<header id="header" class="header-no-border-bottom" data-plugin-options='{"stickyEnabled": true, "stickyEnableOnBoxed": true, "stickyEnableOnMobile": true, "stickyStartAt": 115, "stickySetTop": "-115px", "stickyChangeLogo": false}'>
				<div class="header-body">
					<div class="header-container container">
						<div class="header-row" >
							<div class="header-column">
								<div class="header-logo" >
									<a href="<?php echo base_url(); ?>" >
										<img alt="Porto" width="164" height="54" data-sticky-width="82" data-sticky-height="40" data-sticky-top="33" src="<?php echo base_url('assets/front/'); ?>img/demos/law-firm/logo-law-firm.png">
									</a>
								</div>
							</div>
							<div class="header-column">
								<ul class="header-extra-info">
									<li>
										<div class="feature-box feature-box-call feature-box-style-2">
											<div class="feature-box-icon">
												<i class="icon-call-end icons"></i>
											</div>
								<?php $melumat=elaqe_ayarlari();foreach ($melumat as $melumat) {?>
											
											<div class="feature-box-info">
												<h4 class="mb-none"><?php echo $melumat['tel'] ?></h4>
											</div>
										</div>
									</li>
									<li class="hidden-xs">
										<div class="feature-box feature-box-mail feature-box-style-2">
											<div class="feature-box-icon">
												<i class="icon-envelope icons"></i>
											</div>
											<div class="feature-box-info">
												<h4 class="mb-none"><a href="mailto:mail@example.com"><?php echo $melumat['mail']; ?></a></h4>
											</div>
										</div>
									</li>
								</ul>
							</div>
						</div>
					</div>
					<?php } ?>
					<div class="header-container header-nav header-nav-bar header-nav-bar-primary">
						<div class="container">
							<button class="btn header-btn-collapse-nav" data-toggle="collapse" data-target=".header-nav-main">
								Menu <i class="fa fa-bars"></i>
							</button>
							<div class="header-search visible-lg">
								<form id="searchForm" action="page-search-results.html" method="get">
									<div class="input-group">
										<input type="text" class="form-control" name="q" id="q" placeholder="Axtarin" required>
										<span class="input-group-btn">
											<button class="btn btn-default" type="submit"><i class="icon-magnifier icons"></i></button>
										</span>
									</div>
								</form>
							</div>
							<div class="header-nav-main header-nav-main-light header-nav-main-effect-1 header-nav-main-sub-effect-1 collapse">
								<nav>
									<ul class="nav nav-pills" id="mainNav">
										<li><a href="<?php echo base_url(); ?>">hesen</a></li>
										<li><a href="<?php echo base_url('anasehife/haqqimizda'); ?>">zeka</a></li>
										<li><a href="<?php echo base_url('anasehife/xeberler'); ?>">Xeberler</a></li>
										<li><a href="<?php echo base_url('anasehife/gallery'); ?>">Gallery</a></li>
										<li><a href="<?php echo base_url('anasehife/elaqe'); ?>">Elaqe</a></li>

									</ul>
								</nav>
							</div>
						</div>
					</div>
				</div>
			</header>