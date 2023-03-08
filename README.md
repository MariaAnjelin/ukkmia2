# Aplikasi Laundry berbasis Web
Aplikasi ini dibangun menggunakan PHP versi 7 dengan framework CodeIgniter 3, dan Maria DB.
___

## Tampilan Aplikasi
![ss](assets/ss1.png) // Halaman Lending Page
![ss](assets/ss2.png) // Halaman Registerasi
![ss](assets/ss3.png) // Halaman Login
![ss](assets/ss4.png) // Halaman Dashboard
![ss](assets/ss5.png) // Halaman Data Outlet
![ss](assets/ss6.png) // Halaman Data Paket
![ss](assets/ss7.png) // Halaman Data Member
![ss](assets/ss8.png) // Halaman Data User
![ss](assets/ss9.png) // Halaman Tambah Transaksi
![ss](assets/ss10.png) // Halaman Riwayat Transaksi
![ss](assets/ss11.png) // Halaman Data Laporan

___

## Fitur-fitur:
- Login
- Logout
- Registrasi Pelanggan
- CRUD Outlet
- CRUD produk/paket cucian
- CRUD pengguna
- Entri transaksi
- Generate laporan
___

## Akun:
Jabatan akun dibagi menjadi 3 yaitu: administrator, kasir, dan owner.
Untuk mengakses akun, pada bagian akhir url bisa ditambahkan auth/. misal: http://localhost/ukkmiaa2/
|    Level              |       Username      | Password |
|:---------------------:|:-------------------:|:--------:|
| Administrator         | admin               |  admin   |
| Kasir                 | kasir               |  kasir   |
| Owner                 | owner               |  owner   |

1. Administrator dapat mengakses semua fitur yang ada
2. Kasir hanya dapat mengakses data tambah transaksi dan data riwayat transkasi
3. Owner hanya dapat mengakses data laporan
___

## Database
database terdapat dalam folder databases. nama database nya adalah ukkmiaa2
___