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

if (!defined('IN_PHPBB'))
{
	exit;
}

/**
* DO NOT CHANGE
*/
if (empty($lang) || !is_array($lang))
{
	$lang = array();
}

// DEVELOPERS PLEASE NOTE
//
// Placeholders can now contain order information, e.g. instead of
// 'Page %s of %s' you can (and should) write 'Page %1$s of %2$s', this allows
// translators to re-order the output of data while ensuring it remains correct
//
// You do not need this where single placeholders are used, e.g. 'Message %d' is fine
// equally where a string contains only two placeholders which are used to wrap text
// in a url you again do not need to specify an order e.g., 'Click %sHERE%s' is fine

$lang = array_merge($lang, array(
	'CLI_CONFIG_CANNOT_CACHED'			=> '설정된 옵션이 효율적으로 캐시 너무 자주 변경되는 경우 이 옵션을 설정합니다.',
	'CLI_CONFIG_CURRENT'				=> '현재 구성 값, 0과 1이 부울 값을 지정하는 것입니다',
	'CLI_CONFIG_DELETE_SUCCESS'			=> '%s 성공적으로 삭제 설정.',
	'CLI_CONFIG_NEW'					=> '새 구성 값, 부울 값을 지정하려면 1을 0 사용',
	'CLI_CONFIG_NOT_EXISTS'				=> 'Config %s 설정은 존재하지않습니다.',
	'CLI_CONFIG_OPTION_NAME'			=> '설정 옵션의 이름',
	'CLI_CONFIG_PRINT_WITHOUT_NEWLINE'	=> '값이 마지막에 새로운 라인없이 인쇄해야하는 경우 이 옵션을 설정합니다.',
	'CLI_CONFIG_INCREMENT_BY'			=> '씩 증가하는 양',
	'CLI_CONFIG_INCREMENT_SUCCESS'		=> '%s 설정이 성공적으로 증가합니다.',
	'CLI_CONFIG_SET_FAILURE'			=> '%s 설정셋이 가능하지않습니다.',
	'CLI_CONFIG_SET_SUCCESS'			=> '%s 설정 셋이 성공적으로되었습니다.',

	'CLI_DESCRIPTION_CRON_LIST'					=> '준비와 준비되지 않은 크론 작업의 목록을 인쇄합니다.',
	'CLI_DESCRIPTION_CRON_RUN'					=> '모든 준비가 크론 작업을 실행합니다.',
	'CLI_DESCRIPTION_CRON_RUN_ARGUMENT_1'		=> '작업의 이름을 실행합니다',
	'CLI_DESCRIPTION_DB_MIGRATE'				=> '마이그레이션을 적용하여 데이터베이스를 업데이트합니다.',
	'CLI_DESCRIPTION_DELETE_CONFIG'				=> '구성 옵션을 삭제합니다',
	'CLI_DESCRIPTION_DISABLE_EXTENSION'			=> '지정된 확장을 사용하지 않습니다.',
	'CLI_DESCRIPTION_ENABLE_EXTENSION'			=> '지정된 확장을 가능하게합니다.',
	'CLI_DESCRIPTION_FIND_MIGRATIONS'			=> '의존하지 않는 마이그레이션을 찾습니다.',
	'CLI_DESCRIPTION_GET_CONFIG'				=> '구성 옵션의 값을 가져옵니다',
	'CLI_DESCRIPTION_INCREMENT_CONFIG'			=> '구성 옵션의 값을 증가합니다.',
	'CLI_DESCRIPTION_LIST_EXTENSIONS'			=> '데이터베이스 및 파일 시스템에있는 모든 확장 기능을 나열합니다.',
	'CLI_DESCRIPTION_OPTION_SAFE_MODE'			=> '(확장없이) 안전 모드에서 실행합니다.',
	'CLI_DESCRIPTION_OPTION_SHELL'				=> '쉘을 실행합니다.',
	'CLI_DESCRIPTION_PURGE_EXTENSION'			=> '지정된 확장을 제거합니다.',
	'CLI_DESCRIPTION_RECALCULATE_EMAIL_HASH'	=> '사용자 테이블의 user_email_hash 열을 다시 계산합니다.',
	'CLI_DESCRIPTION_SET_ATOMIC_CONFIG'			=> '이전 현재 값과 일치하는 경우에만 구성 옵션의 값을 설정합니다.',
	'CLI_DESCRIPTION_SET_CONFIG'				=> '구성 옵션의 값을 설정합니다',

	'CLI_EXTENSION_DISABLE_FAILURE'		=> '%s 확장을 해제 할 수 없음',
	'CLI_EXTENSION_DISABLE_SUCCESS'		=> '%s 성공적으로 비활성화 확장',
	'CLI_EXTENSION_ENABLE_FAILURE'		=> '%s 확장을 사용 할 수 없습니다',
	'CLI_EXTENSION_ENABLE_SUCCESS'		=> '%s 성공적으로 활성화 확장',
	'CLI_EXTENSION_NAME'				=> '확장의 이름',
	'CLI_EXTENSION_PURGE_FAILURE'		=> '%s 확장을 제거 할 수 없습니다',
	'CLI_EXTENSION_PURGE_SUCCESS'		=> '%s 성공적으로 제거 확장',
	'CLI_EXTENSION_NOT_FOUND'			=> '확장을 찾을 수 없습니다.',
	'CLI_EXTENSIONS_AVAILABLE'			=> '유효',
	'CLI_EXTENSIONS_DISABLED'			=> '미사용',
	'CLI_EXTENSIONS_ENABLED'			=> '사용',

	'CLI_FIXUP_RECALCULATE_EMAIL_HASH_SUCCESS'	=> '성공적으로 모든 이메일 HASH를 다시 계산.',
));
