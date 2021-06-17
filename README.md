# genshinPlaylist
PROYEK KUIS MATA KULIAH SISTEM BASIS DATA & PRAKTIKUM

1) Fulky Hariz Zulkarnaen	-- 1906381501

Pada proyek akhir yang kami buat menggunakan:
1) XAMPP
2) Ajax

# PENGGUNAAN XAMPP
1) Install XAMPP
2) Pada bagian Module Apache, tekan config
3) Pilih php.ini dan cari extension=pdo_pgsql , extension=pdo_sqlite , extension=pgsql
4) Hapus tanda ";" yang terletak di depan ketiga extension tersebut
5) Save file php.ini
6) Start module Apache

# INSTALASI PADA LOCALHOST
1) Download semua file/code pada repository ini
2) Extract File hasil download pada folder xampp/htdocs/
3) Ubah nama folder hasil extract menjadi 'fulky_kuis' (jika belum)
4) Nyalakan XAMPP sebagai environmentnya
5) Buatlah database dengan nama "fulky_kuis"
6) Connect ke database "fulky_kuis" dengan command \c rental;
7) Import file genshinOST.sql dengan menggunakan command \i 'file path'

   contoh:
   
   \i 'C:/Users/Public/Documents/genshinOST.sql'
   
   atau
   
   \i 'C:/xampp/htdocs/car/genshinOST.sql'
7) Buka Web Browser dan jalankan localhost/fulky_kuis/
