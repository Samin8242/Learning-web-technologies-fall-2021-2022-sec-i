<?php 

require_once('../model/config.php');
if (isset($_GET['id'])) {

    $id = $_GET['id'];

    $sql = "DELETE FROM users WHERE id='{$id}'";

     $result = $conn->query($sql);

     if ($result == TRUE) {

        echo "Record deleted successfully.";
        header('location: ../view/userlist.php');

    }else{

        echo "Error:" . $sql . "<br>" . $conn->error;

    }

} 

?>