<?php

$friends = ["Aachal", "Subha", "Isha", "Puja", "Rekha"];
echo "The name at position 4 = " . $friends[3] . "<br>";
foreach ($friends as $friend) {
    echo "<br>" . $friend . "<br>";
}

$students = [
    "StudentName" => "Harsika kumari",
    "Course" => "Core PHP",
    "JoinDate" => "25 june 2024",
];

foreach ($students as $key => $value) {
    echo $key . "=>" . $value . "<br>";
}

echo "<br> <mark>" .$students["JoinDate"] . "</mark>";
