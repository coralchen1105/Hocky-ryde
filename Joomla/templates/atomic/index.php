<?php


defined('_JEXEC') or die;?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
       <link href="templates/<?php echo $this->template ?>/css/template.css" rel="stylesheet" type='text/css' />
	   <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js" type="text/javascript"></script>
	   
       <style type="text/css">
			#navigation a:visited {

			color:#525252;
			}

			#navigation a:hover {
			color:white;
			}
			
			#navigation a {
	width:174px;
	height:50px;
}
                
        </style>
	</head>
	<body>
            
            <div id="wrapper" >
                <div id="heading">
                    <span><img src="templates/atomic/images/logo.png"/></span>
                    <div class="topright">
                        <div style="font-size:20px; margin-bottom: 5px; ">Find Us:</div>
                        <img src="templates/atomic/images/fb.gif" />
                        <img src="templates/atomic/images/tw.gif" />
                        <img src="templates/atomic/images/yt.gif" />
                        <a href="http://hockey.dev/index.php?option=com_join&view=join"><div style="margin-top: 7px;background:#ffb400; height:29px;width:100px;border-radius:5px; color:black; text-align:center;text-weight:bold;font-size:18px; padding-top:5px;">Join Us
                        </div></a>
                    </div>
                </div>
                <div id="navigation">
					<script type="text/javascript">
						$('#navigation > a').live('click', function() {
								
								$(".activemenu").removeClass('activemenu');
								$(this).siblings("span").addClass('activemenu');
						})
					
					</script>
				
                    <a href="index.php?option=com_homepage&view=homepage"><span class="<?php if($_REQUEST['option'] == 'com_homepage') echo "activemenu"; ?>">Home</span></a>
                    <a href="index.php?option=com_club&view=club"><span class="<?php if($_REQUEST['option'] == 'com_club') echo "activemenu"; ?>">Club History</span></a>
                    <a href="http://hockey.dev/index.php?option=com_men&view=men"><span class="<?php if($_REQUEST['option'] == 'com_men') echo "activemenu"; ?>">Mens</span></a>
                    <a href="index.php?option=com_women&view=women"><span class="<?php if($_REQUEST['option'] == 'com_women') echo "activemenu"; ?>">Womens</span></a>
                    <a href="index.php?option=com_juniors&view=juniors"><span class="<?php if($_REQUEST['option'] == 'com_juniors') echo "activemenu"; ?>">Juniors</span></a>
                    <a href="index.php?option=com_master&view=master"><span class="<?php if($_REQUEST['option'] == 'com_master') echo "activemenu"; ?>">Masters</span></a>
                    <a href=""><span style="border:none;">Contact Us</span></a>
                </div>
				<div class="relax"></div>
                <jdoc:include type="component" />
                <div id="footer">
                    <div class="cr">Copyrights © 2012 Ryde Hunter Hill District Hockey Club</div>
                    <div class="fr">
                        <span>Gallery</span>
                        <span>Links</span>
                        <span>How to play Hockey</span>
                        <span style="border:none;">Contact</span>
                    </div>
                    
                </div>
                
                
            </div>
    
	</body>
</html>
