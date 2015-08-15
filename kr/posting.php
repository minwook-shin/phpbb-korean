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
	'ADD_ATTACHMENT'			=> '업로드 첨부 파일',
	'ADD_ATTACHMENT_EXPLAIN'	=> '당신이 첨부 할 경우 하나 이상의 파일은 아래의 세부 정보를 입력합니다.',
	'ADD_FILE'					=> '파일 추가',
	'ADD_POLL'					=> '설문 조사 작성',
	'ADD_POLL_EXPLAIN'			=> '당신의 글타래로 설문 조사를 추가하지 않으려면 필드를 비워 둡니다.',
	'ALREADY_DELETED'			=> '죄송하지만 이 메시지는 이미 삭제됩니다.',
	'ATTACH_DISK_FULL'			=> '이 첨부 파일을 게시 할 수있는 충분한 디스크 공간이 부족합니다.',
	'ATTACH_QUOTA_REACHED'		=> '죄송합니다, 게시판에 첨부할수있는 할당량에 도달했습니다.',
	'ATTACH_SIG'				=> '서명을 첨부 (서명은 UCP를 통해 변경 될 수 있습니다)',

	'BBCODE_A_HELP'				=> '게시물에 넣을 첨부 파일 업로드 : [attachment=]파일이름.ext[/attachment]',
	'BBCODE_B_HELP'				=> '굵은 글씨: [b]텍스트[/b]',
	'BBCODE_C_HELP'				=> '코드 표시: [code]코드[/code]',
	'BBCODE_D_HELP'				=> '플래시: [flash=width,height]http://url[/flash]',
	'BBCODE_F_HELP'				=> '폰트 크기: [size=85]작은 텍스트[/size]',
	'BBCODE_IS_OFF'				=> '%sBB코드%s 는 <em>꺼짐</em>',
	'BBCODE_IS_ON'				=> '%sBB코드%s 는 <em>켜짐</em>',
	'BBCODE_I_HELP'				=> '기울임 꼴 텍스트: [i]텍스트[/i]',
	'BBCODE_L_HELP'				=> '리스트: [list][*]텍스트[/list]',
	'BBCODE_LISTITEM_HELP'		=> '목록 항목: [*]text',
	'BBCODE_O_HELP'				=> '정렬 된 목록: e.g. [list=1][*]첫 포인트[/list] 이거나 [list=a][*]포인트[/list]',
	'BBCODE_P_HELP'				=> '이미지 삽입: [img]http://image_url[/img]',
	'BBCODE_Q_HELP'				=> '견적 텍스트: [quote]텍스트[/quote]',
	'BBCODE_S_HELP'				=> '글꼴 색: [color=red]텍스트[/color] 이거나 [color=#FF0000]텍스트[/color]',
	'BBCODE_U_HELP'				=> '텍스트 밑줄: [u]텍스트[/u]',
	'BBCODE_W_HELP'				=> 'URL 삽입: [url]http://url[/url] 이거나 [url=http://url]URL 텍스트[/url]',
	'BBCODE_Y_HELP'				=> '리스트: 목록 요소를 추가합니다',
	'BUMP_ERROR'				=> '당신은 마지막 게시물 후 이렇게 빨리 이 글타래를 범프할 수 없습니다.',

	'CANNOT_DELETE_REPLIED'		=> '죄송하지만 당신은 답변 달리지 않은 게시물만 삭제할 수 있습니다.',
	'CANNOT_EDIT_POST_LOCKED'	=> '이 포스팅은 잠겨 있습니다. 당신은 더 이상 게시물을 편집 할 수 없습니다.',
	'CANNOT_EDIT_TIME'			=> '더 이상 편집하거나 해당 게시물을 삭제할 수 있습니다.',
	'CANNOT_POST_ANNOUNCE'		=> '죄송하지만 당신은 공지 사항을 게시 할 수 없습니다.',
	'CANNOT_POST_STICKY'		=> '죄송하지만 당신은 고정 글타래를 게시 할 수 없습니다.',
	'CHANGE_TOPIC_TO'			=> '글타래 유형 변경',
	'CHARS_POST_CONTAINS'		=> array(
		1	=> '귀하의 메시지는 %1$d 개의 문자가 포함되어 있습니다.',
		2	=> '귀하의 메시지는 %1$d 개의 문자들이 포함되어 있습니다.',
	),
	'CHARS_SIG_CONTAINS'		=> array(
		1	=> '당신의 서명에 %1$d 개의 문자가 포함되어 있습니다.',
		2	=> '당신의 서명에 %1$d 개의 문자들이 포함되어 있습니다.',
	),
	'CLOSE_TAGS'				=> '태그 닫기',
	'CURRENT_TOPIC'				=> '현재 글타래',

	'DELETE_FILE'				=> '파일 삭제',
	'DELETE_MESSAGE'			=> '메시지 삭제',
	'DELETE_MESSAGE_CONFIRM'	=> '이 메시지를 삭제 하시겠습니까?',
	'DELETE_OWN_POSTS'			=> '죄송하지만 당신은 자신의 게시물만 삭제할 수 있습니다.',
	'DELETE_PERMANENTLY'		=> '영구적으로 삭제',
	'DELETE_POST_CONFIRM'		=> '이 게시물을 삭제 하시겠습니까?',
	'DELETE_POST_PERMANENTLY_CONFIRM'	=> '이 게시물을 <strong>영구적으로</strong> 삭제하시겠습니까?',
	'DELETE_POST_PERMANENTLY'	=> '그것을 복구 할 수 없도록 영구적으로 해당 게시물을 삭제합니다.',
	'DELETE_POSTS_CONFIRM'		=> '당신은 이 게시물을 삭제 하시겠습니까?',
	'DELETE_POSTS_PERMANENTLY_CONFIRM'	=> '<strong>영구적으로</strong> 이 게시물을 삭제 하시겠습니까?',
	'DELETE_REASON'				=> '삭제 이유',
	'DELETE_REASON_EXPLAIN'		=> '삭제 지정된 이유는 운영자가 볼 수 있습니다.',
	'DELETE_POST_WARN'			=> '이 게시물 삭제',
	'DELETE_TOPIC_CONFIRM'		=> '당신이 항목을 삭제 하시겠습니까?',
	'DELETE_TOPIC_PERMANENTLY'	=> '그것을 영구적으로 이 항목을 복구 할 수 없도록 삭제',
	'DELETE_TOPIC_PERMANENTLY_CONFIRM'	=> '당신은  <strong>영구적으로</strong> 이 글타래를 삭제 하시겠습니까?',
	'DELETE_TOPICS_CONFIRM'		=> '당신은 이 글타래를 삭제 하시겠습니까?',
	'DELETE_TOPICS_PERMANENTLY_CONFIRM'	=> '당신은 <strong>영구적으로</strong> 이러한 글타래를 삭제 하시겠습니까?',
	'DISABLE_BBCODE'			=> 'BBCode 해제',
	'DISABLE_MAGIC_URL'			=> '자동으로 URL을 구문 분석하지 마십시오',
	'DISABLE_SMILIES'			=> '이모티콘 해제',
	'DISALLOWED_CONTENT'		=> '업로드 된 파일이 가능한 공격 벡터로 확인 되었기 때문에 업로드가 거부되었습니다.',
	'DISALLOWED_EXTENSION'		=> '%s 확장자는 허용되지 않습니다.',
	'DRAFT_LOADED'				=> '게시 영역에 로드 초안, 당신은 지금 당신의 게시물을 완료 할 수 있습니다. <br />당신의 초안은 게시물을 제출 한 후 삭제됩니다. ',
	'DRAFT_LOADED_PM'			=> '초안 메시지 영역에로드, 당신은 지금 당신의 개인적인 메시지를 완료 할 수 있습니다.<br />귀하의 초안이 개인 메시지를 제출 한 후 삭제됩니다. ',
	'DRAFT_SAVED'				=> '초안은 성공적으로 저장.',
	'DRAFT_TITLE'				=> '초안 제목',

	'EDIT_REASON'				=> '이 게시물 편집 이유',
	'EMPTY_FILEUPLOAD'			=> '업로드 된 파일이 비어 있습니다.',
	'EMPTY_MESSAGE'				=> '게시 할 때 당신은 메시지를 입력해야합니다.',
	'EMPTY_REMOTE_DATA'			=> '파일을 업로드 할 수 없습니다, 수동으로 파일을 업로드 해보십시오.',

	'FLASH_IS_OFF'				=> '[flash] 는 <em>꺼짐</em>',
	'FLASH_IS_ON'				=> '[flash] 는 <em>켜짐</em>',
	'FLOOD_ERROR'				=> '당신은 마지막 게시물 후 이렇게 빨리 다른 게시물을 쓸 수 없습니다.',
	'FONT_COLOR'				=> '폰트 색상',
	'FONT_COLOR_HIDE'			=> '폰트 색상 숨기기',
	'FONT_HUGE'					=> '매우 큼',
	'FONT_LARGE'				=> '큼',
	'FONT_NORMAL'				=> '보통',
	'FONT_SIZE'					=> '폰트 크기',
	'FONT_SMALL'				=> '작음',
	'FONT_TINY'					=> '매우 작음',

	'GENERAL_UPLOAD_ERROR'		=> '%s 에 첨부 파일을 업로드 할 수 없습니다.',

	'IMAGES_ARE_OFF'			=> '[img] 는 <em>꺼짐</em>',
	'IMAGES_ARE_ON'				=> '[img] 는 <em>켜짐</em>',
	'INVALID_FILENAME'			=> '%s 잘못된 파일 이름입니다.',

	'LOAD'						=> '불러오기',
	'LOAD_DRAFT'				=> '초안 불러오기',
	'LOAD_DRAFT_EXPLAIN'		=> '여기에 당신은 당신이 기록을 계속하려면 초안을 선택할 수 있습니다. 현재 게시물이 취소됩니다 현재의 모든 게시물의 내용이 삭제됩니다. 보기, 편집하고 유저 제어판 내에서 초안을 삭제합니다.',
	'LOGIN_EXPLAIN_BUMP'		=> '이 포럼에서 글타래를 범프하기 위해서는 로그인이 필요합니다.',
	'LOGIN_EXPLAIN_DELETE'		=> '이 포럼에서 게시물을 삭제하기 위해서는 로그인이 필요합니다.',
	'LOGIN_EXPLAIN_POST'		=> '이 포럼에서 게시하기 위해서는 로그인이 필요합니다.',
	'LOGIN_EXPLAIN_QUOTE'		=> '이 포럼에서 게시물을 인용하기 위해서는 로그인이 필요합니다.',
	'LOGIN_EXPLAIN_REPLY'		=> '이 포럼에서 글타래에 답변하기 위해 로그인이 필요합니다.',

	'MAX_FONT_SIZE_EXCEEDED'	=> '당신은 %d 크기로 글꼴을 사용할 수 있습니다.',
	'MAX_FLASH_HEIGHT_EXCEEDED'	=> array(
		1	=> '플래시 파일은 %d 픽셀 높이까지 할 수 있습니다.',
		2	=> '플래시 파일은 %d 픽셀 높이까지 할 수 있습니다.',
	),
	'MAX_FLASH_WIDTH_EXCEEDED'	=> array(
		1	=> '플래시 파일은 %d 픽셀 넓이까지 할 수 있습니다.',
		2	=> '플래시 파일은 %d 픽셀 넓이까지 할 수 있습니다.',
	),
	'MAX_IMG_HEIGHT_EXCEEDED'	=> array(
		1	=> '이미지는 %1$d 픽셀 높이까지 할 수 있습니다.',
		2	=> '이미지는 %1$d 픽셀 높이까지 할 수 있습니다.',
	),
	'MAX_IMG_WIDTH_EXCEEDED'	=> array(
		1	=> '이미지는 %d 픽셀 넓이까지 할 수 있습니다.',
		2	=> '이미지는 %d 픽셀 넓이까지 할 수 있습니다.',
	),

	'MESSAGE_BODY_EXPLAIN'		=> array(
		0	=> '', // zero means no limit, so we don't view a message here.
		1	=> '여기에 메시지를 입력, 그것의 <strong>%d</strong> 문자 보다 더 이상을 포함 할 수 없습니다.',
		2	=> '여기에 메시지를 입력, 그것의 <strong>%d</strong> 문자들 보다 더 이상을 포함 할 수 없습니다.',
	),
	'MESSAGE_DELETED'			=> '이 메시지는 성공적으로 삭제되었습니다.',
	'MORE_SMILIES'				=> '더 많은 이모티콘 보기',

	'NOTIFY_REPLY'				=> '리플이 달릴 시 알림',
	'NOT_UPLOADED'				=> '파일 업로드 할 수 없습니다.',
	'NO_DELETE_POLL_OPTIONS'	=> '당신은 기존의 설문 조사 옵션을 삭제할 수 없습니다.',
	'NO_PM_ICON'				=> 'PM 아이콘 없음',
	'NO_POLL_TITLE'				=> '당신은 설문 조사 제목을 입력해야합니다.',
	'NO_POST'					=> '요청 된 게시물이 존재하지 않습니다.',
	'NO_POST_MODE'				=> '게시물 모드를 지정하지않았습니다.',

	'PARTIAL_UPLOAD'			=> '업로드 된 파일은 부분적으로 만 업로드되었습니다.',
	'PHP_SIZE_NA'				=> '첨부 파일의 크기가 너무 큽니다.<br /> php.ini의 PHP에 의해 정의 된 최대 크기를 결정할 수 있습니다.',
	'PHP_SIZE_OVERRUN'			=> '첨부 파일의 크기는 최대 업로드 크기가 너무 큽니다 %1$d %2$s.<br />이 php.ini 파일에 설정되어 있으며 재정의 할 수 없습니다 유의하시기 바랍니다.',
	'PLACE_INLINE'				=> '게시물에 넣기',
	'POLL_DELETE'				=> '설문 조사 삭제',
	'POLL_FOR'					=> '대한 실행 설문 조사',
	'POLL_FOR_EXPLAIN'			=> '끝없는 설문 조사를 하려면 0을 입력합니다.',
	'POLL_MAX_OPTIONS'			=> '유저 당 옵션',
	'POLL_MAX_OPTIONS_EXPLAIN'	=> '이 투표 할 때마다 유저가 선택할 수 옵션의 수입니다.',
	'POLL_OPTIONS'				=> '설문 조사 옵션',
	'POLL_OPTIONS_EXPLAIN'		=> array(
		1	=> '새 행에 각 옵션을 놓습니다. 당신의 <strong>%d</strong> 옵션을 입력 할 수 있습니다.',
		2	=> '새 행에 각 옵션을 놓습니다. 당신의 <strong>%d</strong> 옵션을 입력 할 수 있습니다.',
	),
	'POLL_OPTIONS_EDIT_EXPLAIN'		=> array(
		1	=> '새 행에 각 옵션을 놓습니다. 당신의 <strong>%d</strong> 옵션을 입력 할 수 있습니다. 당신이 옵션을 제거하거나 추가하는 경우 이전의 모든 투표가 재설정됩니다.',
		2	=> '새 행에 각 옵션을 놓습니다. 당신의 <strong>%d</strong> 옵션들을 입력 할 수 있습니다. 당신이 옵션을 제거하거나 추가하는 경우 이전의 모든 투표가 재설정됩니다..',
	),
	'POLL_QUESTION'				=> '설문 조사 질문',
	'POLL_TITLE_TOO_LONG'		=> '설문 조사 제목은 100 개 미만의 문자를 포함해야합니다.',
	'POLL_TITLE_COMP_TOO_LONG'	=> '당신의 설문 조사 제목의 분석 크기는 BBCodes 또는 이모티콘을 제거하는 것이 좋습니다 너무 큽니다.',
	'POLL_VOTE_CHANGE'			=> '다시 투표 허용',
	'POLL_VOTE_CHANGE_EXPLAIN'	=> '사용이 가능한 유저가 자신의 투표를 변경할 수있는 경우.',
	'POSTED_ATTACHMENTS'		=> '첨부 게시됨',
	'POST_APPROVAL_NOTIFY'		=> '게시물이 승인 된 경우는 통보를받을 것입니다.',
	'POST_CONFIRMATION'			=> '게시물 확인',
	'POST_CONFIRM_EXPLAIN'		=> '자동화 된 게시물을 방지하기 위해 게시판은 확인 코드를 입력해야합니다. 코드는 이미지에 표시됩니다. 당신은 시각 장애인 또는 그렇지 않으면 이 코드를 읽을 수없는 경우 %s Board 관리자 %s에 문의하시기 바랍니다.',
	'POST_DELETED'				=> '이 게시물이 삭제되었습니다.',
	'POST_EDITED'				=> '이 게시물이 성공적으로 편집되었습니다.',
	'POST_EDITED_MOD'			=> '이 게시물을 성공적으로 편집 되었습니다,이제 공개적으로 볼 수 있습니다 하지만 전에 운영자에 의해 승인해야합니다.',
	'POST_GLOBAL'				=> '전체 공지',
	'POST_ICON'					=> '포스트 아이콘',
	'POST_NORMAL'				=> '일반',
	'POST_REVIEW'				=> '포스트 검토',
	'POST_REVIEW_EDIT'			=> '포스트 검토',
	'POST_REVIEW_EDIT_EXPLAIN'	=> '당신이 그것을 편집하는 동안 이 게시물이 다른 유저에 의해 변경되었습니다. 당신은 이 게시물의 현재 버전을 검토하고 편집을 조정 할 수 있습니다.',
	'POST_REVIEW_EXPLAIN'		=> '적어도 하나의 새로운 게시물이 이 글타래에 만들어졌습니다. 이에 비추어 게시물을 검토 할 수 있습니다.',
	'POST_STORED'				=> '이 메시지는 성공적으로 게시되었습니다.',
	'POST_STORED_MOD'			=> '이 메시지는 성공적으로 제출되었습니다, 이 공개적으로 볼 수 있습니다 전에 그러나 운영자의 승인을해야합니다.',
	'POST_TOPIC_AS'				=> '게시물 유형',
	'PROGRESS_BAR'				=> '진행 바',

	'QUOTE_DEPTH_EXCEEDED'		=> array(
		1	=> '당신은 서로 내에서 만 %d 견적을 포함 할 수있습니다.',
		2	=> '당신은 서로 내에서 만 %d 견적을 포함 할 수있습니다.',
	),
	'QUOTE_NO_NESTING'			=> '당신은 이곳에서 따옴표를 포함하지 않을 수 있습니다.',

	'REMOTE_UPLOAD_TIMEOUT'		=> '요청이 시간 초과하기 때문에 지정된 파일을 업로드 할 수 없습니다.',
	'SAVE'						=> '저장',
	'SAVE_DATE'					=> '에 저장',
	'SAVE_DRAFT'				=> '임시 보관함에 저장',
	'SAVE_DRAFT_CONFIRM'		=> '그 저장된 초안은 제목과 메시지, 다른 요소가 제거혹은 포함되기때문에 유의하시기 바랍니다. 당신은 지금 당신의 초안을 저장 하시겠습니까?',
	'SMILIES'					=> '이모티콘',
	'SMILIES_ARE_OFF'			=> '이모티콘 는 <em>꺼짐</em>',
	'SMILIES_ARE_ON'			=> '이모티콘 는 <em>켜짐</em>',
	'STICKY_ANNOUNCE_TIME_LIMIT'=> '고정/공지 시간 제한',
	'STICK_TOPIC_FOR'			=> '글타래 고정',
	'STICK_TOPIC_FOR_EXPLAIN'	=> '제한없는 고정/공지에는 0을 입력합니다. 이 번호는 게시물의 날짜를 기준으로 있습니다.',
	'STYLES_TIP'				=> '팁: 스타일은 선택한 텍스트에 신속하게 적용 할 수 있습니다.',

	'TOO_FEW_CHARS'				=> '귀하의 메시지가 너무 적은 문자가 포함되어 있습니다.',
	'TOO_FEW_CHARS_LIMIT'		=> array(
		1	=> '최소한 %1$d 개의 문자를 입력해야합니다.',
		2	=> '최소한 %1$d 개의 문자들을 입력해야합니다.',
	),
	'TOO_FEW_POLL_OPTIONS'		=> '당신은 적어도 두 개의 설문 조사 옵션을 입력해야합니다.',
	'TOO_MANY_ATTACHMENTS'		=> '다른 첨부 파일을 추가 할 수 없습니다, %d 는 최대입니다.',
	'TOO_MANY_CHARS'			=> '귀하의 메시지에 너무 많은 문자가 포함되어 있습니다.',
	'TOO_MANY_CHARS_LIMIT'		=> array(
		2	=> '허용 된 최대 문자 수는 %1$d 입니다.',
	),
	'TOO_MANY_POLL_OPTIONS'		=> '당신은 너무 많은 설문 조사 옵션을 입력하는 것을 시도했습니다.',
	'TOO_MANY_SMILIES'			=> '귀하의 메시지가 너무 많은 이모티콘이 포함되어 있습니다. 허용 이모티콘의 최대 개수는 %d 입니다.',
	'TOO_MANY_URLS'				=> '귀하의 메시지가 너무 많은 URL을 포함하고 있습니다. 허용 된 URL의 최대 개수는 %d 입니다.',
	'TOO_MANY_USER_OPTIONS'		=> '당신은 기존의 설문 조사 옵션보다 유저 당 더 많은 옵션을 지정할 수 없습니다.',
	'TOPIC_BUMPED'				=> '글타래는 성공적으로 충돌하고있다.',

	'UNAUTHORISED_BBCODE'		=> '당신은 어떤 BBCodes을 사용할 수 없습니다: %s.',
	'UNGLOBALISE_EXPLAIN'		=> '일반적인 글타래에 전체 공지되는 것을 다시 이 글타래를 전환하려면, 당신은 당신이 이 항목은 표시하고자하는 포럼을 선택해야합니다.',
	'UNSUPPORTED_CHARACTERS_MESSAGE'	=> '귀하의 메시지는 다음과 지원되지 않는 문자가 포함:<br />%s',
	'UNSUPPORTED_CHARACTERS_SUBJECT'	=> '당신의 글타래는 다음과 같은 지원되지 않는 문자가 포함:<br />%s',
	'UPDATE_COMMENT'			=> '댓글 업데이트',
	'URL_INVALID'				=> '지정한 URL이 잘못되었습니다.',
	'URL_NOT_FOUND'				=> '지정된 파일을 찾을 수 없습니다.',
	'URL_IS_OFF'				=> '[url] 는 <em>꺼짐</em>',
	'URL_IS_ON'					=> '[url] 는 <em>켜짐</em>',
	'USER_CANNOT_BUMP'			=> '이 포럼에서 글타래를 범프 수 없습니다.',
	'USER_CANNOT_DELETE'		=> '이 포럼에 게시물을 삭제할 수 없습니다.',
	'USER_CANNOT_EDIT'			=> '이 포럼에 게시물을 편집 할 수 없습니다.',
	'USER_CANNOT_REPLY'			=> '이 포럼에 회신 할 수 없습니다.',
	'USER_CANNOT_FORUM_POST'	=> '당신은 그것 때문에 포럼 형식으로 지원하지않으므로 이 포럼에 작업을 게시 할 수 없습니다.',

	'VIEW_MESSAGE'				=> '%s제출 된 메시지보기%s',
	'VIEW_PRIVATE_MESSAGE'		=> '%s제출 한 비밀 메시지보기%s',

	'WRONG_FILESIZE'			=> '이 파일은, 허용되는 최대 크기가 너무 큽니다 %1$d %2$s.',
	'WRONG_SIZE'				=> '이미지는 적어도 %1$s의 넓이여야합니다, 가장 %3$s의 폭과 %4$s의 높이에서 %2$s의 높이. 제출 된 이미지가 5%$s의 폭보다 %6$s 높다.',
));
