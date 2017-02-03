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
 * OBU Apps - Polls web app host page.
 *
 * @package    obu_apps
 * @category   local
 * @copyright  2016, Oxford Brookes University
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

require_once('../../config.php');

require_login();
$context = context_system::instance();

$url = new moodle_url('/local/obu_apps/polls.php');
$launch = 'https://polls.brookes.ac.uk/';
if (isset($_REQUEST['poll'])) { // A request for a specific poll
	$url .= '?poll=' . $_REQUEST['poll'];
	$launch .= '#/poll/' . $_REQUEST['poll'];
}
$heading = 'Brookes Polls';

$PAGE->set_url($url);
$PAGE->set_pagelayout('standard');
$PAGE->set_context($context);
$PAGE->set_title($heading);
$PAGE->set_heading($heading);

// The page contents
echo $OUTPUT->header();

echo '<center><iframe src="' . $launch . '" width="' . get_config('local_obu_apps', 'iframewidth'). '" height="' . get_config('local_obu_apps', 'iframeheight') . '"></iframe></center>';

echo get_config('local_obu_apps', 'describepolls');

echo $OUTPUT->footer();


