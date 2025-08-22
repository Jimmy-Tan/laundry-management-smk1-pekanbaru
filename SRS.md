<html>
<body>


<p align="center">
<img src="https://github.com/Montisma/Sistem-Pengelolaan-Laundry/blob/214c5fffefb0f73a849ef568a846369a17efe66d/Image/Software%20Requirements%20Specification-1%20(1)-1.png" >
</p>






</body>
</html>

**BAB I Pendahuluan**
----------
1.1 Tujuan
----------
Dokumen Software Requirement Specification (SRS) merupakan dokumen spesifikasi perangkat lunak untuk membangun "Sistem Pengelola Laundry SMK Negeri 1 Pekanbaru". Dokumen ini dibangun untuk memudahkan pihak sekolah SMK Negeri 1 Pekanbaru untuk mengelola data-data customer yang ada di Laundry sekolah, sistem ini juga mengelola data inventori dari laundry. Sehingga dokumen ini dapat dijadikan acuan teknis untuk membangun sistem "Sistem Pengelola Laundry SMK Negeri 1 Pekanbaru".

1.2   Lingkup
----------
Sistem Pengelola Laundry SMK Negeri 1 Pekanbaru merupakan aplikasi yang kami bangun untuk mempermudah siswa-siswi SMK Negeri 1 dalam melakukan pengelolaan yang ada pada unit operasi sekolah yaitu unit operasi laundry sehingga memudahkan para siswa dalam melihat data-datanya dan mengelola data-data cucian yang ada, mengelola persediaan barang maupun barang yang dibutuhkan dalam menjalankan usaha laundry yang ada di SMKN 1 Pekanbaru seperti deterjen, pelembut kain, bahan kimia pencucian, pengharum pakaian, hanger, hingga kemasan.

1.3    Akronim, singkatan, definisi
----------

| Istilah | Definisi |
| ------ | ------ |
| SRS |Software Requirement Specification|
| Login | Digunakan untuk mengakses aplikasi |
| Software Requirement Specification | Perangkat lunak yang akan dibuat dan sebagai menjembatani komunikasi pembuat dengan pengguna |
| Use Case | Situasi dimana  sistem anda digunakan untuk memenuhi satu atau lebih kebutuhan pemakaian anda |

1.4   Referensi
----------
Referensi yang digunakan dalam perangkat lunak ini adalah:
https://play.google.com/store/apps/details?id=id.matik.application.matiklaundry

1.5   Overview
----------

Bab selanjutnya yaitu menjelaskan sistem yang diterapkan pada aplikasi. Menjelaskan gambaran umum dari aplikasi, sistem interface aplikasi dan alur sistemnya. Bab terakhir menjelaskan tentang setiap fungsi yang digunakan secara teknisnya. Pada bab 2 dan 3 merupakan deskripsi dari aplikasi yang akan diterapkan pada aplikasi yang dibuat.

**BAB II Gambaran umum**
----------
Pada zaman era globalisasi perkembangan teknologi begitu sangat pesat, salah satunya ialah perkembangan teknologi di bidang software engineering dimana software engineering dapat digunakan dalam kehidupan sehari - hari .dalam studi kasus Proyek Framework ini kami menganalisis kebutuhan suatu sekolah yaitu SMK Negeri 1 Pekanbaru. Kasus yang kami peroleh adalah tidak adanya pencatatan bagi siswa yang menggunakan unit operasi laundry sekolah sebagai sarana tempat kerja sekolah. Maka dari itu kami merancang sebuah sistem sesuai dengan kebutuhan sekolah dengan menerapkan sistem pengelolaan laundry dan juga inventori laundry. Sehingga memudahkan para siswa dalam melakukan pengelolaan data-data dari customer serta pendataan barang-barang inventori yang dibutuhkan dalam suatu laundry. Software yang kami buat ini berbasis website dimana website sebagai admin, siswa, pelanggan. Sistem yang kami buat di dalamnya terdapat pemesanan online, angka pakaian kotor, bill pembayaran, status pesanan laundry, laporan peforma laundry, riwayat pelanggan sedangkan bagian inventori memiliki fungsi pencatatan barang masuk, pencatatan barang keluar, laporan pemasukan barang serta pengeluaran barang. Berikut akan kami jelaskan sistem software kami, admin fungsi utama yaitu :
- Menghasilkan laporan harian, mingguan, atau bulanan tentang kinerja laundry.
- Melihat data tentang jumlah pesanan, pendapatan, dan tren pelanggan.
- Mengelola status pesanan (dalam proses, siap diambil, sudah diambil, dll).
- Melihat detail pesanan, termasuk jenis cucian, instruksi, dan waktu pengambilan.
- Input Pencatatan Barang Masuk
- Input Pencatatan Barang keluar
- Laporan pemasukan dan pengeluaran stok barang

