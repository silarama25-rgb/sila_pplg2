  <?php
$nama = "Sila Ramadani";
$panggilan = "Sila";
$tempat_lahir = "Semarang";
$tanggal_lahir = 5;
$bulan_lahir = 9;
$tahun_lahir = 2009;

$tahun_sekarang = date("Y");
$umur = $tahun_sekarang - $tahun_lahir;

$alamat = "Jl.Wonosari Barat No.55";
$cita = "Programmer Sukses";
$hobi = ["memasak", "Membaca", "Design"];
$skills =  ["HTML"=>85, "CSS"=>73, "PHP"=>80, "MySQL"=>83];
$gender = "Perempuan";
$agama = "Islam";
$pendidikan = "SMK";
$kewarganegaraan = "Indonesia";
$no_wa = "0882005643412";
$email = "silarama25@gmail.com";
$makanan_fav = ["Nasi Goreng", "Mie Ayam", "Bakso"];
$minuman_fav = ["Es Teh", "Jus Mangga", "Jus alpukat"];

$tahun_10 = $tahun_sekarang + 10;
$umur_10 = $umur + 10;
?>

<!DOCTYPE html>
<html>
<head>
<title>Biodata</title>
<style>
body{
    background: #FFD54F;
    font-family: Arial;
    margin:20px;
}
.container{
    background:white;
    padding:25px;
    border-radius:20px;
}
h1{
    color:darkorange;
}
.icon{
    font-size:30px;
}
.marquee{
    background:orange;
    color:white;
    padding:10px;
    border-radius:20px;
    font-weight:bold;
}
.highlight{
    color:red;
    font-weight:bold;
}
</style>
</head>
<body>

<div class="marquee">
<marquee>MOTTO HIDUP: Jangan Menyerah Sebelum Sukses</marquee>
</div>

<div class="container">

<h1>🌻 BIODATA SISWA 🌻</h1>
<img src="WhatsApp Image 2026-02-24 at 20.27.04.png" alt="foto"> 
<p><b style="color:black;"><div class="item"><i class="fa-solid fa-user">👑</i>Nama:</b> <?php echo $nama; ?>
<p><b style="color:black;"><div class="item"><i class="fa-solid fa-user">🌻</i>Nama Panggilan:</b> <?php echo $panggilan; ?></p>
<p><b style="color:black;"><div class="item"><i class="fa-solid fa-user">🎂</i>Tempat, Tanggal Lahir:</b> <?php echo $tempat_lahir.", ".$tanggal_lahir."-".$bulan_lahir."-".$tahun_lahir; ?></p>
<p><b style="color:black;"><div class="item"><i class="fa-solid fa-user">📅</i>Umur:</b> <?php echo $umur; ?> Tahun</p>
<p><b style="color:black;"><div class="item"><i class="fa-solid fa-user">🏡</i>Alamat:</b> <?php echo $alamat; ?></p>
<p><b style="color:black;"><div class="item"><i class="fa-solid fa-user">📧</i>Email:</b> <?php echo $email; ?></p>
<p><b style="color:black;"><div class="item"><i class="fa-solid fa-user">📱</i>No WA:</b> <?php echo $no_wa; ?></p>

<h3 style="color:brown;">Skills (Range)</h3>
<?php foreach($skills as $s){ ?>
<p><?php echo $s; ?><input type="range" min="0" max="100" value="80"></p>
<?php } ?>

<h3 style="color:brown;">Hobi</h3>
<ol style="List Bernomor">
<?php
foreach($hobi as $h){
    echo "<li>$h</li>";
}
?>
</ol>

<h3 style="color:brown;">Makanan Favorit</h3>
<ul style="list-style-type:square;">
<?php
foreach($makanan_fav as $m){
    echo "<li>$m</li>";
}
?>
</ul>

<h3 style="color:brown;">Minuman Favorit</h3>
<ol type="A">
<?php
foreach($minuman_fav as $min){
    echo "<li>$min</li>";
}
?>
</ol>

<h3 style="color:brown;">Riwayat Pendidikan</h3>
<table border="1" cellpadding="10">
<tr>
<th>Tingkat</th>
<th>Nama Sekolah</th>
<th>Tahun Masuk</th>
<th>Tahun Lulus</th>
</tr>
<tr>
<td>SD</td>
<td>SDN Wonosari 03 Semarang</td>
<td>2016</td>
<td>2022</td>
</tr>
<tr>
<td>SMP</td>
<td>SMPN 28 Semarang</td>
<td>2022</td>
<td>2025</td>
</tr>
<tr>
<td>SMK</td>
<td>SMKN 8 Semarang</td>
<td>2026</td>
<td>2028</td>
</tr>
</table>

<h3 style="color:orenge;">10 Tahun Lagi</h3>
<p>Hai namaku <?php echo $panggilan; ?>, sekarang umurku <?php echo $umur; ?> tahun.
10 tahun lagi di tahun <?php echo $tahun_10; ?> umurku <?php echo $umur_10; ?> tahun.
Aku ingin menjadi <?php echo $cita; ?> agar membagagakan orang tua.</p>
<br>
<a href="jadwal.php">Lihat Jadwal Pelajaran</a> |

</div>
</body>
</html>