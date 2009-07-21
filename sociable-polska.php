<?php
/*
	Plugin Name: Sociable Polska
	Plugin URI: http://wpmedia.pl/2009/07/20/sociable-polska-oficjalnie-wydane/
	Description: Dodatkowy zestaw najpopularniejszych polskich serwisów dla wtyczki <a href="http://wordpress.org/extend/plugins/sociable/" title="WordPress &#8250; Sociable &laquo; WordPress Plugins">Sociable</a>.
	Version: 1.0.0
	Author: pavobe
	Author URI: http://pavobe.pl/
*/

/*
	Copyright 2009 pavobe (email: pavobe.dev@gmail.com)

	This program is free software; you can redistribute it and/or modify
	it under the terms of the GNU General Public License as published by
	the Free Software Foundation; either version 2 of the License, or
	(at your option) any later version.

	This program is distributed in the hope that it will be useful,
	but WITHOUT ANY WARRANTY; without even the implied warranty of
	MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
	GNU General Public License for more details.

	You should have received a copy of the GNU General Public License
	along with this program; if not, write to the Free Software
	Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA
*/

/*
	Jeżeli brakuje Twojej ulubionej strony, nie dodawaj jej samodzielnie. Napisz
	na pavobe.dev@gmail.com i jeżeli będzie to możliwe, dodam Twoją propozycję
	wraz z kolejnym wydaniem wtyczki. Niech pozostali użytkownicy również skorzystają ;-).

	Możesz również zamieścić komentarz bezpośrednio na blogu autora:
	http://wpmedia.pl/2009/07/20/sociable-polska-oficjalnie-wydane/
*/

function sociable_add_polish_sites($known_sites) {
	$known_sites['24foto'] = array(
		'favicon' => 'http://24foto.pl/favicon.ico',
		'url' => 'http://24foto.pl/dodaj-do/?cf_field_2=TITLE&amp;cf_field_3=EXCERPT&amp;cf_field_4=PERMALINK',
	);
	$known_sites['Blip'] = array(
		'favicon' => 'http://blip.pl/images/favicon.gif',
		'url' => 'http://blip.pl/dashboard?body=Polecam: TITLE PERMALINK',
		'description' => 'BLIP - Bardzo Lubię Informować Przyjaciół'
	);
	$known_sites['Co-Robie.pl'] = array(
		'favicon' => 'http://co-robie.pl/favicon.ico',
		'url' => 'http://co-robie.pl/home/?add=Polecam: TITLE PERMALINK',
		'description' => 'Co-Robie.pl | Co teraz robisz?'
	);
	$known_sites['Flaker'] = array(
		'favicon' => 'http://flaker.pl/favicon.ico',
		'url' => 'http://flaker.pl/add2flaker.php',
		'description' => 'Wrzuć to na Flakera - powiadom swoich Znajomych'
	);
	$known_sites['Forumowisko'] = array(
		'favicon' => 'http://forumowisko.pl/favicon.ico',
		'url' => 'http://www.forumowisko.pl/index.php?act=post&amp;do=new_post&amp;f=76&amp;get_post=PERMALINK&amp;get_title=TITLE',
	);
	$known_sites['Grono'] = array(
		'favicon' => 'http://s1.grono.net/images/common/favicon.ico',
		'url' => 'http://grono.net/pub/popup/link/urlfetch/?url=PERMALINK&amp;title=TITLE',
		'description' => 'grono.net - internetowa społeczność przyjaciół'
	);
	$known_sites['Linkr.pl'] = array(
		'favicon' => 'http://linkr.pl/img/favicon.ico',
		'url' => 'http://www.linkr.pl/html/dodaj?url=PERMALINK&amp;title=TITLE',
		'description' => 'Dodaj link - Linkr.pl - tylko ciekawe linki'
	);
	$known_sites['OSnews.pl'] = array(
		'favicon' => 'http://osnews.pl/stuff/osnews/osnews.ico',
		'url' => 'http://osnews.pl/dodaj-niusa/?external=true&amp;title=TITLE&amp;url=PERMALINK',
		'description' => 'Dodaj niusa &laquo; OSnews.pl'
	);
	$known_sites['Pinger'] = array(
		'favicon' => 'http://www.pinger.pl/favicon.png',
		'url' => 'http://pinger.pl/share?title=TITLE&amp;content=Polecam: TITLE PERMALINK',
		'description' => 'pinger.pl - Nie taki zwykły blog.'
	);
	$known_sites['Polec.pl'] = array(
		'favicon' => 'http://www.polec.pl/favicon.ico',
		'url' => 'http://www.polec.pl/submit.php?url=PERMALINK',
		'description' => 'Polec.pl - Pozytywnie Odjazdowo Lajtowo Elokwentny Content'
	);
	$known_sites['Sfora.pl'] = array(
		'favicon' => 'http://www.sfora.pl/favicon.ico',
		'url' => 'http://www.sfora.pl/Link/Wysforuj/?Link=PERMALINK&amp;Tytul=TITLE&amp;Opis=EXCERPT',
		'description' => 'Sfora.pl - Dodaj link i pozwól by wysforowali go inni użytkownicy serwisu Sfora.pl'
	);
	$known_sites['Spis.pl'] = array(
		'favicon' => 'http://www.spis.pl/favicon.ico',
		'url' => 'http://www.spis.pl/story-add/?url=PERMALINK&amp;title=TITLE&amp;description=EXCERPT',
		'description' => 'Spis.pl - najciekawsze w sieci'
	);
	$known_sites['vala.pl'] = array(
		'favicon' => 'http://www.vala.pl/gfx/vala.png',
		'url' => 'http://www.vala.pl/dodaj/?title=TITLE&amp;url=PERMALINK',
		'description' => 'vala.pl - zostaw to na później'
	);
	$known_sites['Wahacz.pl'] = array(
		'favicon' => 'http://www.wahacz.pl/favicon.ico',
		'url' => 'http://www.wahacz.pl/submit.php?url=PERMALINK',
		'description' => 'Wahacz.pl'
	);
	$known_sites['WPigułce.net'] = array(
		'favicon' => 'http://wpigulce.net/img/favicons/favicon4.ico',
		'url' => 'http://wpigulce.net/submit.php?url=PERMALINK',
		'description' => 'WPigułce.net'
	);
	$known_sites['Wyczaj.to'] = array(
		'favicon' => 'http://wyczaj.to/img/favicon2.ico',
		'url' => 'http://wyczaj.to/api/external/add_external.html?full_url=PERMALINK&amp;title=TITLE&amp;description=EXCERPT',
		'description' => 'Dodaj wyczajenie'
	);
	$known_sites['YouBookmarks'] = array(
		'favicon' => 'http://youbookmarks.com/favicon.ico',
		'url' => 'http://youbookmarks.com/settings/?id=add&amp;url=PERMALINK',
		'description' => 'YouBookmarks Ustawienia / Nowa zakładka'
	);
	return $known_sites;
}

add_filter('sociable_known_sites', 'sociable_add_polish_sites', 10, 1);

?>