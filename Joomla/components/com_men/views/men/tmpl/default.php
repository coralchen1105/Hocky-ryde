



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

						var a = window.location.hash;
						if(a) {
							window.location.hash = "";
						}

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

		$("#news").live('click',function(){
				var a = window.location.hash;
						if(a) {
							window.location.hash = "";
						}
				$(".newsarea").css("display", "block");
				$(".contentpart").css("display","none");
		});
		
		function initialNewsPage(){	
				 $(".activetag").attr('class','tab');
				 $(".tab").next().attr('class','hide');
				 $(".submenu").removeClass('showsub');
				 $(".submenu").addClass('hidesub');
				 $(".content").removeClass('contentShow');
				 $(".content").addClass('contentHide');
				 $("#four").children("div").attr('class','activetag');
				 $("#four").children("img").attr('class','show');
				 $("#fourcontent").removeClass('contentHide');
				 $("#fourcontent").addClass('contentShow');
		}

		$(document).ready(function(){
   		
   			var a = window.location.hash;

			if(a){

				var number = a.match(/[0-9]+/);
				
				initialNewsPage();

				if(number){
					var string = number.toString();
					$(".newsarea").css("display", "none");
					$("#content"+string).css("display", "block");
				}else{
					$(".newsarea").css("display", "block");
					$(".contentpart").css("display","none");
				}

			}else{

				$(".newsarea").css("display", "block");
				$(".contentpart").css("display","none");
			}
			
  		 });	

		function pageReloadWithHash(hash){
			window.location.hash = hash;
			window.location.reload(true);
		}

	
		$(function(){
			$('.contentTitle').live('click',function(){
				pageReloadWithHash($(this).attr('href'));
				return false;
			});

		});

		$("#backToPreious").live('click', function(){
			$(".newsarea").css('display','block');
			$(".contentpart").css('display','none');
		});

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
			<div class="tab" id="news">News</div>
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
				<div class="tagNav">
				<span>Mans</span>
				
				<span>News</span>

				</div>

				<?php 
			$i=0;
			while($i<=15){
				if(isset($this->value[$i][0])){

			 ?>
			
			 	<div class="newsarea">

					<a class="contentTitle" href="#title<?php echo $this->value[$i][0] ?>">
						<div>
						<?php echo  $this->value[$i][2];?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="contentDate"><?php echo  $this->value[$i][1];?> </span>
						</div>
					</a>
					<br />
				</div>

				<div class="contentpart" id="content<?php echo $this->value[$i][0] ?>">
						<P><?php echo  $this->value[$i][2];?></P>
						<p><?php echo $this->value[$i][3];?> </p>
						<p id="backToPreious">Back to Previous</p>
				</div>
			
			<?php 
				$i++;
			}else{
				break;
			}

			} ?>
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