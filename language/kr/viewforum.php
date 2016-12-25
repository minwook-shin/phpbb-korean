<?php
/**
*
*이 파일은 korean Language Pack의 일부입니다.
* phpBB 포럼 소프트웨어.
*
* @copyright (c) phpBB Limited <https://www.phpbb.com>
* @license GNU 일반 공중 라이선스, 버전 2 (GPL-2.0)
*
* 전체 저작권 및 라이센스 정보는 다음을 참조하십시오.
* docs / CREDITS.txt 파일
* korean translation	2015~ minwook shin @ https://github.com/minwook-shin/phpbb-korean
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

'ACTIVE_TOPICS'=> '활동중인 주제',
'ANNOUNCEMENTS'=> '공지 사항',

'FORUM_PERMISSIONS'=> '포럼 권한',

'ICON_ANNOUNCEMENT'=> '공지 사항',
'ICON_STICKY'=> '스티커',

'LOGIN_NOTIFY_FORUM'=> '이 포럼에 대한 알림을 받았습니다. 로그인하여 보시기 바랍니다.',

'MARK_TOPICS_READ'=> '주제 읽기',

'NEW_POSTS_HOT'=> '새 소식 [인기]', // 더 이상 사용되지 않음
'NEW_POSTS_LOCKED'=> '새 게시물 [잠김]', // 더 이상 사용되지 않음
'NO_NEW_POSTS_HOT'=> '새 소식 없음 [인기]', // 더 이상 사용되지 않음
'NO_NEW_POSTS_LOCKED'=> '새 게시물 없음 [잠김]', // 더 이상 사용되지 않음
'NO_READ_ACCESS'=> '이 포럼에서 주제를 읽는 데 필요한 권한이 없습니다.',
'NO_UNREAD_POSTS_HOT'=> '읽지 않은 글 없음 [인기]',
'NO_UNREAD_POSTS_LOCKED'=> '읽지 않은 글 없음 [잠김]',

'POST_FORUM_LOCKED'=> '포럼 잠김',

'TOPICS_MARKED'=> '이 포럼의 주제가 읽기로 표시되었습니다.',

'UNREAD_POSTS_HOT'=> '읽지 않은 글 [인기]',
'UNREAD_POSTS_LOCKED'=> '읽지 않은 게시물 [잠김]',

'VIEW_FORUM'=> '포럼보기',
'VIEW_FORUM_TOPICS'=> array(
1 => '%d 화제',
2 => '%d 개 주제',
),
));
