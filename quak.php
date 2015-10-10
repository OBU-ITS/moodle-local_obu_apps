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
 * OBU Apps - QuAK web app host page.
 *
 * @package    obu_apps
 * @category   local
 * @copyright  2015, Oxford Brookes University
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

require_once('../../config.php');

require_login();
$context = context_system::instance();

$url = new moodle_url('/local/obu_apps/quak.php');
$launch = new moodle_url('/local/obu_apps/launch.php?app=quak&service=question_service');
$heading = 'QuAK';

$PAGE->set_url($url);
$PAGE->set_pagelayout('standard');
$PAGE->set_context($context);
$PAGE->set_title($heading);
$PAGE->set_heading($heading);

// The page contents
echo $OUTPUT->header();

echo '<center><iframe src="' . $launch . '" width="480" height="680"></iframe></center>';

?>
<h3>Questions, Answers, Knowledge</h3>
This web and mobile app was developed by OBIS-IS and is based on an original idea by student Tom Wilford for use by our current students.<br />
The app allows students to ask questions in lectures (anonymously or non-anonymously) and allows their lecturers or other students to provide answers to these questions.
<h4>Get the Mobile App</h4>
<p><a href="https://play.google.com/store/apps/details?id=uk.ac.brookes.questions" target="_blank"><img src="images/android.png" alt="Android Mobiles"></a></p>
<p><a href="https://itunes.apple.com/gb/app/quak/id966528398?mt=8" target="_blank"><img src="images/ios.png" alt="Apple Mobiles"></a></p>
<?php

echo $OUTPUT->footer();


