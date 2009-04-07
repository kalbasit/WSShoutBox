<?php

/*
 * @package WSShoutBox
 * @copyright (C) 2009 Wael Nasreddine <wael.nasreddine@sabayonlinux.org>, Steve <STEVE EMAIL HERE>
 * @license http://www.gnu.org/copyleft/gpl.html GNU/GPL
 * Distributed under the GPL - see LICENSE
 */

// No direct access
defined( '_JEXEC' ) or die( 'Restricted access');

/**
 * Import Joomla View Class, JView 
 */
jimport( 'joomla.application.component.view' );

/**
 * WSShoutBoxViewWSShoutBox 
 * 
 * @uses JView
 * @package 
 * @copyright (C) 2009 Wael Nasreddine <wael.nasreddine@sabayonlinux.org>, Steve <STEVE EMAIL HERE>
 * @author Wael Nasreddine (aka eMxyzptlk) <wael.nasreddine@sabayonlinux.com> 
 * @license GPLv3 http://www.gnu.org/licenses/gpl-3.0.txt
 */
class WSShoutBoxViewWSShoutBox extends JView
{
    function display( $tpl = null)
    {
        JToolBarHelper::title( JText::_( 'WSShoutBox Manager' ), 'generic.png' );
        JToolBarHelper::deleteList();
        JToolBarHelper::editListX();
        JToolBarHelper::addNewX();

        // Get the data from the model
        $items =& $this->get ( 'Data' );

        $this->assignRef( 'items', $items );

        parent::display($tpl);
    }
}

/*
 * No closing PHP tag to avoid the risk of sending the headers to the browser !!
 */
