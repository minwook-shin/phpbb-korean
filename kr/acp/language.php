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
	'ACP_FILES'						=> '어드민 언어 파일',
	'ACP_LANGUAGE_PACKS_EXPLAIN'	=> '이곳은 언어 파일을 설치/제거를 가능하게 합니다. 기본 언어파일은 별표(*)로 표시됩니다.',

	'DELETE_LANGUAGE_CONFIRM'		=> '정말로“%s”을 삭제하시겠습니까?',

	'INSTALLED_LANGUAGE_PACKS'		=> '언어파일 설치됨',

	'LANGUAGE_DETAILS_UPDATED'			=> '자세한 언어가 성공적으로 업데이트됬습니다.',
	'LANGUAGE_PACK_ALREADY_INSTALLED'	=> '이 언어 팩은 이미 설치되었습니다.',
	'LANGUAGE_PACK_DELETED'				=> '언어파일“%s”이 성공적으로 제거되었습니다.모든 유저가 언어파일을 사용하시려면 게시판의 기본 언어를 초기화하시기바랍니다.',
	'LANGUAGE_PACK_DETAILS'				=> '자세한 언어팩',
	'LANGUAGE_PACK_INSTALLED'			=> '언어팩The language pack “%s”은 성공적으로 설치되었습니다.',
	'LANGUAGE_PACK_CPF_UPDATE'			=> '커스텀 프로필 필드언어 스트링이 기본 언어로부터 복사되었습니다.필요한 경우 변경 하시기 바랍니다.',
	'LANGUAGE_PACK_ISO'					=> 'ISO',
	'LANGUAGE_PACK_LOCALNAME'			=> '지역 이름',
	'LANGUAGE_PACK_NAME'				=> '이름',
	'LANGUAGE_PACK_NOT_EXIST'			=> '선택된 언어 팩이 종료되지않았습니다.',
	'LANGUAGE_PACK_USED_BY'				=> '(로봇 포함)이 사용됨',
	'LANGUAGE_VARIABLE'					=> '언어 변수',
	'LANG_AUTHOR'						=> '언어 팩 작성자',
	'LANG_ENGLISH_NAME'					=> '영어 이름',
	'LANG_ISO_CODE'						=> 'ISO 코드',
	'LANG_LOCAL_NAME'					=> '지역 이름',

	'MISSING_LANG_FILES'		=> '언어 파일 찾을 수 없습니다.',
	'MISSING_LANG_VARIABLES'	=> '언어 변수를 찾을 수 없습니다.',

	'NO_FILE_SELECTED'				=> '당신은 언어 파일을 지정하지 않았습니다.',
	'NO_LANG_ID'					=> '당신은 언어 팩을 지정하지않았습니다.',
	'NO_REMOVE_DEFAULT_LANG'		=> '당신은 기본 언어 팩을 삭제할 수 없습니다.<br />만약 당신이 언어팩을 삭제하고싶으시다면, 게시판 기본 언어를 먼저 바꾸시길바랍니다.',
	'NO_UNINSTALLED_LANGUAGE_PACKS'	=> '언어팩이 삭제되지않음',

	'THOSE_MISSING_LANG_FILES'			=> '다음 언어 파일이 “%s”언어폴더로부터 찾을수없습니다.',
	'THOSE_MISSING_LANG_VARIABLES'		=> '다음 언어 변수는 “%s”언어 팩에서 누락되었습니다.',

	'UNINSTALLED_LANGUAGE_PACKS'	=> '언어팩이 제거되었습니다.',
));
