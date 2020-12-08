<?php
/**
*
* This file is part of the American English Language Pack
* for the phpBB Forum Software.
*
* @copyright (c) phpBB Limited <https://www.phpbb.com>
* @license GNU General Public License, version 2 (GPL-2.0)
*
* For full copyright and license information, please see
* the docs/CREDITS.txt file.
*
* korean translation	2017~ minwook shin @ https://github.com/minwook-shin/phpbb-korean
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
	'ATTACHMENT_FUNCTIONALITY_DISABLED'	=> '첨부 기능이 비활성화되었습니다.',

	'BOOKMARK_ADDED'		=> '주제를 북마크에 추가했습니다.',
	'BOOKMARK_ERR'			=> '주제를 북마킹하는 데 실패했습니다. 다시 시도하십시오.',
	'BOOKMARK_REMOVED'		=> '북마크 된 주제를 삭제했습니다.',
	'BOOKMARK_TOPIC'		=> '북마크 주제',
	'BOOKMARK_TOPIC_REMOVE'	=> '북마크에서 삭제',
	'BUMPED_BY'				=> '%2$s 에서 %1$s 에 마지막으로 충돌했습니다.',
	'BUMP_TOPIC'			=> '범프 주제',

	'DELETE_TOPIC'			=> '주제 삭제',
	'DELETED_INFORMATION'	=> '%2$s 에서 %1$s 에 의해 삭제되었습니다.',
	'DISAPPROVE'					=> '비승인',
	'DOWNLOAD_NOTICE'		=> '이 게시물에 첨부 된 파일을 볼 수 있는 권한이 없습니다.',

	'EDITED_TIMES_TOTAL'	=> array(
		1	=> '%3$s 에서 %2$s 에 의해 마지막으로 편집되었으며 총 편집 시간은 %1$d 시간입니다.',
		2	=> '%3$s 에서 %2$s 에 의해 마지막으로 편집되었으며 총 %1$d 번 수정 되었습니다.',
	),
	'EMAIL_TOPIC'			=> '이메일 주제',
	'ERROR_NO_ATTACHMENT'	=> '선택한 첨부 파일이 더 이상 존재하지 않습니다.',

	'FILE_NOT_FOUND_404'	=> '<strong> %s </strong> 파일이 존재하지 않습니다.',
	'FORK_TOPIC'			=> '주제 복사',
	'FULL_EDITOR'			=> '전체 편집자 &amp; 미리보기',

	'LINKAGE_FORBIDDEN'		=> '이 사이트를 보거나 다운로드하거나 링크 할 수있는 권한이 없습니다.',
	'LOGIN_NOTIFY_TOPIC'	=> '이 주제에 대한 알림을 받으셨다면 로그인하여 보시기 바랍니다.',
	'LOGIN_VIEWTOPIC'		=> '이 주제를 보려면 게시판에 가입 및 로그인해야합니다.',

	'MAKE_ANNOUNCE'				=> '“공지” 으로 변경',
	'MAKE_GLOBAL'				=> '“전체” 으로 변경',
	'MAKE_NORMAL'				=> '“기본 주제” 으로 변경',
	'MAKE_STICKY'				=> '“고정” 으로 변경',
	'MAX_OPTIONS_SELECT'		=> array(
		1	=> '<strong>%d</strong>옵션을 선택해야됨',
		2	=> '<strong>%d</strong> 옵션까지 선택할 수 있음',
	),
	'MISSING_INLINE_ATTACHMENT'	=> '첨부파일 <strong>%s</strong>은 더이상 존재하지 않습니다',
	'MOVE_TOPIC'				=> '주제 이동',

	'NO_ATTACHMENT_SELECTED'=> '다운로드하거나 보려는 첨부 파일을 선택하지 않았습니다.',
	'NO_NEWER_TOPICS'		=> '이 포럼에는 새로운 주제가 없습니다.',
	'NO_OLDER_TOPICS'		=> '이 포럼에는 이전 항목이 없습니다.',
	'NO_UNREAD_POSTS'		=> '이 주제에 대한 새로운 읽지 않은 게시물이 없습니다.',
	'NO_VOTE_OPTION'		=> '투표 할 때 옵션을 지정해야합니다.',
	'NO_VOTES'				=> '투표 없음',
	'NO_AUTH_PRINT_TOPIC'	=> '주제를 인쇄 할 권한이 없습니다.',

	'POLL_ENDED_AT'			=> '%s 까지 투표 끝내기',
	'POLL_RUN_TILL'			=> '%s 까지 계속 투표',
	'POLL_VOTED_OPTION'		=> '이 옵션에 투표하셨습니다.',
	'POST_DELETED_RESTORE'	=> '해당 게시물이 삭제되었습니다. 복원 할 수 있습니다.',
	'PRINT_TOPIC'			=> '프린트 보기',

	'QUICK_MOD'				=> '빠른-모드 도구',
	'QUICKREPLY'			=> '빠른 댓글',

	'REPLY_TO_TOPIC'		=> '주제에 리플 달기',
	'RESTORE'				=> '복구',
	'RESTORE_TOPIC'			=> '주제 복구',
	'RETURN_POST'			=> '%s게시물로 돌아가기%s',

	'SUBMIT_VOTE'			=> '투표 제출',

	'TOPIC_TOOLS'			=> '주제 도구',
	'TOTAL_VOTES'			=> '주제 투표',

	'UNLOCK_TOPIC'			=> '주제 잠금해제',

	'VIEW_INFO'				=> '세부 게시물 게시',
	'VIEW_NEXT_TOPIC'		=> '다음 주제',
	'VIEW_PREVIOUS_TOPIC'	=> '이전 주제',
	'VIEW_RESULTS'			=> '결과 보기',
	'VIEW_TOPIC_POSTS'		=> array(
		1	=> '%d post',
		2	=> '%d posts',
	),
	'VIEW_UNREAD_POST'		=> '첫번째 안읽은 글',
	'VOTE_SUBMITTED'		=> '귀하의 투표가 중단되었습니다.',
	'VOTE_CONVERTED'		=> '변환된 투표에는 표를 변경하는 것이 지원되지 않습니다.',

));
