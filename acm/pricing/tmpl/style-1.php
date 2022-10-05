<?php
/**
 * ------------------------------------------------------------------------
 * CRAFTY Design
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
$column = $helper->get('num-items');
$bottomDesc = $helper->get('bottom-desc');

$colItem = 'col-12';

if ($column == 2) {
    $colItem = 'col-12 col-lg-6 col-xl-' . 12 / $column;
} elseif ($column == 3) {
    $colItem = 'col-12 col-md-12 col-lg-' . 12 / $column;
}
?>

<div class="acm-pricing style-1">
	<div class="container">
		<div class="row cols-<?php echo $column; ?> d-flex justify-content-center v-gutters">
			<?php for ($i = 0; $i < $count; $i++): ?>
					<div class="<?php echo $colItem; ?>">
						<div class="pricing-item">
							<div class="item-inner">
								<?php if ($helper->get('img-intro', $i)): ?>

								<?php endif; ?>

								<div class="pricing-content">
																		<div class="img-intro">
										<img src="<?php echo $helper->get('img-intro', $i); ?>" alt="" />
									</div>
									
																			<?php if ($helper->get('price', $i)): ?>
										<h4 class="p text-secondary">
											<?php echo $helper->get('price', $i); ?>
										</h4>
										<?php endif; ?>

									<?php if ($helper->get('desc', $i)): ?>
									<div class="pricing-desc">
										<?php echo $helper->get('desc', $i); ?>
									</div>
									<?php endif; ?>

									<?php if ($helper->get('btn-link', $i) || $helper->get('btn-title', $i)): ?>
									<div class="pricing-action">
										<a target="new" class="p" href="<?php echo $helper->get(
              'btn-link',
              $i
          ); ?>" title="">
											<?php echo $helper->get('btn-title', $i); ?>
										</a>
									</div>
									<?php endif; ?>

									<?php if ($helper->get('plan-list', $i)): ?>
									<div class="pricing-plan-list">
										<?php echo $helper->get('plan-list', $i); ?>
									</div>
									<?php endif; ?>
								</div>
							</div>
						</div>
					</div>
			<?php endfor; ?>
		</div>

		<?php if ($bottomDesc): ?>
			<div class="bottom-desc">
				<?php echo $bottomDesc; ?>
			</div>
		<?php endif; ?>
	</div>
</div>