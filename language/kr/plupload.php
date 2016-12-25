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
'PLUPLOAD_ADD_FILES'=> '파일 추가',
'PLUPLOAD_ADD_FILES_TO_QUEUE'=> '업로드 대기열에 파일을 추가하고 시작 버튼을 클릭하십시오.',
'PLUPLOAD_ALREADY_QUEUED'=> '%s은 이미 대기열에 있습니다.',
'PLUPLOAD_CLOSE'=> '닫기',
'PLUPLOAD_DRAG'=> '파일을 여기로 드래그하십시오.',
'PLUPLOAD_DUPLICATE_ERROR'=> '중복 된 파일 오류입니다.',
'PLUPLOAD_DRAG_TEXTAREA'=> '메시지 상자에 파일을 드래그 앤 드롭하여 첨부 할 수도 있습니다.',
'PLUPLOAD_ERR_INPUT'=> '입력 스트림을 열지 못했습니다.',
'PLUPLOAD_ERR_MOVE_UPLOADED'=> '업로드 한 파일을 옮기지 못했습니다.',
'PLUPLOAD_ERR_OUTPUT'=> '출력 스트림을 열지 못했습니다.',
'PLUPLOAD_ERR_FILE_TOO_LARGE'=> '파일이 너무 큽니다 :',
'PLUPLOAD_ERR_FILE_COUNT'=> '파일 수 오류.',
'PLUPLOAD_ERR_FILE_INVALID_EXT'=> '잘못된 파일 확장자 :',
'PLUPLOAD_ERR_RUNTIME_MEMORY'=> '런타임에서 사용 가능한 메모리가 부족합니다.',
'PLUPLOAD_ERR_UPLOAD_URL'=> '업로드 URL이 잘못되었거나 존재하지 않습니다.',
'PLUPLOAD_EXTENSION_ERROR'=> '파일 확장자 오류.',
'PLUPLOAD_FILE'=> '파일 : %s',
'PLUPLOAD_FILE_DETAILS'=> '파일 : %s, 크기 : %d, 최대 파일 크기 : %d',
'PLUPLOAD_FILENAME'=> '파일 이름',
'PLUPLOAD_FILES_QUEUED'=> '%d 개 파일 대기 중',
'PLUPLOAD_GENERIC_ERROR'=> '일반적인 오류.',
'PLUPLOAD_HTTP_ERROR'=> 'HTTP 오류.',
'PLUPLOAD_IMAGE_FORMAT'=> '이미지 형식이 잘못되었거나 지원되지 않습니다.',
'PLUPLOAD_INIT_ERROR'=> '초기화 오류.',
'PLUPLOAD_IO_ERROR'=> 'IO 오류.',
'PLUPLOAD_NOT_APPLICABLE'=> '해당 사항 없음',
'PLUPLOAD_SECURITY_ERROR'=> '보안 오류.',
'PLUPLOAD_SELECT_FILES'=> '파일 선택',
'PLUPLOAD_SIZE'=> '크기',
'PLUPLOAD_SIZE_ERROR'=> '파일 크기 오류.',
'PLUPLOAD_STATUS'=> '상태',
'PLUPLOAD_START_UPLOAD'=> '업로드 시작',
'PLUPLOAD_START_CURRENT_UPLOAD'=> '업로드 대기열 시작',
'PLUPLOAD_STOP_UPLOAD'=> '업로드 중지',
'PLUPLOAD_STOP_CURRENT_UPLOAD'=> '현재 업로드 중지',
// 참고 :이 문자열은 plupload에 의해 독립적으로 형식화되므로 너무 길지 않습니다.
// 일반적인 phpBB 번역 문자열과 동일한 형식 지정 규칙을 사용합니다.
'PLUPLOAD_UPLOADED'=> '업로드 된 %d / %d 개의 파일',
));
