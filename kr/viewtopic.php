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
	'APPROVE'								=> '승인',
	'ATTACHMENT'						=> '첨부',
	'ATTACHMENT_FUNCTIONALITY_DISABLED'	=> '첨부 파일 기능을 사용할 수 없습니다.',

	'BOOKMARK_ADDED'		=> '주제를 성공적으로 북마크되었습니다.',
	'BOOKMARK_ERR'			=> '주제는 북마크하는것에 실패했습니다. 다시 시도해주세요.',
	'BOOKMARK_REMOVED'		=> '북마크된 주제를 성공적으로 삭제했습니다.',
	'BOOKMARK_TOPIC'		=> '주제 북마크',
	'BOOKMARK_TOPIC_REMOVE'	=> '북마크로부터 삭제',
	'BUMPED_BY'				=> '%1$s 의 %2$s 마지막으로 충돌됨.',
	'BUMP_TOPIC'			=> '충돌 주제',

	'CODE'					=> '코드',

	'DELETE_TOPIC'			=> '주제 삭제',
	'DELETED_INFORMATION'	=> '%1$s on %2$s 가 삭제됨',
	'DISAPPROVE'					=> '비승인',
	'DOWNLOAD_NOTICE'		=> '당신은 이 게시물에 첨부된 파일을 볼수있는 권한이 없습니다.',

	'EDITED_TIMES_TOTAL'	=> array(
		1	=> '%2$s on %3$s가 마지막으로 편집함, %1$d 시간동안 최종 편집됨.',
		2	=> ' %2$s on %3$s가 마지막으로 편집함, %1$d 시간동안 최종 편집됨.',
	),
	'EMAIL_TOPIC'			=> '이메일 주제',
	'ERROR_NO_ATTACHMENT'	=> '선택한 첨부 파일이 더 이상 존재하지 않습니다.',

	'FILE_NOT_FOUND_404'	=> '파일 <strong>%s</strong> 존재하지않습니다.',
	'FORK_TOPIC'			=> '주제 복사',
	'FULL_EDITOR'			=> '전체 편집 &amp; 미리보기',

	'LINKAGE_FORBIDDEN'		=> '당신이 볼 수있는 권한이 없습니다, 다운로드 또는 링크에서/이 사이트에서.',
	'LOGIN_NOTIFY_TOPIC'	=> '주제의 이것을 보시려면 로그인을 해주십시오.',
	'LOGIN_VIEWTOPIC'		=> '이 보드는 항목을 보려면 가입과 로그인을 해야합니다.',

	'MAKE_ANNOUNCE'				=> '“공지”로 바꾸기',
	'MAKE_GLOBAL'				=> '“글로벌”으로 바꾸기',
	'MAKE_NORMAL'				=> '“표준 주제”로 바꾸기',
	'MAKE_STICKY'				=> '“붙박이”로 바꾸기',
	'MAX_OPTIONS_SELECT'		=> array(
		1	=> '당신은 <strong>%d</strong> 옵션을 선택 할수있습니다.',
		2	=> '당신은 <strong>%d</strong> 옵션을 최대 선택 할수있습니다.',
	),
	'MISSING_INLINE_ATTACHMENT'	=> '첨부 파일은 <strong>%s</strong> 더이상 사용할 수 없습니다.',
	'MOVE_TOPIC'				=> '주제 이동',

	'NO_ATTACHMENT_SELECTED'=> '당신은 다운로드하거나 볼 수있는 첨부 파일을 선택하지 않았습니다.',
	'NO_NEWER_TOPICS'		=> '이 포럼에는 새로운 주제가 없습니다.',
	'NO_OLDER_TOPICS'		=> '이 포럼에는 오래된 항목이 없습니다.',
	'NO_UNREAD_POSTS'		=> '이 항목에 대한 읽지 않은 새 게시물이 없습니다.',
	'NO_VOTE_OPTION'		=> '투표를 할때는 옵션을 반드시 지정해야합니다..',
	'NO_VOTES'				=> '투표 없음',

	'POLL_ENDED_AT'			=> '%s 의 설문 조사가 멈춤.',
	'POLL_RUN_TILL'			=> '%s 의 설문 조사가 시작함.',
	'POLL_VOTED_OPTION'		=> '당신은 이 옵션에 투표했습니다.',
	'POST_DELETED_RESTORE'	=> '이 글은 삭제되었습니다. 복원될 수 있습니다.',
	'PRINT_TOPIC'			=> '인쇄 보기',

	'QUICK_MOD'				=> '빠른-모드 도구',
	'QUICKREPLY'			=> '빠른 댓글',
	'QUOTE'					=> '인용하기',

	'REPLY_TO_TOPIC'		=> '주제에 댓글 달기',
	'RESTORE'				=> '복원',
	'RESTORE_TOPIC'			=> '주제 복원',
	'RETURN_POST'			=> '%s글로 돌아가기%s',

	'SUBMIT_VOTE'			=> '투표 제출',

	'TOPIC_TOOLS'			=> '주제 도구',
	'TOTAL_VOTES'			=> '투표 합계',

	'UNLOCK_TOPIC'			=> '주제 잠금해제',

	'VIEW_INFO'				=> '자세한 글',
	'VIEW_NEXT_TOPIC'		=> '새로운 주제',
	'VIEW_PREVIOUS_TOPIC'	=> '주제 미리보기',
	'VIEW_RESULTS'			=> '결과 보기',
	'VIEW_TOPIC_POSTS'		=> array(
		1	=> '%d 글',
		2	=> '%d 글들',
	),
	'VIEW_UNREAD_POST'		=> '처음 읽지않은 글',
	'VOTE_SUBMITTED'		=> '당신의 투표가 캐스팅되었습니다.',
	'VOTE_CONVERTED'		=> '투표를 변경하는 것은 변환된 조사에 대하여 지원되지 않습니다.',

));
