<?php

/*
 * WSShoutbox Model.
 *
 * @package WSShoutBox
 * @copyright (C) 2009 Wael Nasreddine <wael.nasreddine@sabayonlinux.org>, Steve <STEVE EMAIL HERE>
 * @license http://www.gnu.org/copyleft/gpl.html GNU/GPL
 * Distributed under the GPL - see LICENSE
 */

// No direct access
defined( '_JEXEC' ) or die( 'Restricted access');

jimport( 'joomla.application.component.model');

/**
 * WSShoutBoxModelWSShoutBox 
 * 
 * @uses JModel
 * @package WSShoutBox
 * @version $id$
 * @copyright (C) 2009 Wael Nasreddine <wael.nasreddine@sabayonlinux.org>, Steve <STEVE EMAIL HERE>
 * @author Wael Nasreddine (aka eMxyzptlk) <wael.nasreddine@sabayonlinux.com> 
 * @license GPLv3 http://www.gnu.org/licenses/gpl-3.0.txt
 */
class WSShoutBoxModelWSShoutBox extends JModel
{
    /**
     * data 
     * 
     * @var array
     * @access public
     */
    var $_data;

    /**
     * _buildQuery 
     *
     * Returns the query
     * 
     * @access protected
     * @return string The query to be used to retrieve the rows from the database.
     */
    function _buildQuery()
    {
        $query = 'SELECT * FROM #__WSShoutBox ';
        
        /**
         * return the defined query
         */
        return $query;
    }

    function getData()
    {
        // Let's load the data if it doesn't already exists
        if ( empty( $this->_data )) {
            $query = $this->_buildQuery();
            $this->_data = $this->_getList ( $query );
        }

        return $this->_data;

    }
}

/*
 * No closing PHP tag to avoid the risk of sending the headers to the browser !!
 */
