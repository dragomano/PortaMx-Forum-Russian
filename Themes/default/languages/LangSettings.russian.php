<?php
// Version: 1.3; LangSettings

/**
 * This file init the default forum language
 *
 * PortaMx Forum
 * @package PortaMx
 * @author PortaMx
 * @copyright 2018 PortaMx
 */

/*
	possible Time / Data format variables
	-------------------------------------
	%a - abbreviated weekday name (english - Sun .. Sat)
	%A - full weekday name (english - Sunday .. Saturday)
	%b - abbreviated month name (english - Jan .. Dec)
	%B - full month name (english - Januaray .. December)
	%d - day of the month (01 .. 31)
	%H - hour as a number (00 to 23)
	%I - hour as a number (00 to 12)
	%p - 'am' or 'pm'
	%m - month as a number (01 to 12)
	%M - minute as a number  (00 to 59)
	%I - minute as
	%S - second as a decimal number (00 to 59)
	%y - 2 digit year (00 to 99)
	%Y - 4 digit year (0000 to 2099)

	for the data-time object
	------------------------
	d and j - Day of the month, 2 digits with or without leading zeros (01 to 31 or 1 to 31)
	D and l - A textual representation of a day (Mon through Sun or Sunday through Saturday)
	S - English ordinal suffix for the day of the month (2 characters)
	z - The day of the year (starting from 0) 0 through 365
	F and M - A textual representation of a month, such as January or Sept
	m and n - Numeric representation of a month, with or without leading zeros (01 through 12 or 1 through 12)
	Y - A full numeric representation of a year, 4 digits	Examples: 1999 or 2003
	y - A two digit representation of a year (which is assumed to be in the range 1970-2069, inclusive)
	a and A - Ante meridiem and Post meridiem (am or pm)
	g and h - 12-hour format of an hour with or without leading zero (1 through 12 or 01 through 12)
	G and H - 24-hour format of an hour with or without leading zeros (0 through 23 or 00 through 23)
	i - Minutes with leading zeros (00 to 59)
	s - Seconds, with leading zeros (00 through 59)
*/

global $modSettings, $txt;

// footer offsets(0 = desctop, 1 = mobile), (3 lines, 2 lines, 1 line)
$txt['footer_offset'] = array(0 => array(95, 75, 55), 1 => array(90, 70, 50));

// Locale settings
$txt['lang_locale'] = 'ru_RU.utf8';
$txt['lang_dictionary'] = 'ru';
$txt['lang_spelling'] = '';
$txt['lang_character_set'] = 'UTF-8';
$txt['lang_rtl'] = false;
$txt['gcapcha_lang'] = 'ru';

$txt['time_am'] = 'am';
$txt['time_pm'] = 'pm';

// Number format (1 234,00)
// length decimals, decimal separator, thausend separator
$txt['number_format'] = '1,234.00';
$txt['numforms'] = array(0 => 2, 1 => ',', 2 => '&thinsp;');

// default Time format (2017 March 10, 08:30:15 pm)
$modSettings['time_format'] = '%d %B %Y, %H:%M';
$txt['default_time_format'] = '%d %B %Y, %H:%M';

// beginning of week = Sunday (only for Guests)
$txt['dp_firstday'] = 1;

// Date / Time converting
$txt['dp_format'] = 'yy-mm-dd';
$txt['dp_minDate'] = '01-01-%s';
$txt['dp_maxDate'] = '31-12-%s';
$txt['dp_from_format'] = 'Y-m-d';
$txt['dp_to_format'] = 'Y-m-d';
$txt['dp_minDate'] = '%s-01-01';
$txt['dp_maxDate'] = '%s-12-31';
$txt['dp_birstday'] = '%1$s %2$s';
$txt['dp_timeconv'] = 'h:i a';

// date converting user Birthdate
$txt['inputs_bd'] = array(
	0 => array(0 => 'bday2', 1 => 'day', 2 => 2),
	1 => array(0 => 'bday1', 1 => 'month', 2 => 2),
	2 => array(0 => 'bday3', 1 => 'year', 2 => 4)
);

// Stats format & order
$modSettings['stats_format'] = '%1$s.%2$s.%3$s';
$modSettings['stats_oder'] = array(
	0 => array(0 => '%2d', 1 => 'stats_day'),
	1 => array(0 => '%02d', 1 => 'stats_month'),
	2 => array(0 => '%04d', 1 => 'stats_year')
);

// GEOIP Country Code => default language for Guests
// Austria, Switzerland, Germany, Liechtenstein (german)
// Expand this for other languages !!!
$txt['geoip_lang'] = array(
	'AT' => 'german',
	'CH' => 'german',
	'DE' => 'german',
	'LI' => 'german',
	'RU' => 'russian');

?>