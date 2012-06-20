<?php
defined('_JEXEC') or die;

jimport('joomla.application.component.modellist');

/**
 * Methods supporting a list of article records.
 *
 * @package		Joomla.Administrator
 * @subpackage	com_content
 */
class HomepageModelHomepage extends JModelList
{
	/**
	 * Method to build an SQL query to load the list data.
	 *
	 * @return	string	An SQL query
	 */
	public function getListQuery()
	{
		// Create a new query object.		
		

		// $result = "abc";
		// return $result;

		 $db = JFactory::getDBO();

		 $query = "SELECT date,title,content,catalogues 
		 			FROM #__newshockyclub
		 			ORDER BY date DESC";

		 $db->setQuery($query);

		 $row = $db->loadRowList();
		//var_dump($row);exit;
		 return  $row;
		 

		
	}
}
