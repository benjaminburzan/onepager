<?php
	$items = array_chunk($contents['items'], (12/$settings['columns']) );
	$animation_title = ($settings['animation_title']) ? $settings['animation_title'] : '';
	$animation_item = ($settings['animation_item']) ? $settings['animation_item'] : '';
	// WOW JS Animation delay for repeater
	$animation_delay = 0.2;
?>
<section id="<?php echo $id?>" class="op-section contents content-6 full-screen">
	<div class="container">
		<article class="mr-big ml-big">
			<?php if($contents['title']):?>
				<!-- Section Title -->
				<h1 class="section-title text-center <?php echo $settings['title_transformation']?> wow <?php echo $animation_title?>">
					<?php echo $contents['title']?>
				</h1>
			<?php endif; ?>

			<?php if($contents['description']):?>
				<!-- Section Sub Title -->
				<p class="section-desc text-center wow <?php echo $animation_title?>">
					<?php echo $contents['description']?>
				</p>
			<?php endif; ?>

			<?php if($contents['image']):?>
				<!-- Section Video Player -->
				 <div class="text-center wow <?php echo $animation_item?>" data-wow-delay="<?php echo $animation_delay += 0.2 ?>s">
							<img class="op-media img-responsive center-block" src="<?php echo $contents['image'] ?>" alt="<?php echo $contents['title']?>" />
				 </div> 
			<?php endif; ?>
			
		</article>
	</div>
</section>
