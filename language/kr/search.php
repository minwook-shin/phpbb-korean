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
'ALL_AVAILABLE'=> '모두 사용 가능',
'ALL_RESULTS'=> '모든 결과',

'DISPLAY_RESULTS'=> '결과 표시 방법',

'FOUND_SEARCH_MATCHES'=> array(
1 => '검색 결과 %d 일치',
2 => '검색 결과 %d 개 일치',
),
'FOUND_MORE_SEARCH_MATCHES'=> array(
1 => '%d 개의 일치 항목을 찾았습니다 ',
2 => '검색이 %d 개 이상의 일치를 찾았습니다.',
),

'GLOBAL'=> '글로벌 발표',

'IGNORED_TERMS'=> '무시 됨',
'IGNORED_TERMS_EXPLAIN'=> '검색어가 너무 일반적인 단어들 때문에 무시되었습니다 : <strong> %s </ strong>',

'JUMP_TO_POST'=> '점프에 게시',

'LOGIN_EXPLAIN_EGOSEARCH'=> '게시판에 글을 올리려면 등록하고 로그인해야합니다.',
'LOGIN_EXPLAIN_UNREADSEARCH'=> '게시판에서 읽지 않은 게시물을 보려면 등록하고 로그인해야합니다.',
'LOGIN_EXPLAIN_NEWPOSTS'=> '마지막 방문 이후 새로운 글을 보시려면 보드에 등록하고 로그인하셔야합니다.',

'MAX_NUM_SEARCH_KEYWORDS_REFINE'=> array(
1 => '검색 할 단어가 너무 많았습니다. %1$d 단어를 초과하여 입력하지 마십시오. ',
2 => '검색 할 단어가 너무 많았습니다. %1$d 단어를 초과하여 입력하지 마십시오. ',
),

'NO_KEYWORDS'=> '검색 할 단어를 하나 이상 지정해야합니다. 각 단어는 적어도 %s 개이어야하며 와일드 카드를 제외하고 %s 이상을 포함 할 수 없습니다. ',
'NO_RECENT_SEARCHES'=> '최근에 검색 한 내용이 없습니다.',
'NO_SEARCH'=> '죄송하지만 검색 시스템을 사용할 수 없습니다.',
'NO_SEARCH_RESULTS'=> '일치하는 것이 없습니다.',
'NO_SEARCH_LOAD'=> '죄송합니다. 현재는 검색을 사용할 수 없습니다. 서버의로드가 높습니다. 나중에 다시 시도 해주십시오.',
'NO_SEARCH_TIME'=> array(
1 => '죄송하지만 현재 검색 기능을 사용할 수 없습니다. %d 초 후에 다시 시도하십시오. ',
2 => '죄송하지만 지금은 검색을 사용할 수 없습니다. %d 초 후에 다시 시도하십시오. ',
),
'NO_SEARCH_UNREADS'=> '미안하지만 읽지 않은 게시물을 검색하는 기능이 게시판에서 사용 중지되었습니다.',
'WORD_IN_NO_POST'=> '게시물에 단어 <strong> %s </ strong>이 없어서 게시물을 찾을 수 없습니다.',
'WORDS_IN_NO_POST'=> '게시물에 단어 <strong> %s </ strong>이 없어서 게시물을 찾을 수 없습니다.',

'POST_CHARACTERS'=> '게시물의 글자',
'PHRASE_SEARCH_DISABLED'=> '정확한 문장으로 검색하는 것은이 보드에서 지원되지 않습니다.',

'RECENT_SEARCHES'=> '최근 검색',
'RESULT_DAYS'=> '결과를 이전으로 제한',
'RESULT_SORT'=> '결과 정렬',
'RETURN_FIRST'=> '처음으로 돌아 가기',
'GO_TO_SEARCH_ADV'=> '고급 검색으로 이동',

'SEARCHED_FOR'=> '검색 용어 사용됨',
'SEARCHED_TOPIC'=> '검색된 주제',
'SEARCHED_QUERY'=> '검색된 검색어',
'SEARCH_ALL_TERMS'=> '모든 검색어 검색 또는 입력 한 검색어 사용',
'SEARCH_ANY_TERMS'=> '검색어 검색',
'SEARCH_AUTHOR'=> '저자 검색',
'SEARCH_AUTHOR_EXPLAIN'=> '부분 일치를 위해 *를 와일드 카드로 사용하십시오.',
'SEARCH_FIRST_POST'=> '주제의 첫 번째 게시물 만',
'SEARCH_FORUMS'=> '포럼에서 검색',
'SEARCH_FORUMS_EXPLAIN'=> '검색 할 포럼을 선택하십시오. 아래 "검색 서브 포럼"을 비활성화하지 않으면 서브 포럼이 자동으로 검색됩니다.',
'SEARCH_IN_RESULTS'=> '검색 결과',
'SEARCH_KEYWORDS_EXPLAIN'=> '찾아야 할 단어 앞에 <strong> + </strong>를 놓고 찾을 수없는 단어 앞에 <strong> - </strong>을 놓으십시오. 단어 중 하나만 발견해야하는 경우 <strong> | </ strong>로 구분 된 단어 목록을 대괄호로 묶으십시오. 부분 일치의 경우 *를 와일드 카드로 사용하십시오. ',
'SEARCH_MSG_ONLY'=> '메시지 본문 만',
'SEARCH_OPTIONS'=> '검색 옵션',
'SEARCH_QUERY'=> '검색어',
'SEARCH_SUBFORUMS'=> '검색 서브 포럼',
'SEARCH_TITLE_MSG'=> '제목 및 메시지 글 올리기',
'SEARCH_TITLE_ONLY'=> '주제 제목 만',
'SEARCH_WITHIN'=> '검색 범위 내',
'SORT_ASCENDING'=> '오름차순',
'SORT_AUTHOR'=> '저자',
'SORT_DESCENDING'=> '내림차순',
'SORT_FORUM'=> '포럼',
'SORT_POST_SUBJECT'=> '주제 게시',
'SORT_TIME'=> '게시 시간',
'SPHINX_SEARCH_FAILED'=> '검색 실패 : %s',
'SPHINX_SEARCH_FAILED_LOG'=> '죄송합니다. 검색을 수행 할 수 없습니다. 이 실패에 대한 추가 정보가 오류 로그에 기록되었습니다. ',

'TOO_FEW_AUTHOR_CHARS'=> array(
1 => '작성자 이름의 %d 문자 이상을 지정해야합니다.',
2 => '작성자 이름에 %d 자 이상을 지정해야합니다.',


	),
));
