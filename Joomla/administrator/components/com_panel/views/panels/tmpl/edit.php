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

if(isset($this->oneNews)){
$eachNews = $this->oneNews;
$select = $eachNews[0][3];
$pubishNews = $eachNews[0][4];
$newsContent = $eachNews[0][2];
}

$id2 = $this->getNewsId();


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
	<input type="hidden" name="cid[]" value="<?php echo $id2; ?>">


	<div class="width-60 fltlft">
		<fieldset class="adminform">
			<legend>New Article</legend>
			<li>
				<label id="jform_title-lbl" for="jform_title" class="hasTip required" title="">Title<span class="star">&nbsp;*</span></label>
				<input type="test" name="title" id="title" value="<?php echo $eachNews[0][1]; ?>" class="inputbox required" size="30" aria-required="true" requied="required" />

			</li>
			
			<li>
				<label id="jform_catid-lbl" for="jform_catid" class="hasTip required" title="" aria-invalid="false">Category<span class="star">&nbsp;*</span></label>
				

				<select id="category" name="category" class="inputbox required" aria-required="true" required="required" aria-invalid="false" >
					<option value="mens" <?php if($select == "mens") {
													echo "selected='selected'";}?> >
					Mens</option>
					<option value="womens" <?php if($select == "womens") {
													echo "selected='selected'";}?>>
					Womens</option>
					<option value="juniors" <?php if($select == "juniors") {
													echo "selected='selected'";}?>>Juniors</option>
					<option value="master" <?php if($select == "masters") {
													echo "selected='selected'";}?>>Master</option>
					
				</select>

			</li>
			<li>
				<label id="jform_publish" for="jform_publish" class="hasTip required" title="" aria-invalid="false">Publish<span class="star">&nbsp;*</span></label>

				<select id="publish" name="publish" class="inputbox required" aria-required="true" required="required" aria-invalid="false">
					<option value="publish" <?php if($pubishNews == "publish") {
													echo "selected='selected'";}?> >Publish</option>
					<option value="unpublish" <?php if($pubishNews == "unpublish") {
													echo "selected='selected'";}?>>Unpublish</option>
				</select>

			</li>

			<li>
				<label id="jform_date-lbl" for="jform_date" class="hasTip required" title="">Date<span class="star">&nbsp;*</span></label>
				<input type="text" id="datepicker" name="date" value="<?php echo $eachNews[0][0]; ?>"/>

			</li>
			

			<li>
				<div id="textContainer" style="width:462px; margin-top:50px;">
				<label id="jform_content-lbl" for="jform_content" class="hasTip required" title="">Content<span class="star">&nbsp;*</span></label>
				<div >
					<?php
				$editor =& JFactory::getEditor('tinymce');
				echo $editor->display('content',$newsContent,'450','400','60','20',false);
				?>

				</div>

			</div>
			</li>

			

			<div class="clr"></div>
			
			<div class="clr"></div>
			
			
		</fieldset>
	</div>


</form>