<?php
include('./connection.php');

if (isset($_GET['id'])) {
    $id = intval($_GET['id']); // Convertir l'ID en entier pour sécurité

    // Exécuter directement la requête de suppression
    $query = "DELETE FROM players WHERE id = $id";
    if (mysqli_query($conn, $query)) {
        header('Location: player.php?delete_msg=Record deleted successfully');
    } else {
        die("Error deleting record: " . mysqli_error($conn));
    }
} else {
    header('Location: player.php?delete_msg=No ID provided for deletion');
}
?>
