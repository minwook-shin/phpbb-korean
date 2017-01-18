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
		1	=> 'Search found %d match',
		2	=> 'Search found %d matches',
	),
	'FOUND_MORE_SEARCH_MATCHES'		=> array(
		1	=> 'Search found more than %d match',
		2	=> 'Search found more than %d matches',
	),

	'GLOBAL'				=> '전체 공지',

	'IGNORED_TERMS'			=> '무시',
	'IGNORED_TERMS_EXPLAIN'	=> '검색어가 너무 일반적인 단어이기 때문에 다음 단어가 무시되었습니다: <strong>%s</strong>.',

	'JUMP_TO_POST'			=> '글로 이동',

	'LOGIN_EXPLAIN_EGOSEARCH'	=> '게시판을 통해 자신의 게시물을 보려면 로그인하고 로그인해야합니다.',
	'LOGIN_EXPLAIN_UNREADSEARCH'=> '게시판에 읽지 않은 게시물을 보려면 등록하고 로그인해야합니다.',
	'LOGIN_EXPLAIN_NEWPOSTS'	=> '게시판에 마지막으로 방문한 이후 새 게시물을 보려면 등록하고 로그인해야합니다.',

	'MAX_NUM_SEARCH_KEYWORDS_REFINE'	=> array(
		1	=> '검색 할 단어가 너무 많습니다. %1$d 단어를 초과하여 입력하지 마십시오.',
		2	=> '검색 할 단어가 너무 많습니다. %1$d 단어를 초과하여 입력하지 마십시오.',
	),

	'NO_KEYWORDS'			=> 'You must specify at least one word to search for. Each word must consist of at least %s and must not contain more than %s excluding wildcards.',
	'NO_RECENT_SEARCHES'	=> 'No searches have been carried out recently.',
	'NO_SEARCH'				=> 'Sorry but you are not permitted to use the search system.',
	'NO_SEARCH_RESULTS'		=> 'No suitable matches were found.',
	'NO_SEARCH_LOAD'		=> 'Sorry but you cannot use search at this time. The server has high load. Please try again later.',
	'NO_SEARCH_TIME'		=> array(
		1	=> 'Sorry but you cannot use search at this time. Please try again in %d second.',
		2	=> 'Sorry but you cannot use search at this time. Please try again in %d seconds.',
	),
	'NO_SEARCH_UNREADS'		=> 'Sorry but searching for unread posts has been disabled on this board.',
	'WORD_IN_NO_POST'		=> 'No posts were found because the word <strong>%s</strong> is not contained in any post.',
	'WORDS_IN_NO_POST'		=> 'No posts were found because the words <strong>%s</strong> are not contained in any post.',

	'POST_CHARACTERS'		=> 'characters of posts',
	'PHRASE_SEARCH_DISABLED'	=> 'Searching by exact phrase is not supported on this board.',

	'RECENT_SEARCHES'		=> 'Recent searches',
	'RESULT_DAYS'			=> 'Limit results to previous',
	'RESULT_SORT'			=> 'Sort results by',
	'RETURN_FIRST'			=> 'Return first',
	'GO_TO_SEARCH_ADV'	=> 'Go to advanced search',

	'SEARCHED_FOR'				=> 'Search term used',
	'SEARCHED_TOPIC'			=> 'Searched topic',
	'SEARCHED_QUERY'			=> 'Searched query',
	'SEARCH_ALL_TERMS'			=> 'Search for all terms or use query as entered',
	'SEARCH_ANY_TERMS'			=> 'Search for any terms',
	'SEARCH_AUTHOR'				=> 'Search for author',
	'SEARCH_AUTHOR_EXPLAIN'		=> 'Use * as a wildcard for partial matches.',
	'SEARCH_FIRST_POST'			=> 'First post of topics only',
	'SEARCH_FORUMS'				=> 'Search in forums',
	'SEARCH_FORUMS_EXPLAIN'		=> 'Select the forum or forums you wish to search in. Subforums are searched automatically if you do not disable “search subforums“ below.',
	'SEARCH_IN_RESULTS'			=> 'Search these results',
	'SEARCH_KEYWORDS_EXPLAIN'	=> 'Place <strong>+</strong> in front of a word which must be found and <strong>-</strong> in front of a word which must not be found. Put a list of words separated by <strong>|</strong> into brackets if only one of the words must be found. Use * as a wildcard for partial matches.',
	'SEARCH_MSG_ONLY'			=> 'Message text only',
	'SEARCH_OPTIONS'			=> 'Search options',
	'SEARCH_QUERY'				=> 'Search query',
	'SEARCH_SUBFORUMS'			=> 'Search subforums',
	'SEARCH_TITLE_MSG'			=> 'Post subjects and message text',
	'SEARCH_TITLE_ONLY'			=> 'Topic titles only',
	'SEARCH_WITHIN'				=> 'Search within',
	'SORT_ASCENDING'			=> 'Ascending',
	'SORT_AUTHOR'				=> 'Author',
	'SORT_DESCENDING'			=> 'Descending',
	'SORT_FORUM'				=> 'Forum',
	'SORT_POST_SUBJECT'			=> 'Post subject',
	'SORT_TIME'					=> 'Post time',
	'SPHINX_SEARCH_FAILED'		=> 'Search failed: %s',
	'SPHINX_SEARCH_FAILED_LOG'	=> 'Sorry, search could not be performed. More information about this failure has been logged in the error log.',

	'TOO_FEW_AUTHOR_CHARS'	=> array(
		1	=> 'You must specify at least %d character of the authors name.',
		2	=> 'You must specify at least %d characters of the authors name.',
	),
));
