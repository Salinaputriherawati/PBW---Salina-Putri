<?php
$nilai = 75;
if ($nilai >= 80) {
   echo "Nilai A";
} elseif ($nilai >= 70) {
   echo "Nilai B";
} else {
   echo "Nilai C";
}


//Contoh implementasi if dua kondisi
$umur = 20;
$ktp = true;
if ($umur >= 17 && $ktp) {
   echo "Boleh memilih";
}

//Kondisi if dapat digunakan untuk validasi inputan pengguna, seperti melakukan filtering data yang kosong
if (!empty($_POST['nama'])) {
 echo "Nama: " . htmlspecialchars($_POST['nama']);
} else {
 echo "Nama tidak boleh kosong!";
}

?>