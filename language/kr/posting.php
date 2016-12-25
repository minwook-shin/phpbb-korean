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
'ADD_ATTACHMENT'=> '첨부 파일 올리기',
'ADD_ATTACHMENT_EXPLAIN'=> '하나 이상의 파일을 첨부하려면 아래에 세부 정보를 입력하십시오.',
'ADD_FILE'=> '파일 추가',
'ADD_POLL'=> '설문 조사 작성',
'ADD_POLL_EXPLAIN'=> '주제에 설문 조사를 추가하고 싶지 않으면 입력란을 비워 두십시오.',
'ALREADY_DELETED'=> '죄송 합니다만 이 메시지는 이미 삭제되었습니다.',
'ATTACH_DISK_FULL'=> '첨부 파일을 게시 할 여유 공간이 충분하지 않습니다.',
'ATTACH_QUOTA_REACHED'=> '죄송합니다. 보드 첨부 파일 용량에 도달했습니다.',
'ATTACH_SIG'=> '서명 첨부 (UCP를 통해 서명 변경 가능)',

	'BBCODE_A_HELP'				=> 'Inline uploaded attachment: [attachment=]filename.ext[/attachment]',
	'BBCODE_B_HELP'				=> 'Bold text: [b]text[/b]',
	'BBCODE_C_HELP'				=> 'Code display: [code]code[/code]',
	'BBCODE_D_HELP'				=> 'Flash: [flash=width,height]http://url[/flash]',
	'BBCODE_F_HELP'				=> 'Font size: [size=85]small text[/size]',
	'BBCODE_IS_OFF'				=> '%sBBCode%s is <em>OFF</em>',
	'BBCODE_IS_ON'				=> '%sBBCode%s is <em>ON</em>',
	'BBCODE_I_HELP'				=> 'Italic text: [i]text[/i]',
	'BBCODE_L_HELP'				=> 'List: [list][*]text[/list]',
	'BBCODE_LISTITEM_HELP'		=> 'List item: [*]text',
	'BBCODE_O_HELP'				=> 'Ordered list: e.g. [list=1][*]First point[/list] or [list=a][*]Point a[/list]',
	'BBCODE_P_HELP'				=> 'Insert image: [img]http://image_url[/img]',
	'BBCODE_Q_HELP'				=> 'Quote text: [quote]text[/quote]',
	'BBCODE_S_HELP'				=> 'Font color: [color=red]text[/color] or [color=#FF0000]text[/color]',
	'BBCODE_U_HELP'				=> 'Underline text: [u]text[/u]',
	'BBCODE_W_HELP'				=> 'Insert URL: [url]http://url[/url] or [url=http://url]URL text[/url]',
	'BBCODE_Y_HELP'				=> 'List: Add list element',
'BUMP_ERROR'=> '마지막 게시물 이후 곧이 주제와 충돌 할 수 없습니다.',

'CANNOT_DELETE_REPLIED'=> '죄송 합니다만 답장을받지 않은 게시물 만 삭제할 수 있습니다.',
'CANNOT_EDIT_POST_LOCKED'=> '이 게시물은 잠겨 있습니다. 해당 소식을 더 이상 수정할 수 없습니다. ',
'CANNOT_EDIT_TIME'=> '해당 게시물을 더 이상 편집하거나 삭제할 수 없습니다.',
'CANNOT_POST_ANNOUNCE'=> '죄송 합니다만 공지 사항을 게시 할 수 없습니다.',
'CANNOT_POST_STICKY'=> '죄송 합니다만 끈적 주제는 게시 할 수 없습니다.',
'CHANGE_TOPIC_TO'=> '토픽 타입 변경',
'CHARS_POST_CONTAINS'=> array(
1 => '메시지에 %1$d 자의 문자가 있습니다.',
2 => '메시지에 %1$d 자의 문자가 포함되어 있습니다.',
),
'CHARS_SIG_CONTAINS'=> array(
1 => '서명에 %1$d자가 포함되어 있습니다.',
2 => '서명에 %1$d자를 포함하고 있습니다.',
),
'CLOSE_TAGS'=> '태그 닫기',
'CURRENT_TOPIC'=> '현재 토픽',

