<?php
$connect = mysqli_connect("localhost", "root", "", "online voting") or die("not connected!");
if ($connect) {
    echo "Connected!";
} else {
    echo "not conncted!";
}




?>