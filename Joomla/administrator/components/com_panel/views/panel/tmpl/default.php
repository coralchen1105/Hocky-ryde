<?php

defined('_JEXEC') or die;

JHtml::addIncludePath(JPATH_COMPONENT.'/helpers/html');
JHtml::_('behavior.tooltip');
JHtml::_('behavior.multiselect');

?>

<?php 
$value = $this->value;
$num_rows = $this->num_rows;

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
			
			<th width="30%">
				Title
			</th>
			
			<th width="10%">
				Date
			</th>
			
			<!-- <th width="15%">
				Content
			</th> -->

			<th width="10%">
				Catalogy
			</th>
			
			<th width="10%">
				Status
			</th>
		</tr>
	</thead>

	<tbody>

		<?php 
		$i=0;
		
		while($i<=$num_rows){
		?>

		<tr class="row<?php echo $i?>">
			<td class="center">	
				<input type="checkbox" id="cb<?php echo $i;?>" name="cid[]" value="<?php echo $value[$i][0]; ?>" onclick="Joomla.isChecked(this.checked);" title="Checkbox for row <?php echo $i+1;?>">
			</td>
			<td class="center"><?php echo $value[$i][2]; ?></td>
			<td class="center"><?php echo $value[$i][1]; ?></td>
			<!-- <td class="center"><?php echo $value[$i][3]; ?></td> -->
			<td class="center"><?php echo $value[$i][4]; ?></td>
			<td class="center"><?php echo $value[$i][5]; ?></td>
		</tr>	
		<?php
			$i++;
		}
		?>
		
		
	</tbody>
</table>
<!-- <a onclick="alert(document.adminForm.boxchecked.value);return false;">12</a> -->
<input type="hidden" name="boxchecked" >
<input type="hidden" name="task" value="">
</form>


<div>hello</div>