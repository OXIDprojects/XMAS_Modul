<?php
/**
 * OXID module that calculates the days to xmas.
 *
 * PHP version 5
 *
 * @author   Roman Zenner, PHP Magazin
 * @author   angepasst auf OXID 4.7.5 Peter Wiedeking
 * @author   Template-Block by eComStyle.de
 * @link     http://phpmagazin.de/Module-f%C3%BCr-PHP-basierte-E-Commerce-Systeme-schreiben-4489.html 
 * @license  GNU General Public License http://www.gnu.org/licenses/
 * @version  2.0
 * @link     https://github.com/jkrug/singleNewsletter/
 */



$aModule = array(
    'id'          => 'xmasArticle',
    'title'       => 'XMAS :: Days Left',
    'description' => array(
        'de'    => 'Berechnet die Tage bis Weihnachten.',
        'en'    => 'Calculates the days until XMAS',
    ),
    'email'         => 'peter@wiedeking.net',
	'url'           => 'http://phpmagazin.de/Module-f%C3%BCr-PHP-basierte-E-Commerce-Systeme-schreiben-4489.html',
    'thumbnail'     => 'xmas.jpg',
    'version'       => '1.0',
    'author'        => 'PHP Magazin :: Roman Zenner / (angepasst auf OXID 4.7.5 Peter Wiedeking) / Template-Block by <strong style="font-size: 17px;color:#04B431;">e</strong><strong style="font-size: 16px;">ComStyle.de</strong>',
    'extend'    => array(
        'oxarticle'    => 'xmasArticle/xmasArticle',   
    ),   

    'blocks' => array(
		array(
			'template' => 'page/details/inc/productmain.tpl',
			'block' => 'details_productmain_shortdesc',
			'file' => 'details_productmain_shortdesc_ecomstyle.tpl' ),
				),
 );
?>