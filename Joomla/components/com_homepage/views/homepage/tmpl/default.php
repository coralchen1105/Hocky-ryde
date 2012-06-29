
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js" type="text/javascript">
</script>

<script src="includes/slides.jquery.js">
</script>

<link href="<?php echo 'components'.DS.'com_homepage'.DS.'css'.DS.'homepage.css'; ?>" rel="stylesheet" type='text/css' />
<style type="text/css">



.pagination li {
float:left;
margin:10px 5px;
list-style:none;

}


.pagination li a {
display: block;
width: 14px;
height: 2px;
padding-top: 12px;
background-image: url('components/com_homepage/images/hero_dot_sel.png');
background-position: 0 0;
float: left;
overflow: hidden;
}

.pagination li.current a {
background-image: url('components/com_homepage/images/hero_dot.png');
}

.heroinfo {
    height: 318px;
    width: 345px;
	z-index:10;
	margin-bottom:55px;
	margin-top:25px;
	top:10px;
	left:300px;
	float:right;
    
}

.heading {
	height:45px;
	background:url('components/com_homepage/images/heading_bg.png') repeat-x top;
}

#mens, #womens, #juniors, #master{
position: relative;
    left: -2px;
	width:345px;
	height:318px;
	z-index:0;
background:url('components/com_homepage/images/hero_info.png') top no-repeat;
}

</style>

<script>

        $(function(){
					$("#slides").slides({
						preload: true,
						preloadImage: 'images/hero1.jpg',
						//effect:'fade',
						//fadeSpeed:900,
						play: 5000,
						currentClass: 'current',
						pause: 25000,
						hoverPause: true,
						//pagination: false,
						generatePagination: false,
						autoHeight:false,
						
						animationComplete: function(event) {
							
							//alert($('.current').children('a').html());

							if(event==1){
								$('#mens').css('display','block');//.fadeIn("slow");
								$('#womens,#juniors,#master').css('display','none');
								//$('#dotone').attr('src','components/com_homepage/images/hero_dot_sel.png');
								//$('#dottwo,#dotthree,#dotfour').attr('src','components/com_homepage/images/hero_dot.png');
							}
							
							if(event==2){
								$('#womens').css('display','block');
								$('#mens,#juniors,#master').css('display','none');
								//$('#dottwo').attr('src','components/com_homepage/images/hero_dot_sel.png');
								//$('#dotone,#dotthree,#dotfour').attr('src','components/com_homepage/images/hero_dot.png');
							}
							
							if(event==3){
								$('#juniors').css('display','block');
								$('#womens,#mens,#master').css('display','none');
								//$('#dotthree').attr('src','components/com_homepage/images/hero_dot_sel.png');
								//$('#dotone,#dottwo,#dotfour').attr('src','components/com_homepage/images/hero_dot.png');
							}
							
							if(event==4){
								$('#master').css('display','block');
								$('#womens,#juniors,#mens').css('display','none');
								//$('#dotfour').attr('src','components/com_homepage/images/hero_dot_sel.png');
								//$('#dotone,#dotthree,#dottwo').attr('src','components/com_homepage/images/hero_dot.png');
							}
							
							//$('.heroinfo').show();
							//if($("#one"){//
								//changeInfo('mens','womens','juniors','master');
							//}//
						}	
					});
		});

	
</script>



<div id="hero">	
		<div id="slides" style="height:443px;">
            <div class="slides_container" style="z-index:0" >
				<div id="one">
					<img  src="components/com_homepage/images/hero1.jpg" />
					
				</div>
		
				<div id="two">
					<img  src="components/com_homepage/images/hero2.png" />
				</div>
		
				<div id="three">
					<img  src="components/com_homepage/images/hero3.jpg" />
				</div>
		
				<div id="four">
					<img  src="components/com_homepage/images/hero4.png" />
				</div>       
			</div>
			
		<ul class="pagination">
			<li class=""><a href="#0">1</a></li>
			<li class=""><a href="#1">2</a></li>
			<li class=""><a href="#2">3</a></li>
			<li class=""><a href="#3">4</a></li>
			
		</ul>
			
		</div>	
		
