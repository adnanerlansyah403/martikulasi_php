<?php

$names = ["Adnan", "Erlansyah", "Hardiansyah"];

for ($i = 0; $i < count($names); $i++) {
    echo "Hello $names[$i], Selamat Datang" . PHP_EOL;
}

foreach ($names as $key => $name) {
    echo "Data $name " . PHP_EOL;
}

$persons = [
    "first_name" => "Adnan",
    "middle_name" => "Erlansyah",
    "last_name" => "Hardiansyah"
];

foreach ($persons as $key => $value) {
    echo "$key : $value " . PHP_EOL;
}
