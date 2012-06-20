<?php

defined('_JEXEC') or die;

jimport('joomla.application.component.view');

class TestViewTest extends JView {

    protected $name ;
    protected $studentID;
    protected $dbo;
    
    
    public function display($tpl = null) {
        echo "<br/>rex@view";
        echo "Read Database and get all the data passing to template";
        
        $dealID = JRequest::getVar('DealID');
        
        //TODO get deal information by dealID;
        
        $name = 'Rdgregdrgrdx';
        $studentID = '123412';
        $dbo = '1934-01-01';
        
       
        
        $this->name = $name;
        $this->studentID = $studentID;
        $this->dbo = $dbo;
        
        parent::display();
    }

}