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
	'CONFIG_NOT_EXIST'					=> '"%s"설정이 예기치 않게 존재하지 않습니다.',
	'GROUP_NOT_EXIST'					=> '"%s"그룹이 예기치 않게 존재하지 않습니다.',
	'MIGRATION_APPLY_DEPENDENCIES'		=> '%s 의존성 적용하기.',
	'MIGRATION_DATA_DONE'				=> '설치된 데이타: %1$s; 시간: %2$.2f 초',
	'MIGRATION_DATA_IN_PROGRESS'		=> '설치중인 데이타: %1$s; 시간: %2$.2f 초',
	'MIGRATION_DATA_RUNNING'			=> '설치중인 데이타: %s.',
	'MIGRATION_EFFECTIVELY_INSTALLED'	=> '마이그레이션이 이미 효과적으로 설치 (건너 뛴 상태): %s',
	'MIGRATION_EXCEPTION_ERROR'			=> '요청 중에 문제가 발생하여 예외가 발생했습니다. 오류가 발생하기 전에 변경된 사항은 최선의 능력으로 되돌려졌지만 게시판에서 오류를 확인해야합니다.',
	'MIGRATION_NOT_FULFILLABLE'			=> '마이그레이션 "%1$s"이 충족 할 수 없거나 마이그레이션 "%2$s"도 누락되었습니다.',
	'MIGRATION_NOT_INSTALLED'			=> '마이그레이션 "%s"은 설치되지 않았습니다.',
	'MIGRATION_NOT_VALID'				=> '%s 은 유효한 마이그레이션이 아닙니다.',
	'MIGRATION_SCHEMA_DONE'				=> '설치된 스키마 : %1$s; 시간: %2$.2f 초',
	'MIGRATION_SCHEMA_IN_PROGRESS'		=> '설치중인 스키마 : %1$s; 시간: %2$.2f 초',
	'MIGRATION_SCHEMA_RUNNING'			=> '설치중인 스키마 : %s.',
	'MIGRATION_REVERT_DATA_DONE'		=> '되돌린 데이터: %1$s; 시간: %2$.2f 초',
	'MIGRATION_REVERT_DATA_IN_PROGRESS'	=> '되돌리고있는 데이터: %1$s; 시간: %2$.2f 초',
	'MIGRATION_REVERT_DATA_RUNNING'		=> '되돌리고있는 데이터: %s.',
	'MIGRATION_REVERT_SCHEMA_DONE'		=> '되돌리고있는 스키마: %1$s; 시간: %2$.2f 초',
	'MIGRATION_REVERT_SCHEMA_IN_PROGRESS'	=> '되돌리고있는 스키마: %1$s; 시간: %2$.2f 초',
	'MIGRATION_REVERT_SCHEMA_RUNNING'	=> '되돌리고있는 스키마: %s.',
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
