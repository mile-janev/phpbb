<?php
/**
*
* acp_search [Macedonian]
*
* @package language
* @version $Id$
* @copyright (c) 2005 phpBB Group
* @license http://opensource.org/licenses/gpl-license.php GNU Public License
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
	'ACP_SEARCH_INDEX_EXPLAIN'				=> 'Овде може да управувате со индексите за позадинско пребарување. Бидејќи во иднина ќе користите само една позадина треба да ги избришете сите индекси за кои не сте подесиле да се користат. После менувањето на опциите за пребарување (пр: број на минимум/максимум карактери) може да вреди оживување на индексот за да одразат овие промени.',
	'ACP_SEARCH_SETTINGS_EXPLAIN'			=> 'Овде може да дефинирате кое позадинско пребарување ќе биде користено за индексирање на мислењата и изведување на пребарувањето. Може да подесите различни опции кои што можат да имаат влијание на количината на обработени податоци за ова пребарување. Некои од овие опции се исти за сите позадински пребарувања.',

	'COMMON_WORD_THRESHOLD'					=> 'Општи вообичаени зборови',
	'COMMON_WORD_THRESHOLD_EXPLAIN'			=> 'Зборовите кои ги има во голем процент во сите мислења ќе се сметаат за општи. Општите зборови се игнорирани во пребарувачите. Наместете на 0 за оневозможување. Има ефект само ако има над 100 постови. Доколку сакате зборовите кои моментално се сметаат за општи бидат повторно разгледани мора да го преправите индексот.',
	'CONFIRM_SEARCH_BACKEND'				=> 'Сигурно ли сакате да се преусмерите кон различно позадинско пребарување? По сменувањето на позадинското пребарување ќе треба да креирате индекс за новиот позадински пребарувач. Ако не планирате да го преусмерите кон старото позадинско пребарување може да го избришете за да ослободите место на серверот.',
	'CONTINUE_DELETING_INDEX'				=> 'Продолжи со одстранувачкиот процес на претходниот индекс',
	'CONTINUE_DELETING_INDEX_EXPLAIN'		=> 'Одстранувачкиот процес е стартуван. Со задача да пристапите на пребарувачкиот индекс треба да го комплетирате или одкажете.',
	'CONTINUE_INDEXING'						=> 'Продолжи со претходниот процес на индексирање',
	'CONTINUE_INDEXING_EXPLAIN'				=> 'Индексирачкиот процес беше стартуван. Со задача да пристапите на пребарувачкиот индекс треба да го комплетирате или одкажете.',
	'CREATE_INDEX'							=> 'Креирај индекс',

	'DELETE_INDEX'							=> 'Избриши индекс',
	'DELETING_INDEX_IN_PROGRESS'			=> 'Бришење на индексот е во процес',
	'DELETING_INDEX_IN_PROGRESS_EXPLAIN'	=> 'Позадинскиот пребарувач моментално го чисти својот индекс. Ова може да потраее неколку минути.',

	'FULLTEXT_MYSQL_INCOMPATIBLE_VERSION'	=> 'MySQL целосен позадински текст може да биде користен само со MySQL4 и погоре.',
	'FULLTEXT_MYSQL_NOT_MYISAM'				=> 'MySQL целосен позадински текст може да биде користен само со MyISAM тебелите.',
	'FULLTEXT_MYSQL_TOTAL_POSTS'			=> 'Вкупен број на индексирани мислења',
	'FULLTEXT_MYSQL_MBSTRING'				=> 'Подршка за Не-Латински UTF-8 карактери користејќи mbstring:',
	'FULLTEXT_MYSQL_PCRE'					=> 'Подршка за Не-Латински UTF-8 карактери користејќи PCRE:',
	'FULLTEXT_MYSQL_MBSTRING_EXPLAIN'		=> 'Ако PCRE нема пропорции за универзален код карактери, позадинското пребарување ќе проба да го користи mbstring’s регуларниот пребарувачки мотор.',
	'FULLTEXT_MYSQL_PCRE_EXPLAIN'			=> 'Ова позадинско пребарување бара PCRE пропорции на универзален код карактери, достапни само во PHP 4.4, 5.1 и погоре, Ако сакате да пребарувате за Не-Латински карактери.',
	'FULLTEXT_MYSQL_MIN_SEARCH_CHARS_EXPLAIN'	=> 'Зборови со најмалку овие карактери ќе бидат индексирани за пребарување. Вие или вашиот сервер единствено може да ја смените оваа опција со сменување на mysql конфигурацијата.',
	'FULLTEXT_MYSQL_MAX_SEARCH_CHARS_EXPLAIN'	=> 'Зборови со најмногу овие карактери ќе биде индексирани за пребарување. Вие или вашиот сервер единствено може да ја смените оваа опција со сменување на mysql конфигурацијата.',

	'GENERAL_SEARCH_SETTINGS'				=> 'Главни подесувања за пребарување',
	'GO_TO_SEARCH_INDEX'					=> 'Оди до пребарувачката индекс страна',

	'INDEX_STATS'							=> 'Статистики на индексот',
	'INDEXING_IN_PROGRESS'					=> 'Индексирањето е во тек',
	'INDEXING_IN_PROGRESS_EXPLAIN'			=> 'Позадинскиот пребарувач моментално ги индексира сите мислења на вашиот форум.Ова може да потрае неколку минути зависно од големината на вашиот форум.',

	'LIMIT_SEARCH_LOAD'						=> 'Ограничување за оптеретувања на системската страница за пребарување',
	'LIMIT_SEARCH_LOAD_EXPLAIN'				=> 'Ако просечното оптоварување на системот во време од 1 минута ја покачи оваа вредност форумот автоматски станува недостапен.Вредноста од 1.0 е еднаква ва ~100% искористеност на процесорот. Ова работи само на UNIX серверите.',

	'MAX_SEARCH_CHARS'						=> 'Максимум карактери индексирани во пребарувањето',
	'MAX_SEARCH_CHARS_EXPLAIN'				=> 'Зборови со волку карактери ќе бидат индексирани за пребарување.',
	'MAX_NUM_SEARCH_KEYWORDS'				=> 'Макимален број на дозволени клучни зборови.',
	'MAX_NUM_SEARCH_KEYWORDS_EXPLAIN'		=> 'Maximum number of words the user is able to search for. A value of 0 allows an unlimited number of words.',
	'MIN_SEARCH_CHARS'						=> 'Минимум карактери индексирани во пребарувањето',
	'MIN_SEARCH_CHARS_EXPLAIN'				=> 'Зборови со волку карактери ќе бидат индексирани за пребарување.',
	'MIN_SEARCH_AUTHOR_CHARS'				=> 'Најмалку карактери за авторот',
	'MIN_SEARCH_AUTHOR_CHARS_EXPLAIN'		=> 'Членови мора да внесат волку карактери кога ќе сакаат да направат пребарување од автори. Ако името на авторот е пократко од овој број пак можат да ги претражат сите постови од авторот внесувајќи го неговото комплетно членско име.',

	'PROGRESS_BAR'							=> 'Покажувач на процес',

	'SEARCH_GUEST_INTERVAL'					=> 'Интервал на време за пребарување од посетители',
	'SEARCH_GUEST_INTERVAL_EXPLAIN'			=> 'Број на секунди во кој посетителите мора да чекаат пред да направат ново пребарување. Ако еден посетител пребарува сите останати посетители мора да чекаат се додека не истече времето за чекање.',
	'SEARCH_INDEX_CREATE_REDIRECT'			=> 'Сите мислења нагоре до мислењето со број %1$d беа индексирани, од кои %2$d постови беа со овој чекор.<br />Моменталното индексирање е моментално %3$.1f мислења во секунда.<br />Indexing in progress…',
	'SEARCH_INDEX_DELETE_REDIRECT'			=> 'Сите мислења нагоре до мислењето со број %1$d беа одстранети од пребарувачкиот индекс.<br />Бришењето е во процес…',
	'SEARCH_INDEX_CREATED'					=> 'Успешно се индексирани сите мислења направени на форумот.',
	'SEARCH_INDEX_REMOVED'					=> 'Успешно е избришан пребарувачкиот индекс за овој позадински пребарувач.',
	'SEARCH_INTERVAL'						=> 'Време на чекање за пребарување од членови.',
	'SEARCH_INTERVAL_EXPLAIN'				=> 'Број во секунди во кој членовите мора да чекаат помеѓу пребарувањата. Овој интервал на чекање е независен за секој член поединечно.',
	'SEARCH_STORE_RESULTS'					=> 'Резултат од пребарување, должина на кешот.',
	'SEARCH_STORE_RESULTS_EXPLAIN'			=> 'Кешираните резултати од пребарувањето ќе исчезнат по истекувањето на ова време, во секунди. Наместете на 0ако сакате да го оневозможите кешот на пребарувањето.',
	'SEARCH_TYPE'							=> 'Позадинско пребарување',
	'SEARCH_TYPE_EXPLAIN'					=> 'phpBB ви дозволува да изберете позадинско пребарување кое ќе биде користено како пребарувачки текст  во пребарувањето низ мислењата. По основно пребарувањето ќе го користи phpBB свое пребарување на целосен текст.',
	'SWITCHED_SEARCH_BACKEND'				=> 'Го променивте поззадинското пребарување. Со задача да го користите новото позадинско пребарување осигурајте се дека има индекс за позадинско пребарување.',

	'TOTAL_WORDS'							=> 'Вкупен број на индексирани зборови',
	'TOTAL_MATCHES'							=> 'Вкупен број на индексирани зборови до релацијата на мислењето',

	'YES_SEARCH'							=> 'Овозможи преабурачки објекти',
	'YES_SEARCH_EXPLAIN'					=> 'Овозможува функционалност на пребарувањето на членот вклучувајќи и пребарување на членови.',
	'YES_SEARCH_UPDATE'						=> 'Овозможи апдејт на целосен текст',
	'YES_SEARCH_UPDATE_EXPLAIN'				=> 'Апдејтување на индексот за целосен текст кога се постира, ова се понишуа ако пребарувањето е оневозможено.',
));

?>