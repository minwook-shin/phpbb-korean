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
'ALREADY_DEFAULT_GROUP'=> '선택한 그룹은 이미 기본 그룹입니다.',
'ALREADY_IN_GROUP'=> '이미 선택한 그룹의 회원입니다.',
'ALREADY_IN_GROUP_PENDING'=> '이미 선택한 그룹에 가입을 요청하셨습니다.',

'CANNOT_JOIN_GROUP'=> '이 그룹에 가입하실 수 없습니다. 자유롭고 개방 된 그룹에만 자유롭게 참여할 수 있습니다. ',
'CANNOT_RESIGN_GROUP'=> '이 그룹에서 탈퇴 할 수 없습니다. 열려 있고 자유롭게 활동하는 그룹들만 사임 할 수 있습니다. ',
'CHANGED_DEFAULT_GROUP'=> '기본 그룹을 성공적으로 변경했습니다.',

'GROUP_AVATAR'=> '그룹 아바타',
'GROUP_CHANGE_DEFAULT'=> '기본 회원을 그룹 "%s"(으)로 변경 하시겠습니까?',
'GROUP_CLOSED'=> '닫힘',
'GROUP_DESC'=> '그룹 설명',
'GROUP_HIDDEN'=> '숨김',
'GROUP_INFORMATION'=> '사용자 그룹 정보',
'GROUP_IS_CLOSED'=> '이것은 닫힌 그룹입니다. 신입 회원은 그룹 리더의 초청에 의해서만 참여할 수 있습니다.',
'GROUP_IS_FREE'=> '이것은 자유롭게 열리는 그룹입니다. 모든 신입 회원 환영합니다.',
'GROUP_IS_HIDDEN'=> '이것은 숨겨진 그룹입니다.이 그룹의 회원 만 회원 자격을 볼 수 있습니다.',
'GROUP_IS_OPEN'=> '이것은 열린 그룹입니다. 회원들이 가입 신청을 할 수 있습니다.',
'GROUP_IS_SPECIAL'=> '특별한 그룹입니다. 특별 그룹은 이사회 관리자가 관리합니다.',
'GROUP_JOIN'=> '가입 그룹',
'GROUP_JOIN_CONFIRM'=> '정말로 선택한 그룹에 가입 하시겠습니까?',
'GROUP_JOIN_PENDING'=> '그룹에 가입 요청',
'GROUP_JOIN_PENDING_CONFIRM'=> '선택한 그룹에 가입을 요청 하시겠습니까?',
'GROUP_JOINED'=> '선택한 그룹에 성공적으로 가입했습니다.',
'GROUP_JOINED_PENDING'=> '그룹 멤버쉽을 성공적으로 요청했습니다. 그룹 리더가 회원 자격을 승인 할 때까지 기다려주세요. ',
'GROUP_LIST'=> '사용자 관리',
'GROUP_MEMBERS'=> '그룹 멤버',
'GROUP_NAME'=> '그룹 이름',
'GROUP_OPEN'=> '열기',
'GROUP_RANK'=> '그룹 순위',
'GROUP_RESIGN_MEMBERSHIP'=> '그룹 멤버쉽 탈퇴',
'GROUP_RESIGN_MEMBERSHIP_CONFIRM'=> '선택한 그룹에서 회원을 탈퇴 하시겠습니까?',
'GROUP_RESIGN_PENDING'=> '보류중인 그룹 멤버쉽 탈퇴',
'GROUP_RESIGN_PENDING_CONFIRM'=> '선택한 그룹에서 보류중인 회원을 탈퇴 하시겠습니까?',
'GROUP_RESIGNED_MEMBERSHIP'=> '선택한 그룹에서 성공적으로 삭제되었습니다.',
'GROUP_RESIGNED_PENDING'=> '보류중인 회원이 선택한 그룹에서 성공적으로 삭제되었습니다.',
'GROUP_TYPE'=> '그룹 유형',
'GROUP_UNDISCLOSED'=> '숨겨진 그룹',
'FORUM_UNDISCLOSED'=> '숨겨진 포럼 검토',

'LOGIN_EXPLAIN_GROUP'=> '그룹 정보를 보려면 로그인해야합니다.',

'NO_LEADERS'=> '당신은 어떤 그룹의 지도자도 아닙니다.',
'NOT_LEADER_OF_GROUP'=> '선택한 그룹의 리더가 아니기 때문에 요청한 작업을 수행 할 수 없습니다.',
'NOT_MEMBER_OF_GROUP'=> '선택한 그룹의 회원이 아니거나 회원이 아직 승인되지 않았기 때문에 요청한 작업을 수행 할 수 없습니다.',
'NOT_RESIGN_FROM_DEFAULT_GROUP'=> '기본 그룹에서 탈퇴 할 수 없습니다.',

'PRIMARY_GROUP'=> '기본 그룹',

'REMOVE_SELECTED'=> '선택한 항목 삭제',

'USER_GROUP_CHANGE'=> ' "%1$s"그룹부터 "%2$s"까지',
'USER_GROUP_DEMOTE'=> '지도력 강등',
'USER_GROUP_DEMOTE_CONFIRM'=> '그룹 리더로 강등 하시겠습니까?',
'USER_GROUP_DEMOTED'=> '성공적으로 지도력을 강등했습니다.',
));