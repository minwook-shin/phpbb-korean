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
	'CAPTCHA_QA'				=> 'Q&amp;A',
	'CONFIRM_QUESTION_EXPLAIN'	=> '이 질문은 스팸봇에 의한 자동 양식 제출을 방지하는 수단입니다.',
	'CONFIRM_QUESTION_WRONG'	=> '질문에 잘못된 대답을 입력했습니다.',
	'CONFIRM_QUESTION_MISSING'	=> 'captcha에 대한 질문을 검색 할 수 없습니다. 게시판 관리자에게 문의하십시오.',

	'QUESTION_ANSWERS'			=> '답변',
	'ANSWERS_EXPLAIN'			=> '질문에 대한 유효한 답변을 한 줄에 하나씩 입력하십시오.',
	'CONFIRM_QUESTION'			=> '질문',

	'ANSWER'					=> '답변',
	'EDIT_QUESTION'				=> '질문 수정',
	'QUESTIONS'					=> '질문',
	'QUESTIONS_EXPLAIN'			=> 'Q&amp;A 플러그인을 사용하도록 설정한 모든 양식 제출에 대해 여기에 지정된 질문 중 하나를 묻습니다. 이 플러그인을 사용하려면 적어도 하나의 질문이 기본 언어로 설정되어야합니다. 이 질문은 귀하의 타겟 고객이 대답하기 쉽지만 Google ™ 검색을 실행할 수있는 봇의 능력을 뛰어 넘어야합니다. 크고 정기적으로 변경되는 질문을 사용하면 최상의 결과를 얻을 수 있습니다. 질문이 대소문자, 구두점 또는 공백을 사용하는 경우 엄격한 설정을 사용하십시오.',
	'QUESTION_DELETED'			=> '질문 삭제된',
	'QUESTION_LANG'				=> '언어',
	'QUESTION_LANG_EXPLAIN'		=> '이 질문과 그 답은 쓰여진 언어입니다.',
	'QUESTION_STRICT'			=> '엄격한 확인',
	'QUESTION_STRICT_EXPLAIN'	=> '대소문자가 혼합 된 구두점 및 공백을 적용 할 수 있습니다.',

	'QUESTION_TEXT'				=> '질문',
	'QUESTION_TEXT_EXPLAIN'		=> '이 질문은 유저로부터 제공되었습니다.',

	'QA_ERROR_MSG'				=> '모든 입력란을 작성하고 하나 이상의 답변을 입력하십시오.',
	'QA_LAST_QUESTION'			=> '플러그인이 활성화되어있는 동안에는 모든 질문을 삭제할 수 없습니다.',
));
