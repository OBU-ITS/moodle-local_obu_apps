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
 * OBU Apps - Launch the Polls web app in a popup window.
 *
 * @package    obu_apps
 * @category   local
 * @copyright  2016, Oxford Brookes University
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

if (isset($_REQUEST['poll'])) {
	$poll = $_REQUEST['poll'];
} else {
	$poll = '';
}

?>
<!DOCTYPE html>
<html>
<head>
    <title>Brookes Web Apps</title>
    <meta name="author" content="Oxford Brookes University" />
    <meta charset="utf-8" />
</head>
<body>
    <script type="text/javascript">
		var poll = "<?php echo $poll; ?>";
		var launch = "https://polls.brookes.ac.uk/";
		if (poll != "") {
			launch += "#/poll/" + poll;
		}
		var popup = window.open(launch, "_blank", "width=480, height=640, location=no, menubar=no, status=no, titlebar=no, toolbar=no"); // Open a new tab for the app
		if (!popup || popup.closed || (typeof popup.closed == "undefined")) { // No popups allowed?
			window.location = launch; // Reuse the old tab
		} else {
			window.history.back(); // Take the old tab back
		}
    </script>
</body>
</html>