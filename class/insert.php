<?php
    class insert extends config{
        public $item;



        public function __construct($item)
        {
            $this->item = $item;
        }

        public function insertTask()
        {
            $con = $this->connection();
            $sql = "INSERT INTO `tbl_todolist`(`items`)VALUES('$this->item')";
            $data = $con->prepare($sql);

            if($data->execute())
            {
                return true;
            }
            else{
                return false;
            }
        }
    }
?>