'DELETE_FILE'=> '파일 삭제',
'DELETE_MESSAGE'=> '메시지 삭제',
'DELETE_MESSAGE_CONFIRM'=> '정말로이 메시지를 삭제 하시겠습니까?',
'DELETE_OWN_POSTS'=> '죄송 합니다만 자신의 게시물 만 삭제할 수 있습니다.',
'DELETE_PERMANENTLY'=> '영구적으로 삭제',
'DELETE_POST_CONFIRM'=> '이 게시물을 삭제 하시겠습니까?',
'DELETE_POST_PERMANENTLY_CONFIRM'=> '이 게시물을 <strong> 영구적으로 </ strong> 삭제 하시겠습니까?',
'DELETE_POST_PERMANENTLY'=> array(
1 => '이 게시물을 영구적으로 삭제하여 복구 할 수 없습니다',
2 => '%1$d 개의 게시물을 영구적으로 삭제하여 복구 할 수 없습니다',
),
'DELETE_POSTS_CONFIRM'=> '정말로이 게시물을 삭제 하시겠습니까?',
'DELETE_POSTS_PERMANENTLY_CONFIRM'=> '이 게시물을 <strong> 영구적으로 </ strong> 삭제 하시겠습니까?',
'DELETE_REASON'=> '삭제 이유',
'DELETE_REASON_EXPLAIN'=> '지정된 삭제 이유가 운영자에게 보입니다.',
'DELETE_POST_WARN'=> '이 게시물 삭제',
'DELETE_TOPIC_CONFIRM'=> '이 주제를 삭제 하시겠습니까?',
'DELETE_TOPIC_PERMANENTLY'=> array(
1 => '이 주제를 영구적으로 삭제하여 복구 할 수 없습니다',
2 => '%1$d 개의 항목을 영구적으로 삭제하여 복구 할 수 없습니다',
),
'DELETE_TOPIC_PERMANENTLY_CONFIRM'=> '이 주제를 <strong> 영구적으로 </ strong> 삭제 하시겠습니까?',
'DELETE_TOPICS_CONFIRM'=> '정말로이 주제들을 지우시겠습니까?',
'DELETE_TOPICS_PERMANENTLY_CONFIRM'=> '이 주제를 <strong> 영구적으로 </ strong> 삭제 하시겠습니까?',
'DISABLE_BBCODE'=> 'BBCode 사용 안함',
'DISABLE_MAGIC_URL'=> '자동으로 URL을 구문 분석하지 마십시오',
'DISABLE_SMILIES'=> '웃음 사용 안함',
'DISALLOWED_CONTENT'=> '업로드 된 파일이 가능한 공격 경로로 식별 되었기 때문에 업로드가 거부되었습니다.',
'DISALLOWED_EXTENSION'=> '확장 프로그램 % s이 (가) 허용되지 않습니다.',
'DRAFT_LOADED'=> '게시 영역에 초안이 로드되었습니다. 지금 게시를 완료하고 싶을 수 있습니다. <br />이 게시물을 제출하면 초안이 삭제됩니다.',
'DRAFT_LOADED_PM'=> '메시지 영역에 초안이 로드되었습니다. 비공개 메시지를 지금 끝내고 싶을 수도 있습니다. <br />이 비공개 메시지를 제출하면 초안이 삭제됩니다.',
'DRAFT_SAVED'=> '초안이 저장되었습니다.',
'DRAFT_TITLE'=> '초안 제목',

'EDIT_REASON'=> '이 게시물을 편집하는 이유',
'EMPTY_FILEUPLOAD'=> '업로드 된 파일이 비어 있습니다.',
'EMPTY_MESSAGE'=> '게시 할 때 반드시 메시지를 입력하십시오.',
'EMPTY_REMOTE_DATA'=> '파일을 업로드 할 수 없습니다. 파일을 수동으로 업로드하십시오.',

'FLASH_IS_OFF'=> '[flash]는 <em> 꺼짐 </ em>입니다'.
'FLASH_IS_ON'=> '[flash]는 <em> 켜짐 </ em>입니다',
'FLOOD_ERROR'=> '마지막 게시물 바로 뒤에 다른 게시물을 올릴 수 없습니다.',
'FONT_COLOR'=> '글꼴 색',
'FONT_COLOR_HIDE'=> '글꼴 색 가리기',
'FONT_HUGE'=> '거대한',
'FONT_LARGE'=> 'Large',
'FONT_NORMAL'=> '보통',
'FONT_SIZE'=> '글자 크기',
'FONT_SMALL'=> '작음',
'FONT_TINY'=> '작은',

'GENERAL_UPLOAD_ERROR'=> '% s에 첨부 파일을 업로드 할 수 없습니다.',

'IMAGES_ARE_OFF'=> '[img]는 <em> 사용 안함 </ em>입니다'.
'IMAGES_ARE_ON'=> '[img]는 (는) <em> 사용함 </ em>입니다'.
'INVALID_FILENAME'=> '%s은 (는) 잘못된 파일 이름입니다.',

