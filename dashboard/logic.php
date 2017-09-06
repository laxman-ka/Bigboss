<?php

include "../config.php";

$sql = "Select * from elimination_process";

$res = mysqli_query($con, $sql);

while ($row = mysqli_fetch_assoc($res)) {
    $rows[] = $row;
}


$names = [];
foreach ($rows as $key => $value) {
    $names[] = $value['person1'];
    $names[] = $value['person2'];
}

echo "<pre>";
print_r($names);
print_r(array_count_values($names));


$final = array_count_values($names);

foreach ($final as $key => $value) {
    $sql = "insert into  votes_count(contestant, week_no, votes) values('$key', 'Week3', '$value')";

    $res = mysqli_query($con, $sql);
}
