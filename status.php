<?php
        header('Content-Type: application/json');
        // URL
        $url = "http://142.44.205.60:8142/stats?sid=1";
        $nice_url = urlencode($url);
        $shoutcast = simplexml_load_file($nice_url) or die("Rádio offline."); // open file
        $locutor  = $shoutcast->SERVERTITLE;
        $programa = $shoutcast->SERVERGENRE;
        $ouvintes = $shoutcast->CURRENTLISTENERS;
            // dados
            $item = array(
                'locutor' => $locutor,
                'avatar' => $locutor,
                'programa' => $programa,
                'ouvintes' => $ouvintes,
        );
            
           $json = json_encode($item);
           echo $json;
          ?>
