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
	'RECAPTCHA_LANG'				=> 'kr',
	'RECAPTCHA_NOT_AVAILABLE'		=> 'reCAPTCHA를 사용하려면 <a href="http://www.google.com/recaptcha"> www.google.com/recaptcha </a>에서 계정을 만들어야합니다.',
	'CAPTCHA_RECAPTCHA'				=> 'reCAPTCHA',
	'RECAPTCHA_INCORRECT'			=> '제공된 솔루션이 잘못되었습니다.',
	'RECAPTCHA_NOSCRIPT'			=> '도전을 로드하려면 브라우저에서 JavaScript를 활성화하십시오.',

	'RECAPTCHA_PUBLIC'				=> '공개 reCAPTCHA 키',
	'RECAPTCHA_PUBLIC_EXPLAIN'		=> '공개 reCAPTCHA 키. 키는 <a href="http://www.google.com/recaptcha"> www.google.com/recaptcha </a>에서 얻을 수 있습니다.',
	'RECAPTCHA_PRIVATE'				=> '비공개 reCAPTCHA 키',
	'RECAPTCHA_PRIVATE_EXPLAIN'		=> '비공개 reCAPTCHA 키. 키는 <a href="http://www.google.com/recaptcha"> www.google.com/recaptcha </a>에서 얻을 수 있습니다.',

	'RECAPTCHA_EXPLAIN'				=> '자동 제출을 막기 위해 다음과 같은 과제를 완료해야합니다.',
));
