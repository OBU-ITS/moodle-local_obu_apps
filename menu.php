<?php
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
 * OBU Apps - User Menu
 *
 * @package    obu_apps
 * @category   local
 * @copyright  2020, Oxford Brookes University {@link http://www.brookes.ac.uk/}
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

require_once('../../config.php');

require_login();

$home = new moodle_url('/');
$dir = $home . 'local/obu_apps/';
$url = $dir . 'menu.php';

$PAGE->set_url($url);
$PAGE->set_context(context_user::instance($USER->id));
$PAGE->set_pagelayout('standard');
$title = get_string('apps', 'local_obu_apps');
$heading = get_string('title', 'local_obu_apps');
$PAGE->set_title($title);
$PAGE->set_heading($title);

// The page contents
echo $OUTPUT->header();
echo $OUTPUT->heading($heading);

// BRISC
if ((get_config('local_obu_apps', 'showbrisc') == '1') && has_capability('moodle/blog:create', context_system::instance())) {
	$url = $dir . 'brisc.php';
	echo '<h4><a href="' . $url . '">BRISC</a></h4>';
}
	
// QuAK
if ((get_config('local_obu_apps', 'showquak') == '1') && !empty($CFG->navadduserpostslinks)) {
	$url = $dir . 'quak.php';
	echo '<h4><a href="' . $url . '">QuAK</a></h4>';
}
		
// Polls
if (get_config('local_obu_apps', 'showpolls') == '1') {
	$url = $dir . 'polls.php';
	echo '<h4><a href="' . $url . '">polls.brookes</a></h4>';
}
		
// Brookes ID
if (get_config('local_obu_apps', 'showbrookesid') == '1') {
	$url = $dir . 'brookesid.php';
	echo '<h4><a href="' . $url . '">Brookes ID</a></h4>';
}
		
// BrookesEDGE
if (get_config('local_obu_apps', 'showbrookesedge') == '1') {
	$url = $dir . 'brookesedge.php';
	echo '<h4><a href="' . $url . '">BrookesEDGE</a></h4>';
}

echo $OUTPUT->footer();
