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
	'RECAPTCHA_LANG'				=> 'ko',
	
	'CAPTCHA_RECAPTCHA'				=> 'reCaptcha v2',
	'CAPTCHA_RECAPTCHA_V3'			=> 'reCaptcha v3',

	'RECAPTCHA_INCORRECT'			=> '제공된 솔루션이 잘못되었습니다.',
	'RECAPTCHA_NOSCRIPT'			=> '도전을 로드하려면 브라우저에서 JavaScript를 활성화하십시오.',
	'RECAPTCHA_NOT_AVAILABLE'		=> 'reCAPTCHA를 사용하려면 <a href="http://www.google.com/recaptcha"> www.google.com/recaptcha </a>에서 계정을 만들어야합니다.',
	'RECAPTCHA_INVISIBLE'			=> 'This CAPTCHA is actually invisible. To verify that it works, a small icon should appear in right bottom corner of this page.',

	'RECAPTCHA_PUBLIC'				=> '공개 reCAPTCHA 키',
	'RECAPTCHA_PUBLIC_EXPLAIN'		=> '공개 reCAPTCHA 키. 키는 <a href="http://www.google.com/recaptcha"> www.google.com/recaptcha </a>에서 얻을 수 있습니다.',
	'RECAPTCHA_V3_PUBLIC_EXPLAIN'	=> 'Your site reCAPTCHA key. Keys can be obtained on <a href="https://www.google.com/recaptcha">www.google.com/recaptcha</a>. Please, use reCAPTCHA v3.',
	'RECAPTCHA_PRIVATE'				=> '비공개 reCAPTCHA 키',
	'RECAPTCHA_PRIVATE_EXPLAIN'		=> '비공개 reCAPTCHA 키. 키는 <a href="http://www.google.com/recaptcha"> www.google.com/recaptcha </a>에서 얻을 수 있습니다.',
	'RECAPTCHA_V3_PRIVATE_EXPLAIN'	=> 'Your secret reCAPTCHA key. Keys can be obtained on <a href="https://www.google.com/recaptcha">www.google.com/recaptcha</a>. Please, use reCAPTCHA v3.',

	'RECAPTCHA_V3_DOMAIN'				=> 'Request domain',
	'RECAPTCHA_V3_DOMAIN_EXPLAIN'		=> 'The domain to fetch the script from and to use when verifying the request.<br>Use <samp>recaptcha.net</samp> when <samp>google.com</samp> is not accessible.',

	'RECAPTCHA_V3_METHOD'				=> 'Request method',
	'RECAPTCHA_V3_METHOD_EXPLAIN'		=> 'The method to use when verifying the request.<br>Disabled options are not available within your setup.',
	'RECAPTCHA_V3_METHOD_CURL'			=> 'cURL',
	'RECAPTCHA_V3_METHOD_POST'			=> 'POST',
	'RECAPTCHA_V3_METHOD_SOCKET'		=> 'Socket',

	'RECAPTCHA_V3_THRESHOLD_DEFAULT'			=> 'Default threshold',
	'RECAPTCHA_V3_THRESHOLD_DEFAULT_EXPLAIN'	=> 'Used when none of the other actions are applicable.',
	'RECAPTCHA_V3_THRESHOLD_LOGIN'				=> 'Login threshold',
	'RECAPTCHA_V3_THRESHOLD_POST'				=> 'Post threshold',
	'RECAPTCHA_V3_THRESHOLD_REGISTER'			=> 'Register threshold',
	'RECAPTCHA_V3_THRESHOLD_REPORT'				=> 'Report threshold',
	'RECAPTCHA_V3_THRESHOLDS'					=> 'Thresholds',
	'RECAPTCHA_V3_THRESHOLDS_EXPLAIN'			=> 'reCAPTCHA v3 returns a score (<samp>1.0</samp> is very likely a good interaction, <samp>0.0</samp> is very likely a bot). Here you can set the minimum score per action.',
));
