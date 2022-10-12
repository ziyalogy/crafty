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

defined('_JEXEC') or die;

$count = $helper->count('gallery-image');
$col = $helper->get('number_col');
$galleryLink = $helper->get('gallery_link');
$galleryTitle = $helper->get('gallery_title');
?>
<div id="acm-gallery-<?php echo $module->id ;?>" class="acm-gallery style-1 clearfix">
  <div class="owl-carousel owl-theme">
		<?php
      for ($i=0; $i < $count; $i++) :
    ?>
		<div class="item">
      <div class="item-inner">
          <img src="<?php echo $helper->get('gallery-image', $i); ?>" alt="" />
      </div>
		</div>
		<?php endfor; ?>
  </div>
</div>

<script>
(function($){
  jQuery(document).ready(function($) {
    $("#acm-gallery-<?php echo $module->id; ?> .owl-carousel").owlCarousel({
      items: <?php echo $col ;?>,
      loop: true,
      singleItem : false,
      itemsScaleUp : true,
      navigation : false,
      dots: false,
      navigationText : ["<i class='fa fa-angle-left'></i>", "<i class='fa fa-angle-right'></i>"],
      mergeFit: true,
      slideBy: 1,
      autoplay: <?php echo $helper->get('auto_play') ? 'true' : 'false' ;?>,
      slideTransition: 'linear',
      autoplaySpeed: <?php echo $helper->get('auto_time');?>,
      autoplayHoverPause: true,
      margin: 0,
      responsive : {
        // breakpoint from 0 up
        0 : {
          items: 1,
          margin: 0
        },

        // breakpoint from 480 up
        480 : {
          items: 2,
          margin: 0
        },

        // breakpoint from 768 up
        768 : {
          items: 3,
          margin: 0
        },

        // breakpoint from 992 up
        992 : {
          items: <?php echo $col ;?>,
          margin: 0
        },

        // breakpoint from 1440 up
        1440 : {
          items: <?php echo $col ;?>
        }
      }
    });
  });
})(jQuery);
</script>