<?php
if(isset($_POST["id"]))
{
    $connect = mysqli_connect("localhost", "root", "", "llbn");
    $query = "SELECT * FROM pages WHERE id = '". $_POST["id"]."' order by id";
    $result = mysqli_query($connect, $query);
    $output = '';
    while($row = mysqli_fetch_array($result))
    {
        $output .= $row["code"];
    }
    echo $output;
}
