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
$column = $helper->get('columns');
$ftAlign = $helper->get('align');
$imageType = $helper->get('image-type');

$colItem = 'col-12 col-sm-6 col-lg-' . 12 / $column;

if ($column == 4) {
    $colItem = 'col-12 col-lg-6 col-xl-' . 12 / $column;
} elseif ($column == 3) {
    $colItem = 'col-12 col-md-12 col-lg-' . 12 / $column;
}
?>

<div class="acm-features style-2 media-<?php echo $imageType; ?>">
	<div class="container">
		<?php for ($i = 0; $i < $count; $i++): ?>
			<?php if ($i % $column == 0): ?>
				<div class="row text-<?php echo $ftAlign; ?> cols-<?php echo $column; ?> d-flex justify-content-center v-gutters">
			<?php endif; ?>

				<div class="<?php echo $colItem; ?>">
					<div class="features-item <?php if (!$helper->get('link', $i)) {
         echo 'no-link';
     } ?>">
						<div class="item-inner">
							<?php if ($helper->get('img-icon', $i)): ?>
								<div class="img-icon">
									<img src="<?php echo $helper->get('img-icon', $i); ?>" alt="" />
								</div>
							<?php endif; ?>

							<?php if ($helper->get('sub-title', $i)): ?>
								<div class="section-title h3">
									<?php echo $helper->get('sub-title', $i); ?>
								</div>
							<?php endif; ?>
							
							<?php if ($helper->get('title', $i)): ?>
								<div class="main-heading <?php echo $helper->get('sub-title', $i)
            ? 'has-leaf'
            : ''; ?>">
									<h4>
										<?php if ($helper->get('link', $i)): ?>
											<a href="<?php echo $helper->get('link', $i); ?>" class="link-heading">
										<?php endif; ?>

										<?php echo $helper->get('title', $i); ?>

										<?php if ($helper->get('link', $i)): ?>
											</a>
										<?php endif; ?>
									</h4>
								</div>
							<?php endif; ?>
							
							<?php if ($helper->get('description', $i)): ?>
								<p class="pr-sm-3 mb-0"><?php echo $helper->get('description', $i); ?></p>
							<?php endif; ?>

							<?php if ($helper->get('link', $i) && $helper->get('ft-btn-title', $i)): ?>
								<div class="link-action">
									<a class="<?php echo $helper->get('ft-btn-type', $i) .
             ' ' .
             $helper->get(
                 'ft-btn-color',
                 $i
             ); ?>" href="<?php echo $helper->get('link', $i); ?>">
										<?php echo $helper->get('ft-btn-title', $i); ?>
										<span class="fas fa-arrow-right"></span>
									</a>
								</div>
							<?php endif; ?>
						</div>
					</div>
				</div>

			<?php if ($i % $column == $column - 1 || $i == $count - 1) {
       echo '</div>';
   } ?>
		<?php endfor; ?>
	</div>
</div>