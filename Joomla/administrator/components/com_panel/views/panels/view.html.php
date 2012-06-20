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


/**
 * HTML View class for the Cpanel component
 *
 * @static
 * @package		Joomla.Administrator
 * @subpackage	com_cpanel
 * @since 1.0
 */

class PanelViewPanels extends JView
{
	

	public function display($tpl = null)
	{


		$file_name = JPATH_ADMINISTRATOR.DS.'components'.DS.'com_panel'.DS.'models'.DS.'panel.php';

		if(file_exists($file_name)){
			
			require_once $file_name;
		}

		// $model = $this->getModel('Panel');

		$model = new PanelModelPanel();
		// var_dump($model);

		$this->result = $model->getAllNews();
		

		// $this->setLayout('default');
		$this->setLayout('edit');
		
		JToolBarHelper::title("Add News", 'article.png');

		JToolBarHelper::save();
		
		JToolBarHelper::cancel();
		

		//read database and assign all the data ready for template for display.
		

		// $this->display();
		parent::display();
	}
}
