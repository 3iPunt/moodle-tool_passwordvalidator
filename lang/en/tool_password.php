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
 * 
 *
 * @package    tool_password
 * @copyright  2019 Peter Burnett <peterburnett@catalyst-au.net>
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

$string['pluginname'] = 'Password Policy Checker';
$string['passwordirapcomplexityname'] = 'Enforce IRAP Complexity Standards';
$string['passwordirapcomplexitydesc'] = 'Enforce ACSC Security Control 0421: Minimum password complexity. Passwords containing only letters must be at least 13 characters. Passwords containing at least 3 of 4: Lowercase letters, Uppercase letters, Numbers, Special characters, must be at least 10 characters.';
$string['passwordirapnumbersname'] = 'Enforce Letters and Characters in Password';
$string['passwordirapnumbersdesc'] = 'Enforce ACSC Security Control 0417: Password cannot be only numbers';
$string['passworddigitsname'] = 'Maximum Sequential Digits';
$string['passworddigitsdesc'] = 'Enforce a maximum number of sequential digits.';
$string['passworddigitsinputname'] = 'Maximum Sequential Digits Input';
$string['passworddigitsinputdesc'] = 'Maximum number of sequential digits.';
$string['passwordcharsname'] = 'Maximum Repeated Characters';
$string['passwordcharsdesc'] = 'Enforce a maximum number of repeated characters';
$string['passwordcharsinputname'] = 'Maximum Repeated Characters Input';
$string['passwordcharsinputdesc'] = 'Maximum number of sequential digits.';
$string['passwordpersonalinfoname'] = 'Personal Information Checker';
$string['passwordpersonalinfodesc'] = 'Ensure no known personal information is contained in the password.';


/*
 * Privacy provider (GDPR)
 */
$string["privacy:no_data_reason"] = "The Password Policy Checker plugin does not store any personal data.";