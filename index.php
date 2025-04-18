<?php

require_once 'consts.php';
require_once 'functions.php';

$data = getData(API_URL);
$daysMessage = getUntilMessage($data["days_until"]);

renderTemplate('head', $data);
renderTemplate('main', array_merge($data, [
    "days_message" => $daysMessage
]));
renderTemplate('footer');
