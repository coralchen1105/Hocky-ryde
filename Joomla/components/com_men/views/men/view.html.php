<?php
// No direct access to this file
defined('_JEXEC') or die('Restricted access');
 
// import Joomla view library
jimport('joomla.application.component.view');
 
/**
 * HTML View class for the HelloWorld Component
 */
class MenViewMen extends JView
{
    // Overwriting JView display method
    function display($tpl = null) 
    {
        $model = $this->getModel('Men'); 
        //var_dump($model); exit;
       $this->value =  $model->getListQuery();
      

      //var_dump($model); exit;
        parent::display($tpl);
    }
}
