<?php

declare(strict_types=1);

require_once __DIR__ . '/Notifikasi.php';

class SMS implements Notifikasi
{
    public function kirim(string $pesan): string
    {
        return "[SMS] Terkirim: {$pesan}";
    }
}
