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
	'ALREADY_DEFAULT_GROUP'		=> '선택한 그룹이 이미 기본 그룹입니다.',
	'ALREADY_IN_GROUP'			=> '이미 선택한 그룹의 구성원입니다.',
	'ALREADY_IN_GROUP_PENDING'	=> '이미 선택한 그룹에 가입 요청했습니다.',

	'CANNOT_JOIN_GROUP'			=> '이 그룹에 가입 할 수 없습니다. 당신은 개방적이고 자유롭게 열려있는 그룹에 가입 할 수 있습니다.',
	'CANNOT_RESIGN_GROUP'		=> '이 그룹에서 탈퇴 할 수 없습니다. 당신은 개방적이고 자유롭게 열린 그룹에서 탈퇴 할 수 있습니다.',
	'CHANGED_DEFAULT_GROUP'		=> '성공적으로 기본 그룹을 변경했습니다.',

	'GROUP_AVATAR'						=> '그룹 아바타',
	'GROUP_CHANGE_DEFAULT'				=> '당신은 당신이 그룹에 기본 구성원을 변경 하시겠습니까 “%s”?',
	'GROUP_CLOSED'						=> '닫침',
	'GROUP_DESC'						=> '그룹 설명',
	'GROUP_HIDDEN'						=> '숨김',
	'GROUP_INFORMATION'					=> '유저 그룹 정보',
	'GROUP_IS_CLOSED'					=> '닫힌 그룹, 신규 회원은 그룹 리더의 초청에 가입 할 수 있습니다.',
	'GROUP_IS_FREE'						=> '이것은 모든 신입 회원 환영, 자유롭게 열린 그룹입니다.',
	'GROUP_IS_HIDDEN'					=> '이 숨겨진 그룹의 구성원을 볼 수있는이 그룹의 구성원입니다.',
	'GROUP_IS_OPEN'						=> '이것은 오픈 그룹은 회원 가입 신청을 할 수있다',
	'GROUP_IS_SPECIAL'					=> '이는, 특별한 그룹은 보드 관리자가 특별한 그룹 관리됩니다.',
	'GROUP_JOIN'						=> '그룹 가입',
	'GROUP_JOIN_CONFIRM'				=> '당신이 선택한 그룹에 가입 하시겠습니까?',
	'GROUP_JOIN_PENDING'				=> '그룹 가입을 요청',
	'GROUP_JOIN_PENDING_CONFIRM'		=> '당신이 선택한 그룹에 가입 요청 하시겠습니까?',
	'GROUP_JOINED'						=> '성공적으로 선택한 그룹에 합류했습니다.',
	'GROUP_JOINED_PENDING'				=> '성공적으로 그룹 구성원을 요청했습니다. 회원을 승인하는 그룹 리더 기다려주십시오.',
	'GROUP_LIST'						=> '유저 관리',
	'GROUP_MEMBERS'						=> '맴버스 그룹',
	'GROUP_NAME'						=> '그룹이름',
	'GROUP_OPEN'						=> '열림',
	'GROUP_RANK'						=> '그룹 랭크',
	'GROUP_RESIGN_MEMBERSHIP'			=> '그룹 구성원을 사임p',
	'GROUP_RESIGN_MEMBERSHIP_CONFIRM'	=> '당신은 당신이 선택한 그룹에서 회원을 탈퇴 하시겠습니까?',
	'GROUP_RESIGN_PENDING'				=> '보류중인 그룹 구성원을 사임',
	'GROUP_RESIGN_PENDING_CONFIRM'		=> '당신은 당신이 선택한 그룹에서 보류중인 회원을 탈퇴 하시겠습니까?',
	'GROUP_RESIGNED_MEMBERSHIP'			=> '당신이 성공적으로 선택한 그룹에서 제거되었습니다.',
	'GROUP_RESIGNED_PENDING'			=> '보류중인 회원이 성공적으로 선택한 그룹에서 제거되었습니다.',
	'GROUP_TYPE'						=> '그룹 유형',
	'GROUP_UNDISCLOSED'					=> '숨겨진 그룹',
	'FORUM_UNDISCLOSED'					=> '숨겨진 그룹(들) 관리',

	'LOGIN_EXPLAIN_GROUP'	=> '당신은 그룹 세부 정보를 보려면 로그인해야합니다.',

	'NO_LEADERS'					=> '당신은 그룹의 리더가 아니다.',
	'NOT_LEADER_OF_GROUP'			=> '선택한 그룹의 리더가 아니기 때문에 요청한 작업을 수행 할 수 없습니다.',
	'NOT_MEMBER_OF_GROUP'			=> '선택한 그룹의 구성원이 아니기 때문에 요청한 작업을 수행 할 수 없거나 또는 회원이 아직 승인하지 않았습니다.',
	'NOT_RESIGN_FROM_DEFAULT_GROUP'	=> '당신은 당신의 기본 그룹에서 사임 할 수 없습니다.',

	'PRIMARY_GROUP'		=> '기본 그룹',

	'REMOVE_SELECTED'		=> '제거가 선택됨',

	'USER_GROUP_CHANGE'			=> '“%1$s”그룹을 “%2$s”에서',
	'USER_GROUP_DEMOTE'			=> '리더십 강등',
	'USER_GROUP_DEMOTE_CONFIRM'	=> '당신이 선택한 그룹에서 그룹 리더를 강등 하시겠습니까?',
	'USER_GROUP_DEMOTED'		=> '성공적으로 리더십을 강등.',
));
