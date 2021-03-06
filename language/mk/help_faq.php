<?php
/**
*
* help_faq [Macedonian]
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
		1 => 'Прашања во врска со Најава и регистрација'
	),
	array(
		0 => 'Зошто не можам да се најавам?',
		1 => 'Се регистриравте ли? Мора да се регистрирате за да се најавите. Да не сте банирани од форумов? (Ако сте треба да ви се појави соодветна порака) Ако сте се регистрирале (а не сте банирани) а сеуште не може да се логирате проверете дали сте ги внесиле точно членско име и лозинка. Најчесто тоа е проблемот. Во случај да е се точно тогаш контактирајте го администраторот и ќе се обидат да го отстранат проблемот.'
	),
	array(
		0 => 'Зошто воопшто морам да се регистрирам?',
		1 => 'Не морате. Администраторот одлучува дали мора да сте регистрирани за да праќате пораки. Меѓутоа со регистрацијата ќе добиеш пристап до други бенефиции кои не можат да ги користат гостите. Тоа се на пример аватар слики, лични пораки, испраќање на е-маил до други корисници, ставање на слики, членство во групи на форумов и.т.н. Регистрацијата трае само неколку секунди и се препорачливо да се регистрирате.'
	),
	array(
		0 => 'Зошто се одјавувам автоматски?',
		1 => 'Ако не сте го чекирале копчето <em>Автоматско логирање</em> тогаш сте логирани само на кратко после престанувањето на вашата активност во форумов. Ова го спречува користењето на твоето членство од некој друг корисник. За да останете логирани и после престанувањето на активноста на форумот тогаш чекирајте го копчето Автоматско логирање. Ова не е препорачливо особено ако го гледате форумот од места како библиотека, интернет кафе, универзитетска или школска мрежа и.т.н.'
	),
	array(
		0 => 'Како да спречам моето членско име да не се гледа кога сум присутен?',
		1 => 'Во твојот Членски панел ќе најдете опција <em>Сокри го моето присуство за оваа секција</em>. Ако ја <еm>вклучите</еm> оваа опција вашиот online статус ќе можат да го видат само администратор и вие. Ќе се смета дека сте скриен член.'
	),
	array(
		0 => 'Си јазаборавив Лозинката!',
		1 => 'Не паничете! Вашата стара лозинка не може да ви биде вратена но за тоа ќе добиете нова. За да добиете нова отидете на страната за логирање и кликнете на <em>Си ја заборавив лозинката</em>, следете ги инструкциите и ќе бидете пак логирани за кратко време.'
	),
	array(
		0 => 'Се регистрирав но не можам да се најавам!',
		1 => 'Прво проверете дали ги внесувате правилната лозинка и членско име. Ако се е во ред тогаш можно е: COPPA подршката да е вклучена ако кликнавте <em>сум на воздраст под 13 години</em> додека се регистриравте. Во овој случај следете ги инструкциите кои ги добивте по е-маил. Другата можност се однесува на активацијата на твоето членство. Некои форуми бараат потврдување за регистрација или од твоја страна или од страна на администраторот. Кога сте се регистрирале соодветно сте били информирани. Ако сте примиле е-маил тогаш следете ги инструкциите, но дали сте сигурни дека вашата е-маил адреса е валидна? Причината зошто треба да се активирана вашето членство е да се спречат т.н. членови <em>измамници</em> да го злоупотребуваат форумов. Ако сте сигурни дека вашата е-маил адреса е валидна контактирајте го администраторот.'
	),
	array(
		0 => 'Се регистрирав пред некое време, но не можам да се најавам?!',
		1 => 'Најчестите причини за ова се; сте напишале неточно членско име или лозинка (проверете си ја е-маил адресата која сте си ја напишале) или пак администраторот го избришал вашето членство поради некоја причина. Нај реткиот случај за не можност за регистрација е вашата неактивност во форумов. Често се случува администраторот да избрише некое членство за да ја намали големината на неговата база. Обидете се да се регистрирате повторно и учествувајте во дискусијата на форумите.'
	),
	array(
		0 => 'Што е  COPPA?',
		1 => ' COPPA, или  „Child Online Privacy and Protection Act“  или на Македонски  „Акт за заштита на Деца на интернет” во 1998 е усвоен закон во САД што бара од веб страните да собираат информации за малолетници под 13 годишна возраст да имаат писмено одобрение од родителите или некој легален стаител да става лични информации. ',
	),
	array(
		0 => 'Зошто неможам да се регистрирам?',
		1 => 'Сигурни ли се дека ставате добри информации? Каде што има * мора да биде пополнато ,и кодот за верификација на сликата мора да биде <u>точен</u> како што е на сликата со ГолеМи и МаЛи латинични букви ,а не на Македонски.Осигурајте се дека не сте банирани',
	),
	array(
		0 => 'Што значи “Бриши ги сите cookies“?',
		1 => 'Бриши ги сите cookies ги брише сите cookies (колачиња) создадени од страна на phpBB3 што ве држи логирани на страната, исто така дозволува пратење на функциите снаместени осд страна на администраторот.',
	),
	array(
		0 => '--',
		1 => 'Членски преференции и опции'
	),
	array(
		0 => 'Како да си ги променам моите опции?',
		1 => 'Вашите опции (ако сте се регистрирале) се чуваат во нашата база. За да ги промените кликнете на <ем>Членски Профил</ем> (најчесто се наоѓа на горниот дел од страната). Ова ќе ви овозможи да си ги промените опциите.'
	),
	array(
		0 => 'Времето не е точно!',
		1 => 'Времето е точно, но времето кое го гледате е она во друга временска зона. Во овој случај, одберете во Профил преку Члемски панел и сменете ја временската зона да одговара на времето кај вас. Запомнете дека за да ја промените временската зона морате да сте регистрирате. Ако не сте се регистриале тогаш сега е време да го направите!'
	),
	array(
		0 => 'Ја променив временската зона но времето уште е грешно!',
		1 => 'Ако сте сигурни дека сте ја подесиле вашата временска зона точно а времето е уште различно тогаш проблемот е во промената на времето во летно сметање на времето. Форумот е подржува автоматска промена на времето, па за време на летото времето ќе се разликува еден час од вашето реално време.'
	),
	array(
		0 => 'Мојот роден јазик го нема во списокот!',
		1 => 'Најчестите причини за ова се: Администраторот не го инсталирал вашиот роден јазик или форумот се уште не е преведен на вашиот роден јазик. Прашајте  го администраторот дали може да инсталираат подршка за јазикот кој ве интересира. Ако не се во можност тогаш слободно можеш да преведиш на твојот роден јазик.'
	),
	array(
		0 => 'Како да се гледа слика под моето членско име?',
		1 => 'При разгледување на форумот под вашето членско име можат да стојат две слики. Првата слика е која го покажува вашиот ранк (ѕвезди кои покажуваа колку мислења сте дале и вашиот ранк). Под ова може да стои поголема слика која се вика аватар и е особена за секој корисник. Адмистраторот одлучува дали ќе ги вклучи аватарите. Ако не можете да користите аватари тогаш ова е желбата на администраторот и прашајте го зошто.'
	),
	array(
		0 => 'Како да го променам мојот ранк?',
		1 => 'Воглавно не можете вие да си го менувате ранкот (ранковите се наоѓаат под твоето членско име во мислењата и во твојот профил). Повеќето форуми користат ранкови за да го покажат бројот на мислењат кои сте ги испратиле и да се идентифицираат особените членови. На пример администраторот и модераторите имаат особен ранк. Молиме не го злоупотребувајте форумот со непотребни мислења за да си го зголемите ранкот. Ако администраторот и модераторите го забележат ова ќе го намалат вашиот ранк.'
	),
	array(
		0 => 'Кога кликнувам на врската со е-маил на некој член бара да се логирам?',
		1 => 'Само регистрираните членови можат да испраќаат е-маилови преку соодветните форми (Ако администраторот ја вклучил оваа опција). Ова е да се спречи злоупотребата на е-маилот од анонимни посетители на форумот..'
	),
	array(
		0 => '--',
		1 => 'Прашања во врска со Мислењата'
	),
	array(
		0 => 'Како да создадам тема во некој форум?',
		1 => 'Лесно е, кликнете на соодветното копче во форумот. Ќе морате да се регистрирате пред да испратите тема или мислење. Кои од овие работи можете да ги направите се напишано на дното на сите страници во форумот. На пример (<em>Можете да создавате нови теми, Може да гласате во анкети, и.т.н.</em>)'
	),
	array(
		0 => 'Како да променам или избришам мислење?',
		1 => 'Ако не сте администратор или модератор можете само да си променувате или бришете своите мислења. Можете да промените мислење (некогаш за многу кратко време по неговото формирање) со кликнување на копчето <em>Промена</em> во соодветното мислење. Ако некој е веќе одговорил на твоето мислење на дното ќе видите колку пати и кога последен пат сте го промениле. Ако никој не ви е одговорил на мислењето тогаш овој текст не се појавува и во случај кога модераторот или администраторот се го промениле твоето мислење. (Ти ќе остават порака што се промениле и зошто). Не заборавете дека обичните членови не можат да избришат мислења на кое веќе некој е одговорил.'
	),
	array(
		0 => 'Како да додадам потпис на моето мислење?',
		1 => 'За да додате потпис на вашето мислење мора прво да креирате потпис (се прави во Профил). Од кога ќе го креирате чекирајте го копчето <em>Додај потпис</em> на формата преку која испраќате мислење. Можете да користете еден и ист потпис на секое мислење со чекирање на соодветното копче. (Потписот нема да се појавува ако го одчекирате копчето Додај Потпис во формата кога ги испраќате мислењата.'
	),
	array(
		0 => 'Како да креирам анкета?',
		1 => 'Да се креира анкета е навистина лесно. Кога додавате нова тема (или го променувате првото мислење) ќе ја видиш формата <em>Додај анкета</em> (ако не ја гледате немате право да креирате анкети). Треба прво да измислите Наслов и прашање за Анкетата и да внесете најмалку две опции (за да додате опција кликнете на копчето <em>Додај опција</em> . Можете да изберете и временски лимит на постоењето на анкетата. (0 е за анкета која никогаш не завршува). Понекогаш администраторот поставуваа лимит на опциите за гласање.'
	),
	array(
		0 => 'Како да променам или избришам анкета?',
		1 => 'Како што е случај со мислењата, анкетите исто така можат да се менуваат или бришат само од членот кој ги напишал, од администраторот и модераторот. За да промените анкети кликнете копчето за промена на првото мислење во соодветната тема. Ако никој не гласа тогаш членовите можат да ја избришат или променат анкетата, но ако веќе некој е гласал тогаш само модераторите и администраторот. Ова е да се спречи честа промена на опциите или бришење на оние на кое веќе е гласано.'
	),
	array(
		0 => 'Зошто не можам да влезам во форумот?',
		1 => 'Некои форуми можат да се гледаат од одреден број на членови или одредени групи. Во таквите форуми за да разгледувате, читате или пишувате ви треба посебен дотап кои се дава само од администраторот и модераторот. Ако ова е во вашиот случај контактирајте ги.'
	),
	array(
		0 => 'Зошто не можам да гласам во анкети?',
		1 => 'Само регистрираните членови можат да гласаат во форумите за да се спречат повеќекратни гласања од анонимни корисници. Ако сте се регистрирале и сеуште не можете да гласате тогаш немате привилегија да гласата на таа тема.'
	),
	array(
		0 => 'Зошто не мажам да додадам Атачмент?',
		1 => 'Атачменти се додаваат во креирање на нова тема/мислење еден атачмент во една линија. Адманистраторот може ја забранил оваа опција да се ставаат атачменти, или само администратоските групи може да поставуваат атачменти. Контактирај го Администраторот ако не сте сигурни дали може да ставате атачменти.'
	),
	array(
		0 => 'Зошто добив предупредување?',
		1 => 'Администраторот одредува правила на страната или на форумотe.Ако ги кршите правилата може да ви биде издадено предупредување. Не заборавере дека предупредувањето е одлука на Администраторот или вебмастерот на оваа страна и креаторот на овој форумски систем (PhpBB) нема никаква врска со правилата.'
	),
	array(
		0 => 'Како да пријавам тема на модератор?',
		1 => 'Ако Адмионистраторот одобрил оди на темата која сакаш да ја пријавиш и ќе вивиш копче за пријавување (икона со извишник во повеќе сличаи).'
	),
	array(
		0 => 'Што значи “Сочувај” копчето кога испраќам мислење?',
		1 => 'Ова ќе ви дозволи да сочувате поракати и да може да ги испратите подоцна. За да ги испратите на друг ден може преку Членски панел и следете ги само објаснувачки инструкции таму.'
	),
	array(
		0 => 'Зошто моето мислење треба да се одобри?',
		1 => 'Администраторот одлучува дали ги кршите правилата или не и тој одлучува дали ке бидат поставени и мора да се прегледа нивната содржина.Можно администраторот да ве приклучил на накоја група која има дозвола да испраќа фајлови .Ве молиме контактирајте го Администраторот за повеќе информации.'
	),
	array(
		0 => 'Како да удрам тема?',
		1 => 'Со кликнување на “Удри тема” линкот.. link when you are viewing it, you can “bump” the topic to the top of the forum on the first page. However, if you do not see this, then topic bumping is disabled. It is also possible to bump the topic simply by replying to it. However, be sure to follow the rules of the site you are visiting.'
	),
	array(
		0 => '--',
		1 => 'Форматирање и видови на теми.'
	),
	array(
		0 => 'Што е BBCode?',
		1 => 'BBCode-от е специјална имплементација на HTML. Дали можете да го користите одлучува администраторот. Освен тоа можете да го исклучите во формата кога праќате мислења. BBCode-от по себе е сличен со HTML-от, се користат тагови кои се затворени во квадратни загради. На пример [ ТАГ ] место  &lt; и &gt; и нуди поголема контрола на што и како се запишува. За повеќе информации во врска со BBCode-от види на врската во страната од која испраќаш мислења.'
	),
	array(
		0 => 'Може ли да користам HTML?',
		1 => 'Не. Не е возможно да се користи HTML на оваа странаи да се покажува како HTML. Повеќето внесувања кои користат HTML ке се покажуваат во BBCode наместо HTML.'
	),
	array(
		0 => 'Што се Смешковците?',
		1 => 'Смешковците или Емоции се мали сликички кои можат да се користат да искажат некое чувство. На пример :) значи насмевка, :( изразува тажност. Целосната листа од емоции можете да ги видите во страницата од каде испраќате мислења. Гледај да не корисиш многу смешковци, тоа може да предизвика администраторот да го промени твоето мислење за да ги избрише смешковците.'
	),
	array(
		0 => 'Може да ставам слика?',
		1 => 'Да слика може да се стави во твоето мислење. Но ако администраторот дозволил атачменти може да аплодирате слика или дуг атачмент дирекно на странава.Или да направите врска. Вашата слика мора да се наоѓа на јавно пристапен сервер на пример http://www.некое_место.net/мојата_слика.gif. Не можете да линкувате со слики од вашиот компјутер (само ако не е сервер), ниту пак со слики кои се наоѓаат во механизми со посебен достап, на пример hotmail или yahoo маилови, страници заштитени со лозинка и.т.н. За да се покаже слика користете го тагот [img] во BBCode-от или соодветниот HTML таг (ако е дозволено).'
	),
	array(
		0 => 'Што се глобални Соопштенија?',
		1 => 'Global announcements contain important information and you should read them as soon as possible. Global announcements will appear at the top of every forum and also within your User Control Panel. Whether or not you can post a global announcement depends on the permissions required, these are set by the administrator.'
	),
	array(
		0 => 'Што се Соопштенија?',
		1 => 'Соопштенијата често содржат важна информација и треба да ги прочитате што е можно побрзо. Соопштенијата се наоѓаат на врвот на секоја страна во форумот кај што се испратени. Дали можете или не да испраќате Соопштенија зависи од тоа каква привилегија имате, се зависи од администраторот.'
	),
	array(
		0 => 'Што е леплива тема?',
		1 => 'Леплива тема може да се појави под секое соопштение кога гледате форум и само на првата страна.Најчесто се многу важни и треба да ги читате. Како соопштенија на страната администраторот поставува важни најави во нив како правила на темите во форумот.'
	),
	array(
		0 => 'Што се Заклучени Теми?',
		1 => 'Заклучените теми се заклучени затоа што тоа се го сториле администраторот или модераторот. Не можете да давате мислења во заклучените теми или пак да одговорите. Освен тоа не можете да гласате и во Анкетите. Темите можат да бидат заклучени за која и да било причина.'
	),
	array(
		0 => 'Што се икони во мислења?',
		1 => 'Икони  мислења се мали сликички кои кои можат да бидат сврзани со содржината на мислењето. Да се користат икони во мислењето зависи од Администраторот дали ги дозволил.'
	),
	// This block will switch the FAQ-Questions to the second template column
	array(
		0 => '--',
		1 => '--'
	),
	array(
		0 => '--',
		1 => 'Кориснички степени и групи'
	),
	array(
		0 => 'Што се Администратори?',
		1 => 'Администраторите се луѓе на кои им е дадена најголема контрола во овој форум. Овие луѓе можат да го контролираат форумот во секој аспект и да вршат операции од типот  привилегии, банирање на членови, креирање на кориснички групи и модератори и.т.н. Тие ги имаат целосната модераторска способност во сите форуми.'
	),
	array(
		0 => 'Што се Модератори?',
		1 => 'Модераторите се членови (или групи од членови) чија работа е е да гледаат како работат форумите од ден на ден. Имаат можност да ги менуваат и бришат мислењата, да ги заклучуваат, исклучуваат, преместуваат и да ги делат темите во форумот кој го модерираат. Во главно модераторите се овде да спречат <em>пишување на мислења кои немаат врска со темата</em> или да спречат постоење на фоуморт незаконски или навредувачки материјал.'
	),
	array(
		0 => 'Што се Членски групи?',
		1 => 'Членските групи се групи за обединување на членовите. Секој член може да припаѓа на повеќе групи (ова не разликува од други форум системи) и на секоја група можат да и се даваат различни привилегии во форумот. Ова им олеснува на модераторите наеднаш да стават неколку модератори на еден форум и да им даде пристап во личнен форум и.т.н.'
	),
	array(
		0 => 'Како да се вклучам во некоја Членска група?',
		1 => 'За да се вклучите во некоја членска група кликнете на соодветниот линк во Членскиот панел. Сите групи не се <em>отворени</em>, некои се затворени или пак некои имаат скриено членство. Ако членската група е отворена ќе бара да се вклучиш со кликнување на копчето кое го гледаш. Модераторот на корисничката група ќе мора да го одобри твоето барање и веројатно ќе те прашаат зошто сакаш да се присоединиш во групата. Не досадувајте му на модераторот ако не ве прими во групата, сигурно има особени причини.'
	),
	array(
		0 => 'Како да станам Модератор на Членска група?',
		1 => 'Членските групи обично се креираат од администраторот и тие назначуваат модератор на група. Ако сте заинтересирани да формирате членска група тогаш контактирајте го администраторот. Испратете му лична порака.'
	),
	array(
		0 => 'Зошто некои членови се јавуваат во различни бои?',
		1 => 'Можно е администраторот да определил бои за членовите на членските групи за полесно распознавање кој член е од која членска група.'
	),
	array(
		0 => 'Што се “Стандардни Членски групи”?',
		1 => 'Членските групи се групи за обединување на членовите. Секој член може да припаѓа на повеќе групи (ова не разликува од други форум системи) и на секоја група можат да и се даваат различни привилегии во форумот. Ова им олеснува на модераторите наеднаш да стават неколку модератори на еден форум и да им даде пристап во личнен форум и.т.н.'
	),
	array(
		0 => 'Што значи “Екипа” линкот?',
		1 => 'Таа страна покажува листа на членови ,како што се администратори или модератори со детали на кои форуми се модератори.'
	),
	array(
		0 => '--',
		1 => 'Приватни Пораки'
	),
	array(
		0 => 'Не можам да испраќам лични пораки!',
		1 => 'Постојат три причини во врска со ова; не сте регистрирани или не сте се логирале, администраторот го е забранил испраќањето на сите членови или пак администраторот само тебе ти е забранил да испраќаш такви. Ако ова е случај питај го администраторот зошто.'
	),
	array(
		0 => 'Продолжувам да добивам не сакани приватни пораки!',
		1 => 'Може да блокирате член да не може да ви сипраќа приватни пораки преку Членски панел.Ако добивате навредливи пораки од некој член пријавете го на Администраторот, тие имаат моќ да спречат член да не може воопшто да испраќа пораки.'
	),
	array(
		0 => 'Добив спем или навредлив емаил од некоја од оваа страна!',
		1 => 'Ние се извинуваме за тоа. Контактирајте го Администраторот и испратетеми целосна копија од емаилот, многу е важно да вклучите емаил адреса од која ви стига спамот.Тие ќе преземат одредени мерки.'
	),
	array(
		0 => '--',
		1 => 'Пријатели и противници'
	),
	array(
		0 => 'Што е моја листа на пријатели или противници?',
		1 => 'Може да ја користите листата да ги организирате дригите членови на форумот. Членови додадени во вашата листа ке може да ги видите во Членски панел за брза акција до нив како да им испратите порака да видите дали се online  или не се. Ако ставате противници не ке може да ги видите ке бидат игнорирани автомацки.'
	),
	array(
		0 => 'Како да додадам/отсртанам членови од мојата листа на пријатели или противници?',
		1 => 'Може да се додадат членови на твојата листа на два начина.Во секој членски профил има линк за додавање на пријатели и противници. Или преку Членски панел може да се внесат дирекно со внесување на членското име . Исто така може да се отстранат членовите од вашата листа во членско панел.'
	),
	array(
		0 => '--',
		1 => 'Пребарување на форуми'
	),
	array(
		0 => 'Како да го пребарувам Форумот?',
		1 => 'Со пополнување на дадените полиња во “Барај“ страната или со пополнување на полето при гдедање на мислење.Подетално пребарување може да се прави со кликнување на “Барај” линот кое е видливо на сите страни на форумот.'
	),
	array(
		0 => 'Зошто моето барање не дава резултати?',
		1 => 'Барањето што сте го поставиле за пребарување сигурно има премногу материјал за пребарување. Користете Напредно барање и таму поставете карактеристики за барање.'
	),
	array(
		0 => 'Зошто моето барање дава празна страна!?',
		1 => 'Барањето што сте го поставиле за пребарување сигурно има премногу материјал за пребарување. Користете Напредно барање и таму поставете карактеристики за барање.'
	),
	array(
		0 => 'Како да барам Членови?',
		1 => 'Оди во “Членови” страната и кликни на линкот “Барај членови” . Таму пополнете ги потребните полиња кои се објаснети.'
	),
	array(
		0 => 'Како да пронајдам мои мислења и теми?',
		1 => 'Вашите мислења можат да се пронајдат со чекирање на  “Покажи ги вашите мислења” во Членскиот панел . Да барате ваши теми користете напредно барање и пополнете ги дадените полиња.'
	),
	array(
		0 => '--',
		1 => 'Претплата (Subscriptions Bookmarks) на теми'
	),
	array(
		0 => 'Што е разликата помеѓу  bookmarking и subscribing?',
		1 => 'Не е преведено ..Bookmarking во phpBB3 е слично како bookmarking во вашиот browser. You aren’t necessarily alerted when there’s an update, but you can later come back to the topic. To contrast that with subscribing, subscribing will notify you when there is an update to the topic or forum on the board via your preferred method or methods.'
	),
	array(
		0 => 'Како да subscribe до одредени форуми или мислења?',
		1 => 'Да subscribe до одредени форуми, кога ќе влезите на форумот ќе видите “Subscribe to forum” линк. Ова ќе ве subscribe до форумот исто како за мислење. Да subscribe до мислење , може или да одговорите на мислење и чекирајте subscribe или кликнете на линкот  subscribe to topic во самата тема.'
	),
	array(
		0 => 'Како да ги отстранам моите subscriptions?',
		1 => 'Да ги отстраните вашите subscriptions, едноставно одете во вашиот Членски Контролен Панел, и следи ги линковите до вашите subscriptions.'
	),
	array(
		0 => '--',
		1 => 'Атачменти'
	),
	array(
		0 => 'Кои атачменти се дозволени на странава?',
		1 => 'Секој Администратор одредува кој вид на атачнемти се дозволени. Ако не сте сигурни кои атачменти се дозволени за аплоудирање контактирајте  го Адмнистраторот.'
	),
	array(
		0 => 'Како да ги пронајдам сите мои Атачменти?',
		1 => 'Да најдете вашата листа на атачменти што сте ги ставиле одете во Вашиот Членски панел и пронајдете ја листата на атачменти .'
	),
	array(
		0 => '--',
		1 => 'Прашања во врска со phpBB 3'
	),
	array(
		0 => 'Кој го е создал овој форум систем?',
		1 => 'Овој софтвер (во неговата немодифицирана форма) е продуциран, распространуван и е под закон за авторско право од <a href=\"http://www.phpbb.com/\" target=\"_blank\">phpBB Group</a>. Валиден е под лиценца на GNU General Public Licence и може слободно да се распространува. Кликни на врската за повеќе детали.'
	),
	array(
		0 => 'Зошто не ја користите X функцијата?',
		1 => 'Овој софтвер е напишан и лицензиран од phpBB Group. Ако мислите дека некоја функција треба да биде додадена посетете го сајтот на phpbb.com и прочитајте што Group имаат да ви кажат. Не испраќајте барања за функции во форумот на phpbb.com, групата го користи sourceforge да се справи со барањата за нови функции. Прошетајте низ форумите и видете дали вашето барање за функција е веќе дадено. Ако е видете што мислиме и следете ги соодветните процедури.'
	),
	array(
		0 => 'Kој треба да контактирам ако видам некоја нелегална (вулгарна) содржина?',
		1 => 'Прво видете дали некој од Администраторите е Присутен (online) па пратете му лична порака , а ако нема администратор Присутен (online) доволно е да пратите емаил на Администраторот.'
	),
);

?>