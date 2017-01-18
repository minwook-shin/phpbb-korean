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
	'ALL_AVAILABLE'			=> '사용가능한 모든 것',
	'ALL_RESULTS'			=> '모든 결과',

	'DISPLAY_RESULTS'		=> '결과 표시 형식',

	'FOUND_SEARCH_MATCHES'		=> array(
		1	=> '검색 %d 개의 일치 항목을 찾았습니다.',
		2	=> '검색 %d 개의 일치 항목을 찾았습니다.',
	),
	'FOUND_MORE_SEARCH_MATCHES'		=> array(
		1	=> '검색이 %d 개 이상 발견되었습니다',
		2	=> '검색이 %d 개 이상 발견되었습니다',
	),

	'GLOBAL'				=> '전체 공지',

	'IGNORED_TERMS'			=> '무시',
	'IGNORED_TERMS_EXPLAIN'	=> '검색어가 너무 일반적인 단어이기 때문에 다음 단어가 무시되었습니다: <strong>%s</strong>.',

	'JUMP_TO_POST'			=> '게시물로 이동',

	'LOGIN_EXPLAIN_EGOSEARCH'	=> '게시판을 통해 자신의 게시물을 보려면 로그인하고 로그인해야합니다.',
	'LOGIN_EXPLAIN_UNREADSEARCH'=> '게시판에 읽지 않은 게시물을 보려면 등록하고 로그인해야합니다.',
	'LOGIN_EXPLAIN_NEWPOSTS'	=> '게시판에 마지막으로 방문한 이후 새 게시물을 보려면 등록하고 로그인해야합니다.',

	'MAX_NUM_SEARCH_KEYWORDS_REFINE'	=> array(
		1	=> '검색 할 단어가 너무 많습니다. %1$d 단어를 초과하여 입력하지 마십시오.',
		2	=> '검색 할 단어가 너무 많습니다. %1$d 단어를 초과하여 입력하지 마십시오.',
	),

	'NO_KEYWORDS'			=> '검색 할 단어를 하나 이상 지정해야합니다. 각 단어는 최소한 %s (으)로 구성되어야하며 와일드 카드를 제외하고 %s 이상을 포함 할 수 없습니다.',
	'NO_RECENT_SEARCHES'	=> '최근에 검색이 수행되지 않았습니다.',
	'NO_SEARCH'				=> '죄송합니다만 검색 시스템을 사용하실 수 없습니다.',
	'NO_SEARCH_RESULTS'		=> '일치하는 항목이 없습니다.',
	'NO_SEARCH_LOAD'		=> '죄송합니다만 지금은 검색을 사용할 수 없습니다. 서버의 불러오기가 높습니다. 나중에 다시 시도 해주십시오.',
	'NO_SEARCH_TIME'		=> array(
		1	=> '죄송합니다만 지금은 검색을 사용할 수 없습니다. %d 초 후에 다시 시도하십시오.',
		2	=> '죄송합니다만 지금은 검색을 사용할 수 없습니다. %d 초 후에 다시 시도하십시오.',
	),
	'NO_SEARCH_UNREADS'		=> '죄송하지만 읽지 않은 게시물을 검색하는 기능이 게시판에서 사용 중지되었습니다.',
	'WORD_IN_NO_POST'		=> '<strong> %s 이라는 단어가 게시물에 포함되어 있지 않아 게시물을 찾을 수 없습니다.',
	'WORDS_IN_NO_POST'		=> '<strong> %s </strong>이라는 단어가 게시물에 포함되어 있지 않아 게시물을 찾을 수 없습니다.',

	'POST_CHARACTERS'		=> '게시물의 문자',
	'PHRASE_SEARCH_DISABLED'	=> '정확한 구로 검색하는 것은 이 보드에서 지원되지 않습니다.',

	'RECENT_SEARCHES'		=> '최근 검색',
	'RESULT_DAYS'			=> '결과를 이전으로 제한',
	'RESULT_SORT'			=> '결과 정렬 기준',
	'RETURN_FIRST'			=> '처음으로 돌아가기',
	'GO_TO_SEARCH_ADV'	=> '고급 검색으로 이동',

	'SEARCHED_FOR'				=> '사용된 검색어',
	'SEARCHED_TOPIC'			=> '검색된 주제',
	'SEARCHED_QUERY'			=> '검색된 검색어',
	'SEARCH_ALL_TERMS'			=> '모든 검색어 검색 또는 입력한 검색어 사용',
	'SEARCH_ANY_TERMS'			=> '모든 조건 검색',
	'SEARCH_AUTHOR'				=> '작성자 검색',
	'SEARCH_AUTHOR_EXPLAIN'		=> '부분 일치의 경우 *를 와일드 카드로 사용하십시오.',
	'SEARCH_FIRST_POST'			=> '주제의 첫 번째 게시물만',
	'SEARCH_FORUMS'				=> '포럼에서 검색',
	'SEARCH_FORUMS_EXPLAIN'		=> '검색 할 포럼을 선택하십시오. 아래 "서브 포럼 검색"을 비활성화하지 않으면 서브 포럼이 자동으로 검색됩니다.',
	'SEARCH_IN_RESULTS'			=> '검색 결과',
	'SEARCH_KEYWORDS_EXPLAIN'	=> '찾을 수없는 단어 앞에 <strong> + </strong>를 놓고 찾을 수 없는 단어 앞에 <strong> - </strong>을 놓습니다. 단어 중 하나만 발견해야하는 경우 <strong> | </strong>로 구분 된 단어 목록을 대괄호로 묶으십시오. 부분 일치의 경우 *를 와일드 카드로 사용하십시오.',
	'SEARCH_MSG_ONLY'			=> '메시지 텍스트만',
	'SEARCH_OPTIONS'			=> '검색 옵션',
	'SEARCH_QUERY'				=> '검색어',
	'SEARCH_SUBFORUMS'			=> '서브포럼 검색',
	'SEARCH_TITLE_MSG'			=> '게시물 제목 및 메시지 텍스트',
	'SEARCH_TITLE_ONLY'			=> '주제 제목만',
	'SEARCH_WITHIN'				=> '안에서 검색',
	'SORT_ASCENDING'			=> '오름차순',
	'SORT_AUTHOR'				=> '작성자',
	'SORT_DESCENDING'			=> '내림차순',
	'SORT_FORUM'				=> '포럼',
	'SORT_POST_SUBJECT'			=> '게시물 제목',
	'SORT_TIME'					=> '게시물 시간',
	'SPHINX_SEARCH_FAILED'		=> '검색 실패: %s',
	'SPHINX_SEARCH_FAILED_LOG'	=> '죄송합니다. 검색을 수행 할 수 없습니다. 이 실패에 대한 자세한 정보는 오류 로그에 기록됩니다.',

	'TOO_FEW_AUTHOR_CHARS'	=> array(
		1	=> '작성자 이름의 %d 문자 이상을 지정해야합니다.',
		2	=> '작성자 이름의 %d 문자 이상을 지정해야합니다.',
	),
));
