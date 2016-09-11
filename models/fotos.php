<?php
class Fotos extends model {
    
    public function saveFotos() {
        //verifica se não tá vazio
        if(isset($_FILES['arquivo']) && !empty($_FILES['arquivo']['tmp_name'])) {
            //tipo de arquivo verificacao correta que é o type
            $permidos = array('image/jpeg', 'image/jpg', 'image/png');
            //para ver se o arquivo é realmente uma imagem
            if(in_array($_FILES['arquivo']['type'], $permidos)) {
                //sempre que receber um arquivo do usuario mude o nome
                //tem que gerar um md5 o time atual concatenar com um numero aleatorio
                $nome = md5(time().rand(0, 999)).'.jpg';
                //colocar a imagem na pagina do servidor, ['arquivo']['tmp_name'] = arquivo temporario
                //arquivo novo 'assets/images/galeria/'.$nome
                move_uploaded_file($_FILES['arquivo']['tmp_name'], 'assets/images/galeria/'.$nome);
                
                $titulo = '';
                //se foi enviado o titulo e se ele foi preenchido
                if(isset($_POST['titulo']) && !empty($_POST['titulo'])) {
                    //adiciona ele
                    $titulo = addslashes($_POST['titulo']);
                }
                //salvar no banco de dados
                $sql = "INSERT INTO fotos SET titulo = '$titulo', url = '$nome'";
                $this->db->query($sql);
                
            }
            
            
        }
        
    }
    
    public function getFotos() {
        $array = array();
        
        $sql = "SELECT * FROM fotos ORDER BY id DESC";
        $sql = $this->db->query($sql);
        
        if($sql->rowCount() > 0) {
            $array = $sql->fetchAll();
        }
        
        return $array;
    }
    
}