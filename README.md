# binotify

## Development notes

1. Buat branch baru untuk setiap fitur yang akan dikerjakan dengan nama branch `feature/<nama_fitur>`
2. Setelah selesai mengerjakan fitur, buat pull request ke branch `develop`
3. Setelah pull request di-merge, hapus branch asal
4. Jika terdapat bug, buat branch baru dengan nama `fix/<nama_fitur>`

### Frontend

1. Buat controller baru di `app/controllers` sesuai dengan nama fitur. Gunakan PascalCase untuk nama controller
2. Buat view baru di `app/views/<nama_controller>/<nama_view>`, dengan nama controller lowercase. Untuk nama file view, gunakan snake_case.
3. Tambahkan view dalam controller.
   Note: jangan lupa tambahkan views header dan footer yang ada di `app/views/templates`
4. Jika dibutuhkan style baru, tambahkan style di `public/css/<nama_controller>/<nama_views>.css`. Include style tersebut di `app/views/templates/header.php`

---

## Panduan Pengerjaan

Berikut adalah hal yang harus diperhatikan untuk pengumpulan tugas ini:

1. Buatlah grup pada Gitlab dengan format "IF3110-2022-KXX-01-YY", dengan XX adalah nomor kelas dan YY adalah nomor kelompok.
2. Tambahkan anggota tim pada grup anda.
3. **Fork** pada repository ini dengan organisasi yang telah dibuat.
4. Ubah hak akses repository hasil Fork anda menjadi **private**.
5. Hal-hal yang harus diperhatikan.
    - Silakan commit pada repository anda (hasil fork)
    - Lakukan beberapa commit dengan pesan yang bermakna, contoh: “add register form”, “fix logout bug”, jangan seperti “final”, “benerin dikit”, “fix bug”.
    - Disarankan untuk tidak melakukan commit dengan perubahan yang besar karena akan mempengaruhi penilaian (contoh: hanya melakukan satu commit kemudian dikumpulkan).
    - Sebaiknya commit dilakukan setiap ada penambahan fitur.
    - Commit dari setiap anggota tim akan mempengaruhi penilaian.
    - Jadi, setiap anggota tim harus melakukan commit yang berpengaruh terhadap proses pembuatan aplikasi.
    - Sebagai panduan bisa mengikuti [semantic commit](https://gist.github.com/joshbuchea/6f47e86d2510bce28f8e7f42ae84c716).
6. Buatlah file README yang berisi:
    - Deskripsi aplikasi web
    - Daftar requirement
    - Cara instalasi
    - Cara menjalankan server
    - Screenshot tampilan aplikasi (tidak perlu semua kasus, minimal 1 per halaman), dan
    - Penjelasan mengenai pembagian tugas masing-masing anggota (lihat formatnya pada bagian pembagian tugas).
