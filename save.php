<?php
$file = 'announcements.json';

// Odczytaj istniejące ogłoszenia
$data = json_decode(file_get_contents($file), true);

// Pobierz dane z formularza
$newAnnouncement = json_decode(file_get_contents('php://input'), true);

// Dodaj nowe ogłoszenie
$data[] = $newAnnouncement;

// Zapisz ogłoszenia do pliku JSON
file_put_contents($file, json_encode($data, JSON_PRETTY_PRINT));

// Odpowiedź do klienta
echo json_encode(["status" => "success"]);
?>
