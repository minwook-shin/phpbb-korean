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
	'CONFIG_NOT_EXIST'					=> 'The config setting "%s" unexpectedly does not exist.',

	'GROUP_NOT_EXIST'					=> 'The group "%s" unexpectedly does not exist.',

	'MIGRATION_APPLY_DEPENDENCIES'		=> 'Apply dependencies of %s.',
	'MIGRATION_DATA_DONE'				=> 'Installed Data: %1$s; Time: %2$.2f seconds',
	'MIGRATION_DATA_IN_PROGRESS'		=> 'Installing Data: %1$s; Time: %2$.2f seconds',
	'MIGRATION_DATA_RUNNING'			=> 'Installing Data: %s.',
	'MIGRATION_EFFECTIVELY_INSTALLED'	=> 'Migration already effectively installed (skipped): %s',
	'MIGRATION_EXCEPTION_ERROR'			=> 'Something went wrong during the request and an exception was thrown. The changes made before the error occurred were reversed to the best of our abilities, but you should check the board for errors.',
	'MIGRATION_NOT_FULFILLABLE'			=> 'The migration "%1$s" is not fulfillable, missing migration "%2$s".',
	'MIGRATION_NOT_INSTALLED'			=> 'The migration "%s" is not installed.',
	'MIGRATION_NOT_VALID'				=> '%s is not a valid migration.',
	'MIGRATION_SCHEMA_DONE'				=> 'Installed Schema: %1$s; Time: %2$.2f seconds',
	'MIGRATION_SCHEMA_IN_PROGRESS'		=> 'Installing Schema: %1$s; Time: %2$.2f seconds',
	'MIGRATION_SCHEMA_RUNNING'			=> 'Installing Schema: %s.',

	'MIGRATION_REVERT_DATA_DONE'		=> 'Reverted Data: %1$s; Time: %2$.2f seconds',
	'MIGRATION_REVERT_DATA_IN_PROGRESS'	=> 'Reverting Data: %1$s; Time: %2$.2f seconds',
	'MIGRATION_REVERT_DATA_RUNNING'		=> 'Reverting Data: %s.',
	'MIGRATION_REVERT_SCHEMA_DONE'		=> 'Reverted Schema: %1$s; Time: %2$.2f seconds',
	'MIGRATION_REVERT_SCHEMA_IN_PROGRESS'	=> 'Reverting Schema: %1$s; Time: %2$.2f seconds',
	'MIGRATION_REVERT_SCHEMA_RUNNING'	=> 'Reverting Schema: %s.',

	'MIGRATION_INVALID_DATA_MISSING_CONDITION'		=> '마이그레이션이 잘못되었습니다. if 문 헬퍼에 조건이 없습니다.',
	'MIGRATION_INVALID_DATA_MISSING_STEP'			=> '마이그레이션이 잘못되었습니다. if 문 보조자가 이주 단계에 대한 유효한 호출을 누락했습니다.',
	'MIGRATION_INVALID_DATA_CUSTOM_NOT_CALLABLE'	=> '마이그레이션이 잘못되었습니다. 사용자 정의 호출 가능 함수를 호출 할 수 없습니다.',
	'MIGRATION_INVALID_DATA_UNKNOWN_TYPE'			=> '마이그레이션이 잘못되었습니다. 알 수없는 마이그레이션 도구 유형이 발생했습니다.',
	'MIGRATION_INVALID_DATA_UNDEFINED_TOOL'			=> '마이그레이션이 잘못되었습니다. 정의되지 않은 마이그레이션 도구가 발생했습니다.',
	'MIGRATION_INVALID_DATA_UNDEFINED_METHOD'		=> '마이그레이션이 잘못되었습니다. 정의되지 않은 마이그레이션 도구 방법이 발생했습니다.',

	'MODULE_ERROR'						=> '모듈을 만드는 동안 오류가 발생했습니다 : %s',
	'MODULE_EXISTS'						=> '모듈이 이미 있습니다: %s',
	'MODULE_EXIST_MULTIPLE'				=> '주어진 부모 모듈 langname을 가진 여러 모듈이 이미 존재합니다 : %s. Try using before/after keys to clarify the module placement.',
	'MODULE_INFO_FILE_NOT_EXIST'		=> '필수 모듈 정보 파일이 누락되었습니다: %2$s',
	'MODULE_NOT_EXIST'					=> '필수 모듈이 존재하지 않습니다: %s',

	'PARENT_MODULE_FIND_ERROR'			=> '상위 모듈 식별자를 확인할 수 없습니다: %s',
	'PERMISSION_NOT_EXIST'				=> '"%s"권한 설정이 예기치 않게 존재하지 않습니다.',

	'ROLE_NOT_EXIST'					=> '"%s"권한 역할이 예기치 않게 존재하지 않습니다.',
));
