<?php

// This file is part of Moodle - http://moodle.org/
//
// Moodle is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.
//
// Moodle is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with Moodle.  If not, see <http://www.gnu.org/licenses/>.

/**
 * quizletquiz module admin settings and defaults
 *
 * @package    blocks
 * @subpackage quizletquiz
 * @copyright  2014 Justin Hunt (http://poodll.com)
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die;

if ($ADMIN->fulltree) {
    require_once("$CFG->libdir/resourcelib.php");

    //--- modedit defaults -----------------------------------------------------------------------------------

	  $settings->add(new admin_setting_configtext('block_quizletquiz/apikey',
        get_string('apikey', 'block_quizletquiz'), get_string('apikeyexplain', 'block_quizletquiz'), 'YOUR API KEY', PARAM_TEXT));
		
	 $settings->add(new admin_setting_configtext('block_quizletquiz/apisecret',
        get_string('apisecret', 'block_quizletquiz'), get_string('apisecretexplain', 'block_quizletquiz'), 'YOUR API SECRET', PARAM_TEXT));
	
        $settings->add(new admin_setting_configtext('block_quizletquiz/matchingsubcount', 
			get_string('matchingsubcount', 'block_quizletquiz'),get_string('matchingsubcount_details', 'block_quizletquiz') , '6', PARAM_INT)); 
         

}
