<?php

$con = mysqli_connect("localhost", 'root', "Infi@1234", 'Bigboss');

if (!$con) {
    die("Please check db configurations".mysqli_connect_error());
}

