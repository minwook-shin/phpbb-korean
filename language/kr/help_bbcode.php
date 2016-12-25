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
*/
if (!defined('IN_PHPBB'))
{
	exit;
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

$help = array(
	array(
		0 => '--',
		1 => 'Introduction'
	),
	array(
		0 => 'BBCode 가 뭐죠?',
		1 => 'BBCode 는 HTML 을 이용하기 위한 특별한 형태로 자신이 글을 올릴 때 BBCode 를 사용할 수 있는지는 운영자의 결정에 달려있습니다. 추가로 당신은 글쓰기 틀에서 각 글별로 BBCode 를 사용하지 않도록 할 수도 있습니다. BBCode 는 그 형태가 HTML 과 비슷합니다. 태그는 &lt; 와 &gt; 대신 대괄호 [ 과 ] 으로 감싸고, 무엇을 어떻게 표시할지 훌륭하게 조절할 수 있습니다. 템플릿에 따라 글 쓰기 틀에서 본문 영역 위에 있는 clickable interface 로 자신의 글에 BBCode 를 추가하는 것이 매우 쉽다는 것을 알 수 있습니다. 더불어 유용한 설명서를 찾을 수 있습니다.'
	),
	array(
		0 => '--',
		1 => '글 포맷'
	),
	array(
		0 => '볼드체, 이탤릭체, 밑줄체는 어떻게 만들죠?',
		1 => 'BBCode 는 기본 형태의 글을 빠르게 바꿀 수 있는 태그를 포함하고 있습니다. 이것을 이용하는 방법은: <ul><li>글을 볼드체로 바꾸려면 그 글을<strong>[b][/b]</strong> 로 감싸면 됩니다. 예를 들어 <br /><br /><strong>[b]</strong>Hello<strong>[/b]</strong> 라고 쓰면 <br /><br /><strong>Hello</strong>로 보입니다.</li><li>밑줄체는 <strong>[u][/u]</strong>, 예를 들어 <br /><br /><strong>[u]</strong>Good Morning<strong>[/u]</strong> 이라고 쓰면 <br /><br /><span style="text-decoration: underline">Good Morning</span> 으로 보입니다.</li><li>이탤릭체는 <strong>[i][/i]</strong>, 예를 들어 <br /><br />This is <strong>[i]</strong>Great!<strong>[/i]</strong> 이라 쓰면 <br /><br />This is <i>Great!</i> 으로 보입니다.</li></ul>'
	),
	array(
		0 => '글 크기나 색상은 어떻게 바꾸죠?',
		1 => '글 색상이나 크기를 바꾸려면 다음 태그를 사용하세요. 최종 결과물은 보는이의 브라우저와 시스템에 따라 다를 수 있습니다. <ul><li>글 색상을 바꾸려면 그 글을 <strong>[color=][/color]</strong> 로 감싸면 됩니다. 지정된 색상 이름(red, blue, yellow 등)을 쓰거나 색상의 16진수 코드값(#FFFFFF, #000000 등)을 쓸 수도 있습니다. 예를 들어 빨간글을 만들려면 <br /><br /><strong>[color=red]</strong>Hello!<strong>[/color]</strong> 라고 쓰거나 <br /><br /><strong>[color=#FF0000]</strong>Hello!<strong>[/color]</strong> 라고 쓰면 됩니다. 그러면<br /><br /><span style="color:red">Hello!</span> 로 보입니다.</li><li>글 크기를 바꾸려면 그 글을 <strong>[size=][/size]</strong> 로 감싸면 됩니다. 이 태그는 사용하는 템플릿에 따라 다르지만 권장 형식은 글 크기를 20(아주 작음) 부터 200(매우 큼) 까지 퍼센트 단위 숫자로 쓰는 것입니다. 예를 들어 <br /><br /><strong>[size=30]</strong>SMALL<strong>[/size]</strong> 이라고 쓰면 <br /><br /><span style="font-size:30%;">SMALL</span> 로 보이고, <br /><br /><strong>[size=200]</strong>HUGE!<strong>[/size]</strong> 라고 쓰면 <br /><br /><span style="font-size:200%;">HUGE!</span> 로 보입니다.</li></ul>'
	),
	array(
		0 => '포맷 태그를 조합할 수 있나요?',
		1 => '물론 할 수 있습니다. 예를 들어 누군가의 주의를 끌려면 <br /><br /><strong>[size=150][color=red][b]</strong>LOOK AT ME!<strong>[/b][/color][/size]</strong> 라고 입력하면 됩니다. 그러면<br /><br /><span style="color:red;font-size:150%;"><strong>LOOK AT ME!</strong></span> 로 보입니다.<br /><br />하지만 이런 글을 많이 쓰는 것을 권하지는 않습니다.<br /><br />태그를 올바르게 닫는 것은 글을 올리는 자신에게 달려있습니다. 예를 들어 <strong>[b][u]</strong>This is wrong<strong>[/b][/u]</strong> 이것은 올바르지 않습니다.'
	),
	array(
		0 => '--',
		1 => '인용 및 고정폭 글'
	),
	array(
		0 => '인용해 댓글 달기',
		1 => '글을 인용하는 데는 참조가 있는 것과 없는 것, 두가지 방법이 있습니다.<ul><li>게시판에 있는 글에 댓글을 달기 위해 인용 기능을 사용할 때 원글이 <strong>[quote=&quot;&quot;][/quote]</strong> 로 감싸진 블럭으로 본문 창에 추가되는 것을 알아챌 수 있습니다. 이 방법으로 어떤 사람이나 그밖에 당신이 보여주고자 하는 것에 대한 참조가 있는 인용을 할 수 있습니다. 예를 들어 Mr. Blobby 가 쓴 글의 일부를 인용할 경우<br /><br /><strong>[quote=&quot;Mr. Blobby&quot;]</strong>Mr. Blobby 가 쓴 글<strong>[/quote]</strong> 이라고 입력하면 됩니다.<br /><br />그러면 &quot;Mr. Blobby 님의 글:&quot; 뒤에 자동으로 추가되며 실제 글 앞에 나옵니다. 인용하는 이름을 <strong>반드시</strong> 이중따옴표 &quot;&quot; 안에 넣어야 한다는 것을 잊지 마세요. 이것은 선택사항이 아닙니다.</li><li>두번째 방법은 참조가 없이 아무거나 인용합니다. 이 기능은 글을 <strong>[quote][/quote]</strong> 태그로 감싸면 됩니다. 글을 보면 단순히 인용: 뒤에 추가되며 실제 글 앞에 옵니다.'
	),
	array(
		0 => '코드 및 고정폭 데이터 출력',
		1 => '코드의 일부분 또는 고정폭 글꼴을 요구하는 어떤 것을 출력하려면 그 글을 <strong>[code][/code]</strong> 태그로 감싸면 됩니다. 예를 들면<br /><br /><strong>[code]</strong>echo &quot;This is some code&quot;;<strong>[/code]</strong> 와 같이...<br /><br /><strong>[code][/code]</strong> 태그 안의 모든 포맷이 유지되는 것을 볼 수 있습니다. PHP 코드의 경우 가독성을 높이기 위해 <strong>[code=php][/code]</strong> 를 이용 구문 강조를 할 수 있습니다.'
	),
	array(
		0 => '--',
		1 => '목록 만들기'
	),
	array(
		0 => '순서 없는 목록 만들기',
		1 => 'BBCode 는 순서가 있는 것과 없는 것, 두 유형의 목록을 지원합니다. 이것은 HTML 의 그것과 본질은 같습니다. 순서가 없는 목록에서 각 항목은 블릿으로 구분되어 순서대로 나타납니다. 순서 없는 목록을 만들려면 <strong>[list][/list]</strong> 를 사용하고, 목록의 각 항목은 <strong>[*]</strong> 를 이용해 표시합니다. 예를 들어 좋아하는 색상 목록을 만들려면<br /><br /><strong>[list]</strong><br /><strong>[*]</strong>Red<br /><strong>[*]</strong>Blue<br /><strong>[*]</strong>Yellow<br /><strong>[/list]</strong> 라고 쓰면<br /><br /><ul><li>Red</li><li>Blue</li><li>Yellow</li></ul> 로 보입니다.'
	),
	array(
		0 => '순서 있는 목록 만들기',
		1 => '두번째 유형인 순서 있는 목록은 각 항목 앞에 표기하는 것을 조절할 수 있습니다. <strong>[list=1][/list]</strong> 를 이용해 번호매김 목록을 만들거나, <strong>[list=a][/list]</strong> 를 이용해 알파벳 매김 목록을 만들 수 있습니다. 순서 없는 목록과 마찬가지로 각 항목은 <strong>[*]</strong> 를 이용해 표시합니다. 예를 들어<br /><br /><strong>[list=1]</strong><br /><strong>[*]</strong>Go to the shops<br /><strong>[*]</strong>Buy a new computer<br /><strong>[*]</strong>Swear at computer when it crashes<br /><strong>[/list]</strong> 이라고 쓰면<br /><br /><ol style="list-style-type: arabic-numbers"><li>Go to the shops</li><li>Buy a new computer</li><li>Swear at computer when it crashes</li></ol> 으로 보입니다. 알파벳 매김 목록의 경우<br /><br /><strong>[list=a]</strong><br /><strong>[*]</strong>The first possible answer<br /><strong>[*]</strong>The second possible answer<br /><strong>[*]</strong>The third possible answer<br /><strong>[/list]</strong> 라고 쓰면<br /><br /><ol style="list-style-type: lower-alpha"><li>The first possible answer</li><li>The second possible answer</li><li>The third possible answer</li></ol> 이라고 보입니다.'
	),
	array(
		0 => '--',
		1 => '링크 만들기'
	),
	array(
		0 => '다른 사이트 링크하기',
		1 => 'phpBB 의 BBCode 는 URIs(Uniform Resource Indicators, url) 을 만드는 것을 지원합니다.<ul><li>첫번째 방법은 <strong>[url=][/url]</strong> 태그를 이용하는 것으로 태그 안에서 = 다음에 오는 문자는 모두 url 로 처리합니다. 예를 들어 phpBB Korea 에 링크를 할 때<br /><br /><strong>[url=http://phpbbkorea.com/]</strong>Visit phpBB Korea!<strong>[/url]</strong>라고 쓰면<br /><br /><a href="http://phpbbkorea.com/">Visit phpBB Korea!</a> 로 보입니다. 링크는 유저 브라우저 설정에 따라 새창에서 열리거나 같은창으로 열릴 수 있습니다.</li><li>url 자체가 보이도록 하고 싶다면 간단하게<br /><br /><strong>[url]</strong>http://phpbbkorea.com/<strong>[/url]</strong> 이라고 쓰면<br /><br /><a href="http://phpbbkorea.com/">http://phpbbkorea.com/</a> 으로 보입니다.</li><li>부가적인 phpBB 기능 중에 태그나 http:// 등을 지정하지 않아도 올바른 형식의 url 링크를 만들어주는 <i>Magic Links</i> 라고 부르는 것이 있습니다. 예를 들어 www.phpbbkorea.com 이라 쓰면 자동으로 <a href="http://www.phpbbkorea.com/" target="_blank">www.phpbbkorea.com</a> 으로 처리됩니다.</li><li>같은 기능이 e-메일 주소에도 적용되는데 다음의 두 경우처럼 주소를 지정할 수 있습니다.<br /><br /><strong>[email]</strong>no.one@domain.adr<strong>[/email]</strong> 이라고 쓰면 <a href="emailto:no.one@domain.adr">no.one@domain.adr</a> 로 보이고,<br /><br />그냥 no.one@domain.adr 이라고 써도 자동으로 바뀝니다.</li></ul><strong>[img][/img]</strong>(다음을 보세요.), <strong>[b][/b]</strong> 등 다른 모든 BBCode 태그로도 url 을 감쌀 수 있습니다. 포맷 태그와 마찬가지로 태그를 올바르게 닫는 것은 글을 올리는 자신에게 달려있습니다. 예를 들어 <strong>[url=http://www.google.com/][img]</strong>http://www.google.com/intl/en_ALL/images/logo.gif<strong>[/url][/img]</strong> 이것은 올바르지 <span style="text-decoration: underline">않습니다.</span> 그렇기에 당신의 글은 지워질 수도 있습니다.'
	),
	array(
		0 => '--',
		1 => '글에서 이미지 보이기'
	),
	array(
		0 => '글에 이미지 넣기',
		1 => 'phpBB 의 BBCode 는 글에 이미지를 넣기 위한 태그를 가지고 있습니다. 이 태그를 이용할 때 알아두어야 할 두가지 중요한 것이 있는데 글에 이미지가 많은 것을 여러 사람이 좋아하지 않고, 출력할 이미지는 인터넷 상에서 이용가능 해야 한다는 것입니다. (웹서버를 돌리지 않는다면 자신의 컴퓨터에 있는 것은 이용할 수 없습니다.) 이미지를 출력하려면 이미지의 url 을 <strong>[img][/img]</strong> 태그로 감싸면 됩니다.<br /><br /><strong>[img]</strong>http://www.google.com/intl/en_ALL/images/logo.gif<strong>[/img]</strong> 와 같이...<br /><br />url 에서 얘기 했듯이 이미지를 <strong>[url][/url]</strong> 태그로 감싸도 됩니다. 예를 들어<br /><br /><strong>[url=http://www.google.com/][img]</strong>http://www.google.com/intl/en_ALL/images/logo.gif<strong>[/img][/url]</strong> 라고 쓰면<br /><br /><a href="http://www.google.com/"><img src="http://www.google.com/intl/en_ALL/images/logo.gif" alt="" /></a> 로 보입니다.'
	),
	array(
		0 => '글에 첨부파일 넣기',
		1 => '운영자가 파일첨부 기능을 사용할 수 있도록 하고, 당신에게 파일을 첨부할 수 있는 적절한 권한을 줬다면 새로 추가된 <strong>[attachment=][/attachment]</strong> BBCode 를 사용해 첨부파일을 글의 어느 부분에라도 넣을 수 있습니다. Within the posting screen is a drop-down box (respectively a button) for placing attachments inline.'
	),
	array(
		0 => '--',
		1 => '다른 내용'
	),
	array(
		0 => '내가 원하는 태그를 추가할 수 있나요?',
		1 => '이 게시판의 운영자로 적정한 권한이 있다면 Custom BBCodes 를 통해 BBCode 를 추가할 수 있습니다.'
	)
);
