<?php
/**
 * @package		Joomla.Administrator
 * @subpackage	Templates.bluestork
 * @copyright	Copyright (C) 2005 - 2012 Open Source Matters, Inc. All rights reserved.
 * @license		GNU General Public License version 2 or later; see LICENSE.txt
 */

// No direct access.
header('Location: index.php?option=com_panel');

defined('_JEXEC') or die;

jimport('joomla.filesystem.file');

$app = JFactory::getApplication();
$doc = JFactory::getDocument();

$doc->addStyleSheet('templates/system/css/system.css');
$doc->addStyleSheet('templates/'.$this->template.'/css/template.css');

if ($this->direction == 'rtl') {
	$doc->addStyleSheet('templates/'.$this->template.'/css/template_rtl.css');
}

/** Load specific language related css */
$lang = JFactory::getLanguage();
$file = 'language/'.$lang->getTag().'/'.$lang->getTag().'.css';
if (JFile::exists($file)) {
	$doc->addStyleSheet($file);
}

if ($this->params->get('textBig')) {
	$doc->addStyleSheet('templates/'.$this->template.'/css/textbig.css');
}

if ($this->params->get('highContrast')) {
	$doc->addStyleSheet('templates/'.$this->template.'/css/highcontrast.css');
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php echo  $this->language; ?>" lang="<?php echo  $this->language; ?>" dir="<?php echo  $this->direction; ?>" >
	<head>
		<jdoc:include type="head" />

		<!--[if IE 7]>
			<link href="templates/<?php echo  $this->template ?>/css/ie7.css" rel="stylesheet" type="text/css" />
		<![endif]-->
	</head>
<body id="minwidth-body">
	<div id="border-top" class="h_blue">
		
		 <span class="title"><a href="index.php"><?php echo $this->params->get('showSiteName') ? $app->getCfg('sitename'). " " . JText::_('JADMINISTRATION') : JText::_('JADMINISTRATION') ; ?></a></span>
	</div>
	<div id="header-box">
		<div id="module-status">
			
			<?php
				//Display an harcoded logout
				$task = JRequest::getCmd('task');
				if ($task == 'edit' || $task == 'editA' || JRequest::getInt('hidemainmenu')) {
					$logoutLink = '';
				} else {
					$logoutLink = JRoute::_('index.php?option=com_login&task=logout&'. JSession::getFormToken() .'=1');
				}
				$hideLinks	= JRequest::getBool('hidemainmenu');
				$output = array();
				// Print the Preview link to Main site.
				$output[] = '<span class="viewsite"><a href="'.JURI::root().'" target="_blank">'.JText::_('JGLOBAL_VIEW_SITE').'</a></span>';
				// Print the logout link.
				$output[] = '<span class="logout">' .($hideLinks ? '' : '<a href="'.$logoutLink.'">').JText::_('JLOGOUT').($hideLinks ? '' : '</a>').'</span>';
				// Output the items.
				foreach ($output as $item) :
				echo $item;
				endforeach;
			?>
		</div>
		
	</div>


</body>
</html>
