<?php 

    class Musica{
        public $id;
        public $musica;
        public $cantora;
        public $tempo;
        public $album;

        public function __constructor(){

        }

        public function setAll($id, $musica, $cantora, $tempo, $album){
            $this -> id = $id;
            $this -> nome = $musica;
            $this -> cantora = $cantora;
            $this -> tempo = $tempo;
            $this -> album = $album;
        }

        public function getId(){
            return $this -> id;
        }

        public function getMusica(){
            return $this -> musica;
        }

        public function getCantora(){
            return $this -> cantora;
        }

        public function getTempo(){
            return $this -> tempo;
        }

        public function getAlbum(){
            return $this -> album;
        }
    }

?>