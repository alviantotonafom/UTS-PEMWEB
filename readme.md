# Detail proses pemenuhan business requirement :

Karena disini saya memakai src-template, jadinya saya tidak mulai dari tahap "composer create-project larave/laravel ."

1. Update composer dengan menjalankan "composer update"
2. Setup database yang akan digunakan pada file (.env)
3. Menyesuaikan fitur yang akan digunakan dengan menghapus beberapa fitur yang tidak diperlukan yang ada di dalam src-template 
4. Membuat model untuk Guru dan Tenaga Kependidikan dengan menjalankan "php artisan make:model GurudanTenagaKependidikan -m" -m di akhir berfungsi untuk menambahkan migrasi dari si model GurudanTenagaKependidikan kedalam Database/Migrations
5. Isi Model GurudanTenagaKependidikan
6. Isi migrasi GurudanTenagaKependidikan
7. Membuat sebuah controller untuk Guru dan Tenaga Kependidikan pada app/Http/Controllers/Admin dengan menjalankan "php artisan make:controller Admin/GurudanTenagaKependidikanController"
8. Atur GurudanTenagaKependidikan Controller
9. Membuat sebuah request untuk Guru dan Tenaga Kependidikan dengan menjalankan "php artisan make:request MassDestroyProductRequest.php" "php artisan make:request StoreProductRequest.php" "php artisan make:request UpdateProductRequest.php"
10. Mengatur seeder pada roles (karena sudah dibuat sebelumnya pada src-template jadi perlu disesuaikan dengan kebutuhan)
11. Menambahkan seeders untuk akses/permission untuk menjalankan fungsi (CRUD)
12. Membuat sebuah folder Guru dan Tenaga Kependidikan pada resource/views/admin untuk menampung file (index, create, edit, show) dengan menjalankan "mkdir resource/views/admin/gurudantenagakependidikans"
13. Membuat beberapa views pada resource/views/admin/gurudantenagakependidikans seperti file (index, create, edit, show) untuk kebutuhan (CRUD) dengan menjalankan "touch create.blade.php edit.blade.php index.blade.php show.blade.php"
14. Membuat sebuah folder Guru dan Tenaga Kependidikan pada resource/views untuk menampung file yang nantinya akan digunakan pada frontend dengan menjalankan "mkdir /resource/views/frontend"
15. Membuat sebuah folder lagi untuk menyimpan komponen (partials) pada file (index.blade.php) yang digunakan untuk halaman utama frontend dengan menjalankan "mkdir /resource/views/frontend/partials"
16. Membuat sebuah views pada resource/views/frontend untuk kebutuhan halaman utama frontend dengan menjalankan "touch index.blade.php"
17. Mengatur dan memilah file (index.blade.php) menjadi beberapa section seperti style, script, header, dan footer. Agar mudah untuk dilihat dan rapih
18. Membuat beberapa views partials dari file (index.blade.php) pada resource/views/frontend/partials dengan menjalankan "touch styles.blade.php scripts.blade.php header.blade.php footer.blade.php", kemudian disesuaikan
19. Membuat sebuah controller untuk kebutuhan Frontend dengan menjalankan "php artisan make:controller FrontendController"
20. Mengatur route pada file (web) untuk bisa mengakses direktori(frontend) dan dashboard panelnya