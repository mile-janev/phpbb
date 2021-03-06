<?php
/**
*
* help_bbcode [Macedonian]
*
* @package language
* @version $Id$
* @copyright (c) 2005 phpBB Group
* @license http://opensource.org/licenses/gpl-license.php GNU Public License
*
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
		1 => 'Вовед'
	),
	array(
		0 => 'Што е BBCode-от?',
		1 => 'BBCode-от е особена имплементација на HTML. Дали можете да го користите одлучува администраторот. Освен тоа можете да го исклучите во формата кога праќате мислења. BBCode-от по себе е сличен со HTML-от, се користат тагови кои се затворени во квадратни загради. На пример [ ТАГ ] место  &lt; и &gt; и нуди поголема контрола на што и како се запишува. Овој водич може да ти биде корисен.'
	),
	array(
		0 => '--',
		1 => 'Форматирање на текст'
	),
	array(
		0 => 'Како да направам здебелен, кос и подвлечен текст?',
		1 => 'BBCode-от содржи тагови кои ти овозможуваат брзо менување на основниот стил на текстот кој го пишуваш. Ова можеш да го направиш на неколку начини. <ul><li>За да создадеш здебелен текст користете <strong>[b][/b]</strong>. На пример <br /><br /><strong>[b]</strong>Здраво<strong>[/b]</strong><br /><br />и тогаш тоа ќе стане вакво <strong>Здраво<.strong></li><li>За да создадеш подвлечен текст користете <strong>[u][/u]</strong>. На пример<br /><br /><strong>[u]</strong>Добро утро<strong>[/u]</strong><br /><br />becomes <u>Добро утро</u></li><li>За да создадете кос текст користете <strong>[i][/i]</strong>На пример ако напишете<br /><br />Ова е <strong>[i]</strong>Супер!<strong>[/i]</strong><br /><br /> ќе стане Ова е <i>Супер!</i></li></ul>'
	),
	array(
		0 => 'Како да ја сменам бојата и големината на текстот?',
		1 => 'За да ја промените бојата или големината на текстот можете да ги користите овие тагови.Имајте предвид дека бојата и големината зависат од пребарувачите кои членовите ги користат а и од нивниот оперативен систем .<ul><li>За да ја смените бојата на текстот користете <b>[color=][/color]</b>. Можете да напишете и некоја препознатлива боја (на англиски) (На пример red, blue, yellow, etc.) или алтернативниот хексадецимален триплет. На пример #FFFFFF, #000000. За да креирате црвен текст на пример треба да го направите ова:<br /><br /><b>[color=red]</b>Здраво!<b>[/color]</b><br /><br />или<br /><br /><b>[color=#FF0000]</b>Здраво<b>[/color]</b><br /><br />И двете опции ќе покажат <span style=\"color:red\">Здраво!</span></li><li>Промената на големината на текстот се прави на ист начин си користење на <b>[size=][/size]</b>. Овој таг зависи од темата која ја корисиш така да најдобро е да користиш пикселна бројна вредност почнувајќи 1 (толку мали што воопшто не се ни гледаат) до 29 (многу големи). Пример: <br /><br /><b>[size=9]</b>Велгошти<b>[/size]</b><br /><br /> ќе покажува како <span style=\"font-size:9px\">Велгошти</span><br /><br />а пак <br /><br /><b>[size=24]</b>Велгошти<b>[/size]</b><br /><br />ќе изгледа вака <span style=\"font-size:24px\">Велгошти!</span></li></ul>. Или селектирајте го текстот и одберете одредената опција на пр. ако селектирате теккст со глувчето стиснете на бојата од десната страна во испрачање ново мислење'
	),
	array(
		0 => '"Може ли да комбинирам тагови за форматирање?',
		1 => 'Да, се разбира дека може. На пример, за да привлечете внимание на некој , можете да напишете:<br /><br /><b>[size=18][color=red][b]</b>ПОГЛЕДНИ МЕ!<b>[/b][/color][/size]</b><br /><br />кое би се покажало како <span style=\"color:red;font-size:18px\"><b>ПОГЛЕДНИ МЕ!</b></span><br /><br />Въпреки това, не препоръчваме прекомерната употреба на форматиращите тагове. Запомнете, вие трябва да се уверите дали таговете са затворени правилно, не форума. Например, следния ред е неправилен:<br /><br /><b>[b][u]</b>Тоа е грешно!<b>[/b][/u]</b>'
	),
	array(
		0 => '--',
		1 => 'Цитирање'
	),
	array(
		0 => 'Цитирање на текст во одговори',
		1 => 'Постојат два начини на кои што можете да цитирате текстр.<ul><li>.Кога цитирате некое мислење на форумот ќе забележиш дека она што сакате да го цитирате е заградено со тагови.Од типот на <b>[quote=\"\"][/quote]</b>. На пример ако сакате да ја цитирате Стојна треба да напишете:<br /><br /><b>[quote=\"Стојна\"]</b>Овде ставете го текстот кој што го е напишала Стојна<b>[/quote]</b><br /><br />Ова автоматски ќе напише: <b>Стојна напиша:</b>.Запамети дека <b>мора</b> да користиш \"\" околу името што сакаш да го цитираш.(вака: \"Стојна\")!</li><li>.Вториот начин ви дозволува да цитирате без да го нагласите авторот.Едноставно поставете го текстот меѓу овие тагови  <b>[quote][/quote]</b>. Кога ќе го видиш она што си го напишал тоа едноствно ќе покажува Цитат: пред самиот текст. <b>Цитат:</b>.</li></ul>, а најлесно е да стиснте на Цитирај копчето'
	),
	array(
		0 => 'Ставање на код или текст со одредена ширина?',
		1 => 'Ако сакате да напишете текст кој има потреба од одредена ширина пример Courier type фонтот тогаш затворете го вашиот текст во таговите  <b>[code][/code]</b>, на пример <br /><br /><b>[code]</b>echo \"Ова е код\";<b>[/code]</b><br /><br />.Форматирањето кое сте го користеле во таговите <b>[code][/code]</b> се чуваат за подоцнежно користење.'
	),
	array(
		0 => '--',
		1 => 'Креирање на списоци'
	),
	array(
		0 => 'Креирање на неподредени списоци?',
		1 => 'BBCode-от подржува два типа на списоци подредени и не подредени. Основно се исти како нивните HTML еквиваленти. Неподредениот список го покажува секое нешто во листа ставајќи ги на почеток или става точка. За да креирате неподреден список треба да користите <b>[list][/list]</b> и да го дефинирате секое нешто во листата со користење на <b>[*]</b>. На пример ако сакате да ги ги ставите во список вашите омилени бои треба да кориситш<br /><br /><b>[list]</b><br /><b>[*]</b>Црвена<br /><b>[*]</b>Плава<br /><b>[*]</b>Жолта<br /><b>[/list]</b><br /><br />Ова ќе резултира вака:<ul><li>Црвена</li><li>Плава</li><li>Жолта</li></ul>'
	),
	array(
		0 => 'Креирање на подредени списоци?',
		1 => 'Вториот тип список е подредениот. Тој ви дава контрола што да стои пред секое воведено нешто. За да создадете подредена листа треба да користите <b>[list=1][/list]</b> да креирате список под бројки или пак <b>[list=a][/list]</b> за листа по азбучен ред. Како што е случајот со неподредената листа редовите мора да се дефинираат со <b>[*]</b>. На пример:<br /><br /><b>[list=1]</b><br /><b>[*]</b>Оди во продавница<br /><b>[*]</b>Купи нов компјутер<br /><b>[*]</b>Испцувај го компјутерот кога ќе блокира<br /><b>[/list]</b><br /><br />ќе резултира соодветно<ol type=\"1\"><li>Оди во продавница</li><li>Купи нов компјутер</li><li>Испцувај го компјутерот кога ќе блокира</li></ol>За да креирате список по азбучен ред напишете го ова<br /><br /><b>[list=a]</b><br /><b>[*]</b>Првиот возможен одговор<br /><b>[*]</b>Вториот возможен одговор<br /><b>[*]</b>Третиот возможен одговор<br /><b>[/list]</b><br /><br />и ќе даде <ol type=\"a\"><li>Првиот возможен одговор</li><li>Вториот возможен одговор</li><li>Третиот возможен одговор</li></ol>'
	),
	// This block will switch the FAQ-Questions to the second template column
	array(
		0 => '--',
		1 => '--'
	),
	array(
		0 => '--',
		1 => 'Креирање на врски'
	),
	array(
		0 => 'Врска со друг сајт',
		1 => 'phpBB BBCode-от подржува неколку начини на креирања на врски (URL-ови) <ul><li>Првиот од овие е тагот <b>[url=][/url]</b>. Ако пишувате после знакот = ќе резултира со формирање на врска. На пример за врска до velgosti.com треба да напишете:<br /><br /><strong>[url=http://www.velgosti.com/]</strong>Посетете го Велгошти!<strong>[/url]</strong><br /><br />.Ова ќе генерира, <a href="http://www.velgosti.com/" target="_blank">Посетете го Велгошти!</a>Ќе забележиш дека врската отвора нов прозорец па така корисниците ќе продолжат со гледањето на форумот.</li><li>Ако сакте врската да се гледа можете да го направите ова::<br /><br /><strong>[url]</strong>http://www.velgosti.com/<strong>[/url]</strong><br /><br />Ова ќе ја генереира оваа врска , <a href="http://www.velgosti.com/" target="_blank">http://www.velgosti.com/</a></li><li>.PhpBB има црти кои се нарекуваат <i>Магични врски</i>, кои ќе го претворат секоја точна врска во линк без да има потреба да внесувате тагови па дури и почетното http://. На пример ако напишете www.velgosti.com автоматски ќе се престори во  <a href="http://www.velgosti.com/" target="_blank">www.velgosti.com</a> being output when you view the message.</li><li>The same thing applies equally to email addresses, you can either specify an address explicitly for example:<br /><br /><strong>[email]</strong>no.one@domain.adr<strong>[/email]</strong><br /><br />which will output <a href="mailto:no.one@domain.adr">no.one@domain.adr</a> or you can just type no.one@domain.adr into your message and it will be automatically converted when you view.</li></ul>As with all the BBCode tags you can wrap URLs around any of the other tags such as <strong>[img][/img]</strong> (see next entry), <strong>[b][/b]</strong>, etc. As with the formatting tags it is up to you to ensure the correct open and close order is following, for example:<br /><br /><strong>[url=http://www.google.com/][img]</strong>http://www.google.com/intl/en_ALL/images/logo.gif<strong>[/url][/img]</strong><br /><br />is <u>not</u> correct which may lead to your post being deleted so take care.'
	),
	array(
		0 => '--',
		1 => 'Присуство на слики во пораките'
	),
	array(
		0 => 'Додавање на слика во порака',
		1 => 'phpBB BBCode вклучува таг за присуство на слики во пораки. Две особено важни нешта кои треба да ги знаете кога ги кориситите овие тагови се; многу членови не сакаат да гледаат слики, и второ сликата мора да се наоѓа негде на Интернет (не можете да ја линкувате со слика од вашиот компјутер освен ако тој не е веб сервер) Нема начин како да ја зачувате сликата на серверот од каде работи phpBB (сите овие работи ќе можете да ги користите во наредното издание). Едноставно локацијата на сликата затворете ја со овие тагови <b>[img][/img]</b>. На пример:<br /><br /><strong>[url=http://www.google.com/][img]</strong>http://www.google.com/intl/en_ALL/images/logo.gif<strong>[/url][/img]</strong><br /><br />is <u>not</u> correct which may lead to your post being deleted so take care'
	),
	array(
		0 => 'Додавање на атачменти во мислењето',
		1 => 'Додавање на атачменти во темите може да биде поставен било каде во темата со помош на новиот код <strong>[attachment=][/attachment]</strong> .Ако е дозволено од страна на Администраторот'
	),
	array(
		0 => '--',
		1 => 'Други прашања'
	),
	array(
		0 => 'Како да додадам свои тагови?',
		1 => 'Ако сте администратор на овој форум може да додавате сопствени тагови.'
	)
);

?>