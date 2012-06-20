<?php
/**
 * @package		Joomla.Administrator
 * @subpackage	com_cpanel
 * @copyright	Copyright (C) 2005 - 2012 Open Source Matters, Inc. All rights reserved.
 * @license		GNU General Public License version 2 or later; see LICENSE.txt
 */

// Check to ensure this file is included in Joomla!
defined('_JEXEC') or die;

/**
 * Cpanel Controller
 *
 * @package		Joomla.Administrator
 * @subpackage	com_cpanel
 * @since 1.5
 */
class PanelController extends JController
{

	public function add(){
		$view = $this->getView('Panels','html','PanelView');
		$view->display();


	}
	//Write Database for INSERT or UPDATE
	public function save(){

		$model = $this->getModel();

		$addNews = JRequest:: get('adminForm');
		
		$title = $addNews['title'];
		$category = $addNews['category'];
		$publish = $addNews['publish'];
		$content = $addNews['content'];
		$date = $addNews['date'];

		if(!isset($title)){

			
		}

		$insertNews = $model->addNews($date,$title,$content,$category,$publish);
		
		if($insertNews) {
			$this->display();	
		}else {

			echo "hello";
		}
	}

	public function edit() {
		$view = $this->getView('Panels','html','PanelView');
		$view->display();
	}

	public function display(){
		//write database and decide which view to go based on the result
		$view = $this->getView('Panel','html','PanelView');
		$view->display();
	}
}
