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
 * OBU Apps - Brookes web app settings.
 *
 * @package    obu_apps
 * @category   local
 * @copyright  2015, Oxford Brookes University
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die;

if ($hassiteconfig) {
    $settings = new admin_settingpage(get_string('pluginname', 'local_obu_apps'), get_string('title', 'local_obu_apps'));
    $ADMIN->add('localplugins', $settings);
	$settings->add(new admin_setting_configcheckbox('local_obu_apps/showbrisc', get_string('showbrisc', 'local_obu_apps'), get_string('showbriscdesc', 'local_obu_apps'), '0'));
	$settings->add(new admin_setting_configcheckbox('local_obu_apps/showquak', get_string('showquak', 'local_obu_apps'), get_string('showquakdesc', 'local_obu_apps'), '0'));
}
