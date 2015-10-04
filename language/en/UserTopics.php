<?php
/**
*
* my [English]
*
* @package language quickreply
* @copyright (c) 2013 Alecto
* @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
*
*/

/**
* DO NOT CHANGE
*/
if (!defined('IN_PHPBB'))
{
	exit;
}

if (empty($lang) || !is_array($lang))
{
	$lang = array();
}

$lang = array_merge($lang, array(
	'USER_TOPICS_PROFILE_TEXT'					=> 'The total topics: ',
	'USER_TOPICS_FROM_PROFILE'					=> 'Search all user`s topics',
	'OWN_TOPICS_FROM_LINKS'					=> 'Your topics',
	'USER_TOPICS_MINIPROFILE_TEXT'					=> 'User`s topics',
	'USER_HAVE_NOT_TOPICS'						=> 'The user didn`t create any topic',
	'NO_OWN_TOPICS'						=> 'You didn`t create any topic',
	'USER_TOPICS_FROM_MINIPROFILE'					=> 'search',
));
