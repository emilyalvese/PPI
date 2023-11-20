<?php 

    include_once "Musica.php"
    include_once "Database.php"

    class MusicaDAO{
        public function __constructor()
    }

    //SELECT *
    public function selectAll(){
        $db = new Database();
        $conn = $db -> getConnection();
        $sql = "SELECT * FROM musicas";
        $stmt = $conn -> prepare($sql);
        $stmt -> execute();
        if($start -> rowCount() >0){
            $resultado = $stmt -> fetchAll(PDO::FETCH_ASSOC);
            return $resultado;
        } else{
            return[];
        }
    }

    public function insert(Musica $musica){
        $db = new Database();
        $conn = $db -> getConnection();
        $sql = "INSERT INTO musicas (id, musica, cantora, tempo, album) VALUES (:id, :musica, :cantora, :tempo, :album);";
        $stmt = $conn -> prepare($sql);
        $id = $musica->getId();
        $musica = $musica->getMusica();
        $cantora = $musica->getCantora();
        $tempo = $musica->getTempo();
        $album = $musica->getAlbum();
        $stmt -> bindParam(':id', $id);
        $stmt -> bindParam(':musica', $musica);
        $stmt -> bindParam(':cantora', $cantora);
        $stmt -> bindParam(':tempo', $tempo);
        $stmt -> bindParam(':album', $album);
    }

    public function update(Musica $musica){

    }

    public function delete($id){
        $db = new Database();
        $conn = $db-> getConnection();
        $sql = "DELETE FROM musicas WHERE id = :id";
        $smtm = $conn->prepare($sql);
        $smtm->bindParam(':id', $id);
        return $stmt->execute();
    }

    public function selectById($id){
        
    }

?>