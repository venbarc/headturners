<?php

$conn = mysqli_connect('localhost', 'root', '', 'headturners_db');

if(!$conn)
{
    die("Connection failed: ". mysqli_connect_error());
}
else
{
    // echo "Successfully Connected !";
}
