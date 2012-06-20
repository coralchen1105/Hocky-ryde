<?php

defined('_JEXEC') or die;

jimport('joomla.application.component.view');

class MasterViewMaster extends JView {

        
    public function display($tpl = null) {
        $model = $this->getModel('Master'); 
        //var_dump($model); exit;
        $this->value =  $model->getListQuery();
      
      //var_dump( $this->value); exit;
        
        parent::display();
    }

}