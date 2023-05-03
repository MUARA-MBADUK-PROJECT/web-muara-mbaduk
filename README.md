![alt text](https://github.com/MUARA-MBADUK-PROJECT/web-muara-mbaduk/blob/main/resources/images/logo-hitam.png)

# Web Frontend untuk Aplikasi Muarabaduk
Selamat datang di repository "Muara Mbaduk"! Repository ini berisi tampilan web frontend untuk aplikasi MuaraMBaduk yang dibangun dengan menggunakan teknologi HTML, CSS, dan JavaScript. Repository ini disiapkan untuk membantu Anda memulai pengembangan aplikasi dengan tampilan web yang sesuai dengan kebutuhan proyek. Harapannya, repository ini dapat membantu mempercepat proses pengembangan aplikasi dan mempermudah proses pelatihan atau onboarding bagi developer baru di masa depan. Jangan ragu untuk berkontribusi atau mempelajari cara kerja tampilan web yang kami gunakan.
## Persyaratan Teknis

 - PHP 8.1
 - composser
 - node js


## Instruksi Instalasi
 1. Clone repository dari GitHub dengan menjalanakan perintah dibawah ini menggunakan terminal atau command prompt jika anda menggunakan windows 

> `git clone https://github.com/MUARA-MBADUK-PROJECT/web-muara-mbaduk.git`


 2. Masuk ke directory tempat anda meng clone repository dengan menjalankan sytax 

> `cd <nama-folder-repository>`

atau langsung membukanya melalui file manager.

 3. Salin file .env.example ke fiel bernama .env. langkah ini juga dapat dilakukan dengan menjalankan command 

> `cp .env.example .env`

 4. lalu install dependency yang diperlukan dengan menjalankan perintah 

> `commposer install`

 dan 

> `npm install`

## Instruksi Menjalankan pada environtment local/dev

 1. jalankan server dengan menjalankan command

>  `php artisan serve`

 2. buka terminal baru lalu jalankan juga vite untuk secara otomatis membangun asset yang ada di repository resource kedalam repository build, dan akan langsung merefresh page ketika ada perubahan file. Vite dapat dijalankan dengan menjalankan command 

> `npm run dev`

## Instruksi Penggunaan
(menunggu aplikasi selesai)



## Intruksi Pengembangan
Untuk instruksi pengembangan, pada aplikasi ini menggunakan framework yang populer dan terdokumentasi dengan baik pada websitenya dengan baik. Link dokumentasi dari framework yang digunakan ada dawah ini

### Pihak Ketiga
Aplikasi ini menggunakan beberapa pihak ketiga untuk membantu mempercepat dalam pengembangannya. beberapa pihak ketiga yang digunakan pada aplikasi ini 

|nama|link dokumentasi  |
|--|--|
| laravel 10 | (https://laravel.com/docs/10.x) |
| tailwind 3.3.1 | (https://tailwindcss.com/docs)|
| api muarambaduk|(https://documenter.getpostman.com/view/8080574/2s93Y5Nexc)|

### Bekerja Dengan Tailwind
Aplikasi ini menggunakan framework css **tailwind** untuk pihak ketiga pada stylingnya, sehingga diperlukan **vite** yang akan secara otomatis mengambil utility yang diperlukan berdasarkan class class yang digunakan pada file fiel yang didaftarkan pada file `tailwind.config.js`, sehingga file css yang ada pada build tidak akan membengkak. Untuk configurasi dari tailwind bisa anda lihat pada dokumentasi tailwind [Install Tailwind CSS with Laravel - Tailwind CSS](https://tailwindcss.com/docs/guides/laravel)

### Pembuatan Route
Cara pembuatan route pada aplikasi ini tertulis pada dokumentasi laravel https://laravel.com/docs/10.x/routing.

Saya sangat menyarankan anda untuk memberikan nama pada setiap route yang anda buat untuk memudahkan dalam menggenerate url pada aplikasi, cara penamaan route dapat anda lihat pada dokumentasi laravel ini [Routing - Laravel - The PHP Framework For Web Artisans](https://laravel.com/docs/10.x/routing#named-routes). Dengan memberikan nama pada setiap route anda dapat menggenerate url dengan method 

> `route('name')//`

atau melakukan redirect dengan cara

> `return  redirect()->route('profile');`
> `return  to_route('profile');`



### Penempatan view blade
seperti yang tertera pada dokumentasi laravel, repository untuk penempatan view terdapat pada repository `/resourece/views`. Pada repository tersebut terdapat sub sub repository 

 - component, berisi component blade templat Lebih lengkapnya bisa anda baca pada  dokumentasi laravel tepatnya ada di bagian the `basics/blade templates/components` [Blade Templates - Laravel - The PHP Framework For Web Artisans](https://laravel.com/docs/10.x/blade#components)
 - layouts, berisi layout html view yang digunakan pada palikasi. Lebih lengkapnya ada pada dokumentasi laravel ada di bagian `basics/blade templates/building layouts` [Blade Templates - Laravel - The PHP Framework For Web Artisans](https://laravel.com/docs/10.x/blade#building-layouts)
 - guest, berisi view yang dapat diakses oleh guest (pengunjung web yang tidak melakukan login)
 - transaction,  berisi view untuk melakukan transaksi pada aplikasi
 - user, berisi view yang hanya dapat diakses oleh user yang telah melakukan login

### Penempatan asset
Pada aplikasi ini sangat disarankan untuk meletakan asset yang akan digunakan pada directory **public/resources**. Pada directory **resource** tersebut juga telah ada beberapa sub sub directory sebagai acuan anda dalam peletakan asset.

Untuk pengambilan url dari asset tersebut dapat menggunakan static method 

> `Vite::asset("[url directory dari root]")`

 contoh 

> `Vite::asset("resources\images\logo-muara-mbaduk.png")`

### Pembuatan Component
Seperti pada documentasi laravel [Blade Templates - Laravel - The PHP Framework For Web Artisans](https://laravel.com/docs/10.x/blade#components), untuk membuat commponent dapat menggunakan command artisan

> `php artisan  make:component  repository/NamaComponent`

pada pembuatan component saya sangat menyarangkan untuk menggunakan camlecase untuk nama dari component, karenan jika tidak menggunakan camlecase ada kemungkinan terjadi erro. Seperti menggunakan `-` (dash) untuk memisahkan kata, pada class `app/view/component` akan terjadi error.

Hal ini mungkin di beberapa mesin tidak akan menampilkan erro, namun ada beberapa mesin akan menampilkan eror.
### Deployment
(masih dalam pengembangan)





## Kontributor
|nama|github|email|
|--|--|--|
| Bachtiar Arya Habibie | [BachtiarAH](https://github.com/BachtiarAH) |bachtiarah73@gmail.com|
|Edo |[11edomantolas](https://github.com/11edomantolas)|email mu do|




