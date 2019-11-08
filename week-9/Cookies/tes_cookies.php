<?php setcookie("test_cookie", "test", time() + 3600, '/'); ?>
<html>
<body>
<?php if(count($_COOKIE) > 0) {
	echo "Cookies enabled.";
} else {
	echo "Cookies disabled.";
} ?>
<!-- analisis disini -->
<!--
Fungsi setcookie dapat menerima 7 parameter, namun hanya parameter pertama
saja (nama_cookie) yang harus diisi (required).

-Nama cookie : yang berisi nama cookie.

-Nilai cookie : data yang akan disimpan yang merujuk pada nama cookie (nomor 1).

-Expire : Kapan cookie akan berakhir.  Format waktu berupa Unix timestamp, yang pada PHP kita buat dengan menggunakan fungsi time().
Jika nilai expire dikosongkan atau bernilai 0, maka data cookie akan expire/dihapus ketika browser ditutup (ketika session berakhir).

-Path : Path/Lokasi pada server di mana cookie dapat digunakan. Jika diisi tanda slash ‘/’, maka cookie dapat digunakan diseluruh bagian website.
Jika diisi nilai tertentu, misal ‘/blog/’, maka cookie hanya dapat digunakan pada direktori blog dan subdirektorinya, misal: ‘/blog/archive/’ .
Jika nilai dikosongkan, maka lokasi akan merujuk ke direktori dimana cookie di buat

-Domain : subdomain dimana cookie dapat digunakan.
Jika nilainya kosong, maka cookie akan berlaku pada seluruh bagian domain namun tidak pada subdomainnya.

-Secure : Default false. Jika true, browser akan mengirim cookie ke websever hanya jika koneksi berbentuk HTTPS.

-Httponly : Default false. Cookie hanya dapat diakses hanya melalui protokol http.

-->

</body>
</html>