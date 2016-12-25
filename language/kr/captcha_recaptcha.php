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
'RECAPTCHA_LANG'=> 'kr',
'RECAPTCHA_NOT_AVAILABLE'=> 'reCAPTCHA를 사용하려면 <a href="http://www.google.com/recaptcha"> www.google.com/recaptcha </a>에서 계정을 만들어야합니다.',
'CAPTCHA_RECAPTCHA'=> 'reCAPTCHA',
'RECAPTCHA_INCORRECT'=> '제출한 시각적 확인 코드가 틀립니다',

'RECAPTCHA_PUBLIC'=> '공개 reCAPTCHA 키',
'RECAPTCHA_PUBLIC_EXPLAIN'=> '공개 reCAPTCHA 키. 키는 <a href="http://www.google.com/recaptcha">www.google.com/recaptcha</a>에서 얻을 수 있습니다. ',
'RECAPTCHA_PRIVATE'=> '비공개 reCAPTCHA 키',
'RECAPTCHA_PRIVATE_EXPLAIN'=> '비공개 reCAPTCHA 키. 키는 <a href="http://www.google.com/recaptcha">www.google.com/recaptcha</a>에서 얻을 수 있습니다. ',

'RECAPTCHA_EXPLAIN'=> '자동 제출을 막기 위해 아래 필드에 표시된 텍스트를 입력해야합니다.',
'RECAPTCHA_SOCKET_ERROR'=> 'reCAPTCHA 서비스에 연결하는 중에 문제가 발생했습니다 : 소켓을 열 수 없습니다. 나중에 다시 시도하십시오. ',
));