Berikut ini fungsi customer :
- Melacak status pesanan mereka (dalam proses, siap diambil, selesai).
- Menerima notifikasi dari whatsapp ketika cucian sudah siap diambil.
- Mengakses riwayat pesanan sebelumnya.
- Melihat detail pesanan sebelumnya, termasuk tagihan.
- Memberikan ulasan dan peringkat atas layanan yang diterima.
- View Pencatatan Barang Masuk
- View Pencatatan Barang keluar
- View Laporan pemasukan dan pengeluaran stok barang


2.1   Perspektif produk
----------
Sistem pengelola laundry SMK Negeri 1 Pekanbaru adalah sebuah sistem pengelolaan sebuah laundry di Sekolah yang diaplikasikan pada website. Terdapat 2 jenis yaitu Siswa dan Pelanggan. Pengolahan data di kelola oleh siswa pada website dan pelanggan hanya melihat data dan status pencucian pada website.
Pada sistem pengelola laundry data ini akan menampilkan isi data dan persediaan barang yang sudah diinputkan oleh siswa.

**2.1.1 Antarmuka sistem**

![enter image description here](https://github.com/Montisma/Sistem-Pengelolaan-Laundry/blob/ad5f71648f4c335b54f2afb046b3c12b07712bb9/Image/Use%20case%20diagram.png)

Sistem Pengelolaan Laundry memiliki 2 user yaitu Siswa dan Pelanggan. Siswa memiliki fungsi yaitu mengelola data. Pelanggan untuk melihat status dari detail dari pemesanan.

**2.1.2 Antarmuka pengguna**

Antarmuka pengguna merupakan proses langsung  yang akan dilihat oleh pelanggan. Aplikasi Laundry ini memungkinkan pengguna untuk melakukan pemesanan laundry, melacak pesanan, dan berinteraksi dengan layanan pelanggan.

|  |  |
|--|--|
| ![enter image description here](https://github.com/Montisma/Sistem-Pengelolaan-Laundry/blob/7c44cb9bc6d76436d9b00844a76ea5207e3da573/Image/1%20Tampilan%20Awal.png) Pada halaman ini menampilkan halaman utama dari Sistem ini.| ![enter image description here](https://github.com/Montisma/Sistem-Pengelolaan-Laundry/blob/7c44cb9bc6d76436d9b00844a76ea5207e3da573/Image/2%20Tampilan%20Tentang.png) Pada halaman ini menjelaskan mengenai Sistem Laundry ini.|
| ![enter image description here](https://github.com/Montisma/Sistem-Pengelolaan-Laundry/blob/7c44cb9bc6d76436d9b00844a76ea5207e3da573/Image/3%20Tampilan%20Hubungi%20Kami.png) Pada halaman ini menampilkan informasi mengenai kontak yang dapat dihubungi.| ![enter image description here](https://github.com/Montisma/Sistem-Pengelolaan-Laundry/blob/7c44cb9bc6d76436d9b00844a76ea5207e3da573/Image/4%20Tampilan%20Login.png) Pada halaman login, user ataupun admin diminta untuk mengisi username dan password|
| ![enter image description here](https://github.com/Montisma/Sistem-Pengelolaan-Laundry/blob/7c44cb9bc6d76436d9b00844a76ea5207e3da573/Image/5%20Tampilan%20Register.png) Pada Register,  user yang tidak memiliki akun maka diminta untuk mengisi username, email, dan password.| ![enter image description here](https://github.com/Montisma/Sistem-Pengelolaan-Laundry/blob/7c44cb9bc6d76436d9b00844a76ea5207e3da573/Image/6%20Tampilan%20Customer.png) Pada halaman user, terdapat Cuci Baju Anda yang menampilkan cucian dan harga cucian, kemudian Status Cucian yang menampilkan status pencucian.|
| ![enter image description here](https://github.com/Montisma/Sistem-Pengelolaan-Laundry/blob/7c44cb9bc6d76436d9b00844a76ea5207e3da573/Image/7%20Tampilan%20Detail%20Paket.png) Disaat user memilih tombol Lihat Paket Cucian, akan menuju ke halaman ini yang berisi detail-detail pencucian secara rinci.| ![enter image description here](https://github.com/Montisma/Sistem-Pengelolaan-Laundry/blob/7c44cb9bc6d76436d9b00844a76ea5207e3da573/Image/8%20Tampilan%20Ubah%20Profil.png) Pada halaman ini, user dapat mengubah data diri.|
| ![enter image description here](https://github.com/Montisma/Sistem-Pengelolaan-Laundry/blob/7c44cb9bc6d76436d9b00844a76ea5207e3da573/Image/9%20Tampilan%20Siswa.png) Pada halaman Siswa, menampilkan total dan menampilkan pencucian-pencucian dari pelanggan, disini juga siswa dapat mencari nama pelanggan untuk melihat berapa banyak pelanggan telah mencuci.| 
| ![enter image description here](https://github.com/Montisma/Sistem-Pengelolaan-Laundry/blob/7c44cb9bc6d76436d9b00844a76ea5207e3da573/Image/10%20Tampilan%20Tambah%20Cucian.png) Pada halaman ini menampilkan cucian pelanggan dan juga terdapat tombol tambah cucian.| ![enter image description here](https://github.com/Montisma/Sistem-Pengelolaan-Laundry/blob/7c44cb9bc6d76436d9b00844a76ea5207e3da573/Image/11%20Tampilan%20Tambah%20Cucian.png) Apabila tombol tambah cucian dipencet, maka akan muncul pop up yang berisi username(yang akan dicuci) jenis cucian dan berat cucian.|
| ![enter image description here](https://github.com/Montisma/Sistem-Pengelolaan-Laundry/blob/7c44cb9bc6d76436d9b00844a76ea5207e3da573/Image/12%20Tampilan%20Cucian.png) Pada halaman ini, menampilkan seluruh cucian pelanggan yang belum dicuci mesin cuci. Apabila siswa mencuci, siswa harus mengisi data pelanggan agar status cuciannya telah tercuci| ![enter image description here](https://github.com/Montisma/Sistem-Pengelolaan-Laundry/blob/7c44cb9bc6d76436d9b00844a76ea5207e3da573/Image/13%20TampilanCucian.png) Apabila siswa memilih ubah, maka akan kuncul pop up yang berisi username(yang akan dicuci), detergen, dan pewangi yang harus diisi oleh siswa.|
| ![enter image description here](https://github.com/Montisma/Sistem-Pengelolaan-Laundry/blob/7c44cb9bc6d76436d9b00844a76ea5207e3da573/Image/14%20Tampilan%20Laporan.png) Pada halaman ini siswa dapat melihat total penggunaan detergen dan pewangi. Terdapat fitur masukan barang dan detail| ![enter image description here](https://github.com/Montisma/Sistem-Pengelolaan-Laundry/blob/7c44cb9bc6d76436d9b00844a76ea5207e3da573/Image/15%20Tampilan%20Laporan.png) Apabila siswa memilih detail, maka akan muncul laporan detail mengenai penggunaan barang, nama pelanggan, tanggal, berat, dan jumlah. Pada tampilan ini juga siswa dapat menyaring dan mensortir laporan.|
| ![enter image description here](https://github.com/Montisma/Sistem-Pengelolaan-Laundry/blob/4d494dc5c5a4817d2666656857c48c410ce13c05/Image/16%20Tampilan%20Laporan.png) Apabila siswa memilih barang masuk, maka siswa akan memasukkan data jumlah barang yang masuk.|
 
**2.1.3 Antarmuka perangkat keras**

![enter image description here](https://github.com/Montisma/Sistem-Pengelolaan-Laundry/blob/2d56bfed46e38aba3147666e2d2cd8c495083414/Image/antarmukaperangkatkeras.png)

Perangkat keras  pada Sistem pengelolaan Laundry merujuk pada perangkat fisik yang akan  menjalankan aplikasi seperti : 
1. Server: menyimpan data pelanggan, pesanan, dan informasi lainnya
2. Peralatan mobile: terhubung ke aplikasi
3. Printer dan scanner untuk menerima dan mencetak pesanan
4. Terminal kasir: menerima pembayaran dari pelanggan
5. Peralatan laundry: melakukan proses pencucian pakaian

**2.1.4 Antarmuka perangkat lunak**

Antarmuka perangkat lunak Sistem Pengelolaan Laundry digunakan untuk mengotomatiskan berbagai proses yang telah dirancang untuk menjalankan aplikasi laundry

**2.1.5 Antarmuka Komunikasi**

Antarmuka komunikasi yang digunakan untuk mengoperasikan Perangkat Lunak Sistem Pengelola Laundry SMK Negeri 1 Pekanbaru antara lain :
1. Kabel Lan
2. Wifi

**2.1.6 Batasan memori**

Tidak ada

**2.1.7 Operasi-operasi**

| Operasi | Fungsi |
| ------ | ------ |
| Login | Digunakan untuk mengakses sistem |
| Register | Digunakan untuk membuat akun untuk mengakses sistem |
| Input Data | Digunakan untuk memasukkan data-data |
| Kembali | Digunakan untuk kembali ke halaman sebelumnya |
| Edit | Digunakan untuk mengubah data |
| Hapus | Digunakan untuk menghapus data |
| View | Digunakan untuk menampilkan data |
| Simpan | Digunakan untuk menyimpan data |

**2.1.8 Kebutuhan adaptasi**

Tidak ada
   
2.2 Spesifikasi Kebutuhan fungsional
----------
![](https://github.com/Montisma/Sistem-Pengelolaan-Laundry/blob/58929e5328232d8fa5b049f014f439d0eac6ff66/Image/Kebutuhan%20Fungsional.png)
   
**2.2.1 Siswa Register**

Use Case : Register

Diagram : 
![](https://github.com/Montisma/Sistem-Pengelolaan-Laundry/blob/b1e605c3702e54841702629c6a91a5ec9c2c0174/Image/register.png)

Deskripsi Singkat
Deskripsi Singkat : Siswa melakukan register terlebih dahulu sebelum masuk ke tampilan login. Deskripsi langkah-langkah
1. Siswa melakukan register dengan username dan password
2. Sistem melakukan validasi data register
3. Bila sukses sistem akan mengarahkan ke halaman login
4. Bila gagal sistem akan menampilkan peringatan dan redirect ke halaman register

**2.2.2 Siswa Login**

Use Case: Login

Diagram: 
![](https://github.com/Montisma/Sistem-Pengelolaan-Laundry/blob/2d56bfed46e38aba3147666e2d2cd8c495083414/Image/login.png)

Deskripsi Singkat : Siswa melakukan login terlebih dahulu sebelum masuk ke tampilan home. Deskripsi langkah-langkah
1. Siswa melakukan login dengan username dan password yang sudah ter-regis
2. Sistem melakukan validasi data login
3. Bila sukses sistem akan mengarahkan ke halaman home
4. Bila gagal sistem akan menampilkan peringatan dan redirect ke halaman login

      
**2.2.3 Siswa mengelola data cucian pelanggan**

Use Case : mengelola data cucian pelanggan

Diagram:
![](https://github.com/Montisma/Sistem-Pengelolaan-Laundry/blob/f6a522128505baa629e83516880417a3c3ddd9b0/Image/Mengelola%20data%20cucian.png)
      
Deskripsi Singkat : Siswa dapat mengelola data cucian pelanggan. Deskripsi langkah-langkah
1. Siswa dapat menginput data dari cucian yang sudah dipesan oleh pelanggan ke sistem.
2. Data cucian pelanggan yang diinput berupa deskripsi pemesanan yang sudah dilakukan seperti jenis barang cucian, berat cucian, total pakaian.

**2.2.4 Siswa mengelola data pesanan**

Use Case : mengelola data pesanan

Diagram:
![](https://github.com/Montisma/Sistem-Pengelolaan-Laundry/blob/2d56bfed46e38aba3147666e2d2cd8c495083414/Image/Mengelola%20data%20pesanan.png)

Deskripsi Singkat : Siswa dapat mengelola data pesanan yang ada. Deskripsi langkah-langkah
1. Siswa menginput data dari pesanan pelanggan yang sudah melakukan pemesanan jasa laundry ke sistem.
2. Data-data pesanan dikelola seperti status pemesanan, jumlah pesanan

**2.2.5 Siswa mengelola data barang**

Use Case : mengelola data barang

Diagram:
![](https://github.com/Montisma/Sistem-Pengelolaan-Laundry/blob/769c11660f91c2cd65e01bbeab941c376daf3b0b/Image/USE%20CASE%20MENGELOLA%20DATA%20BARANG.png)

Deskripsi Singkat : Siswa melakukan input data barang yang masuk untuk tambahan stock barang dan sistem menyimpan data pada database. Deskripsi Langkah-langkah
1. Siswa  melakukan pengelolaan data barang baik data masuk maupun data keluar beserta jumlahmya.
2. Siswa mengklik tombol simpan.
3. Sistem menyimpan data barang.

**2.2.6 Siswa mengelola stok barang**

Use Case : mengelola stok barang

Diagram:
![](https://github.com/Montisma/Sistem-Pengelolaan-Laundry/blob/769c11660f91c2cd65e01bbeab941c376daf3b0b/Image/USE%20CASE%20MENGELOLA%20STOK%20BARANG.png)

Deskripsi Singkat : Siswa dapat mengelola stok barang yang telah tersimpan ketika barang keluar maka stok akan berkurang dan jika barang masuk maka stok akan bertambah. Deskripsi Langkah-langkah
1. Siswa melakukan pengelolaan stok barang beserta jumlahmya.
2. Siswa mengklik tombol simpan.
3. Sistem menyimpan data stok barang.

**2.2.7 Siswa melihat laporan barang**

Use Case : melihat laporan barang

Diagram:
![](https://github.com/Montisma/Sistem-Pengelolaan-Laundry/blob/769c11660f91c2cd65e01bbeab941c376daf3b0b/Image/USE%20CASE%20MELIHAT%20LAPORAN%20BARANG.png)

Deskripsi Singkat : Siswa dapat melihat laporan barang yang telah tersimpan seperti banyak jumlah barang keluar maka stok akan berkurang. Deskripsi Langkah-langkah
1. Siswa dapat melihat laporan dari hasil penggunaan barang dan pemasukkan yang terjadi.

**2.2.8 Pelanggan Register**

Use Case: Pelanggan Register

Diagram:
![](https://github.com/Montisma/Sistem-Pengelolaan-Laundry/blob/2d56bfed46e38aba3147666e2d2cd8c495083414/Image/pelangganregister.png)

Deskripsi Singkat : Pelanggan melakukan register terlebih dahulu sebelum masuk ke tampilan login. Deskripsi langkah-langkah
1. Pelanggan melakukan register dengan username dan password
2. Sistem melakukan validasi data register
3. Bila sukses sistem akan mengarahkan ke halaman login
4. Bila gagal sistem akan menampilkan peringatan dan redirect ke halaman register

**2.2.9 Pelanggan Login**

Use Case: Pelanggan Login

Diagram:
![enter image description here](https://github.com/Montisma/Sistem-Pengelolaan-Laundry/blob/2d56bfed46e38aba3147666e2d2cd8c495083414/Image/pelangganlogin.png)

Deskripsi Singkat : Pelanggan melakukan login terlebih dahulu sebelum masuk ke tampilan home. Deskripsi langkah-langkah
1. Pelanggan melakukan login dengan username dan password yang sudah ter-regis 
2. Sistem melakukan validasi data login
3. Bila sukses sistem akan mengarahkan ke halaman home
4. Bila gagal sistem akan menampilkan peringatan dan redirect ke halaman login

**2.2.10 Cek Status Cucian**

Use Case: Cek Status Cucian

Diagram:
![enter image description here](https://github.com/Montisma/Sistem-Pengelolaan-Laundry/blob/2d56bfed46e38aba3147666e2d2cd8c495083414/Image/cekstatus.png)

Deskripsi Singkat : Pelanggan dapat melihat status cucian yang sedang dalam pesanan
1. Pelanggan yang sudah melakukan pemesanan dapat melihat status cucian pesanan
2. Status cucian berupa deskripsi seperti sudah selesai, belum selesai

**2.2.11 Melihat detail cucian**

Use Case: Melihat detail cucian

Diagram:
![enter image description here](https://github.com/Montisma/Sistem-Pengelolaan-Laundry/blob/2d56bfed46e38aba3147666e2d2cd8c495083414/Image/melihatdetailcucian.png)

Deskripsi Singkat : Pelanggan dapat melihat detail dari pesanan yang sedang dicuci
1. Pelanggan yang sudah melakukan pemesanan dapat melihat detail cucian pesanan
2. Status cucian berupa deskripsi seperti tanggal pemesanan, total berat pakaian, banyak pakaian

2.3   Spesifikasi Kebutuhan non-fungsional
----------
- Tabel Kebutuhan Non-Fungsional 

   | No | Deskripsi |
   | ------ | ------ |
   | 1 | Semua interface dan fungsi menggunakan Bahasa Indonesia |
   | 2 | Perangkat Lunak dapat dipakai di semua platform  OS ( Siswa, dan pelanggan ) 
 
2.4   Karakteristik pengguna
----------
Karakteristik pengguna dari perangkat lunak ini adalah pengguna langsung berinteraksi dengan sistem tanpa harus dihubungkan dengan hak akses atau level autentikasi.

2.5   Batasan-batasan
----------
- Perangkat lunak web hanya dijalankan di windows (7,8,10). 
- Waktu pengembangan perangkat lunak yang singkat membuat adanya kemungkinan tidak semua fungsi yang ada dapat dilaksanakan.

2.6   Asumsi-asumsi
----------
Maksimal penginputan id atau memasukkan kode pada aplikasi ini adalah 9999, lebih dari itu program akan muncul peringatan"Anda telah melebihi batas maksimum".

2.7   Kebutuhan Penyeimbang
----------
Tidak ada


BAB III Requirement specification
----------
3.1 Persyaratan Antarmuka Eksternal
----------
Salah satu cara mengakses aplikasi ini yaitu dengan hak akses yang didapatkan melalui register sistem, login melalui aplikasi ini dengan mencantumkan username  dan password kemudian sistem akan mencocokkan username dan password yang ada pada database. Setelah login berhasil Siswa dapat melihat data-data dari pelanggan, cucian pelanggan, dan pesanan.
      
3.2 Functional Requirement
----------
Logika Struktur terdapat pada bagian 3.3.1
      
**3.2.1 Siswa Register**

|  |  |
|--|--|
| Nama Fungsi | Register |
| Xref | Bagian 2.2.1, Register Siswa |
| Trigger | Membuka sistem pengelolaan laundry SMK Negeri 1 Pekanbaru |
| Precondition | Halaman Register |
| Basic Path | 1. Siswa mengisi form register dengan username dan password <br> 2.Siswa mengklik tombol regis <br> 3. Sistem melakukan validasi regis <br> 4. Bila sukses sistem akan mengarahkan ke halaman login <br> 5. Bila gagal sistem akan menampilkan peringatan |
| Alternative | Tidak ada |
| Post Condition | Siswa dapat melakukan login ke SIstem Pengelolaan Laundry SMKN 1 Pekanbaru |
| Exception Push | Username dan password salah |
      
**3.2.2 Siswa Login**

|  |  |
|--|--|
| Nama Fungsi | Login |
| Xref | Bagian 2.2.2, Login Siswa |
| Trigger | Membuka sistem pengelolaan laundry SMK Negeri 1 Pekanbaru |
| Precondition | Sudah melakukan register |
| Basic Path | 1. Siswa mengisi form login dengan username dan password yang sudah diregis <br> 2. Siswa mengklik tombol login <br>3. Sistem melakukan validasi regis <br> 4. Bila sukses sistem akan mengarahkan ke halaman utama. <br> 5. Bila gagal sistem akan menampilkan peringatan |
| Alternative | Tidak ada |
| Post Condition | Siswa dapat masuk ke SIstem Pengelolaan Laundry SMKN 1 Pekanbaru dengan akun yang sudah ada |
| Exception Push | Username dan password salah |
   
   
**3.2.3 Siswa Mengelola data cucian pelanggan**

|  |  |
|--|--|
| Nama Fungsi | Mengelola data cucian pelanggan |
| Xref | Bagian 2.2.3, Siswa Mengelola data cucian pelanggan |
| Trigger | Membuka bagian pengelolaan data cucian pelanggan pada sistem |
| Precondition | Sudah ada yang melakukan pemesanan dan data pelanggan sudah ada |
| Basic Path | 1. Siswa sudah masuk kedalam sistem dalam keadaan login <br> 2. Siswa membuka bagian data cucian pelanggan <br> 3. Siswa dapat mengelola data cucian dari pelanggan yang sudah melakukan pemesanan |
| Alternative | Tidak ada |
| Post Condition | Data cucian pelanggan dapat dikelola oleh Siswa |
| Exception Push | Input data cucian pelanggan diluar dari yang disediakan |
   
**3.2.4 Siswa Mengelola data pesanan**

|  |  |
|--|--|
| Nama Fungsi | Mengelola data cucian |
| Xref | Bagian 2.2.4, Siswa mengelola data pesanan |
| Trigger | Membuka bagian pengelolaan data pesanan pada sistem |
| Precondition | Sudah ada yang melakukan pemesanan dan data pelanggan sudah ada |
| Basic Path | 1. Siswa sudah masuk kedalam sistem dalam keadaan login <br> 2. Siswa membuka bagian data pesanan <br> 3. Siswa dapat mengelola data pesanan yang sedang ada, yang berisikan detail pemesanan dan juga status dari pemesanan|
| Alternative | Tidak ada |
| Post Condition | Data pesanan dapat dikelola oleh Siswa |
| Exception Push | Input data pesanan diluar dari yang disediakan |

**3.2.5 Siswa Mengelola Data Barang**

|  |  |
|--|--|
| Nama Fungsi | Mengelola Data Barang |
| Xref | Bagian 2.2.5, Siswa Mengelola Data Barang |
| Trigger | Membuka bagian inventori pada sistem pengelolaan laundry SMK Negeri 1 Pekanbaru |
| Precondition | Halaman Utama |
| Basic Path | 1. Siswa sudah memilih bagian inventori pada sistem <br> 2. Siswa klik bagian Kelola Data Barang pada side bar <br> 3. Sistem dapat melakukan pengelolaan data barang yang ada pada sistem|
| Alternative | Tidak ada |
| Post Condition | Data Barang dapat dikelola oleh siswa|
| Exception Push | Inputan Pengelolaan diluar limit |

**3.2.6 Siswa Mengelola Stok Barang**

|  |  |
|--|--|
| Nama Fungsi | Mengelola Stok Barang |
| Xref | Bagian 2.2.6, Siswa Mengelola Stok Barang |
| Trigger | Membuka bagian inventori pada sistem pengelolaan laundry SMK Negeri 1 Pekanbaru |
| Precondition | Halaman Utama |
| Basic Path | 1. Siswa sudah memilih bagian inventori pada sistem <br> 2. Siswa klik bagian Kelola Stok Barang pada side bar <br> 3. Sistem dapat melakukan pengelolaan stok barang yang ada pada sistem|
| Alternative | Tidak ada |
| Post Condition | Stok Barang dapat dikelola oleh siswa|
| Exception Push | Inputan Pengelolaan diluar limit |

**3.2.7 Siswa Melihat laporan Barang**

|  |  |
|--|--|
| Nama Fungsi | Melihat laporan Barang |
| Xref | Bagian 2.2.7, Siswa melihat laporan Barang |
| Trigger | Membuka bagian inventori pada sistem pengelolaan laundry SMK Negeri 1 Pekanbaru |
| Precondition | Halaman Utama |
| Basic Path | 1. Siswa sudah memilih bagian inventori pada sistem <br> 2. Siswa klik bagian laporan Barang pada side bar <br> 3. Siswa dapat melihat laporan  barang yang ada pada sistem|
| Alternative | Tidak ada |
| Post Condition | Stok Barang dapat dikelola oleh siswa|
| Exception Push | Tidak ada |

**3.2.8 Pelanggan Register**

|  |  |
|--|--|
| Nama Fungsi | Register |
| Xref | Bagian 2.2.8, Register Pelanggan |
| Trigger | Membuka sistem pengelolaan laundry SMK Negeri 1 Pekanbaru |
| Precondition | Halaman Register |
| Basic Path | 1. Pelanggan mengisi form register dengan username dan password <br> 2. Pelanggan mengklik tombol regis <br> 3. Sistem melakukan validasi regis <br> 4. Bila sukses sistem akan mengarahkan ke halaman login <br> 5. Bila gagal sistem akan menampilkan peringatan |
| Alternative | Tidak ada |
| Post Condition | Pelanggan dapat melakukan login ke SIstem Pengelolaan Laundry SMKN 1 Pekanbaru |
| Exception Push | Username dan password salah |


**3.2.9  Pelanggan Login**

|  |  |
|--|--|
| Nama Fungsi | Login |
| Xref | Bagian 2.2.9, Login Pelanggan |
| Trigger | Membuka sistem pengelolaan laundry SMK Negeri 1 Pekanbaru | 
| Precondition | Sudah melakukan register |
| Basic Path | 1. Pelanggan mengisi form login dengan username dan password yang sudah diregis <br> 2. Pelanggan mengklik tombol login <br> 3. Sistem melakukan validasi regis <br> 4. Bila sukses sistem akan mengarahkan ke halaman utama <br> 5. Bila gagal sistem akan menampilkan peringatan  |
| Alternative | Tidak ada |
| Post Condition | Pelanggan dapat masuk ke SIstem Pengelolaan Laundry SMKN 1 Pekanbaru dengan akun yang sudah ada |
| Exception Push | Username dan password salah |

**3.2.10 Pelanggan mengecek status cucian**

|  |  |
|--|--|
| Nama Fungsi | Cek status cucian |
| Xref | Bagian 2.2.10,  Pelanggan mengecek status cucian |
| Trigger | Membuka bagian cek status data pesanan pada sistem | 
| Precondition | Pelanggan masih memiliki pesanan yang belum selesai |
| Basic Path | 1. Pelanggan sudah masuk kedalam sistem dalam keadaan login <br> 2. Pelanggan membuka bagian data pesanan <br> 3. Pelanggan dapat melihat status dari pemesanan apakah sudah selesai ataupun belum |
| Alternative | Tidak ada |
| Post Condition | Status diketahui oleh pelanggan |
| Exception Push | - |

**3.2.11 Pelanggan melihat detail cucian**

|  |  |
|--|--|
| Nama Fungsi | Melihat detail cucian |
| Xref | Bagian 2.2.11,  Pelanggan melihat detail cucian |
| Trigger | Membuka bagian details pemesanan | 
| Precondition | Pelanggan masih memiliki pesanan yang belum selesai |
| Basic Path | 1. Pelanggan sudah masuk kedalam sistem dalam keadaan login <br> 2. Pelanggan membuka bagian data pesanan <br> 3. Pelanggan dapat melihat detail dari pemesanan yang sudah dipesan |
| Alternative | Tidak ada |
| Post Condition | Details pemesanan dapat dilihat |
| Exception Push | - |
   
3.3 Struktur Detail Kebutuhan Non-Fungsional
----------
**3.3.1 Logika Struktur Data**
Struktur data logika pada sistem Pengelola laundry yang terdapat struktur Database yang dijelaskan menggunakan ERD.

![enter image description here](https://github.com/Montisma/Sistem-Pengelolaan-Laundry/blob/b95acb52443183c6af8066c4b234a1ac5636fbb3/Image/ERD.png)

**Tabel Admin**

| Data Item | Type | Deskripsi |
| ------ | ------ | ------ |
| id | Int | id dari admin |
| username | Varchar | Username dari admin |
| password | Varchar | Password dari username admin |
| email | Varchar | Email admin yang digunakan untuk login |

**Tabel Pelanggan**

| Data Item | Type | Deskripsi |
| ------ | ------ | ------ |
| id | Int | ID dari pelanggan|
| username | Varchar | Username dari pelanggan|
| password | Varchar | Password dari username pelanggan|
| email | Varchar | Email pelanggan yang digunakan untuk membuat akun |
| no_hp | Int | Nomor Hp dari pelanggan |

**Tabel List_harga**

| Data Item | Type | Deskripsi |
| ------ | ------ | ------ |
| id_list | Varchar | ID dari list harga |
| jenis_cucian | Varchar | Jenis Cucian |
| harga | Varchar | Harga cucian |

**Tabel Pesanan**

| Data Item | Type | Deskripsi |
| ------ | ------ | ------ |
| id_pesanan | Int | ID dari pesanan yang dibuat|
| berat | Int | Berat dari suatu pesanan|
| status | Varchar | Status dari suatu pesanan (selesai, belum selesai)|
| tanggal_pemesanan | Date | Tanggal waktu pemesanan dibuat |
| jenis_cucian | Varchar | Jenis cucian yang dipesan|
| harga | Int | Harga cucian yang dipesan|

**Tabel Barangs**

| Data Item |	Type |	Deskripsi |
| ------ | ------ | ------ |
| id	| Int | ID dari barang |
| nama |	varchar	| Nama dari barang |
| quantity	| varchar	| Jumlah barang yang diinputkan |
| satuan	| varchar	| Satuan barang yang diinputkan |
| harga	| Int	| Harga barang yang diinputkan |

**Tabel Barang_masuks**

| Data Item |	Type |	Deskripsi |
| ------ | ------ | ------ |
| id	| Int | ID dari barang masuk |
| nama |	varchar	| Nama dari barang masuk |
| quantity	| varchar	| Jumlah barang masuk yang diinputkan |
| satuan	| varchar	| Satuan barang masuk yang diinputkan |
| tanggal_masuk	| Date	| Tanggal barang masuk yang diinputkan |

**Tabel Barang_keluars**

| Data Item |	Type |	Deskripsi |
| ------ | ------ | ------ |
| id	| Int | ID dari barang keluar |
| nama |	varchar	| Nama dari barang keluar |
| quantity	| varchar	| Jumlah barang keluar yang diinputkan |
| satuan	| varchar	| Satuan barang keluar yang diinputkan |
| tanggal_keluar	| Date	| Tanggal barang keluar yang diinputkan |

**Job Desc**
----------

BAB 1 Pendahuluan <br>
1.1 Tujuan : Jimmy <br>
1.2 Lingkup : Jimmy <br>
1.3 Akronim, singkatan, definisi : Felix <br>
1.4 Referensi : Felix <br>
1.5 Overview : Felix <br>
BAB 2 Gambaran Umum <br>
2.1 Perspektif Produk : Jimmy & Humberto <br>
2.1.1 Antarmuka Sistem  : Jimmy & Humberto <br>
2.1.2 Antarmuka pengguna : Humberto <br>
2.1.3 Antarmuka perangkat keras : Jimmy & Felix <br>
2.1.4 Antarmuka perangkat lunak : Felix <br>
2.1.5 Antarmuka Komunikasi : Jimmy <br>
2.1.6 Batasan memori : Jimmy <br>
2.1.7 Operasi-operas : Humberto <br>
2.1.8 Kebutuhan adaptasi : Felix 
2.2 Spesifikasi Kebutuhan fungsional : Jimmy & Humberto <br>
2.3 Spesifikasi Kebutuhan non-fungsional : Felix & Jimmy <br>
2.4 Karakteristik pengguna : Humberto & Felix <br>
2.5 Batasan-batasan : Humberto & Felix <br>
2.6 Asumsi-asumsi : Jimmy <br>
2.7 Kebutuhan Penyeimbang : Felix & Humberto <br>
BAB III Requirement specification <br>
3.1 Persyaratan Antarmuka Eksternal : Jimmy <br>
3.2 Functional Requirement : Jimmy <br>
3.3 Struktur Detail Kebutuhan Non-Fungsional : Humberto & Jimmy <br>
FIGMA : Humberto <br>
GitHub : Jimmy & Humberto