</div>	
<div class="heroinfo">
				 <div id="mens" style=" float:left; display:block;">   
					<h1>Mens Club</h1>
					<p>Training on the turf starts on the 15th of February for 4th-10th grade and 16th February for 1st-3rd grade. The club is putting a lot of effort into ensuring that players get maximum value out of training this season so we would encourage everyone who wants to play senior hockey at Ryde in 2012...</p>
					<p href="index.php?option=com_men&view=men" style=" margin-left:19px; font-size:19px; color:#ffb400;">Read More <a href="index.php?option=com_men&view=men"><img href="index.php?option=com_men&view=men" src="components/com_homepage/images/read_more.png" style="margin-right:152px; float:right;"/></a></p> 
				</div>
		
				<div id="womens" style="float:left; display:none;">   
					<h1>Womens Club</h1>
					<p>Training on the turf starts on the 15th of February for 4th-10th grade and 16th February for 1st-3rd grade. The club is putting a lot of effort into ensuring that players get maximum value out of training this season so we would encourage everyone who wants to play senior hockey at Ryde in 2012...</p>
					<p style=" margin-left:19px; font-size:19px; color:#ffb400;">Read More <a href="index.php?option=com_women&view=women"><img src="components/com_homepage/images/read_more.png" style="margin-right:152px; float:right;"/></a></p> 
				</div>
		
				<div id="juniors" style="float:left; display:none;">   
					<h1>Juniors Club</h1>
					<p>Training on the turf starts on the 15th of February for 4th-10th grade and 16th February for 1st-3rd grade. The club is putting a lot of effort into ensuring that players get maximum value out of training this season so we would encourage everyone who wants to play senior hockey at Ryde in 2012...</p>
					<p style=" margin-left:19px; font-size:19px; color:#ffb400;">Read More <a href="index.php?option=com_juniors&view=juniors"><img src="components/com_homepage/images/read_more.png" style="margin-right:152px; float:right;"/></a></p> 
				</div>
		
				<div id="master" style="float:left; display:none;">   
					<h1>Master Club</h1>
					<p>Training on the turf starts on the 15th of February for 4th-10th grade and 16th February for 1st-3rd grade. The club is putting a lot of effort into ensuring that players get maximum value out of training this season so we would encourage everyone who wants to play senior hockey at Ryde in 2012...</p>
					<p style=" margin-left:19px; font-size:19px; color:#ffb400;">Read More <a href="index.php?option=com_master&view=master"><img src="components/com_homepage/images/read_more.png" style="margin-right:152px; float:right;"/></a></p> 
				</div>
</div>					
          

<div class="relax"></div>
<div class="slideshadow">
        	<img src="components/com_homepage/images/slide_shadow.png" />
        </div>
		
<div class="banner" style="margin-top:0px;">
			<img src="components/com_homepage/images/home_banner.png" />
			<div id="moredetail" >
				<img src="components/com_homepage/images/more_detail.jpg" />
			</div>
</div>
		
		<div id="content">
			<div class="lc">
				<div class="heading">
					<div style="color:#ffffff; font-size:18px; margin-top:10px;margin-left:15px;float:left; font-weight:bold;">Latest News</div>
					<a href="http://hockey.dev/index.php?option=com_season&view=season" style="float:right; margin-top:20px;margin-right:20px;"><img src="components/com_homepage/images/viewall.png" style="border:none;"/></a>
				</div>
				<div>

					<?php 
			$i=0;
			while($i<=3){
				if(isset($this->value[$i][0])){

			 ?>
					<div class="news" >
						<div class="home-date"><?php echo  $this->value[$i][1];?> </div></br>
						<div class="home-title"><?php echo  $this->value[$i][2];?> </div>
						<div class="home-content" > <?php echo  $this->value[$i][3];?> </div>
						<?php 
						$cat = $this->value[$i][4];

						 ?>

						<a href="index.php?option=com_<?php echo $cat;?>&view=<?php echo $cat;?>#title<?php echo $this->value[$i][0];?>">More...<?php echo $cat; ?></a>
					</div>
			<?php 
				$i++;
			}else{
				break;
			}

			} ?>
				</div>
			</div>
			
			<div class="rc">
				<div class="heading">
						<div style="color:#ffffff; font-size:18px; margin-top:10px;margin-left:109px;float:left; font-weight:bold;">Sponsors</div>
						
				</div>
				
				<div class="sponsors">
					<a href="http://www.theranch.com.au/"><center><img src="components/com_homepage/images/sponsor1.jpg" /></center>
					<p>The Ranch Hotel Motel</p></a>
				</div>
				<div class="sponsors">
					<a href="http://www.teamsports.com.au/synthetic-turf-hockey-pitch" ><center><img src="components/com_homepage/images/sponsor2.jpg" /></center>
					<p>Australia's best synthetic<br /> grass sports grounds</p></a>
				</div>
				<div class="sponsors" style="border:none;" >
					<a href="http://www.weeklytimes.com.au/"><center><img src="components/com_homepage/images/sponsor3.jpg" /></center>
					<p>The Weekly Times</p></a>
				</div>
			</div>
			
		</div>
