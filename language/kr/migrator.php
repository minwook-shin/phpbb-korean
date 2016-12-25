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
'CONFIG_NOT_EXIST'=> '구성 설정 "%s"이 (가) 예기치 않게 존재하지 않습니다.',

'GROUP_NOT_EXIST'=> '그룹 "%s"이 (가) 예기치 않게 존재하지 않습니다.',

'MIGRATION_APPLY_DEPENDENCIES'=> '%s의 의존성 적용.',
'MIGRATION_DATA_DONE'=> '설치된 데이터 : %1$s; 시간 : %2$.2f 초 ',
'MIGRATION_DATA_IN_PROGRESS'=> '데이터 설치하기 : %1$s; 시간 : %2$.2f 초 ',
'MIGRATION_DATA_RUNNING'=> '데이터 설치하기 : %s.',
'MIGRATION_EFFECTIVELY_INSTALLED'=> '마이그레이션이 이미 효과적으로 설치 (건너 뜀)되었습니다 : %s',
'MIGRATION_EXCEPTION_ERROR'=> '요청 중에 문제가 발생하여 예외가 발생했습니다. 오류가 발생하기 전에 변경된 내용은 최선의 능력으로 되돌려졌지만 이사회에서 오류를 확인해야합니다. ',
'MIGRATION_NOT_FULFILLABLE'=> '마이그레이션 "%1$s"이 (가) 충족되지 않아 마이그레이션 "%2$s"이 (가) 없습니다.',
'MIGRATION_NOT_VALID'=> '%s은 (는) 유효한 이전이 아닙니다.',
'MIGRATION_SCHEMA_DONE'=> '설치된 스키마 : %1$s; 시간 : %2$.2f 초 ',
'MIGRATION_SCHEMA_IN_PROGRESS'=> '스키마 설치하기 : %1$s; 시간 : %2$.2f 초 ',
'MIGRATION_SCHEMA_RUNNING'=> '스키마 설치 : %s.',

'MIGRATION_INVALID_DATA_MISSING_CONDITION'=> '이전이 유효하지 않습니다. if 문 헬퍼에 조건이 없습니다. ',
'MIGRATION_INVALID_DATA_MISSING_STEP'=> '이전이 유효하지 않습니다. if 문 보조자가 이전 단계에 대한 유효한 호출을 누락했습니다. ',
'MIGRATION_INVALID_DATA_CUSTOM_NOT_CALLABLE'=> '이전이 유효하지 않습니다. 사용자 정의 호출 가능 함수를 호출 할 수 없습니다. ',
'MIGRATION_INVALID_DATA_UNKNOWN_TYPE'=> '이전이 유효하지 않습니다. 알 수없는 마이그레이션 도구 유형이 발생했습니다. ',
'MIGRATION_INVALID_DATA_UNDEFINED_TOOL'=> '이전이 유효하지 않습니다. 정의되지 않은 마이그레이션 도구가 발생했습니다. ',
'MIGRATION_INVALID_DATA_UNDEFINED_METHOD'=> '이전이 유효하지 않습니다. 정의되지 않은 마이그레이션 도구 방법이 발생했습니다. ',

'MODULE_ERROR'=> '모듈을 생성하는 중 오류가 발생했습니다 : %s',
'MODULE_EXISTS'=> '모듈이 이미 존재합니다 : %s',
'MODULE_EXIST_MULTIPLE'=> '주어진 부모 모듈 langname을 가진 몇몇 모듈이 이미 존재합니다 : %s. 모듈 배치를 명확히하기 위해 이전 / 이후 키를 사용해보십시오. ',
'MODULE_INFO_FILE_NOT_EXIST'=> '필요한 모듈 정보 파일이 없습니다 : %2$s',
'MODULE_NOT_EXIST'=> '필요한 모듈이 존재하지 않습니다 : %s',

'PARENT_MODULE_FIND_ERROR'=> '상위 모듈 식별자를 확인할 수 없습니다 : %s',
'PERMISSION_NOT_EXIST'=> '권한 설정 "%s"이 (가) 예기치 않게 존재하지 않습니다.',

'ROLE_NOT_EXIST'=> '권한 역할 "%s"이 (가) 예기치 않게 존재하지 않습니다.',
));
