<?php

defined('_JEXEC') or die;

jimport('joomla.application.component.view');

class JuniorsViewJuniors extends JView {

  
    
    public function display($tpl = null) {
        
        
        $model = $this->getModel('Juniors'); 
        //var_dump($model); exit;
        $this->value =  $model->getListQuery();
        
        
        parent::display();
    }

}