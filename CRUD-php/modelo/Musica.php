<?php 

    class Musica{
        public $id;
        public $nome;
        public $cantora;
        public $tempo;
        public $album;

        public function __constructor(){

        }

        public function setAll($id, $nome, $cantora, $tempo, $album){
            $this -> id = $id;
            $this -> nome = $nome;
            $this -> cantora = $cantora;
            $this -> tempo = $tempo;
            $this -> album = $album;
        }

        public function setAllNoId($nome, $cantora, $tempo, $album){
            $this -> nome = $nome;
            $this -> cantora = $cantora;
            $this -> tempo = $tempo;
            $this -> album = $album;
        }

        public function getId(){
            return $this -> id;
        }

        public function getNome(){
            return $this -> nome;
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