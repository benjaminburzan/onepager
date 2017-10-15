<?php
	// $items = array_chunk($contents['items'], (12/$settings['columns']) );
	$items = array_chunk($contents['items'], 1);
	$animation_title = ($settings['animation_title']) ? $settings['animation_title'] : '';
	$animation_item = ($settings['animation_item']) ? $settings['animation_item'] : '';
	// WOW JS Animation delay for repeater
	$animation_delay = 0.2;
?>
<section id="<?php echo $id?>" class="op-section contents content-8 full-screen">
	<div class="container">
		<article class="mr-big ml-big">
			<?php if($contents['title']):?>
				<!-- Section Title -->
				<h1 class="section-title text-center <?php echo $settings['title_transformation']?> wow <?php echo $animation_title?>">
					<?php echo $contents['title']?>
				</h1>
			<?php endif; ?>

			<div class="table-condensed section-table">
			<table class="table table-borderless">
    		<tbody>

				<!-- item -->
				<?php foreach( $items as $itemArray ) :?>
				<?php foreach( $itemArray as $item ) :?>

      		<tr>
        		<td><b><?php echo $item['titleKey']?></b></td>
        		<td><?php echo $item['description']?></td>
      		</tr>
    		
				<!-- item / -->
				<?php endforeach; ?>
				<?php endforeach; ?>

				</tbody>
			</table>	
			</div>

			
		</article>
	</div>
</section>
