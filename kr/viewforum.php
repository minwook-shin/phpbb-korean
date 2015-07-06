<?php
/**
*
* This file is part of the phpBB Forum Software package.
*
* @copyright (c) phpBB Limited <https://www.phpbb.com>
* @license GNU General Public License, version 2 (GPL-2.0)
*
* For full copyright and license information, please see
* the docs/CREDITS.txt file.
* translation	2015~ minwook shin @ https://github.com/minwook-shin/phpbb-korean
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

// DEVELOPERS PLEASE NOTE
//
// All language files should use UTF-8 as their encoding and the files must not contain a BOM.
//
// Placeholders can now contain order information, e.g. instead of
// 'Page %s of %s' you can (and should) write 'Page %1$s of %2$s', this allows
// translators to re-order the output of data while ensuring it remains correct
//
// You do not need this where single placeholders are used, e.g. 'Message %d' is fine
// equally where a string contains only two placeholders which are used to wrap text
// in a url you again do not need to specify an order e.g., 'Click %sHERE%s' is fine

$lang = array_merge($lang, array(
	'ACTIVE_TOPICS'			=> '활성화 주제',
	'ANNOUNCEMENTS'			=> '공지사항',

	'FORUM_PERMISSIONS'		=> '포럼 권한',

	'ICON_ANNOUNCEMENT'		=> '공지',
	'ICON_STICKY'			=> '붙박이',

	'LOGIN_NOTIFY_FORUM'	=> '이것을 보려면 로그인해주셔야합니다. 포럼에 공지되어있습니다.',

	'MARK_TOPICS_READ'		=> '주제 읽기 표시',

	'NEW_POSTS_HOT'			=> '새로운 글 [ 인기있음 ]',	// Not used anymore
	'NEW_POSTS_LOCKED'		=> '새로운 글 [ 잠김 ]',	// Not used anymore
	'NO_NEW_POSTS_HOT'		=> '새로운 글없음 [ 인기있음 ]',	// Not used anymore
	'NO_NEW_POSTS_LOCKED'	=> '새로운 글없음 [ 잠김 ]',	// Not used anymore
	'NO_READ_ACCESS'		=> '포럼의 이 주제를 읽기 위해 필요한 권한이 없습니다.',
	'NO_UNREAD_POSTS_HOT'		=> '읽지않은 글 없음 [ 인기있음 ]',
	'NO_UNREAD_POSTS_LOCKED'	=> '읽지않은 글 없음 [ 잠김 ]',

	'POST_FORUM_LOCKED'		=> '포럼이 잠김',

	'TOPICS_MARKED'			=> '이제 포럼의 이 주제를 읽기 표시했습니다.',

	'UNREAD_POSTS_HOT'		=> '읽지않은 글 [ 인기있음 ]',
	'UNREAD_POSTS_LOCKED'	=> '읽지않은 글 [ 잠김 ]',

	'VIEW_FORUM'			=> '포럼 보기',
	'VIEW_FORUM_TOPICS'		=> array(
		1	=> '%d topic',
		2	=> '%d topics',
	),
));
