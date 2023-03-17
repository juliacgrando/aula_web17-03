<?php 
    include "../Model/BD.Class.php";

    class UsuarioController {

        private $model;
        private $table = "usuario";

        public function __construct(){
        
        $this->model = $conn = new BD();
 
    }
    
    public function salvar($dados){

    $this->model->inserir($this->table, $dados);

     
    }

    public function carregar(){
        return$this->model->select($this->table);
        
    
         
        }



    
    }







?>