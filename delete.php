<?php
include('./connection.php');

if (isset($_GET['id'])) {
    $id = intval($_GET['id']);
    
    $query = "DELETE FROM players WHERE id = $id";
    if (mysqli_query($conn, $query)) {
        header('Location: player.php?delete_msg=Record deleted successfully');
    } else {
        die("Error deleting record: " . mysqli_error($conn));
    }
} 
?>
