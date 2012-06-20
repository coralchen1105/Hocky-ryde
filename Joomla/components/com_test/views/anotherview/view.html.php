<?php

defined('_JEXEC') or die;

jimport('joomla.application.component.view');

class TestViewAnotherview extends JView {

    protected $name ;
    protected $studentID;
    protected $dbo;
    
    
    public function display($tpl = null) {
        echo "<br/>rex@another view";
        echo "Read Database and get all the data passing to template";
        $name = 'Meimei';
        $studentID = 'xxxxxxx';
        $dbo = '1934--0grgrr';
        
     //JRequest::setVar('layout','anothertemplate');
       
    $this->setLayout('anothertemplate');
        
        $this->name = $name;
        $this->studentID = $studentID;
        $this->dbo = $dbo;
        
        parent::display();
    }

}