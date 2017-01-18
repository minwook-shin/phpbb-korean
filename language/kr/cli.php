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
	'CLI_CONFIG_CANNOT_CACHED'			=> '구성 옵션이 너무 자주 변경되어 효율적으로 캐시되는 경우 이 옵션을 설정하십시오.',
	'CLI_CONFIG_CURRENT'				=> '현재 구성 값, 0과 1을 사용하여 부울 값 지정',
	'CLI_CONFIG_DELETE_SUCCESS'			=> '%s 설정을 성공적으로 삭제했습니다.',
	'CLI_CONFIG_NEW'					=> '새로운 설정값, 0과 1을 사용하여 자세한 부울 값 지정',
	'CLI_CONFIG_NOT_EXISTS'				=> '%s 설정은 존재하지 않습니다',
	'CLI_CONFIG_OPTION_NAME'			=> '설정 옵션의 이름',
	'CLI_CONFIG_PRINT_WITHOUT_NEWLINE'	=> '마지막에 줄 바꿈없이 값을 인쇄해야하는 경우 이 옵션을 설정하십시오.',
	'CLI_CONFIG_INCREMENT_BY'			=> '증분 할 금액',
	'CLI_CONFIG_INCREMENT_SUCCESS'		=> '%s 설정을 성공적으로 증가 시켰습니다.',
	'CLI_CONFIG_SET_FAILURE'			=> '%s 구성을 설정할 수 없습니다.',
	'CLI_CONFIG_SET_SUCCESS'			=> '%s 구성을 성공적으로 설정했습니다.',

	'CLI_DESCRIPTION_CRON_LIST'					=> '준비되거나 준비되지않은 크론 작업의 리스트를 프린트합니다.',
	'CLI_DESCRIPTION_CRON_RUN'					=> '준비된 크론 작업들을 모두 실행합니다.',
	'CLI_DESCRIPTION_CRON_RUN_ARGUMENT_1'		=> '실행할 작업의 이름입니다.',
	'CLI_DESCRIPTION_DB_LIST'					=> '설치된 모든 사용 가능한 마이그레이션을 나열하십시오.',
	'CLI_DESCRIPTION_DB_MIGRATE'				=> '마이그레이션을 적용하여 데이터베이스를 업데이트합니다.',
	'CLI_DESCRIPTION_DB_REVERT'					=> '마이그레이션을 되돌립니다.',
	'CLI_DESCRIPTION_DELETE_CONFIG'				=> '설정 옵션을 제거',
	'CLI_DESCRIPTION_DISABLE_EXTENSION'			=> '자세한 확장기능을 제거합니다.',
	'CLI_DESCRIPTION_ENABLE_EXTENSION'			=> '자세한 확장기능을 활성합니다.',
	'CLI_DESCRIPTION_FIND_MIGRATIONS'			=> '의존하지 않는 마이그레이션을 찾습니다.',
	'CLI_DESCRIPTION_GET_CONFIG'				=> '구성 옵션의 값을 가져옵니다.',
	'CLI_DESCRIPTION_INCREMENT_CONFIG'			=> '구성 옵션의 정수 값을 증가시킵니다.',
	'CLI_DESCRIPTION_LIST_EXTENSIONS'			=> '데이터베이스와 파일 시스템의 모든 확장을 나열합니다.',

	'CLI_DESCRIPTION_OPTION_ENV'				=> '환경 이름',
	'CLI_DESCRIPTION_OPTION_SAFE_MODE'			=> '안전모드로 구동(확장 제외).',
	'CLI_DESCRIPTION_OPTION_SHELL'				=> '쉘 실행하기.',

	'CLI_DESCRIPTION_PURGE_EXTENSION'			=> '지정된 확장자를 제거합니다.',

	'CLI_DESCRIPTION_REPARSER_LIST'						=> '다시 구문 분석 할 수있는 텍스트 유형을 나열합니다.',
	'CLI_DESCRIPTION_REPARSER_AVAILABLE'				=> '사용 가능한 파서 :',
	'CLI_DESCRIPTION_REPARSER_REPARSE'					=> 'Reparses는 현재 text_formatter 서비스로 텍스트를 저장했습니다.',
	'CLI_DESCRIPTION_REPARSER_REPARSE_ARG_1'			=> '재처리 할 텍스트 유형입니다. 빈칸으로두면 모든 내용을 다시 채울 수 있습니다.',
	'CLI_DESCRIPTION_REPARSER_REPARSE_OPT_DRY_RUN'		=> '모든 변경점을 저장하지 마세요; 일어날 일만 인쇄하십시오',
	'CLI_DESCRIPTION_REPARSER_REPARSE_OPT_RANGE_MIN'	=> '처리 할 가장 낮은 레코드 ID',
	'CLI_DESCRIPTION_REPARSER_REPARSE_OPT_RANGE_MAX'	=> '처리 할 최고 기록 ID',
	'CLI_DESCRIPTION_REPARSER_REPARSE_OPT_RANGE_SIZE'	=> '한번에 처리 할 레코드의 대략적인 수',
	'CLI_DESCRIPTION_REPARSER_REPARSE_OPT_RESUME'		=> '마지막 실행이 중단 된 부분 다시 구문 분석 시작',

	'CLI_DESCRIPTION_RECALCULATE_EMAIL_HASH'			=> '사용자 테이블의 user_email_hash 열을 다시 계산합니다.',

	'CLI_DESCRIPTION_SET_ATOMIC_CONFIG'					=> 'old가 현재 값과 일치하는 경우에만 구성 옵션의 값을 설정합니다.',
	'CLI_DESCRIPTION_SET_CONFIG'						=> '옵션의 값 구성을 설정',

	'CLI_DESCRIPTION_THUMBNAIL_DELETE'					=> '기존 thumbnails를 모두 삭제하기.',
	'CLI_DESCRIPTION_THUMBNAIL_GENERATE'				=> '사라진 thumbnails를 모두 생성하기.',
	'CLI_DESCRIPTION_THUMBNAIL_RECREATE'				=> 'thumbnails을 다시 만들기.',

	'CLI_DESCRIPTION_UPDATE_CHECK'					=> '게시판이 최신 버전인지 확인하십시오.',
	'CLI_DESCRIPTION_UPDATE_CHECK_ARGUMENT_1'		=> '검사 할 확장 프로그램의 이름 (모든 확장 프로그램을 검사 할 경우)',
	'CLI_DESCRIPTION_UPDATE_CHECK_OPTION_CACHE'		=> '캐시로 check 명령을 실행하십시오.',
	'CLI_DESCRIPTION_UPDATE_CHECK_OPTION_STABILITY'	=> '명령을 실행하여 안정 버전이나 불안정 버전만 선택하십시오.',

	'CLI_ERROR_INVALID_STABILITY' => '"%s" 는 유효한 안정성이 아닙니다.',

	'CLI_DESCRIPTION_USER_ACTIVATE'				=> '사용자 계정을 활성화 (또는 비활성화)하십시오.',
	'CLI_DESCRIPTION_USER_ACTIVATE_USERNAME'	=> '활성화할 계정의 사용자 이름입니다.',
	'CLI_DESCRIPTION_USER_ACTIVATE_DEACTIVATE'	=> '사용자의 계정 비활성화',
	'CLI_DESCRIPTION_USER_ACTIVATE_ACTIVE'		=> '사용자는 이미 활성화되어 있습니다.',
	'CLI_DESCRIPTION_USER_ACTIVATE_INACTIVE'	=> '사용자는 이미 비활성 상태입니다.',
	'CLI_DESCRIPTION_USER_ADD'					=> '새 사용자를 추가하십시오.',
	'CLI_DESCRIPTION_USER_ADD_OPTION_USERNAME'	=> '새 사용자의 사용자 이름',
	'CLI_DESCRIPTION_USER_ADD_OPTION_PASSWORD'	=> '새 사용자의 비밀번호',
	'CLI_DESCRIPTION_USER_ADD_OPTION_EMAIL'		=> '새 사용자의 전자 메일 주소',
	'CLI_DESCRIPTION_USER_ADD_OPTION_NOTIFY'	=> '새 사용자에게 계정 활성화 이메일 보내기 (기본적으로 전송되지 않음)',
	'CLI_DESCRIPTION_USER_DELETE'				=> '사용자 계정 삭제.',
	'CLI_DESCRIPTION_USER_DELETE_USERNAME'		=> '삭제할 사용자의 사용자 이름',
	'CLI_DESCRIPTION_USER_DELETE_OPTION_POSTS'	=> '사용자가 모든 게시물을 삭제하십시오. 이 옵션을 사용하지 않으면 사용자의 소식이 유지됩니다.',
	'CLI_DESCRIPTION_USER_RECLEAN'				=> '사용자 이름을 다시 정리하십시오.',

	'CLI_EXTENSION_DISABLE_FAILURE'		=> '확장 프로그램 %s 을 사용 중지 할 수 없습니다',
	'CLI_EXTENSION_DISABLE_SUCCESS'		=> '확장 프로그램 %s 이 사용 중지되었습니다',
	'CLI_EXTENSION_ENABLE_FAILURE'		=> '확장 프로그램 %s 을 활성화하지 못했습니다',
	'CLI_EXTENSION_ENABLE_SUCCESS'		=> '확장프로그램 %s 이 성공적으로 활성화되었습니다',
	'CLI_EXTENSION_NAME'				=> '확장프로그램의 이름',
	'CLI_EXTENSION_PURGE_FAILURE'		=> '확장프로그램 %s 을 삭제할 수 없습니다',
	'CLI_EXTENSION_PURGE_SUCCESS'		=> '확장프로그램 %s 을 성공적으로 삭제했습니다',
	'CLI_EXTENSION_UPDATE_FAILURE'		=> '확장프로그램 %s 을 업데이트 할 수 없습니다',
	'CLI_EXTENSION_UPDATE_SUCCESS'		=> '확장프로그램 %s 을 성공적으로 업데이트 했습니다',
	'CLI_EXTENSION_NOT_FOUND'			=> '확장프로그램을 찾을 수 없음.',
	'CLI_EXTENSIONS_AVAILABLE'			=> '유효',
	'CLI_EXTENSIONS_DISABLED'			=> '비활성화됨',
	'CLI_EXTENSIONS_ENABLED'			=> '활성화됨',

	'CLI_FIXUP_RECALCULATE_EMAIL_HASH_SUCCESS'	=> '모든 이메일 해시를 다시 계산했습니다.',

	'CLI_MIGRATION_NAME'					=> '네임 스페이스를 포함한 마이그레이션 이름 (문제를 방지하기 위해 백 슬래시 대신 슬래시를 사용).',
	'CLI_MIGRATIONS_AVAILABLE'				=> '사용 가능한 마이그레이션',
	'CLI_MIGRATIONS_INSTALLED'				=> '설치된 마이그레이션',
	'CLI_MIGRATIONS_ONLY_AVAILABLE'		    => '사용 가능한 마이그레이션만 표시',
	'CLI_MIGRATIONS_EMPTY'                  => '마이그레이션이 없습니다.',

	'CLI_REPARSER_REPARSE_REPARSING'		=> '재파싱 %1$s (범위 %2$d..%3$d)',
	'CLI_REPARSER_REPARSE_REPARSING_START'	=> '재파싱 %s...',
	'CLI_REPARSER_REPARSE_SUCCESS'			=> '재파싱이 성공으로 끝났습니다.',

	// In all the case %1$s is the logical name of the file and %2$s the real name on the filesystem
	// eg: big_image.png (2_a51529ae7932008cf8454a95af84cacd) generated.
	'CLI_THUMBNAIL_DELETED'		=> '%1$s (%2$s) 삭제됨.',
	'CLI_THUMBNAIL_DELETING'	=> 'thumbnails 삭제하는중',
	'CLI_THUMBNAIL_SKIPPED'		=> '%1$s (%2$s) 넘어감.',
	'CLI_THUMBNAIL_GENERATED'	=> '%1$s (%2$s) 생성됨.',
	'CLI_THUMBNAIL_GENERATING'	=> 'thumbnails 생성하는중',
	'CLI_THUMBNAIL_GENERATING_DONE'	=> '모든 thumbnails 이미지가 재생성되었습니다.',
	'CLI_THUMBNAIL_DELETING_DONE'	=> '모든 thumbnails 이미지가 삭제되었습니다.',

	'CLI_THUMBNAIL_NOTHING_TO_GENERATE'	=> '생성할 thumbnails가 없습니다.',
	'CLI_THUMBNAIL_NOTHING_TO_DELETE'	=> '삭제할 thumbnails가 업습니다.',

	'CLI_USER_ADD_SUCCESS'		=> '사용자 %s 를 추가했습니다.',
	'CLI_USER_DELETE_CONFIRM'	=> '정말로 ‘%s’ 을 삭제하시겠습니까? [y/N]',
	'CLI_USER_RECLEAN_START'	=> '사용자 이름 다시-청소',
	'CLI_USER_RECLEAN_DONE'		=> [
		0	=> '재 클리닝 완료. 청소해야 할 사용자 이름이 없습니다.',
		1	=> '재 클리닝 완료. %d 사용자 이름을 지웠습니다.',
		2	=> '재 클리닝 완료. 사용자 이름 %d 개가 정리되었습니다.',
	],
));

