<?php
/**
 * ------------------------------------------------------------------------
 * JA Rights Template
 * ------------------------------------------------------------------------
 * Copyright (C) Ziyal Amanya. All Rights Reserved.
 * @license - Copyrighted Commercial Software
 * Author: Ziyal Amanya
 * Websites:  http://www.buildal.ug -  http://www.ibabazamedia.com
 * This file may not be redistributed in whole or significant part.
 * ------------------------------------------------------------------------
 */
defined('_JEXEC') or die();
$count = $helper->getRows('title');
$columns = $helper->get('columns');
$column = 12 / $helper->get('columns');
$link = $helper->get('link');
$link = $helper->get('impact_text');
?>
<div class="craft-why">
<div id="acm-features-<?php echo $module->id; ?>" class="acm-features g-0 p-0 style-4">
<?php if ($helper->get('impact_text')): ?>
<div class="container">
	<h3 class="impact_text"><?php echo $helper->get('impact_text'); ?></h3>
</div>
<?php endif; ?>
	<div class="g-0 p-0">
		
		<?php for ($i = 0; $i < $count; $i++): ?>
			<?php if ($i % $columns == 0) {
       echo '<div class=" row g-0 equal-height-wrap-' . $module->id . '">';
   } ?>
				<div style="background-image: url('<?php echo $helper->get('img-intro', $i); ?>')" class="col-12 g-0 col-sm-12 col-md-6 col-lg-6 col-xl-<?php echo $column; ?>">
					<div class="features-inner <?php echo $i == 0 || $i % 2 == 0
         ? 'even'
         : 'odd'; ?>">
						<!--<?php if ($helper->get('img-intro', $i)): ?>
						<div class="g-0 p-0 equal-height features-intro">
							<img src="<?php echo $helper->get('img-intro', $i); ?>" alt="" />
						</div>
						<?php endif; ?>-->

						<div class="equal-height g-0 p-0 box features-item">
							<div class="inner">
<?php if ($helper->get('link', $i)): ?>
								<div class="btn-action">
									<h2>
										<?php echo $helper->get('link-title', $i); ?>
										
									</h2>
								</div>
							<?php endif; ?>
							
							<?php if ($helper->get('sub-title', $i)): ?>
								<div class="text-primary sub-title"><?php echo $helper->get(
            'sub-title',
            $i
        ); ?></div>
							<?php endif; ?>

							<?php if ($helper->get('title', $i)): ?>
								<div class="title"><h4><?php echo $helper->get('title', $i); ?></h4p></div>
							<?php endif; ?>
							
							<?php if ($helper->get('description', $i)): ?>
								<div class="desc"><p><?php echo $helper->get('description', $i); ?></p></div>
							<?php endif; ?>

							
														<?php if ($helper->get('img-icon', $i)): ?>
								<div class="img-icon mask-icon">
									<img src="<?php echo $helper->get('img-icon', $i); ?>" alt="" />
								</div>
							<?php endif; ?>
						</div>
						</div>
					</div>
				</div>
			<?php if ($i % $columns == $columns - 1 || $i == $count - 1) {
       echo '</div>';
   } ?>
		<?php endfor; ?>
	</div>
</div>
</div>
<script>
(function($){
  jQuery(document).ready(function($) {
    $('.equal-height-wrap-<?php echo $module->id; ?>').each(function(){  
      
      // Cache the highest
      var highestBox = 0;
      
      $('.equal-height', this).each(function(){
        if($(this).height() > highestBox) {
          highestBox = $(this).height(); 
        }
      });  
           
      $('.equal-height',this).height(highestBox);

      $(window).resize(function() {
      	$('.equal-height', this).each(function(){
	        if($(this).height() > highestBox) {
	          highestBox = $(this).height(); 
	        }
	      });  
	           
	      $('.equal-height',this).height(highestBox);
      })    
    }); 
  });
})(jQuery);
</script>