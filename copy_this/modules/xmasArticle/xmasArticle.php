<?php
/**
 *    This file is copied from the PHP Magazin and tested with OXID CE 4.7.5
 *
 *    This Module is free software: you can redistribute it and/or modify
 *    it under the terms of the GNU General Public License as published by
 *    the Free Software Foundation, either version 3 of the License, or
 *    (at your option) any later version.
 *
 *    This Module is distributed in the hope that it will be useful,
 *    but WITHOUT ANY WARRANTY; without even the implied warranty of
 *    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 *    GNU General Public License for more details.
 *
 *    You should have received a copy of the GNU General Public License
 *    along with OXID eShop Community Edition.  If not, see <http://www.gnu.org/licenses/>.
 *
 * @package   	xmas Days Left test
 * @copyright 	http://phpmagazin.de/Module-f%C3%BCr-PHP-basierte-E-Commerce-Systeme-schreiben-4489.html
 * @version 	OXID eShop CE
 * @version   	1.0.0 2013-07-09 $
 */
 
class xmasArticle extends xmasArticle_parent
{
    public function getDaysLeft()
    {
        $time = mktime(0, 0, 0, 12, 25, 2013, 1) - time();
        $days = floor($time/86400);
        return $days;
    }
}
