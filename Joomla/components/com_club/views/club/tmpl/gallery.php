
<style type="text/css">
	.photo {
		width:150px;
		height:200px;
		background-color:red;
		float: left;
		margin-left:5px;
		margin-top:10px;
	}
</style>

<script src="includes/jquery.colorbox.js"></script>
<link href="<?php echo 'components'.DS.'com_club'.DS.'css'.DS.'colorbox.css'; ?>" rel="stylesheet" type='text/css' />
<script>
			$(document).ready(function(){
				//Examples of how to assign the ColorBox event to elements
				$(".photo").colorbox({rel:'photo'});
				
			});
</script>



<div>
	<p><a class="photo" href="components/com_club/images/hero1.jpg" title="Image1">Image1</a></p>
	<p style="display:none;"><a class="photo" href="components/com_club/images/hero2.png" title="Image2">Image1</a></p>
	<p style="display:none;"><a class="photo" href="components/com_club/images/hero3.jpg" title="Image3">Image1</a></p>
	<p style="display:none;"><a class="photo" href="components/com_club/images/hero4.png" title="Image4">Image1</a></p>
</div>


<!-- <div class="photo">Image2</div>
<div class="photo">Image3</div>
<div class="photo">Image4</div>
<div class="photo">Image5</div> -->