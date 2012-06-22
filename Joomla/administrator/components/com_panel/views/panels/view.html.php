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

		$model = new PanelModelPanel();

		$this->result = $model->getAllNews();
		

		// $this->setLayout('default');
		$this->setLayout('edit');
		
		JToolBarHelper::title("Add News", 'article.png');

		JToolBarHelper::save();
		
		JToolBarHelper::cancel();
		
		//read database and assign all the data ready for template for display.
		
		$newsId = $this->getNewsId();
		

		if(!empty($newsId)){
			$this->oneNews = $model->editNews($newsId);	
			
		}
		// $this->display();
		parent::display($tpl);
	}


	public function getNewsId() {
		$test = JRequest::get('cid[]');
		$newsId = $test[cid][0];

		return $newsId;

	}
}
