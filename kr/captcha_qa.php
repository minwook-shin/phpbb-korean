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
	'CAPTCHA_QA'				=> 'Q&amp;A',
	'CONFIRM_QUESTION_EXPLAIN'	=> '이 질문은 스팸봇에 의해 자동으로 양식 제출을 방지하는 수단입니다.',
	'CONFIRM_QUESTION_WRONG'	=> '당신은 질문에 대한 잘못된 답을 제공하고 있습니다.',

	'QUESTION_ANSWERS'			=> '답변',
	'ANSWERS_EXPLAIN'			=> '질문 한 줄에 하나씩에 유효한 답변을 입력하세요.',
	'CONFIRM_QUESTION'			=> '질문',

	'ANSWER'					=> '답변',
	'EDIT_QUESTION'				=> '질문 수정',
	'QUESTIONS'					=> '질문',
	'QUESTIONS_EXPLAIN'			=> 'Q&amp;A 플러그인을 당신이 사용하도록 모든 형태의 설정을 제출하십시오, 사용자는 여기에 지정된 질문 중 하나를 수행하라는 메시지가 표시됩니다. 적어도 하나의 기본 언어를 설정해야 플러그인을 사용합니다. 구글 검색을 위해 이러한 질문은 구글 검색 봇이 대답하기 쉽게 넘어가게 해야합니다. 질문의 설정을 불규칙하게 변경하여 사용하는 것이 가장 좋은 결과를 얻을 것입니다 . 귀하의 질문이 혼합 된 경우에 의존하는 경우에는 엄격한 설정을 사용합니다, 문장 부호 또는 공백.',
	'QUESTION_DELETED'			=> '질문 삭제',
	'QUESTION_LANG'				=> '언어',
	'QUESTION_LANG_EXPLAIN'		=> '이 질문과 답변을 작성하는 언어입니다.',
	'QUESTION_STRICT'			=> '엄격한 검사',
	'QUESTION_STRICT_EXPLAIN'	=> '혼합 된 경우, 문장 부호 및 공백을 적용 할 수 있습니다.',

	'QUESTION_TEXT'				=> '질문',
	'QUESTION_TEXT_EXPLAIN'		=> '사용자에게 질문 제시.',

	'QA_ERROR_MSG'				=> '모든 적어도 하나의 답을 입력하십시오.',
	'QA_LAST_QUESTION'			=> '플러그인이 활성화되어있는 동안 당신은 모든 질문을 삭제할 수 없습니다.',

));
