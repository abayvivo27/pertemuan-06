<?php

declare(strict_types=1);

require_once __DIR__ . '/Lingkaran.php';
require_once __DIR__ . '/Persegi.php';
require_once __DIR__ . '/PersegiPanjang.php';
require_once __DIR__ . '/Segitiga.php';
require_once __DIR__ . '/Email.php';
require_once __DIR__ . '/WhatsApp.php';
require_once __DIR__ . '/SMS.php';

/**
 * @param Notifikasi[] $notifikasi
 * @return string[]
 */
function kirimSemua(array $notifikasi, string $pesan): array
{
    $hasil = [];
    foreach ($notifikasi as $kanal) {
        if ($kanal instanceof Notifikasi) {
            $hasil[] = $kanal->kirim($pesan);
        }
    }

    return $hasil;
}

$bangunDatarList = [
    new Lingkaran(7),
    new Persegi(5),
    new PersegiPanjang(3, 4),
    new Segitiga(6, 4, 6, 5, 5),
];

echo "=== Perhitungan Bangun Datar ===\n";
foreach ($bangunDatarList as $bd) {
    echo get_class($bd) . " -> Luas: {$bd->luas()}, Keliling: {$bd->keliling()}\n";
}

echo "\n=== Pengiriman Notifikasi (Polimorfisme) ===\n";
$hasil = kirimSemua([
    new Email(),
    new WhatsApp(),
    new SMS(),
], 'Tugas Pertemuan 6 siap dikumpulkan.');

foreach ($hasil as $item) {
    echo $item . "\n";
}
