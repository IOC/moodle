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

namespace theme_boost_ioc\output;

use coding_exception;
use html_writer;
use tabobject;
use tabtree;
use custom_menu_item;
use custom_menu;
use block_contents;
use navigation_node;
use action_link;
use stdClass;
use moodle_url;
use preferences_groups;
use action_menu;
use help_icon;
use single_button;
use paging_bar;
use context_course;
use pix_icon;

defined('MOODLE_INTERNAL') || die;

/**
 * Renderers to align Moodle's HTML with that expected by Bootstrap
 *
 * @package    theme_boost_ioc
 * @copyright  2018 Institut Obert de Catalunya
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

class core_renderer extends \theme_boost\output\core_renderer {

    /**
     * The standard tags that should be included in the <head> tag
     * including a meta description for the front page
     *
     * @return string HTML fragment.
     */
    public function standard_head_html() {
        global $PAGE;

        $output = parent::standard_head_html();

        $PAGE->requires->js('/theme/boost_ioc/javascript/clipboard.min.js', true);

        return $output;
    }

    /**
     * Returns the URL for the favicon.
     *
     * @since Moodle 2.5.1 2.6
     * @return string The favicon URL
     */
    public function favicon() {
        global $PAGE;

        $filename = 'favicon';
        if ($PAGE->theme->settings->environment != 'pro') {
            $filename = 'favicon_' . $PAGE->theme->settings->environment;
        }
        return $this->image_url($filename, 'theme');
    }

    /**
     * Get the logo URL.
     *
     * @return string
     */
    public function get_logo_url($maxwidth = 100, $maxheight = 100) {
        global $PAGE;

        $filename = 'ioc-logo';
        if ($PAGE->theme->settings->environment != 'pro') {
            $filename .= '-' . $PAGE->theme->settings->environment;
        }

        return $this->image_url($filename, 'theme');;
    }

        /**
     * Get the compact logo URL.
     *
     * @return string
     */
    public function get_compact_logo_url($maxwidth = 100, $maxheight = 100) {
        global $PAGE;

        $filename = 'ioc-logo';
        if ($PAGE->theme->settings->environment != 'pro') {
            $filename .= '-' . $PAGE->theme->settings->environment;
        }

        return $this->image_url($filename . '-sm', 'theme');;
    }
}