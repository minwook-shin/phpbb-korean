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
'APPROVE'=> '승인',
'ATTACHMENT'=> '첨부 파일',
'ATTACHMENT_FUNCTIONALITY_DISABLED'=> '첨부 파일 기능이 사용 중지되었습니다.',

'BOOKMARK_ADDED'=> '북 마킹 된 주제입니다.',
'BOOKMARK_ERR'=> '주제를 북마크에 저장하지 못했습니다. 다시 시도하십시오. ',
'BOOKMARK_REMOVED'=> '북마크 된 주제를 성공적으로 제거했습니다.',
'BOOKMARK_TOPIC'=> '북마크 주제',
'BOOKMARK_TOPIC_REMOVE'=> '북마크에서 제거',
'BUMPED_BY'=> '%2$s의 %1$s에 마지막으로 충돌했습니다.',
'BUMP_TOPIC'=> '범프 주제',

'CODE'=> 'Code',

'DELETE_TOPIC'=> '주제 삭제',
'DELETED_INFORMATION'=> '%2$s의 %1$s에 의해 삭제되었습니다',
'DISAPPROVE'=> '비승인',
'DOWNLOAD_NOTICE'=> '이 게시물에 첨부 된 파일을 볼 수있는 권한이 없습니다.',

'EDITED_TIMES_TOTAL'=> array(
1 => '%3$s의 %2$s에 마지막으로 편집 된 %1$d 개의 시간이 수정되었습니다.',
2 => '%3$s에 %2$s이 (가) 편집되었으며 %1$d 번 수정되었습니다.',
),
'EMAIL_TOPIC'=> '이메일 주제',
'ERROR_NO_ATTACHMENT'=> '선택한 첨부 파일이 더 이상 존재하지 않습니다.',

'FILE_NOT_FOUND_404'=> '파일 <strong> %s </ strong>이 (가) 존재하지 않습니다.',
'FORK_TOPIC'=> '주제 복사',
'FULL_EDITOR'=> '전체 편집자 &amp; 시사',

'LINKAGE_FORBIDDEN'=> '이 사이트를 보거나 다운로드하거나 링크 할 수있는 권한이 없습니다.',
'LOGIN_NOTIFY_TOPIC'=> '이 주제에 대해 통보를 받았습니다. 로그인하여 보시기 바랍니다.',
'LOGIN_VIEWTOPIC'=> '이 주제를 보시려면 보드를 등록하고 로그인해야합니다.',

'MAKE_ANNOUNCE'=> '"공지"로 변경',
'MAKE_GLOBAL'=> '"글로벌"로 변경',
'MAKE_NORMAL'=> '"표준 주제"로 변경',
'MAKE_STICKY'=> '"Sticky"로 변경',
'MAX_OPTIONS_SELECT'=> array(
1 => '<strong> % d </strong> 옵션을 선택할 수 있습니다'.
2 => '<strong> % d </strong> 옵션까지 선택할 수 있습니다',
),

'MISSING_INLINE_ATTACHMENT'=> '첨부 파일 <strong> % s </strong>을 (를) 더 이상 사용할 수 없습니다',
'MOVE_TOPIC'=> '주제 이동',

'NO_ATTACHMENT_SELECTED'=> '다운로드하거나 볼 첨부 파일을 선택하지 않았습니다.',
'NO_NEWER_TOPICS'=> '이 포럼에는 새로운 주제가 없습니다.',
'NO_OLDER_TOPICS'=> '이 포럼에는 이전 주제가 없습니다.',
'NO_UNREAD_POSTS'=> '이 주제에 대한 새로운 읽지 않은 글이 없습니다.',
'NO_VOTE_OPTION'=> '투표 할 때 옵션을 지정해야합니다.',
'NO_VOTES'=> '투표 없음',

'POLL_ENDED_AT'=> '설문 조사가 %s에 종료되었습니다',
'POLL_RUN_TILL'=> '투표가 %s까지 실행됩니다',
'POLL_VOTED_OPTION'=> '당신은이 옵션에 투표했습니다',
'POST_DELETED_RESTORE'=> '이 게시물이 삭제되었습니다. 그것은 복원 될 수 있습니다. ',
'PRINT_TOPIC'=> '인쇄보기',

'QUICK_MOD'=> '빠른 수정 도구',
'QUICKREPLY'=> 'Quick Reply',
'QUOTE'=> '견적',

'REPLY_TO_TOPIC'=> '주제에 답장',
'복원'=> '복원',
'RESTORE_TOPIC'=> '주제 복원',
'RETURN_POST'=> '%s 포스트 %s으로 돌아 가기',

'SUBMIT_VOTE'=> '투표 제출',

'TOPIC_TOOLS'=> '주제 도구',
'TOTAL_VOTES'=> '총 투표 수',

'UNLOCK_TOPIC'=> '주제 잠금 해제',

'VIEW_INFO'=> '세부 정보 게시',
'VIEW_NEXT_TOPIC'=> '다음 주제',
'VIEW_PREVIOUS_TOPIC'=> '이전 주제',
'VIEW_RESULTS'=> '결과보기',
'VIEW_TOPIC_POSTS'=> array(
1 => '% d 개의 게시물',
2 => '% d 개의 게시물',
),
'VIEW_UNREAD_POST'=> '읽지 않은 첫 번째 글',
'VOTE_SUBMITTED'=> '투표가 취소되었습니다.',
'VOTE_CONVERTED'=> '투표가 변경된 투표에 대해서는 지원되지 않습니다.',

));
