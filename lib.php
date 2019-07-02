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
 * OBU Apps - Provide left hand navigation links
 *
 * @package    obu_apps
 * @category   local
 * @copyright  2019, Oxford Brookes University {@link http://www.brookes.ac.uk/}
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */


function local_obu_apps_extend_navigation($navigation) {
    global $CFG;

	if (!isloggedin() || isguestuser()) {
		return;
	}
	
	$nodeHome = $navigation->children->get('1')->parent;
	$node = $nodeHome->add(get_string('apps', 'local_obu_apps'), '/local/obu_apps/menu.php', navigation_node::TYPE_SYSTEM);
	$node->showinflatnavigation = true;

	return;
}
