<?php

defined('_JEXEC') or die;

JHtml::addIncludePath(JPATH_COMPONENT.'/helpers/html');
JHtml::_('behavior.tooltip');
JHtml::_('behavior.multiselect');

?>

<?php 
$value = $this->value;

 ?>
<style type="text/css">
	
</style>

<form action="/administrator/index.php?option=com_panel" name="adminForm" method="post" id="adminForm">
	
	<table class="adminlist">
	<thead>
		<tr>
			<th width="1%">
				<input type="checkbox" name="checkall-toggle" value="" title="Check All" onclick="Joomla.checkAll(this)" />
			</th>
			
			<th width="25%">
				Title
			</th>
			
			<th width="15%">
				Date
			</th>
			
			<th width="15%">
				Content
			</th>

			<th width="15%">
				Catalogy
			</th>
			
			<th width="15%">
				Status
			</th>
		</tr>
	</thead>

	<tbody>
		<tr class="row0">
			<td class="center">
				<input type="checkbox" id="cb0" name="cid[]" value="<?php echo $value[0][0]; ?>" onclick="Joomla.isChecked(this.checked);" title="Checkbox for row 1">
			</td>
			<td class="center"><?php echo $value[0][2]; ?></td>
			<td class="center"><?php echo $value[0][1]; ?></td>
			<td class="center"><?php echo $value[0][3]; ?></td>
			<td class="center"><?php echo $value[0][4]; ?></td>
			<td class="center"><?php echo $value[0][5]; ?></td>
		</tr>

		<tr class="row1">
			<td class="center">
				<input type="checkbox" id="cb1" name="cid[]" value="<?php echo $value[1][0]; ?>" onclick="Joomla.isChecked(this.checked);" title="Checkbox for row 2">
			</td>
			<td class="center"><?php echo $value[1][2]; ?></td>
			<td class="center"><?php echo $value[1][1]; ?></td>
			<td class="center"><?php echo $value[1][3]; ?></td>
			<td class="center"><?php echo $value[1][4]; ?></td>
			<td class="center"><?php echo $value[1][5]; ?></td>
		</tr>

		<tr class="row2">
			<td class="center">
				<input type="checkbox" id="cb2" name="cid[]" value="<?php echo $value[2][0]; ?>" onclick="Joomla.isChecked(this.checked);" title="Checkbox for row 3">
			</td>
			<td class="center"><?php echo $value[2][2]; ?></td>
			<td class="center"><?php echo $value[2][1]; ?></td>
			<td class="center"><?php echo $value[2][3]; ?></td>
			<td class="center"><?php echo $value[2][4]; ?></td>
			<td class="center"><?php echo $value[2][5]; ?></td>
		</tr>

		<tr class="row3">
			<td class="center">
				<input type="checkbox" id="cb3" name="cid[]" value="<?php echo $value[3][0]; ?>" onclick="Joomla.isChecked(this.checked);" title="Checkbox for row 4">
			</td>
			<td class="center"><?php echo $value[3][2]; ?></td>
			<td class="center"><?php echo $value[3][1]; ?></td>
			<td class="center"><?php echo $value[3][3]; ?></td>
			<td class="center"><?php echo $value[3][4]; ?></td>
			<td class="center"><?php echo $value[3][5]; ?></td>
		</tr>

		<tr class="row4">
			<td class="center">
				<input type="checkbox" id="cb4" name="cid[]" value="<?php echo $value[4][0]; ?>" onclick="Joomla.isChecked(this.checked);" title="Checkbox for row 5">
			</td>
			<td class="center"><?php echo $value[4][2]; ?></td>
			<td class="center"><?php echo $value[4][1]; ?></td>
			<td class="center"><?php echo $value[4][3]; ?></td>
			<td class="center"><?php echo $value[4][4]; ?></td>
			<td class="center"><?php echo $value[4][5]; ?></td>
		</tr>
		
	</tbody>
</table>
<!-- <a onclick="alert(document.adminForm.boxchecked.value);return false;">12</a> -->
<input type="hidden" name="boxchecked" >
<input type="hidden" name="task" value="">
</form>


<div>hello</div>