<?php

Use Hannalackner\Weather\Day;
Use Hannalackner\Weather\History;

require 'vendor/autoload.php';

$history = new History();
$history->addDay(new Day("2024-05-04", "sonnig"));

$tag2 = new Day('2024-04-29',"schnee");
$history->addDay($tag2);

$date = $_GET['date'];
$weather = $history->getWeatherDate($date);
echo "Das Wetter am  $date war $weather";