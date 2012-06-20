<?php
/**
 * @package		Joomla.Administrator
 * @subpackage	com_cpanel
 * @copyright	Copyright (C) 2005 - 2012 Open Source Matters, Inc. All rights reserved.
 * @license		GNU General Public License version 2 or later; see LICENSE.txt
 */

// Check to ensure this file is included in Joomla!
defined('_JEXEC') or die;

jimport('joomla.application.component.view');
jimport('joomla.application.module.helper');

/**
 * HTML View class for the Cpanel component
 *
 * @static
 * @package		Joomla.Administrator
 * @subpackage	com_cpanel
 * @since 1.0
 */

class PanelViewPanel extends JView
{
	

	public function display($tpl = null)
	{
		JToolBarHelper::title("News", 'article.png');

		JToolBarHelper::addNew();
		JToolBarHelper::editList();
		JToolBarHelper::unpublish();

		$file_name = JPATH_ADMINISTRATOR.DS.'components'.DS.'com_panel'.DS.'models'.DS.'panel.php';

		if(file_exists($file_name)){
			
			require_once $file_name;
		}

		$model = new PanelModelPanel();
		

		$this->value = $model->getAllNews();


		// var_dump($this->value);
		parent::display($tpl);
	}
}

