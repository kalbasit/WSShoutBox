<?php

/*
 * @package WSShoutBox
 * @copyright (C) 2009 Wael Nasreddine <wael.nasreddine@sabayonlinux.org>, Steve <STEVE EMAIL HERE>
 * @license http://www.gnu.org/copyleft/gpl.html GNU/GPL
 * Distributed under the GPL - see LICENSE
 */

// No direct access
defined( '_JEXEC' ) or die( 'Restricted access');

// Require the base controller if requested
if($controller = JRequest::getWord('controller')) {
    $path = JPATH_COMPONENT.DS.'controllers'.DS.$controller.'.php';
    if (file_exists($path))
        require_once $path;
    else
        $controller = '';
} 

// Create the controller
$classname = 'WSShoutBoxController'.$controller;
$controller = new $classname;

// Perform the requested task
$controller->execute( JREquest::getVar( 'task' ) );

// Redirect if set by the controller
$controller->redirect();

/*
 * No closing PHP tag to avoid the risk of sending the headers to the browser !!
 */
