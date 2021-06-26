<?php
    class view extends config{

        public function viewTask()
        {
            $con = $this->connection();
            $sql = "SELECT * FROM `tbl_todolist` WHERE `status` = 'PENDING' ";
            $data = $con->prepare($sql);
            $data->execute();
            $result = $data->fetchAll(PDO::FETCH_ASSOC);

            echo "<h3 class='mb-4'>Pending Task</h3>";

            echo "<table class='table table-dark table-striped table-sm'>";
            echo "<thread>
                    <tr>
                        <th>Task item</th>
                        <th>Action</th>
                    </tr>
                </thread><tbody>";
                if($data->rowCount() > 0){
                    foreach($result as $data)
                    {
                        echo "<tr>";
                            echo "<td>$data[items]</td>";
                            echo "<td>
                                <a class='btn btn-info btn-sm' href='index.php?edit=$data[id]'>Mark as Complete</a>
                                <a class='btn btn-danger btn-sm'href='index.php?delete=$data[id]'>Delete task</a>
                            </td>";
                        echo "</tr>";
                    }
                }
                else{
                    echo "<td>NO TASK AVAILABLE</td>";
           
                }
                   
            echo "</tbody></table>";
        }
    


    public function viewCompletedTask()
        {
            $con = $this->connection();
            $sql = "SELECT * FROM `tbl_todolist` WHERE `status` = 'COMPLETED' ";
            $data = $con->prepare($sql);
            $data->execute();
            $result = $data->fetchAll(PDO::FETCH_ASSOC);

            echo "<h3 class='mb-4'>Completed Task</h3>";

            echo "<table class='table table-dark table-striped table-sm'>";
            echo "<thread>
                    <tr>
                        <th>Task item</th>
                        <th>Date Completed</th>
                    </tr>
                </thread><tbody>";
                    foreach($result as $data)
                    {
                        echo "<tr>";
                            echo "<td>$data[items]</td>";
                            echo "<td>$data[date_completed]</td>";
                        echo "</tr>";
                    }
            echo "</tbody></table>";
        }
    }
?>