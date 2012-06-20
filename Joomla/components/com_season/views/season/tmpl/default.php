<!--<link href="<?php echo 'components'.DS.'com_season'.DS.'css'.DS.'season.css'; ?>" rel="stylesheet" type='text/css' />-->

<link href="<?php echo 'includes'.DS.'1.css'; ?>" rel="stylesheet" type='text/css' />

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js" type="text/javascript"></script>
<style type="text/css">

.newsarea {
	width:980px;
	margin-left:20px;

}

</style>

<div id="newspage" style="">
	<h2>News<h2>

	<div class="newsarea">
		<p class="contentDate"><?php echo  $this->value[0][0];?> </p>
		<p class="contentTitle"><?php echo  $this->value[0][1];?> </p>
		<p class="contentpart"> <?php echo  $this->value[0][2];?> </p>
	</div>

	<div class="newsarea">
		<p class="contentDate"><?php echo  $this->value[1][0];?> </p>
		<p class="contentTitle"><?php echo  $this->value[1][1];?> </p>
		<p class="contentpart"> <?php echo  $this->value[1][2];?> </p>
	</div>

	<div class="newsarea">
		<p class="contentDate"><?php echo  $this->value[2][0];?> </p>
		<p class="contentTitle"><?php echo  $this->value[2][1];?> </p>
		<p class="contentpart"> <?php echo  $this->value[2][2];?> </p>
	</div>

	<div class="newsarea">
		<p class="contentDate"><?php echo  $this->value[3][0];?> </p>
		<p class="contentTitle"><?php echo  $this->value[3][1];?> </p>
		<p class="contentpart"> <?php echo  $this->value[3][2];?> </p>
	</div>

	<div class="newsarea" style="border:none;">
		<p class="contentDate"><?php echo  $this->value[4][0];?> </p>
		<p class="contentTitle"><?php echo  $this->value[4][1];?> </p>
		<p class="contentpart"> <?php echo  $this->value[4][2];?> </p>
	</div>
</div>




