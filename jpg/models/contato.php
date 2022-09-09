<?php
class Contato extends model{
    public function add($nome, $email, $mensagem){
        $sql = "INSERT INTO contato (nome, email, mensagem) VALUES (?, ?, ?)";
        $sql = $this->db->prepare($sql);
        $sql->bindValue(1, $nome);
        $sql->bindValue(2, $email);
        $sql->bindValue(3, $mensagem);
        $sql->execute();
    
}

   public function getAll(){
        $array = array();
        $sql = "SELECT * FROM contato";
        $sql = $this->db->query($sql);

       if($sql->rowCount() > 0){
            $array = $sql->fetchAll();
        }
        return $array;



   }
}
?>