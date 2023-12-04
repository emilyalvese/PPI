<?php 
    include_once "Musica.php";
    include_once "../resources/Database.php";

    class MusicaDAO{
        public function __constructor(){}

        public function read(){
            $db = new Database();
            $conn = $db -> getConnection();
            $sql = "SELECT * FROM musicas";
            $stmt = $conn -> prepare($sql);
            $stmt -> execute();
            if($stmt -> rowCount() >0){
                $resultado = $stmt -> fetchAll(PDO::FETCH_ASSOC);
                return $resultado;
            } else{
                return[];
            }
        }

        public function insert(Musica $musica){
            $db = new Database();
            $conn = $db -> getConnection();
            $sql = "INSERT INTO musicas (id, nome, cantora, tempo, album) VALUES (:id, :nome, :cantora, :tempo, :album);";
            $stmt = $conn -> prepare($sql);
            $id = $musica->getId();
            $nome = $musica->getNome();
            $cantora = $musica->getCantora();
            $tempo = $musica->getTempo();
            $album = $musica->getAlbum();
            $stmt -> bindParam(':id', $id);
            $stmt -> bindParam(':nome', $nome);
            $stmt -> bindParam(':cantora', $cantora);
            $stmt -> bindParam(':tempo', $tempo);
            $stmt -> bindParam(':album', $album);

            $stmt->execute();
        }

        public function update(Musica $musica){
            $dao = new Database();
            $conn = $dao->getConnection();
        
            $sql = 'UPDATE musicas SET nome = :nome, cantora = :cantora, tempo = :tempo, album = :album WHERE id = :id;';
        
            try {
                $stmt = $conn->prepare($sql);
                
                $stmt->bindValue(':nome', $musica->getNome());
                $stmt->bindValue(':cantora', $musica->getCantora());
                $stmt->bindValue(':tempo', $musica->getTempo());
                $stmt->bindValue(':album', $musica->getAlbum());
                $stmt->bindValue(':id', (int)$musica->getId());
        
                return$stmt->execute();
            } catch (PDOException $e) {
                echo "Não foi possível atualizar a música: " . $e->getMessage();
            }
        }

        public function delete($id){
            $db = new Database();
            $conn = $db-> getConnection();
            $sql = "DELETE FROM musicas WHERE id = ?";
            $stmt = $conn->prepare($sql);
            $stmt->bindParam(1, $id);
            return $stmt->execute();
        }

        public function search($id){
            $dao = new Database();
            $conn = $dao->getConnection(); 

            $sql = 'SELECT * FROM musicas WHERE id = ?';
            $stmt = $conn->prepare($sql);
            $stmt->bindValue(1, $id);
            $stmt->execute();
            if($stmt->rowCount() > 0){
                $resultado = $stmt->fetch(PDO::FETCH_ASSOC);
                $musica = new Musica();

                $musica->setAll(
                    $resultado['id'],
                    $resultado['nome'],
                    $resultado['cantora'],
                    $resultado['tempo'],
                    $resultado['album']
                );
                return $musica;
            }else{
                return [];
            }
        }

    }

?>