<?php 
include "printer_record.php";

if(isset($_POST['rowID'])){
    $rowID = $_POST['rowID'];
    $sql  = "DELETE FROM `printerdt_db` WHERE id = '$rowID'";
    if($conn->query($sql)){
        $jsonArray = array('deleteID' => $rowID);
        exit(json_encode($jsonArray));
    }
}
?>
