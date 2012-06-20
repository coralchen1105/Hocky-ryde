<?php


defined('_JEXEC') or die;

jimport('joomla.application.component.controller');

// Launch the controller.
$controller = JController::getInstance('Test');
$controller->execute(JRequest::getCmd('task', 'display'));
$controller->redirect();
?>

<html>
    <head></head>
    <body>
        <div id="hero">
            <div id="heroimage">
                <p>hello</p>
            </div>
            
            <div class="heroinfo"></div>
            
        </div>
    </body>
</html>
