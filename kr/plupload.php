<?php
/**
*
* This file is part of the phpBB Forum Software package.
*
* @copyright (c) phpBB Limited <https://www.phpbb.com>
* @copyright (c) 2010-2013 Moxiecode Systems AB
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
	'PLUPLOAD_ADD_FILES'		=> '파일추가',
	'PLUPLOAD_ADD_FILES_TO_QUEUE'	=> '업로드 대기열에 파일을 추가하고 시작 버튼을 클릭합니다.',
	'PLUPLOAD_ALREADY_QUEUED'	=> '%s 대기열에 이미 존재.',
	'PLUPLOAD_CLOSE'			=> '닫기',
	'PLUPLOAD_DRAG'				=> '이곳으로 파일을 드래그.',
	'PLUPLOAD_DUPLICATE_ERROR'	=> '중복 파일 오류.',
	'PLUPLOAD_DRAG_TEXTAREA'	=> '또한 드래그 앤 메시지 상자에 놓아 파일을 첨부 할 수 있습니다.',
	'PLUPLOAD_ERR_INPUT'		=> '입력 스트림을 열지 못했습니다.',
	'PLUPLOAD_ERR_MOVE_UPLOADED'	=> '업로드 된 파일을 이동하지 못했습니다.',
	'PLUPLOAD_ERR_OUTPUT'		=> '출력 스트림을 열지 못했습니다.',
	'PLUPLOAD_ERR_FILE_TOO_LARGE'	=> '너무 큰 파일:',
	'PLUPLOAD_ERR_FILE_COUNT'	=> '파일 수 오류.',
	'PLUPLOAD_ERR_FILE_INVALID_EXT'	=> '잘못된 파일 확장자:',
	'PLUPLOAD_ERR_RUNTIME_MEMORY'	=> '런타임이 사용 가능한 메모리가 부족합니다.',
	'PLUPLOAD_ERR_UPLOAD_URL'	=> '업로드 URL이 잘못되었거나 존재하지 않습니다.',
	'PLUPLOAD_EXTENSION_ERROR'	=> '파일 확장자 오류.',
	'PLUPLOAD_FILE'				=> '파일: %s',
	'PLUPLOAD_FILE_DETAILS'		=> '파일: %s, 크기: %d, 최대 파일 사이즈: %d',
	'PLUPLOAD_FILENAME'			=> '파일 이름',
	'PLUPLOAD_FILES_QUEUED'		=> '%d 파일 대기',
	'PLUPLOAD_GENERIC_ERROR'	=> '일반적인 오류.',
	'PLUPLOAD_HTTP_ERROR'		=> 'HTTP 오류.',
	'PLUPLOAD_IMAGE_FORMAT'		=> '이 이미지 형식을 지원하지않음.',
	'PLUPLOAD_INIT_ERROR'		=> 'Init 오류.',
	'PLUPLOAD_IO_ERROR'			=> 'IO 오류.',
	'PLUPLOAD_NOT_APPLICABLE'	=> 'N/A',
	'PLUPLOAD_SECURITY_ERROR'	=> '보안 오류.',
	'PLUPLOAD_SELECT_FILES'		=> '파일 선택',
	'PLUPLOAD_SIZE'				=> '크기',
	'PLUPLOAD_SIZE_ERROR'		=> '파일 크기 오류.',
	'PLUPLOAD_STATUS'			=> '상태',
	'PLUPLOAD_START_UPLOAD'		=> '업로드 시작',
	'PLUPLOAD_START_CURRENT_UPLOAD'	=> '대기열을 업로드 시작합니다.',
	'PLUPLOAD_STOP_UPLOAD'		=> '업로드 중단',
	'PLUPLOAD_STOP_CURRENT_UPLOAD'	=> '현재 업로드 중지',
	// Note: This string is formatted independently by plupload and so does not
	// use the same formatting rules as normal phpBB translation strings
	'PLUPLOAD_UPLOADED'			=> '%d/%d 파일 업로드됨',
));