'LOAD'=> '로드',
'LOAD_DRAFT'=> '초안로드',
'LOAD_DRAFT_EXPLAIN'=> '여기서 계속 쓰고 싶은 초안을 선택할 수 있습니다. 현재 게시물이 취소되고 현재 게시물 내용이 모두 삭제됩니다. 사용자 제어판에서 임시 보관 메일을보고 편집하고 삭제하십시오. ',
'LOGIN_EXPLAIN_BUMP'=> '이 포럼에서 주제를 부딪치게하려면 로그인해야합니다.',
'LOGIN_EXPLAIN_DELETE'=> '이 포럼 내의 게시물을 삭제하려면 로그인해야합니다.',
'LOGIN_EXPLAIN_POST'=> '이 포럼에 글을 올리려면 로그인하셔야합니다.',
'LOGIN_EXPLAIN_QUOTE'=> '이 포럼 내의 게시물을 인용하려면 로그인해야합니다.',
'LOGIN_EXPLAIN_REPLY'=> '이 포럼의 주제에 답장하려면 로그인해야합니다.',

'MAX_FONT_SIZE_EXCEEDED'=> '크기는 %d까지만 사용할 수 있습니다.',
'MAX_FLASH_HEIGHT_EXCEEDED'=> array(
1 => '플래시 파일은 최대 % d 픽셀까지만 가능합니다.',
2 => '플래시 파일의 크기는 최대 % d 픽셀까지입니다.',
),
'MAX_FLASH_WIDTH_EXCEEDED'=> array(
1 => '플래시 파일의 너비는 최대 % d 픽셀까지 가능합니다.',
2 => '플래시 파일의 너비는 최대 % d 픽셀까지 가능합니다.',
),
'MAX_IMG_HEIGHT_EXCEEDED'=> array(
1 => '귀하의 이미지는 % 1 $ d 픽셀까지만 가능합니다.',
2 => '귀하의 이미지는 최대 % 1 $ d 픽셀까지만 가능합니다.',
),
'MAX_IMG_WIDTH_EXCEEDED'=> array(
1 => '이미지의 너비는 최대 % d 픽셀까지 가능합니다.',
2 => '이미지 크기는 최대 % d 픽셀까지 가능합니다.',
),

'MESSAGE_BODY_EXPLAIN'=> array(
0 => '', // 0은 제한이 없으므로 여기서 메시지를 보지 않습니다.
1 => '여기에 메시지를 입력하십시오. 문자는 <strong> %d </ strong> 문자를 포함 할 수 없습니다.',
2 => '여기에 메시지를 입력하십시오. 문자는 <strong> %d </ strong>자를 초과 할 수 없습니다.',
),
'MESSAGE_DELETED'=> '이 메시지는 삭제되었습니다.',
'MORE_SMILIES'=> '더 많은 웃음보기',

'NOTIFY_REPLY'=> '답변이 게시되면 알림.',
'NOT_UPLOADED'=> '파일을 업로드 할 수 없습니다.',
'NO_DELETE_POLL_OPTIONS'=> '기존 투표 옵션을 삭제할 수 없습니다.',
'NO_PM_ICON'=> 'PM 아이콘 없음',
'NO_POLL_TITLE'=> '설문 조사 제목을 입력해야합니다.',
'NO_POST'=> '요청한 게시물이 없습니다.',
'NO_POST_MODE'=> '게시 모드가 지정되지 않았습니다.'




