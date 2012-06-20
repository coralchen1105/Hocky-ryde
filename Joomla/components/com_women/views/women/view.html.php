<?php

defined('_JEXEC') or die;

jimport('joomla.application.component.view');

class WomenViewWomen extends JView {

    protected $name ;
    protected $studentID;
    protected $dbo;
    
    
    public function display($tpl = null) {
        
        
       $model = $this->getModel('Women'); 
        //var_dump($model); exit;
       $this->value =  $model->getListQuery();
      

      //var_dump($this->value); exit;
        
        parent::display();
    }

}