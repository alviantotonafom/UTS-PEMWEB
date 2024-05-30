# Detail proses pemenuhan business requirement :

Karena disini saya memakai src-template, jadinya saya tidak mulai dari tahap "composer create-project larave/laravel ."

1. Update composer dengan menjalankan "composer update"
2. Setup database yang akan digunakan pada file (.env)
3. Menghasilkan kunci aplikasi baru untuk file (.env) dengan menjalankan "php artisan key:generate"
4. Menyesuaikan fitur yang akan digunakan dengan menghapus beberapa fitur yang tidak diperlukan yang ada di dalam src-template 
5. Membuat model untuk Guru dan Tenaga Kependidikan dengan menjalankan "php artisan make:model GurudanTenagaKependidikan -m" -m di akhir berfungsi untuk menambahkan migrasi dari si model GurudanTenagaKependidikan kedalam Database/Migrations
6. Isi Model GurudanTenagaKependidikan
7. Isi migrasi create_gurudantenagakependidikans_table
8. Menjalankan ulang semua migrasi dari awal setelah menyeseuaikan semua tabel di database src-template ke yang baru. dengan menjalankan "php artisan migrate:fresh"
9. Membuat symbolic link dari direktori storage/app/public ke public/storage dengan menjalankan "php artisan storage:link"
10. Mengubah izin akses direktori dan semua isinya di dalam folder storage menjadi 777 dengan menjalankan "chmod 777 -R storage/*", Izin 777 berarti semua pengguna (pemilik, grup, dan publik) memiliki izin penuh untuk membaca (r), menulis (w), dan mengeksekusi (x) file dan folder. Opsi -R (recursive) memastikan bahwa perubahan izin diterapkan pada semua file dan subdirektori di dalam direktori storage.
11. Membuat sebuah controller untuk Guru dan Tenaga Kependidikan pada app/Http/Controllers/Admin dengan menjalankan "php artisan make:controller Admin/GurudanTenagaKependidikanController"
12. Atur GurudanTenagaKependidikan Controller
13. Membuat sebuah request untuk Guru dan Tenaga Kependidikan dengan menjalankan "php artisan make:request MassDestroyGurudanTenagaKependidikanRequest.php" "php artisan make:request StoreGurudanTenagaKependidikanRequest.php" "php artisan make:request UpdateGurudanTenagaKependidikanRequest.php"
14. Mengatur seeder pada roles (karena sudah dibuat sebelumnya pada src-template jadi perlu disesuaikan dengan kebutuhan)
15. Menambahkan seeders untuk akses/permission untuk menjalankan fungsi (CRUD)
16. Membuat sebuah folder Guru dan Tenaga Kependidikan pada resource/views/admin untuk menampung file (index, create, edit, show) dengan menjalankan "mkdir resource/views/admin/gurudantenagakependidikans"
17. Membuat beberapa views pada resource/views/admin/gurudantenagakependidikans seperti file (index, create, edit, show) untuk kebutuhan (CRUD) dengan menjalankan "touch create.blade.php edit.blade.php index.blade.php show.blade.php"
18. Membuat sebuah folder Guru dan Tenaga Kependidikan pada resource/views untuk menampung file yang nantinya akan digunakan pada frontend dengan menjalankan "mkdir /resource/views/frontend"
19. Membuat sebuah folder lagi untuk menyimpan komponen (partials) pada file (index.blade.php) yang digunakan untuk halaman utama frontend dengan menjalankan "mkdir /resource/views/frontend/partials"
20. Membuat sebuah views pada resource/views/frontend untuk kebutuhan halaman utama frontend dengan menjalankan "touch index.blade.php"
21. Mengatur dan memilah file (index.blade.php) menjadi beberapa section seperti style, script, header, dan footer. Agar mudah untuk dilihat dan rapih
22. Membuat beberapa views partials dari file (index.blade.php) pada resource/views/frontend/partials dengan menjalankan "touch styles.blade.php scripts.blade.php header.blade.php footer.blade.php", kemudian disesuaikan
23. Membuat sebuah controller untuk kebutuhan Frontend dengan menjalankan "php artisan make:controller FrontendController"
24. Mengatur route pada file (web) untuk bisa mengakses sekaligus mengkonfigurasi direktori(frontend Guru dan Tenaga Kependidikan) dan dashboard panelnya