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
	'USER_TOPICS_PROFILE_TEXT'					=> 'Всего тем: ',
	'USER_TOPICS_FROM_PROFILE'					=> 'Найти все темы пользователя',
	'OWN_TOPICS_FROM_LINKS'					=> 'Ваши темы',
	'USER_TOPICS_MINIPROFILE_TEXT'					=> 'Темы пользователя',
	'USER_HAVE_NOT_TOPICS'						=> 'Пользователь не создал ни одной темы',
	'NO_OWN_TOPICS'						=> 'Вы не создали ни одной темы',
	'USER_TOPICS_FROM_MINIPROFILE'					=> 'найти',
));
