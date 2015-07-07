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
	'RECAPTCHA_LANG'				=> 'kr',
	'RECAPTCHA_NOT_AVAILABLE'		=> 'reCAPTCHA를를 사용하려면 계정에 만들어야합니다 <a href="http://www.google.com/recaptcha">www.google.com/recaptcha</a>.',
	'CAPTCHA_RECAPTCHA'				=> 'reCaptcha',
	'RECAPTCHA_INCORRECT'			=> '제출된 확인 코드가 잘못되었습니다',

	'RECAPTCHA_PUBLIC'				=> '퍼블릭 reCAPTCHA 키',
	'RECAPTCHA_PUBLIC_EXPLAIN'		=> '당신의 퍼블릭 reCaptcha 키. <a href="http://www.google.com/recaptcha">www.google.com/recaptcha</a> 에서 키를 얻을 수 있습니다.',
	'RECAPTCHA_PRIVATE'				=> '비밀 reCaptcha 키',
	'RECAPTCHA_PRIVATE_EXPLAIN'		=> '당신의 비밀 reCaptcha 키. <a href="http://www.google.com/recaptcha">www.google.com/recaptcha</a>.에서 키를 얻을 수 있습니다.',

	'RECAPTCHA_EXPLAIN'				=> '자동 제출을 방지하기위한 노력의 일환으로, 우리는 당신이 아래의 필드에 표시되는 텍스트를 입력 할 것을 요구하고 있습니다.',
	'RECAPTCHA_SOCKET_ERROR'		=> 'reCAPTCHA를 서비스에 연결하는 데 문제가 발생했습니다 : 소켓을 열 수 없습니다. 나중에 다시 시도하십시오.',
));
