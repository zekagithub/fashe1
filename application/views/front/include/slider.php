<div class="slider-container rev_slider_wrapper" style="height: 650px;">
					<div id="revolutionSlider" class="slider rev_slider manual">
						<?php $melumat=slider();foreach ($melumat as $melumat) {?>
						
						<ul>
							<li data-transition="zoom" data-title="Advocate Team" >
								<img src="<?php echo $melumat['slider_sekil']; ?>"  
									alt=""
									data-bgposition="center center" 
									data-bgfit="cover" 
									data-bgrepeat="no-repeat"
									class="rev-slidebg">
								<div class="tp-caption top-label"
									data-x="right" data-hoffset="100"
									data-y="center" data-voffset="-95"
									data-start="1000"
									style="z-index: 5"
									data-transform_in="y:[-300%];opacity:0;s:500;">Güveneciyiniz</div>
								<div class="tp-caption main-label"
									data-x="right" data-hoffset="100"
									data-y="center" data-voffset="-45"
									data-start="1500"
									data-whitespace="nowrap"						 
									data-transform_in="y:[100%];s:500;"
									data-transform_out="opacity:0;s:500;"
									style="z-index: 5"
									data-mask_in="x:0px;y:0px;">HÜQUQ ŞİRKETİ</div>
								<div class="tp-caption bottom-label"
									data-x="right" data-hoffset="100"
									data-y="center" data-voffset="5"
									data-start="2000"
									style="z-index: 5"
									data-transform_in="y:[100%];opacity:0;s:500;">Problemlerinizi tecrübeli komandamızla bölüşün</div>
								<a class="tp-caption btn btn-primary btn-lg"
									data-hash
									data-hash-offset="85"
									href="<?php echo base_url('anasehife/elaqe'); ?>"
									data-x="right" data-hoffset="100"
									data-y="center" data-voffset="80"
									data-start="2500"
									data-whitespace="nowrap"						 
									data-transform_in="y:[100%];s:500;"
									data-transform_out="opacity:0;s:500;"
									style="z-index: 5"
									data-mask_in="x:0px;y:0px;">Ödənişsiz məsləhət istəyi</a>
							</li>	
						</ul>
						<?php } ?>
					</div>
				</div>