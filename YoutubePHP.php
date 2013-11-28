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

    class YoutubeParser {

        var $id = '';
        var $info = array();

        function __construct($id = '') { 
            $this->id = $id;
            $info_text = file_get_contents('http://youtube.com/get_video_info?video_id=' . $id);
            $infos = explode('&', $info_text);
            $this->info = $infos;
            }
        
        function get_id() {
            return $this->id;
            }

        function get_info() {
            return $this->info;
            }

        function get_url() {
            return 'http://www.youtube.com/watch?v=' . $this->id;
            }

        function get_parameter($parameter='', $human=true) {
            $return = '';
            foreach($this->info as $i){
                if ( strpos($i, $parameter . "=") !== false ) { 
                    $return = $i;
                    $return = str_replace($parameter . "=", '', $return);
                    if ($human) {
                        $return = utf8_decode(urldecode($return));
                        }
                    return $return;
                    }
                }
            }

        /* Function Shortcut */

        function author() {
            return $this->get_parameter('author', true);
            }

        function keywords($as_array=false) {
            $keywords = $this->get_parameter('keywords', true);
            if ($as_array)
                $keywords = explode(',', $keywords);
            return $keywords;
            }

        function duration() {
            return $this->get_parameter('length_seconds', true);
            }

        function views() {
            return $this->get_parameter('view_count', true);
            }

        function timestamp() {
            return $this->get_parameter('timestamp', true);
            }

        function date($format='Y-m-d') {
            return date($format, $this->timestamp());
            }

    } // class

?>
