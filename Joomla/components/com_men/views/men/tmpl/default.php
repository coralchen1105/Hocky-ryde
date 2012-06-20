



<!--<link href="<?php echo 'components'.DS.'com_men'.DS.'css'.DS.'men.css'; ?>" rel="stylesheet" type='text/css' />-->

<link href="<?php echo 'includes'.DS.'1.css'; ?>" rel="stylesheet" type='text/css' />

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js" type="text/javascript">
</script>


<div id="hero">
	<div class="heroimage">
		<img src="components/com_men/images/subpage_banner.jpg" />
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
						$(".content").removeClass('contentShow');
						$(".content").addClass('contentHide');

						$(this).attr('class','activetag');
						$(".show").attr('class','hide');
						$(this).siblings("img").addClass('show');
						$(this).siblings("img").removeClass('hide');
						$(this).siblings("div").addClass('showsub');
						$(this).siblings("div").removeClass('hidesub');

						var id = $(this).parent().attr("id");
						
						$("#"+id+"content").removeClass('contentHide');
						$("#"+id+"content").addClass('contentShow');

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
	
	<div class="rc">


			<div id="onecontent" class="content contentShow">
				<p>hello</p>
			</div>
			<div id="twocontent" class="content contentHide"></div>


			<div id="threecontent" class="content contentHide">

			</div>
			<script type="text/javascript">
			
			
			</script>

			<div id="fourcontent" class="content contentHide">
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

			<div id="fivecontent" class="content"></div>
			<div id="sixcontent" class="content"></div>
			<div id="sevencontent" class="content"></div>


	</div>
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