# Lab Sheet Pertemuan 6: Abstraction dan Polymorphism

## Kapan Memilih `abstract class` vs `interface`?

### Kapan Memilih `abstract class`
* Ketika beberapa kelas turunan memiliki **hubungan pewarisan yang erat ("is-a")**, seperti `Lingkaran`, `Persegi`, `PersegiPanjang`, dan `Segitiga` yang semuanya adalah `BangunDatar`.
* Ketika ingin menyediakan **properti, konstruktor, atau method konkret (implementasi bawaan)** bersama yang dapat dipakai ulang oleh seluruh kelas anak, sambil mewajibkan method tertentu (`abstract`) diimplementasikan secara spesifik.
* Di PHP, sebuah kelas hanya bisa `extends` satu `abstract class`.

### Kapan Memilih `interface`
* Ketika ingin menetapkan **kontrak perilaku ("can-do")** yang dapat diterapkan oleh berbagai kelas berbeda yang tidak harus satu keluarga pewarisan, seperti `Email`, `WhatsApp`, dan `SMS` yang sama-sama bisa `kirim(string $pesan): string` lewat `Notifikasi`.
* Ketika sebuah kelas perlu mengadopsi **lebih dari satu kontrak kemampuan** sekaligus (`implements A, B`).
* Sangat ideal untuk mendukung **polimorfisme** pada fungsi seperti `kirimSemua()` agar pemanggil cukup bergantung pada tipe `Notifikasi`, bukan pada detail implementasi tiap kanal.