'PARTIAL_UPLOAD'=> '업로드 된 파일이 부분적으로 업로드되었습니다.',
'PHP_SIZE_NA'=> '첨부 파일의 파일 크기가 너무 큽니다. <br /> php.ini에서 PHP가 정의한 최대 크기를 알 수 없습니다.',
'PHP_SIZE_OVERRUN'=> '첨부 파일의 파일 크기가 너무 큽니다. 최대 업로드 크기는 %1$d %2$s입니다. <br />이 파일은 php.ini에서 설정되었으므로 덮어 쓸 수 없습니다.',
'PLACE_INLINE'=> '인라인 배치',
'POLL_DELETE'=> '설문지 삭제',
'POLL_FOR'=> '설문 조사 실행',
'POLL_FOR_EXPLAIN'=> '끝나지 않는 설문 조사에 대해 0을 입력하십시오.',
'POLL_MAX_OPTIONS'=> '사용자 별 옵션',
'POLL_MAX_OPTIONS_EXPLAIN'=> '이것은 투표 할 때 각 사용자가 선택할 수있는 옵션의 수입니다.',
'POLL_OPTIONS'=> '투표 옵션',
'POLL_OPTIONS_EXPLAIN'=> array(
1 => '새 행에 각 옵션을 배치하십시오. <strong> %d </ strong> 옵션을 입력 할 수 있습니다. ',
2 => '새 행에 각 옵션을 배치하십시오. <strong> %d </ strong> 옵션까지 입력 할 수 있습니다. ',
),
'POLL_OPTIONS_EDIT_EXPLAIN'=> array(
1 => '새 행에 각 옵션을 배치하십시오. <strong> %d </ strong> 옵션을 입력 할 수 있습니다. 옵션을 삭제하거나 추가하면 이전 득표가 모두 재설정됩니다. ',
2 => '새 행에 각 옵션을 배치하십시오. <strong> %d </ strong> 옵션을 입력 할 수 있습니다. 옵션을 삭제하거나 추가하면 이전 득표가 모두 재설정됩니다. ',
),
'POLL_QUESTION'=> '설문 조사 질문',
'POLL_TITLE_TOO_LONG'=> '설문 제목은 100자 미만이어야합니다.',
'POLL_TITLE_COMP_TOO_LONG'=> '설문 조사 제목의 크기가 너무 큽니다. BBCodes 또는 웃음을 제거하는 것을 고려하십시오.',
'POLL_VOTE_CHANGE'=> '재 투표 허용',
'POLL_VOTE_CHANGE_EXPLAIN'=> '활성화 된 사용자가 투표를 변경할 수 있습니다.',
'POSTED_ATTACHMENTS'=> '게시 된 첨부 파일',
'POST_APPROVAL_NOTIFY'=> '게시물이 승인되면 알림을받습니다.',
'POST_CONFIRMATION'=> '게시물 확인',
'POST_CONFIRM_EXPLAIN'=> '자동 게시를 막으려면 게시판에 확인 코드를 입력해야합니다. 코드는 아래에서 볼 수있는 이미지에 표시됩니다. 시각 장애가 있거나이 코드를 읽을 수없는 경우 % s 보드 관리자 % s에게 연락하십시오. ',
'POST_DELETED'=> '이 게시물은 삭제되었습니다.',
'POST_EDITED'=> '이 게시물은 성공적으로 수정되었습니다.',
'POST_EDITED_MOD'=> '이 소식은 성공적으로 수정되었지만 공개적으로 볼 수있게되기 전에 중재자의 승인을 받아야합니다.',
'POST_GLOBAL'=> 'Global',
'POST_ICON'=> '포스트 아이콘',
'POST_NORMAL'=> '보통',
'POST_REVIEW'=> '후기 검토',
'POST_REVIEW_EDIT'=> '후기 검토',
'POST_REVIEW_EDIT_EXPLAIN'=> '이 게시물은 편집하는 동안 다른 사용자가 변경했습니다. 이 게시물의 현재 버전을 검토하고 수정 사항을 조정할 수 있습니다. ',
'POST_REVIEW_EXPLAIN'=> '이 주제에 대해 적어도 하나 이상의 새로운 게시물이 작성되었습니다. 이 점을 고려하여 소식을 검토 할 수도 있습니다. ',
'POST_STORED'=> '이 메시지는 성공적으로 게시되었습니다.',
'POST_STORED_MOD'=> '이 메시지는 성공적으로 제출되었지만 공개적으로 볼 수있게되기 전에 사회자의 승인을 받아야합니다.',
'POST_TOPIC_AS'=> '주제 게시',
'PROGRESS_BAR'=> '진행률 표시 줄',

'QUOTE_DEPTH_EXCEEDED'=> array(
1 => '서로 % d 개의 인용문 만 삽입 할 수 있습니다.',
2 => '% d 개의 따옴표 만 끼워 넣을 수 있습니다.',
),
'QUOTE_NO_NESTING'=> '따옴표를 서로 포함 할 수 없습니다.',

