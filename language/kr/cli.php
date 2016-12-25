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
'CLI_CONFIG_CANNOT_CACHED'=> '구성 옵션이 너무 자주 변경되어 효율적으로 캐시되지 않으면 이 옵션을 설정하십시오.',
'CLI_CONFIG_CURRENT'=> '현재 구성 값, 0과 1을 사용하여 부울 값 지정',
'CLI_CONFIG_DELETE_SUCCESS'=> '%s 구성을 성공적으로 삭제했습니다.',
'CLI_CONFIG_NEW'=> '새 구성 값, 0과 1을 사용하여 부울 값 지정',
'CLI_CONFIG_NOT_EXISTS'=> '구성 %s 이(가) 존재하지 않습니다',
'CLI_CONFIG_OPTION_NAME'=> '구성 옵션의 이름',
'CLI_CONFIG_PRINT_WITHOUT_NEWLINE'=> '끝 부분에 새로운 행이 없이 값을 인쇄해야하는 경우 이 옵션을 설정하십시오.',
'CLI_CONFIG_INCREMENT_BY'=> '증분 할 금액',
'CLI_CONFIG_INCREMENT_SUCCESS'=> '성공적으로 구성 %s 증가',
'CLI_CONFIG_SET_FAILURE'=> '구성 %s 을(를) 설정할 수 없습니다',
'CLI_CONFIG_SET_SUCCESS'=> '구성 %s 성공적으로 설정했습니다',

'CLI_DESCRIPTION_CRON_LIST'=> '준비 및 미발공 크론 작업 목록을 인쇄합니다.',
'CLI_DESCRIPTION_CRON_RUN'=> '준비된 모든 cron 작업을 실행합니다.',
'CLI_DESCRIPTION_CRON_RUN_ARGUMENT_1'=> '실행할 작업의 이름',
'CLI_DESCRIPTION_DB_MIGRATE'=> '마이그레이션을 적용하여 데이터베이스를 업데이트합니다.',
'CLI_DESCRIPTION_DELETE_CONFIG'=> '구성 삭제 옵션',
'CLI_DESCRIPTION_DISABLE_EXTENSION'=> '지정된 확장 기능을 사용하지 않습니다.',
'CLI_DESCRIPTION_ENABLE_EXTENSION'=> '지정된 확장 기능을 사용합니다.',
'CLI_DESCRIPTION_FIND_MIGRATIONS'=> '의존하지 않는 이전을 찾습니다.',
'CLI_DESCRIPTION_GET_CONFIG'=> '구성 옵션 값 가져 오기',
'CLI_DESCRIPTION_INCREMENT_CONFIG'=> '구성 옵션의 정수 값을 증가시킵니다',
'CLI_DESCRIPTION_LIST_EXTENSIONS'=> '데이터베이스와 파일 시스템의 모든 확장을 나열합니다.',
'CLI_DESCRIPTION_OPTION_SAFE_MODE'=> '안전 모드 (확장자 없음)로 실행하십시오.',
'CLI_DESCRIPTION_OPTION_SHELL'=> '쉘을 시작하십시오.',
'CLI_DESCRIPTION_PURGE_EXTENSION'=> '지정된 확장을 제거합니다.',
'CLI_DESCRIPTION_RECALCULATE_EMAIL_HASH'=> '사용자 테이블의 user_email_hash 열을 다시 계산합니다.',
'CLI_DESCRIPTION_SET_ATOMIC_CONFIG'=> '이전 값이 현재 값과 일치하는 경우에만 구성 옵션의 값을 설정합니다.',
'CLI_DESCRIPTION_SET_CONFIG'=> '구성 옵션의 값을 설정합니다',

'CLI_EXTENSION_DISABLE_FAILURE'=> '확장 프로그램 %s 을(를) 비활성화 할 수 없습니다',
'CLI_EXTENSION_DISABLE_SUCCESS'=> '확장 프로그램 %s 이(가) 비활성화되었습니다',
'CLI_EXTENSION_ENABLE_FAILURE'=> '확장 프로그램 %s 을(를) 활성화 할 수 없습니다',
'CLI_EXTENSION_ENABLE_SUCCESS'=> '확장 프로그램 %s 이(가) 성공적으로 사용되었습니다',
'CLI_EXTENSION_NAME'=> '확장 프로그램 이름',
'CLI_EXTENSION_PURGE_FAILURE'=> '확장 프로그램 %s 을(를) 삭제할 수 없습니다',
'CLI_EXTENSION_PURGE_SUCCESS'=> '확장 기능 %s 을(를) 성공적으로 제거했습니다',
'CLI_EXTENSION_NOT_FOUND'=> '확장을 찾을 수 없습니다.',
'CLI_EXTENSIONS_AVAILABLE'=> '사용 가능',
'CLI_EXTENSIONS_DISABLED'=> '사용 안함',
'CLI_EXTENSIONS_ENABLED'=> '사용',

'CLI_FIXUP_RECALCULATE_EMAIL_HASH_SUCCESS'=> '모든 이메일 해시를 성공적으로 다시 계산했습니다.',
));


// Additional help for commands.
$lang = array_merge ($lang, array(
'CLI_HELP_CRON_RUN'=> $lang ['CLI_DESCRIPTION_CRON_RUN']. '선택적으로 cron 작업 이름을 지정하여 지정된 cron 작업만 실행할 수 있습니다.',
));