<?php
//function.php


function fill_artist($con)
{
    global $con;

    $output = '';
    $result = $con->query("SELECT * FROM artists 
    ORDER BY name ASC");
    $rows=$result->fetch_all(MYSQLI_ASSOC);

    foreach($result as $row)
    {
        $output .= '<option value="'.$row["id"].'">'.$row["name"].'</option>';
    }
    return $output;
}

function fill_album($con)
{
    global $con;

    $output = '';
    $result = $con->query("SELECT * FROM albums 
    ORDER BY title ASC");
    $rows=$result->fetch_all(MYSQLI_ASSOC);

    foreach($result as $row)
    {
        $output .= '<option value="'.$row["id"].'">'.$row["title"].'</option>';
    }
    return $output;
}
