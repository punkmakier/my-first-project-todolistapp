<?php
    function insertT()
    {
        if(!empty($_GET['items']))
        {
          $insert = new insert($_GET['items']);
          if( $insert->insertTask())
          {
                echo '<div class="col-md-9 alert alert-success alert-dismissible fade show" role="alert">
                <strong>Holy guacamole!</strong> Insert new task succesfully!
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>';
          }
    
          else {
            echo '<div class="col-md-9 alert alert-danger alert-dismissible fade show" role="alert">
            <strong>Holy guacamole!</strong> Inserting new task ERROR!
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>';
          }
        }
    }

    function deleteT()
    {
        if(!empty($_GET['delete']))
        {
          $delete = new delete($_GET['delete']);
          if( $delete->deleteTask())
          {
                echo '<div class="col-md-9 alert alert-warning alert-dismissible fade show" role="alert">
                <strong>Holy guacamole!</strong> Deleted task succesfully!
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>';
          }
    
          else {
            echo '<div class="col-md-9 alert alert-danger alert-dismissible fade show" role="alert">
            <strong>Holy guacamole!</strong> Deleting task ERROR!
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>';
          }
        }
    }

    function updateT()
    {
        if(!empty($_GET['edit']))
        {
          $update = new update($_GET['edit']);
          if( $update->updateTask())
          {
                echo '<div class="col-md-9 alert alert-success alert-dismissible fade show" role="alert">
                <strong>Holy guacamole!</strong> Task complete!
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>';
          }
    
          else {
            echo '<div class="col-md-9 alert alert-danger alert-dismissible fade show" role="alert">
            <strong>Holy guacamole!</strong> Task incomplete!
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>';
          }
        }
    }

    function viewCompleteTable()
    {
        $view = new view(); 
        $view->viewCompletedTask();
    }

    function viewTable()
    {
        $view = new view();
        $view->viewTask();
        
    }


    function my_functions()
    {
        insertT();
        deleteT();
        updateT();
    }
?>