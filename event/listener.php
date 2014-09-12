<?php
/**
*
* @package myextension
* @copyright (c) 2014 Nickname
* @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
*
*/

namespace alecto\UserTopics\event;

use Symfony\Component\EventDispatcher\EventSubscriberInterface;

class listener implements EventSubscriberInterface
{

	public function __construct(\phpbb\template\template $template, \phpbb\db\driver\driver_interface $db, \phpbb\request\request $request, $phpbb_root_path, $php_ext)
	{
		$this->template = $template;
		$this->db = $db;
		$this->request = $request;
		$this->phpbb_root_path = $phpbb_root_path;
		$this->php_ext = $php_ext;
	}

	static public function getSubscribedEvents()
	{
		return array(
			'core.user_setup'					=>	'load_language_on_setup',
			'core.memberlist_view_profile'			=> 'page_header_after',
		);
	}

	public function page_header_after($event)
	{
		$user_id = $this->request->variable('u', 0);
		$sql = 'SELECT COUNT(topic_id) as user_topics FROM ' . TOPICS_TABLE . ' WHERE topic_status <> ' . ITEM_MOVED . ' AND topic_poster = ' . (int) $user_id;
		$result = $this->db->sql_query($sql); //Выполняем запрос
		$row = $this->db->sql_fetchrow($result); //Получаем одну строку из результата
		$this->db->sql_freeresult($result); //Очищаем память от запроса
		$user_topics = $row['user_topics']; //Задаём значение результата запроса переменной $user_topics 

		$this->template->assign_vars(array(
			'PROFILE_USER_ID'	=> $user_id,
			'USER_TOPICS_COUNT'	=> $user_topics,
			        ));

	}

	public function load_language_on_setup($event)
	{
		$lang_set_ext = $event['lang_set_ext'];
		$lang_set_ext[] = array(
			'ext_name' => 'alecto/UserTopics',
			'lang_set' => 'UserTopics',
		);
		$event['lang_set_ext'] = $lang_set_ext;
	}
}
