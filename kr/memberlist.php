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
	'ABOUT_USER'			=> '프로필',
	'ACTIVE_IN_FORUM'		=> '대부분의 활성화 포럼',
	'ACTIVE_IN_TOPIC'		=> '대부분의 활동한 글타래',
	'ADD_FOE'				=> '싫어하는 친구 추가',
	'ADD_FRIEND'			=> '친구 추가',
	'AFTER'					=> '후',

	'ALL'					=> '모두',

	'BEFORE'				=> '전',

	'CC_SENDER'				=> '자신이 이메일의 복사본을 보낼 수 있습니다.',
	'CONTACT_ADMIN'			=> '게시판 관리자에게 문의',

	'DEST_LANG'				=> '언어',
	'DEST_LANG_EXPLAIN'		=> '이 메시지를받는 사람에 대한 적절한 언어를 (사용 가능한 경우)을 선택합니다.',

	'EDIT_PROFILE'			=> '프로필 수정',

	'EMAIL_BODY_EXPLAIN'	=> '이 메시지는 HTML이나 BBCode는 포함되어 있지 않습니다, 일반 텍스트로 전송됩니다. 이 메시지에 대한 리턴 주소는 이메일 주소로 설정됩니다.',
	'EMAIL_DISABLED'		=> '죄송하지만 모든 전자 메일 관련 기능이 비활성화되었습니다.',
	'EMAIL_SENT'			=> '이메일이 전송되었습니다.',
	'EMAIL_TOPIC_EXPLAIN'	=> '이 메시지는 HTML이나 BBCode는 포함되어 있지 않습니다, 일반 텍스트로 전송됩니다. 글타래 정보가 이미 메시지에 포함되어 있습니다. 이 메시지에 대한 리턴 주소는 이메일 주소로 설정됩니다.',
	'EMPTY_ADDRESS_EMAIL'	=> '당신은 받는 사람에 대한 유효한 이메일 주소를 제공해야합니다.',
	'EMPTY_MESSAGE_EMAIL'	=> '당신은 메시지를 이메일로 전송하기 위해 입력해야합니다.',
	'EMPTY_MESSAGE_IM'		=> '당신은 메시지를 보낼 수있게 입력해야합니다.',
	'EMPTY_NAME_EMAIL'		=> '당신은 받는 사람의 실제 이름을 입력해야합니다.',
	'EMPTY_SENDER_EMAIL'	=> '유효한 이메일 주소를 제공해야합니다.',
	'EMPTY_SENDER_NAME'		=> '당신은 이름을 제공해야합니다.',
	'EMPTY_SUBJECT_EMAIL'	=> '당신은 이메일 제목을 지정해야합니다.',
	'EQUAL_TO'				=> '동일',

	'FIND_USERNAME_EXPLAIN'	=> '특정 구성원을 검색하려면이 양식을 사용하십시오. 당신은 모든 필드를 기입 할 필요가 없습니다. 와일드 카드로 일부 데이터 사용 *과 일치합니다. 입력 날짜 형식을 사용하는 경우 <kbd>YYYY-MM-DD</kbd>, e.g. <samp>2004-02-29</samp>.여러 유저 이름은 양식 자체에 따라 인정할 수있다) 하나 이상의 유저 이름을 선택하고 이전의 형태로 돌아 선택 마크 된 버튼을 클릭 마크 체크 박스를 사용합니다.',
	'FLOOD_EMAIL_LIMIT'		=> '이 시간에 다른 이메일을 보낼 수 없습니다. 나중에 다시 시도 해주십시오.',

	'GROUP_LEADER'			=> '그룹 리더',

	'HIDE_MEMBER_SEARCH'	=> '맴버 찾기 숨김',

	'IM_ADD_CONTACT'		=> '연락처 추가',
	'IM_DOWNLOAD_APP'		=> '다운로드 애플리케이션',
	'IM_JABBER'				=> '유저가 원치 않는 인스턴트 메시지를 수신하지 않도록 선택했을 수 있습니다.',
	'IM_JABBER_SUBJECT'		=> '자동 메시지이므로 회신하지마시기바랍니다! %2$s의 유저 %1$s의 메시지.',
	'IM_MESSAGE'			=> '당신의 메시지',
	'IM_NAME'				=> '당신의 이름',
	'IM_NO_DATA'			=> '이 유저에 대한 적절한 연락처 정보가 없습니다.',
	'IM_NO_JABBER'			=> '죄송합니다, 재버 유저의 직접 메시징은이 게시판에서 지원되지 않습니다. 당신은 위의받는 사람에게 연락하는 시스템에 설치 재버 클라이언트가 필요합니다.',
	'IM_RECIPIENT'			=> '받는 사람',
	'IM_SEND'				=> '메시지 보내기',
	'IM_SEND_MESSAGE'		=> '메시지 보내기',
	'IM_SENT_JABBER'		=> '%1$s에 대한 귀하의 메시지가 성공적으로 전송되었습니다.',
	'IM_USER'				=> '인스턴트 메시지 보내기',

	'LAST_ACTIVE'				=> '마지막 활성화',
	'LESS_THAN'					=> '미만',
	'LIST_USERS'				=> array(
		1	=> '%d 유저',
		2	=> '%d 유저들',
	),
	'LOGIN_EXPLAIN_TEAM'		=> '이 게시판은 팀 목록을 보려면 가입 또는 로그인해야합니다.',
	'LOGIN_EXPLAIN_MEMBERLIST'	=> '이 게시판은 멤버에 액세스하려면 가입또는 로그인해야합니다.',
	'LOGIN_EXPLAIN_SEARCHUSER'	=> '이 게시판은 유저를 검색하려면 가입 또는 로그인해야합니다.',
	'LOGIN_EXPLAIN_VIEWPROFILE'	=> '이 게시판은 프로필을 보려면 가입 또는 로그인해야합니다.',

	'MORE_THAN'				=> '이상',

	'NO_CONTACT_FORM'		=> '게시판 관리자 연락처 양식은 사용할 수 없습니다.',
	'NO_CONTACT_PAGE'		=> '게시판 관리자 연락처 페이지는 사용할 수 없습니다.',
	'NO_EMAIL'				=> '이 유저에게 이메일을 보낼 수 없습니다.',
	'NO_VIEW_USERS'			=> '당신은 구성원 목록이나 프로필을 볼 수있는 권한이 없습니다.',

	'ORDER'					=> '순서',
	'OTHER'					=> '다른',

	'POST_IP'				=> 'IP/도메인으로부터 게시물 씀',

	'REAL_NAME'				=> '받는 사람 이름',
	'RECIPIENT'				=> '받는 사람',
	'REMOVE_FOE'			=> '싫어하는 친구 제거',
	'REMOVE_FRIEND'			=> '친구 제거',

	'SELECT_MARKED'			=> '마크 선택',
	'SELECT_SORT_METHOD'	=> '선택 정렬 방법',
	'SENDER_EMAIL_ADDRESS'	=> '당신의 이메일 주소',
	'SENDER_NAME'			=> '당신의 이름',
	'SEND_ICQ_MESSAGE'		=> 'ICQ 메시지 보내기',
	'SEND_IM'				=> '인스턴트 메시징',
	'SEND_JABBER_MESSAGE'	=> 'Send Jabber 메시지 보내기',
	'SEND_MESSAGE'			=> '메시지',
	'SEND_YIM_MESSAGE'		=> 'YIM 메시지 보내기',
	'SORT_EMAIL'			=> '이메일',
	'SORT_LAST_ACTIVE'		=> '마지막 활성화',
	'SORT_POST_COUNT'		=> '포스트 카운트',

	'USERNAME_BEGINS_WITH'	=> '아이디로 시작',
	'USER_ADMIN'			=> '유저 관리',
	'USER_BAN'				=> '금지',
	'USER_FORUM'			=> '유저 통계',
	'USER_LAST_REMINDED'	=> array(
		0		=> '이 시간에 알림 없음',
		1		=> '%1$d 알림 전송<br />» %2$s',
		2		=> '%1$d 알림 전송<br />» %2$s',
	),
	'USER_ONLINE'			=> '온라인',
	'USER_PRESENCE'			=> '게시판 존재',
	'USERS_PER_PAGE'		=> '페이지 당 유저',

	'VIEWING_PROFILE'		=> '정보보기 - %s',
	'VIEW_FACEBOOK_PROFILE'	=> '페이스 북보기 프로필',
	'VIEW_SKYPE_PROFILE'	=> '스카이프 보기 프로필',
	'VIEW_TWITTER_PROFILE'	=> '트위터 보기 프로필',
	'VIEW_YOUTUBE_CHANNEL'	=> '유튜브 체널 보기',
	'VIEW_GOOGLEPLUS_PROFILE' => 'Google+ 프로필 보기',
));
