<?php
include "../db/connect.php";


if(isset($_GET['p_id'])){
    $p_id = $_GET['p_id'];
    
    // Use prepared statement for security
    $sql = "DELETE FROM `participants` WHERE `p_id` = ?";
    
    $stmt = $con->prepare($sql);
    $stmt->bind_param("i", $p_id);
    
    if ($stmt->execute()) {
        // Delete successful
        echo "delete successful";
        echo "<script> location.href='home_edit.php'; </script>";
        exit;
    } else {
        // Delete failed
        echo "Error deleting record: " . $stmt->error;
    }
    
    $stmt->close();
} else {
    echo "No p_id specified for deletion.";
}
?>
