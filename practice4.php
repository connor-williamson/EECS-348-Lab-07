<?php
if (isset($_POST['size']) && !empty($_POST['size'])) {
    $size = intval($_POST['size']);

    echo "<table border='1'>";

    echo "<tr><th></th>";
    for ($column = 1; $column <= $size; $column++) {
        echo "<td>$column</td>";
    }
    echo "</tr>";

    for ($row = 1; $row <= $size; $row++) {
        echo "<tr>";
        echo "<td>$row</td>";
        
        for ($column = 1; $column <= $size; $column++) {
            echo "<td>" . ($row * $column) . "</td>";
        }
        
        echo "</tr>";
    }
    
    echo "</table>";
} else {
    echo "<p>Please enter the size of the multiplication table.</p>";
}
?>