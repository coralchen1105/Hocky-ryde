<?php
defined('_JEXEC') or die;

jimport('joomla.application.component.modellist');

class PanelModelPanel extends JModelList
{
	

	public function getAllNews(){
		$db = JFactory::getDBO();
		$sql = 'SELECT ID,Date,title,content,catalogues,status 
		 			FROM #__newshockyclub
		 			ORDER BY date DESC';
		$db->setQuery($sql);
		$row = $db->loadRowList();
		// var_dump($row);exit;
		return $row;
		
	}

	public function addNews($date,$title,$content,$category,$publish){


		$db = JFactory::getDBO();
		$sql = "INSERT INTO g7e1f_newshockyclub (Date,title,content,catalogues,status)
				VALUES ('$date','$title','$content','$category','$publish')";

		$db->setQuery($sql);
		$db->query();

		$user_id = $db->insertid();

		return true;
		
		// return $this->getAllNews();
		//  var_dump($this->getAllNews());


	}
}