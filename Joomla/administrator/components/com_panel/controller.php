<?php
/**
 * @package		Joomla.Administrator
 * @subpackage	com_cpanel
 * @copyright	Copyright (C) 2005 - 2012 Open Source Matters, Inc. All rights reserved.
 * @license		GNU General Public License version 2 or later; see LICENSE.txt
 */

// Check to ensure this file is included in Joomla!
defined('_JEXEC') or die;
jimport( 'joomla.application.application' );
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
		JApplication::redirect("index.php?option=com_panel&view=panels");
		
	}
	//Write Database for INSERT or UPDATE
	public function save(){

		// get Model object to access database
		$model = $this->getModel();
		$addNews = JRequest:: get('adminForm');
		$id = JRequest::get('cid[]');

		// assign form data to variables
		$title = $addNews['title'];
		$category = $addNews['category'];
		$publish = $addNews['publish'];
		$content = $addNews['content'];
		$date = $addNews['date'];
		$newsId = $id[cid][0];

		// database action

		if(empty($newsId)){

			if(empty($title) || empty($content) || empty($date)){

			JError::raiseWarning(100,"Warning");
		
			$view = $this->getView('Panels','html','PanelView');
			$view->display();

			}else {
				$insertNews = $model->addNews($date,$title,$content,$category,$publish);

				if($insertNews == true){
					JApplication::redirect("index.php?option=com_panel&view=panel");
				}else{
					$viewAllNews = $model->getAllNews();
					var_dump($viewAllNews);exit;
				}
			}

		}else {

			$update = $model->updateNews($newsId,$date,$title,$content,$category,$publish);

			if($update == true){
					JApplication::redirect("index.php?option=com_panel&view=panel");
				}else{
					$viewAllNews = $model->getAllNews();
					var_dump($viewAllNews);exit;
				}

		}

	}

	public function edit() {
		$checkboxNumber = JRequest::get('boxchecked');
		

		if($checkboxNumber[boxchecked] == "1"){
			$view = $this->getView('Panels','html','PanelView');
			$view->display();
			
		}else{

			JError::raiseWarning(100,"Select more than one news. Please select again!");
			$this->display();
			
		}
	}

	public function publish() {
		
		$model = $this->getModel();

		$checkboxNumber = JRequest::get('boxchecked');

		if(empty($checkboxNumber[boxchecked])){
			JError::raiseWarning(100,"Please select news!");
			$this->display();
		}else {
			
			$id = JRequest::get('cid[]');

			foreach($id[cid] as $oneNewsId){
				$model->publishNews($oneNewsId);

			}

			$this->display();

		}	

	}
			

	public function unpublish(){
		$model = $this->getModel();

		$checkboxNumber = JRequest::get('boxchecked');

		if(empty($checkboxNumber[boxchecked])){
			JError::raiseWarning(100,"Please select news!");
			$this->display();
		}else {
			
			$id = JRequest::get('cid[]');

			foreach($id[cid] as $oneNewsId){
				$model->unPublishNews($oneNewsId);
			}

			$this->display();

		}
	}

	public function display(){
		//write database and decide which view to go based on the result
		// $view = $this->getView('Panel','html','PanelView');
		// $view->display();
		parent::display($tpl);
	}
}
