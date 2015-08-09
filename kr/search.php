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
	'ALL_AVAILABLE'			=> '모든지 사용 가능한',
	'ALL_RESULTS'			=> '모든 결과',

	'DISPLAY_RESULTS'		=> '결과 표시',

	'FOUND_SEARCH_MATCHES'		=> array(
		1	=> '검색 %d 일치 발견',
		2	=> '검색 %d 일치 발견',
	),
	'FOUND_MORE_SEARCH_MATCHES'		=> array(
		1	=> '검색 %d 의 매치보다 더 많은 발견',
		2	=> '검색 %d 의 매치보다 더 많은 발견',
	),

	'GLOBAL'				=> '전체 공지',

	'IGNORED_TERMS'			=> '무시',
	'IGNORED_TERMS_EXPLAIN'	=> '너무 일반적인 단어이기 때문에 검색 쿼리에 다음과 같은 단어는 무시: <strong>%s</strong>.',

	'JUMP_TO_POST'			=> '글로 이동',

	'LOGIN_EXPLAIN_EGOSEARCH'	=> '이 게시판은 당신이 등록하고 자신의 게시물을 보려면 로그인해야합니다.',
	'LOGIN_EXPLAIN_UNREADSEARCH'=> '이 게시판은 등록 읽지 않은 게시글보기를 하려면 로그인해야합니다.',
	'LOGIN_EXPLAIN_NEWPOSTS'	=> '이 게시판은 등록 마지막 방문 이후 새로운 게시글보기 하려면 로그인해야합니다.',

	'MAX_NUM_SEARCH_KEYWORDS_REFINE'	=> array(
		1	=> '당신은 검색을 너무 많은 단어 지정했습니다. %1$d 단어 이상을 입력하지 마십시오.',
		2	=> '당신은 검색을 너무 많은 단어 지정했습니다. %1$d 단어 이상을 입력하지 마십시오.',
	),

	'NO_KEYWORDS'			=> '당신은 검색 할 하나 이상의 단어를 지정해야합니다. 각각의 단어로 구성되어야합니다 적어도 %s 과 %s 이상을 와일드 카드를 제외하고 포함 할 수 없습니다.',
	'NO_RECENT_SEARCHES'	=> '어떠한 검색은 최근 수행되지 않았습니다.',
	'NO_SEARCH'				=> '죄송하지만 검색 시스템을 사용 할 수 없습니다.',
	'NO_SEARCH_RESULTS'		=> '더 적합한 일치를 찾을 수 없습니다.',
	'NO_SEARCH_LOAD'		=> '죄송하지만 당신은 지금 검색을 사용할 수 없습니다. 서버의 높은 부하가 문제입니다. 나중에 다시 시도하십시오.',
	'NO_SEARCH_TIME'		=> array(
		1	=> '죄송하지만 지금 검색을 사용할 수 없습니다. %d 초에 다시 시도해주시기 바랍니다.',
		2	=> '죄송하지만 지금 검색을 사용할 수 없습니다. %d 초에 다시 시도해주시기 바랍니다.',
	),
	'NO_SEARCH_UNREADS'		=> '죄송하지만, 읽지 않은 게시물을 검색하면 보드에 사용할 수 없습니다.',
	'WORD_IN_NO_POST'		=> '<strong>%s</strong> 게시물이 단어 때문에 찾을 수 없습니다 모든 게시물에 포함되지 않습니다.',
	'WORDS_IN_NO_POST'		=> '<strong>%s</strong> 게시물이 단어들 때문에 찾을 수 없습니다 모든 게시물에 포함되지 않습니다.',

	'POST_CHARACTERS'		=> '게시물의 문자',
	'PHRASE_SEARCH_DISABLED'	=> '정확한 구문에 의해 검색이 보드에서 지원되지 않습니다.',

	'RECENT_SEARCHES'		=> '최근 검색',
	'RESULT_DAYS'			=> '이전의 제한된 결과',
	'RESULT_SORT'			=> '정렬 결과',
	'RETURN_FIRST'			=> '처음으로 돌아가기',
	'GO_TO_SEARCH_ADV'	=> '고급 검색으로 이동',

	'SEARCHED_FOR'				=> '검색 조건을 사용',
	'SEARCHED_TOPIC'			=> '주제 검색됨',
	'SEARCHED_QUERY'			=> '쿼리 검색됨',
	'SEARCH_ALL_TERMS'			=> '입력 한 모든 용어를 사용하거나 쿼리 검색',
	'SEARCH_ANY_TERMS'			=> '어떤 용어 검색',
	'SEARCH_AUTHOR'				=> '글쓴이 찾기',
	'SEARCH_AUTHOR_EXPLAIN'		=> '부분적으로 일치를위한 *를 와일드 카드로 사용합니다.',
	'SEARCH_FIRST_POST'			=> '오직 주제의 첫 번째 게시물',
	'SEARCH_FORUMS'				=> '포럼 검색',
	'SEARCH_FORUMS_EXPLAIN'		=> '당신이 검색하고자하는 포럼이나 포럼을 선택합니다. 아래의 "검색 많은 subforums"를 사용하지 않는 경우 하위 포럼이 자동으로 검색됩니다 .',
	'SEARCH_IN_RESULTS'			=> '이 결과에서 검색',
	'SEARCH_KEYWORDS_EXPLAIN'	=> '<strong>+</strong>는 찾을 단어의 앞에 있어야하며 <strong>-</strong>는 찾지말아야될 단어에서 쓰입니다. 단어 하나가 발견해야하는 경우 괄호로 <strong>|</strong>에 의해 구분 된 단어의 목록을 넣습니다. 부분적으로 일치를위한 *를 와일드 카드로 사용합니다.',
	'SEARCH_MSG_ONLY'			=> '오직 매세지 텍스트',
	'SEARCH_OPTIONS'			=> '검색 옵션',
	'SEARCH_QUERY'				=> '쿼리 검색',
	'SEARCH_SUBFORUMS'			=> '서브포럼 찾기',
	'SEARCH_TITLE_MSG'			=> '포스트 주제와 메시지 텍스트',
	'SEARCH_TITLE_ONLY'			=> '오직 주제 재목만',
	'SEARCH_WITHIN'				=> '검색 안에',
	'SORT_ASCENDING'			=> '오름차순',
	'SORT_AUTHOR'				=> '글쓴이',
	'SORT_DESCENDING'			=> '내림차순',
	'SORT_FORUM'				=> '포럼',
	'SORT_POST_SUBJECT'			=> '주제 쓰기',
	'SORT_TIME'					=> '시간 쓰기',
	'SPHINX_SEARCH_FAILED'		=> '검색 실패: %s',
	'SPHINX_SEARCH_FAILED_LOG'	=> '죄송합니다, 검색 수행할 수 없습니다.실패에 대한 자세한 내용은 오류 로그에 기록됩니다.',

	'TOO_FEW_AUTHOR_CHARS'	=> array(
		1	=> '당신은 글쓴이 이름을 적어도 %d 개의 문자로 지정해야합니다.',
		2	=> '당신은 글쓴이 이름을 적어도 %d 개의 문자로 지정해야합니다.',
	),
));
