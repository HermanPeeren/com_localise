<?php defined('_JEXEC') or die('Restricted access');

/**
 * @version		$Id: default.php 209 2010-03-08 11:05:34Z chdemko $
 * @copyright   Copyright (C) 2009 - today Localise Team. All rights reserved.
 * @license     http://www.gnu.org/licenses/gpl-2.0.html GNU/GPL
 * @package		Extensions.Components
 * @subpackage	Localise
 */
JHtml::_('behavior.tooltip');
JHtml::_('stylesheet','com_localise/localise.css', null, true);
?>
<form action="<?php echo JRoute::_('index.php?option=com_localise&view=languages');?>" method="post" name="adminForm" id="localise-languages-form">
	<?php echo $this->loadTemplate('filter'); ?>
	<table class="adminlist">
		<thead><?php echo $this->loadTemplate('head'); ?></thead>
		<tfoot><?php echo $this->loadTemplate('foot'); ?></tfoot>
		<tbody><?php echo $this->loadTemplate('body'); ?></tbody>
	</table>
	<input type="hidden" name="boxchecked" value="0" />
	<input type="hidden" name="task" value="" />
	<input type="hidden" name="filter_order" value="" />
	<input type="hidden" name="filter_order_Dir" value="<?php echo $this->state->get('list.direction'); ?>" />
	<?php echo JHtml::_('form.token'); ?>
</form>

