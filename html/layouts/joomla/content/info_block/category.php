<?php
/**
 * @package     Joomla.Site
 * @subpackage  Layout
 *
 * @copyright   Copyright (C) 2005 - 2021 Open Source Matters, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

defined('JPATH_BASE') or die;

use Joomla\CMS\Language\Text;
use Joomla\CMS\Router\Route;

?>
<dd class="category-name">
	<?php $title = $this->escape($displayData['item']->category_title); ?>
	<?php if ($displayData['params']->get('link_category') && !empty($displayData['item']->catid)) : ?>
		<?php 
		if(empty($displayData['item']->category_language)) $displayData['item']->category_language = "*";
		$url = '<a href="' . Route::_(
			ContentHelperRoute::getCategoryRoute($displayData['item']->catid, $displayData['item']->category_language)
			)
			. '" itemprop="genre">' . $title . '</a>'; ?>
		<?php echo Text::sprintf( $url); ?>
	<?php else : ?>
		<?php echo Text::sprintf('<span itemprop="genre">' . $title . '</span>'); ?>
	<?php endif; ?>
</dd>