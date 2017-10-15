<?php
	// $items = array_chunk($contents['items'], (12/$settings['columns']) );
	$items = array_chunk($contents['items'], 1);
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


		<?php foreach( $items as $videos ) :?>
			<div class="row">
				<?php foreach( $videos as $item ) :?>


			<?php if($item['description']):?>
				<!-- Section Sub Title -->
				<p class="section-desc text-center wow <?php echo $animation_title?>">
					<?php echo $item['description']?>
				</p>
			<?php endif; ?>

			<?php if($item['video_url']):?>
				<!-- Section Video Player -->
				 <div class="section-video text-center wow <?php echo $animation_item?>" data-wow-delay="<?php echo $animation_delay += 0.2 ?>s"> 
					<div class="embed-responsive embed-responsive-16by9">
    				<iframe class="embed-responsive-item" frameborder="0" allowfullscreen src="<?php echo $item['video_url'] ?>"></iframe>
					</div>
				 </div> 
			<?php endif; ?>


				<?php endforeach; ?>
			</div>
		<?php endforeach; ?>

			
		</article>
	</div>
</section>
