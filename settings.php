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
 * @copyright  2016, Oxford Brookes University
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die;

if ($hassiteconfig) {
    $settings = new admin_settingpage(get_string('pluginname', 'local_obu_apps'), get_string('title', 'local_obu_apps'));
    $ADMIN->add('localplugins', $settings);
    $settings->add(new admin_setting_configtext('local_obu_apps/iframewidth', get_string('iframewidth', 'local_obu_apps'), get_string('iframewidthexplain', 'local_obu_apps'), 360, PARAM_INT, 7));
    $settings->add(new admin_setting_configtext('local_obu_apps/iframeheight', get_string('iframeheight', 'local_obu_apps'), get_string('iframeheightexplain', 'local_obu_apps'), 640, PARAM_INT, 7));
    $settings->add(new admin_setting_configtext('local_obu_apps/popupwidth', get_string('popupwidth', 'local_obu_apps'), get_string('popupwidthexplain', 'local_obu_apps'), 360, PARAM_INT, 7));
    $settings->add(new admin_setting_configtext('local_obu_apps/popupheight', get_string('popupheight', 'local_obu_apps'), get_string('popupheightexplain', 'local_obu_apps'), 640, PARAM_INT, 7));
	$settings->add(new admin_setting_configcheckbox('local_obu_apps/showbrisc', get_string('showbrisc', 'local_obu_apps'), get_string('showbriscexplain', 'local_obu_apps'), '0'));
	$settings->add(new admin_setting_configcheckbox('local_obu_apps/showquak', get_string('showquak', 'local_obu_apps'), get_string('showquakexplain', 'local_obu_apps'), '0'));
	$settings->add(new admin_setting_configcheckbox('local_obu_apps/showpolls', get_string('showpolls', 'local_obu_apps'), get_string('showpollsexplain', 'local_obu_apps'), '0'));
}
