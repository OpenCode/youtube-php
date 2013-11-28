<?php

    /* *********************************************************************

    Francesco OpenCode Apruzzese <opencode@e-ware.org>

    This file is part of YoutubePHP.

    YoutubePHP is free software: you can redistribute it and/or modify
    it under the terms of the GNU General Public License as published by
    the Free Software Foundation, either version 3 of the License, or
    (at your option) any later version.

    Nome-Programma is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    GNU General Public License for more details.

    You should have received a copy of the GNU General Public License
    along with Nome-Programma.  If not, see <http://www.gnu.org/licenses/> 
    
    ********************************************************************** */

    header('Content-Type: text/html; charset=ISO-8859-1');

    include_once('YoutubePHP.php');

    $ID = 'Kdgt1ZHkvnM';
    $yt = new YoutubeParser($ID);
    
    echo 'VIDEO COMPLETE URL : ' . $yt->get_url(). '<br />';
    echo 'VIDEO AUTHOR : ' . $yt->author(). '<br />';
    echo 'VIDEO KEYWORDS AS ARRAY : ';
    print_r( $yt->keywords(true) );
    echo '<br />';
    echo 'VIDEO DURATION (SECONDS) : ' . $yt->duration(). '<br />';
    echo 'VIDEO VIEWS : ' . $yt->views(). '<br />';
    echo 'VIDEO DATE : ' . $yt->date(). '<br />';

?>
