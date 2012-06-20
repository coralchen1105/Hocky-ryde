<?php

defined('_JEXEC') or die;

jimport('joomla.application.component.controller');

/**
 * Component Controller
 *
 * @package		Joomla.Administrator
 * @subpackage	com_content
 */
class TestnewsController extends JController
{
	
		function display($cachable = false) 
	{
		// set default view if not set
		JRequest::setVar('view', JRequest::getCmd('view', 'testnews'));
 
		// call parent behavior
		parent::display($cachable);
	}
}
