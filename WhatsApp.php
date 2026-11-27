<?php

declare(strict_types=1);

require_once __DIR__ . '/Notifikasi.php';

class WhatsApp implements Notifikasi
{
    public function kirim(string $pesan): string
    {
        return "[WhatsApp] Terkirim: {$pesan}";
    }
}
