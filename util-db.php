<?php
function get_db_connection(){
    // Create connection
    $conn = new mysqli('157.245.89.132', 'tranaaro_FPuser', '{6h(r&ps!K2', 'tranaaro_FP');
    
    // Check connection
    if ($conn->connect_error) {
      return false;
    }
    return $conn;
}
?>
