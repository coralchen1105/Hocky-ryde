<?php
defined('_JEXEC') or die;

jimport('joomla.application.component.modellist');

class PanelModelPanel extends JModelList
{
	
	public function getAllNews(){
		$db = JFactory::getDBO();
		$sql = "SELECT ID,Date,title,content,catalogues,status 
		 			FROM #__newshockyclub
		 			
		 			ORDER BY date DESC";
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

	}

	public function editNews($newsId){
		$db = JFactory::getDBO();
		$sql = "SELECT Date,title,content,catalogues,status 
		 			FROM g7e1f_newshockyclub
		 			WHERE ID = '$newsId'";
		$db->setQuery($sql);
		$row = $db->loadRowList();
		return $row;

	}

	public function updateNews($newsId,$date,$title,$content,$category,$publish){
		$db = JFactory::getDBO();
		$sql = "UPDATE g7e1f_newshockyclub
				SET Date = '$date', title = '$title', content = '$content', catalogues = '$category', status = '$publish'
				WHERE ID = '$newsId' ";
		$db->setQuery($sql);
		$db->query();

		return true;
	}

	public function publishNews($oneNewsId){
		$db = JFactory::getDBO();
		$sql = "UPDATE g7e1f_newshockyclub
				SET status = 'publish'
				WHERE ID = '$oneNewsId' ";
		
		$db->setQuery($sql);
		$db->query();

	}

	public function unPublishNews($oneNewsId){
		$db = JFactory::getDBO();
		$sql = "UPDATE g7e1f_newshockyclub
				SET status = 'unpublish'
				WHERE ID = '$oneNewsId' ";
		
		$db->setQuery($sql);
		$db->query();

	}
}