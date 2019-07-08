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
 *  Password Policy Checker Settings input
 *
 * @package    tool_passwordvalidator
 * @copyright  Peter Burnett <peterburnett@catalyst-au.net>
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

// Return Functions
function get_template() {
    // EDIT TEMPLATE HERE
    $template = 'ISM0519.php';
    return $template;
}

function get_enable_template() {
    // SET TRUE OR FALSE HERE
    $usetemplate = false;
    return $usetemplate;
}

function get_selected_dictionary(){
    //Enter Dictionary path here
    $dictionary = 'google-10000-english.txt';
    return $dictionary;
}
