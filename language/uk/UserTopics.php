<?php
/**
*
* my [Russian]
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
	'USER_TOPICS_PROFILE_TEXT'					=> 'Всього тем: ',
	'USER_TOPICS_FROM_PROFILE'					=> 'Знайти усі теми користувача',
	'OWN_TOPICS_FROM_LINKS'					=> 'Ваші теми',
	'USER_TOPICS_MINIPROFILE_TEXT'					=> 'Теми користувача',
	'USER_HAVE_NOT_TOPICS'						=> 'Користувач не створив жодної теми',
	'NO_OWN_TOPICS'						=> 'Ви не створили жодної теми',
	'USER_TOPICS_FROM_MINIPROFILE'					=> 'знайти',
));
