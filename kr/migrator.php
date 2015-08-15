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
	'CONFIG_NOT_EXIST'					=> '예기치 않게 존재하지 않는 "%s" 구성 설정 .',

	'GROUP_NOT_EXIST'					=> '예기치 않게 존재하지 않는 "%s" 그룹.',

	'MIGRATION_APPLY_DEPENDENCIES'		=> '%s 의 종속성을 적용.',
	'MIGRATION_DATA_DONE'				=> '데이터가 설치됨: %1$s; 시간: %2$.2f 초',
	'MIGRATION_DATA_IN_PROGRESS'		=> '데이터 설치중: %1$s; Time: %2$.2f 초',
	'MIGRATION_DATA_RUNNING'			=> '데이터 설치중: %s.',
	'MIGRATION_EFFECTIVELY_INSTALLED'	=> '마이그레이션은 이미 효과적으로 설치됨 (skipped): %s',
	'MIGRATION_EXCEPTION_ERROR'			=> '뭔가 요청 중 잘못된 예외가 발생했습니다. 변경되었던것이 오류가 났습니다, 하지만 당신은 오류에 대한 게시판를 확인해야합니다.',
	'MIGRATION_NOT_FULFILLABLE'			=> '"%1$s" 마이그레이션은 달성하지못합니다."%2$s" 없는 마이그레이션.',
	'MIGRATION_NOT_VALID'				=> '%s 는 올바른 마이그레이션이 아닙습니다.'
	'MIGRATION_SCHEMA_DONE'				=> '스키마 설치됨: %1$s; Time: %2$.2f 초',
	'MIGRATION_SCHEMA_RUNNING'			=> '스키마 설치중: %s.',

	'MIGRATION_INVALID_DATA_MISSING_CONDITION'		=> '마이그레이션이 잘못되었습니다. An if statement helper is missing a condition.',
	'MIGRATION_INVALID_DATA_MISSING_STEP'			=> '마이그레이션이 잘못되었습니다. An if statement helper is missing a valid call to a migration step.',
	'MIGRATION_INVALID_DATA_CUSTOM_NOT_CALLABLE'	=> '마이그레이션이 잘못되었습니다. 유저 정의 호출 함수를 호출 할 수 없습니다.',
	'MIGRATION_INVALID_DATA_UNKNOWN_TYPE'			=> '마이그레이션이 잘못되었습니다. 알 수없는 마이그레이션 도구 유형이 발생했습니다.',
	'MIGRATION_INVALID_DATA_UNDEFINED_TOOL'			=> '마이그레이션이 잘못되었습니다. 정의되지 않은 마이그레이션 도구가 발생했습니다.',
	'MIGRATION_INVALID_DATA_UNDEFINED_METHOD'		=> '마이그레이션이 잘못되었습니다. 정의되지 않은 마이그레이션 도구 방법이 발생했습니다.',

	'MODULE_ERROR'						=> '모듈을 만드는 동안 오류가 발생했습니다: %s',
	'MODULE_INFO_FILE_NOT_EXIST'		=> '필요한 모듈 정보 파일이 없습니다: %2$s',
	'MODULE_NOT_EXIST'					=> '필요한 모듈이 존재하지 않습니다: %s',

	'PERMISSION_NOT_EXIST'				=> '예기치 않게 존재하지 않는 권한 설정 "%s".',

	'ROLE_NOT_EXIST'					=> '예기치 않게 존재하지 않는 권한 역할 "%s".',
));