'REMOTE_UPLOAD_TIMEOUT'=> '요청 시간이 초과되어 지정한 파일을 업로드 할 수 없습니다.',
'SAVE'=> '저장',
'SAVE_DATE'=> '에 저장',
'SAVE_DRAFT'=> '임시 보관함에 저장',
'SAVE_DRAFT_CONFIRM'=> '저장된 초안에는 제목과 메시지 만 포함되며 다른 요소는 제거됩니다. 지금 초안을 저장 하시겠습니까? ',
'SMILIES'=> 'Smilies',
'SMILIES_ARE_OFF'=> '웃음은 <em> 꺼짐 </ em>입니다'.
'SMILIES_ARE_ON'=> '웃음은 <em> 켜짐 </ em>입니다',
'STICKY_ANNOUNCE_TIME_LIMIT'=> '스티커 / 발표 기한',
'STICK_TOPIC_FOR'=> '스틱 주제',
'STICK_TOPIC_FOR_EXPLAIN'=> '끝나지 않는 스티커 / 공지 사항에 대해 0을 입력하십시오. 이 숫자는 게시물의 날짜와 관련이 있습니다. ',
'STYLES_TIP'=> '도움말 : 선택한 텍스트에 스타일을 빠르게 적용 할 수 있습니다.',

'TOO_FEW_CHARS'=> '메시지에 문자가 너무 적습니다.',
'TOO_FEW_CHARS_LIMIT'=> array(
1 => '문자를 %1$d 개 이상 입력해야합니다.',
2 => '적어도 %1$d자를 입력해야합니다.',
),
'TOO_FEW_POLL_OPTIONS'=> '여론 조사 옵션을 2 개 이상 입력해야합니다.',
'TOO_MANY_ATTACHMENTS'=> '다른 첨부 파일을 추가 할 수 없습니다. 최대 %d 개입니다.',
'TOO_MANY_CHARS'=> '메시지에 글자가 너무 많습니다.',
'TOO_MANY_CHARS_LIMIT'=> array(
2 => '허용되는 최대 문자 수는 %1$d 입니다.',
),
'TOO_MANY_POLL_OPTIONS'=> '투표 옵션을 너무 많이 입력하려고했습니다.',
'TOO_MANY_SMILIES'=> '메시지에 웃음 소리가 너무 많습니다. 허용되는 스마일의 최대 수는 %d 개입니다. ',
'TOO_MANY_URLS'=> '메시지에 URL이 너무 많습니다. 허용 된 최대 URL 수는 %d 개입니다. ',
'TOO_MANY_USER_OPTIONS'=> '기존 폴링 옵션보다 사용자 당 옵션을 더 지정할 수 없습니다.',
'TOPIC_BUMPED'=> '토픽이 성공적으로 부딪혔습니다.',

'UNAUTHORISED_BBCODE'=> '특정 BBCode를 사용할 수 없습니다 : %s.',
'UNGLOBALISE_EXPLAIN'=> '이 토픽을 글로벌 토픽에서 일반 토픽으로 전환하려면이 토픽을 표시 할 포럼을 선택해야합니다.',
'UNSUPPORTED_CHARACTERS_MESSAGE'=> '메시지에 다음과 같은 지원되지 않는 문자가 포함되어 있습니다 : <br /> %s',
'UNSUPPORTED_CHARACTERS_SUBJECT'=> '피사체에 지원되지 않는 문자가 포함되어 있습니다 : <br /> %s',
'UPDATE_COMMENT'=> '의견 수정',
'URL_INVALID'=> '귀하가 지정한 URL이 유효하지 않습니다.',
'URL_NOT_FOUND'=> '지정된 파일을 찾을 수 없습니다.',
'URL_IS_OFF'=> '[url]은 <em> 사용하지 않음 </ em>입니다',
'URL_IS_ON'=> '[url]은 (는) <em> 켜짐 </ em>입니다'.
'USER_CANNOT_BUMP'=> '이 포럼에서 주제를 범할 수 없습니다.',
'USER_CANNOT_DELETE'=> '이 포럼에서 게시물을 삭제할 수 없습니다.',
'USER_CANNOT_EDIT'=> '이 포럼에서 소식을 수정할 수 없습니다.',
'USER_CANNOT_REPLY'=> '이 포럼에서 답장을 보내지 못했습니다.',
'USER_CANNOT_FORUM_POST'=> '포럼 유형이 지원되지 않으므로 이 포럼에 게시 작업을 수행 할 수 없습니다.',

'VIEW_MESSAGE'=> '%s 제출 한 메시지 %s 보기',
'VIEW_PRIVATE_MESSAGE'=> '% s 제출 한 비공개 메시지 %s 보기',

'WRONG_FILESIZE'=> '파일이 너무 큽니다. 최대 허용 크기는 %1$d %2$s입니다.',
'WRONG_SIZE'=> '이미지의 넓이는 적어도 %1$s, 너비는 %2$s, 넓이는 %3$s, 너비는 %4$s 이상이어야합니다. 제출 된 이미지는 %5$s, %6$s입니다. ',
));
