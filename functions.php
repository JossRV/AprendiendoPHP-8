<?php

function renderTemplate(string $template, array $data = [])
{
    extract($data);
    require "template/$template.php";
}

function getData(string $url): array
{
    // Cuando solamente voy a hacer GET
    $result = file_get_contents($url);
    // convertir el resultado a json para ser utilizado
    $data = json_decode($result, true);

    return $data;
}

function getUntilMessage(int $days): string
{
    return match ($days) {
        $days === 0 => "Hoy se estrena",
        $days === 1 => "Mañana se estrena",
        $days < 7 => "Esta semana se estrena",
        $days < 30 => "Este ,es se estrena",
        default => "$days días hasta el estreno",
    };
}
