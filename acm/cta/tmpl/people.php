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
// MODULE CONFIG
$moduleTitle = $module->title;
$count = $helper->getRows('data.icon');
$count = $helper->getRows('data.person_photo');
?>

<div class="acm-cta craft-directory style-1">
	<div class="container">
		<div class="cta-wrap bg-<?php echo $helper->get('bg-content'); ?>">
			<div class="cta-inner">
				<h3><?php echo $moduleTitle; ?></h3>

				<?php if ($helper->get('cta-desc')): ?>
					<div class="cta-desc">
						<?php echo $helper->get('cta-desc'); ?>
					</div>
				<?php endif; ?>

				<div class="row row-cols-1 row-cols-md-3 list-info-cta">
					<?php for ($i = 0; $i < $count; $i++): ?>
						<div class="col d-flex mt-3 mt-md-0">
							<?php if ($helper->get('data.person_photo', $i)): ?>
							<div class="font-icon">
								<img src="<?php echo $helper->get('data.person_photo', $i); ?>" alt="<?php echo $helper->get('data.title', $i); ?>" />
							</div>
							<?php endif; ?>

							<?php if ($helper->get('data.title', $i) || $helper->get('data.link', $i)): ?>
							<div class="info-contact">
								<?php if ($helper->get('data.title', $i)): ?>
								<div class="cta-content h4">
									<b><?php echo $helper->get('data.title', $i); ?></b>
								</div>
								<?php endif; ?>

                                <?php if ($helper->get('data.pobox', $i)): ?>
								<div class="cta-label h4">
									<?php echo $helper->get('data.pobox', $i); ?>
								</div>
								<?php endif; ?>

								<?php if ($helper->get('data.link', $i)): ?>
								<div class="cta-content">
									<a class="" target="new" href="<?php echo $helper->get(
             'data.link',
             $i
         ); ?>" title="">
										<?php echo $helper->get('data.link-title', $i); ?>
									</a>
								</div>
								<?php endif; ?>
							</div>
							<?php endif; ?>
						</div>
					<?php endfor; ?>
				</div>
			</div>
		</div>
	</div>
</div>
