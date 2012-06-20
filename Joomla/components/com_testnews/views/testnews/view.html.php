<?php
// No direct access to this file
defined('_JEXEC') or die('Restricted access');
 
// import Joomla view library
jimport('joomla.application.component.view');
 
/**
 * HelloWorlds View
 */
class TestnewsViewtestnews extends JView
{
	/**
	 * HelloWorlds view display method
	 * @return void
	 */
	function display($tpl = null) 
	{
		echo "view html";
 		
		$items = $this->get('Items');
		$pagination = $this->get('Pagination');


 		$this->items = $items;
		$this->pagination = $pagination;

		
		// Display the template
		parent::display($tpl);
	}
}