<?php

    class Song{
        public $songId ;
        public $title ;
    }

    $singleSong = new Song();
    echo $singleSong->songId = 1 ;
    echo $singleSong->title = "Numb" ;

    class Playlist{
        public $name ;
        public $songs = [];

        public function addSong($song){
            $this->songs[] = $song;
        }
    }

    $rockPlayList = new Playlist();
    $rockPlayList->name = "Rock";
    $rockPlayList->addSong($singleSong);
    echo '<pre>'; print_r($rockPlayList); echo '</pre>';


?>