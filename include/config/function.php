<?php 

include('dblink.php');

function display_data(){
    global $conn;
    $query = "SELECT * FROM product";
    $result = mysqli_query($conn, $query);
   return $result;
}
?>