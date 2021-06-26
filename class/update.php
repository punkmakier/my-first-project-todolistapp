<?php
    class update extends config{
        public $id;



        public function __construct($id)
        {
            $this->id = $id;
        }

        public function updateTask()
        {
            $con = $this->connection();
            $sql = "UPDATE `tbl_todolist` SET `status`='COMPLETED' where id='$this->id'";
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