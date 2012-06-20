<!--<link href="<?php echo 'components'.DS.'com_news'.DS.'css'.DS.'news.css'; ?>" rel="stylesheet" type='text/css' /> -->

<link href="<?php echo 'includes'.DS.'1.css'; ?>" rel="stylesheet" type='text/css' />

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js" type="text/javascript"></script>

<style type="text/css">
#content {
	height:800px;
	margin:0px;
	margin-bottom:20px;
	border:thin solid grey;
	border-radius:5px;
	margin-top:10px;
	box-shadow:0px 2px 4px 0px #979797;
}

.bg{
	float:left;
	background-color:#979797;
	height:800px;
	width:231px;
	
}

.nav {
	margin-left:-231px;
	float:left;
	width:240px;
	height:800px;
}

</style>

<div id="hero">
	<div class="heroimage">
		<img src="components/com_juniors/images/subpage_banner.jpg" />
	</div>
</div>

<div class="slideshadow">
     <img src="images/hockyclub/slide_shadow.png" />
</div>

<div id="content">
	<div class="bg"></div>
	
	<div class="nav">
		<script type="text/javascript">
	
	$(".tab").live('click',function () {
					$(".activetag").attr('class','tab');
					$(".submenu").removeClass('showsub');
					$(".submenu").addClass('hidesub');
					$(this).attr('class','activetag');
					$(".show").attr('class','hide');
					$(this).siblings("img").addClass('show');
					$(this).siblings("img").removeClass('hide');
					$(this).siblings("div").addClass('showsub');
					$(this).siblings("div").removeClass('hidesub');
					}
	);

		</script>
		
		<div id="one">
			<div class="activetag">About</div>
			<img class="show" src="images/hockyclub/active_tag.png" />
			
			<div class="submenu showsub">First Grade Coach</div>
			<div class="submenu showsub">Coaching Director</div>
			<div class="submenu showsub">Represatative Players</div>
			<div class="submenu showsub" style="border-bottom:none;">Peter Board</div>
		</div>
		
		<div id="two">
			<div class="tab">Team Selection</div>
			<img class="hide" src="images/hockyclub/active_tag.png" />
		</div>
		
		<div id="three">
			<div class="tab">Match Reports</div>
			<img class="hide" src="images/hockyclub/active_tag.png" />
		</div>

		<div id="four">
			<div class="tab">News</div>
			<img class="hide" src="images/hockyclub/active_tag.png" />
		</div>
		
		<div id="five">
			<div class="tab">Ladder</div><img class="hide" src="images/hockyclub/active_tag.png" />
		</div>
		
		<div id="six">
			<div class="tab">Draw</div><img class="hide" src="images/hockyclub/active_tag.png" />
		</div>
		
		<div id="seven">
			<div class="tab">Grounds</div><img class="hide" src="images/hockyclub/active_tag.png" />
		</div>
		
	</div>
	
	<div class="rc"></div>
	
</div>

<div id="foottag">
	<div class="foothead">Achivements</div>
	<div class="footnote">
		<div> 
			<h2>Mens</h2>
		</div>
		
		<div>
			<h2>Womens</h2>
		</div>
		
		<div>
			<h2>Masters</h2>
		</div>
		<div style="border:none;">
			<h2>Juniors</h2>
		</div>
		
	</div>
</div>