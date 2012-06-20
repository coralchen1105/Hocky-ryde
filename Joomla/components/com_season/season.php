<?php


defined('_JEXEC') or die;

jimport('joomla.application.component.controller');

// Launch the controller.
$controller = JController::getInstance('Season');
$controller->execute(JRequest::getCmd('task','display'));
$controller->redirect();



?>

