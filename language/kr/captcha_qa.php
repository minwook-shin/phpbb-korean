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


$lang = array_merge ($lang, array(
'CAPTCHA_QA'=> 'Q&amp;A',
'CONFIRM_QUESTION_EXPLAIN'=> '이 질문은 스팸봇에 의한 자동 양식 제출을 방지하는 수단입니다.',
'CONFIRM_QUESTION_WRONG'=> '질문에 무효 답변을했습니다.',
'CONFIRM_QUESTION_MISSING'=> '보안 문자에 대한 질문을 검색 할 수 없습니다. 게시판 관리자에게 문의하십시오. ',

'QUESTION_ANSWERS'=> '답변',
'ANSWERS_EXPLAIN'=> '질문마다 유효한 답변을 한 줄에 하나씩 입력하십시오.',
'CONFIRM_QUESTION'=> '질문',

'ANSWER'=> '답변',
'EDIT_QUESTION'=> '질문 수정',
'QUESTIONS'=> '질문',
'QUESTIONS_EXPLAIN'=> 'Q&amp;A 플러그인을 사용하도록 설정 한 모든 양식 제출에 대해 여기에 지정된 질문 중 하나를 묻습니다. 이 플러그인을 사용하려면 적어도 하나의 질문이 기본 언어로 설정되어야합니다. 이 질문은 대상 고객이 쉽게 대답 할 수 있지만 Google ™ 검색을 실행할 수 있는 봇의 능력을 뛰어 넘어야합니다. 크고 정기적으로 변경되는 질문을 사용하면 최상의 결과를 얻을 수 있습니다. 질문이 대소 문자, 구두점 또는 공백을 사용하는 경우 엄격한 설정을 사용하십시오. ',
'QUESTION_DELETED'=> '질문이 삭제되었습니다',
'QUESTION_LANG'=> '언어',
'QUESTION_LANG_EXPLAIN'=> '이 질문과 답변이 쓰여진 언어',
'QUESTION_STRICT'=> '엄격한 체크',
'QUESTION_STRICT_EXPLAIN'=> '대소 문자, 구두점 및 공백이 혼용되도록 하십시오.',

'QUESTION_TEXT'=> '질문',
'QUESTION_TEXT_EXPLAIN'=> '질문이 사용자에게 표시됩니다.',

'QA_ERROR_MSG'=> '모든 입력란을 작성하고 하나 이상의 답변을 입력하십시오.',
'QA_LAST_QUESTION'=> '플러그인이 활성화되어있는 동안 모든 질문을 삭제할 수 없습니다.',
));