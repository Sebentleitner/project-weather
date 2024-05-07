<?php

Use Hannalackner\Weather\Day;
Use Hannalackner\Weather\History;

require 'vendor/autoload.php';

$history = new History();
$history->addDay(new Day("2024-05-04", "sonnig"));
$history->addDay(new Day("2024-05-05", "schnee"));
$history->addDay(new Day("2024-05-06", "Regnerisch"));




$date = $_GET['date'];
$weather = $history->getWeatherDate($date);
echo "Das Wetter am  $date war $weather";