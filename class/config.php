<?php 
    class config{
        private $user = 'root';
        private $pass = '';
        public $pdo = null;


        public function connection()
        {
            try{
                $this->pdo = new PDO('mysql:host=localhost;dbname=todoapp', $this->user, $this->pass);
     
            }catch(PDOException $e){
                die($e->getMessage());
            }

            return $this->pdo;
        }
    }
?>