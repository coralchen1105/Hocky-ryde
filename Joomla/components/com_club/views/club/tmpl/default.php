<!--<link href="<?php echo 'components'.DS.'com_club'.DS.'css'.DS.'club.css'; ?>" rel="stylesheet" type='text/css' />-->

<link href="<?php echo 'includes'.DS.'1.css'; ?>" rel="stylesheet" type='text/css' />

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js" type="text/javascript"></script>


<style>
#content {
	height:851px;
	margin:0px;
	margin-bottom:20px;
	border:thin solid grey;
	border-radius:5px;
	/*margin-top:10px;*/
	box-shadow:0px 2px 4px 0px #979797;
}

.bg{
	float:left;
	background-color:#979797;
	height:851px;
	width:231px;
}

.rc {
	float:right;
	height:650px;
	width:750px;
	margin-right: 20px;
margin-top: 10px;
}

</style>

<div id="hero">
	<div class="heroimage">
		<img src="components/com_club/images/club_banner1.png" />
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
			<div class="activetag">75th Year Celebrations</div>
			<img class="show" src="images/hockyclub/active_tag.png" />
		</div>
		
		<div id="two">
			<div class="tab">Brief History</div>
			<img class="hide" src="images/hockyclub/active_tag.png" />
		</div>
		
		
		<div id="three">
			<div class="tab">Historic Records</div>
			<img class="hide" src="images/hockyclub/active_tag.png" />
			<div class="submenu hidesub">Annual Reports</div>
			<div class="submenu hidesub">Office Bearers</div>
			<div class="submenu hidesub" style="border-bottom:none;">Team Records</div>
			
		</div>
		
		<div id="four">
			<div class="tab">Honours</div><img class="hide" src="images/hockyclub/active_tag.png" />
		</div>
		
		
		
		<div id="five">
			<div class="tab">Premiers Gallery</div><img class="hide" src="images/hockyclub/active_tag.png" />
		</div>
		
		
		
		<div id="six">
			<div class="tab">Clothing</div><img class="hide" src="images/hockyclub/active_tag.png" />
		</div>
	</div>
	
	<div class="rc">
		<div id="onecontent" class="content contentShow">
				<p>hello</p>
		</div>
		<div id="twocontent" class="content contentHide" style="font-size:11px;">
			<p>Ryde Hockey Club was formed in 1934 with the principle, Arthur E. Young being the first president. At that time, Sydney had two associations conducting their own separate competitions --- the ‘Metropolitan Hockey Association’ (M.H.A), which covered a wider area of Sydney and was the stronger of the two and the ‘Northern Suburbs Hockey Association’ (N.S.H.A). Ryde in its fledging year entered one team in ‘C’ grade of the N.S.H.A.</p>
			<p>In 1936 Ryde won the ‘C’ grade premiership and the following year entered two teams --- one each in ‘B’ and ‘C’ grade, winning the ‘B’ grade premiership. It also formed it’s own junior teams. (Boys).</p>
			<p>Ryde applied to join the M.H.A. in February 1940 and two months later on April 1st 1940 M.H.A. accepted Ryde’s application and granted them district status with the proviso that Ryde field teams in both 1st and 2nd grade, with which Ryde complied. (M.H.A. at the time conducted 1st, 2nd, 3rd and 4th grades). Ryde was now known as ‘Ryde District Hockey Club’ (R.D.H.C).</p>
			<p>Over the next few years, clubs were decimated by the event of World War 2 with M.H.A reducing its grades to three. (In 1942 only two grades). In 1943, Ryde won its first M.H.A. premiership by winning the 2nd grade competition (Ryde’s 1st grade team).</p>
			<p>1950/51 saw major changes to Sydney Hockey with the amalgamation of the M.H.A. and the N.S.H.A to form the new ‘Sydney Hockey Association’ (S.H.A.) and at the same time Ryde D.H.C. together with the ‘Ryde Revellers Hockey Club’ and a large contingent of the ‘Gladesville Hockey Club’ (both former N.S.H.A. clubs) formed the club as we know it today --- ‘Ryde Hunters-Hill District Hockey Club’ (R.H.H.D.H.C.) with Hugh Cullen formally from the Gladesville H.C. being elected it’s first president.</p>
			<p>1954/55 was R.H.H.D.H.C. first period of ‘The Golden Years’ winning the S.H.A. club championship for both years with 2nd grade victorious in 1955 and 3rd grade in 1954/55.</p>
			<p>Ryde broke through for their maiden 1st Grade Premiership in 1961 also winning 2nd Grade in 1961, ’62, ’63, and 3rd Grade 1963, ’64, ’65 as well as the club championship in 1963.</p>
			<p>Ryde broke through for their maiden 1st Grade Premiership in 1961 also winning 2nd Grade in 1961, ’62, ’63, and 3rd Grade 1963, ’64, ’65 as well as the club championship in 1963.</p>
			<p>Over the next 20 years S.H.A changed their format several times --- 1st, 2nd, 3rd and 4th grade and A, B, and C grades --- than Premier ‘A’ and Premier ‘B’ plus 3rd division. During these years Ryde experienced it’s leanest period, being relegated and promoted on several occasions and winning only two pennants (3rd div. --- 2nd grade 1974) and (2nd div. club champions in 1979).</p>
			<p>However, positive steps were occurring. Firstly, Ryde was as always, still producing promising and talented juniors, and secondly, the formation of the Ryde Hunters-Hill Women’s Hockey Club (R.H.H.W.H.C.) in 1978, with Gwen Silman elected as president. In its inaugural year R.H.H.W.H.C. entered three teams in each of the senior and schoolgirl competitions conducted by the Ryde-Eastwood association, winning 1st grade in both the senior and schoolgirl comps. Ryde had also commenced playing mixed (boys and girls) teams in the Saturday morning competitions. For the 1978/79/80 seasons the women were a separate entity in their own right before affiliating with the men’s club in 1981.</p>
			<p>In 1982 Ryde men’s club won Premier ‘B’ 3rd grade and in 1983 Premier ‘B’ 2nd grade.</p>
			<p>In 1985 all hockey was still being played on natural grass fields. Although Homebush synthetic stadium had just been completed at the end of the season, S.H.A. preferred to play all finals on grass. On Grand final day, Mother Nature opened the heavens and all games had to be postponed. Ryde’s 3rd grade grand final team (Premier ‘B’ div.) were than advised that they were to be playing on the new synthetic mid-week under lights and duly went on to beat Moorebank 3-0 in a memorable match.</p>
			<p>After many years in Premier ‘B’ Ryde Mens were promoted to Premier ‘A’ for the 1987 season finishing in a creditable 6th position, and has stayed in the top division ever since.</p>
			<p>During the 80’s and early 90’s Ryde Women won numerous Premierships in all grades and after originally playing in the Ryde-Eastwood association and the Parramatta association, applied in 1993 for inclusion in the newly formed</p>
			<p>‘Women’s Metropolitan League’ to be played wholly at Homebush Stadium. Three teams were accepted ‘Metro 2nd, ‘3rd and 4th divisions’. In 1995, Ryde won premierships in Metro 2 and 3, (Ryde’s 1st and 2nd grades), and was grand finalist in Metro 4. A combined superb effort.</p>
			<p>Throughout the 90’s and into the 21st century, Ryde Men’s, Women’s and Junior teams have been grand finalists in all grades and divisions winning dozens of premierships between them.</p>
			<p>Over the years, Ryde has produced home grown juniors who have gone onto play for Australia at both Junior and Senior levels.</p>
			<p>Ryde Hunters Hill District Hockey Club is on the threshold of dynamic times with an abundance of talented juniors, both male and female.</p>
			<p>Be part of it.</p>

		</div>


		<div id="threecontent" class="content contentHide">

		</div>

		<div id="fourcontent" class="content contentHide">
				
		</div>

		<div id="fivecontent" class="content contentHide">
			<?php require_once('gallery.php'); ?>
		</div>
		<div id="sixcontent" class="content contentHide"></div>
		<div id="sevencontent" class="content contentHide"></div>


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
