<?php
/*
	Plugin Name: Sociable Polska
	Plugin URI: http://wpmedia.pl/2009/07/20/sociable-polska-oficjalnie-wydane/
	Description: Dodatkowy zestaw najpopularniejszych polskich serwisów dla wtyczki <a href="http://wordpress.org/extend/plugins/sociable/" title="WordPress &#8250; Sociable &laquo; WordPress Plugins">Sociable</a>.
	Version: 1.0.1
	Author: pavobe
	Author URI: http://pavobe.pl/
*/

/*
	Copyright 2010 pavobe (email: pavobe.dev@gmail.com)

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
	$known_sites['Blip'] = array(
		'favicon' => '../../sociable-polska/images/blip.gif',
		'url' => 'http://blip.pl/dashboard?body=TITLE PERMALINK',
		'description' => 'Blip'
	);
	$known_sites['Co-Robie.pl'] = array(
		'favicon' => '../../sociable-polska/images/co-robie.ico',
		'url' => 'http://co-robie.pl/home/?add=TITLE PERMALINK',
		'description' => 'Co-Robie.pl'
	);
	$known_sites['Flaker'] = array(
		'favicon' => '../../sociable-polska/images/flaker.ico',
		'url' => 'http://flaker.pl/add2flaker.php',
		'description' => 'Flaker'
	);
	$known_sites['Grono'] = array(
		'favicon' => '../../sociable-polska/images/grono.ico',
		'url' => 'http://grono.net/pub/popup/link/urlfetch/?url=PERMALINK&amp;title=TITLE',
		'description' => 'Grono'
	);
	$known_sites['Kciuk.pl'] = array(
		'favicon' => '../../sociable-polska/images/kciuk.ico',
		'url' => 'http://www.kciuk.pl/Dodaj-link/?PERMALINK/?TITLE/?EXCERPT',
		'description' => 'Kciuk.pl'
	);
	$known_sites['OSnews.pl'] = array(
		'favicon' => '../../sociable-polska/images/osnews.ico',
		'url' => 'http://osnews.pl/dodaj-niusa/?external=true&amp;title=TITLE&amp;url=PERMALINK',
		'description' => 'OSnews.pl'
	);
	$known_sites['Pinger'] = array(
		'favicon' => '../../sociable-polska/images/pinger.png',
		'url' => 'http://pinger.pl/share?title=TITLE&amp;content=TITLE PERMALINK',
		'description' => 'Pinger'
	);
	$known_sites['Spis.pl'] = array(
		'favicon' => '../../sociable-polska/images/spis.ico',
		'url' => 'http://www.spis.pl/story-add/?url=PERMALINK&amp;title=TITLE&amp;description=EXCERPT',
		'description' => 'Spis.pl'
	);
	$known_sites['Sledzik'] = array(
		'favicon' => '../../sociable-polska/images/sledzik.ico',
		'url' => 'http://nasza-klasa.pl/sledzik?shout=TITLE PERMALINK',
		'description' => 'Śledzik'
	);
	$known_sites['Vala.pl'] = array(
		'favicon' => '../../sociable-polska/images/vala.gif',
		'url' => 'http://www.vala.pl/dodaj/?title=TITLE&url=PERMALINK',
		'description' => 'Vala.pl'
	);
	$known_sites['Wahacz.pl'] = array(
		'favicon' => '../../sociable-polska/images/wahacz.ico',
		'url' => 'http://www.wahacz.pl/submit.php?url=PERMALINK',
		'description' => 'Wahacz.pl'
	);

	return $known_sites;
}

add_filter('sociable_known_sites', 'sociable_add_polish_sites', 10, 1);

?>