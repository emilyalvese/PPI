<?php 

    include_once "../modelo/MusicaDAO.php";
    include_once "../modelo/Musica.php";
    
    class ControllerMusica{
        public function __constructor(){

        }

        public function listarMusicas(){
            $dao = new MusicaDAO();

            $musicas = $dao -> read();
            return $musicas;
        }

        public function inserirMusica($nome, $cantora, $tempo, $album){
            $dao = new MusicaDAO();
            $musica = new Musica();

            $musica -> setAllNoId($nome, $cantora, $tempo, $album);
            
            $dao -> insert($musica);
            return $dao;
        }

        public function editarMusica($id, $nome, $cantora, $tempo, $album){
            $dao = new MusicaDAO();
            $musica = new Musica();

            $musica -> setAll($id, $nome, $cantora, $tempo, $album);
            
            $dao -> update($musica);
            return $dao;
        }

        public function deletarMusica($id){
            $dao = new MusicaDAO();

            $dao -> delete($id);
            return $dao;
        }

        public function getMusica($id){
            $dao = new MusicaDAO();

            $musica = $dao -> search($id);
            return $musica;
        }
    }

?>