// Additional help for commands.
$lang = array_merge($lang, array(
	'CLI_HELP_CRON_RUN'			=> $lang['CLI_DESCRIPTION_CRON_RUN'] . ' 선택적으로 cron 작업 이름을 지정하여 지정된 cron 작업 만 실행할 수 있습니다.',
	'CLI_HELP_USER_ACTIVATE'	=> '사용자 계정을 활성화하거나 <info> --deactivate </info> 옵션을 사용하여 계정을 비활성화하십시오.
선택적으로 활성화 이메일을 사용자에게 보내려면 <info> --send-email </info> 옵션을 사용하십시오. ',
	'CLI_HELP_USER_ADD'			=> '<info> %command.name% </info> 명령은 새로운 사용자를 추가합니다 :
이 명령을 옵션없이 실행하면 명령을 입력하라는 메시지가 표시됩니다.
선택적으로 새 사용자에게 전자 메일을 보내려면 <info>--send-email</info> 옵션을 사용하십시오.',
	'CLI_HELP_USER_RECLEAN'		=> '사용자 이름을 다시 정리하면 저장된 모든 사용자 이름을 검사하고 깨끗한 버전도 저장됩니다. 정리된 사용자 이름은 대소 문자를 구분하지 않으며 NFC는 정규화되어 ASCII로 변환됩니다. ',
));
