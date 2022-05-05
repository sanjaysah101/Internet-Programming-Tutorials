<?php 
    include("include/connection.php");

    $sql = "select 
                id, 
                machine_name, 
                description 
            from 
                tbl_machine
            where
                is_delete = 0
            order by
                machine_name
            limit 
                1, 10";
    
    $result = $conn->query($sql);
    // print_r($result);
    if($result->num_rows){
        echo "<table border=1 align=center>";
        while($row = $result->fetch_assoc()){
            // echo "<pre>";
            // print_r($row);
            // echo "</pre>";
            // echo $row['machine_name'],"</br>";


            echo "<tr>";
            foreach($row as $key => $value){
                echo "<td>", $row[$key], "</td>";
            }
            // echo "<td>", $row['id'], "</td>";
            // echo "<td>", $row['machine_name'], "</td>";
            // echo "<td>", $row['description'], "</td>";
        }
        echo "</table>";
    }
    else{
        echo("No record found.");
    }
    
?>