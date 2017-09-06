<?php

include '../config.php';
include '../listhelper.php';

$name = $_POST['selector'];
$person1 = $_POST['person1'];
$person2 = $_POST['person2'];
$week = $_POST['week_no'];
$reason = $_POST['info'];
$time = time();

$sql = "insert into elimination_process(selector,person1,person2,week_no,info,created) values('$name', '$person1', '$person2', '$week','$reason', '$time')";
$res = mysqli_query($con, $sql);

/*if ($res) {
    $$obj  = new Laxman();
        $res  = $obj->getlist("votes_count", "contestant like ".$name);
        $row = mysqli_fetch_row($res);
        if (count($row) > 0) {
            # code...
        }
    $sql = "insert into votes_count(contestant,week_no,votes) values('$name', '$person1', '$person2', '$week','$reason', '$time')";
    $res1 = mysqli_query($con, $sql);
    /*header("refresh:5,login1.php");*/
//} /*else {
/*}*/

if ($res) {
    echo "Nominee Added Successfully. Thanks.";
    header("refresh:2,eviction.php");
}