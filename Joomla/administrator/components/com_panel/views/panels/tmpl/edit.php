<?php
/**
 * @package		Joomla.Administrator
 * @subpackage	com_content
 * @copyright	Copyright (C) 2005 - 2012 Open Source Matters, Inc. All rights reserved.
 * @license		GNU General Public License version 2 or later; see LICENSE.txt
 */

// No direct access.
defined('_JEXEC') or die;
JHTML::_('behavior.calendar');
jimport( 'joomla.form.form' );
// Include the component HTML helpers.
JHtml::addIncludePath(JPATH_COMPONENT.'/helpers/html');

// Load the tooltip behavior.
JHtml::_('behavior.tooltip');
JHtml::_('behavior.formvalidation');
JHtml::_('behavior.keepalive');


?>

<link href="<?php echo 'includes'.DS.'jquery-ui-1.8.21.custom.css'; ?>" rel="stylesheet" type='text/css' />
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js">

</script>

<script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.21/jquery-ui.min.js">

</script>

<script type="text/javascript">
	$(function() {
		$( "#datepicker" ).datepicker({dateFormat: "yy-mm-dd"});

	});

</script>



<form action="/administrator/index.php?option=com_panel" name="adminForm" method="post" id="item-form" class="form-validate">
	
	<input type="hidden" name="task" value="">

	<div class="width-60 fltlft">
		<fieldset class="adminform">
			<legend>New Article</legend>
			<li>
				<label id="jform_title-lbl" for="jform_title" class="hasTip required" title="">Title<span class="star">&nbsp;*</span></label>
				<input type="test" name="title" id="title" value="" class="inputbox required" size="30" aria-required="true" requied="required" />

			</li>
			
			<li>
				<label id="jform_catid-lbl" for="jform_catid" class="hasTip required" title="" aria-invalid="false">Category<span class="star">&nbsp;*</span></label>

				<select id="category" name="category" class="inputbox required" aria-required="true" required="required" aria-invalid="false">
					<option value="men">Mens</option>
					<option value="womens">Womens</option>
					<option value="juniors">Juniors</option>
					<option value="master">Master</option>
					
				</select>

			</li>
			<li>
				<label id="jform_publish" for="jform_publish" class="hasTip required" title="" aria-invalid="false">Publish<span class="star">&nbsp;*</span></label>

				<select id="publish" name="publish" class="inputbox required" aria-required="true" required="required" aria-invalid="false">
					<option value="publish">Publish</option>
					<option value="unpublish">Unpublish</option>
				</select>

			</li>

			<li>
				<label id="jform_date-lbl" for="jform_date" class="hasTip required" title="">Date<span class="star">&nbsp;*</span></label>
				<input type="text" id="datepicker" name="date" />

			</li>
			

			<li>
				<div id="textContainer" style="width:462px; margin-top:50px;">
				<label id="jform_content-lbl" for="jform_content" class="hasTip required" title="">Content<span class="star">&nbsp;*</span></label>
				<div>
					<?php
				$editor =& JFactory::getEditor('tinymce');
				echo $editor->display('content','','450','400','60','20',false);
				?>

				</div>

			</div>
			</li>

			

			<div class="clr"></div>
			
			<div class="clr"></div>
			
			
		</fieldset>
	</div>


</form>