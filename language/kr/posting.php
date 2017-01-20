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
	'ADD_ATTACHMENT'			=> '첨부 파일 업로드',
	'ADD_ATTACHMENT_EXPLAIN'	=> '하나 이상의 파일을 첨부하려면 아래에 세부 정보를 입력하십시오.',
	'ADD_FILE'					=> '파일 추가',
	'ADD_POLL'					=> '설문 조사 작성',
	'ADD_POLL_EXPLAIN'			=> '주제에 설문 조사를 추가하고 싶지 않으면 입력란을 비워 두십시오.',
	'ALREADY_DELETED'			=> '죄송 합니다만이 메시지는 이미 삭제되었습니다.',
	'ATTACH_DISK_FULL'			=> '첨부 파일을 게시 할 여유 공간이 충분하지 않습니다.',
	'ATTACH_QUOTA_REACHED'		=> '죄송합니다. 보드 첨부 파일 용량에 도달했습니다.',
	'ATTACH_SIG'				=> '서명 첨부 (UCP를 통해 서명 변경 가능)',

	'BBCODE_A_HELP'				=> '인라인 업로드 첨부 파일: [attachment=]filename.ext[/attachment]',
	'BBCODE_B_HELP'				=> '굵은 글씨체: [b]텍스트[/b]',
	'BBCODE_C_HELP'				=> '코드 표시: [code]코드[/code]',
	'BBCODE_D_HELP'				=> '플래시: [flash=width,height]http://url[/flash]',
	'BBCODE_F_HELP'				=> '폰트 크기: [size=85]작은 텍스트[/size]',
	'BBCODE_IS_OFF'				=> '%sBBCode%s 가 <em>꺼짐</em>',
	'BBCODE_IS_ON'				=> '%sBBCode%s 가 <em>켜짐</em>',
	'BBCODE_I_HELP'				=> '기울임꼴 텍스트: [i]텍스트[/i]',
	'BBCODE_L_HELP'				=> '리스트: [list][*]텍스트[/list]',
	'BBCODE_LISTITEM_HELP'		=> '리스트 아이템: [*]텍스트',
	'BBCODE_O_HELP'				=> '순서 지정 목록: e.g. [list=1][*]First point[/list] or [list=a][*]Point a[/list]',
	'BBCODE_P_HELP'				=> '그림 삽입: [img]http://image_url[/img]',
	'BBCODE_Q_HELP'				=> '게시물 인용: [quote]텍스트[/quote]',
	'BBCODE_S_HELP'				=> '폰트 색: [color=red]텍스트[/color] or [color=#FF0000]텍스트[/color]',
	'BBCODE_U_HELP'				=> '밑줄 텍스트: [u]텍스트[/u]',
	'BBCODE_W_HELP'				=> 'URL 삽입: [url]http://url[/url] or [url=http://url]URL 텍스트[/url]',
	'BBCODE_Y_HELP'				=> '리스트: 목록 요소 추가',
	'BUMP_ERROR'				=> '마지막 게시물 이후 곧이 주제를 부딪 칠 수 없습니다.',

	'CANNOT_DELETE_REPLIED'		=> '죄송하지만 답장을 받지 않은 게시물만 삭제할 수 있습니다.',
	'CANNOT_EDIT_POST_LOCKED'	=> '이 게시물은 잠겼습니다. 해당 소식을 더 이상 수정할 수 없습니다. ',
	'CANNOT_EDIT_TIME'			=> '해당 게시물을 더 이상 편집하거나 삭제할 수 없습니다.',
	'CANNOT_POST_ANNOUNCE'		=> '죄송하지만 공지 사항을 게시 할 수 없습니다.',
	'CANNOT_POST_STICKY'		=> '죄송하지만 고정 주제는 게시 할 수 없습니다.',
	'CHANGE_TOPIC_TO'			=> '주제 타입 변경',
	'CHARS_POST_CONTAINS'		=> array(
		1	=> '메시지에 %1$d 자의 문자가 있습니다.',
		2	=> '메시지에 %1$d 자의 문자가 있습니다.',
	),
	'CHARS_SIG_CONTAINS'		=> array(
		1	=> '서명에 %1$d 자의 문자가 있습니다.',
		2	=> '서명에 %1$d 자의 문자가 있습니다.',
	),
	'CLOSE_TAGS'				=> '태그 닫기',
	'CURRENT_TOPIC'				=> '최근 주제',

	'DELETE_FILE'				=> '파일 삭제',
	'DELETE_MESSAGE'			=> '메시지 삭제',
	'DELETE_MESSAGE_CONFIRM'	=> '이 메시지를 정말로 삭제하시겠습니까?',
	'DELETE_OWN_POSTS'			=> '죄송합니다만 본인의 게시물만 삭제할 수 있습니다.',
	'DELETE_PERMANENTLY'		=> '영구 삭제',
	'DELETE_POST_CONFIRM'		=> '이 게시물을 정말로 삭제하시겠습니까?',
	'DELETE_POST_PERMANENTLY_CONFIRM'	=> '이 게시물을 정말 <strong>영구적으로</strong> 삭제하시겠습니까?',
	'DELETE_POST_PERMANENTLY'	=> array(
		1	=> '이 게시물을 영구적으로 삭제하여 복구 할 수 없습니다.',
		2	=> '%1$d 개의 게시물을 영구적으로 삭제하여 복구 할 수 없습니다.',
	),
	'DELETE_POSTS_CONFIRM'		=> '이 게시물을 삭제 하시겠습니까?',
	'DELETE_POSTS_PERMANENTLY_CONFIRM'	=> '이 게시물을 <strong>영구적으로</strong> 삭제하시겠습니까?',
	'DELETE_REASON'				=> '삭제 사유',
	'DELETE_REASON_EXPLAIN'		=> '지정된 삭제 이유는 운영자에게 표시됩니다.',
	'DELETE_POST_WARN'			=> '이 게시물 삭제',
	'DELETE_TOPIC_CONFIRM'		=> '이 주제를 삭제 하시겠습니까?',
	'DELETE_TOPIC_PERMANENTLY'	=> array(
		1	=> '복구 할 수 없도록 이 주제를 영구적으로 삭제했습니다',
		2	=> '%1$d 개의 항목을 영구적으로 삭제하여 복구 할 수 없습니다',
	),
	'DELETE_TOPIC_PERMANENTLY_CONFIRM'	=> '이 주제를 <strong>영구적으로</strong> 삭제 하시겠습니까?',
	'DELETE_TOPICS_CONFIRM'		=> '이 주제를 삭제 하시겠습니까?',
	'DELETE_TOPICS_PERMANENTLY_CONFIRM'	=> '이 주제를 <strong>영구적으로</strong> 삭제 하시겠습니까?',
	'DISABLE_BBCODE'			=> 'BBCode 비활성화',
	'DISABLE_MAGIC_URL'			=> 'URL을 자동으로 구문분석하지 않습니다',
	'DISABLE_SMILIES'			=> 'smilies 비활성화',
	'DISALLOWED_CONTENT'		=> '업로드 된 파일이 가능한 공격 경로로 식별 되었기 때문에 업로드가 거부되었습니다.',
	'DISALLOWED_EXTENSION'		=> '확장프로그램 %s 이 허용되지않았습니다.',
	'DRAFT_LOADED'				=> '임시 보관함에 게시되면 임시 보관함에 게시 할 수 있습니다. <br />이 게시물을 제출하면 임시 보관함이 삭제됩니다.',
	'DRAFT_LOADED_PM'			=> '임시 보관함을 메시지 영역에 로드하면 비공개 메시지를 지금 끝내고 싶을 수 있습니다. <br />이 비공개 메시지를 제출하면 초안이 삭제됩니다.',
	'DRAFT_SAVED'				=> '초안이 성공적으로 저장되었습니다.',
	'DRAFT_TITLE'				=> '임시 제목',

	'EDIT_REASON'				=> '이 게시물을 편집하는 이유',
	'EMPTY_FILEUPLOAD'			=> '업로드 된 파일이 비어 있습니다.',
	'EMPTY_MESSAGE'				=> '게시 할 때 메시지를 입력해야합니다.',
	'EMPTY_REMOTE_DATA'			=> '파일을 업로드 할 수 없습니다. 수동으로 파일을 업로드 해보십시오.',

	'FLASH_IS_OFF'				=> '[flash] 가 <em>꺼짐</em>',
	'FLASH_IS_ON'				=> '[flash] 가 <em>켜짐</em>',
	'FLOOD_ERROR'				=> '마지막 순간부터 곧 다른 게시물을 올릴 수는 없습니다.',
	'FONT_COLOR'				=> '폰트 색',
	'FONT_COLOR_HIDE'			=> '폰트 색 숨기기',
	'FONT_HUGE'					=> '거대함',
	'FONT_LARGE'				=> '큼',
	'FONT_NORMAL'				=> '보통',
	'FONT_SIZE'					=> '폰트 사이즈',
	'FONT_SMALL'				=> '작음',
	'FONT_TINY'					=> '더 작음',

	'GENERAL_UPLOAD_ERROR'		=> '%s 에 첨부 파일을 업로드 할 수 없습니다.',

	'IMAGES_ARE_OFF'			=> '[img] 가 <em>꺼짐</em>',
	'IMAGES_ARE_ON'				=> '[img] 가 <em>켜짐</em>',
	'INVALID_FILENAME'			=> '%s 는 잘못된 이름입니다.',

	'LOAD'						=> '불러오기',
	'LOAD_DRAFT'				=> '초안 불러오기',
	'LOAD_DRAFT_EXPLAIN'=> '여기서 계속 쓰고 싶은 초안을 선택할 수 있습니다. 현재 게시물이 취소되고 현재 게시물 내용이 모두 삭제됩니다. 사용자 제어판에서 임시 보관 메일을 보고 편집하고 삭제하십시오. ',
	'LOGIN_EXPLAIN_BUMP'=> '이 포럼에서 주제를 부딪치게하려면 로그인해야합니다.',
	'LOGIN_EXPLAIN_DELETE'=> '이 포럼 내의 게시물을 삭제하려면 로그인해야합니다.',
	'LOGIN_EXPLAIN_POST'=> '이 포럼에 글을 올리려면 로그인해야합니다.',
	'LOGIN_EXPLAIN_QUOTE'=> '이 포럼 내의 게시물을 인용하려면 로그인해야합니다.',
	'LOGIN_EXPLAIN_REPLY'=> '이 포럼의 주제에 답장하려면 로그인해야합니다.',

	'MAX_FONT_SIZE_EXCEEDED'	=> '%d 크기의 글꼴만 사용할 수 있습니다.',
	'MAX_FLASH_HEIGHT_EXCEEDED'	=> array(
		1	=> '플래시 파일은 최대 %d 픽셀까지만 가능합니다.',
		2	=> '플래시 파일은 최대 %d 픽셀까지만 가능합니다.',
	),
	'MAX_FLASH_WIDTH_EXCEEDED'	=> array(
		1	=> '플래시 파일의 너비는 최대 %d 픽셀 일 수 있습니다.',
		2	=> '플래시 파일의 너비는 최대 %d 픽셀 일 수 있습니다.',
	),
	'MAX_IMG_HEIGHT_EXCEEDED'	=> array(
		1	=> '이미지는 %1$d 픽셀까지만 가능합니다.',
		2	=> '이미지는 %1$d 픽셀까지만 가능합니다.',
	),
	'MAX_IMG_WIDTH_EXCEEDED'	=> array(
		1	=> '이미지의 너비는 최대 %d 픽셀까지입니다.',
		2	=> '이미지의 너비는 최대 %d 픽셀까지입니다.',
	),

	'MESSAGE_BODY_EXPLAIN'		=> array(
		0	=> '', // zero means no limit, so we don't view a message here.
		1	=> '여기에 메시지를 입력하십시오. 메시지에는 <strong> %d </strong>문자만 포함될 수 있습니다.',
		2	=> '여기에 메시지를 입력하십시오. 메시지에는 <strong> % d </strong>자를 포함 할 수 없습니다.',
	),
	'MESSAGE_DELETED'			=> '이 메시지는 성공적으로 삭제되었습니다.',
	'MORE_SMILIES'				=> '더 많은 smilies 보기',

	'NOTIFY_REPLY'				=> '답변이 게시되면 알려주기',
	'NOT_UPLOADED'				=> '파일을 업로드 할 수 없습니다.',
	'NO_DELETE_POLL_OPTIONS'	=> '기존 설문 옵션을 삭제할 수 없습니다.',
	'NO_PM_ICON'				=> 'PM 아이콘 없음',
	'NO_POLL_TITLE'				=> '설문 조사 제목을 입력해야합니다.',
	'NO_POST'					=> '요청한 게시물이 존재하지 않습니다.',
	'NO_POST_MODE'				=> '게시 모드가 지정되지 않았습니다.',
	'NO_TEMP_DIR'				=> '임시 폴더를 찾을 수 없거나 쓸 수 없습니다.',

	'PARTIAL_UPLOAD'			=> '업로드 된 파일의 일부만 업로드되었습니다.',
	'PHP_UPLOAD_STOPPED'		=> 'PHP 확장 프로그램이 파일 업로드를 중단했습니다.',
	'PHP_SIZE_NA'				=> '첨부 파일 크기가 너무 큽니다. <br /> php.ini에서 PHP가 정의한 최대 크기를 결정할 수 없습니다.',
	'PHP_SIZE_OVERRUN'			=> '첨부 파일 크기가 너무 큽니다. 최대 업로드 크기는 %1$d %2$s 입니다. <br />이 설정은 php.ini에 설정되어 있으며 재정의 할 수 없습니다.',
	'PLACE_INLINE'				=> '인라인 배치',
	'POLL_DELETE'				=> '설문 삭제',
	'POLL_FOR'					=> '설문 조사 실행',
	'POLL_FOR_EXPLAIN'			=> '끝나지 않는 설문 조사에 대해서는 0을 입력하십시오.',
	'POLL_MAX_OPTIONS'			=> '사용자 별 옵션',
	'POLL_MAX_OPTIONS_EXPLAIN'	=> '이것은 투표 할 때 각 사용자가 선택할 수 있는 옵션 수입니다.',
	'POLL_OPTIONS'				=> '설문 옵션',
	'POLL_OPTIONS_EXPLAIN'		=> array(
		1	=> '각 옵션을 새 행에 배치하십시오. <strong> %d </strong>옵션을 입력 할 수 있습니다.',
		2	=> '각 옵션을 새 행에 배치하십시오. <strong> %d </strong>옵션을 입력 할 수 있습니다..',
	),
	'POLL_OPTIONS_EDIT_EXPLAIN'		=> array(
		1	=> '각 옵션을 새 행에 배치하십시오. <strong> %d </strong>옵션을 입력 할 수 있습니다. 옵션을 제거하거나 추가하면 이전 득표가 모두 재설정됩니다.',
		2	=> '각 옵션을 새 행에 배치하십시오. <strong> % d </strong>옵션을 입력 할 수 있습니다. 옵션을 제거하거나 추가하면 이전 득표가 모두 재설정됩니다.',
	),
	'POLL_QUESTION'				=> '설문 질문',
	'POLL_TITLE_TOO_LONG'		=> '설문 제목은 100 자 미만이어야합니다.',
	'POLL_TITLE_COMP_TOO_LONG'	=> '설문 조사 제목의 구문 분석 된 크기가 너무 큽니다, BBCodes 혹은 smilies 제거를 고려해보세요.',
	'POLL_VOTE_CHANGE'			=> '다시-투표 허용',
	'POLL_VOTE_CHANGE_EXPLAIN'	=> '활성화 된 사용자는 투표를 변경할 수 있습니다.',
	'POSTED_ATTACHMENTS'		=> '게시 된 첨부 파일',
	'POST_APPROVAL_NOTIFY'		=> '귀하의 게시물이 승인되면 귀하에게 통지됩니다.',
	'POST_CONFIRMATION'			=> '게시물 확정',
	'POST_CONFIRM_EXPLAIN'		=> '자동 게시를 방지하기 위해 게시판에 확인 코드를 입력해야합니다. 코드는 아래에서 볼 수있는 이미지에 표시됩니다. 시각 장애가 있거나 이 코드를 읽을 수없는 경우 %s 보드 관리자 %s 에게 연락하십시오.',
	'POST_DELETED'				=> '이 게시물은 성공적으로 삭제되었습니다.',
	'POST_EDITED'				=> '이 게시물은 성공적으로 수정되었습니다.',
	'POST_EDITED_MOD'			=> '이 소식은 성공적으로 수정되었지만 공개적으로 볼 수 있게 되기 전에 운영자의 승인을 받아야합니다.',
	'POST_GLOBAL'				=> '전체',
	'POST_ICON'					=> '게시물 아이콘',
	'POST_NORMAL'				=> '보통',
	'POST_REVIEW'				=> '리뷰 게시',
	'POST_REVIEW_EDIT'			=> '리뷰 게시',
	'POST_REVIEW_EDIT_EXPLAIN'	=> '이 게시물은 편집하는 동안 다른 사용자가 변경했습니다. 이 게시물의 최신 버전을 검토하고 수정 사항을 조정할 수 있습니다.',
	'POST_REVIEW_EXPLAIN'		=> '이 주제에 대해 적어도 하나 이상의 새로운 게시물이 작성되었습니다. 이 점을 고려하여 소식을 검토 할 수 있습니다.',
	'POST_STORED'				=> '이 메시지는 성공적으로 게시되었습니다.',
	'POST_STORED_MOD'			=> '이 메시지는 성공적으로 제출되었지만 공개적으로 볼 수 있으려면 운영자의 승인을 받아야합니다.',
	'POST_TOPIC_AS'				=> '주제를 다음으로 게시',
	'PROGRESS_BAR'				=> '진행바',

	'QUOTE_DEPTH_EXCEEDED'		=> array(
		1	=> '서로 %d 인용구만 포함 할 수 있습니다.',
		2	=> '서로 %d 인용구만 포함 할 수 있습니다.',
	),
	'QUOTE_NO_NESTING'			=> '따옴표를 서로 포함 할 수 없습니다.',

	'REMOTE_UPLOAD_TIMEOUT'		=> '요청 시간이 초과되어 지정한 파일을 업로드 할 수 없습니다.',
	'SAVE'						=> '저장',
	'SAVE_DATE'					=> '저장',
	'SAVE_DRAFT'				=> '초안 저장',
	'SAVE_DRAFT_CONFIRM'		=> '저장된 초안에는 제목과 메시지만 포함되며 다른 요소는 제거됩니다. 지금 임시 보관함을 저장 하시겠습니까?',
	'SMILIES'					=> 'Smilies',
	'SMILIES_ARE_OFF'			=> 'Smilies 가 <em>꺼짐</em>',
	'SMILIES_ARE_ON'			=> 'Smilies 가 <em>켜짐</em>',
	'STICKY_ANNOUNCE_TIME_LIMIT'=> '고정/공지 시간 제한',
	'STICK_TOPIC_FOR'			=> '고정 공지',
	'STICK_TOPIC_FOR_EXPLAIN'	=> '고정/공지의 끝이 없으면 0을 입력하십시오. 이 번호는 게시물의 날짜와 관련이 있습니다.',
	'STYLES_TIP'				=> '팁 : 선택한 텍스트에 스타일을 빠르게 적용 할 수 있습니다.',

	'TOO_FEW_CHARS'				=> '메시지에 문자가 너무 적습니다.',
	'TOO_FEW_CHARS_LIMIT'		=> array(
		1	=> '%1$d 자 이상을 입력해야합니다.',
		2	=> '%1$d 자 이상을 입력해야합니다.',
	),
	'TOO_FEW_POLL_OPTIONS'		=> '최소 두 개의 설문 조사 옵션을 입력해야합니다.',
	'TOO_MANY_ATTACHMENTS'		=> '다른 첨부 파일을 추가 할 수 없습니다. %d 은 최대입니다.',
	'TOO_MANY_CHARS'			=> '메시지에 너무 많은 문자가 포함되어 있습니다.',
	'TOO_MANY_CHARS_LIMIT'		=> array(
		2	=> '최대 허용 문자 수는 %1$d 입니다.',
	),
	'TOO_MANY_POLL_OPTIONS'		=> '설문 조사 옵션을 너무 많이 입력하려고했습니다.',
	'TOO_MANY_SMILIES'			=> '메시지에 너무 많은 smilies이 있습니다. 허용 된 최대 smilies 수는 %d 개입니다.',
	'TOO_MANY_URLS'				=> '메시지에 너무 많은 URL이 있습니다. 허용 된 최대 URL 수는 %d 개입니다.',
	'TOO_MANY_USER_OPTIONS'		=> '기존 설문 옵션보다 사용자 별 옵션을 더 지정할 수 없습니다.',
	'TOPIC_BUMPED'				=> '주제가 성공적으로 부딪혔습니다.',

	'UNAUTHORISED_BBCODE'		=> '특정 BBCode는 사용할 수 없습니다: %s.',
	'UNGLOBALISE_EXPLAIN'		=> '이 주제를 전체 주제에서 일반 주제로 전환하려면 이 주제를 표시 할 포럼을 선택해야합니다.',
	'UNSUPPORTED_CHARACTERS_MESSAGE'	=> '메시지에 다음과 같은 지원되지 않는 문자가 포함되어 있습니다:<br />%s',
	'UNSUPPORTED_CHARACTERS_SUBJECT'	=> '제목에 다음과 같은 지원되지 않는 문자가 포함되어 있습니다:<br />%s',
	'UPDATE_COMMENT'			=> '설명 업데이트',
	'URL_INVALID'				=> '지정한 URL이 잘못되었습니다.',
	'URL_NOT_FOUND'				=> '지정된 파일을 찾을 수 없습니다.',
	'URL_IS_OFF'				=> '[url] 이 <em>꺼짐</em>',
	'URL_IS_ON'					=> '[url] 이 <em>켜짐</em>',
	'USER_CANNOT_BUMP'			=> '이 포럼에서는 주제를 범할 수 없습니다.',
	'USER_CANNOT_DELETE'		=> '이 포럼에서는 게시물을 삭제할 수 없습니다.',
	'USER_CANNOT_EDIT'			=> '이 포럼에서는 게시물을 수정할 수 없습니다.',
	'USER_CANNOT_REPLY'			=> '이 포럼에서 답장을 보낼 수 없습니다.',
	'USER_CANNOT_FORUM_POST'	=> '포럼을 지원하지 않는 포럼 유형으로 인해 이 포럼에 게시 작업을 수행 할 수 없습니다.',

	'VIEW_MESSAGE'				=> '%s제출된 메시지보기%s',
	'VIEW_PRIVATE_MESSAGE'		=> '%s제출된 비공개 메시지보기%s',

	'WRONG_FILESIZE'			=> '파일이 너무 크고, 최대 허용 크기는 %1$d %2$s 입니다.',
	'WRONG_SIZE'				=> '이미지의 너비는 %1$s, 너비는 %2$s, 넓이는 %3$s, 높이는 %4$s 이상이어야합니다. 제출 된 이미지의 너비는 %5$s 이고 높이는 %6$s 입니다.',
));
