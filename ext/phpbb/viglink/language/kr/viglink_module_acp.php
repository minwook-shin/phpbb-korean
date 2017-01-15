<?php
/**
 *
 * VigLink extension for the phpBB Forum Software package.
 *
 * @copyright (c) 2014 phpBB Limited <https://www.phpbb.com>
 * @license GNU General Public License, version 2 (GPL-2.0)
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
//
// Some characters you may want to copy&paste:
// ’ » “ ” …
//

$lang = array_merge($lang, array(
	'ACP_VIGLINK_SETTINGS'			=> 'VigLink 설정',
	'ACP_VIGLINK_SETTINGS_EXPLAIN'=> 'VigLink는 사용자 환경을 변경하지 않고 포럼의 사용자가 게시 한 링크를 이산 적으로 수익화하는 타사 서비스입니다. 사용자가 제품이나 서비스에 대한 아웃 바운드 링크를 클릭하여 무언가를 구매할 때 판매자는 VigLink에 수수료를 지불하고 그 중 수수료는 phpBB 프로젝트에 기부됩니다. VigLink를 활성화하고 수익금을 phpBB 프로젝트에 기부함으로써 오픈 소스 조직을 지원하고 지속적인 재정적 보장을 보장합니다.',
	'ACP_VIGLINK_SETTINGS_CHANGE'=> ' "<a href="%1$s"> VigLink 설정 </a>"패널에서 언제든지 이 설정을 변경할 수 있습니다.',
	'ACP_VIGLINK_ENABLE'			=> 'VigLink 활성화',
	'ACP_VIGLINK_ENABLE_EXPLAIN'	=> 'VigLink 서비스 사용 활성화.',
	'ACP_VIGLINK_EARNINGS'			=> '수입 청구 (추가적)',
	'ACP_VIGLINK_EARNINGS_EXPLAIN'  => 'VigLink 변환 계정에 등록하면 자신의 수입을 청구 할 수 있습니다.',
	'ACP_VIGLINK_DISABLED_PHPBB'	=> 'vigLink 서비스가 phpBB에 의해 사용 중지되었습니다.',
	'ACP_VIGLINK_CLAIM'				=> '수입 청구',
	'ACP_VIGLINK_CLAIM_EXPLAIN'		=> '수입을 phpBB 프로젝트에 기부하는 대신 VigLink 수익 창출 링크에서 포럼 수입을 청구 할 수 있습니다. 계정 설정을 관리하려면 "계정 변환"을 클릭하여 "VigLink Convert"계정을 등록하십시오.',
	'ACP_VIGLINK_CONVERT_ACCOUNT'	=> '계정 변환',
	'ACP_VIGLINK_NO_CONVERT_LINK'	=> 'VigLink 변환 계정 링크를 가져올 수 없습니다.'));
